//var key = 'AIzaSyD5KK26Mvyo0kbW_-TGUYBo5hAVYe7Gy9w';
var token, offset = 0;
var flag = true;
var all_array = new Array();
var all_types = new Array();
var display_array = new Array();
$(document).ready(function() {
    first_ajax(); //.success(wait_ajax_1);//.success(wait_ajax_2);
});
var contentType = "application/json";
if (window.XDomainRequest) //for IE8,IE9
    contentType = "text/plain";

function restaurant(obj_placeid, obj_name, obj_rating, obj_add, obj_type, obj_image) {
    this.obj_placeid = obj_placeid;
    this.obj_name = obj_name;
    this.obj_rating = obj_rating;
    this.obj_add = obj_add;
    this.obj_type = obj_type;
    this.obj_image = obj_image;
    insert(obj_type);
}

function implementfilter() {
    // alert("hello");
    var len = display_array.length;
    display_array.splice(0, len);
    var i, j;
    var min_rating = parseFloat($("#slval1").text());
    var max_rating = parseFloat($("#slval2").text());
    // alert(max_rating);
    // alert(min_rating);
    for (i = 0; i < all_array.length; ++i) {
        if (all_array[i].obj_rating <= max_rating && all_array[i].obj_rating >= min_rating) {
            // var push_obj=all_array[i];
            // console.log("push");
            // console.log(push_obj);
            display_array.push(all_array[i]);
        }
    }
    var is_bar = $("#bar").is(':checked');
    var is_spa = $("#spa").is(':checked');
    var is_accomodation = $("#accomodation").is(':checked');
    for (i = 0; i < display_array.length; ++i) {
        if (!is_bar) {
            for (j = 0; j < display_array[i].obj_type.length; ++j) {
                if (display_array[i].obj_type[j] == "bar") {
                    display_array.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_spa) {
            for (j = 0; j < display_array[i].obj_type.length; ++j) {
                if (display_array[i].obj_type[j] == "spa") {
                    display_array.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_accomodation) {
            for (j = 0; j < display_array[i].obj_type.length; ++j) {
                if (display_array[i].obj_type[j] == "lodging") {
                    display_array.splice(i, 1);
                    break;
                }
            }
        }
    }
    var up = $("#sort_order_text").text();
    if (up == "Decreasing") {
        display_array.sort(function(a, b) {

            return parseFloat(b.obj_rating) - parseFloat(a.obj_rating);

        });
    } else {
        display_array.sort(function(a, b) {

            return parseFloat(a.obj_rating) - parseFloat(b.obj_rating);

        });
    }
    preparehtml(false);
}

function preparefilter() {
    $('.place_type').iCheck({
        checkboxClass: 'icheckbox_flat-green'
            // radioClass: 'iradio_flat-red'
    });

    $("#slider").slider({
        range: true,
        min: 0,
        max: 5,
        values: [0, 5],
        step: 0.5,
        slide: function(evt, elem) {
            if ((elem.values[0]) >= elem.values[1]) {
                return false;
            }
            $("#slval1").text(elem.values[0]);
            $("#slval2").text(elem.values[1]);

        },
        stop: function(evt, elem) {
          // var len = display_array.length;
          // display_array.splice(0, len);
            implementfilter();
        }

    });
    $("#slval1").text($("#slider").slider("values", 0));
    $("#slval2").text($("#slider").slider("values", 1));

    $("#filter").accordion({
        heightStyle: "content",
        collapsible: true

    });
    $('.place_type').iCheck('check');
    $('.place_type').on('ifToggled', function(event) {
        //alert(event.type + ' callback');
        implementfilter();
    });
    implementfilter();
}

function preparehtml(first_time) {
    //console.log(JSON.stringify(all_array));
    //console.log(all_types);
    var i;

    console.log(first_time);

    console.log(all_array);
    console.log(display_array);
    localStorage.all_list = JSON.stringify(all_array);

    var key = 'AIzaSyDGE4euHKZwlKHc5GIrUUZBV5B4Z82lmeE';

    var add = '';
    for (i = 0; i < display_array.length; ++i) {
        var str = '';
        str = '<div id="hide_area" class="col-lg-12 col-md-12"><div class="about_area"><div class="heading"><h2 id="search_item" class="wow fadeInLeft">';
        str += display_array[i].obj_name + '</h2></div><!-- START ABOUT CONTENT --><div class="about_content"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_featured"><div class="panel-group" id="accordion"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title">Venue </h4> </div><div class="panel-body">';
        str += display_array[i].obj_add;
        str += '</div></div><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Ratings (Out of 5) </h4></div><div class="panel-body">';
        str += display_array[i].obj_rating;
        str += '</div>';
        if (display_array[i].obj_rating != 'Not rated') {
            str += '<div class="panel-body">';
            var percent = (Number(display_array[i].obj_rating) / 5) * 100;
            //console.log(percent);
            var display = percent + '%';
            str += '<span style="display: block; width: 80px; height: 16px; background: url(img/stars.png) 0 0;">';
            str += '<span style="display: block; width: ';
            str += display;
            str += '; height: 16px; background: url(img/stars.png) 0 -16px;"></span></span>';
            str += '</div>';
        }
        str += '</div></div></div><button id=' + JSON.stringify(display_array[i].obj_placeid) + ' type="button" class="btn btn-primary btn-block" onclick="execute(this.id)"><b>Details</b></button></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_slider"><!-- BEGAIN FEATURED SLIDER --><div class="featured_slider"><!-- SINGLE SLIDE IN THE SLIDER --><div class="single_iteam"> <img src="';
        if (display_array[i].obj_image == undefined) {
            str += 'img/feature_img1.jpg ';
        } else {
            str += 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=600&maxheight=400&photoreference=' + display_array[i].obj_image + '&key=' + key;
        }
        str += '" alt="img"></div></div><!-- END FEATURED SLIDER --></div></div></div></div></div></div>';
        add += str;
    }
    var divid = document.getElementById('products');
    divid.innerHTML = '';
    divid.innerHTML += add;
    if (first_time) {
        preparefilter();
        setTimeout(function(){
        $("#movie_loader").fadeOut("fast");
      $("#products").fadeIn("slow");
  },2000);
    }
}

function first_ajax() {
    var key = 'AIzaSyBWRVbJJhm_PORexhHzOVeJWGoY7jYbjUY';
    return $.ajax({
        url: 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=28.4595, 77.0266&radius=25000&type=restaurant&key=' + key,
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var temp_name, temp_add, temp_rating, temp_id, temp_type, temp_image;
            var i;
            token = data.next_page_token;
            //console.log('Token: '+JSON.stringify(token));
            //console.log(JSON.stringify(data));

            //var key = 'AIzaSyCcSp16KPXwEcbOJBq8lzddC7xzwncV2vE';
            for (i = 0; i < data.results.length; ++i) {
                temp_name = data.results[i].name;
                temp_add = data.results[i].vicinity;
                temp_rating = data.results[i].rating;
                if (temp_rating == undefined) {
                    temp_rating = 0;
                }
                temp_id = data.results[i].place_id;
                if (data.results[i].photos != undefined) {
                    temp_image = data.results[i].photos[0].photo_reference;
                }
                temp_obj = new restaurant(temp_id, temp_name, temp_rating, temp_add, data.results[i].types, temp_image);
                temp_obj2=new restaurant(temp_id, temp_name, temp_rating, temp_add, data.results[i].types, temp_image);
                all_array.push(temp_obj);
                //console.log(temp_obj2);
                display_array.push(temp_obj);
            }
            //display_array=all_array.slice(0);
            setTimeout(preparehtml(true), 1000);
            //preparefilter();
            //implementfilter();
            //offset += i;
        },
        error: function(response) {
            localStorage.backtrack = 'restaurant.html';
            //alert(localStorage.backtrack);
            window.location = 'cors_enable.html';
            //console.log('Hello');
        }
    });
}
// function first_ajax() {
// 	var key = 'AIzaSyAS9qMqoDXtQPfzg9rhbAIeW0yttOgkyUo';
//     return $.ajax({
//         url: 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=28.4595, 77.0266&radius=25000&type=restaurant&key=' + key,
//         method: 'GET',
//         dataType: 'json',
//         success: function(data) {
//             var myName = [];
//             var myAddress = [];
//             var myRating = [];
//             var myPhotos = [];
//             var myplace_id = [];
//             var i = 0;
//             token = data.next_page_token;
//             //console.log('Token: '+JSON.stringify(token));
//             //console.log('success: '+JSON.stringify(data));
//             var str;
//             var key='AIzaSyDpGKFSd2-iWSvW9FMrVgt2LDRwyzO0O48';
//             if (data.results.length >= 0) {
//                 myName[i] = data.results[i].name;
//                 myAddress[i] = data.results[i].vicinity;
//                 myRating[i] = data.results[i].rating;
//                 myplace_id[i] = data.results[i].place_id;
//                 if (data.results[i].photos != undefined) {
//                     myPhotos[i] = data.results[i].photos[0].photo_reference;
//                 }
//                 if (myRating[i] == undefined)
//                 {
//                     myRating[i] = 'Not rated';
//                 }
//                 str = '<div id="hide_area" class="col-lg-12 col-md-12"><div class="about_area"><div class="heading"><h2 id="search_item" class="wow fadeInLeftBig">';
//                 str += myName[i] + '</h2></div><!-- START ABOUT CONTENT --><div class="about_content"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_featured"><div class="panel-group" id="accordion"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title">Venue </h4> </div><div class="panel-body">';
//                 str += myAddress[i];
//                 str += '</div></div><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Ratings (Out of 5) </h4></div><div class="panel-body">';
//                 str += myRating[i];
//                 str += '</div>';
//                 if (myRating[i] != 'Not rated') {
//                     str += '<div class="panel-body">';
//                     var percent = (Number(myRating[i]) / 5) * 100;
//                     //console.log(percent);
//                     var display = percent + '%';
//                     str += '<span style="display: block; width: 80px; height: 16px; background: url(img/stars.png) 0 0;">';
//                     str += '<span style="display: block; width: ';
//                     str += display;
//                     str += '; height: 16px; background: url(img/stars.png) 0 -16px;"></span></span>';
//                     str += '</div>';
//                 }
//                 str += '</div></div></div><button id=' + JSON.stringify(myplace_id[i]) + ' type="button" class="btn btn-primary btn-block" onclick="execute(this.id)"><b>Details</b></button></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_slider"><!-- BEGAIN FEATURED SLIDER --><div class="featured_slider"><!-- SINGLE SLIDE IN THE SLIDER --><div class="single_iteam"> <img src="';
//                 if (myPhotos[i] == undefined) {
//                     str += 'img/feature_img1.jpg ';
//                 } else {
//                     str += 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=600&maxheight=400&photoreference=' + myPhotos[i] + '&key=' + key;
//                 }
//                 str += '" alt="img"></div></div><!-- END FEATURED SLIDER --></div></div></div></div></div></div>';
//
//             }
//             i++;
//             for (; i < data.results.length; i++) {
//                 myName[i] = data.results[i].name;
//                 myAddress[i] = data.results[i].vicinity;
//                 myRating[i] = data.results[i].rating;
//                 myplace_id[i] = data.results[i].place_id;
//                 if (data.results[i].photos != undefined) {
//                     myPhotos[i] = data.results[i].photos[0].photo_reference;
//                 }
//                 if (myRating[i] == undefined) {
//                     myRating[i] = 'Not rated';
//                 }
//                 str += '<div id="hide_area" class="col-lg-12 col-md-12"><div class="about_area"><div class="heading"><h2 id="search_item" class="wow fadeInLeftBig">';
//                 str += myName[i] + '</h2></div><!-- START ABOUT CONTENT --><div class="about_content"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_featured"><div class="panel-group" id="accordion"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title">Venue </h4> </div><div class="panel-body">';
//                 str += myAddress[i];
//                 str += '</div></div><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Ratings (Out of 5) </h4></div><div class="panel-body">';
//                 str += myRating[i];
//                 str += '</div>'
//                 if (myRating[i] != 'Not rated') {
//                     str += '<div class="panel-body">';
//                     var percent = (Number(myRating[i]) / 5) * 100;
//                     //console.log(percent);
//                     var display = percent + '%';
//                     str += '<span style="display: block; width: 80px; height: 16px; background: url(img/stars.png) 0 0;">';
//                     str += '<span style="display: block; width: ';
//                     str += display;
//                     str += '; height: 16px; background: url(img/stars.png) 0 -16px;"></span></span>';
//                     str += '</div>';
//                 }
//                 str += '</div></div></div><button id=' + JSON.stringify(myplace_id[i]) + ' type="button" class="btn btn-primary btn-block" onclick="execute(this.id)"><b>Details</b></button></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_slider"><!-- BEGAIN FEATURED SLIDER --><div class="featured_slider"><!-- SINGLE SLIDE IN THE SLIDER --><div class="single_iteam"> <img src="';
//                 if (myPhotos[i] == undefined) {
//                     str += 'img/feature_img1.jpg ';
//                 } else {
//                     str += 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=600&maxheight=400&photoreference=' + myPhotos[i] + '&key=' + key;
//                 }
//                 str += '" alt="img"></div></div><!-- END FEATURED SLIDER --></div></div></div></div></div></div>';
//             }
//             var divid = document.getElementById('products');
//
//             divid.innerHTML += str;
//
//             //Getting more data
//             //some_more_ajax(token)
//             //console.log(myName);
//             offset += i;
//         },
//         error: function(response) {
//             localStorage.backtrack = 'restaurant.html';
//             //alert(localStorage.backtrack);
//             window.location = 'cors_enable.html';
//             //console.log('Hello');
//         }
//     });
// }

/*function wait_ajax_1() {
    setTimeout(second_ajax, 2000);
}*/

/*function wait_ajax_2() {
    console.log('INSIDE');
    setTimeout(third_ajax, 4000);
}*/

/*function second_ajax() {
	var key = 'AIzaSyAS9qMqoDXtQPfzg9rhbAIeW0yttOgkyUo';
    return $.ajax({
        url: 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?pagetoken=' + token + '&key=' + key,
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var myName = [];
            var myAddress = [];
            var myRating = [];
            var myPhotos = [];
            var myplace_id = [];
            var i = 0;
            token = data.next_page_token;
            //console.log('Token: '+JSON.stringify(token));
            //console.log('success: '+JSON.stringify(data));
            var str;
            if (data.results.length >= 0) {
                myName[i] = data.results[i].name;
                myAddress[i] = data.results[i].vicinity;
                myRating[i] = data.results[i].rating;
                myplace_id[i] = data.results[i].place_id;
                //console.log(JSON.stringify(myplace_id[i]));
                if (data.results[i].photos != undefined) {
                    myPhotos[i] = data.results[i].photos[0].photo_reference;
                }
                if (myRating[i] == undefined) {
                    myRating[i] = 'Not rated';
                }
                str = '<div id="hide_area" class="col-lg-12 col-md-12"><div class="about_area"><div class="heading"><h2 id="search_item" class="wow fadeInLeftBig">';
                str += myName[i] + '</h2></div><!-- START ABOUT CONTENT --><div class="about_content"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_featured"><div class="panel-group" id="accordion"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title">Venue </h4> </div><div class="panel-body">';
                str += myAddress[i];
                str += '</div></div><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Ratings (Out of 5) </h4></div><div class="panel-body">';
                str += myRating[i];
                str += '</div>'
                if (myRating[i] != 'Not rated') {
                    str += '<div class="panel-body">';
                    var percent = (Number(myRating[i]) / 5) * 100;
                    //console.log(percent);
                    var display = percent + '%';
                    str += '<span style="display: block; width: 80px; height: 16px; background: url(img/stars.png) 0 0;">';
                    str += '<span style="display: block; width: ';
                    str += display;
                    str += '; height: 16px; background: url(img/stars.png) 0 -16px;"></span></span>';
                    str += '</div>';
                }
                str += '</div></div></div><button id=' + JSON.stringify(myplace_id[i]) + ' type="button" class="btn btn-primary btn-block" onclick="execute(this.id)"><b>Details</b></button></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_slider"><!-- BEGAIN FEATURED SLIDER --><div class="featured_slider"><!-- SINGLE SLIDE IN THE SLIDER --><div class="single_iteam"> <img src="';
                if (myPhotos[i] == undefined) {
                    str += 'img/feature_img1.jpg ';
                } else {
                    str += 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=600&maxheight=400&photoreference=' + myPhotos[i] + '&key=' + key;
                }
                str += '" alt="img"></div></div><!-- END FEATURED SLIDER --></div></div></div></div></div></div>';

            }
            i++;
            for (; i < data.results.length; i++) {
                myName[i] = data.results[i].name;
                myAddress[i] = data.results[i].vicinity;
                myRating[i] = data.results[i].rating;
                myplace_id[i] = data.results[i].place_id;
                //console.log(JSON.stringify(myplace_id[i]));
                if (data.results[i].photos != undefined) {
                    myPhotos[i] = data.results[i].photos[0].photo_reference;
                }
                if (myRating[i] == undefined) {
                    myRating[i] = 'Not rated';
                }
                str += '<div id="hide_area" class="col-lg-12 col-md-12"><div class="about_area"><div class="heading"><h2 id="search_item" class="wow fadeInLeftBig">';
                str += myName[i] + '</h2></div><!-- START ABOUT CONTENT --><div class="about_content"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_featured"><div class="panel-group" id="accordion"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title">Venue </h4> </div><div class="panel-body">';
                str += myAddress[i];
                str += '</div></div><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Ratings (Out of 5) </h4></div><div class="panel-body">';
                str += myRating[i];
                str += '</div>';
                if (myRating[i] != 'Not rated') {
                    str += '<div class="panel-body">';
                    var percent = (Number(myRating[i]) / 5) * 100;
                    //console.log(percent);
                    var display = percent + '%';
                    str += '<span style="display: block; width: 80px; height: 16px; background: url(img/stars.png) 0 0;">';
                    str += '<span style="display: block; width: ';
                    str += display;
                    str += '; height: 16px; background: url(img/stars.png) 0 -16px;"></span></span>';
                    str += '</div>';
                }
                str += '</div></div></div><button id=' + JSON.stringify(myplace_id[i]) + ' type="button" class="btn btn-primary btn-block" onclick="execute(this.id)"><b>Details</b></button></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_slider"><!-- BEGAIN FEATURED SLIDER --><div class="featured_slider"><!-- SINGLE SLIDE IN THE SLIDER --><div class="single_iteam"><img src="';
                if (myPhotos[i] == undefined) {
                    str += 'img/feature_img1.jpg ';
                } else {
                    str += 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=600&maxheight=400&photoreference=' + myPhotos[i] + '&key=' + key;
                }
                str += '" alt="img"></div></div><!-- END FEATURED SLIDER --></div></div></div></div></div></div>';
            }
            var divid = document.getElementById('products');


            divid.innerHTML += str;
            //console.log(myName);
            //Getting more data
            //some_more_ajax(token)
            offset += i;

        },
        error: function(response) {
            console.log('Hello');
            localStorage.backtrack = 'restaurant.html';
            //alert(localStorage.backtrack);
            window.location = 'cors_enable.html';
        }
    });
    //console.log('DONE '+token);
}*/

/*function third_ajax() {
    return $.ajax({
        url: 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?pagetoken=' + token + '&key=' + key,
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var myName = [];
            var myAddress = [];
            var myRating = [];
            var myPhotos = [];
            var myplace_id = [];
            var i = 0;
            //token=data.next_page_token;
            //console.log('Token: '+JSON.stringify(token));
            //console.log('success: '+JSON.stringify(data));
            var str;
            if (data.results.length >= 0) {
                myName[i] = data.results[i].name;
                myAddress[i] = data.results[i].vicinity;
                myRating[i] = data.results[i].rating;
                myplace_id[i] = data.results[i].place_id;
                //console.log(JSON.stringify(myplace_id[i]));
                if (data.results[i].photos != undefined) {
                    myPhotos[i] = data.results[i].photos[0].photo_reference;
                }
                if (myRating[i] == undefined) {
                    myRating[i] = 'Not rated';
                }
                str = '<div id="hide_area" class="col-lg-12 col-md-12"><div class="about_area"><div class="heading"><h2 id="search_item" class="wow fadeInLeftBig">';
                str += myName[i] + '</h2></div><!-- START ABOUT CONTENT --><div class="about_content"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_featured"><div class="panel-group" id="accordion"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title">Venue </h4> </div><div class="panel-body">';
                str += myAddress[i];
                str += '</div></div><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Ratings (Out of 5) </h4></div><div class="panel-body">';
                str += myRating[i];
                str += '</div>';
                if (myRating[i] != 'Not rated') {
                    str += '<div class="panel-body">';
                    var percent = (Number(myRating[i]) / 5) * 100;
                    //console.log(percent);
                    var display = percent + '%';
                    str += '<span style="display: block; width: 80px; height: 16px; background: url(img/stars.png) 0 0;">';
                    str += '<span style="display: block; width: ';
                    str += display;
                    str += '; height: 16px; background: url(img/stars.png) 0 -16px;"></span></span>';
                    str += '</div>';
                }
                str += '</div></div></div><button id=' + JSON.stringify(myplace_id[i]) + ' type="button" class="btn btn-primary btn-block" onclick="execute(this.id)"><b>Details</b></button></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_slider"><!-- BEGAIN FEATURED SLIDER --><div class="featured_slider"><!-- SINGLE SLIDE IN THE SLIDER --><div class="single_iteam">< <img src="';
                if (myPhotos[i] == undefined) {
                    str += 'img/feature_img1.jpg ';
                } else {
                    str += 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=600&maxheight=400&photoreference=' + myPhotos[i] + '&key=' + key;
                }
                str += '" alt="img"></div></div><!-- END FEATURED SLIDER --></div></div></div></div></div></div>';

            }
            i++;
            for (; i < data.results.length; i++) {
                myName[i] = data.results[i].name;
                myAddress[i] = data.results[i].vicinity;
                myRating[i] = data.results[i].rating;
                myplace_id[i] = data.results[i].place_id;
                //console.log(JSON.stringify(myplace_id[i]));
                if (data.results[i].photos != undefined) {
                    myPhotos[i] = data.results[i].photos[0].photo_reference;
                }
                if (myRating[i] == undefined) {
                    myRating[i] = 'Not rated';
                }
                str += '<div id="hide_area" class="col-lg-12 col-md-12"><div class="about_area"><div class="heading"><h2 id="search_item" class="wow fadeInLeftBig">';
                str += myName[i] + '</h2></div><!-- START ABOUT CONTENT --><div class="about_content"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_featured"><div class="panel-group" id="accordion"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title">Venue </h4> </div><div class="panel-body">';
                str += myAddress[i];
                str += '</div></div><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Ratings (Out of 5) </h4></div><div class="panel-body">';
                str += myRating[i];
                str += '</div>';
                if (myRating[i] != 'Not rated') {
                    str += '<div class="panel-body">';
                    var percent = (Number(myRating[i]) / 5) * 100;
                    //console.log(percent);
                    var display = percent + '%';
                    str += '<span style="display: block; width: 80px; height: 16px; background: url(img/stars.png) 0 0;">';
                    str += '<span style="display: block; width: ';
                    str += display;
                    str += '; height: 16px; background: url(img/stars.png) 0 -16px;"></span></span>';
                    str += '</div>';
                }
                str += '</div></div></div><button id=' + JSON.stringify(myplace_id[i]) + ' type="button" class="btn btn-primary btn-block" onclick="execute(this.id)"></b>Details</b></button></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_slider"><!-- BEGAIN FEATURED SLIDER --><div class="featured_slider"><!-- SINGLE SLIDE IN THE SLIDER --><div class="single_iteam"><img src="';
                if (myPhotos[i] == undefined) {
                    str += 'img/feature_img1.jpg ';
                } else {
                    str += 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=600&maxheight=400&photoreference=' + myPhotos[i] + '&key=' + key;
                }
                str += '" alt="img"></div></div><!-- END FEATURED SLIDER --></div></div></div></div></div></div>';
            }
            var divid = document.getElementById('products');


            divid.innerHTML += str;
            //console.log(myName);
            //Getting more data
            //some_more_ajax(token)
            offset += i;

        },
        error: function(response) {
            console.log('Hello');
            localStorage.backtrack = 'restaurant.html';
            //alert(localStorage.backtrack);
            window.location = 'cors_enable.html';
        }
    });
    //console.log('DONE '+token);
}*/

function execute(to_add) {
    //$("button").click(function() {
    if (flag) {
        //console.log('Success');
        //alert(this.id);
        flag = false;
        //var to_add = this.id;
        localStorage.request_id = to_add;
        window.location = 'restaurant_detail.html';
    }
    //});
}

function insert(type) {
    var i, k, one;
    var enter = true;
    for (i = 0; i < type.length; ++i) {
        one = type[i];
        for (k = 0; k < all_types.length; ++k) {
            if (one == all_types[k])
                enter = false;
        }
        if (enter)
            all_types.push(one);
    }
}