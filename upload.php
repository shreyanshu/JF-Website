<?php
/**
 * Created by PhpStorm.
 * User: Sumit
 * Date: 5/1/2017
 * Time: 8:07 PM

$allowedExts = array("pdf");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (($_FILES["file"]["type"] == "application/pdf")
|| ($_FILES["file"]["type"] == "application/doc")
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
{
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
}
else
{
$upload=$_FILES["file"]["name"] ;
$size=$_FILES["file"]["size"] ;
$type=$_FILES["file"]["type"] ;

header("Location: index.php?upload=$upload && type=$type && size=$size#register");
if (file_exists("upload/" . $_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"] . " already exists. ";
}
else
{
move_uploaded_file($_FILES["file"]["tmp_name"],
"uploads/" . $_FILES["file"]["name"]);
echo "Stored in: " . "uploads/" . $_FILES["file"]["name"];
}
}
}
else
{
$invalid =  "Invalid file";
header("Location: index.php?upload=$invalid#register");
}
 * */
/* phpinfo();*/?><!--
-->



<?php


include "functions.php";
include "database/DB_CONNECT.php";

$allowedExts = array("pdf", "doc");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if(isset($_POST['register']))
    $names = $_POST['name'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$colleges = $_POST['college'];
$college = addslashes($colleges);
$yes = 'unchecked';
$no = 'unchecked';
$graduate = $_POST['graduate'];

if ($graduate == 'yes') {
    $yes = 'checked';
}else if ($graduate == 'no') {
    $no = 'checked';
}
/*$dbLink = new mysqli('127.0.0.1', 'root', '', 'jobfair');*/
$phone_query = "SELECT * FROM register WHERE phoneno = '$phoneno'";
$phone_result = $dbLink->query($phone_query);
if($phone_result->num_rows>0){
    $invalid = "Already Registered With This Phone-Number";
    header("Location: index.php?invalid=$invalid#register");
}else{
    if(isset($_FILES['file'])) {
        if (($_FILES["file"]["type"] == "application/pdf") && in_array($extension, $allowedExts)){
            if ($_FILES['file']['error'] == 0) {
                // Connect to the database
                if (mysqli_connect_errno()) {
                    die("MySQL connection failed: " . mysqli_connect_error());
                }
                $fileName = $_FILES["file"]["name"];
                $dst = "uploads/".$fileName;
                move_uploaded_file($_FILES["file"]["tmp_name"],$dst);
                $name = $dbLink->real_escape_string($_FILES['file']['name']);
                $mime = $dbLink->real_escape_string($_FILES['file']['type']);
                $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['file']['tmp_name']));
                $size = intval($_FILES['file']['size']);
                if ($size < 10485576) {
                    // Create the SQL query
                    $get_reg_query = "SELECT max(registration_number) as reg_no from register";
                    $reg_result = $dbLink->query($get_reg_query);
                    $curr_reg_number = 1100;
                    while($row = $reg_result->fetch_assoc()) {
                        $curr_reg_number = $row['reg_no'];
                        if($curr_reg_number==0){
                            $curr_reg_number = 1100;
                        }
                    }
                    $new_reg_number = $curr_reg_number + 1;
                    $query = " INSERT INTO register (names,email,phoneno,college,graduated,cv_data,cv_name,cv_mime,cv_size,filePath,created,registration_number)
              VALUES ('$names', '$email','$phoneno', '$college','$graduate', '$data','$name', '$mime',$size,'$dst',NOW(),$new_reg_number
            )";
                    $result = $dbLink->query($query);
                    if ($result) {
                        $success = "Successfully Registered !! ";
                        sendParticipantsMail($names,$email,$new_reg_number);
                        header("Location: registerSuccess.php?reg_no=$new_reg_number");
                    } else {
                        $invalid = "Invalid Registration";
                        header("Location: index.php?register=$invalid#register");
                    }
                }
            }}
        else {
            $invalid = "Invalid File";
            header("Location: index.php?register=$invalid#register");
        }
        $dbLink->close();
    }
}

?>

