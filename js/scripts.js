(function ($, root, undefined) {
	$(function () {
		'use strict';

		// SET SCROLL TOP MENU HEIGHT HIGHER IF URL IS TO A HASH
		window.onload = function(){
			if (window.location.hash) {
				$(document).scrollTop( $(document).scrollTop() - 75);
			}
		};

		// SET FULL WINDOW HEIGHT ON INDEX JUMBOTRON
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

		// SHOW AND HIDE FIXED HEADER ON PAGE SCROLL
		var offsetBottom = isIndex ? $('.header-jumbotron').height() - 80 : 250;
        $(window).scroll(function(){
            if( $(document).scrollTop() > offsetBottom ) {
                $('.fixed-nav').slideDown(300);
            } else {
                $('.fixed-nav').slideUp(100);
            }

        });

        // PREVENT MENU DROPDOWNS FROM QUEING
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

		// PROFILE BIO SCROLL OVER
		// -------------------------
		$('.bio-item').hover(
		 	function() {
		    	$(this).find('.bio-text').stop(true).fadeIn(100);
		  	}, function() {
		    	$(this).find('.bio-text').stop(true).fadeOut(100);
		  	}
		);

		// JUMBOTRON SLIDESHOW
		// -----------------------
		if ( document.getElementById('jumbotron-wrapper') ) {
	        $('.slide:first-child').addClass('active-slide');
	        $('.dot:first-child').addClass('active-dot');

	        var timeout;

	        var featuredSlideshow = function(){
	            clearTimeout(timeout);
	            var currentSlide = $('.active-slide');
	            var nextSlide = currentSlide.next();
	            var currentDot = $('.active-dot');
	            var nextDot = currentDot.next();
	            
	            if(nextSlide.length == 0){
	                nextSlide = $('.slide').first();
	            }

	            currentSlide.fadeOut(500).removeClass('active-slide');
	            nextSlide.fadeIn(500).addClass('active-slide');

	            if(nextDot.length == 0){
	                nextDot = $('.dot').first();
	            }
	            currentDot.removeClass('active-dot');
	            nextDot.addClass('active-dot');

	            timeout = setTimeout(function(){
	                featuredSlideshow();
	            }, 4000);
	           
	        };
	        
	        setTimeout(function(){featuredSlideshow();}, 4000);

	        $('.arrow-next').click(function(){
	            clearTimeout(timeout);
	            featuredSlideshow();    
	        });
	            
	        $('.arrow-prev').click(function(){
	            clearTimeout(timeout);

	            var currentSlide = $('.active-slide');
	            var prevSlide = currentSlide.prev();
	            var currentDot = $('.active-dot');
	            var prevDot = currentDot.prev();
	            
	            if(prevSlide.length == 0){
	                prevSlide = $('.slide').last();
	            }
	            currentSlide.fadeOut(500).removeClass('active-slide');
	            prevSlide.fadeIn(500).addClass('active-slide');
	            
	            if(prevDot.length == 0){
	                prevDot = $('.dot').last();
	            }
	            currentDot.removeClass('active-dot');
	            prevDot.addClass('active-dot');

	            timeout = setTimeout(function(){
	                featuredSlideshow();
	            }, 4000);
	        });
	    }

		// IMAGE GALLERY SLIDESHOW
	    // -----------------------
	    if ( document.getElementById('image-gallery') ){

	        $('.slide:first-child').addClass('active-slide');
	        $('.thumb:first-child').addClass('active-thumb');

	        $('.gallery-next').click(function(){
	            var currentSlide = $('.active-slide');
	            var nextSlide = currentSlide.next();
	            var currentThumb = $('.active-thumb');
	            var nextThumb = currentThumb.next();

	            if(nextSlide.length == 0){
	                nextSlide = $('.slide').first();
	            }
	            if(nextThumb.length == 0){
	                nextThumb = $('.thumb').first();
	            } 

	            currentSlide.removeClass('active-slide');
	            nextSlide.addClass('active-slide');

	            currentThumb.removeClass('active-thumb');
	            nextThumb.addClass('active-thumb');

	                 
	        });
	            
	        $('.gallery-prev').click(function(){

	            var currentSlide = $('.active-slide');
	            var prevSlide = currentSlide.prev();
	            var currentThumb = $('.active-thumb');
	            var prevThumb = currentThumb.prev();
	            
	            if(prevSlide.length == 0){
	                prevSlide = $('.slide').last();
	            }

	            if(prevThumb.length == 0){
	                prevThumb = $('.thumb').last();
	            }

	            currentSlide.removeClass('active-slide');
	            prevSlide.addClass('active-slide');

	            currentThumb.removeClass('active-thumb');
	            prevThumb.addClass('active-thumb');

	        });
	    }

		// BEHAVIOR FOR NEWSLETTER FORM
		$('#newsletter-form form').submit(function(event) {
			event.preventDefault();
			var $form = $('#newsletter-form form');

			if(!$('#mce-EMAIL').val()) return false;

			$('#mc-embedded-subscribe').html('<i class="fa fa-spinner fa-spin"></i>');

			$.ajax({
		        type: "GET",
		        url: $form.attr("action"),
		        data: $form.serialize(),
		        cache: false,
		        dataType: "jsonp",
		        jsonp: "c", // trigger MailChimp to return a JSONP response
		        contentType: "application/json; charset=utf-8",

		        error: function(error){
		            // According to jquery docs, this is never called for cross-domain JSONP requests
		        },

		        success: function(data){
		        	console.log(data);
		            if (data.result == "error") {
		                if (data.msg && data.msg.indexOf("already subscribed") >= 0) {
		                    $('#mc_embed_signup .section-subtext').text('Sorry, this email has already been subscribed.').css({color: 'red'});
		                } else {
		                	$('#mc_embed_signup .section-subtext').text('Sorry. Unable to subscribe. Please try again later.').css({color: 'red'});
		                }
		                $('#mce-EMAIL').val('');
		                $('#mc-embedded-subscribe').html('Submit');
		            } else {
		                $('#mc_embed_signup').hide();
		            	$('#signup_success').show();
		            }
		        }
		    });
			// var data = { 
			// 		apikey: '3b6f2b067d3f877adf79a50340f72ead-us2',
			// 		id: '34772ee081',
			// 		email: {
			// 			email: $('#newsletter-email').val()
			// 		}
			// 	};

			// $('#newsletter-submit').text('').html('<i class="fa fa-spinner fa-spin"></i>');

			// // $.ajax({
			// // 	type: 'POST',
			// // 	url: 'https://us2.api.mailchimp.com/2.0/lists/subscribe',
			// // 	data: data,
			// // 	success: function(response){
			// // 		console.log(response);
			// // 	},
			// // 	error: function(error){
			// // 		console.log(error);
			// // 	}
			// // });

			// List 34772ee081
			// API 3b6f2b067d3f877adf79a50340f72ead-us2
		});

	});
})(jQuery, this);
