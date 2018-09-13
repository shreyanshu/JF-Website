<?php
/**
 * Created by PhpStorm.
 * User: pathaksabin88
 * Date: 3/14/18
 * Time: 2:29 PM
 */
    include "../functions.php";
    include "../database/DB_CONNECT.php";
    session_start();
    redirectIfNotLoggedIn();
    include "../include/adminHeader.php";
?>
<div class="container">
    <h2 class="text-center" >Users List</h2>
    <?php if(isset($_SESSION["message"])){
        if($_SESSION['messageType']=='error'){?>
            <span class="text-danger smalltext"><?php echo $_SESSION["message"] ?></span>
        <?php }else{ ?>
            <span class="text-success smalltext"><?php echo $_SESSION["message"] ?></span>
        <?php } unset($_SESSION["message"]);unset($_SESSION["messageType"]); } ?>
    <?php
   /* $dbLink = new mysqli('localhost', 'root', '', 'jobfair');
    if(mysqli_connect_errno()) {
        die("MySQL connection failed: ". mysqli_connect_error());
    }*/

    $sql = "SELECT * FROM user";
    $counter = 1;
    $result = $dbLink->query($sql);

    if($result) {
        if($result->num_rows == 0) {
            echo '<h3 class="text-center text-danger">There are no Users in the database</h3>';
        }
        else {
            echo '<div class="containter"><table class="table">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
             </thead>';

            while($row = $result->fetch_assoc()) {
                echo "
            <tbody>
                <tr>
                    <td>$counter</td>
                    <td>{$row['fullname']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['role']}</td>";
                    if ($row['username'] == $_SESSION['username']){
                        echo "<td></td>
                </tr></tbody>
                ";
                    }
                    else{
                    echo "<td><a href='./edit_user.php?id={$row['id']}'><i class='fa fa-edit'></i></a> | <a href='./update_delete.php?delete_user=true&id={$row['id']}'> <i class='fa fa-trash-o text-danger text-bold'></i></a></td>
                </tr></tbody>
                ";}
                $counter++;
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
<?php include "../include/adminFooter.php" ?>

