<?php
/**
 * Created by PhpStorm.
 * User: pathaksabin88
 * Date: 3/15/18
 * Time: 6:39 PM
 */

include "../functions.php";
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../index.php");
    exit;
}

?>