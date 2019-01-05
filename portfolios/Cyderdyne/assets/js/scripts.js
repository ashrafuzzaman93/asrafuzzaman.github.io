$( document ).ready(function() {
    $('.clients-logo-slider').owlCarousel({
    	items: 6,
	    loop:true,
	    nav:true,
	    dots: false,
	    mouseDrag: true,
	    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
	    // dotsEach: true,
	    responsive:{
	        0:{
	            items:3
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:6
	        }
	    }
	})


	

	
});