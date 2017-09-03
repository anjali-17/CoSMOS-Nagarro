$( document ).ready(function(){

           var key = 'AIzaSyAnPuMrBzxOcEJuzMVoyE29ViWZZ3qU0Xg';
           var text;
                if(typeof(Storage) !== "undefined") {
            if (localStorage.request_id) {
                  text=(localStorage.request_id);
                    var contentType ="application/json";
                    if(window.XDomainRequest) //for IE8,IE9
                        contentType = "text/plain";
                    $.ajax({
                        url: 'https://maps.googleapis.com/maps/api/place/details/json?placeid=' + text + '&key=' + key,
                        method: 'GET',
                        dataType: 'json',
                        success: function(data){
                          console.log(JSON.stringify(data));
                                var result = data.result;
                              var rating ;
                              var vicinity ;
                              var reviews = [];
                              var name ;
                              var formatted_address;
                              var formatted_phone_number;
                              var international_formatted_phone_number;
                              var geometry = [];
                              var location ;
                              var photos = [];
                              var photoreference = [];
                              var website='';
                              var latitude ;
                              var longitude ;
                              var open='';

                              formatted_address = result.formatted_address;
                              rating = result.rating ;
                              if(rating==undefined){
                                rating='Not rated';
                              }
                              name = result.name ;
                              international_formatted_phone_number = result.international_phone_number ;
                              formatted_phone_number = result.formatted_phone_number ;
                              if(result.reviews != undefined){
                                 reviews = result.reviews ;
                              }

                              geometry = result.geometry;
                              if(result.photos != undefined){
                                  photos = result.photos;
                              }
                              //photos = result.photos;
                              website = result.website ;
                              location = geometry.location;
                              latitude = location.lat ;
                              longitude = location.lng;
                              if(typeof result.opening_hours!='undefined'){
                                open=result.opening_hours.open_now;
                                //console.log(open);
                              }
                              //console.log(open);
                              var status='';
                              if(open=='')
                              {
                                //console.log("1");
                                  status+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Current Status </h4></div>';
                                  status+='<div class="panel-body" style="font-size:18px;color:#ff9900;"><div class="status_box not_sure"></div>Information not provided</div></div>';
                              }
                              else if(open==true)
                              {
                                  //console.log("2");
                                  status+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Current Status </h4></div>';
                                  status+='<div class="panel-body" style="font-size:18px;color:#099e44;"><div class="status_box open"></div>Open Now</div></div>';
                              }
                              else
                              {
                                  //console.log("3"+open);
                                  //status+='<div class="status_box close"></div>';
                                  status+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Current Status </h4></div>';
                                  status+='<div class="panel-body" style="font-size:18px;color:#e60000;"><div class="status_box close"></div>Closed Now</div></div>';
                              }

                              var ratingUser = [];
                              var author_name = [];
                              var text = [] ;


                              // for(var i = 0 ; i < photos.length ; i++){
                              //   photoreference[i] = photos[i].photo_reference;
                              //   //console.log(photoreference[i]);
                              // }

                              for(var i = 0 ; i < reviews.length ; i++){
                                author_name[i] = reviews[i].author_name;
                                ratingUser[i] = reviews[i].rating ;
                                text[i] = reviews[i].text;
                                //console.log(author_name[i]);
                                //console.log(ratingUser[i]);
                                //console.log(text[i]);

                              }

                            var str = '<div id="hide_area" class="col-lg-12 col-md-12"><div class="about_area"><div class="heading"><h2 class="wow fadeInLeftBig" id="name_id">';
                            str += name+ '</h2></div><!-- START ABOUT CONTENT --><div class="about_content"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_featured"><div class="panel-group" id="accordion">';
                            str+=status;
                            str+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title">Venue </h4> </div><div class="panel-body" id="address_id">';
                            str += formatted_address;
                            str += '</div></div><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Ratings (Out of 5) </h4></div><div class="panel-body" style="font-size:18px;color: #ff9900;">';
                            str += rating;
                            str +=  '</div>';
                            if(rating!='Not rated'){
                                //str+='<br>';
                                str+='<div class="panel-body">';
                                var percent=(Number(rating)/5)*100;
                                //console.log(percent);
                                var display=percent+'%';
                                str+='<span style="display: block; width: 80px; height: 16px; background: url(img/stars.png) 0 0;">';
                                str +='<span style="display: block; width: ';
                                str+=display;
                                str += '; height: 16px; background: url(img/stars.png) 0 -16px;"></span></span>';
                                str+='</div>';
                          }
                            str+='</div>';
                            if(formatted_phone_number==''){formatted_phone_number='Information not provided'}
                            str+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
                            str+='<h4 class="panel-title">Phone Number </h4> </div><div class="panel-body">';
                            str+=formatted_phone_number;
                            str+='</div></div>';

                          if(international_formatted_phone_number==''){international_formatted_phone_number='Information not provided'}
                            str+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
                            str+='<h4 class="panel-title">International Phone Number</h4> </div><div class="panel-body">';
                            str+=international_formatted_phone_number;
                            str+='</div></div>';

                          if(website!=''){
                            str+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
                            str+='<h4 class="panel-title">Website </h4> </div><div class="panel-body">';
                            //str+='<a href="'+website+'>Website Link</a>';
                            //str+=website;
                            str+='<a class="btn btn-info btn-sm btn-block" href="'+website+'"><b>Visit Website<b></a>';
                            str+='</div></div>';
                          }
                          else{
                            str+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
                            str+='<h4 class="panel-title">Website </h4> </div><div class="panel-body">';
                            //str+='<a href="'+website+'>Website Link</a>';
                            //str+=website;
                            str+='<a class="btn btn-danger btn-sm btn-block disabled" href="'+website+'"><b>Website not provided<b></a>';
                            str+='</div></div>';
                          }
                            str+='</div></div></div>';
                            str += '<div class="col-lg-6 col-md-6 col-sm-12"><div class="about_slider"><!-- BEGAIN FEATURED SLIDER --><div class="featured_slider">';
                            str += ' <div class="single_iteam"><img src="';
                            if(photos[0] == undefined){
                               str+='img/feature_img1.jpg ';
                            }
                           else{
                                str +='https://maps.googleapis.com/maps/api/place/photo?maxwidth=600&maxheight=400&photoreference='+photos[0].photo_reference+'&key=' + key;
                            }
                            str += '" alt="img"></div>';
                            str += '</div></div></div></div></div></div></div>';
                            var divid = document.getElementById('productItem');
                            divid.innerHTML += str;
                              // console.log(formatted_address);
                              // console.log(rating);
                              // console.log(name);
                              // console.log(formatted_phone_number);
                              // console.log(reviews);
                              // console.log(geometry);
                              // console.log(photos);
                              // console.log(website);
                              //console.log(author_name.length);
                              if(author_name.length!=0){
                              for(var i = 0 ; i < author_name.length ; i++){
                                str = '<li><h4 class="media-heading">';
                                str += author_name[i];
                                str += '</h4>';


                                str += '<span style="font-size:18px;color: #ff9900;">';
                                str += ratingUser[i] ;
                                str += '</span><br>';
                                var percent=(Number(ratingUser[i])/5)*100;
                                //console.log(percent);
                                var display=percent+'%';
                                //console.log(display);
                                str+='<span style="display: block; width: 80px; height: 16px; background: url(img/stars.png) 0 0;">';
                                str +='<span style="display: block; width: ';
                                str+=display;
                                str += '; height: 16px; background: url(img/stars.png) 0 -16px;"></span></span>';

                                //var percent=(Number(ratingUser[i])/5)*100;
                                //console.log(percent);
                                //var display=percent+'%';
                                //var temp='';
                                //console.log(display);


                                str+='</div></div>';
                                str += '<div class="testi_content scroll_view"><blockquote><p>';
                                str += text[i];
                                str += '</p></blockquote></div></li>';

                                var divid = document.getElementById('userReviews');
                                divid.innerHTML += str;
                              }
                              //$('span.stars').stars();
                              $('.testimonial_slider').slick({
                                      dots: true,
                                      infinite: true,
                                      speed: 800,
                                      arrows:false,
                                      slidesToShow: 1,
                                      slide: 'li',
                                      autoplay: true,
                                      fade: true,
                                      autoplaySpeed: 3000,
                                      cssEase: 'linear'
                                    });
                            }
                            else
                            {
                                var add='';
                                add+='<div><span><img src="img/no_review.png" class="img-fluid" style="display:block;max-width:508px;max-height:534px;"></span></div>';
                                var divid = document.getElementById('userReviews');
                                divid.innerHTML += add;
                            }
                              // for(var i=0; i< immageArray.length; i++) {
                              //        imageArray[i].addEventListener("click", bindClick(i));
                              //  }

                              //  function bindClick(i) {
                              //     return function(){
                              //              console.log("you clicked region number " + i);
                              //            };
                              //  }


                              //var myLatlng = new google.maps.LatLng(latitude, longitude);
                              //var myOptions = {
                                //zoom: 8,
                                //center: myLatlng,
                                //mapTypeId: google.maps.MapTypeId.ROADMAP
                              //}
                            //var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);



                            //Added by JAY KRISHNA

                            var myLatlng = new google.maps.LatLng(latitude,longitude);
                            console.log(myLatlng);
                            var mapOptions = {
                                                              zoom: 15,
                                                              center: myLatlng
                                                          }
                            var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                            var marker = new google.maps.Marker({
                                                  position: myLatlng,
                                                });
                            marker.setMap(map);

                        },
                        error:function(response){
                          console.log('Hello');
                          localStorage.backtrack='restaurant_detail.html';
      //alert(localStorage.backtrack);
      window.location='cors_enable.html';
                        }
                      });

                    get_place_details(text);
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
