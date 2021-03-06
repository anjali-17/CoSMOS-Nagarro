<!DOCTYPE html>
<html lang="en">
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
      <script src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
      <script type="text/javascript" src="reccomender.js"></script>
      <script type="text/javascript" src="event.js"> </script>
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
      <link id="orginal" href="css/themes/chocolate-theme.css" rel="stylesheet">
      <!-- Main structure css file -->
      <link href="style.css" rel="stylesheet">
      <link href="review.css" rel="stylesheet">
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
      <style type="text/css">
         body { margin: 0; }
         #shade, #modal { display: none; }
         #shade { position: fixed; z-index: 100; top: 0; left: 0; width: 100%; height: 100%; }
         #modal { position: fixed; z-index: 101; top: 20%; left: 25%; width: 50%; }
         #shade { background: silver; opacity: 0.5; filter: alpha(opacity=50); }
         #message{
            margin-left: 10px ;
            margin-bottom: 20px ;
         }
      </style>
   </head>
   <body>
      <!-- BEGAIN PRELOADER -->
      <!-- <div id="preloader">
         <div id="status">&nbsp;</div>
         </div> -->
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
      <!--=========== BEGIN ABOUT SECTION ================-->
      <section id="about">
         <div class="container">
            <div class="row" id ="productItem">
            </div>
         </div>
      </section>
      
      <!--=========== BEGAIN CONTACT SECTION ================-->
      <!--<span>4</span>
         <span class="stars">4</span>-->
      <section id="contact">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12">
                  <!-- START CONTACT HEADING -->
                  <div class="heading">
                     <h2 class="wow fadeInLeftBig">Reserve</h2>
                     <p>Reserve in advance for this Event to get rid of hassle ahead.</p>
                  </div>
               </div>
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
                                          </div>
                                          <div id="form_submit">                                            
                                          </div>
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
                           <button id="start" class="btn btn-primary btn-lg">Reserve Tickets</button>
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
                  <!-- BEGAIN CONTACT MAP -->
                  <div class="col-lg-7 col-md-7 col-sm-7">
                     <div class="contact_map" id ="map_canvas">
                        <!-- BEGAIN GOOGLE MAP -->
                        <div id="map_canvas"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--=========== END CONTACT SECTION ================-->
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
      <script src="js/ourcustom.js"></script>
      <!-- Getting the place_id which was requested by the user-->
      <!-- <script type="text/javascript">
         $( document ).ready(function(){
            var text;
                      if(typeof(Storage) !== "undefined") {
                    if (localStorage.request_id) {
                            text=(localStorage.request_id);
                              
                    } 
                    else
                    {
                            window.location='restaurant.html';
                    }
                                  console.log(text);
                  }
                  else{
                                  alert('Please upgrade your browser to support HTML5');
                                  window.location='restaurant.html';
                  }
                        
         });
         </script> -->

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdbqcpamM5EUWBoIX8DSXyhAQ_x4AgwI0&callback=initMap">
    </script>
      <script type="text/javascript">
         var numberF ;
         var timeF ;
         var nameF ;
         var addressF ;
         var couponF = null ;
         var payableF  = null ;
         var dateF = null ;

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
             function validateHhMm(inputField) {
                 var isValid = /^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/.test(inputField.value);
                return isValid;
            }
         
            document.getElementById("start").addEventListener("click", function(){
                         var name = document.getElementById("name_id") ;
                         var address = document.getElementById("address_id") ;
                         var date = document.getElementById("date_id");
                         var time = document.getElementById("time_id");
                         var message = document.getElementById("message") ;
                         var number = document.getElementById("number") ;
                         

                         timeF = time.value ;
                         numberF = number.value ;
                         nameF = name.innerHTML ;
                         addressF = address.innerHTML ;
                         dateF = date.innerHTML ;
                         console.log(dateF);

                         message.innerHTML = "";
         
         
                         var payment_id = document.getElementById("payment_id");
                         var booking = document.getElementById("successful_id");
                         var title = document.getElementById("modal_title");
         
                         title.innerHTML = 'Event Booking';
                         booking.style.display = 'none';
                         payment_id.style.display = 'block';  

                         // var t1 = document.getElementById('t1');
                         // var t2 = document.getElementById('t2');
                         // var t3 = document.getElementById('t3');
                         // var t4 = document.getElementById('t4');
                         // var t5 = document.getElementById('t5');
                         // var t6 = document.getElementById('t6');
                         // var t7 = document.getElementById('t7');

                         // t1.value = payableF ;
                         // t2.value = couponF ;
                         // t3.value = timeF ;
                         // t4.value = addressF ;
                         // t5.value = numberF ;
                         // t6.value = nameF ;  
                         // t7.value = dateF ;

                         var s = document.getElementById('form_submit');
                        s.innerHTML = '<form method="post" action="class.test.php"><input type="hidden" id="t1" name="t1" value = "' + payableF + '">'+ '<input type="hidden" id="t2" name="t2" value = "' + couponF + '">'+ '<input type="hidden" id="t3" name="t3" value = "' +timeF + '">'+ '<input type="hidden" id="t4" name="t4" value = "' + addressF + '">'+'<input type="hidden" id="t5" name="t5" value = "' + numberF + '">'+ '<input type="hidden" id="t6" name="t6" value = "' + nameF + '">'+'<input type="hidden" id="t7" name="t7" value = "' + dateF +'">'+ '<input type="hidden" id="t8" name="t8" value = "' +"Event"+ '">'+'<div class="col-lg-4"><button type="submit" class="btn btn-success btn-lg" data-toggle="modal" data-target="#" id = "button_confirm">Confirm Booking</button></div></form>';
                         
                
                 });
         
            document.getElementById("button_redeem").addEventListener("click",function(){
             
                     var message = document.getElementById("message");
                     var coupon = document.getElementById("coupon_code");
                     var number = document.getElementById("number");

                     var coupons = ["GET5","GET10","GET25","GET50","GET75","GET90" , "COSMOS5","COSMOS10","COSMOS25","COSMOS50","COSMOS60","COSMOS90","EACH5","EACH10","EACH50","EACH75","EACH90"];

                     if(coupon.value == coupons[0]){
                         message.style.color = "#1565C0";
                         message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                         setCoupon(coupon);
                     }else if(coupon.value == coupons[1]){
                         message.style.color = "#1565C0";
                         message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                         setCoupon(coupon);

                     }
                     else if(coupon.value == coupons[2]){
                         message.style.color = "#1565C0";
                         message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                         setCoupon(coupon);

                     }
                     else if(coupon.value == coupons[3]){
                         message.style.color = "#1565C0";
                         message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                         setCoupon(coupon);

                     }
                     else if(coupon.value == coupons[4]){
                         message.style.color = "#1565C0";
                         message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                         setCoupon(coupon);

                     }
                     else if(coupon.value == coupons[5]){
                         message.style.color = "#1565C0";
                         message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                         setCoupon(coupon);

                     }
                     else if(coupon.value == coupons[6]){
                         message.style.color = "#1565C0";
                         message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                         setCoupon(coupon);

                     }
                     else if(coupon.value == coupons[7]){
                         message.style.color = "#1565C0";
                         message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                         setCoupon(coupon);

                     }
                     else if(coupon.value == coupons[8]){
                         if(number.value >= 2){
                             message.style.color = "#1565C0";
                             message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                             setCoupon(coupon);
                         }else{
                             message.innerHTML = "To apply this code Min Ticket should be 2";
                             message.style.color = "#e53935";
                         }
                     }
                     else if(coupon.value == coupons[9]){
                         if(number.value >= 3){
                             message.style.color = "#1565C0";
                             message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                             setCoupon(coupon);
                         }else{
                             message.innerHTML = "To apply this code Min Ticket should be 3";
                             message.style.color = "#e53935";
                         }
                     }
                     else if(coupon.value == coupons[10]){
                         if(number.value >= 4){
                             message.style.color = "#1565C0";
                             message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                             setCoupon(coupon);
                         }else{
                             message.innerHTML = "To apply this code Min Ticket should be 4";
                             message.style.color = "#e53935";
                         }
                     }
                     else if(coupon.value == coupons[11]){
                         if(number.value >= 5){
                             message.style.color = "#1565C0";
                             message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                             setCoupon(coupon);
                         }else{
                             message.innerHTML = "To apply this code Min Ticket should be 5";
                             message.style.color = "#e53935";
                         }
                     }
                     else if(coupon.value == coupons[12]){
                         message.style.color = "#1565C0";
                         message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                         setCoupon(coupon);
                     }
                     else if(coupon.value == coupons[13]){
                         message.style.color = "#1565C0";
                         message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                         setCoupon(coupon);
                     }
                     else if(coupon.value == coupons[14]){
                         message.style.color = "#1565C0";
                         message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                         setCoupon(coupon);
                     }
                     else if(coupon.value == coupons[15]){
                         message.style.color = "#1565C0";
                         message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                         setCoupon(coupon);
                     }
                     else if(coupon.value == coupons[16]){
                         message.style.color = "#1565C0";
                         message.innerHTML =  coupon.value + " COUPON SUCCESSFULLY APPLIED";
                         setCoupon(coupon);
                     }else{
                         message.innerHTML = "Invalid Code";
                         message.style.color = "#e53935";
                     }
         
         
                     
         
         
                 });
                    function setCoupon(id){
                        var t2 = document.getElementById('t2');
                        couponF = id.value ;
                        t2.value = couponF ;
                        console.log("COUPON CHANGED : " + t2.value);

                         var s = document.getElementById('form_submit');
                        s.innerHTML = '<form method="post" action="class.test.php"><input type="hidden" id="t1" name="t1" value = "' + payableF + '">'+ '<input type="hidden" id="t2" name="t2" value = "' + couponF + '">'+ '<input type="hidden" id="t3" name="t3" value = "' +timeF + '">'+ '<input type="hidden" id="t4" name="t4" value = "' + addressF + '">'+'<input type="hidden" id="t5" name="t5" value = "' + numberF + '">'+ '<input type="hidden" id="t6" name="t6" value = "' + nameF + '">'+'<input type="hidden" id="t7" name="t7" value = "' + dateF +'">'+ '<input type="hidden" id="t8" name="t8" value = "' +"Event"+ '">'+'<div class="col-lg-4"><button type="submit" class="btn btn-success btn-lg" data-toggle="modal" data-target="#" id = "button_confirm">Confirm Booking</button></div></form>';
                    }
         
                 document.getElementById("button_confirm").addEventListener("click",function() {
                     
                     var payment_id = document.getElementById("payment_id");
                     var booking = document.getElementById("successful_id");
                     var title = document.getElementById("modal_title");
         
                     var name = document.getElementById("name_id");
                     var address = document.getElementById("address_id");
                     var coupon = document.getElementById("coupon_code");
         
                     var couponF = coupon.value ;
                     name = name.innerHTML ;
                     address = address.innerHTML ;
         
         
                     title.innerHTML = 'Booking Successful';
                     booking.style.display = 'block';
                     payment_id.style.display = 'none';
         
         
         
                 });
         
      </script>
   </body>
</html>