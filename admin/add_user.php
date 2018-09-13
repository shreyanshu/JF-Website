<?php
/**
 * Created by PhpStorm.
 * User: pathaksabin88
 * Date: 3/14/18
 * Time: 12:38 PM
 */
    include "../functions.php";
    session_start();
    redirectIfNotLoggedIn();
    if($_SESSION['role']!='SUPERADMIN'){
        $_SESSION['message'] = "You are not Authorized to Do this Action";
        $_SESSION["messageType"] = "error";
        header("Location:./dashboard.php");
        return;
    }
    include "../include/adminHeader.php";
?>
<script type="text/javascript">
    $(document).ready(function(){
        validateUser();
    });
</script>
<div id="main-content">
    <div class="container">
        <div class="wrapper">
            <h2>Add User</h2>
            <?php if(isset($_SESSION["message"])){
                if($_SESSION['messageType']=='error'){?>
                <span class="text-danger smalltext"><?php echo $_SESSION["message"] ?></span>
                    <?php }else{ ?>
                    <span class="text-success smalltext"><?php echo $_SESSION["message"] ?></span>
                <?php } unset($_SESSION["message"]);unset($_SESSION["messageType"]); } ?>
            <form method="post" action="./register_user.php" id="product_form_1">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" name="name" id="name">
                    <span class="error_name" id="error_name"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" >
                    <span class="error_email" id="error_email"></span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" >
                    <span class="error_password" id="error_password"></span>
                </div>
                <div class="form-group">
                    <label for="role">Role:</label>
                    <select name="role" required class="form-control">
                        <option value="SUPERADMIN">SUPERADMIN</option>
                        <option value="ADMIN">ADMIN</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-lg" name="save_user">Save</button>
            </form>
        </div>
    </div>
</div>
<?php include "../include/adminFooter.php" ?>
