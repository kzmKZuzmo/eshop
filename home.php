
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Custom Fonts -->
    <link rel="stylesheet" href="css/font-awesome.min.css">


    <title>uStore | Úvod</title>
    <link rel="stylesheet" href="css/footer.css">
    <!-- Bootstrap Core CSS -->

<link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php


include_once("header.php");

?>



    <!-- Navigation -->

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image: url(images/slide.jpg);"></div>
                <div class="carousel-caption">
                    <h2>skuska</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image: url(images/slide.jpg);"></div>
                <div class="carousel-caption">
                    <h2>sdas</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image: url(images/slide.jpg);"></div>
                <div class="carousel-caption">
                    <h2>asdasdsa</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
    
    
    




<section class="content services services-3x border-top border-bottom">
        <div class="container">
        	<div class="row row-no-padding">
            
            	<!-- SERVICE - START -->
                <div class="col-xs-12 col-sm-4">
                    <div class="service">
                        <i class="fa fa-star"></i>
                        <h3>Lorem ipsum lorem</h3>
                        <p>Ut feugiat mauris eget magna egestas porta. Curabitur sagittis sagittis neque rutrum congue.</p>
                    </div>
                </div>
                <!-- SERVICE - END -->
                
                <!-- SERVICE - START -->
                <div class="col-xs-6 col-sm-4">
                    <div class="service">
                        <i class="fa fa-heart"></i>
                        <h3>Lorem ipsum lorem</h3>
                        <p>Ut feugiat mauris eget magna egestas porta. Curabitur sagittis sagittis neque rutrum congue.</p>
                    </div>
                </div>
                <!-- SERVICE - END -->
                
                <!-- SERVICE - START -->
                <div class="col-xs-6 col-sm-4">
                    <div class="service">
                        <i class="fa fa-rocket"></i>
                        <h3>Lorem ipsum lorem</h3>
                        <p>Ut feugiat mauris eget magna egestas porta. Curabitur sagittis sagittis neque rutrum congue.</p>
                    </div>
                </div>
                <!-- SERVICE - END -->
                
            </div>
            
        </div>
    </section>
    <!-- ==========================
    	SERVICES - END 


<!-- ======================================banner--->
<section class="content categories">
        <div class="row row-no-padding">
                    <!-- CATEGORY - START -->            <div class="col-xs-4">
                <div class="category">
                    <a href="#">
                        <img src="images/category-2.jpg" class="img-responsive" alt="">
                        <div class="category-mask"></div>
                        <h3 class="category-title">Men <span>Collection</span></h3>
                    </a>
                </div>
            </div>
            <!-- CATEGORY - END -->
            
            <!-- CATEGORY - START -->
            <div class="col-xs-4">
                <div class="category">
                    <a href="#">
                        <img src="images/category-3.jpg" class="img-responsive" alt="">
                        <div class="category-mask"></div>
                        <h3 class="category-title">Women <span>Collection</span></h3>
                    </a>
                </div>
            </div>
            <!-- CATEGORY - END -->
            
            <!-- CATEGORY - START -->
            <div class="col-xs-4">
                <div class="category">
                    <a href="#">
                        <img src="images/category-4.jpg" class="img-responsive" alt="">
                        <div class="category-mask"></div>
                        <h3 class="category-title">Sports <span>Collection</span></h3>
                    </a>
                </div>
            </div>
            <!-- CATEGORY - END -->
                            
        </div>
        
    </section>
    <!-- =================================end banner-->

</body>

</html>
<?php

include_once("footer.php");

?>