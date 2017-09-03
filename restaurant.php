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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css\Gridlist.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js\Gridlist.js"></script>
    <link rel="stylesheet" href="css\search_style.css">
    <link rel="stylesheet" href="css\slideshow.css">
    <script src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
    <title>CoSMOS</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

    <!-- CSS
    ================================================== -->


    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/filter_style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->


    <script src="js/jquery-2.1.1.js"></script>

    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/main.js"></script> <!-- Resource jQuery -->


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
    <link id="orginal" href="css/themes/eucalyptus-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">

    <link rel="stylesheet" href="css/search_style.css">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <link href="flat/green.css" rel="stylesheet">

    <script type="text/javascript" src ="list.js"></script>



    <link rel="stylesheet" href="css/jquery-ui.min.css"/>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        
        .sk-rotating-plane {
  width: 100px;
  height: 100px;
  background-color: #333;
  margin: 40px auto;
  margin-top:150px!important;
  -webkit-animation: sk-rotatePlane 1.2s infinite ease-in-out;
          animation: sk-rotatePlane 1.2s infinite ease-in-out; }

@-webkit-keyframes sk-rotatePlane {
  0% {
    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg);
            transform: perspective(120px) rotateX(0deg) rotateY(0deg); }
  50% {
    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
            transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg); }
  100% {
    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
            transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg); } }

@keyframes sk-rotatePlane {
  0% {
    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg);
            transform: perspective(120px) rotateX(0deg) rotateY(0deg); }
  50% {
    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
            transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg); }
  100% {
    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
            transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg); } }


 .sk-three-bounce {
  margin: 40px auto;
  width: 200px;
  text-align: center; }
  .sk-three-bounce .sk-child {
    width: 40px;
    height: 40px;
    background-color: #333;
    border-radius: 100%;
    display: inline-block;
    -webkit-animation: sk-three-bounce 1.4s ease-in-out 0s infinite both;
            animation: sk-three-bounce 1.4s ease-in-out 0s infinite both; }
  .sk-three-bounce .sk-bounce1 {
    -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s; }
  .sk-three-bounce .sk-bounce2 {
    -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s; }

@-webkit-keyframes sk-three-bounce {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0); }
  40% {
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes sk-three-bounce {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0); }
  40% {
    -webkit-transform: scale(1);
            transform: scale(1); } }


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


    <br>
    <br>
    <br>
    <br>
    <br>
    <!--=========== BEGIN ABOUT SECTION ================-->
    <!--
    <section id="about">
        <div class="container">
            <div class="row" id ="products">



            </div>
        </div>
    </section>
    -->
            <section id="about">
                <div class="container-fluid">
                  <div class="row">
                      <div class="col-sm-2" style="float:left; position:fixed;left:0px;width:25%;">
                     <div id="loader" class="sk-rotating-plane"></div>
                    <div id="whole_filter">
                      <div id="filter">
                        <h2>Sort by rating</h2>
                        <div style="background-color:#b3b3b3;">
                          <div style="width:30%;float:left;margin-right:20%;margin-top:9%;">
                            <h4 id="sort_order_text">Decreasing</h4>
                          </div>
                          <div style="width:50%;float:left;margin-top:9%;">
                            <input id="sort_order" type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="primary" data-on=" " data-off=" " data-width="100" data-style="slow">
                          </div>

                        </div>
                        <h2>Show by rating</h2>
                        <div style="background-color:#b3b3b3;">
                          <div style="width:12%;float:left;margin-top:11%;">
                            <span id="slval1" style="font-weight: bold;color:#663d00;"></span>
                          </div>
                          <div style="width:65%;float:left;margin-top:12%;">
                            <div id="slider"></div>
                          </div>
                          <div style="width:12%;float:left;margin-left:6%;margin-top:11%;">
                            <span id="slval2" style="font-weight:bold;color:#663d00;"></span>
                          </div>
                        </div>
                        <h2>Show by type</h2>
                        <div style="background-color:#b3b3b3;">
                          <input id="bar" class="place_type customcheck" type="checkbox" checked>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBar<br /><br />
                          <input id="spa" class="place_type customcheck" type="checkbox" checked>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSpa<br /><br />
                          <input id="accomodation" class="place_type customcheck" type="checkbox" checked>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAccomodation
                        </div>
                      </div>
                    </div>
                    </div>
                    <div style="float:left; margin-left:25%;width:75%;height: 600px;" id="movie_loader">
                <div class="sk-three-bounce">
                  <div class="sk-child sk-bounce1"></div>
                  <div class="sk-child sk-bounce2"></div>
                  <div class="sk-child sk-bounce3"></div>
                </div>
            </div>
                    <div style="float:left; margin-left:25%;width:75%;" id ="products">
                    </div>
                  </div>
                </div>
            </section>




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
    <script src="js/jquery-ui.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script type="text/javascript" src="js/icheck.js"></script>
    <!-- Search Logic is here-->
        <script>
            $(document).ready(function(){ $('form').bind("keypress", function(e) {
                if (e.keyCode == 13) {
                    e.preventDefault();
                    return false;
                }
                });
                $.extend($.expr[':'], {
                    'containsi': function(elem, i, match, array)
                    {
                        return (elem.textContent || elem.innerText || '').toLowerCase()
                        .indexOf((match[3] || "").toLowerCase()) >= 0;
                    }
                });
                $("#search_page").keyup(function(){
                    var to_search=$(this).val();
                    if(to_search){
                    $("#products").find("#search_item:not(:containsi(" + to_search + "))").parentsUntil("#hide_area").fadeOut("slow");
                    $("#products").find("#search_item:containsi(" + to_search + ")").parentsUntil("#hide_area").fadeIn("slow");
                    }else{
                        //$("#products").find("#hide_area").fadeIn("fast");
                        $("#products").find("#search_item:not(:containsi(" + to_search + "))").parentsUntil("#hide_area").fadeIn("slow");
                    $("#products").find("#search_item:containsi(" + to_search + ")").parentsUntil("#hide_area").fadeIn("slow");
                    }
                    return false;
                });

                $("#whole_filter").fadeOut("fast");
                $("#products").fadeOut("fast");
    setTimeout(function(){
      $("#loader").fadeOut("fast");
      $("#whole_filter").fadeIn("slow");
    },3000);


                $('#sort_order').change(function() {
                  var test=$(this).prop('checked');
                  if(test==true){
                    $('#sort_order_text').html('Decreasing');
                  }
                  else{
                    $('#sort_order_text').html('Increasing');
                  }
                  // var len = display_array.length;
                  // display_array.splice(0, len);
                  // console.log("EMPTY");
                  // console.log(display_array);
                  implementfilter();

                });

        });
    </script>
</body>
</html>
