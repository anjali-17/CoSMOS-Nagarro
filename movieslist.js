var movieArray = new Array();
var displaymoviearray = new Array();
var dontDisplay = [370663, 371435, 388092, 423619, 405040, 422153, 423553, 422514];
var flag = true;
var genre_list = new Array();

function cache(key, value) {
    this.key = key;
    this.value = value;
}

$(document).ready(function() {
    first_movie_ajax().success(wait_movie_ajax_1).success(wait_movie_ajax_2);
});

function process() {
    temp_genre = new cache(28, 'Action');
    genre_list.push(temp_genre);
    temp_genre = new cache(12, 'Adventure');
    genre_list.push(temp_genre);
    temp_genre = new cache(16, 'Animation');
    genre_list.push(temp_genre);
    temp_genre = new cache(35, 'Comedy');
    genre_list.push(temp_genre);
    temp_genre = new cache(80, 'Crime');
    genre_list.push(temp_genre);
    temp_genre = new cache(99, 'Documentary');
    genre_list.push(temp_genre);
    temp_genre = new cache(18, 'Drama');
    genre_list.push(temp_genre);
    temp_genre = new cache(10751, 'Family');
    genre_list.push(temp_genre);
    temp_genre = new cache(14, 'Fantasy');
    genre_list.push(temp_genre);
    temp_genre = new cache(36, 'History');
    genre_list.push(temp_genre);
    temp_genre = new cache(27, 'Horror');
    genre_list.push(temp_genre);
    temp_genre = new cache(10402, 'Music');
    genre_list.push(temp_genre);
    temp_genre = new cache(9648, 'Mystery');
    genre_list.push(temp_genre);
    temp_genre = new cache(10749, 'Romance');
    genre_list.push(temp_genre);
    temp_genre = new cache(878, 'Science Fiction');
    genre_list.push(temp_genre);
    temp_genre = new cache(10770, 'TV Movie');
    genre_list.push(temp_genre);
    temp_genre = new cache(53, 'Thriller');
    genre_list.push(temp_genre);
    temp_genre = new cache(10752, 'War');
    genre_list.push(temp_genre);
    temp_genre = new cache(37, 'Western');
    genre_list.push(temp_genre);

    //for(var k=0;k<genre_list.length;++k)
    //{
    //  console.log(genre_list[k].key+''+genre_list[k].value);
    //}
}

function find(key) {
    var found;
    for (var k = 0; k < genre_list.length; ++k) {
        if (genre_list[k].key == key) {
            found = genre_list[k].value;
            break;
        }
    }
    return found;
}

var contentType = "application/json";
if (window.XDomainRequest) //for IE8,IE9
    contentType = "text/plain";
function movie(obj_id, obj_genre, obj_title, obj_rating, obj_poster, obj_overview, obj_release_date) {
    this.obj_id = obj_id;
    this.obj_genre = obj_genre;
    this.obj_title = obj_title;
    this.obj_rating = obj_rating;
    this.obj_poster = obj_poster;
    this.obj_overview = obj_overview;
    this.obj_release_date = obj_release_date;
}
function implementfilter() {
    //alert("hello");
    var len = displaymoviearray.length;
    displaymoviearray.splice(0, len);
    var i, j;
    var min_rating = parseFloat($("#slval1").text());
    var max_rating = parseFloat($("#slval2").text());
    // alert(max_rating);
    // alert(min_rating);
    for (i = 0; i < movieArray.length; ++i) {
        if (movieArray[i].obj_rating <= max_rating && movieArray[i].obj_rating >= min_rating) {
            // var push_obj=movieArray[i];
            // console.log("push");
            // console.log(push_obj);
            displaymoviearray.push(movieArray[i]);
        }
    }

    //alert("Hi")
    var is_action = $("#action").is(':checked');
    var is_adventure = $("#adventure").is(':checked');
    var is_animation = $("#animation").is(':checked');
    var is_comedy = $("#comedy").is(':checked');
    var is_crime = $("#crime").is(':checked');
    var is_documentary = $("#documentary").is(':checked');
    var is_drama = $("#drama").is(':checked');
    var is_family = $("#family").is(':checked');
    var is_fantasy = $("#fantasy").is(':checked');
    var is_history = $("#history").is(':checked');
    var is_horror = $("#horror").is(':checked');
    var is_music = $("#music").is(':checked');
    var is_mystery = $("#mystery").is(':checked');
    var is_romance = $("#romance").is(':checked');
    var is_science = $("#science").is(':checked');
    var is_tv = $("#tv").is(':checked');
    var is_thriller = $("#thriller").is(':checked');
    var is_war = $("#war").is(':checked');
    var is_western = $("#western").is(':checked');
    //console.log(is_drama);
    for (i = 0; i < displaymoviearray.length; ++i) {
        if (!is_action) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 28) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_adventure) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 12) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_animation) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 16) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_comedy) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 35) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_crime) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 80) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_documentary) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 99) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_drama) {
            console.log(displaymoviearray[i].obj_title);
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 18) {
                    console.log(displaymoviearray[i].obj_title);
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_family) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 10751) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_fantasy) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 14) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_history) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 36) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_horror) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 27) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_music) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 10402) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_mystery) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 9648) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_romance) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 10749) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_science) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 878) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_tv) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 10770) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_thriller) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 53) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_war) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 10752) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }
        if (!is_western) {
            for (j = 0; j < displaymoviearray[i].obj_genre.length; ++j) {
                if (displaymoviearray[i].obj_genre[j] == 37) {
                    displaymoviearray.splice(i, 1);
                    break;
                }
            }
        }

    }
    var up = $("#sort_order_text").text();
    if (up == "Decreasing") {
        displaymoviearray.sort(function(a, b) {

            return parseFloat(b.obj_rating) - parseFloat(a.obj_rating);

        });
    } else {
        displaymoviearray.sort(function(a, b) {

            return parseFloat(a.obj_rating) - parseFloat(b.obj_rating);

        });
    }
    // up = $("#sort_release_text").text();
    // if (up == "Decreasing") {
    //     displaymoviearray.sort(function(a, b) {
    //
    //         return b.obj_release_date - a.obj_rating;
    //
    //     });
    // } else {
    //     displaymoviearray.sort(function(a, b) {
    //
    //         return a.obj_release_date - b.obj_release_date;
    //
    //     });
    // }
    preparemoviehtml(false);
}

function preparefilter() {
    $('.place_type').iCheck({
        checkboxClass: 'icheckbox_flat-green'
            // radioClass: 'iradio_flat-red'
    });

    $("#slider").slider({
        range: true,
        min: 0,
        max: 10,
        values: [0, 10],
        step: 0.5,
        slide: function(evt, elem) {
            if ((elem.values[0]) >= elem.values[1]) {
                return false;
            }
            $("#slval1").text(elem.values[0]);
            $("#slval2").text(elem.values[1]);

        },
        stop: function(evt, elem) {
          // var len = displaymoviearray.length;
          // displaymoviearray.splice(0, len);
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
function preparemoviehtml(first_time) {
  localStorage.all_movie_list = JSON.stringify(movieArray);
    var i, str = '';
    console.log(displaymoviearray);
    for (i = 0; i < displaymoviearray.length; ++i) {
        var percent = (Number(displaymoviearray[i].obj_rating) / 10) * 100;
        var display = percent + '%';

        str += '<div id="hide_area" class="col-lg-12 col-md-12"><div class="about_area"><div class="heading"><h2 id="search_item" class="wow fadeInLeft"><br><br>';
        str += displaymoviearray[i].obj_title;
        //console.log(displaymoviearray[i].obj_title);
        str += '</h2></div><div class="about_content"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_featured"><div class="panel-group" id="accordion"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title">Overview</h4></div><div class="panel-body">';
        str += displaymoviearray[i].obj_overview;
        str += '</div></div></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> IMDb Rating</h4></div><div class="panel-body">';

        str += displaymoviearray[i].obj_rating;
        str += ' </div>';
        str += '<div class="panel-body">';
        str += '<span style="display: block; width: 160px; height: 16px; background: url(img/stars10.png) 0 0;">';
        str += '<span style="display: block; width: ';
        str += display;
        str += '; height: 16px; background: url(img/stars10.png) 0 -16px;"></span></span>';
        str += '</div>';

        str += '</div></div></div>';

        str += '<div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
        str += '<h4 class="panel-title">Release Date</h4></div><div class="panel-body">';
        str += displaymoviearray[i].obj_release_date;
        str += '</div></div></div>';
        var add = '';
        for (var z = 0; z < displaymoviearray[i].obj_genre.length; ++z) {
            var temp = displaymoviearray[i].obj_genre[z];
            var found = find(temp);
            add += '<span class="label label-warning">';
            add += found;
            add += '</span>';
            if(z>0 && (z%2==0)){
            add+='<br/>';
          }
        }
        str += '<div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
        str += '<h4 class="panel-title">Genre Tag</h4></div><div class="panel-body">';
        str += add;
        str += '</div></div></div>';
        str += '</div>';


        //str+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Release Date </h4></div><div class="panel-body">';
        //str +=  primary_release_date[i];
        //str +=   '</div></div>';
        str += '<div class="panel panel-default wow fadeInLeft"><button id=';
        str += displaymoviearray[i].obj_id;
        str += ' type="button" class="btn btn-primary btn-block" onclick="execute_movie(this.id)"style="margin-top:40px;">Details</button></div>';
        str += '</div></div></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_slider"><div class="featured_slider"><div style="padding-left:0px; " class="single_iteam"><img src="';
        str += 'https://image.tmdb.org/t/p/w500/' + displaymoviearray[i].obj_poster;
        str += '" width="400" height="400" alt="img">';
        str += '</div></div></div></div></div></div></div></div> ';
        //console.log(i);
    }
    var divid = document.getElementById('products');
    divid.innerHTML = '';
    divid.innerHTML += str;
    if (first_time) {
        preparefilter();
         setTimeout(function(){
        $("#movie_loader").fadeOut("fast");
      $("#products").fadeIn("slow");
  },2000);
    }
}

function first_movie_ajax() {
    return $.ajax({
        url: 'https://api.themoviedb.org/3/discover/movie?api_key=fc3c055dbae6de898caa4bae948ed685&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=true&page=1&primary_release_year=2017&primary_release_date.gte=2017-09-01&primary_release_date.lte=2017-11-30',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            process();
            var results = data.results;
            console.log(results.length);
            var poster_path = [];
            var overview = [];
            var primary_release_date = [];
            var id = [];
            var title = [];
            var vote = [];
            var tag = [];
            var genre_ids = [];

            var str;
            for (var i = 0; i < results.length; i++) {
                poster_path[i] = results[i].poster_path;
                overview[i] = results[i].overview;
                primary_release_date[i] = results[i].release_date;
                id[i] = results[i].id;

                title[i] = results[i].original_title;
                vote[i] = results[i].vote_average;

                genre_ids[i] = results[i].genre_ids;
                for (var k = 0; k < dontDisplay.length; k++) {
                    if (id[i] == dontDisplay[k]) {
                        console.log("ID :  " + id[i]);
                        id[i] = 0;
                        break;
                    }
                }
                if (id[i] == 0)
                    continue;

                temp_obj = new movie(id[i], genre_ids[i], title[i], vote[i], poster_path[i], overview[i], primary_release_date[i]);
                movieArray.push(temp_obj);
                displaymoviearray.push(temp_obj);
                //     var percent = (Number(vote[i]) / 10) * 100;
                //     var display = percent + '%';
                //
                //     str = '<div id="hide_area" class="col-lg-12 col-md-12"><div class="about_area"><div class="heading"><h2 id="search_item" class="wow fadeInLeftBig"><br><br>';
                //     str += title[i];
                //     str += '</h2></div><div class="about_content"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_featured"><div class="panel-group" id="accordion"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title">Overview</h4></div><div class="panel-body">';
                //     str += overview[i];
                //     str += '</div></div></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> IMDb Rating</h4></div><div class="panel-body">';
                //     if (vote[i] != 0) {
                //         str += vote[i];
                //         str += ' </div>';
                //         str += '<div class="panel-body">';
                //         str += '<span style="display: block; width: 160px; height: 16px; background: url(img/stars10.png) 0 0;">';
                //         str += '<span style="display: block; width: ';
                //         str += display;
                //         str += '; height: 16px; background: url(img/stars10.png) 0 -16px;"></span></span>';
                //         str += '</div>';
                //     } else {
                //         str += 'Not Rated yet';
                //         str += ' </div>';
                //     }
                //     str += '</div></div></div>';
                //
                //     str += '<div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
                //     str += '<h4 class="panel-title">Release Date</h4></div><div class="panel-body">';
                //     str += primary_release_date[i];
                //     str += '</div></div></div>';
                //     var add = '';
                //     for (var z = 0; z < results[i].genre_ids.length && z < 5; ++z) {
                //         var temp = results[i].genre_ids[z];
                //         var found = find(temp);
                //         add += '<span class="label label-warning">';
                //         add += found;
                //         add += '</span>';
                //     }
                //     str += '<div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
                //     str += '<h4 class="panel-title">Genre Tag</h4></div><div class="panel-body">';
                //     str += add;
                //     str += '</div></div></div>';
                //     str += '</div>';
                //
                //
                //     //str+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Release Date </h4></div><div class="panel-body">';
                //     //str +=  primary_release_date[i];
                //     //str +=   '</div></div>';
                //     str += '<div class="panel panel-default wow fadeInLeft"><button id=';
                //     str += JSON.stringify(id[i]);
                //     str += ' type="button" class="btn btn-primary btn-block" onclick="execute_movie(this.id)"style="margin-top:40px;">Details</button></div>';
                //     str += '</div></div></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_slider"><div class="featured_slider"><div style="padding-left:15px; " class="single_iteam"><img src="';
                //     str += 'https://image.tmdb.org/t/p/w500/' + poster_path[i];
                //     str += '" width="400" height="400" alt="img">';
                //     str += '</div></div></div></div></div></div></div></div> ';
                //     var divid = document.getElementById('products');
                //     divid.innerHTML += str;
            }


        },
        error: function(response) {
            console.log('Hello');
        }
    });
}

function second_movie_ajax() {
    return $.ajax({
        url: 'https://api.themoviedb.org/3/discover/movie?api_key=fc3c055dbae6de898caa4bae948ed685&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=true&page=2&primary_release_year=2017&primary_release_date.gte=2017-10-15&primary_release_date.lte=2017-10-30',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var results = data.results;
            console.log(results.length);
            var poster_path = [];
            var overview = [];
            var primary_release_date = [];
            var id = [];
            var title = [];
            var vote = [];
            var tag = [];
            var genre_ids = [];

            var str;
            for (var i = 0; i < results.length; i++) {
                poster_path[i] = results[i].poster_path;
                overview[i] = results[i].overview;
                primary_release_date[i] = results[i].release_date;
                id[i] = results[i].id;
                title[i] = results[i].original_title;
                vote[i] = results[i].vote_average;
                genre_ids[i] = results[i].genre_ids;

                for (var k = 0; k < dontDisplay.length; k++) {
                    if (id[i] == dontDisplay[k]) {
                        console.log("ID :  " + id[i]);
                        id[i] = 0;
                        break;
                    }
                }
                if (id[i] == 0)
                    continue;
                temp_obj = new movie(id[i], genre_ids[i], title[i], vote[i], poster_path[i], overview[i], primary_release_date[i]);
                movieArray.push(temp_obj);
                displaymoviearray.push(temp_obj);
                //     var percent = (Number(vote[i]) / 10) * 100;
                //     var display = percent + '%';
                //
                //     str = '<div id="hide_area" class="col-lg-12 col-md-12"><div class="about_area"><div class="heading"><h2 id="search_item" class="wow fadeInLeftBig"><br><br>';
                //     str += title[i];
                //     str += '</h2></div><div class="about_content"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_featured"><div class="panel-group" id="accordion"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title">Overview</h4></div><div class="panel-body">';
                //     str += overview[i];
                //     str += '</div></div></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> IMDb Rating </h4></div><div class="panel-body">';
                //     if (vote[i] != 0) {
                //         str += vote[i];
                //         str += ' </div>';
                //         str += '<div class="panel-body">';
                //         str += '<span style="display: block; width: 160px; height: 16px; background: url(img/stars10.png) 0 0;">';
                //         str += '<span style="display: block; width: ';
                //         str += display;
                //         str += '; height: 16px; background: url(img/stars10.png) 0 -16px;"></span></span>';
                //         str += '</div>';
                //     } else {
                //         str += 'Not Rated yet';
                //         str += ' </div>';
                //     }
                //     str += '</div></div></div>';
                //
                //     str += '<div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
                //     str += '<h4 class="panel-title">Release Date</h4></div><div class="panel-body">';
                //     str += primary_release_date[i];
                //     str += '</div></div></div>';
                //     var add = '';
                //     for (var z = 0; z < results[i].genre_ids.length; ++z) {
                //         var temp = results[i].genre_ids[z];
                //         var found = find(temp);
                //         add += '<span class="label label-warning">';
                //         add += found;
                //         add += '</span>';
                //     }
                //     str += '<div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
                //     str += '<h4 class="panel-title">Genre Tag</h4></div><div class="panel-body">';
                //     str += add;
                //     str += '</div></div></div>';
                //     str += '</div>';
                //
                //
                //     //str+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Release Date </h4></div><div class="panel-body">';
                //     //str +=  primary_release_date[i];
                //     //str +=   '</div></div>';
                //     str += '<div class="panel panel-default wow fadeInLeft"><button id=';
                //     str += JSON.stringify(id[i]);
                //     str += ' type="button" class="btn btn-primary btn-block" onclick="execute_movie(this.id)"style="margin-top:40px;">Details</button></div>';
                //     str += '</div></div></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_slider"><div class="featured_slider"><div style="padding-left:15px; " class="single_iteam"><img src="';
                //     str += 'https://image.tmdb.org/t/p/w500/' + poster_path[i];
                //     str += '" width="400" height="400" alt="img">';
                //     str += '</div></div></div></div></div></div></div></div> ';
                //     var divid = document.getElementById('products');
                //     divid.innerHTML += str;
            }


        },
        error: function(response) {
            console.log('Hello');
        }
    });
}


function third_movie_ajax() {
    return $.ajax({
        url: 'https://api.themoviedb.org/3/discover/movie?api_key=fc3c055dbae6de898caa4bae948ed685&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=true&page=3&primary_release_year=2017&primary_release_date.gte=2017-9-01&primary_release_date.lte=2017-9-30',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var results = data.results;
            //console.log(data);
            var poster_path = [];
            var overview = [];
            var primary_release_date = [];
            var id = [];
            var title = [];
            var vote = [];
            var tag = [];
            var genre_ids = [];

            var str;
            for (var i = 0; i < results.length; i++) {
                poster_path[i] = results[i].poster_path;
                overview[i] = results[i].overview;
                primary_release_date[i] = results[i].release_date;
                id[i] = results[i].id;
                title[i] = results[i].original_title;
                vote[i] = results[i].vote_average;
                genre_ids[i] = results[i].genre_ids;

                for (var k = 0; k < dontDisplay.length; k++) {
                    if (id[i] == dontDisplay[k]) {
                        console.log("ID :  " + id[i]);
                        id[i] = 0;
                        break;
                    }
                }
                if (id[i] == 0)
                    continue;
                temp_obj = new movie(id[i], genre_ids[i], title[i], vote[i], poster_path[i], overview[i], primary_release_date[i]);
                movieArray.push(temp_obj);
                displaymoviearray.push(temp_obj);
                //     var percent = (Number(vote[i]) / 10) * 100;
                //     var display = percent + '%';
                //
                //     str = '<div id="hide_area" class="col-lg-12 col-md-12"><div class="about_area"><div class="heading"><h2 id="search_item" class="wow fadeInLeftBig"><br><br>';
                //     str += title[i];
                //     str += '</h2></div><div class="about_content"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_featured"><div class="panel-group" id="accordion"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title">Overview</h4></div><div class="panel-body">';
                //     str += overview[i];
                //     str += '</div></div></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> IMDb Rating </h4></div><div class="panel-body">';
                //     if (vote[i] != 0) {
                //         str += vote[i];
                //         str += ' </div>';
                //         str += '<div class="panel-body">';
                //         str += '<span style="display: block; width: 160px; height: 16px; background: url(img/stars10.png) 0 0;">';
                //         str += '<span style="display: block; width: ';
                //         str += display;
                //         str += '; height: 16px; background: url(img/stars10.png) 0 -16px;"></span></span>';
                //         str += '</div>';
                //     } else {
                //         str += 'Not Rated yet';
                //         str += ' </div>';
                //     }
                //     str += '</div></div></div>';
                //
                //     str += '<div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
                //     str += '<h4 class="panel-title">Release Date</h4></div><div class="panel-body">';
                //     str += primary_release_date[i];
                //     str += '</div></div></div>';
                //     var add = '';
                //     for (var z = 0; z < results[i].genre_ids.length; ++z) {
                //         var temp = results[i].genre_ids[z];
                //         var found = find(temp);
                //         add += '<span class="label label-warning">';
                //         add += found;
                //         add += '</span>';
                //     }
               						 //     str += '<div class="col-lg-6 col-md-6 col-sm-12"><div class="panel panel-default wow fadeInLeft"><div class="panel-heading">';
                //     str += '<h4 class="panel-title">Genre Tag</h4></div><div class="panel-body">';
                //     str += add;
                //     str += '</div></div></div>';
                //     str += '</div>';
                //
                //
                //     //str+='<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Release Date </h4></div><div class="panel-body">';
                //     //str +=  primary_release_date[i];
                //     //str +=   '</div></div>';
                //     str += '<div class="panel panel-default wow fadeInLeft"><button id=';
                //     str += JSON.stringify(id[i]);
                //     str += ' type="button" class="btn btn-primary btn-block" onclick="execute_movie(this.id)"style="margin-top:40px;">Details</button></div>';
                //     str += '</div></div></div><div class="col-lg-6 col-md-6 col-sm-12"><div class="about_slider"><div class="featured_slider"><div style="padding-left:15px; " class="single_iteam"><img src="';
                //     if (poster_path[i] != undefined) {
                //         //console.log("poster "+);
                //         str += 'https://image.tmdb.org/t/p/w500/' + poster_path[i];
                //     } else {
                //         //console.log("No poster");
                //         str += 'img/no_poster.png';
                //     }
                //     str += '" width="400" height="400" alt="img">';
                //     str += '</div></div></div></div></div></div></div></div> ';
                //     var divid = document.getElementById('products');
                //     divid.innerHTML += str;
            }

            //setTimeout(preparemoviehtml,5000);
            //console.log(overview);
            preparemoviehtml(true);
        },
        error: function(response) {
            console.log('Hello');
        }
    });
}

function execute_movie(to_add) {
    //$("button").click(function(){
    if (flag) {
        //console.log('Success');
        //alert(this.id);
        flag = false;
        //var to_add=this.id;
        //alert(to_add);
        localStorage.request_movie_id = to_add;
        window.location = 'movie_detail.html';
    }
    //});
}

function wait_movie_ajax_1() {
    console.log("2");
    setTimeout(second_movie_ajax, 100);
}

function wait_movie_ajax_2() {
    console.log("3");
    setTimeout(third_movie_ajax, 100);
}
