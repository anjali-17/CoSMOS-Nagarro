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
<!-- saved from url=(0028)http://localhost/booking.php -->
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

    <link href="style.css" rel="stylesheet">


    <style type="text/css">
        .container {
            font-size: 15px;
        }

        body {
            padding-top: 70px;
        }

        .card {
            /*width: 800px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
            text-align: left;*/

            -webkit-box-shadow: 35px 11px 39px -4px rgba(0,0,0,0.63);
            -moz-box-shadow: 35px 11px 39px -4px rgba(0,0,0,0.63);
            box-shadow: 35px 11px 39px -4px rgba(0,0,0,0.63);
              text-align: left;
              width: 800px;


              border-radius: 0px 0px 65px 0px;
-moz-border-radius: 0px 0px 65px 0px;
-webkit-border-radius: 0px 0px 65px 0px;
border: 2px solid #1e1f1f;

            background: #EEE8AA;
        }

        .set {
            margin-bottom: 40px;
        }

.sk-double-bounce {
  width: 200px;
  height: 200px;
  position: relative;
  margin: 40px auto; }
  .sk-double-bounce .sk-child {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: #00FFFF;
    opacity: 0.6;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-animation: sk-doubleBounce 2s infinite ease-in-out;
            animation: sk-doubleBounce 2s infinite ease-in-out; }
  .sk-double-bounce .sk-double-bounce2 {
    -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s; }

@-webkit-keyframes sk-doubleBounce {
  0%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0); }
  50% {
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes sk-doubleBounce {
  0%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0); }
  50% {
    -webkit-transform: scale(1);
            transform: scale(1); } }

.retroshadow {
    color: #2c2c2c;
    /*background-color: #d5d5d5;*/
    letter-spacing: .05em;
    text-shadow: 
      4px 4px 0px #d5d5d5, 
      7px 7px 0px rgba(0, 0, 0, 0.5);
  }
    </style>
</head>
    
<body>




<!-- BEGAIN PRELOADER -->
<div id="preloader" style="display: none;">
    <div id="status" style="display: none;">&nbsp;</div>
</div>
<!-- END PRELOADER -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="my_booking.php#" style="display: inline;"><i class="fa fa-angle-up"></i></a>
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


    <br><br>


        <div style="margin-bottom:20px;margin-top:20px;">
        <center>
            <h2 class="retroshadow">Booking History</h2>
        </center>
        </div>
        <!--<div id="loading" style="margin-top: 50px!important;margin-bottom: 50px!important;">
    <div class="sk-double-bounce">
        <div class="sk-child sk-double-bounce1"></div>
        <div class="sk-child sk-double-bounce2"></div>
      </div>
    </div>-->
    <div  style='height: 400px; width: 80%;margin-left:10%!important;margin-top:5%!important;margin-bottom:10%!important;'>
    <div class='container card set'>
            <table class='table'>

                <tbody><tr>
                    <td class='col-sm-5'><b>Title</b></td>
                    <td class='col-sm-5'><span id='title'>Hari Mahal Palace</td>

                </tr>
                <tr>
                    <td class='col-sm-6'><b>Type</b></td>
                    <td class='col-sm-6'><span id='type'>Resort</td>
                </tr>
                <tr>
                    <td class='col-sm-4'><b>Location</b></td>
                    <td class='col-sm-8'><span id='location'>Tirthraj, Jacob Road, Civil Lines, Madrampur, Civil Lines, </td>
                </tr>
                <tr>
                    <td class='col-sm-6'><b>Date Booked</b></td>
                    <td class='col-sm-6'><span id='date'>04/09/2017</td>
                </tr>
                <tr>
                    <td class='col-sm-4'><b>Rserved For</b></td>
                    <td class='col-sm-8'><span id='seat'>2</td>
                </tr>
            </tbody></table>
    </div>
        <?php
        //session_start();

        /*include("connection.php");
        //$con=mysqli_connect("localhost","root","","turyst");

        $userid = $_SESSION['email_id'];
        $result = mysql_query("SELECT * FROM turystab WHERE email_id='$userid'");
        //$row = mysql_fetch_array($result);
        
            echo "<table><tr><th>Booking ID</th><th>Destination</th><th>Title</th><th>Seats</th><th>Slot</th><th>Date</th><th>Type</th><th>Payable</th></tr>";
    // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["book_id"]."</td><td>".$row["destination"]."</td><td>".$row["title"]."</td><td>".$row["seats"]."</td><td>".$row["slot"]."</td><td>".$row["date"]."</td><td>".$row["type"]."</td><td>".$row["payable"]."</td></tr>";
        }
        echo "</table>";*/
        
        /*$databasename = 'mydb';
        $collname = 'bookings';
        $database = new dataBase();
        $database->getBookingConnnection($databasename,$collname);

        $cursor = $_SESSION["booking_collection"]->find(array('uname'=>$_SESSION["loginname"]),array("_id"=>false));
        echo "<div id='chartContainer' style='height: 400px; width: 80%;margin-left:10%!important;margin-top:5%!important;margin-bottom:10%!important;'>";
        foreach ($cursor as $document){
        echo"
    </div>


        <div class='container card set'>
            <table class='table'>

                <tbody><tr>
                    <td class='col-sm-5'><b>Title</b></td>
                    <td class='col-sm-5'><span id='title'>".$document['title']."</td>

                </tr>
                <tr>
                    <td class='col-sm-6'><b>Type</b></td>
                    <td class='col-sm-6'><span id='type'>".$document['type']."</td>
                </tr>
                <tr>
                    <td class='col-sm-4'><b>Location</b></td>
                    <td class='col-sm-8'><span id='location'>".$document['destination']."</td>
                </tr>
                <tr>
                    <td class='col-sm-6'><b>Date Booked</b></td>
                    <td class='col-sm-6'><span id='date'>".$document['date']."</td>
                </tr>
                <tr>
                    <td class='col-sm-4'><b>Total Seats</b></td>
                    <td class='col-sm-8'><span id='seat'>".$document['seats']."</td>
                </tr>
            </tbody></table>
        </div>";
    }*/
        ?>







<!--=========== BEGAIN FOOTER ================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="footer_left">

                    <p>Copyright © 2017 <a href="my_booking.php">CoSMOS</a>. All Rights Reserved</p>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="footer_right">
                    <ul class="social_nav">
                        <li><a href="my_booking.php#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="my_booking.php#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="my_booking.php#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="my_booking.php#"><i class="fa fa-linkedin"></i></a></li>
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
<script src="js/custom.js"></script>
<script src="js/canvasjs.min.js"></script>
<script src="plot.js"></script>



<script type="text/javascript">
    
$(document).ready(function(){
    // var title;
    // title=$( "span[id^='title']" );
    // console.log(title[0].innerText);
    // console.log(title[1].innerText);
    // console.log(title[2].innerText);
    // console.log(title[3].innerText);
    // console.log(title[4].innerText);
    // console.log(title[5].innerText);
    // console.log(title.length);

    $("#chartContainer").fadeOut("fast");
    setTimeout(get_data,1000);
});
</script>
</body></html>