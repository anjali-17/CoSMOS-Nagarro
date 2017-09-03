<?php
session_start();

if(!isset($_SESSION['email_id']) || !isset($_SESSION['pass']))
{
    header("Location: home_page.php");
}


$con=mysqli_connect ("localhost","root","","turyst");

if (mysqli_connect_errno()) {
    echo "failed to connect mysql: ". mysqli_connect_error();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CoSMOS</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Elastic grid css file -->
    <link rel="stylesheet" href="css/elastic_grid.css">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    <!-- Default Theme css file -->
    <link id="orginal" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">

    <link rel="stylesheet" href="css/search_style.css">
    <link rel="stylesheet" href="offer.css">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!--=========== BEGIN HEADER SECTION ================-->
<header id="header">
    <!-- BEGIN MENU -->
    <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- LOGO -->

                    <!-- TEXT BASED LOGO -->
                    <a class="navbar-brand" href="home.php">CoSMOS</a>

                    <!-- IMG BASED LOGO  -->
                    <!--  <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a> -->



                    <form class="navbar-form navbar-left" role="search">
                        <div class="input-group stylish-input-group input-append">
                            <input type="text" id="search_page" class="extra form-control" placeholder="Search" name="q" style="color: black;background-color: #b8b894;">
                            <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                                </button>
                                </span>
                        </div>
                    </form>


                    <!--
                </div>-->
                    <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="restaurant.php">Restaurants</a></li>
                        <li><a href="movie_test.php">Movies</a></li>
                        <li><a href="event_test.php">Events</a></li>
                        <li><a href="offer.php">Offers</a></li>
                        <li><a href="profile.php">Account</a></li>
                        <li><a href="my_booking.php">My Bookings</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </div>
    <!-- END MENU -->
</header>


<br><br><br><br><br>
<div id="main_content">
    <div class="row">
        <div class="h2" align="center">
            <h3><strong>Currently Active Offers...!!!</strong></h3>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/other1.jpg">
                Flat Rs.90 off (No min limit)
                <div class="overlay">
                    <h2>Coupon Code - GET90</h2><br>
                    <p>Valid till : 26/12/16</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/movie1.jpg">
                Flat 25% off (Min 5 person's tickets/table booking)
                <div class="overlay">
                    <h2>Coupon Code - COSMOS25</h2><br>
                    <p>Valid till : 30/11/16</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/event1.jpg">
                Flat Rs.100 off (No min limit)
                <div class="overlay">
                    <h2>Coupon Code - GET100</h2><br>
                    <p>Valid till : 19/12/16</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/restaurant2.jpg">
                Flat Rs.50 off (No min limit)
                <div class="overlay">
                    <h2>Coupon Code - GET50</h2><br>
                    <p>Valid till : 09/01/17</p>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <div class="row">

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/movie6.jpg">
                Flat Rs.25 off (No min limit)
                <div class="overlay">
                    <h2>Coupon Code - GET25</h2><br>
                    <p>Valid till : 09/01/16</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/restaurant5.jpg">
                Flat Rs.5 off on each ticket
                <div class="overlay">
                    <h2>Coupon Code - EACH5</h2><br>
                    <p>Valid till : 26/12/16</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/event4.jpg">
                Flat Rs.100 off on Movie + Snacks Combo
                <div class="overlay">
                    <h2>Coupon Code - GET5</h2><br>
                    <p>Valid till : 31/12/16</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/movie7.jpg">
                Flat 50% off (Min 5 person's tickets/table booking)
                <div class="overlay">
                    <h2>Coupon Code - COSMOS50</h2><br>
                    <p>Valid till : 31/12/16</p>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <div class="row">

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/event5.jpg">
                Flat 90% off (Min 5 person's tickets/table booking)
                <div class="overlay">
                    <h2>Coupon Code - COSMOS90</h2><br>
                    <p>Valid till : 05/02/17</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/movie9.jpg">
                Flat Rs.75 off on each ticket
                <div class="overlay">
                    <h2>Coupon Code - EACH75</h2><br>
                    <p>Valid till : 26/12/16</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/restaurant4.png">
                Flat Rs.10 off on each ticket
                <div class="overlay">
                    <h2>Coupon Code - EACH10</h2><br>
                    <p>Valid till : 31/12/16</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/movie5.jpg">
                Flat Rs.50 off on each ticket
                <div class="overlay">
                    <h2>Coupon Code - EACH50</h2><br>
                    <p>Valid till : 05/02/17</p>
                </div>
            </div>
        </div>
        </div>

    <div class="row">


    <br><br><br><br>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/restaurant1.png">
                Flat Rs.90 off on each ticket
                <div class="overlay">
                    <h2>Coupon Code - EACH90</h2><br>
                    <p>Valid till : 15/12/16</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/restaurant6.jpg">
                Flat 5% off (Min 5 person's tickets/table booking)
                <div class="overlay">
                    <h2>Coupon Code - COSMOS5</h2><br>
                    <p>Valid till : 15/12/16</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/restaurant7.jpg">
                Flat Rs.60 off on each ticket
                <div class="overlay">
                    <h2>Coupon Code - EACH60</h2><br>
                    <p>Valid till : 06/12/16</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/event2.jpg">
                Flat 10% off (Min 5 person's tickets/table booking)
                <div class="overlay">
                    <h2>Coupon Code - COSMOS10</h2><br>
                    <p>Valid till : 06/01/17</p>
                </div>
            </div>
        </div>

        </div>

    <div class="row">
        <br><br><br><br>

    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="offer_img/event3.jpg">
                Flat Rs.10 off (No min limit)
                <div class="overlay">
                    <h2>Coupon Code - GET10</h2><br>
                    <p>Valid till : 26/12/16</p>
                </div>
            </div>
        </div>
        </div>
    </div>

</div>




<!--=========== BEGAIN FOOTER ================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="footer_left">

                    <p>Copyright &copy; 2017 <a href="">CoSMOS</a>. All Rights Reserved</p>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="footer_right">
                    <ul class="social_nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=========== END FOOTER ================-->

<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Google map -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/jquery.ui.map.js"></script>
<!-- For smooth animatin  -->
<script src="js/wow.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- superslides slider -->
<script src="js/jquery.superslides.min.js" type="text/javascript"></script>
<!-- slick slider -->
<script src="js/slick.min.js"></script>
<!-- for circle counter -->
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<!-- for portfolio filter gallery -->
<script src="js/modernizr.custom.js"></script>
<script src="js/classie.js"></script>
<script src="js/elastic_grid.min.js"></script>
<script src="js/portfolio_slider.js"></script>

<!-- Custom js-->
<script src="js/custom.js"></script>
</body>
</html>