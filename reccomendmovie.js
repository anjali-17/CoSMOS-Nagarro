var buffer_array=new Array();
var flag=true;
var text,rating,id;
var genre_list=new Array();
function cache(key,value){
    this.key=key;
    this.value=value;
}
var type_genre=[];
function process(){
      temp_genre=new cache(28,'Action');
      genre_list.push(temp_genre);
      temp_genre=new cache(12,'Adventure');
      genre_list.push(temp_genre);
      temp_genre=new cache(16,'Animation');
      genre_list.push(temp_genre);
      temp_genre=new cache(35,'Comedy');
      genre_list.push(temp_genre);
      temp_genre=new cache(80,'Crime');
      genre_list.push(temp_genre);
      temp_genre=new cache(99,'Documentary');
      genre_list.push(temp_genre);
      temp_genre=new cache(18,'Drama');
      genre_list.push(temp_genre);
      temp_genre=new cache(10751,'Family');
      genre_list.push(temp_genre);
      temp_genre=new cache(14,'Fantasy');
      genre_list.push(temp_genre);
      temp_genre=new cache(36,'History');
      genre_list.push(temp_genre);
      temp_genre=new cache(27,'Horror');
      genre_list.push(temp_genre);
      temp_genre=new cache(10402,'Music');
      genre_list.push(temp_genre);
      temp_genre=new cache(9648,'Mystery');
      genre_list.push(temp_genre);
      temp_genre=new cache(10749,'Romance');
      genre_list.push(temp_genre);
      temp_genre=new cache(878,'Science Fiction');
      genre_list.push(temp_genre);
      temp_genre=new cache(10770,'TV Movie');
      genre_list.push(temp_genre);
      temp_genre=new cache(53,'Thriller');
      genre_list.push(temp_genre);
      temp_genre=new cache(10752,'War');
      genre_list.push(temp_genre);
      temp_genre=new cache(37,'Western');
      genre_list.push(temp_genre);

      //for(var k=0;k<genre_list.length;++k)
      //{
        //  console.log(genre_list[k].key+''+genre_list[k].value);
      //}
}
function find(key){
  var found;
    for(var k=0;k<genre_list.length;++k)
    {
        if(genre_list[k].key==key){found=genre_list[k].value;break;}
    }
    return found;
}
function reccomend_movie(sent,vote_average,genre,movie_id){
      id=movie_id;
	text=sent;
	rating=vote_average;
	type_genre=genre;
	console.log(type_genre);
	load_reccomend_movie_1();
}
function movie(obj_id,obj_genre,obj_title,obj_rating,obj_poster,obj_same){
	this.obj_id=obj_id;
	this.obj_genre=obj_genre;
	this.obj_title=obj_title;
	this.obj_rating=obj_rating;
	this.obj_poster=obj_poster;
	this.obj_same=obj_same;
  console.log(obj_poster);
}
function calc_same(temp_genre)
{
	//console.log(type_genre);
	//console.log(temp_genre);
	var length=type_genre.length;
	var score=0;
	for(var j in type_genre)
	{
		var temp=type_genre[j].id;
		for(var k in temp_genre)
		{
			var test=temp_genre[k];
			if(temp==test){
				score=score+1;
				break;
			}
		}
	}
	var percent=(score/length);

	return percent;
}
function preparehtml_no(){
  var add='';
  add='<div><center><h2 class="wow fadeInLeftBig" style="color:#663300;display: inline-block;margin-top: 25px;padding-bottom: 5px;padding-right: 50px;font-size: 34px;line-height: 40px;">No Similar movie going on theatres</h2><center></div>'
  $("#here_append").append(add);
}
function preparehtml(){
	process();
      if(buffer_array.length==0){

        preparehtml_no();
      }
      else{
        	for(var k in buffer_array){
        		var add='',img;
        		if(buffer_array[k].obj_poster!=undefined)
        		{
        			img='https://image.tmdb.org/t/p/w500/'+buffer_array[k].obj_poster;
        		}
        		else{
        			img='img/team-1.jpg';
        		}
        		add='<div class="col-lg-3 col-md-3 col-sm-4"><div class="single_team wow fadeInUp"><div class="team_img"><img src="';
        		add=add+img;
        		add=add+'" width="250" height="250" alt="img"><h5 class="" style="height:65px;">';
        		add=add+buffer_array[k].obj_title;
        		add=add+'</h5><span>Movies</span><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Genre Tags </h4></div><div class="panel-body" style="height:85px;">';
        		add=add+'<div class="panel-body">'
        		var str='';
        		for(var i = 0 ; i <buffer_array[k].obj_genre.length && i<5; i++){
                                        //divGenres.innerHTML += genre[i] + "  "  ;
                                            str+='<span class="label label-warning">';
                                            var temp=buffer_array[k].obj_genre[i]
                                            var found=find(temp);
                                            //console.log(buffer_array[k].obj_genre[i]);
                                           str+=found;
                                           str+='</span>';
                                     }
                                     add=add+str;
        		add+='</div>'
        		add=add+'</div></div>';
        		add=add+'<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Ratings </h4></div>';

        		if(buffer_array[k].obj_rating!=0){
                            add=add+'<div class="panel-body">';
                            add=add+buffer_array[k].obj_rating+'</div>'
        			var percent=(Number(buffer_array[k].obj_rating)/10)*100;
        			var display=percent+'%';
        			add=add+'<div class="panel-body">';
        			add=add+'<span style="display: block; margin-left:38px;width: 160px; height: 16px; background: url(img/stars10.png) 0 0;">';
        			add=add+'<span style="display: block; width:';
        			add=add+display;
        			add=add+'; height: 16px;background: url(img/stars10.png) 0 -16px;"></span></span>';
        			add=add+'</div>';
        		}
                    else{
                      add=add+'<div style="padding-bottom:35px;" class="panel-body">';
                            add=add+'Not rated yet</div>'
                    }
        		add=add+'<button id=';
        		add=add+JSON.stringify(buffer_array[k].obj_id);
        		add=add+'type="button" class="btn btn-primary btn-block" onclick="execute(this.id)">View</button>';
        		add=add+'</div></div></div></div>';


        		$("#here_append").append(add);
        	};

        		$('#here_append').slick({
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
      }
}

function arrange(){
	buffer_array.sort(function(a,b){
				if( Math.abs((parseFloat(b.obj_same)-parseFloat(a.obj_same))) <= .2)
					return parseFloat(b.obj_rating)-parseFloat(a.obj_rating);
				else
					return parseFloat(b.obj_same)-parseFloat(a.obj_same);
			});
	console.log(buffer_array);
	preparehtml();
}


function load_reccomend_movie_1(){
  var text;
	if(typeof(Storage) !== "undefined") {
if (localStorage.all_movie_list) {
		text=(localStorage.getItem("all_movie_list"));
		//console.log(text);
		//console.log("hello");
			all_array=JSON.parse(text);
			//console.log(all_array);
			var i;
			var temp_id, temp_genre, temp_title, temp_rating, temp_poster, temp_overview, temp_release_date,temp_same;

			for(i=0;i<all_array.length;++i)
			{
				//console.log('INSIDE');
				temp_id=all_array[i].obj_id;
				temp_title=all_array[i].obj_title;
        temp_overview=all_array[i].obj_overview;
        temp_release_date=all_array[i].release_date;
				temp_rating=all_array[i].obj_rating;
				if(temp_rating== undefined){
					temp_rating=0;
				}
				temp_add=all_array[i].obj_add;
				temp_genre=all_array[i].obj_genre;
				//temp_same=calc_same(temp_type);
				temp_diff=Math.abs(temp_rating-rating);
				if(all_array[i].obj_poster!=undefined)
					temp_poster=all_array[i].obj_poster;

				if(temp_id!=id){
          temp_same=calc_same(temp_genre);
          //console.log("OUT");
					if(temp_same >=0.5)
					{
            //console.log("IN");
						//console.log(temp_image);obj_id,obj_genre,obj_title,obj_rating,obj_poster,obj_same
            //console.log(temp_poster);
						temp_obj=new movie(temp_id, temp_genre, temp_title, temp_rating, temp_poster,temp_same);
						buffer_array.push(temp_obj);
					}
				}
			}
			//setTimeout(load_reccomendation2,2000);
			arrange();
		}
		else
		{
				//alert("hi");
					//window.location='restaurant.html';
		}
		}
		else{
										alert('Please upgrade your browser to support HTML5');
										window.location='restaurant.html';
		}
	// return $.ajax({
  //                           url:'https://api.themoviedb.org/3/discover/movie?api_key=fc3c055dbae6de898caa4bae948ed685&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=true&page=1&primary_release_year=2017&primary_release_date.gte=2017-9-10&primary_release_date.lte=2017-10-10',
  //                           method: 'GET',
  //                           dataType: 'json',
  //                           success:function(data){
  //                                   var result=[];
  //                                   var temp_id;
  //                                   var temp_genre=[];
  //                                   var temp_title;
  //                                   var temp_rating;
  //                                   var found_date;
  //                                   var temp_poster;
  //                                   //console.log(JSON.stringify(data));
  //                                   result=data.results;
  //                                   for(var i=0;i<result.length;++i){
  //                                     temp_id=result[i].id;
  //                                     if(temp_id!=id){
  //                                       temp_genre=result[i].genre_ids;
  //                                       var temp_same=calc_same(temp_genre);
  //                                       if(temp_same >=0.5){
  //                                         temp_title=result[i].original_title;
  //                                         temp_rating=result[i].vote_average;
  //                                         temp_poster=result[i].poster_path;
  //                                         temp_obj=new movie(temp_id,temp_genre,temp_title,temp_rating,temp_poster,temp_same);
  //                                         buffer_array.push(temp_obj);
  //                                       }
  //                                     }
  //                                   }
  //                                   setTimeout(load_reccomend_movie_2,500);
  //                           },
  //                           error:function(response){
  //                           console.log('Hello');
  //                           }
  //   });
}

// function load_reccomend_movie_2(){
// 	return $.ajax({
//                             url:'https://api.themoviedb.org/3/discover/movie?api_key=fc3c055dbae6de898caa4bae948ed685&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=true&page=2&primary_release_year=2017&primary_release_date.gte=2017-9-10&primary_release_date.lte=2017-10-10',
//                             method: 'GET',
//                             dataType: 'json',
//                             success:function(data){
//                                     var result=[];
//                                     var temp_id;
//                                     var temp_genre=[];
//                                     var temp_title;
//                                     var temp_rating;
//                                     var found_date;
//                                     var temp_poster;
//                                     //console.log(JSON.stringify(data));
//                                     result=data.results;
//                                    for(var i=0;i<result.length;++i){
//                                       temp_id=result[i].id;
//                                       if(temp_id!=id){
//                                         temp_genre=result[i].genre_ids;
//                                         var temp_same=calc_same(temp_genre);
//                                         if(temp_same >=0.5){
//                                           temp_title=result[i].original_title;
//                                           temp_rating=result[i].vote_average;
//                                           temp_poster=result[i].poster_path;
//                                           temp_obj=new movie(temp_id,temp_genre,temp_title,temp_rating,temp_poster,temp_same);
//                                           buffer_array.push(temp_obj);
//                                         }
//                                       }
//                                     }
//                                     setTimeout(load_reccomend_movie_3,500);
//                             },
//                             error:function(response){
//                             console.log('Hello');
//                             }
//     });
// }
//
// function load_reccomend_movie_3(){
// 	return $.ajax({
//                             url:'https://api.themoviedb.org/3/discover/movie?api_key=fc3c055dbae6de898caa4bae948ed685&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=true&page=3&primary_release_year=2017&primary_release_date.gte=2017-9-10&primary_release_date.lte=2017-10-10',
//                             method: 'GET',
//                             dataType: 'json',
//                             success:function(data){
//                                     var result=[];
//                                     var temp_id;
//                                     var temp_genre=[];
//                                     var temp_title;
//                                     var temp_rating;
//                                     var found_date;
//                                     var temp_poster;
//                                     //console.log(JSON.stringify(data));
//                                     result=data.results;
//                                     for(var i=0;i<result.length;++i){
//                                       temp_id=result[i].id;
//                                       if(temp_id!=id){
//                                         temp_genre=result[i].genre_ids;
//                                         var temp_same=calc_same(temp_genre);
//                                         if(temp_same >=0.5){
//                                           temp_title=result[i].original_title;
//                                           temp_rating=result[i].vote_average;
//                                           temp_poster=result[i].poster_path;
//                                           temp_obj=new movie(temp_id,temp_genre,temp_title,temp_rating,temp_poster,temp_same);
//                                           buffer_array.push(temp_obj);
//                                         }
//                                       }
//                                     }
//                                     setTimeout(arrange,1000);
//                             },
//                             error:function(response){
//                             console.log('Hello');
//                             }
//     });
// }

function execute(to_add){
	//$("button").click(function(){
		if(flag){
			//console.log('Success');
			//alert(this.id);
			flag=false;
			//to_add=this.id;
			localStorage.request_movie_id=to_add;
                    window.location='movie_detail.html';
		}
//});
}
