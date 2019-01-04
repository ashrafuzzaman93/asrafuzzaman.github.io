(function ($) {
	"use strict";

    jQuery(document).ready(function($){

    	// OWL BLOG CAROUSEL ACTIVE
    	$('.edu-blog-carousel').owlCarousel({
    		items: 3,
		    loop: true,
		    margin: 40,
		    nav: false,
		    mouseDrag: false,
		    autoplay: true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:3
		        }
		    }
		});

		// OWL TESTIMONIALS CAROUSEL ACTIVE
    	$('.edu-testimonials').owlCarousel({
    		items: 1,
		    loop: true,
		    margin: 0,
		    nav: false,
		    dots: false
		});

		// OWL CLIENTS LOGO CAROUSEL ACTIVE
    	$('.edu-clients-list').owlCarousel({
    		items: 4,
		    loop: true,
		    margin: 80,
		    nav: true,
		    navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
		    dots: false,
		    mouseDrag: false,
		    autoplay: true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:5
		        }
		    }
		});

    	// POPUP VIDEO BOX ACTIVE
		$(".js-video-button").modalVideo();

		// SMOOTH SCROLLING PLUGIN ACTIVE
		$("html").easeScroll();
    	
    });

}(jQuery));	