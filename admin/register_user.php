<?php
/**
 * Created by PhpStorm.
 * User: pathaksabin88
 * Date: 3/14/18
 * Time: 2:15 PM
 */

include "../functions.php";
include "../database/DB_CONNECT.php";
session_start();
redirectifnotloggedin();
if(isset($_POST['save_user'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    $parts = explode("@", $email);
    $username = $parts[0];
    $original_password = $_POST['password'];
    $password = hash('md5', $_POST['password']);
   /* $dbLink = new mysqli('localhost', 'root', '', 'jobfair');

    // Connect to the database
    if (mysqli_connect_errno()) {
        die("MySQL connection failed: " . mysqli_connect_error());
    }*/

    $query = " INSERT INTO user (fullname, email, username, password, role) VALUES ('$name', '$email','$username', '$password','$role') ";

    $result = $dbLink->query($query);

    if ($result) {
        sendUserCreatedMail($name,$email,$username,$original_password,$role);
        $_SESSION['message'] = "User Added Successfully";
        $_SESSION["messageType"] = "success";
        header("Location: ./user_list.php");
    } else {
        $_SESSION['message'] = "Adding User Failed";
        $_SESSION["messageType"] = "error";
        header("Location:./add_user.php");    }

    $dbLink->close();
}
?>

