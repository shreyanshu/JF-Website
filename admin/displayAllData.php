
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
include "../include/adminHeader.php";
?>
<div class="container">
    <h2 class="text-center" >All Registered Participants List</h2>
    <?php

    $select_query = "SELECT registration_number from register";
    $select_result = $dbLink->query($select_query);
    $reg_user_count = 1000;
    while($row = $select_result->fetch_assoc())
    {
        $reg_user_count = $reg_user_count + 1;
    }
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

    /*$dbLink = new mysqli('localhost', 'root', '', 'jobfair');
    if(mysqli_connect_errno()) {
        die("MySQL connection failed: ". mysqli_connect_error());
    }*/

    $sql = "SELECT * FROM register";
    $counter = 1;
    $result = $dbLink->query($sql);

    if($result) {
        if($result->num_rows == 0) {
            echo '<h3 class="text-center text-danger">There are no files in the database</h3>';
        }
        else {
            echo '<div class="container"><table class="table">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th class="maxCharacter">Registration Number</th>
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
                    <td class='maxCharacter'>{$row['names']}</td>
                    <td class='maxCharacter'>{$row['email']}</td>
                    <td>{$row['phoneno']}</td>
                    <td class='maxCharacter'>{$row['college']}</td>
                    <td>{$row['graduated']}</td>
                    <td class='maxCharacter'><a href='../displayFile.php?id={$row['id']}'> <i class='fa fa-download'></i> Download CV</a></td>
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
