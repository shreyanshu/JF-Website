<?php
/**
 * Created by PhpStorm.
 * User: pathaksabin88
 * Date: 3/15/18
 * Time: 11:44 AM
 */

include "../functions.php";
include "../database/DB_CONNECT.php";
session_start();
redirectIfNotLoggedIn();
if($_SESSION['role']!='SUPERADMIN') {
    $_SESSION['message'] = "You are not Authorized to Do this Action";
    $_SESSION["messageType"] = "error";
    header("Location:./dashboard.php");
    return;
}
if(isset($_POST['update_user'])){
    $u_id = $_POST['user_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    $parts = explode("@", $email);
    $username = $parts[0];
   /* $dbLink = new mysqli('localhost', 'root', '', 'jobfair');

    // Connect to the database
    if (mysqli_connect_errno()) {
        die("MySQL connection failed: " . mysqli_connect_error());
    }*/

    $query = " UPDATE user SET fullname = '$name', username = '$username', email = '$email', role = '$role' WHERE id = $u_id";

    $result = $dbLink->query($query);

    if ($result) {
        $_SESSION['message'] = "User Updated Successfully";
        $_SESSION["messageType"] = "success";
        header("Location: ./user_list.php");
    } else {
        $_SESSION['message'] = "Updating User Failed";
        $_SESSION["messageType"] = "error";
        header("Location:./edit_user.php?id=$u_id");
    }
    $dbLink->close();
}

if(isset($_GET['delete_user'])){
    $u_id = $_GET['id'];

   /* $dbLink = new mysqli('localhost', 'root', '', 'jobfair');

    // Connect to the database
    if (mysqli_connect_errno()) {
        die("MySQL connection failed: " . mysqli_connect_error());
    }*/

    $query = " DELETE FROM user WHERE id = $u_id";

    $result = $dbLink->query($query);
    if ($result) {
        $_SESSION['message'] = "User Deleted Successfully";
        $_SESSION["messageType"] = "success";
        header("Location: ./user_list.php");
    } else {
        $_SESSION['message'] = "Deleting User Failed";
        $_SESSION["messageType"] = "error";
        header("Location:./user_list.php");
    }
    $dbLink->close();
}

if(isset($_GET['delete_company'])){
    $c_id = $_GET['id'];
    echo $c_id;
    /*$dbLink = new mysqli('localhost', 'root', '', 'jobfair');

    // Connect to the database
    if (mysqli_connect_errno()) {
        die("MySQL connection failed: " . mysqli_connect_error());
    }*/

    $query = "DELETE FROM register_company WHERE id = $c_id";

    $result = $dbLink->query($query);
    if ($result) {
        $dbLink->close();
        echo "Company Deleted Successfully";
        $_SESSION['message'] = "Company Deleted Successfully";
        $_SESSION["messageType"] = "success";
        header("Location: ./displayAllCompany.php");
        return;
    } else {
        $dbLink->close();
        echo "Failed to Delete";
        $_SESSION['message'] = "Deleting Company Failed and id is $c_id";
        $_SESSION["messageType"] = "error";
        header("Location:./displayAllCompany.php");
        return;
    }
}

?>