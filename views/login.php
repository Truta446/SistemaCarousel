<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carousel System - Login</title>
		<link rel="shortcut icon" href="../public/images/favicon.ico">

        <link rel="stylesheet" type="text/css" href="../public/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../public/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="../public/vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="../public/vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="../public/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="../public/vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="../public/vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="../public/css/util.css">
        <link rel="stylesheet" type="text/css" href="../public/css/login.css">
    </head>
    <body>
        
        <div class="limiter">
            <div class="container-login100" style="background-image: url('../public/images/bg-01.jpg');">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" action="../controllers/loginController.php" method="post">
                        <span class="login100-form-logo">
                            <i class="zmdi zmdi-landscape"></i>
                        </span>

                        <span class="login100-form-title p-b-34 p-t-27">
                            Log in
                        </span>

                        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input class="input100" type="email" name="email" placeholder="E-mail">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div id="dropDownSelect1"></div>
        
        <script src="../public/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="../public/vendor/animsition/js/animsition.min.js"></script>
        <script src="../public/vendor/bootstrap/js/popper.js"></script>
        <script src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../public/vendor/select2/select2.min.js"></script>
        <script src="../public/vendor/daterangepicker/moment.min.js"></script>
        <script src="../public/vendor/daterangepicker/daterangepicker.js"></script>
        <script src="../public/vendor/countdowntime/countdowntime.js"></script>
        <script src="../public/js/login.js"></script>
    </body>
</html>