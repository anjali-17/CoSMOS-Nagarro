<?php
session_start();

if(!isset($_SESSION['email_id']) || !isset($_SESSION['pass']))
{
    header("Location: index.php");
}


$con=mysqli_connect ("localhost","root","","turyst");

if (mysqli_connect_errno()) {
    echo "failed to connect mysql: ". mysqli_connect_error();
}

//include 'header.php';
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
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

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

    <style>
        .sk-wave {
            margin: 50px auto 50px auto;
            width: 280px;
            height: 100px;
            text-align: center;
            font-size: 20px;
        }

        .sk-wave .sk-rect {
            background-color: #2F2C2C;
            height: 100%;
            width: 20px;
            margin-left: 20px;
            display: inline-block;
            -webkit-animation: sk-waveStretchDelay 1.2s infinite ease-in-out;
            animation: sk-waveStretchDelay 1.2s infinite ease-in-out;
        }

        .sk-wave .sk-rect1 {
            -webkit-animation-delay: -1.2s;
            animation-delay: -1.2s;
        }

        .sk-wave .sk-rect2 {
            -webkit-animation-delay: -1.1s;
            animation-delay: -1.1s;
        }

        .sk-wave .sk-rect3 {
            -webkit-animation-delay: -1s;
            animation-delay: -1s;
        }

        .sk-wave .sk-rect4 {
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
        }

        .sk-wave .sk-rect5 {
            -webkit-animation-delay: -0.8s;
            animation-delay: -0.8s;
        }

        @-webkit-keyframes sk-waveStretchDelay {
            0%,
            40%,
            100% {
                -webkit-transform: scaleY(0.4);
                transform: scaleY(0.4);
            }
            20% {
                -webkit-transform: scaleY(1);
                transform: scaleY(1);
            }
        }

        @keyframes sk-waveStretchDelay {
            0%,
            40%,
            100% {
                -webkit-transform: scaleY(0.4);
                transform: scaleY(0.4);
            }
            20% {
                -webkit-transform: scaleY(1);
                transform: scaleY(1);
            }
        }
    </style>
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
                            <li><a href="profile.php"><?php
                    //session_start();
                    include("connection.php");

                    $userid = $_SESSION['email_id'];
                    //echo "$userid";
                    //$sql = ;
                    $result = mysql_query("SELECT * FROM turystab WHERE email_id='$userid'");
                    $row = mysql_fetch_array($result);
                    if($row) {
                        $fname = $row["fname"];
                        echo "$fname";
                    }
                      ?></a></li>
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


        <!-- BEGIN SLIDER AREA-->
        <div class="slider_area">
            <!-- BEGIN SLIDER-->
            <div id="slides">
                <ul class="slides-container">

                    <!-- THE FIRST SLIDE-->
                    <li>
                        <!-- FIRST SLIDE OVERLAY -->
                        <div class="slider_overlay"></div>
                        <!-- FIRST SLIDE MAIN IMAGE -->
                        <img src="img\other\restaurant.jpg" alt="img">
                        <!-- FIRST SLIDE CAPTION-->
                        <div class="slider_caption">
                            <h2>Find best of best at CoSMOS</h2>
                            <p>Enjoy all the services at a single place</p>
                            <div class="slider_btn">Yes, it is here</div>
                        </div>
                    </li>

                    <!-- THE SECOND SLIDE-->
                    <li>
                        <!-- SECOND SLIDE OVERLAY -->
                        <div class="slider_overlay"></div>
                        <!-- SECOND SLIDE MAIN IMAGE -->
                        <img src="img\other\event.jpg" alt="img">
                        <!-- SECOND SLIDE CAPTION-->
                        <div class="slider_caption">
                            <h2>Services Unified</h2>
                            <p>Wanna go for Movies or Restaurants or Wanna know about the Events happening in your city</p>
                            <div class="slider_btn">Explore the damn</div>
                        </div>
                    </li>

                    <!-- THE THIRD SLIDE-->
                    <li>
                        <!-- THIRD SLIDE OVERLAY -->
                        <div class="slider_overlay"></div>
                        <!-- THIRD SLIDE MAIN IMAGE -->
                        <img src="img\other\movie.jpg" alt="img">
                        <!-- THIRD SLIDE CAPTION-->
                        <div class="slider_caption">
                            <h2>Basket of Offers</h2>
                            <p>Why pay more, Right...</p>
                            <div class="slider_btn">Yes, damn you are!</div>
                        </div>
                    </li>
                </ul>
                <!-- BEGAIN SLIDER NAVIGATION -->
                <nav class="slides-navigation">
                    <!-- PREV IN THE SLIDE -->
                    <a class="prev" href="#">
                        <span class="icon-wrap"></span>
                        <h3><strong>Prev</strong></h3>
                    </a>
                    <!-- NEXT IN THE SLIDE -->
                    <a class="next" href="#">
                        <span class="icon-wrap"></span>
                        <h3><strong>Next</strong></h3>
                    </a>
                </nav>
            </div>
            <!-- END SLIDER-->
        </div>
        <!-- END SLIDER AREA -->
   <!-- </header>
    <!--=========== End HEADER SECTION ================-->






    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- BEGAIN SERVICE HEADING -->
                    <div class="heading">
                        <h2 class="wow fadeInLeftBig">Our Services</h2>
                        <p>We provide our customer with wide range of services as given.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- BEGAIN SERVICE  -->
                    <div class="service_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <!-- BEGAIN SINGLE SERVICE -->
                                <div class="single_service wow fadeInLeft">
                                    <div class="service_iconarea">
                                        <span class="fa fa-pie-chart service_icon"></span>
                                    </div>
                                    <h3 class="service_title">Restaurants</h3>
                                    <div align="center">
                                        <p>Find all the exotic restaurant with great taste and liking here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <!-- BEGAIN SINGLE SERVICE -->
                                <div class="single_service wow fadeInRight">
                                    <div class="service_iconarea">
                                        <span class="fa fa-youtube-play service_icon"></span>
                                    </div>
                                    <h3 class="service_title">Movies</h3>
                                    <div align="center">
                                        <p>Go for the movies of your choice from here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <!-- BEGAIN SINGLE SERVICE -->
                                <div class="single_service wow fadeInLeft">
                                    <div class="service_iconarea">
                                        <span class="fa fa-pause service_icon"></span>
                                    </div>
                                    <h3 class="service_title">Events</h3>
                                    <div align="center">
                                        <p>Get to know what new events are occurring in your city.</p>
                                        <!-- <span class="label label-success">Comming Soon</span> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <!-- BEGAIN SINGLE SERVICE -->
                                <div class="single_service wow fadeInRight">
                                    <div class="service_iconarea">
                                        <span class="fa fa-money service_icon"></span>
                                    </div>
                                    <h3 class="service_title">Offers</h3>
                                    <div align="center">
                                        <p>Get awesome discount offers.</p>
                                        <!-- <span class="label label-success">Comming Soon</span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== END SERVICE SECTION ================-->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- BEGAIN ABOUT HEADING -->
                    <div class="heading">
                        <h2 class="wow fadeInLeftBig">Trending</h2>


                        <div id="loading">
                            <center>

                                <div class="sk-wave" style="height:200px;">
                                    <div class="sk-rect sk-rect1"></div>
                                    <div class="sk-rect sk-rect2"></div>
                                    <div class="sk-rect sk-rect3"></div>
                                    <div class="sk-rect sk-rect4"></div>
                                    <div class="sk-rect sk-rect5"></div>
                                </div>

                            </center>
                        </div>
                        <!-- BEGAIN SINGLE TEAM SLIDE#1 -->
                        <!--<div class=".slick-list">
      	                                        <div id="to_append" class=".slick-track">

      	                                        </div>
      	                            </div>-->
                        <!-- <div id="append_trending">

                        </div> -->
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </section>

    <!--=========== END TEAM SECTION ================-->


    <!--=========== BEGAIN FOOTER ================-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer_left">

                        <p>Copyright &copy; 2017 <a href="">CoSMOS</a>. All Rights Reserved</p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
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
    <script src="trending.js"></script>
    <script>
        $(document).ready(function() {
            //test();
            first_ajax();
        });
    </script>
</body>

</html>
