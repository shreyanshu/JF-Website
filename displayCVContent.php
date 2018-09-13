<?php
/**
 * Created by PhpStorm.
 * User: pathaksabin88
 * Date: 3/18/18
 * Time: 9:14 PM
 */
include "database/DB_CONNECT.php";
if(isset($_POST['find_cv'])) {
    $reg_no = intval($_POST['reg_no']);

    if($reg_no < 1000) {
        die('The registration number is invalid!');
    }
    else {
        /* $dbLink = new mysqli('localhost', 'root', '', 'jobfair');
         if(mysqli_connect_errno()) {
             die("MySQL connection failed: ". mysqli_connect_error());
         }*/

        $query = "SELECT * FROM register WHERE registration_number = {$reg_no}";
        $result = $dbLink->query($query);

        if($result) {

            if($result->num_rows == 1) {
                $row = mysqli_fetch_assoc($result);
                $path = $row['filePath'];
                header("Content-Type: ". $row['cv_mime']);
                header("Content-Length: ". $row['cv_size']);
                header("Content-Disposition: inline; filename=". $row['cv_name']);
                readfile($path);
            }
            else {
                echo 'Error! No image exists with that Registration Number.';
            }
            @mysqli_free_result($result);
        }
        else {
            echo "Error! Query failed: <pre>{$dbLink->error}</pre>";
        }
        @mysqli_close($dbLink);
    }
}
else {
    echo 'Error! No Registration Number was passed.';
}
?>