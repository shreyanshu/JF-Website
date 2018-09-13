<?php
/**
 * Created by PhpStorm.
 * User: pathaksabin88
 * Date: 3/14/18
 * Time: 4:16 PM
 */
include "../functions.php";
session_start();
redirectIfNotLoggedIn();
include "../include/adminHeader.php";
?>

<script type="text/javascript">
    $(document).ready(function(){
        validatePassword();
    });
</script>

<div id="main-content">

    <div class="container">


        <div class="wrapper">
            <h2 align="center">Change Password</h2>

            <form class="form-horizontal" method="post" action="./verify.php" id="password_form" >
                <div class="form-group">
                    <label for="password" class = "control-label col-sm-2">Password:</label>
                    <div class = "col-sm-9">
                        <input type="password" class="form-control" name="password" id="password">
                        <span class="error_password text-danger text-bold" id="error_password"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="re_password" class = "control-label col-sm-2">Retype Password:</label>
                    <div class = "col-sm-9">
                        <input type="password" class="form-control" name="re_password" id="re_password">
                        <span class="error_re_password text-danger text-bold" id="error_re_password"></span>
                    </div>

                </div>

                <div class = "form-group">
                    <div class = "col-sm-9 col-sm-offset-2">
                        <input class="btn btn-success btn-success" role="button" id="update" name="save_password" value="UPDATE" type="submit" disabled>
                    </div>
                </div>

                <script type="text/javascript">

                    $('#password, #re_password').bind('keyup', function() {
                        if(same()){
                            $('#update').removeAttr('disabled');
                        }

                        else {
                            $('#update').attr('disabled');
                        }

                        function same() {
                            var pass = $('#password').val();
                            var re_pass = $('#re_password').val();

                            console.log(pass);

                            if(pass === re_pass){
                                return true;
                            }
                            else {
                                return false;
                            }
                        }
                    });

                </script>
            </form>
        </div>
    </div>
</div>
<?php include "../include/adminFooter.php" ?>

