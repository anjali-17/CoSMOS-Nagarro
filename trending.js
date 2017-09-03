movie_id_array = new Array();
movie_poster_array = new Array();
movie_rating_array = new Array();
movie_title_array = new Array();

restaurant_id_array = new Array();
restaurant_image_array = new Array();
restaurant_rating_array = new Array();
restaurant_name_array = new Array();

event_id_array = new Array();
event_image_array = new Array();
event_date_array = new Array();
event_name_array = new Array();

array_order_movie = new Array();
array_order_restaurant = new Array();
array_order_event = new Array();

array_seq_order = new Array();

var str = '';
var count_movie = 0,count_restro= 0,count_event = 0;

var flag=true;
function load_movie() {
    movie_id_array = [359784, 419546, 377263, 352186, 329865, 284052, 95610, 302401, 388333, 392794, 340666, 302946, 256569, 324786,403450];
    movie_poster_array = ['/1Jgp09U2JXQ9CnCJxG1QQkRdjdI.jpg', '/qWSh708Vep7dp8dnpH6dydSmAca.jpg', '/aG49QUc1ylhQOBV1JBvyQ7Q5vmD.jpg', '/eZKWkJ9JVMHOuuqjQevP8DScQi5.jpg', '/xGgg2UI20qtEh7mura3RRwP8d3I.jpg', '/xfWac8MTYDxujaxgPVcRD9yZaul.jpg', '/j8di6S3mUuFe5Yz8etRG8yG5EeE.jpg', '/mWOotrG1MMKP9iCy2uPepbu27jk.jpg', '/311gCwnNJgyoNEPWR9GJ2JBGJAm.jpg', '/lxqPGO21hj8SmZ5eutRFDjG6uxo.jpg', '/9Moizj8qxcZK6DqEE1MTO3pQAEw.jpg', '/l9BWPqUV57X5ELBDLlbO7Vhh3Mr.jpg', '/4lGKBscylAN093abvEo751rDIyF.jpg', '/bndiUFfJxNd2fYx8XO610L9a07m.jpg','/hXnLCFP3411ynZ9bhPZSbXix9xq.jpg'];
    movie_rating_array = [8, 8, 7.51, 7.5, 7.12, 6.89, 6.49, 6.48, 6.4, 6.36, 6.14, 6.08, 6, 6.2, 8, ];
    movie_title_array = ["Maudie", "HyperNormalisation", "Frantz", "Good Kids", "Arrival", "Doctor Strange", "Bridget Jones's Baby", "Snowden", "M.S. Dhoni: The Untold Story", "La Danseuse", "Nocturnal Animals", "The Accountant", "Trespass Against Us", "Hacksaw Ridge","In guerra per amore"];
}

function load_restaurant() {
    restaurant_id_array = ["ChIJ0Q8POI22bTkR0VmOgbwYMEo", "ChIJj399CfmzbTkRASyYwGBtvtU", "ChIJs77cTv-zbTkRxBF-MlzK9GM", "ChIJvx8uaJy3bTkRjeNuvRMqPp4", "ChIJM2amkeW1bTkRia3J5eg9QO8", "ChIJ4crmaPmvbTkRhmyKaAy3yBs", "ChIJw3lKkn2zbTkRlaN929rh2Bg", "ChIJbYx597KxbTkRBdgyccz9vXM", "ChIJ6-dvmWe0bTkRSRZFkgBacog", "ChIJvzNf2NG1bTkRDJPqaLZczr4", "ChIJ48leTnK0bTkR1jT92zRYZFY", "ChIJtxPm37qzbTkR5_6TWigT8PE", "ChIJd9YlF-azbTkRL5TBZfM9fSk", "ChIJl3lzu9bgazkRbA9QXS8MEtQ", "ChIJH3cF7f6zbTkRTXGNYF3e5jg"];
    restaurant_image_array = ["CoQBcwAAAPLrOcc9sXPgKNupe3kZwxUOlHyf0ISMuSY3RzDo8gfkxdLCwvVPHKQ0poiK-AtsjHLnusbqFTyEZ8-NaaCGB1LuPehXEwHv_Ofqw2J5m-eceMtKy2zDi7rtSHiNCBIhw9Zv77RgCguiSfQBKTeU-QJosQs1XWVIkTVgqFwQ8YhEEhDemBtLPcyl3ylFYfPxdTz6GhTxRxbYtCknK74dw25QxkmXrcQWsg", "CoQBdwAAAGvQypi0aJQi5uzezRmiw6LwyXfojlO5piQxZD7Tuo2oOKZCT__DvCt441-2L7GYkoOO6RHCA8K3rUBAtp_bSTMnGyDwpDug73dri9Q_nEHv5zkI1ka1nnygUVjRnObbXM0VZzwWy1E5j_pVqxfgnbUXNYXvwtAhy07HNGkRiRCJEhBxkb7opvsOXGYNvchPzUJHGhQBvrI9xZG4ZWzMapXsJBCTz29-XA", "CoQBdwAAAPQsisiDNoCCnn7jE9y0hjdQiZh5wnu6dOaQhp21oVUelR1pkmtNEEBkyLDrxVnF8CHxStkseSGha6qSsN-Aa-R2uv3fLIFBdpqhOworYOn95DDo5360XxL3S9hpFY58hkD579rS8iZFK84jJ2SRQ54m0_8oSLwG85x3kBN31QdfEhC8P6g6cU9tsV9xmP3ByumnGhQgOSQSYOIbt6GKRzK3twp_Nd_Fng", "CoQBdwAAAE5KZXqCfBd5A0AKTEp4xdTPzYQ1wHL1vxD9pDswZ1iHJEStkN0VcSZTRm5jvFuuvnTmxz-whesinLLl5uka9g3uDyp6M-Gp7qnR3-YFQPdh3UuNE8QAIuDOEYYJCIwDoGDdzKY3EQe2nRjRPVcMpeEF8LU9322fwFiUJ0qgMNCHEhAFS3-VvZfzjG10Tc3i1GYKGhRtAtExvjIkvndDoDdXc8YnrD_kzQ", "CoQBdwAAAG7Hgas1DqTxhT2xhIfKTehJMpRiUdtTUxMdDJUQ3mrLQ6s56JLOqWA0oeUoDoIpWnly8s0LyJAzN2-QxADlr6sH8GlvOzptpgm6mBIcojSnV9ux1n5TXDvWYirpiZC-KOV_LmWuwEky3s0Cgvl3bv14fDeOrYVSF-VosYAl-KrlEhDNzYiOuBXJfjsc1J2Qu54IGhRMKPEm47WrXxYp67L4duC8m7Bv1Q", "CoQBdwAAAAIfTVc1SJAYzmy-UjK9qfLHG1g2KSEqPwtrTSxqvIqbIMJiK-8gbFtO-6IQdQTEWLp3XG7GxdSkDYnTy4lnNcCPIhDjLBQPP0iU4sbrOEt9NHZ6k8j6LXLS06yi2tL_Ctvs8yTbrEZ4B2Ea7ZnKSS2E0vB5PMcjEZVJ3pD3DncQEhCOkPoySe-t4--FC-c_T2F4GhSs9_-XlvjVlx-fgtkmqYN69M7sEw", "CoQBdwAAAIRfnupVO0bfsz5NxfuXMCPcfi_-SIWnbQBhIBe9SSy0xWChVXxcqxc9um0uWgndp-oES2zvNokGaiVTFkOB8cGQhPHCtyXg5VvRUJyvup3g2nWzcNC9VFgaea8r08MO39RJHf4W2sQcT5ZEXS-OQSuRICpGlbH0BIOHBmMunrpuEhD6T_18gaEFCRXzBA3zsJx1GhQuX7Pvp6i2NdFG9Imt_RqdpZmcDg", "CoQBdwAAALr56GT6ZOUYvgu01yG3pbJm1UPyj8FEd92fre0CPCgkXUSu3fK2qG5LXxvWSasN216kzom3xXOEaGgSXW9Wtxlq4jyMqAdHs-HRTXqGLjtyRYK3RjBJK0oIr3p_dhYQvwfGeG9WoOBlXN1uSFTQ0gIEk61eTkSjkLjfhQ1C22B9EhAXBUNxXlaOjeA1ZkS4TvfPGhSFxRDcR-LtBEPzG3B4EpdpzER8Pg", "CoQBdwAAAHvfPpDkg6MVn5sCwFDj47H8bhNoq8IhCWUgUzHvdjuHRXLGSmlqw_4--2T5c8DfMe9e3gZJaIItQWRDRkXrYe25x7fN8OhdeBFCyROkd5tgK1h3AZ8zZsI9qGxjimAxfZsl1Q7PrmhYYVua7a87ILccKOjGlZfNGFYQaAU_Va0ZEhDFOKVf_gvLcHoMOmNA7E4NGhS0_Jq_3OTCOb_dkA7H_fDWBRPy5Q", "CoQBdwAAABfcE59O_zEfU36iiW2PaQsQA1c8qXQykWR89312qK1ADRK41kIrCOr2-1Vx6PkDmEiHLW3r3tPaWFGCEx3sIemgQ1_-wjc0qkuAMc6QQDWRNWnsBCVXGEcufRsmA44tvVdk-i3ZN1kqxB7vwaAGUbUX8KLqh1e-Y6nCu6_KNvx9EhAEOM7oWbxF-ch1P-Y3K7TnGhQWwBR-In3iY6IuoPrzrtW8rvatTA", "CoQBcwAAAJTecjLBQVpKMnA8Oa3hyGC0vXLWe8f3toJrLhIoMnRSjNqqjQksEYYPxGd27_oEgqUaiNNJIALLXbtGJE8wVTYwtRjDMK-6_rJfvtZD8ADb7-zyFR4MdB-pcisX7BbN7g--kSRMHGShPcqeSFGG4EGoKl63HGEbyzljkW-8sNXrEhDfABIroDU4BosWoYTq7uWHGhQg4prX6jKGmiA_7jjKcb18dDeOGg", "CoQBdwAAAAiDY09UCFaiL8DZDTPZz1KvVaqQh-VepTVhg6AkORqhSOHP2YwDgh4MJHhWKlg-_QYzyKbYdeksqXQ6xVAhccv6kI58qaGwQnC3GsPKA11uHhE6JJ7Cvsn0HCmxh4-WxzMn96gvt5qUHdZ7_4-jl0MB7mFUJ7Dalo2gmL8_IR_zEhA9BJ4UvV_DS6F-ZgTbf8rEGhT4qeOn9Q5PJ7CHvGse0FigMLCh0A", "CoQBdwAAADmUaYt0-SbQONNH7AqP5IHa-sv__GIsNbcMUx_juPtIFpNIEsD4fSrH2nDcsFaluZxIJ29pTm4lJN6iff44wtIaYOO6pmY57vOvumhucXpZw2F5NeGAL3CipnvTuTCorOiBR55MgYgZQ3UOmcFfSHPgVZEgbLyRSd-WPv6wrfo3EhBUPZ1vwTNGH699b7LaB3YyGhRCmQJ8mC-MG4prWD9EZJXPzcgg1Q", "CoQBdwAAAIlnGxbiMsvNnX-YCxXWt_KnLArBUZWqCbBdJEM8jVpsnvcPM8A4gNbMkusu_u8R3W16tOoNVv6-JkwxK1bDYZQ3bAU5Oogm8oYhIoTmc6Z0jpWIwi2kPVOvdr3FTIbPo74jfOdURobimoQk2e247jRvrjLp4c_tFNzNzaKOiB8zEhBns2N0nJaJvS29hsewZKL0GhQ4RMi3NG66zbw0op6qnWTv68rW7g", "CoQBdwAAADIooxqop3d1Ko9IQMRCYVyZCO3W9XylN5hG59-I6EAEfumcFJZd9tW3Y3rJd1d5ZI68UqvEg_4LfdkjvZBvJ6dZoCpWnPfTkNqXMGoq8C7AWE5PqdwfcwjhfCdmVbWURCiiIHtn-uN56Dm-bDsVXKuzsI63i-gb9ZZLUDSvbH4mEhBIrLv3CIdhbPVdhj2iaN7qGhT7pdUfLk8JqbrSaB6Go0yCn_W5Ng"];
    restaurant_rating_array = [4.8, 4.7, 4.7, 4.6, 4.4, 4.3, 4.3, 4.3, 4.2, 4.1, 3.9, 3.8, 3.8, 3.7, 3.7, ];
    restaurant_name_array = ["Ikaki Niwas", "Hotel Ramsingh Palace", "Hotel Kanchandeep", "The Oberoi Rajvilas", "Jaipur Marriott Hotel", "Le Méridien Jaipur", "Sarovar Portico Jaipur", "Trident Hotel Jaipur", "Hotel Shri Laxmi Palace", "Four Points", "Hotel ibis Jaipur", "VUE,The Rooftop Terrace At Paradise", "Hotel Sarang Palace", "Kanchan Kesari Village Resort", "Golden Hotel"];
}

function load_event() {
    event_id_array = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"];
    event_image_array = ["event_img/0.jpg","event_img/1.jpg","event_img/2.jpg","event_img/3.jpg","event_img/4.jpg","event_img/5.jpg","event_img/6.jpg","event_img/7.jpg","event_img/8.jpg","event_img/9.jpg","event_img/10.jpg","event_img/11.jpg","event_img/12.png","event_img/13.jpg","event_img/14.jpg","event_img/15.jpg","event_img/16.jpg","event_img/17.jpg","event_img/18.jpg","event_img/19.jpg","event_img/20.jpg","event_img/21.jpg","event_img/22.jpg","event_img/23.jpg","event_img/24.jpg","event_img/25.jpg","event_img/26.jpg","event_img/27.jpg","event_img/28.jpg","event_img/29.jpg","event_img/30.jpg","event_img/31.jpg"];
    event_date_array = ["07-01-2017", "02-02-2017", "13-12-2017", "25-01-2017", "13-11-2017", "13-11-2017", "13-11-2017", "13-12-2017", "05-01-2017", "17-12-2017", "21-11-2017", "27-12-2017", "11-12-2017", "22-12-2017", "19-12-2017", "02-12-2017", "05-12-2017", "30-11-2017", "27-11-2017", "27-11-2017", "26-11-2017", "20-11-2017", "19-12-2017", "19-11-2017", "24-11-2017", "18-12-2017", "17-11-2017", "29-11-2017", "31-12-2017", "28-12-2017", "25-12-2017", "24-12-2017"];
    event_name_array = ["ITM Jaipur - India Travel Mart", "India Stonemart 2017", "Saat Phere - The Wedding Fair", "Balrangam", "Bloomfair India - Way to Bollywood Grand Finale 2017", "Stand Up Comedy This Sunday", "Design Connect-Jaipur", "Session 8 - Poems & Handicrafts", "Jaipur Startups Meetup Episode 4", "Vh1 Supersonic Club Nights feat. Nikhil Chinapa", "The Blackout Night", "Call of Bids", "Spark- Entrepreneurship for Young Minds", "4th National Pickleball", "Anugoonj-7, 2017 7th Annual National Exhibition of Paintings", "Indian Youth Parliament", "Havelis and Fresco", "Roots Live Band - Star Clinch", "Maskhare Night with Karan Talwar", "Pink City Ultra Run", "Unlimited Praise 2017", "Composition in Digital Photography", "IdeaThon - The Marathon Of Ideas", "Dunes Music Festival", "Natural Dyeing & Eco Printing Workshop", "THAAR - The Aravali Adrenaline Rush 2017", "Donate Blood Save Life", "Freakin Four Entries", "Pink City New Year Eve 2017", "WAF Model United Nations '16", "Mansarovar Mini Marathon", "Saugat The Fashion Show"];
}

function first_ajax() {
    //alert("Hello");
    $.ajax({
        url: 'https://api.random.org/json-rpc/1/invoke',
        data: JSON.stringify({
            "jsonrpc": "2.0",
            "method": "generateIntegers",
            "params": {
                "apiKey": "099e3faf-c139-4998-9595-8f7ef763dc8c",
                "n": 5,
                "min": 0,
                "max": 14,
                "replacement": false,
                "base": 10
            },
            "id": 16812
        }),
        type: "POST",
        dataType: "json",
        success: function(ping) {
            var results = ping.result.random.data;
            //console.log(results);
            array_order_movie.push(results[0]);
            array_order_movie.push(results[1]);
            array_order_movie.push(results[2]);
            array_order_movie.push(results[3]);
            array_order_movie.push(results[4]);
            console.log(array_order_movie);
            var i;
            var is_in = false;
            for (i = 0; i < 5; ++i) {
                if (array_order_movie[i] == 5) {
                    is_in = true;
                    break;
                }
            }
            if (!is_in) {
                array_order_movie.pop();
                array_order_movie.push(5);
            }
console.log(array_order_movie);

            // console.log(array_order_movie);
            // console.log(is_in);
            second_ajax();
        },
        error: function(response) {
            console.log('Hello');
        }
    });
}

function second_ajax() {
    //alert("Hello");
    $.ajax({
        url: 'https://api.random.org/json-rpc/1/invoke',
        data: JSON.stringify({
            "jsonrpc": "2.0",
            "method": "generateIntegers",
            "params": {
                "apiKey": "099e3faf-c139-4998-9595-8f7ef763dc8c",
                "n": 5,
                "min": 0,
                "max": 14,
                "replacement": false,
                "base": 10
            },
            "id": 16812
        }),
        type: "POST",
        dataType: "json",
        success: function(ping) {
            var results = ping.result.random.data;
            //console.log(results);
            array_order_restaurant.push(results[0]);
            array_order_restaurant.push(results[1]);
            array_order_restaurant.push(results[2]);
            array_order_restaurant.push(results[3]);
            array_order_restaurant.push(results[4]);

            // console.log(array_order_restaurant);
            third_ajax();
        },
        error: function(response) {
            console.log('Hello');
        }
    });
}

function third_ajax() {
    //alert("Hello");
    $.ajax({
        url: 'https://api.random.org/json-rpc/1/invoke',
        data: JSON.stringify({
            "jsonrpc": "2.0",
            "method": "generateIntegers",
            "params": {
                "apiKey": "099e3faf-c139-4998-9595-8f7ef763dc8c",
                "n": 5,
                "min": 0,
                "max": 31,
                "replacement": false,
                "base": 10
            },
            "id": 16812
        }),
        type: "POST",
        dataType: "json",
        success: function(ping) {
            var results = ping.result.random.data;
            //console.log(results);
            array_order_event.push(results[0]);
            array_order_event.push(results[1]);
            array_order_event.push(results[2]);
            array_order_event.push(results[3]);
            array_order_event.push(results[4]);

            // console.log(array_order_event);
            fourth_ajax();
        },
        error: function(response) {
            console.log('Hello');
        }
    });
}

function fourth_ajax() {
    //alert("Hello");
    $.ajax({
        url: 'https://api.random.org/json-rpc/1/invoke',
        data: JSON.stringify({
            "jsonrpc": "2.0",
            "method": "generateIntegers",
            "params": {
                "apiKey": "099e3faf-c139-4998-9595-8f7ef763dc8c",
                "n": 300,
                "min": 1,
                "max": 3,
                "replacement": true,
                "base": 10
            },
            "id": 16812
        }),
        type: "POST",
        dataType: "json",
        success: function(ping) {
            var results = ping.result.random.data;
            //console.log(results);
            var i, count1 = 0,
                count2 = 0,
                count3 = 0;
            for (i = 0; i < 500; ++i) {
                if (results[i] == 1) {
                    if (count1 < 5) {
                        array_seq_order.push(results[i]);
                        ++count1;
                    }
                }
                if (results[i] == 2) {
                    if (count2 < 5) {
                        array_seq_order.push(results[i]);
                        ++count2;
                    }
                }
                if (results[i] == 3) {
                    if (count3 < 5) {
                        array_seq_order.push(results[i]);
                        ++count3;
                    }
                }
                if (count1 == 5 && count2 == 5 && count3 == 5) {
                    break;
                }
            }
            // console.log(array_seq_order);
            // console.log(i);
            // console.log(count1);
            // console.log(count2);
            // console.log(count3);
            console.log("TIME");
            setTimeout(load_trending, 5000);
        },
        error: function(response) {
            console.log('Hello');
        }
    });
}

function load_trending() {
    load_movie();
    load_restaurant();
    load_event();
    //hide();
    prepare_trendinghtml();

}

function prepare_trendinghtml() {
    var i;
    for (i = 0; i < array_seq_order.length; ++i) {
        if (array_seq_order[i] == 1) {
            add_restrohtml();
        }
        if (array_seq_order[i] == 2) {
            add_moviehtml();
        }
        if (array_seq_order[i] == 3) {
            add_eventhtml();
        }
    }
    //hide();
    put_html();
}

function add_restrohtml() {
    var add = '';
    var key = 'AIzaSyBPb44HoduSdB35MHMGMRgYwaX6uEeuAio';
    var img = 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=250&maxheight=250&photoreference=' + restaurant_image_array[array_order_restaurant[count_restro]] + '&key=' + key;
    add = '<div class="col-lg-3 col-md-3 col-sm-4"><div class="single_team wow fadeInUp"><div class="team_img"><img src="';
    add = add + img;
    add = add + '" alt="img"><h5 class="" style="height:65px;">';
    add = add + restaurant_name_array[array_order_restaurant[count_restro]];
    add = add + '</h5><span>Restaurants</span>';
    add = add + '<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Ratings </h4></div><div class="panel-body">';
    add = add + restaurant_rating_array[array_order_restaurant[count_restro]] + '</div>';
    var percent = (Number(restaurant_rating_array[array_order_restaurant[count_restro]]) / 5) * 100;
    var display = percent + '%';
    add = add + '<div class="panel-body">';
    add = add + '<span style="display: block; margin-left:77px;width: 80px; height: 16px; background: url(img/stars.png) 0 0;">';
    add = add + '<span style="display: block; width:';
    add = add + display;
    add = add + '; height: 16px;background: url(img/stars.png) 0 -16px;"></span></span>';
    add = add + '</div>';
    add = add + '<button id="';
    add = add + restaurant_id_array[array_order_restaurant[count_restro]];
    add = add + '" type="button" class="btn btn-primary btn-block" onclick="execute(this.id)">Details</button>';
    add = add + '</div></div></div></div>';

    ++count_restro;
    str += add;
}

function add_moviehtml() {
    var add = '',
        img;
    img = 'https://image.tmdb.org/t/p/w500/' + movie_poster_array[array_order_movie[count_movie]];
    add = '<div class="col-lg-3 col-md-3 col-sm-4"><div class="single_team wow fadeInUp"><div class="team_img"><img src="';
    add = add + img;
    add = add + '" width="250" height="250" alt="img"><h5 class="" style="height:65px;">';
    add = add + movie_title_array[array_order_movie[count_movie]];
    add = add + '</h5><span>Movies</span>';
    //add = add + '</div></div>';
    add = add + '<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Ratings </h4></div>';


    add = add + '<div class="panel-body">';
    add = add + movie_rating_array[array_order_movie[count_movie]] + '</div>';
    var percent = (Number(movie_rating_array[array_order_movie[count_movie]]) / 10) * 100;
    var display = percent + '%';
    add = add + '<div class="panel-body">';
    add = add + '<span style="display: block; margin-left:38px;width: 160px; height: 16px; background: url(img/stars10.png) 0 0;">';
    add = add + '<span style="display: block; width:';
    add = add + display;
    add = add + '; height: 16px;background: url(img/stars10.png) 0 -16px;"></span></span>';
    add = add + '</div>';

    add = add + '<button id="';
    add = add + movie_id_array[array_order_movie[count_movie]];
    add = add + '"type="button" class="btn btn-primary btn-block" onclick="execute_movie(this.id)">View</button>';
    add = add + '</div></div></div></div>';
    ++count_movie;
    str += add;
}

function add_eventhtml(){
  var add = '',
      img;
  img = event_image_array[array_order_restaurant[count_event]];
  add = '<div class="col-lg-3 col-md-3 col-sm-4"><div class="single_team wow fadeInUp"><div class="team_img"><img src="';
  add = add + img;
  add = add + '" width="250" height="250" alt="img"><h5 class="" style="height:65px;">';
  add = add + event_name_array[array_order_restaurant[count_event]];
  add = add + '</h5><span>Events</span>';
  //add = add + '</div></div>';
  add = add + '<div class="panel panel-default wow fadeInLeft"><div class="panel-heading"><h4 class="panel-title"> Date </h4></div>';


  add = add + '<div class="panel-body" style="margin-bottom:50px;">';
  add=add+event_date_array[array_order_restaurant[count_event]];

  add = add + '</div>';

  add = add + '<button id="';
  add = add + event_id_array[array_order_restaurant[count_event]];
  add = add + '" type="button" class="btn btn-primary btn-block" onclick="execute_event(this.id)">View</button>';
  add = add + '</div></div></div></div>';
  ++count_event;
  str += add;
}

function put_html(){
  //hide();
  $("#loading").empty();
  //console.log(str);
  $("#loading").append(str);

  $('#loading').slick({
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
  //hide();
  //console.log()
}

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

function execute_event(to_add){
    //$("button").click(function(){
    if(flag){
        //console.log('Success');
        //alert(this.id);
        flag=false;
        //var to_add=this.id;
        //alert(to_add);
        localStorage.request_event_id=to_add;
        window.location='event_detail.html';
    }
    //});
}


function test(){
    $.ajax('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=28.4595, 77.0266&radius=25000&type=restaurant&key=AIzaSyBPNmNUeZ6oAm0EWYt6jey70TzrZRrrDdo', {
    success: function(result) {
        console.log("Hello");
    },
    error: function() {
        localStorage.backtrack = 'home_page.php';
            //alert(localStorage.backtrack);
            window.location = 'cors_enable.html';
    }
});
}