<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 1/29/2018
 * Time: 11:09 AM
 */

include "functions.php";
include "database/DB_CONNECT.php";

if (isset($_POST["registerCompany"])) {

    $company = $_POST["companyName"];
    $companyNo = $_POST["companyNumber"];
    $name = $_POST["contactPerson"];
    $number = $_POST["contactNumber"];
    $email = $_POST["contactEmail"];
    $address = $_POST["companyAddress"];

    /*$dbLink = new mysqli('localhost', 'root', '', 'jobfair');

    // Connect to the database
    if (mysqli_connect_errno()) {
        die("MySQL connection failed: " . mysqli_connect_error());
    }*/

    $query = " INSERT INTO register_company (company_name, company_number, contact_person, contact_number, contact_email,company_address)
              VALUES ('$company', '$companyNo','$name','$number', '$email','$address') ";

    $result = $dbLink->query($query);

    if ($result) {
        header("Location: index.php?success=true");
        sendMail($name, $email, $company);
    } else {
        header("Location: index.php?fail=true");
    }

    $dbLink->close();
}
?>