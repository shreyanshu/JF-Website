<?php
/**
 * Created by PhpStorm.
 * User: Sumit
 * Date: 1/7/2018
 * Time: 10:26 AM
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="http://jobfair.dwit.edu.np/img/2018_banner.jpg"/>
    <meta property="og:url" content="http://jobfair.dwit.edu.np/" />
    <meta property="og:title" content="DWIT Job Fair" />
    <meta property="og:description" content="DWIT Job Fair is an annual event that connects qualified and talented
    personnel looking for jobs to established software companies and startups in Kathmandu Valley." />
    <meta name="author" content="Digital Media Team">
    <link rel='shortcut icon' type='image/x-icon' href='img/favLogo.png' />
    <title>DWIT Job Fair </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css' />
</head>

<body id="page-top" data-spy="scroll">
<!-- Modal -->
<!--<div class="modal fade bs-example-modal-lg" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog model-width modal-lg" role="document">
        <div class="modal-content" style="background-color: transparent;">
            <div class="modal-body" style="padding: 0;">
                <button type="button" class="close" data-dismiss="modal"><span style="color: #FFFFFF;">&times;</span></button>
                <iframe class="youtube-video" src="https://www.youtube.com/embed/3mKnfCBKe6E?rel=0;autoplay=1;mute=true"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>-->
<div id="page-loader">
    <div class="loader">
        <div class="spinner">
            <div class="spinner-container con1">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <div class="circle4"></div>
            </div>
            <div class="spinner-container con2">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <div class="circle4"></div>
            </div>
            <div class="spinner-container con3">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <div class="circle4"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Register</h4>
        </div>
        <div class="modal-body">
            <form id="companyRegisterForm" enctype="multipart/form-data" action="register.php" method="POST">
                <div class="form-group">
                    <label for="companyName"> Company * </label>
                    <input type="text" class="form-control" id="companyName" name="companyName" required>
                </div>
                <div class="form-group">
                    <label for="companyNumber"> Landline * </label>
                    <input type="text" class="form-control" id="companyNumber" name="companyNumber" required>
                </div>
                <div class="form-group">
                    <label for="contactPerson"> Contact Person * </label>
                    <input type="text" class="form-control" id="contactPerson" name="contactPerson" required>
                </div>
                <div class="form-group">
                    <label for="contactNumber"> Contact Number * </label>
                    <input type="number" class="form-control" id="contactNumber" name="contactNumber" required>
                </div>
                <div class="form-group">
                    <label for="contactEmail"> Contact Email * </label>
                    <input type="text" class="form-control" id="contactEmail" name="contactEmail" required>
                </div>
                <div class="form-group">
                    <label for="address"> Address </label>
                    <textarea class="form-control" id="companyAddress" name="companyAddress">
                            </textarea>
                </div>
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-success" name="registerCompany" value="Register">
            </form>
        </div>
    </div>
</div>
</div>


<section id="intro" class="home-video text-light">
    <div class="home-video-wrapper" style="background-image: url('img/2018_banner.jpg');background-repeat: no-repeat;background-size: contain;">
        <div id="clockdiv">
            <div>
                <span class="days"></span>
                <div class="smalltext">Day</div>
            </div>
            &nbsp;
            <div>
                <span class="hours"></span>
                <div class="smalltext">Hours</div>
            </div>&nbsp;
            <div>
                <span class="minutes"></span>
                <div class="smalltext">Minutes</div>
            </div>&nbsp;
            <div>
                <span class="seconds"></span>
                <div class="smalltext">Seconds</div>
            </div>&nbsp;
        </div>
        <div class="homevideo-container">
            <div  id="P1" class="bg-player" style="display:block; margin: auto;"></div>
        </div>

         <!--<div class="register-btn" data-wow-offset="0" data-wow-delay="1s">
             <a href="#register" class="btn btn-primary" id="btn-scroll" style="font-size: 40px;">Happening Now!!!</a>
         </div>-->
        <?php
            if (isset($_GET["success"])) {
                echo "<div class='alert alert-success' role='alert'>" .
                        "Successfully Registered! Confirmation email sent." .
                        "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>".
                          "<span aria-hidden='true'>&times;</span>".
                        "</button></div>";
            } else if (isset($_GET["fail"])){
                echo "<div class='alert alert-danger' role='alert'>" .
                    "Registration Failed!" .
                    "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>".
                          "<span aria-hidden='true'>&times;</span>".
                        "</button></div>";
            }
        ?>
        <div class="overlay">
            <div class="text-center video-caption">
                <div class="wow bounceInUp" data-wow-offset="0" data-wow-delay="1s">
                    <div class="row">
                        <div class="col-md-offset-4 col-md-1">
                            <button type="button" class="btn btn-success btn-lg register-position" data-toggle="modal" data-target="#myModal" >
                                Register Company
                            </button>
                        </div>
                        <div class="col-md-4">
                            <a href="#register" class="btn btn-success topRegister participant-button btn-lg"  id="btn-scroll">Register Participant</a>
                        </div>
                        <div class="col-md-4"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="navigation">

    <nav class="navbar navbar-custom" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mob-logo headerLogo">
                    <div class="site-logo">
                        <img src="img/logo.png" style="height: 114px;width: auto;position: relative;top: -9px;"/>
                    </div>
                </div>
                <div class="col-md-9 mob-menu">
                    <div class="row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#intro">Home</a></li>
                                <li><a href="#participatingCompanies">Participating Companies</a></li>
                                <li class="textHighlight"><a class="textHighlight text-bold" href="vacancy2018.php">Openings</a></li>
                                <li><a href="#FAQS">FAQs</a></li>
                                <li><a href="#register">Register</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#contacts">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>