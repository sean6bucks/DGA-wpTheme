(function ($, root, undefined) {
	$(function () {
		
		'use strict';
		
		// Handle scroll to nav bar or first seciton
		$('.header-jumbotron').on('click', function(event){
			$('html, body').animate({
	          scrollTop: $('.nav').offset().top
	        }, 700, 'swing');
		});

	});
})(jQuery, this);
