<?php
/**
 * Created by PhpStorm.
 * User: pathaksabin88
 * Date: 3/18/18
 * Time: 8:05 PM
 */
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "jobfair");

$dbLink = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
//mysqli_set_charset($conn,'utf8');

if (mysqli_connect_errno()) {
    die("Database Connection Failed!" .
        mysqli_connect_error() .
        "(" . mysqli_connect_errno() .")"
    );
}
?>
