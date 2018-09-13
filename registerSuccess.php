<?php
/**
 * Created by PhpStorm.
 * User: pathaksabin88
 * Date: 3/8/18
 * Time: 6:03 PM
 */?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel='shortcut icon' type='image/x-icon' href='img/fav.png' />
    <title>DWIT Job Fair - 2018 | Registration Successful</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="jumbotron" align="center" style="margin-bottom: 30%;">
                <h2>You have registered successfully!</h2>
                <p>
                    Registration Code: <strong><?php echo $_GET['reg_no'] ?></strong> <br>
                    The registration code has been sent to your email.<br>
                    <br>
                    See you on March 23, 2018.
                </p>
                <a href="index.php"><button class="btn btn-lg btn-success">Home</button></a>
            </div>
        </div>
    </div>
</body>

<?php include "include/footer.php"?>
