jQuery(document).ready(function() {
	jQuery('ul li:last-child').addClass('lastItem');
	jQuery('ul li:first-child').addClass('firstItem');

	// Tips
	jQuery('*[rel=tooltip]').tooltip()
	jQuery('*[rel=popover]').popover()
	jQuery('.tip-bottom').tooltip({placement: "bottom"})

	// Modal Window
	jQuery('[href="#modal"]').click(function(e){
		jQuery('#modal').modal('toggle');
		e.preventDefault();
	});

	jQuery('#modal button.modalClose').click(function(e){
		jQuery('#modal').modal('hide');
		e.preventDefault();
	})

	// Initialize the gallery touch
	jQuery('a.touchGalleryLink').touchTouch();

	//Dropdown icons
	jQuery('.dropdown-toggle').dropdown()

	// hide #back-top first
	jQuery("#back-top").hide();
	
	// fade in #back-top
	jQuery(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('#back-top').fadeIn();
			} else {
				jQuery('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		jQuery('#back-top a').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
	});

	/*Pagination Active Button*/
	jQuery('div.pagination ul li:not([class])').addClass('num');

	jQuery(function(){
	// IPad/IPhone
	  var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
	    ua = navigator.userAgent,
	 
	    gestureStart = function () {
	        viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
	    },
	 
	    scaleFix = function () {
	      if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
	        viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
	        document.addEventListener("gesturestart", gestureStart, false);
	      }
	    };
	scaleFix();
	});
	
});