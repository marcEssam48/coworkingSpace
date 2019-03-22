/*global $,alert, console*/
/*nav animation */
$('.navabout').click(function () {
    'use strict';
    $('html,body').animate({
        
        scrollTop: $('#about').offset().top
    }, 1000);
});
$('.navben').click(function () {
    'use strict';
    $('html,body').animate({
        scrollTop: $('#Benefits').offset().top
    }, 1000);
});
  // confirmation msg
$('.confirm').click(function () {
    'use strict';
    return confirm('Are you sure?');
});

// about slider
$(document).ready(function () {
    'use strict';
    $('#myCarousel').carousel({
        interval:   4000
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function () {
        clickEvent = true;
        $('.nav li').removeClass('active');
        $(this).parent().addClass('active');
    }).on('slid.bs.carousel', function (e) {
		if (!clickEvent) {
			var count = $('.nav').children().length - 1,
                current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});
//end about slider
    // nice scroll
    $("html").niceScroll({
        cursorwidth: 13,
        cursorborder: "none"
    });

    /* scroll */
    var s = $("#scroll");
    $(window).scroll(function(){
        $(this).scrollTop()>=500 ?s.show() : s.hide();
                                });
          s.click(function(){
     $("html,body").animate({scrollTop: 0}, 600);
     return 0;
        }); 
 
//section contact
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
//rooms
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
/*

$(document).ready(function(){
    $('#scroll').on('click', function(){
        $('html,body').animate({scrollTop: 0}, 800);
    });  
});  */