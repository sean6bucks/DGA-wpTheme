(function ($, root, undefined) {
	$(function () {
		'use strict';

		this.switchLanguage = function(lang) {

			var urlPath = lang=='cn' ?
				window.location.pathname.replace('/', '/cn/') :
				window.location.pathname.replace('/cn/', '/') ;
			window.location.href = urlPath;
		}

		var isIndex = $('#index-header')[0] || $('#index_cn-header')[0] ? true : false;

		if( $(window).width() > 768) {
			// SET SCROLL TOP MENU HEIGHT HIGHER IF URL IS TO A HASH
			window.onload = function(){
				if (window.location.hash) {
					$(document).scrollTop( $(document).scrollTop() - 75);
				}
			};


		} else {

			$('.menu-open .fa').click(function(){
				$('.mobile-menu').addClass('open');
			});
			$('.menu-close .fa').click(function(){
				$('.mobile-menu').removeClass('open');
			});
		}

		if( $(window).width() > 480) {

			// SHOW AND HIDE FIXED HEADER ON PAGE SCROLL
			var offsetBottom = isIndex ? $('.header-jumbotron').height() - 80 : 250;
	        $(window).scroll(function(){
	            if( $(document).scrollTop() > offsetBottom ) {
	                $('.fixed-nav').slideDown(300);
	            } else {
	                $('.fixed-nav').slideUp(100);
	            }

	        });

	        var pageBottom = $(document).height() - 140;
	        $(window).scroll(function(){

	            if( ( $(document).scrollTop() < pageBottom - 782 ) && ( $(document).scrollTop() > $('.header-jumbotron').height() - 80 ) ) {
	                $('.contact-btn').css({ 
	                	"bottom": "34px",
	                	"opacity": "1"
	                });
	            } else {
	                $('.contact-btn').css({ 
	                	"bottom": "0",
	                	"opacity": "0"
	                });
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
		          scrollTop: $('#company-services').offset().top - 56
		        }, 700, 'swing');
			});
		}

		$('#contactModal').on('shown.bs.modal', function () {
			$('#indexContactName').focus()
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

	    // SMOOTH SCROLLING FOR CASE STUDIES

	    $('a.study-item, .nav-item a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
					  scrollTop: target.offset().top - 50
					}, 1000);
					if($('.mobile-menu').hasClass('open')){
						$('.mobile-menu').removeClass('open');
					}
					return false;
				}
			}
		});

		// BEHAVIOR FOR NEWSLETTER FORM
		$('#mc_embed_signup form').submit(function(event) {
			event.preventDefault();
			var $form = $('#mc_embed_signup form');

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

		});

	});
})(jQuery, this);
