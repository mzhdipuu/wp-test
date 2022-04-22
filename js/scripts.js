(function ($, window, document, undefined) {
    'use strict';

/*
FOR ANIMATED BANNER TEXT
 */
	$(".js_rotating").Morphext({
		animation: "fadeIn",
		separator: ",",
		speed: 3500,
		complete: function () {
		}
	});


/*
FOR SPONSER SECTION
 */
	var owl1 = $("#owl1");
	owl1.owlCarousel({
		items:5,
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:false
	});


/*
service
 */
	$('.statistic-counter, .count-number').counterUp({
		delay: 10,
		time: 2000
	});




	/****
	 =============================================
	 for Scroll Up
	 =============================================
	 *****/

	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
	});

	$('.scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 1000);
		return false;
	});





	/* This wow need for nav
	 -------------------------------*/
	new WOW({ mobile: false }).init();

})(jQuery, window, document);




