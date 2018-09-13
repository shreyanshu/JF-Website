<?php
/**
 * Created by PhpStorm.
 * User: pathaksabin88
 * Date: 3/14/18
 * Time: 1:55 PM
 */
include "../functions.php";
include "../database/DB_CONNECT.php";
session_start();
redirectIfNotLoggedIn();
include "../include/adminHeader.php";
if($_SESSION['role']=='SUPERADMIN'){
    $select_all_query = "SELECT registration_number from register";
    $select_all_result = $dbLink->query($select_all_query);
    $reg_all_user_count = 0;
    while($row = $select_all_result->fetch_assoc())
    {
        $reg_all_user_count = $reg_all_user_count + 1;
    }
    $select_graduated_query = "SELECT registration_number from register WHERE graduated = 'yes'";
    $select_graduated_result = $dbLink->query($select_graduated_query);
    $reg_graduated_user_count = 0;
    while($row = $select_graduated_result->fetch_assoc())
    {
        $reg_graduated_user_count = $reg_graduated_user_count + 1;
    }
    $select_nongraduated_query = "SELECT registration_number from register WHERE graduated = 'no'";
    $select_nongraduated_result = $dbLink->query($select_nongraduated_query);
    $reg_nongraduated_user_count = 0;
    while($row = $select_nongraduated_result->fetch_assoc())
    {
        $reg_nongraduated_user_count = $reg_nongraduated_user_count + 1;
    }
?>
<div class="container">
    <div class="row">
        <div class="text-center text-bold text-info col-md-12">Registered Participants Counts</div>
        <div class="col-md-4">
            Total : <?php echo $reg_all_user_count ?>
        </div>
        <div class="col-md-4">
            Graduated : <?php echo $reg_graduated_user_count ?>
        </div>
        <div class="col-md-4">
            Non-Graduated : <?php echo $reg_nongraduated_user_count ?>
        </div>
    </div>
    <br>
    <div class="row">
        <?php if(isset($_SESSION["message"])){
            if($_SESSION['messageType']=='error'){?>
                <span class="text-danger smalltext"><?php echo $_SESSION["message"] ?></span>
            <?php }else{ ?>
                <span class="text-success smalltext"><?php echo $_SESSION["message"] ?></span>
            <?php } unset($_SESSION["message"]);unset($_SESSION["messageType"]); } ?>
        <div class="col-md-6 no-pad">
            <a href="./displayAllData.php">
                <div class="jumbotron -align-center">
                    <img src="../img/2017/13.jpg"/>
                    <br>
                    <div class="displayTag">  <h4 class="text-center displayTab"> <strong> Display All Registered Participants </strong></h4> </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 no-pad">
            <a href="displayAllCompany.php">
                <div class="jumbotron -align-center">
                    <img src="../img/2017/31.jpg" style="height:397px;width: 516px;"/>
                    <div class="displayTag">  <h4 class="text-center displayTab"><strong> Display All Registered Companies </strong> </h4> </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php }else{ ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a href="./displayAllData.php">
                <div class="jumbotron -align-center">
                    <img src="../img/2017/13.jpg"/>
                    <br>
                    <div class="displayTag">  <h4 class="text-center displayTag"> <strong> Display All Registered Participants </strong></h4> </div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php } ?>
<?php include "../include/adminFooter.php" ?>

