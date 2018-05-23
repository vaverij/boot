<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Janis Vavere photography</title>
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
        <link href="css/slider.css" rel="stylesheet" type="text/css"/>
        <link href="css/card.css" rel="stylesheet" type="text/css"/>
        <link href="css/reviews.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- REVIEWS -->
        <link rel="stylesheet" href="libs/animate/animate.css">
        <link rel="stylesheet" href="libs/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="libs/owl-carousel/owl.theme.default.min.css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body">
    <header>
        <?php
            $bg = array('01.jpg', '02.jpg', '03.jpg', '04.jpg', '05.jpg', '06.jpg', '07.jpg', '08.jpg', '09.jpg', '10.jpg', '11.jpg', '12.jpg', '14.jpg', '15.jpg', '16.jpg', '17.jpg', '18.jpg', '19.jpg', '20.jpg', '22.jpg', '23.jpg', '24.jpg', '25.jpg', '26.jpg', '27.jpg', '28.jpg', '29.jpg', '30.jpg' ); 
            $i = rand(0, count($bg)-1); 
            $selectedBg = "$bg[$i]"; 
        ?>
        <style type="text/css">
        .promo-block {
            position: relative;
            z-index: 1;
            text-align: center;
            background: url(../img/promo/<?php echo $selectedBg; ?>) no-repeat;
            background-size: cover;
            background-position: center center;
            padding: 25.5% 0 200px;
        }
        @media (max-width: 720px) {
            .promo-block {
                padding: 100px 0 200px;
            }
        }
        
        </style>
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
                    <li class="active"><a href="#">main</a></li>
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">portfolio <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="photos.php">photos</a></li>
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
    <div class="promo-block">
        <div class="container">
                <h1 class="promo-block-title">Janis Vavere photography</h1>
                <p class="promo-block-text">Create art. Show yourself. I will help.</p>
            <a class="btn-theme btn-theme-md btn-white-bg text-uppercase" href="photos.php" title="Gallery">Gallery</a>
            <a data-fancybox data-src="#feedback-form" href="javascript:;" class="btn-theme btn-theme-md btn-default-bg text-uppercase" href="" title="Request a photoset">Request a photoset</a>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <div class="row" align="center">
                <h2>Who am I?</h2>
                <p>My name is Janis, I'm 18 years old. I'm from Latvia. I take a great interest in photography for several years. I love it. Like any person, I'm looking for my own style. Perhaps it is already found. You can help me see this.</p>
                <h3>My stuff</h3>
                <div class="col-sm-offset-2 col-sm-2">
                    <p>Camera</p>
                    Canon EOS 7D
                </div>
                <div class="col-sm-4">
                    <p>Lens</p>
                    Canon EF 50mm f/1.4 USM <br> Tokina 12-24mm f/4.0
                </div>
                <div class="col-sm-2">
                    <p>Flash</p>
                    Metz
                </div>
                
            </div>    
        </div>
    </div>
    <div align=center>
    <hr>
    </div>
    <div class="photo">
        <div class="container">
            <div class="row" align="center">
            <h2>Photos</h2>
                <div class="w3-content w3-display-container">
                    <img class="mySlides" src="img/1.jpg" style="width:100%">
                    <img class="mySlides" src="img/2.jpg" style="width:100%">
                    <img class="mySlides" src="img/3.jpg" style="width:100%">
                    <img class="mySlides" src="img/4.jpg" style="width:100%">

                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                </div>
                <br>
                <a class="btn-theme btn-theme-md btn-default-bg text-uppercase" href="photos.php" title="Portfolio">Portfolio</a>
                <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                showDivs(slideIndex += n);
                }

                function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                x[slideIndex-1].style.display = "block";  
                }
                </script>
            </div>
        </div>
    </div>
    <div align=center>
    <hr>
    </div>
    <div class="prices">
        <div class="container">
            <div class="row" align="center">
                <h2>Prices</h2>
                <table class="table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Wedding</td>
        <td>From 100 EUR</td>
      </tr>
      <tr>
        <td>Portrait</td>
        <td>From 30 EUR</td>
      </tr>
      <tr>
        <td>Video</td>
        <td>For agreement</td>
      </tr>
      <tr>
        
        
        
      </tr>
    </tbody>
  </table>

            </div>
        </div>
    </div>
    <div align=center>
        <hr>
    </div>
    <div class="reviews">
        <div class="container">
            <div class="row" align="center">
                <h2>Reviews</h2>
                <div class="owl-carousel block-items">
                    <div class="item">
                        <div class="inner-testimonial">
                            <img src="img/client1.png" class="full-opacity" alt="Клиент 1">
                            <h3 class="city-name">Alina</h3>
                            <p class="text-testimonial">This is my personal photographer. A huge number of my photos are made by him. I like the process of shooting and I feel responsible.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inner-testimonial">
                            <img src="img/client2.png" class="full-opacity" alt="Клиент 2">
                            <h3 class="city-name">Vadim</h3>
                            <p class="text-testimonial">A couple of times I ordered photo sessions. Very pleased with the result. Be sure to ask again!</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inner-testimonial">
                            <img src="img/client3.png" class="full-opacity" alt="Клиент 3">
                            <h3 class="city-name">Elina</h3>
                            <p class="text-testimonial">Photos are sent quickly. They collaborated many times, was always happy with the result.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div align=center>
        <hr>
    </div>
    <div class="map" align="center">
        <h2>Where I work</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d70199.80749483476!2d23.641733238946387!3d56.64426767702719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ef254b6eed168f%3A0x400cfcd68f31c60!2z0JXQu9Cz0LDQstCw!5e0!3m2!1sru!2slv!4v1526136233173" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="footer">
        <p>Janis Vavere Photography</p>
        <p>vaverij@inbox.lv</p>
        <p>+371 28474394</p>
    </div>
    <?php include 'order.php'?>
    <script src="libs/jquery/jquery-2.1.3.min.js"></script>
	<script src="libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/custom.js"></script>
    </body>
</html>