var lat,long,rating,token_2,type,id,name;
var buffer_array=new Array();
var flag=true;


function preparehtml_no(){
	var add='';
	add='<div><center><h2 class="wow fadeInLeftBig" style="color:#663300;display: inline-block;margin-top: 25px;padding-bottom: 5px;padding-right: 50px;font-size: 34px;line-height: 40px;">No Similar hotels found nearby</h2><center></div>';
	$("#to_append").append(add);
}
function preparehtml(){
	if(buffer_array.length==0){
		preparehtml_no();
	}
	else{
		var key='AIzaSyDaGJ-bA-m0GHgmcH0wIjv21R9wxs-YgzE';
		var add,img;
		for(var k in buffer_array){
			if(buffer_array[k].obj_image!=undefined)
			{
				img='https://maps.googleapis.com/maps/api/place/photo?maxwidth=250&maxheight=250&photoreference='+buffer_array[k].obj_image+'&key='+key;
			}
			else{
				img='img/team-1.jpg';
			}
			add='<div class="col-lg-3 col-md-3 col-sm-4"><div class="single_team wow fadeInUp"><div class="team_img"><img src="';
			add=add+img;
			add=add+'" alt="img"><h5 class="" style="height:65px;">';
			add=add+buffer_array[k].obj_name;
			add=add+'</h5><span>Restaurants</span><div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Venue </h4></div><div class="panel-body" style="height:85px;">';
			add=add+buffer_array[k].obj_add+'</div></div>';
			add=add+'<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Ratings </h4></div><div class="panel-body">';
			add=add+buffer_array[k].obj_rating+'</div>'
			if(buffer_array[k].obj_rating!='Not rated'){
				var percent=(Number(buffer_array[k].obj_rating)/5)*100;
				var display=percent+'%';
				add=add+'<div class="panel-body">';
				add=add+'<span style="display: block; margin-left:77px;width: 80px; height: 16px; background: url(img/stars.png) 0 0;">';
				add=add+'<span style="display: block; width:';
				add=add+display;
				add=add+'; height: 16px;background: url(img/stars.png) 0 -16px;"></span></span>';
				add=add+'</div>';
			}
			add=add+'<button id=';
			add=add+JSON.stringify(buffer_array[k].obj_placeid);
			add=add+'type="button" class="btn btn-primary btn-block" onclick="execute(this.id)">Details</button>';
			add=add+'</div></div></div></div>';

			$("#to_append").append(add);
		}

			$('#to_append').slick({
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
function calc_same(temp_type)
{
	var score=0,weight;
	var length=type.length;
	var total=(length*(length+1))/2;
	for(var j in type)
	{
		var temp=type[j];
		weight=length-j;
		for(var k in temp_type)
		{
			var test=temp_type[k];
			if(temp==test){
				score=score+weight;
				break;
			}
		}
	}
	var percent=(score/total);

	return percent;
}
function get_place_details(temp_id){
	id=temp_id;
	var key='AIzaSyBPNmNUeZ6oAm0EWYt6jey70TzrZRrrDdo';
	$.ajax({
		url:'https://maps.googleapis.com/maps/api/place/details/json?placeid='+id+'&key='+key,
		method:'GET',
		datatype:'json',
		success:function(data){
			name=data.result.name;
			lat=data.result.geometry.location.lat;
			long=data.result.geometry.location.lng;
			rating=data.result.rating;
			type=data.result.types;
			setTimeout(load_reccomendation1,1000);
		},
    		error:function(response){
      		console.log('Hello');
      		localStorage.backtrack='restaurant_detail.html';
      //alert(localStorage.backtrack);
      window.location='cors_enable.html';
                        }

	});
}
function hotel(obj_placeid,obj_name,obj_rating,obj_add,obj_diff,obj_same,obj_type,obj_image)
{
	this.obj_placeid=obj_placeid;
	this.obj_name=obj_name;
	this.obj_rating=obj_rating;
	this.obj_add=obj_add;
	this.obj_diff=obj_diff;
	this.obj_same=obj_same;
	this.obj_type=obj_type;
	this.obj_image=obj_image;
}
function load_reccomendation1(){
	var text;
	if(typeof(Storage) !== "undefined") {
if (localStorage.all_list) {
		text=(localStorage.getItem("all_list"));
		//console.log(text);
		//console.log("hello");
			all_array=JSON.parse(text);
			//console.log(all_array);
			var i;
			var temp_name,temp_rating,temp_add,temp_id,temp_diff,temp_same,temp_image;

			for(i=0;i<all_array.length;++i)
			{
				//console.log('INSIDE');
				temp_id=all_array[i].obj_placeid;
				temp_name=all_array[i].obj_name;
				temp_rating=all_array[i].obj_rating;
				if(temp_rating== undefined){
					temp_rating=0;
				}
				temp_add=all_array[i].obj_add;
				temp_type=all_array[i].obj_type;
				temp_same=calc_same(temp_type);
				temp_diff=Math.abs(temp_rating-rating);
				if(all_array[i].obj_image!=undefined)
					temp_image=all_array[i].obj_image;
				if(temp_id!=id){
					if(temp_diff<1&&temp_same>=0.5)
					{
						//console.log(temp_image);
						temp_obj=new hotel(temp_id,temp_name,temp_rating,temp_add,temp_diff,temp_same,temp_type,temp_image);
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
}
// function load_reccomendation1(){
// 	var key='AIzaSyDGE4euHKZwlKHc5GIrUUZBV5B4Z82lmeE';
// 	$.ajax({
// 		url: 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=28.4595, 77.0266&radius=25000&type=restaurant&key=AIzaSyD5IR-zdVyI8RMH2-pSiSB24chmpyjYdaI',
// 		method:'GET',
// 		datatype:'json',
// 		success:function(data){
// 			var i;
// 			var temp_name,temp_rating,temp_add,temp_id,temp_diff,temp_same,temp_image;
// 			token_2=data.next_page_token;
// 			for(i=0;i<data.results.length;++i)
// 			{
// 				//console.log('INSIDE');
// 				temp_id=data.results[i].place_id;
// 				temp_name=data.results[i].name;
// 				temp_rating=data.results[i].rating;
// 				if(temp_rating== undefined){
// 					temp_rating='Not rated';
// 				}
// 				temp_add=data.results[i].vicinity;
// 				temp_same=calc_same(data.results[i].types);
// 				temp_diff=Math.abs(temp_rating-rating);
// 				if(data.results[i].photos!=undefined)
// 					temp_image=data.results[i].photos[0].photo_reference;
// 				if(temp_id!=id){
// 					if(temp_diff<1&&temp_same>=0.5)
// 					{
// 						//console.log(temp_image);
// 						temp_obj=new hotel(temp_id,temp_name,temp_rating,temp_add,temp_diff,temp_same,data.results[i].types,temp_image);
// 						buffer_array.push(temp_obj);
// 					}
// 				}
// 			}
// 			//setTimeout(load_reccomendation2,2000);
// 			setTimeout(arrange(),1000);
// 		},
// 		error:function(response){
//       		console.log('Hello');
//       		localStorage.backtrack='restaurant_detail.html';
//       //alert(localStorage.backtrack);
//       window.location='cors_enable.html';
//                         }
// 	});
// }
/*function load_reccomendation2(){
	var key='AIzaSyDGE4euHKZwlKHc5GIrUUZBV5B4Z82lmeE';
	$.ajax({
		url: 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?pagetoken='+token_2+'&key='+key,
		method:'GET',
		datatype:'json',
		success:function(data){
			var i;
			var temp_name,temp_rating,temp_add,temp_id,temp_diff,temp_same,temp_image;
			token_2=data.next_page_token;
			for(i=0;i<data.results.length;++i)
			{
				temp_id=data.results[i].place_id;
				temp_name=data.results[i].name;
				temp_rating=data.results[i].rating;
				temp_add=data.results[i].vicinity;
				temp_same=calc_same(data.results[i].types);
				temp_diff=Math.abs(temp_rating-rating);
				if(data.results[i].photos!=undefined)
					temp_image=data.results[i].photos[0].photo_reference;
				if(temp_id!=id){
					if(temp_diff<1&&temp_same>=0.5)
					{
						temp_obj=new hotel(temp_id,temp_name,temp_rating,temp_add,temp_diff,temp_same,data.results[i].types,temp_image);
						buffer_array.push(temp_obj);
					}
				}
			}
			//setTimeout(load_reccomendation3,2000);
			setTimeout(arrange(),1000);
		},
		error:function(response){
      		console.log('Hello');
      		localStorage.backtrack='restaurant_detail.html';
      //alert(localStorage.backtrack);
      window.location='cors_enable.html';

    		}
	});
}*/
/*function load_reccomendation3(){
	$.ajax({
		url: 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?pagetoken='+token_2+'&key='+key,
		method:'GET',
		datatype:'json',
		success:function(data){
			var i;
			var temp_name,temp_rating,temp_add,temp_id,temp_diff,temp_same,temp_image;
			for(i=0;i<data.results.length;++i)
			{
				temp_id=data.results[i].place_id;
				temp_name=data.results[i].name;
				temp_rating=data.results[i].rating;
				temp_add=data.results[i].vicinity;
				temp_same=calc_same(data.results[i].types);
				temp_diff=Math.abs(temp_rating-rating);
				if(data.results[i].photos!=undefined)
					temp_image=data.results[i].photos[0].photo_reference;
				if(temp_id!=id){
					if(temp_diff<1&&temp_same>=0.5)
					{
						//console.log(temp_image);
						temp_obj=new hotel(temp_id,temp_name,temp_rating,temp_add,temp_diff,temp_same,data.results[i].types,temp_image);
						buffer_array.push(temp_obj);
					}
				}
			}
			setTimeout(arrange(),1000);
		},
		error:function(response){
      		console.log('Hello');
      		localStorage.backtrack='restaurant_detail.html';
      //alert(localStorage.backtrack);
      window.location='cors_enable.html';

    		}
	});
}*/
function arrange(){
	buffer_array.sort(function(a,b){
				if( Math.abs((parseFloat(b.obj_same)-parseFloat(a.obj_same))) <= .1)
					return parseFloat(b.obj_rating)-parseFloat(a.obj_rating);
				else
					return parseFloat(b.obj_same)-parseFloat(a.obj_same);
			});
	//console.log(buffer_array);
	preparehtml();
}

function execute(to_add){
	//$("button").click(function(){
		if(flag){
			//console.log('Success');
			//alert(this.id);
			flag=false;
			//var to_add=this.id;
			localStorage.request_id=to_add;
                    window.location='restaurant_detail.html';
		}
//});
}
