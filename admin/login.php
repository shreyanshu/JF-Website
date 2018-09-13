<?php
/**
 * Created by PhpStorm.
 * User: pathaksabin88
 * Date: 3/14/18
 * Time: 12:38 PM
 */
session_start();
if(isset($_SESSION['username'])){
    header("Location: dashboard.php");
    exit;
}
include "../include/adminHeader.php";

?>
<style>
    body{
        background-image: url("../img/world-map.png");
        background-size: cover;

    }
    </style>
<div class="container">
    <div class="row" id="pwd-container">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <section class="login-form loginDesign center-block">
                <form class="form-group" role = "form" method="POST" action="./verify.php">
                    <img src="../img/logo.png" class="center-block" style="height: 200px;width: 200px;" alt="" />
                    <?php if(isset($_SESSION["message"])){
                        if($_SESSION['messageType']=='error'){?>
                            <span class="text-danger text-bold text-center"><?php echo $_SESSION["message"] ?></span>
                        <?php }else{ ?>
                            <span class="text-success smalltext"><?php echo $_SESSION["message"] ?></span>
                        <?php } unset($_SESSION["message"]);unset($_SESSION["messageType"]); } ?>
                    <input type="text" class="form-control input-lg" name="username" placeholder = "Enter Username" required>
                    <br>
                    <input type = "password" class = "form-control input-lg" name = "password" placeholder = "Enter Password" required>

                    <div class="pwstrength_viewport_progress"></div> <br>
                    <button class="btn btn-lg btn-primary btn-block" id="submit" type="submit" name="login"> Login </button>
                </form>
            </section>
        </div>

        <div class="col-md-3"></div>
    </div>
</div>
<?php include "../include/adminFooter.php" ?>




