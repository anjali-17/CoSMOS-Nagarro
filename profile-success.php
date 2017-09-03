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


    <link rel="stylesheet" href="css/search_style.css">
    <link href="style.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <link rel="stylesheet" href="about_style.css">


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
                    <a class="navbar-brand" href="home.html">CoSMOS</a>

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
                            <li><a href="home.html">Home</a></li>
                            <li><a href="restaurant.html">Restaurants</a></li>
                            <li><a href="movie_test.html">Movies</a></li>
                            <li><a href="event_test.html">Events</a></li>
                            <li><a href="offer.html">Offers</a></li>
                            <li><a href="profile.php">Account</a></li>
                            <li><a href="my_booking.php">My Bookings</a></li>
                            <li><a href="about_us.html">About Us</a></li>
                            <li><a href="thank_you.php">Log Out</a></li>
                        </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </div>
    <!-- END MENU -->
</header>

<br><br><br><br><br>


<div class="container-fluid cards-row">
    <div class="container">
        <div class="row">


            <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Password was successfully changed...!!!
            </div>
            <br><br><br>



            <div class="col-sm-6 col-md-6 col-lg-6" align="left">
                <div class="thumbnail">
                    <!--
                    <img src="images/it.png" alt="about us page design using bootstrap">
                    -->
                    <br><br>
                    <img class="team-pic" src="images/user.jpg">
                    <div class="caption">
                        <h3>User Information</h3>
                        <?php
                        session_start();

                        include_once("class.Database.php");

                        $databasename = 'mydb';
                        $collname = 'userdata';
                        $database = new dataBase();
                        $database->getConnection($databasename,$collname);

                        $cursor = $_SESSION["collection"]->findOne(array('uname'=>$_SESSION["loginname"]),array("_id"=>false));
                        echo"
                        <p class='card-description'><strong> Firstname </strong>:  ".$cursor['firstname']."</p>
                        <p class='card-description'><strong> Lastname </strong> :  ".$cursor['lastname']."</p>
                        <p class='card-description'><strong> Username </strong> :  ".$cursor['uname']."</p>
                        <p class='card-description'><strong> DOB </strong>      :  ".$cursor['dob']."</p>
                        <p class='card-description'><strong> EMAIL </strong>   :  ".$cursor['email']."</p>";
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6" align="right">
                <div class="thumbnail">
                    <!--
                    <img src="images/it.png" alt="about us page design using bootstrap">
                    --><!--<img class="team-pic" src="images/rajat.png">-->
                    <div class="caption">
                        <h3>Change Password</h3>
                        <form role="form" action="class.UpdatePassword.php" method="post" class="login-form">
                            <p class="card-description"> <input type="text" name="form-password-current" placeholder="Current Password..." class="form-username form-control" id="form-username"></p>
                            <p class="card-description">  <input type="password" name="form-password-new" placeholder="New Password..." class="form-password form-control" id="form-password"></p>
                            <p class="card-description">  <input type="password" name="form-password-confirm" placeholder="Confirm Password..." class="form-password form-control" id="form-password"></p>
                            <p class="card-description"> <button type="submit" class="btn">Save</button></p>

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