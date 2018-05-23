<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Janis Vavere photography - Photos</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

        <!-- THEME STYLES -->
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <body id="body">
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">main</a></li>
                    <li class="dropdown active">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">portfolio <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">photos</a></li>
                        <li><a href="videos.php">videos</a></li>
                    </ul>
                    </li>
                    <li><a href="https://vk.com/marshmlow">contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a data-fancybox data-src="#feedback-form" href="javascript:;">order a photoset <span class="glyphicon glyphicon-camera"></span></a></li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="about">
        <div class="container">
            <div class="row" align="center">
                <h2>Photos</h2>
                <p class="imglist">
                    <?php for($i=1; $i<=29; $i++)
                    echo '<a href="img/'.$i.'.jpg" data-fancybox="images">
                        <img src="img/'.$i.'.jpg" width="25%" style="margin-top: 10px; margin-bottom: 10px; margin-left: 10px; margin-right: 10px;"/>
                    </a>';
                    ?>
                </p>
            </div>
        </div>
        <div align=center>
            <hr>
        </div>
        <div class="footer">
            <p>Janis Vavere Photography</p>
            <p>vaverij@inbox.lv</p>
            <p>+371 28474394</p>
        </div>
        <?php include 'order.php'?>
    <body>
        