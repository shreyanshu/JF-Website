<?php
/**
 * Created by PhpStorm.
 * User: pathaksabin88
 * Date: 3/14/18
 * Time: 12:59 PM
 */
session_start();
include '../functions.php';
include "../database/DB_CONNECT.php";
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password = hash("md5",$password);
    /*$dbLink = new mysqli('localhost', 'root', '', 'jobfair');
    if(mysqli_connect_errno()) {
        die("MySQL connection failed: ". mysqli_connect_error());
    }*/
    $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result = $dbLink->query($sql);
    if($result){
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()) {
                $_SESSION["username"] = $row["username"];
                $_SESSION["fullname"] = $row["fullname"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["role"] = $row["role"];
                $_SESSION["user_id"] = $row["id"];
                header("Location:./dashboard.php");
                return;
            }
        }else{
            $_SESSION["messageType"] = "error";
            $_SESSION["message"] = "Username and Password did not match. Please try again.";
            header("Location:./login.php");
            return;
        }
    }
    $_SESSION["messageType"] = "error";
    $_SESSION["message"] = "Username and Password did not match. Please try again.";
    header("Location:./login.php");
    return;
}
if(isset($_GET['logout'])){
    session_destroy();
    $_SESSION["messageType"] = "success";
    $_SESSION["message"] = "Successfully Logged Out.";
    header("Location:./login.php");
}
if(isset($_POST['save_password'])){
    if($_POST['password'] != $_POST['re_password'])
    {
        $_SESSION['message'] = "Passwords did not match";
        header("Location: ./changePassword.php");
        return;
    }
    // $password=hash("sha256",$_POST['password']);
    $u_id = $_SESSION['user_id'];
    $new_password = $_POST['re_password'];
   /* $dbLink = new mysqli('localhost', 'root', '', 'jobfair');
    if(mysqli_connect_errno()) {
        die("MySQL connection failed: ". mysqli_connect_error());
    }*/
    $original_new_password = $new_password;
    $new_password = hash("md5",$new_password);
    $sql = "UPDATE user SET password = '$new_password' WHERE id = $u_id";
    $result = $dbLink->query($sql);
    if ($result) {
        sendUPasswordChangeMail($_SESSION['fullname'],$_SESSION['email'],$_SESSION['username'],$original_new_password);
        $_SESSION['message'] = "Password Changed Successfully";
        $_SESSION["messageType"] = "success";
        header("Location: ./verify.php?logout=logout");
    } else {
        $_SESSION['message'] = "Password Changed Failed";
        $_SESSION["messageType"] = "error";
        header("Location:./dashboard.php");
    }
    $dbLink->close();
}

?>