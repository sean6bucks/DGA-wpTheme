(function ($, root, undefined) {
	$(function () {
		
		window.onload = function(){
			if (window.location.hash) {
				$(document).scrollTop( $(document).scrollTop() - 75);
			}
		};

		'use strict';
		var isIndex = $('#index-header')[0] ? true : false
		// Set Jumbotron as full-height
		if(isIndex){
			var winHeight = $(window).height();
			// Keep Minimum height at 700px
			if(winHeight<700) winHeight = 700;
			$('.header-jumbotron').height(winHeight);

			// Fade out loader
			$('.load-shade').fadeOut(700, function(){
				$('.load-shade').remove();
			});
		};


		var offsetBottom = isIndex ? $('.header-jumbotron').height() - 80 : 250;
        // DETECT IF PAGE IS SCROLLED BELOW PAGE CATEGORIES
        // SHOW MIN. NAV BAR IF BELOW CATEGORIES
        $(window).scroll(function(){
            if( $(document).scrollTop() > offsetBottom ) {
                $('.fixed-nav').slideDown(300);
            } else {
                $('.fixed-nav').slideUp(100);
            }

        });

        $('.nav-item').hover(
		 	function() {
		    	$(this).find('.dropdown-content').stop(true).slideDown(200);
		  	}, function() {
		    	$(this).find('.dropdown-content').stop(true).slideUp(200);
		  	}
		);

		// Handle scroll to nav bar or first seciton
		$('.header-jumbotron').on('click', function(event){
			$('html, body').animate({
	          scrollTop: $('#company-information').offset().top - 56
	        }, 700, 'swing');
		});

	});
})(jQuery, this);
