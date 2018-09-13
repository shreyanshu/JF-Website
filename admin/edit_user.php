<?php
/**
 * Created by PhpStorm.
 * User: pathaksabin88
 * Date: 3/15/18
 * Time: 11:05 AM
 */
include "../functions.php";
include "../database/DB_CONNECT.php";
session_start();
redirectIfNotLoggedIn();
if($_SESSION['role']!='SUPERADMIN'){
    $_SESSION['message'] = "You are not Authorized to Do this Action";
    $_SESSION["messageType"] = "error";
    header("Location:./dashboard.php");
    return;
}
include "../include/adminHeader.php";
/*$dbLink = new mysqli('localhost', 'root', '', 'jobfair');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}*/
$u_id = $_GET['id'];
$sql = "SELECT * FROM user where id = $u_id";
$result = $dbLink->query($sql);
if($result) {
    if($result->num_rows == 0) {
        $_SESSION['message'] = "User Not Found!";
        $_SESSION["messageType"] = "error";
        header("Location: ./dashboard.php");
        return;
    }
    else {
        while ($row = $result->fetch_assoc()){
            $fullname = $row['fullname'];
            $email = $row['email'];
            $password = $row['password'];
            $role = $row['role'];
        }
    }
}

?>
<script type="text/javascript">
    $(document).ready(function(){
        validateUser();
    });
</script>
<div id="main-content">
    <div class="container">
        <div class="wrapper">
            <h2>Edit User</h2>
            <?php if(isset($_SESSION["message"])){
                if($_SESSION['messageType']=='error'){?>
                    <span class="text-danger smalltext"><?php echo $_SESSION["message"] ?></span>
                <?php }else{ ?>
                    <span class="text-success smalltext"><?php echo $_SESSION["message"] ?></span>
                <?php } unset($_SESSION["message"]);unset($_SESSION["messageType"]); } ?>
            <form method="post" action="./update_delete.php" id="product_form_1">
                <div class="form-group">
                    <input type="hidden" name="user_id" value="<?php echo $_GET["id"];?>">
                </div>
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $fullname ?>">
                    <span class="error_name" id="error_name"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $email ?>">
                    <span class="error_email" id="error_email"></span>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="password" id="password" value="<?php echo $password ?>" >
                    <span class="error_password" id="error_password"></span>
                </div>
                <div class="form-group">
                    <label for="role">Role:</label>
                    <select name="role" required class="form-control">
                        <option value="SUPERADMIN">SUPERADMIN</option>
                        <option value="ADMIN">ADMIN</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-lg" name="update_user">Save</button>
            </form>
        </div>
    </div>
</div>
<?php include "../include/adminFooter.php" ?>
