var text;
function format(n) {
    return '$' + " " + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
}

if(typeof(Storage) !== "undefined") {
            if (localStorage.request_movie_id) {
                    text=(localStorage.request_movie_id);
                    var contentType ="application/json";
                    if(window.XDomainRequest) //for IE8,IE9
                        contentType = "text/plain";
                    $.ajax({
                        // change id here 
                        url: 'https://api.themoviedb.org/3/movie/'+text+'?api_key=fc3c055dbae6de898caa4bae948ed685&language=en-US',
                        method: 'GET',
                        dataType: 'json',
                        success: function(data){
                            console.log(text);
                            //console.log(data);
                             var backdroppath = data.backdrop_path ;
                             var language;
                             if(data.spoken_languages.length!=0){
                              language = data.spoken_languages[0].name;
                            }
                            else
                                language='Information not provided';
                             var budget = data.budget ;
                             if(budget==0){
                                budget='Information not provided';}
                            else{
                                budget=format(budget);
                                budget=budget.split('.')[0]
                            }
                             var genre = [];
                             for(var i = 0 ; i < data.genres.length ; i++){
                                genre[i] = data.genres[i].name;
                             }
                             var id = data.id ;
                             var prod;
                             if(data.production_companies.length!=0){
                              prod = data.production_companies[0].name ;
                            }
                            else
                                prod='Information not provided';
                             var imdb_id = data.imdb_id;
                             var original_title = data.original_title;
                             var overview = data.overview ;
                             var posterpath = data.poster_path ;
                             var release_date = data.release_date;
                             var revenue = data.revenue ;
                             var runtime = data.runtime ;
                             var tagline= data.tagline ;
                             var vote_average = data.vote_average;


                             var divSearch = document.getElementById("search_item");
                             divSearch.innerHTML = original_title;

                             var divGenres = document.getElementById("genre_id");
                             var add='';
                             for(var i = 0 ; i < genre.length &&i<5; i++){
                                //divGenres.innerHTML += genre[i] + "  "  ;
                                    add+='<span class="label label-warning">';
                                   add+=genre[i];
                                   add+='</span>';
                             }
                             $(genre_id).append(add);
                              
                             var voteid = document.getElementById("vote_id");
                             if(vote_average!=0){
                             voteid.innerHTML = vote_average;
                             var percent=(Number(vote_average)/10)*100;
                             var display=percent+'%';
                             $("#star_id").css('width', display);
                             //var tagid = document.getElementById("tag_id");
                             //tagid.innerHTML = tagline ;
                         }
                         else{
                            voteid.innerHTML='Not rated yet'
                            $('#select').hide();
                         }

                              var languageid = document.getElementById("language_id");
                             languageid.innerHTML = language;

                              var productionid = document.getElementById("production_id");
                             productionid.innerHTML = prod;

                             var budgetid = document.getElementById("budget_id");
                                budgetid.innerHTML = budget;

                                var link='http://www.imdb.com/title/'+imdb_id;
                                $("#imdb").attr("href",link)

                             var overviewid = document.getElementById("overview_id");
                             overviewid.innerHTML = overview ;
                             var imageid = document.getElementById("image_id");
                             var src; //= 'https://image.tmdb.org/t/p/w500/' + posterpath;
                             if(posterpath!=undefined){
                                  //console.log("poster "+);
                                src = 'https://image.tmdb.org/t/p/w500/' +posterpath;
                              }
                              else{
                                //console.log("No poster");
                                src='img/no_poster.png';
                              }
                             imageid.src = src ;
                             put_video();
                             put_review();
                             put_cast_and_crew();
                             reccomend_movie(text,vote_average,data.genres,id);
                        },
                        error:function(response){
                          console.log('Hello');
                        }
                      });            } 
            else
            {
                  window.location='movie_test.html';
            }
                            //console.log(text);
}
else{
            alert('Please upgrade your browser to support HTML5');
            window.location='movie_test.html';
}


 function put_video(){
                        $.ajax({
                            url:'https://api.themoviedb.org/3/movie/'+text+'/videos?api_key=fc3c055dbae6de898caa4bae948ed685&language=en-US',
                            method: 'GET',
                            dataType: 'json',
                            success:function(data){
                                //console.log(JSON.stringify(data));
                                if(data.results.length!=0){
                                    var key=data.results[0].key;
                                    var link='<iframe allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" width="640" height="480" src="http://www.youtube.com/embed/'+key+'?rel=0" frameborder="0" allowFullScreen></iframe>';
                                    $("#youtube").append(link);
                                    //console.log(key);
                                }
                                else{
                                    var link='';
                                    link+='<div><span><img src="img/no_trailer.png" class="img-fluid" style="margin-bottom:30px;margin-left:15px;display:block;max-width:550px;max-height:534px;"></span></div>';
                                    $("#youtube").append(link);
                                }
                            },
                            error:function(response){
                            console.log('Hello');
                            }
    });
}
function put_review(){
     $.ajax({
                            url:'https://api.themoviedb.org/3/movie/'+text+'/reviews?api_key=fc3c055dbae6de898caa4bae948ed685&language=en-US',
                            method: 'GET',
                            dataType: 'json',
                            success:function(data){
                                    var result=data.results;
                                    var review = [];
                                    var author_name = [];
                                    for(var i=0;i<result.length;++i){
                                        author_name[i]=result[i].author;
                                        review[i]=result[i].content;
                                    }
                                    var str='';
                                    if(author_name.length!=0){
                                    for(var i = 0 ; i < author_name.length ; i++){
                                            str = '<li><h4 class="media-heading" style="margin-left:5px;"><b>';
                                            str += author_name[i];
                                            str += '</b></h4>';

                                            str+='</div></div>';
                                            str += '<div class="testi_content scroll_view" style="background-color:#ffff33 !important;"><blockquote><p>';
                                            str += review[i];
                                            str += '</p></blockquote></div></li>';

                                            var divid = document.getElementById('userReviews');
                                            divid.innerHTML += str;
                                        }

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
                                add+='<div><span><img src="img/no_review.png" class="img-fluid" style="display:block;max-width:550px;max-height:534px;margin-bottom:30px;"></span></div>';
                                var divid = document.getElementById('userReviews');
                                divid.innerHTML += add;
                            }
                        },
                            error:function(response){
                            console.log('Hello');
                            }
    });
}

function put_cast_and_crew(){
    $.ajax({
                            url:'https://api.themoviedb.org/3/movie/'+text+'/credits?api_key=fc3c055dbae6de898caa4bae948ed685&language=en-US',
                            method: 'GET',
                            dataType: 'json',
                            success:function(data){
                                    var cast=[];
                                    var crew=[];
                                    cast=data.cast;
                                    crew=data.crew;
                                    
                                    //var divid = document.getElementById('userReviews');
                                    for(var i=0;i<cast.length;++i)
                                    {
                                            var add='';
                                            if(cast[i].character!=''&&cast[i].name!=''){
                                                add+='<div class="col-lg-3 col-md-3 col-sm-4 slick-slide slick-active" index="0" style="width: 329px;">';
                                                add+='<div class="single_team wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">';
                                                add+='<div class="team_img">';
                                                add+='<img src="';
                                                if(cast[i].profile_path!=undefined){
                                                    add+='https://image.tmdb.org/t/p/w300/'+cast[i].profile_path;
                                                }
                                                else{
                                                    add+='img/no_profile.png'
                                                }
                                                add+='" width="250" height="250" alt="img">';
                                                add+='<h5 class="" style="height:65px;">'+cast[i].name;
                                                add+='</h5>';
                                                add+='<div class="panel-heading"><h4 class="panel-title">character</h4></div><div class="panel-body">';
                                                add+=cast[i].character;
                                                add+='</div><div class="panel panel-default wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"><div class="panel-heading">';
                                                add+='<h4 class="panel-title">Tag </h4></div><div class="panel-body"><div class="panel-body"><span class="label label-warning">';
                                                add+='Cast';
                                                add+='</span></div></div></div></div></div></div></div>';

                                                $("#here_append_cast").append(add);
                                            }
                                    }

                                    for(var i=0;i<crew.length;++i)
                                    {
                                            var add='';
                                            if(crew[i].job!=''&&crew[i].name!=''){
                                                add+='<div class="col-lg-3 col-md-3 col-sm-4 slick-slide slick-active" index="0" style="width: 329px;">';
                                                add+='<div class="single_team wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">';
                                                add+='<div class="team_img">';
                                                add+='<img src="';
                                                if(crew[i].profile_path!=undefined){
                                                    add+='https://image.tmdb.org/t/p/w300/'+crew[i].profile_path;
                                                }
                                                else{
                                                    add+='img/no_profile.png'
                                                }
                                                add+='" width="250" height="250" alt="img">';
                                                add+='<h5 class="" style="height:65px;">'+crew[i].name;
                                                add+='</h5>';
                                                add+='<div class="panel-heading"><h4 class="panel-title">Role</h4></div><div class="panel-body">';
                                                add+=crew[i].job;
                                                add+='</div><div class="panel panel-default wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"><div class="panel-heading">';
                                                add+='<h4 class="panel-title">Tag </h4></div><div class="panel-body" style="height:85px;"><div class="panel-body"><span class="label label-warning">';
                                                add+='Crew';
                                                add+='</span></div></div></div></div></div></div></div>';

                                                $("#here_append_cast").append(add);
                                            }

                                    }
                                

                                    $('#here_append_cast').slick({
                                              dots: false,
                                              infinite: true,
                                              speed: 300,
                                              slidesToShow: 4,
                                              slidesToScroll: 1,
                                              responsive: [
                                                {
                                                  breakpoint: 1024,
                                                  settings: {
                                                    slidesToShow: 3,
                                                    slidesToScroll: 1,
                                                    infinite: true,
                                                    dots: true
                                                  }
                                                },
                                                {
                                                  breakpoint: 600,
                                                  settings: {
                                                    slidesToShow: 2,
                                                    slidesToScroll: 1
                                                  }
                                                },
                                                {
                                                  breakpoint: 480,
                                                  settings: {
                                                    slidesToShow: 1,
                                                    slidesToScroll: 1
                                                  }
                                                }
                                              ]
                                    });
                        },
                            error:function(response){
                            console.log('Hello');
                            }
    });
}