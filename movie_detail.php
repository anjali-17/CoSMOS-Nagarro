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
<html lang="en" xmlns="http://www.w3.org/1999/html">
   <head>
      <!-- Basic Page Needs
         ================================================== -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/Gridlist.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="js/Gridlist.js"></script>
      <link rel="stylesheet" href="css/search_style.css">
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
      <link id="orginal" href="css/themes/plum-theme.css" rel="stylesheet">
      <!-- Main structure css file -->
      <link href="style.css" rel="stylesheet">
      <link rel="stylesheet" href="css/search_style.css">
      <link rel="stylesheet" href="popup.css">
      <!-- Google fonts -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      -->
      <script src="reccomendmovie.js"></script>
      
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

      <script type="text/javascript" src="movie.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
             $("div#lyrics").hide();
         
             $("#songlist tr").mouseover(function(){
                 $(this).css("background-color","#ccc");
                 $("#lyrics",this).show();
             }).mouseout(function(){
                 $(this).css("background-color","#eee");
                 $("#lyrics",this).hide();
             });
         
         });
      </script>
      <style>
         .label + .label {
         margin-left: 5px;
         }
         #message{
            margin-left: 10px ;
            margin-bottom: 20px ;
         }
         #total_amount{
            margin-right: 30px;
         }
      </style>
      <style type="text/css">
         body { margin: 0; }
         #shade, #modal { display: none; }
         #shade { position: fixed; z-index: 100; top: 0; left: 0; width: 100%; height: 100%; }
         #modal { position: fixed; z-index: 101; top: 20%; left: 25%; width: 50%; }
         #shade { background: silver; opacity: 0.5; filter: alpha(opacity=50); }
         input[type=date]::-webkit-inner-spin-button {
                            -webkit-appearance: none;
                            display: none;
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
      <section id="about">
         <div class="container">
            <div class="row" id ="products">
               <div id="hide_area" class="col-lg-12 col-md-12">
                  <div class="about_area">
                     <div class="heading">
                        <h2 class="wow fadeInLeftBig" id="search_item">
                        </h2>
                     </div>
                     <!-- START ABOUT CONTENT -->
                     <div class="about_content">
                        <div class="row">
                           <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="about_featured">
                                 <div class="panel-group" id="accordion">
                                    <div class="row">
                                       <div class="col-lg-6 col-md-6 col-sm-12">
                                          <div class="panel panel-default wow fadeInLeft">
                                             <div class="panel-heading">
                                                <h4 class="panel-title"> IMDb </h4>
                                             </div>
                                             <div id="vote_id" class="panel-body" >
                                                <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                             </div>
                                             <div id='select' class="panel-body">
                                                <span style="display: block; width: 160px; height: 16px; background: url(img/stars10.png) 0 0;">
                                                <span id="star_id" style="display: block; width:0%; height: 16px; background: url(img/stars10.png) 0 -16px;">
                                                </span>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-12">
                                          <div class="panel panel-default wow fadeInLeft">
                                             <div class="panel-heading">
                                                <h4 class="panel-title">Genre</h4>
                                             </div>
                                             <div class="panel-body" id="genre_id">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-6 col-md-6 col-sm-12">
                                          <div class="panel panel-default wow fadeInLeft">
                                             <div class="panel-heading">
                                                <h4 class="panel-title"> Language </h4>
                                             </div>
                                             <div class="panel-body" id="language_id">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-12">
                                          <div class="panel panel-default wow fadeInLeft">
                                             <div class="panel-heading">
                                                <h4 class="panel-title">production company</h4>
                                             </div>
                                             <div class="panel-body" id="production_id">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-6 col-md-6 col-sm-12">
                                          <div class="panel panel-default wow fadeInLeft">
                                             <div class="panel-heading">
                                                <h4 class="panel-title"> Budget </h4>
                                             </div>
                                             <div class="panel-body" id="budget_id">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-12">
                                          <div class="panel panel-default wow fadeInLeft">
                                             <div class="panel-heading">
                                                <h4 class="panel-title">Visit IMDB page</h4>
                                             </div>
                                             <div class="panel-body" >
                                                <a id="imdb" class="btn btn-info btn-sm btn-block" href="#"><b>IMDB Page</b></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="panel panel-default wow fadeInLeft">
                                       <div class="panel-heading">
                                          <h4 class="panel-title"> Overview </h4>
                                       </div>
                                       <div class="panel-body" , id="overview_id">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="about_slider">
                                 <!-- BEGAIN FEATURED SLIDER -->
                                 <div class="featured_slider">
                                    <!-- SINGLE SLIDE IN THE SLIDER -->
                                    <div style="padding-left:15px; " class="single_iteam">
                                       <img  width="450" height="450"  alt="img" id="image_id">
                                    </div>
                                 </div>
                                 <!-- END FEATURED SLIDER -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--=========== BEGIN TRAILER & REVIEWS SECTION ================-->
      <section id="testimonial" style="background-color: #b3ffd9;">
         <div class="container">
            <div class="row">
               <div class=" col-lg-6 col-md-6 col-sm-6">
                  <!-- START BLOG HEADING -->
                  <div class="panel panel-default wow fadeInLeft">
                     <div class="heading panel-heading">
                        <h2 class="wow fadeInLeftBig">TRAILER</h2>
                     </div>
                     <div id="youtube">
                     </div>
                  </div>
               </div>
               <div class=" col-lg-6 col-md-6 col-sm-6" style="background-color:#ffff99;">
                  <div class="panel panel-default wow fadeInLeft" >
                     <div class="heading panel-heading">
                        <h2 class="wow fadeInLeftBig">Reviews</h2>
                     </div>
                     <div class="testimonial_customer">
                        <!-- BEGAIN TESTIMONIAL SLIDER -->
                        <ul class="testimonial_slider" id = "userReviews">
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--=========== END TRAILER & REVIEWS SECTION ================-->
      <!--=========== BEGIN CAST & CREW SECTION ==============-->
      <section id="team">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <!-- BEGAIN ABOUT HEADING -->
                  <div class="heading">
                     <h2 class="wow fadeInLeftBig">Cast and crew</h2>
                  </div>
                  <div class="team_area">
                     <!-- BEGAIN TEAM SLIDER -->
                     <div class="team_slider">
                        <!-- BEGAIN SINGLE TEAM SLIDE#1 -->
                        <!--<div class=".slick-list">
                           <div id="to_append" class=".slick-track">
                           
                           </div>
                           </div>-->
                        <div id="here_append_cast">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--=========== END CAST & CREW SECTION ===============-->
      <!--=========== BEGIN RECCOMENDER SECTION ==============-->
      <section id="team">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <!-- BEGAIN ABOUT HEADING -->
                  <div class="heading">
                     <h2 class="wow fadeInLeftBig">Recommended Movies</h2>
                  </div>
                  <div class="team_area">
                     <!-- BEGAIN TEAM SLIDER -->
                     <div class="team_slider">
                        <!-- BEGAIN SINGLE TEAM SLIDE#1 -->
                        <!--<div class=".slick-list">
                           <div id="to_append" class=".slick-track">
                           
                           </div>
                           </div>-->
                        <div id="here_append">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--=========== END RECCOMENDER SECTION ===============-->
      <!--================Pricing==================-->
      <section id="price">
         <div id="contact">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 col-md-12">
                     <div class="about_area">
                        <!-- START ABOUT HEADING -->
                        <!-- START ABOUT CONTENT -->
                        <div class="about_content">
                           <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12">
                                 <div class="heading">
                                    <h2 class="wow fadeInLeftBig">Currently In </h2>
                                 </div>
                                 <div class="about_featured">
                                    <div class="panel-group" id="accordion">
                                       <!-- START SINGLE FEATURED ITEAM #1-->
                                       <div class="panel panel-default wow fadeInLeft">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" >
                                                <span class="fa fa-television"></span>INOX : Pink City
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="collapseOne" class="panel-collapse collapse in">
                                             <div class="panel-body">
                                                <ul>
                                                   <li>
                                                      <ul class="list-inline">
                                                         <li><a class="tooltips">12:00PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips">3:15PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips">05:30PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips">09:00PM
                                                            <span>Normal : Rs. 120<br>Executive : Rs. 150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                      </ul>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- START SINGLE FEATURED ITEAM #2 -->
                                       <div class="panel panel-default wow fadeInLeft">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion">
                                                <span class="fa fa-television"></span>Cinepolis : World Trade Park
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="collapseTwo" class="panel-collapse collapse in">
                                             <div class="panel-body">
                                                <ul>
                                                   <li>
                                                      <ul class="list-inline">
                                                         <li><a class="tooltips">12:00PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips">3:15PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips">05:30PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips">09:00PM
                                                            <span>Normal : Rs. 120<br>Executive : Rs. 150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                      </ul>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- START SINGLE FEATURED ITEAM #3 -->
                                       <div class="panel panel-default wow fadeInLeft">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion">
                                                <span class="fa fa-television"></span>INOX : C-Scheme
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="collapseThree" class="panel-collapse collapse in">
                                             <div class="panel-body">
                                                <ul>
                                                   <li>
                                                      <ul class="list-inline">
                                                         <li><a class="tooltips">12:00PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips">3:15PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips">05:30PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips">09:00PM
                                                            <span>Normal : Rs. 120<br>Executive : Rs. 150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                      </ul>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- START SINGLE FEATURED ITEAM #4 -->
                                       <div class="panel panel-default wow fadeInLeft">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion">
                                                <span class="fa fa-television"></span>Raj Mandir
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="collapseFour" class="panel-collapse collapse in">
                                             <div class="panel-body">
                                                <ul>
                                                   <li>
                                                      <ul class="list-inline">
                                                         <li><a class="tooltips" >12:00PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips" >3:15PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips">05:30PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips" >09:00PM
                                                            <span>Normal : Rs. 120<br>Executive : Rs. 150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                      </ul>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- START SINGLE FEATURED ITEAM #5 -->
                                       <div class="panel panel-default wow fadeInLeft">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion">
                                                <span class="fa fa-television"></span>Polo Victory
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="collapseFive" class="panel-collapse collapse in">
                                             <div class="panel-body">
                                                <ul>
                                                   <li>
                                                      <ul class="list-inline">
                                                         <li><a class="tooltips">12:00PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips" >3:15PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips" >05:30PM
                                                            <span>Normal : Rs.120<br>Executive : Rs.150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                         <li><a class="tooltips" >09:00PM
                                                            <span>Normal : Rs. 120<br>Executive : Rs. 150<br>Royale : Rs.180</span></a>
                                                         </li>
                                                      </ul>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12">
                                 <div class="heading">
                                    <h2 class="wow fadeInLeftBig">Book Ticket</h2>
                                 </div>
                                 <div class="row">
                                    <!-- BEGAIN CONTACT CONTENT -->
                                    <div class="contact_content">
                                       <!-- BEGAIN CONTACT FORM -->
                                       <div class="col-lg-5 col-md-5 col-sm-5">
                                          <div class="contact_form">
                                             <!-- FOR CONTACT FORM MESSAGE -->
                                             <div id="form-messages"></div>
                                             <form>
                                                <div class="form-group">
                                                   <label class="control-label">
                                                   Number of Tickets
                                                   </label>
                                                   <input class="form-control" type="number" placeholder="Number of Tickets..." min = "1" max = "5" value="1" id = "number">
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label">
                                                   <br>Place
                                                   </label>
                                                   <select class="form-control" name="name" id = "theatre_id">
                                                      <option value="inox-pink-square">INOX : Pink Square</option>
                                                      <option value="cinepolis-wtp"  >Cinepolis : World Trade Park</option>
                                                      <option value="inox-c-scheme" >INOX : C-Scheme</option>
                                                      <option value="raj-mandir" >Raj Mandir</option>
                                                      <option value="polo-victory">Polo Victory</option>
                                                   </select>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label">
                                                   <br>Show Time
                                                   </label>
                                                   <select class="form-control" name="time" id="slot_id">
                                                      <option value="12:00PM" >12:00 PM</option>
                                                      <option value="02:00PM">02:00 PM</option>
                                                      <option value="05:15PM">05:15 PM</option>
                                                      <option value="09:00PM">09:00 PM</option>
                                                   </select>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label">
                                                   <br>Class
                                                   </label>
                                                   <select class="form-control" name="name" id="category_id">
                                                      <option value="normal">Normal</option>
                                                      <option value="executive">Executive</option>
                                                      <option value="royale">Royale</option>
                                                   </select>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label">
                                                   <br>Date of booking
                                                   </label><br>
                                                   <input type="date" class="datepicker" id="input_date">
                                                </div>
                                                <!-- <input class="submit_btn" type="submit" value="Go...">-->
                                             </form>
                                             <div id="shade"></div>
                                             <div id="modal">
                                                <div class="modal-dialog">
                                                   <!-- Modal content-->
                                                   <div class="modal-content">
                                                      <div class="modal-header">
                                                         <button type="button" id="close" class="close" data-dismiss="modal">&times;</button>
                                                         <h3 class="modal-title" id = "modal_title">Ticket Booking</h3>
                                                      </div>
                                                      <div class="modal-body">
                                                            <div id = "successful_id">
                                                                <h4> Booking Process completed to view your booking details visit booking details </h4>
                                                            </div>
                                                            <div id = "payment_id">
                                                                 <p id = "payable_amount"></p>
                                                                 <h4>Redeem Coupon</h4>
                                                                 <form>
                                                                    <input class="form-control" type="text" placeholder="Coupon Code" id = "coupon_code">
                                                                    <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#" id="button_redeem">Redeem Coupon</button>
                                                                 </form>
                                                                 <br><br>
                                                                 <div class="row">
                                                                 <p id = "message"></p>
                                                                 </div>
                                                                 <div class="row">
                                                                    <div class="col-lg-3">
                                                                       <p id="total_amount"></p>
                                                                    </div>                                       <div id="form_submit">                                              </div>

                                           
                                                                 </div>
                                                             </div>
                                                      </div>
                                                      <!--
                                                         <div class="modal-footer">
                                                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                         </div>
                                                         -->
                                                   </div>
                                                </div>
                                             </div>
                                             <p>
                                                <button id="start" class="btn btn-primary btn-lg">Book Tickets</button>
                                             </p>

                                             
                                             <script type="text/javascript">
                                                var modal= document.getElementById('modal');
                                                var shade= document.getElementById('shade');
                                                document.getElementById('start').onclick= function() {
                                                    modal.style.display=shade.style.display= 'block';
                                                };
                                                document.getElementById('close').onclick= function() {
                                                    modal.style.display=shade.style.display= 'none';
                                                };
                                                
                                                // This code is a workaround for IE6's lack of support for the
                                                // position: fixed style.
                                                //
                                                
                                             </script>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
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
    <script src="reccomendmovie.js"></script>
      <!-- for circle counter -->
      <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
      <!-- for portfolio filter gallery -->
      <script src="js/modernizr.custom.js"></script>
      <script src="js/classie.js"></script>
      <script src="js/elastic_grid.min.js"></script>
      <script src="js/portfolio_slider.js"></script>
      <!-- Custom js-->
      <script src="js/ourcustom.js"></script>
      <!-- Search Logic is here-->
      <script>
            var slotF ;
            var numberF ;
            var payableF ;
            var destinationF ;
            var couponF ;

            var datePicker = document.getElementById('input_date');

         var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();


        if(dd<10) {
            dd='0'+dd
        } 

        if(mm<10) {
            mm='0'+mm
        } 

        today = yyyy+'-'+mm+'-'+dd;
         $('#input_date').val(today);


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
         $.ajax('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=28.4595, 77.0266&radius=25000&type=restaurant&key=AIzaSyBbkrlIKNGHRuuIBJWwfmF2pZlQ7uIGqaA', {
         success: function(result) {
         console.log("here");
          
         window.location='cors_disable.html';
         },
         error: function() {
         console.log("Error");
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
         });
         var number = document.getElementById('number');
         
            // Listen for input event on numInput.
            number.onkeydown = function(e) {
                if(number.value >= 1 && number.value <= 5)
                    return false ;
                if(!((e.keyCode > 95 && e.keyCode < 106)
                  || (e.keyCode > 47 && e.keyCode < 58) 
                  || e.keyCode == 8)) {
         
                    return false;
                }
            }

            document.getElementById("button_redeem").addEventListener("click",function(){
                var amt  = document.getElementById("total_amount").value;
                var pay = document.getElementById("payable_amount");
                var message = document.getElementById("message");
                var coupon = document.getElementById("coupon_code");

                var coupons = ["FREE10","GET50","COSMOS100","COSMOS50","COSMOS90"];
                if(amt < 200){
                    message.innerHTML = "COUPON CANNOT BE APPLIED (MIN AMOUNT = RS . 200)";
                    message.style.color = "#e53935";
                }else{
                    console.log("AMOUNT : " + amt);
                    message.style.color = "#1565C0";
                    if(coupon.value == coupons[0]){
                        payable_amount.innerHTML = "Payable Amount : Rs." + (amt- (amt * 10 / 100)) ;
                        payable_amount.value = (amt- (amt * 10 / 100));
                        message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                    }else if(coupon.value == coupons[1]){
                        payable_amount.innerHTML = "Payable Amount : Rs." + (amt - 50) ;
                         payable_amount.value = (amt - 50) ; 
                      message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";

                    }else if(coupon.value == coupons[2]){
                        payable_amount.innerHTML = "Payable Amount : Rs." + (amt - 100) ;
                        payable_amount.value = amt - 50 ; 
                        message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";

                    }else if(coupon.value == coupons[3]){
                        payable_amount.innerHTML ="Payable Amount : Rs." + (amt - (amt * 50 / 100));
                        payable_amount.value = amt - amt*50/100 ;
                        message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";

                    }else if(coupon.value == coupons[4]){
                        payable_amount.innerHTML = "Payable Amount : Rs." + (amt - (amt * 90 / 100));
                        payable_amount.value = amt - amt*90/100 ;
                        message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";

                    }else{
                        message.innerHTML = "Invalid Code";
                        message.style.color = "#e53935";
                    }

                }

                var t1 = document.getElementById('t1');
                var t2 = document.getElementById('t2');
                
                payableF = payable_amount.value ;
                couponF = coupon.value ;

                t1.value = payableF ;
                t2.value = couponF ;


            });
            document.getElementById("start").addEventListener("click", function(){

                     if(datePicker.value < today){
                                datePicker.value = today ;
                            }
                     console.log(datePicker.value);       

                    var theatre = document.getElementById("theatre_id");
                    var slot = document.getElementById("slot_id");
                    var category = document.getElementById("category_id");
                    var number  = document.getElementById("number");
                    var message = document.getElementById("message");
                    var movieTitle = document.getElementById("search_item");


                    message.innerHTML = "";


                var payment_id = document.getElementById("payment_id");
                var booking = document.getElementById("successful_id");
                var title = document.getElementById("modal_title");

                title.innerHTML = 'Ticket Booking';
                booking.style.display = 'none';
                payment_id.style.display = 'block';

                movieTitle = movieTitle.innerHTML;


                    number = number.value;
                     theatre = theatre.options[theatre.selectedIndex].value; 
                     slot = slot.options[slot.selectedIndex].value;            
                     category = category.options[category.selectedIndex].value;

                    numberF = number ;
                    destinationF = theatre ;
                    slotF = slot ;     

                     var amt = 0 ;
                    if(category == "executive"){
                        //150
                        amt = 150 * number ;
                    }else if (category == "normal"){
                        //120 
                        amt = 120 * number ;
                    }else{
                        //180
                        amt = 180 * number ;
                    }
                     var total_amount = document.getElementById("total_amount");
                     var payable_amount = document.getElementById("payable_amount");

                     total_amount.innerHTML = " Total Amount : Rs " + amt;
                     total_amount.value = amt ;
                     payable_amount.innerHTML = "Payable Amount : Rs " + amt ;    
                     var pay = document.getElementById("payable_amount");
                        var coupon = document.getElementById("coupon_code");
                        var pay = document.getElementById("payable_amount");
                        payableF = amt;
                        couponF = coupon.value ;

                        // console.log('Payable Amt  : ' + payableF);
                        // console.log('Coupon Code : ' + couponF) ;
                        // console.log('Slot : ' + slotF);
                        // console.log('Destination : ' + destinationF);
                        // console.log('Number : ' + numberF);
                        // console.log('Movie Title : ' + movieTitle); 

                        // var t1 = document.getElementById('t1');
                        // var t2 = document.getElementById('t2');
                        // var t3 = document.getElementById('t3');
                        // var t4 = document.getElementById('t4');
                        // var t5 = document.getElementById('t5');
                        // var t6 = document.getElementById('t6');

                        // t1.value = payableF ;
                        // t2.value = couponF ;
                        // t3.value = slotF ;
                        // t4.value = destinationF ;
                        // t5.value = numberF ;
                        // t6.value = movieTitle ;
                        // t7.value = datePicker.value ;

                         var s = document.getElementById('form_submit');
                        s.innerHTML = '<form method="post" action="class.test.php"><input type="hidden" id="t1" name="t1" value = "' + payableF + '">'+ '<input type="hidden" id="t2" name="t2" value = "' + couponF + '">'+ '<input type="hidden" id="t3" name="t3" value = "' +slotF + '">'+ '<input type="hidden" id="t4" name="t4" value = "' + destinationF + '">'+'<input type="hidden" id="t5" name="t5" value = "' + numberF + '">'+ '<input type="hidden" id="t6" name="t6" value = "' + movieTitle + '">'+'<input type="hidden" id="t7" name="t7" value = "' + datePicker.value +'">'+ '<input type="hidden" id="t8" name="t8" value = "' +"Movie"+ '">'+'<div class="col-lg-4"><button type="submit" class="btn btn-success btn-lg" data-toggle="modal" data-target="#" id = "button_confirm">Confirm Booking</button></div></form>';
                         

                                   
            });

            // document.getElementById("button_confirm").addEventListener("click",function() {
                
            //     var payment_id = document.getElementById("payment_id");
            //     var booking = document.getElementById("successful_id");
            //     var title = document.getElementById("modal_title");

            //     title.innerHTML = 'Booking Successful';
            //     booking.style.display = 'block';
            //     payment_id.style.display = 'none';

            //     console.log(t1.value);
            //     console.log(t2.value);
            //     console.log(t3.value);
            //     console.log(t4.value);
            //     console.log(t5.value);
            //     console.log(t6.value);

            // });
      </script>
   </body>
</html>