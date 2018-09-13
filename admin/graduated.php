<?php
/**
 * Created by PhpStorm.
 * User: Sumit
 * Date: 5/18/2017
 * Time: 9:32 PM
 */
include "../functions.php";
include "../database/DB_CONNECT.php";
session_start();
redirectIfNotLoggedIn();
include "../include/adminHeader.php";
?>
<div class="container">
        <h2 class="text-center" >Graduated Participants List</h2>
    <?php
    /*$dbLink = new mysqli('localhost', 'root', '', 'jobfair');
    if(mysqli_connect_errno()) {
        die("MySQL connection failed: ". mysqli_connect_error());
    }*/
    $select_all_query = "SELECT registration_number from register";
    $select_all_result = $dbLink->query($select_all_query);
    $reg_user_count = 1000;
    while($row = $select_all_result->fetch_assoc())
    {
        $reg_user_count = $reg_user_count + 1;
    }
    $select_query = "SELECT registration_number from register WHERE graduated = 'yes'";
    $select_result = $dbLink->query($select_query);
    /* $option = '';
    while($row = $select_result->fetch_assoc())
    {
        $option .= '<option value = "'.$row['registration_number'].'">'.$row['registration_number'].'</option>';
    }
    echo "<form method='post' action='../displayCVContent.php' target='_blank'>
    <div class='form-inline'>
    <select name='reg_no' class='form-control cvdata'>
        <option value='0'>Please Select</option>";
    echo $option;
    echo "</select><input type='submit' name='find_cv' value='Find CV' class='form-control btn btn-info'></div></form>";*/
    echo "<form method='post' action='../displayCVContent.php' target='_blank'>
    <div class='form-inline'>
    Enter Registration Number Here (1001 - $reg_user_count) : <input type='number' minlength='4' maxlength='4' name='reg_no' class='form-control'>
    <input type='submit' name='find_cv' value='Find CV' class='form-control btn btn-info'></div></form>";

    $sql = "SELECT * FROM register WHERE graduated = 'yes'";
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
                    <th>Registration Number</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>College</th>
                    <th>Graduated</th>
                    <th>CV</th>

                </tr>
                </thead>';

            while($row = $result->fetch_assoc()) {
                echo "
<tbody>
                <tr>
                    <td>$counter</td>
                    <td>{$row['registration_number']}</td>
                    <td>{$row['names']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phoneno']}</td>
                    <td>{$row['college']}</td>
                    <td>{$row['graduated']}</td>
                    <td><a href='../displayFile.php?id={$row['id']}'>Download CV</a></td>
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
<?php include "../include/adminFooter.php" ?>
