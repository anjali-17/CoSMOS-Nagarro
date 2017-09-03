var text;
$( document ).ready(function(){
             var id = ["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"];
            var title = ["ITM Jaipur - India Travel Mart","India Stonemart 2017","Saat Phere - The Wedding Fair","Balrangam","Bloomfair India - Way to Bollywood Grand Finale 2017","Stand Up Comedy This Sunday","Design Connect-Jaipur","Session 8 - Poems & Handicrafts","Jaipur Startups Meetup Episode 4","Vh1 Supersonic Club Nights feat. Nikhil Chinapa","The Blackout Night","Call of Bids","Spark- Entrepreneurship for Young Minds","4th National Pickleball","Anugoonj-7, 2017 7th Annual National Exhibition of Paintings","Indian Youth Parliament","Havelis and Fresco","Roots Live Band - Star Clinch","Maskhare Night with Karan Talwar","Pink City Ultra Run","Unlimited Praise 2017","Composition in Digital Photography","IdeaThon - The Marathon Of Ideas","Dunes Music Festival","Natural Dyeing & Eco Printing Workshop","THAAR - The Aravali Adrenaline Rush 2017","Donate Blood Save Life","Freakin Four Entries","Pink City New Year Eve 2017","WAF Model United Nations '16","Mansarovar Mini Marathon","Saugat The Fashion Show"];
            var venue = ["B M Birla Auditorium & Convention Center, Statue Circle, Jaipur, India","Jaipur Exhibition and Convention Centre, Sitapura, Jaipur, India","Shakun Hotels & Resorts, D-28, Subhash Marg, C-Scheme, Jaipur, India","Ravindra Munch, Ramnivas Bag, Jaipur, India","Castle Kalwar, VPO kalwar, Jaipur, India","Vito's Cafe & Lounge, 403, 4th Floor, Axis Mall, C-scheme, Jaipur, India","Maharana Pratap Auditorium NH 8, Mahesh Nagar Phatak, Bajaj Nagar, Jaipur","Amrudon Ka Bagh, Jan Path, Jyothi Nagar, Lalkothi, Jaipur","Gunawati House, 6-B , Ganga Path , Suraj Nagar West, Civil Lines , Ajmer Road, Jaipur","F Bar & Lounge Jaipur, Golden Tulip Jaipur, MI Road, Jaipur, India","Blackout - Jaipur, 9th Floor, Landmark Building, Golden Oak Hotel, Ahinsa Circle, C-Scheme, Jaipur","Malaviya National Institute of Technology, Jaipur, India","Rukmani Birla Modern High School, Jaipur, India","Sawai Mansingh Indoor Stadium, Jaipur, India","Juneja Art Gallery - Jaipur Art Gallery, Jaipur","Birla Auditorium, Jaipur, India","Rajputana Horse Safari, Ajmer Road, Jaipur, India","House of People , A1, Sehkar Marg, Bais Godam, Jaipur, Rajasthan, Jaipur","WTF Cafe, 3rd Floor,Man Upasana Mall,C-Scheme, Jaipur, India","Central Park Jaipur, statue circle, Jaipur, India","Pink City, Jaipur","Mutual's, 1, Awadhpuri, Lal Kothi, Tonk Road, Jaipur, India","JECRC University, Plot No.IS-2036-2039, Ramchandrapura, Vidhani, Jaipur, India","Clark Amer, Jaipur, India","DIY - Dye It Yourself, International Horticulture Innovation And Training Center, Jaipur, India","KK Royal Hotel & Convention Centre, AMER ROAD, Jaipur, India","Apex Hospitals, Apex Hopsitals Pvt Ltd. , Sp-6, Malviya Nagar Industrial Area, Jaipur, India","Manipal University, Dehmi Kalan, Sanganer, Jaipur","Angel Resort & Amusement Water Park, Eden Garden, 20th Milestone, Rajawas, Jaipur-Sikar Highway, Jaipur","Country Inn & Suites By Carlson, Jaipur, India","Mansarovar, Jaipur, India","Fashion Square, Jaipur, Rajasthan"];
            var type =["Exhibition","Business","Exhibition","Show","Show","Show","Workshop","Exhibition","Talk","Concert","Concert","Workshop","Seminar","Tournament","Exhibition","Exhibition","Expedition","Concert","Show","Marathon","Expedition","Workshop","Talk","Concert","Workshop","Expedition","Camp","Show","Show","Seminar","Marathon","Show"];
            var event_date = ["2017-01-07","2017-02-02","2017-12-13","2017-01-25","2017-11-13","2017-11-13","2017-11-13","2017-12-13","2017-01-05","2017-12-17","2017-11-21","2017-12-27","2017-12-11","2017-12-22","2017-12-19","2017-12-02","2017-12-05","2017-11-30","2017-11-27","2017-11-27","2017-11-26","2017-11-20","2017-12-19","2017-11-19","2017-11-24","2017-12-18","2017-11-17","2017-11-29","2017-12-31","2017-12-28","2017-12-25","2017-12-24"];
            var event_time = ["04:00 PM","09:00 AM","11:00 AM","06:00 PM","06:00 PM","11:00 PM","07:30 PM","04:00 PM","01:00 PM","10:00 PM","04:00 AM","10:00 AM","09:30 AM","09:00 AM","05:00 PM","11:30 PM","12:00 AM","09:00 PM","08:30 PM","08:00 PM","04:00 PM","09:00 AM","05:00 PM","03:00 PM","11:00 AM","09:00 AM","05:00 PM","09:30 PM","07:00 PM","07:00 PM","09:00 AM","03:30 PM"];
            var poster_path = ["event_img/0.jpg","event_img/1.jpg","event_img/2.jpg","event_img/3.jpg","event_img/4.jpg","event_img/5.jpg","event_img/6.jpg","event_img/7.jpg","event_img/8.jpg","event_img/9.jpg","event_img/10.jpg","event_img/11.jpg","event_img/12.png","event_img/13.jpg","event_img/14.jpg","event_img/15.jpg","event_img/16.jpg","event_img/17.jpg","event_img/18.jpg","event_img/19.jpg","event_img/20.jpg","event_img/21.jpg","event_img/22.jpg","event_img/23.jpg","event_img/24.jpg","event_img/25.jpg","event_img/26.jpg","event_img/27.jpg","event_img/28.jpg","event_img/29.jpg","event_img/30.jpg","event_img/31.jpg"];
            //var vote = ["","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""];
            var latitude = ["26.906924","26.784742","26.910736","26.913587","26.988432","26.910455","26.868464","26.896278","26.904311","26.916426","26.913932","26.857362","26.857338","26.893946","26.897784","26.906024","26.913081","26.899771","26.911958","26.904765","26.927661","26.888458","26.775524","26.846393","26.844721","26.990222","26.854712","26.841339","27.066675","26.919685","26.858443","26.896805"];
            var longitude = ["75.805646","75.826521","75.801938","75.822622","75.584947","75.807465","75.806126","75.798714","75.777491","75.805106","75.805888","75.804072","75.786569","75.802927","75.787666","75.805646","75.805532","75.792826","75.797392","75.807168","75.831343","75.800672","75.877486","75.800446","75.782911","75.865341","75.825225","75.566221","75.752242","75.794935","75.768383","75.82643"];
           
                if(typeof(Storage) !== "undefined") {
            if (localStorage.request_event_id) {
                  text=(localStorage.request_event_id);
                  console.log("Id : " + text);
                  status+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Event Type </h4></div>';
                  status+='<div class="panel-body" style="font-size:18px;color:#e60000;"><div class="status_box close"></div>' + type[text] + '</div></div>';

                            var str = '<div id="hide_area" class="col-lg-12 col-md-12"><div class="about_area"><div class="heading"><h2 class="wow fadeInLeftBig" id= "name_id">';
                            str += title[text] + '</h2></div><!-- START ABOUT CONTENT --><div class="about_content"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_featured"><div class="panel-group" id="accordion">';
                            str+=status;
                            str+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title">Venue </h4> </div><div class="panel-body" id = "address_id">';
                            str += venue[text];
                            str += '</div></div>';
                            str+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
                            str+='<h4 class="panel-title"> Event date </h4> </div><div class="panel-body" id="date_id">';
                            str+=event_date[text];
                            str+='</div></div>';

                            str+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
                            str+='<h4 class="panel-title">Event time</h4> </div><div class="panel-body" id="time_id">';
                            str+=event_time[text];
                            str+='</div></div>';
                            str+='</div></div></div>';
                            str += '<div class="col-lg-6 col-md-6 col-sm-12"><div class="about_slider"><!-- BEGAIN FEATURED SLIDER --><div class="featured_slider">';
                            str += ' <div class="single_iteam" style="height: 400px;width: 600px;"><img src="';
                            if(poster_path[text] == undefined){
                               str+='img/feature_img1.jpg ';
                            }
                           else{
                                str += poster_path[text];
                            }
                            str += '" alt="img"></div>';
                            str += '</div></div></div></div></div></div></div>';
                            var divid = document.getElementById('productItem');
                            divid.innerHTML += str;

                            //  var myLatlng = new google.maps.LatLng(latitude[text],longitude[text]);
                            //  console.log(latitude[text]+" "+longitude[text]);
                            // var mapOptions = {
                            //                                   zoom: 15,
                            //                                   center: myLatlng
                            //                               }
                            // var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                            // var marker = new google.maps.Marker({
                            //                       position: myLatlng,
                            //                     });
                            // marker.setMap(map);

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


function initMap() {
	var latitude = ["26.906924","26.784742","26.910736","26.913587","26.988432","26.910455","26.868464","26.896278","26.904311","26.916426","26.913932","26.857362","26.857338","26.893946","26.897784","26.906024","26.913081","26.899771","26.911958","26.904765","26.927661","26.888458","26.775524","26.846393","26.844721","26.990222","26.854712","26.841339","27.066675","26.919685","26.858443","26.896805"];
            var longitude = ["75.805646","75.826521","75.801938","75.822622","75.584947","75.807465","75.806126","75.798714","75.777491","75.805106","75.805888","75.804072","75.786569","75.802927","75.787666","75.805646","75.805532","75.792826","75.797392","75.807168","75.831343","75.800672","75.877486","75.800446","75.782911","75.865341","75.825225","75.566221","75.752242","75.794935","75.768383","75.82643"];
  var uluru = new google.maps.LatLng(latitude[text],longitude[text]);
  var map = new google.maps.Map(document.getElementById('map_canvas'), {
    zoom: 15,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}