
<?php
/**
 * Created by PhpStorm.
 * User: Sumit
 * Date: 5/3/2017
 * Time: 7:59 AM
 */
include "../functions.php";
include "../database/DB_CONNECT.php";
session_start();
redirectIfNotLoggedIn();
if($_SESSION['role']=='SUPERADMIN'){
    include "../include/adminHeader.php";
    ?>


    <div class="container">
        <h2 class="text-center" >Registered Companies</h2>
        <?php if(isset($_SESSION["message"])){
            if($_SESSION['messageType']=='error'){?>
                <span class="text-danger smalltext"><?php echo $_SESSION["message"] ?></span>
            <?php }else{ ?>
                <span class="text-success smalltext"><?php echo $_SESSION["message"] ?></span>
            <?php } unset($_SESSION["message"]);unset($_SESSION["messageType"]); } ?>
        <?php
        /*$dbLink = new mysqli('localhost', 'root', '', 'jobfair');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }*/

        $sql = "SELECT * FROM register_company";
        $counter = 1;
        $result = $dbLink->query($sql);

        if($result) {
            if($result->num_rows == 0) {
                echo '<h3 class="text-center text-danger">There are no files in the database</h3>';
            }
            else {
                echo '<div class="containter"><table class="table">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Company Name</th>
                    <th>Landline</th>
                    <th>Contact Person</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                </thead>';

                while($row = $result->fetch_assoc()) {
                    echo "
            <tbody>
                <tr>
                    <td>$counter</td>
                    <td class='maxCharacter'>{$row['company_name']}</td>
                    <td>{$row['company_number']}</td>
                    <td>{$row['contact_person']}</td>
                    <td class='maxCharacter'>{$row['contact_number']}</td>
                    <td>{$row['contact_email']}</td>
                    <td class='maxCharacter'>{$row['company_address']}</td>
                    <td><a href='./update_delete.php?delete_company=true&id={$row['id']}'><i class='fa fa-trash-o text-bold text-danger'></i></a></td>
                </tr></tbody>
                ";$counter++;
                }
                echo '</table></div>';
            }
            $result->free();
        }
        else
        {
            echo 'Error! SQL query failed:';
            echo "<pre>{$dbLink->error}</pre>";
        }
        // Close the mysql connection
        $dbLink->close();
        ?>
    </div>
<?php }else{
    $_SESSION['message'] = "You are not Authorized to view this page";
    $_SESSION["messageType"] = "error";
    header("Location:./login.php");
    return;
} ?>
<?php include "../include/adminFooter.php" ?>

