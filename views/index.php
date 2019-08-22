<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        
        <title>Album de fotos</title>

        <link href="../public/css/bootstrap-3.0.2.css" rel="stylesheet" />
        <link href="../public/css/pe-icon-7-stroke.css" rel="stylesheet" />
        <link href="../public/css/rotating-card.css" rel="stylesheet" />
        <link href="../public/css/font-awesome.css" rel="stylesheet">
        <link href="../public/css/style.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-brand-logo" href="https://www.creative-tim.com">
                    <div class="logo">
                        <img src="https://s3.amazonaws.com/creativetim_bucket/new_logo.png">
                    </div>
                    <div class="brand"> Creative Tim </div>
                </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="btn btn-info" href="./views/cadastro.php" target="_blank">
                            Cadastrar nova foto
                        </a>
                    </li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            </nav>

            <div class="row">
                <h1 class="title">
                    This is our awesome team
                    <br>
                    <small>Present your team in an interesting way</small>
                </h1>
                <div class="col-sm-10 col-sm-offset-1">
                <div class="col-md-4 col-sm-6">
                    <div class="card-container">
                        <div class="card">
                            <div class="front">
                                <div class="cover">
                                    <img src="../public/images/rotating_card_thumb2.png"/>
                                </div>
                                <div class="user">
                                    <img class="img-circle" src="../public/images/rotating_card_profile3.png"/>
                                </div>
                                <div class="content">
                                    <div class="main">
                                        <h3 class="name">John Marvel</h3>
                                        <p class="profession">CEO</p>
                                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                                    </div>
                                    <div class="footer">
                                        <i class="fa fa-mail-forward"></i> Auto Rotation
                                    </div>
                                </div>
                            </div> <!-- end front panel -->
                            <div class="back">
                                <div class="header">
                                    <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                </div>
                                <div class="content">
                                    <div class="main">
                                        <h4 class="text-center">Job Description</h4>
                                        <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                        <div class="stats-container">
                                            <div class="stats">
                                                <h4>235</h4>
                                                <p>
                                                    Followers
                                                </p>
                                            </div>
                                            <div class="stats">
                                                <h4>114</h4>
                                                <p>
                                                    Following
                                                </p>
                                            </div>
                                            <div class="stats">
                                                <h4>35</h4>
                                                <p>
                                                    Projects
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="social-links text-center">
                                        <a href="https://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                        <a href="https://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                        <a href="https://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                    </div>
                                </div>
                            </div> <!-- end back panel -->
                        </div> <!-- end card -->
                    </div> <!-- end card-container -->
                </div> <!-- end col sm 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card-container manual-flip">
                        <div class="card">
                            <div class="front">
                                <div class="cover">
                                    <img src="../public/images/rotating_card_thumb.png"/>
                                </div>
                                <div class="user">
                                    <img class="img-circle" src="../public/images/rotating_card_profile2.png"/>
                                </div>
                                <div class="content">
                                    <div class="main">
                                        <h3 class="name">Andrew Mike</h3>
                                        <p class="profession">Web Developer</p>
                                        <p class="text-center">"Lamborghini Mercy <br>Your chick she so thirsty <br>I'm in that two seat Lambo"</p>
                                    </div>
                                    <div class="footer">
                                        <button class="btn btn-simple" onclick="rotateCard(this)">
                                            <i class="fa fa-mail-forward"></i> Manual Rotation
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end front panel -->
                            <div class="back">
                                <div class="header">
                                    <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                </div>
                                <div class="content">
                                    <div class="main">
                                        <h4 class="text-center">Job Description</h4>
                                        <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                        <div class="stats-container">
                                            <div class="stats">
                                                <h4>235</h4>
                                                <p>
                                                    Followers
                                                </p>
                                            </div>
                                            <div class="stats">
                                                <h4>114</h4>
                                                <p>
                                                    Following
                                                </p>
                                            </div>
                                            <div class="stats">
                                                <h4>35</h4>
                                                <p>
                                                    Projects
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                        <i class="fa fa-reply"></i> Back
                                    </button>
                                    <div class="social-links text-center">
                                        <a href="https://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                        <a href="https://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                        <a href="https://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                    </div>
                                </div>
                            </div> <!-- end back panel -->
                        </div> <!-- end card -->
                    </div> <!-- end card-container -->
                </div> <!-- end col sm 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card-container">
                        <div class="card">
                            <div class="front">
                                <div class="cover">
                                    <img src="../public/images/rotating_card_thumb3.png"/>
                                </div>
                                <div class="user">
                                    <img class="img-circle" src="../public/images/rotating_card_profile.png"/>
                                </div>
                                <div class="content">
                                    <div class="main">
                                        <h3 class="name">Inna Corman</h3>
                                        <p class="profession">Product Manager</p>

                                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                                    </div>
                                    <div class="footer">
                                        <div class="rating">
                                            <i class="fa fa-mail-forward"></i> Auto Rotation
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end front panel -->
                            <div class="back">
                                <div class="header">
                                    <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                </div>
                                <div class="content">
                                    <div class="main">
                                        <h4 class="text-center">Job Description</h4>
                                        <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                        <div class="stats-container">
                                            <div class="stats">
                                                <h4>235</h4>
                                                <p>
                                                    Followers
                                                </p>
                                            </div>
                                            <div class="stats">
                                                <h4>114</h4>
                                                <p>
                                                    Following
                                                </p>
                                            </div>
                                            <div class="stats">
                                                <h4>35</h4>
                                                <p>
                                                    Projects
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end back panel -->
                        </div> <!-- end card -->
                    </div> <!-- end card-container -->
                </div> <!-- end col-sm-3 -->
                </div> <!-- end col-sm-10 -->
            </div> <!-- end row -->
            <div class="space-200"></div>
        </div>

        <script src="../public/js/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="../public/js/bootstrap-3.0.2.min.js" type="text/javascript"></script>
        <script src="../public/js/main_index.js" type="text/javascript"></script>
    </body>
</html>
