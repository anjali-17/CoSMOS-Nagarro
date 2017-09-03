var point_movie=new Array();
var point_restro=new Array();
var point_event=new Array();
var send,min;

//function data_points(obj_title,obj_type,obj_date,obj_seat,obj_location){
function data_points(obj_title,y,x,z,obj_location,obj_type){

	//this.obj_date=obj_date;
	this.obj_type=obj_type;
	//this.obj_seat=obj_seat;

	this.x=x;
	this.y=y;
	this.z=z;

	this.obj_location=obj_location;
	this.obj_title=obj_title;
}


function get_data(){
	var title,type,location,date,seat;
	    title=$( "span[id^='title']" );
	    type=$( "span[id^='type']" );
	    location=$( "span[id^='location']" );
	    date=$( "span[id^='date']" );
	    seat=$( "span[id^='seat']" );
	    location=$( "span[id^='location']" );
	    var len=title.length;
	    var temp,temp_string_date,temp_dd,temp_mm,temp_yyyy,i,temp_date,temp_title,temp_type,temp_location,temp_seat,check;
	    var all_date=[];
	    for(i=0;i<len;++i){

	    	temp_title=title[i].innerText;
	    	temp_location=location[i].innerText;
	    	temp_seat=seat[i].innerText;
	    	temp=type[i].innerText;
	    	if(temp=="restaurant"){
	    		temp_type=1;
			check=temp_type+Math.random();
	    	}
	    	else if(temp=="Event"){
	    		temp_type=2;
	    		check=temp_type+Math.random();
	    		
	    	}
	    	else{
	    		temp_type=3;
			check=temp_type+Math.random();
	    		
	    	}

	    	temp_string_date=date[i].innerText.split("-");
	    	//console.log(temp_string_date);
	    	temp_dd=temp_string_date[2];
	    	var x=temp_string_date[1];
	    	var y=parseInt(x);
	    	--y;
	    	temp_mm=""+y;
	    	temp_yyyy=temp_string_date[2];
	    	temp_yyyy=temp_string_date[0];
	    	temp_date=new Date(temp_yyyy,temp_mm,temp_dd);
	    	//all_date.push(temp_date);

	    	temp_obj=new data_points(temp_title,check,temp_date,temp_seat,temp_location,temp);
	    	if(temp_type==1){
	    		point_restro.push(temp_obj);
	    	}
	    	else if(temp_type==2){
	    		point_event.push(temp_obj);
	    	}
	    	else{
	    		point_movie.push(temp_obj);
	    	}
	    	
	    }
	    //console.log(points);

	    setTimeout(plot,2000);
}


function plot(){
        $("#loading").fadeOut("fast");
        $("#chartContainer").fadeIn("slow");
	var chart = new CanvasJS.Chart("chartContainer",
			{
				title: {
					text: "BOOKING TIMELINE",
					fontColor:"#e68a00"
					//fontFamily:"tahoma"
				},
				// axisX: {
				// 	title: "Timeline",
				// 	titleFontSize: 24,
				// 	titleFontWeight:"bold",
				// 	titleFontFamily: "tahoma"
				// 	//maximum: 85
				// },
				axisY: {
					// title: "Type",
					gridThickness: 0,
maximum: 6
				},

				legend: {
					verticalAlign: "top",
					horizontalAlign: "right"
				},
				data: [
				{
					type: "bubble",
					color: "orangered",
fillOpacity: .7, 
					legendText: "Movie Bookings",
					showInLegend: true,
					legendMarkerType: "circle",
					toolTipContent: "<strong>{obj_title}</strong> <br/>Type: {obj_type}<br/>Location: {obj_location}<br/>Date: {x}<br/> Seat: {z}<br/>",//" Population: {z} mn",
					dataPoints: point_movie
				},
				{
					type: "bubble",
					color: "darkturquoise",
fillOpacity: .7,
					legendText: "Restaurant Bookings",
					showInLegend: true,
					legendMarkerType: "circle",
					toolTipContent: "<strong>{obj_title}</strong> <br/>Type: {obj_type}<br/>Location: {obj_location}<br/>Date: {x}<br/> Seat: {z}<br/>",//" Population: {z} mn",
					dataPoints: point_restro
				},
				{
					type: "bubble",
					color: "forestgreen",
fillOpacity: .7,
					legendText: "Event Bookings",
					showInLegend: true,
					legendMarkerType: "circle",
					toolTipContent: "<strong>{obj_title}</strong> <br/>Type: {obj_type}<br/>Location: {obj_location}<br/>Date: {x}<br/> Seat: {z}<br/>",//" Population: {z} mn",
					dataPoints: point_event
				}

				]
			});
			//console.log(points);
			// setTimeout(function(){
   //      $("#loading").fadeOut("fast");
   //      //$("#chartContainer").fadeIn("slow");
   //     } ,3000);
			chart.render();
}