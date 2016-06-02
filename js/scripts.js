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


		var form = $('#index-contact');
	    // Get the messages div.
	    var formMessages = $('#form-messages');
	    $(form).submit(function(event) {
		    // Stop the browser from submitting the form.
		    event.preventDefault();
		    // Serialize the form data.
			var formData = $(form).serialize();
			// Submit the form using AJAX.
			console.log('URL:', $(form).attr('action'));
		    $.ajax({
			    type: 'POST',
			    url: $(form).attr('action'),
			    data: formData,
			    success: function(response){
			    	// Make sure that the formMessages div has the 'success' class
				    $(formMessages).removeClass('error');
				    $(formMessages).addClass('success');

				    // Set the message text.
				    $(formMessages).text(response);

				    // Clear the form.
				    $('#indexContactName').val('');
				    $('#indexContactEmail').val('');
				    $('#indexContactCompany').val('');
				    $('#indexContactPosition').val('');
				    $('#indexContactIndustry').val('');
				    $('#indexContactPhone').val('');
				    $('#indexContactWeChat').val('');
				    $('#indexContactMessage').val('');
				    console.log('SUCCESS', response);
			    },
			    error: function(data){
			    	// Make sure that the formMessages div has the 'error' class.
				    $(formMessages).removeClass('success');
				    $(formMessages).addClass('error');

				    // Set the message text.
				    if (data.responseText !== '') {
				        $(formMessages).text(data.responseText);
				    } else {
				        $(formMessages).text('Oops! An error occured and your message could not be sent.');
				    }
			    }
			});
		});

	});
})(jQuery, this);
