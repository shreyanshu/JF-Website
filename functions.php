<?php
/**
 * Created by PhpStorm.
 * User: Sumit Shrestha
 * Date: 1/10/2018
 * Time: 11:37 AM
 */
function uniqueRandomNumbersWithinRange($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

function sendMail($name, $email, $company){
    require_once('libs/phpmailer/class.phpmailer.php');
    require_once("libs/phpmailer/class.smtp.php");
    require ("libs/phpmailer/PHPMailerAutoload.php");

    $mailer = new PHPMailer();
    $mailer->IsSMTP();
    $mailer->SMTPSecure = 'tls';
    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMPTDebug = 2;
    $mailer->Port = 587;
    $mailer->Username = 'jobfair@deerwalk.edu.np';
    $mailer->Password = 'dwitsam3';
    $mailer->SMTPAuth = true;
    $mailer->From = 'jobfair@deerwalk.edu.np';
    $mailer->FromName = "DWIT Job Fair";
    $mailer->Subject = 'Registration Confirmed | DWIT Job Fair ';
    $mailer->isHTML(true);
    $mailer->Body='<p>Hello '. $name . ',</p><p> ' . $company . ' has been registered. </p><p>Best Regards,</p><p>DWIT</p>';
    $mailer->AddReplyTo( 'jobfair@deerwalk.edu.np', 'DWIT' );
    $mailer->AddAddress($email);

    $mailer->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mailer->Send();
}

function sendParticipantsMail($name, $email, $reg_no){
    require_once('libs/phpmailer/class.phpmailer.php');
    require_once("libs/phpmailer/class.smtp.php");
    require ("libs/phpmailer/PHPMailerAutoload.php");

    $mailer = new PHPMailer();
    $mailer->IsSMTP();
    $mailer->SMTPSecure = 'tls';
    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMPTDebug = 2;
    $mailer->Port = 587;
    $mailer->Username = 'jobfair@deerwalk.edu.np';
    $mailer->Password = 'dwitsam3';
    $mailer->SMTPAuth = true;
    $mailer->From = 'jobfair@deerwalk.edu.np';
    $mailer->FromName = "DWIT Job Fair";
    $mailer->Subject = 'Registration Confirmed | DWIT Job Fair 2018';
    $mailer->isHTML(true);
    $mailer->Body='<p>Hello '. $name . ',</p><p> Your registration for DWIT Job Fair 2018 has been confirmed. <br>Your Registration Number is : ' . $reg_no . ' <br><br>Also, please be sure you keep your registration number safe and bring it on the day of Job Fair.</p><p>Best Regards,<br>Event Manager<br>DWIT JOB Fair 2018</p>';
    $mailer->AddReplyTo( 'jobfair@deerwalk.edu.np', 'DWIT' );
    $mailer->AddAddress($email);

    $mailer->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mailer->Send();
}

function sendUserCreatedMail($name, $email,$username, $password, $role){
    require_once('libs/phpmailer/class.phpmailer.php');
    require_once("libs/phpmailer/class.smtp.php");
    require ("libs/phpmailer/PHPMailerAutoload.php");

    $mailer = new PHPMailer();
    $mailer->IsSMTP();
    $mailer->SMTPSecure = 'tls';
    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMPTDebug = 2;
    $mailer->Port = 587;
    $mailer->Username = 'jobfair@deerwalk.edu.np';
    $mailer->Password = 'dwitsam3';
    $mailer->SMTPAuth = true;
    $mailer->From = 'jobfair@deerwalk.edu.np';
    $mailer->FromName = "DWIT Job Fair";
    $mailer->Subject = 'User Created Successfully | DWIT Job Fair 2018';
    $mailer->isHTML(true);
    $mailer->Body='<p>Hello '. $name . ',</p><p> You have been registered as '.$role.' for DWIT Job Fair 2018. <br>Detailed Information : <br>Username: ' . $username . ' <br>Password: '.$password.'<br><br>You can login into this site via http://jobfair.dwit.edu.np/admin/login.php</p><p>Best Regards,<br>Event Manager<br>DWIT JOB Fair 2018</p>';
    $mailer->AddReplyTo( 'jobfair@deerwalk.edu.np', 'DWIT' );
    $mailer->AddAddress($email);

    $mailer->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mailer->Send();
}

function sendUPasswordChangeMail($name, $email,$username, $password){
    require_once('libs/phpmailer/class.phpmailer.php');
    require_once("libs/phpmailer/class.smtp.php");
    require ("libs/phpmailer/PHPMailerAutoload.php");

    $mailer = new PHPMailer();
    $mailer->IsSMTP();
    $mailer->SMTPSecure = 'tls';
    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMPTDebug = 2;
    $mailer->Port = 587;
    $mailer->Username = 'jobfair@deerwalk.edu.np';
    $mailer->Password = 'dwitsam3';
    $mailer->SMTPAuth = true;
    $mailer->From = 'jobfair@deerwalk.edu.np';
    $mailer->FromName = "DWIT Job Fair";
    $mailer->Subject = 'Password Changed Successfully | DWIT Job Fair 2018';
    $mailer->isHTML(true);
    $mailer->Body='<p>Hello '. $name . ',</p><p> Your password for Job Fair site has been changed. <br>New Details is : <br>Username: ' . $username . ' <br>Password: '.$password.'<br><br>You can login into this site via http://jobfair.dwit.edu.np/admin/login.</p><p>Best Regards,<br>Event Manager<br>DWIT JOB Fair 2018</p>';
    $mailer->AddReplyTo( 'jobfair@deerwalk.edu.np', 'DWIT' );
    $mailer->AddAddress($email);

    $mailer->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mailer->Send();
}



function redirectIfNotLoggedIn(){
    if(!isset($_SESSION['username'])){
        header("Location:./login.php");
        return;
    }
    return;
}