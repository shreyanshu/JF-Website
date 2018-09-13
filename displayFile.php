<?php
/**
 * Created by PhpStorm.
 * User: Sumit
 * Date: 5/3/2017
 * Time: 10:42 AM
 */?>

<?php
include "database/DB_CONNECT.php";
if(isset($_GET['id'])) {
    $id = intval($_GET['id']);

    if($id <= 0) {
        die('The ID is invalid!');
    }
    else {
       /* $dbLink = new mysqli('localhost', 'root', '', 'jobfair');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }*/

        $query = "SELECT * FROM register WHERE id = {$id}";
        $result = $dbLink->query($query);

        if($result) {

            if($result->num_rows == 1) {
                $row = mysqli_fetch_assoc($result);
                $path = $row['filePath'];
                header("Content-Type: ". $row['cv_mime']);
                header("Content-Length: ". $row['cv_size']);
                header("Content-Disposition: attachment; filename=". $row['cv_name']);
                readfile($path);
            }
            else {
                echo 'Error! No image exists with that ID.';
            }
            @mysqli_free_result($result);
        }
        else {
            echo "Error! Query failed: <pre>{$dbLink->error}</pre>";
        }
        @mysqli_close($dbLink);
    }
}
else {
    echo 'Error! No ID was passed.';
}
?>