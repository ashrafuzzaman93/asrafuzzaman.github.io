(function ($) {
	"use strict";

    jQuery(document).ready(function($){

    	// Owl Carousel Scripts
    	$('.tw-homepage-slides').owlCarousel({
    		items: 1,
		    loop:true,
		    margin:0,
		    nav:true,
		    navText: ['&leftarrow;', '&rightarrow;'],
		    dots: false,
		    // responsive:{
		    //     0:{
		    //         items:1
		    //     },
		    //     600:{
		    //         items:3
		    //     },
		    //     1000:{
		    //         items:5
		    //     }
		    // }
		})

		// Team member Carousel
    	$('.tw-team-member').owlCarousel({
    		items: 3,
		    loop:true,
		    margin:30,
		    nav:false,
		})

		// Team testimonials Carousel
    	$('.tw-testimonials').owlCarousel({
    		items: 3,
		    loop:true,
		    margin:30,
		    nav:false,
		})
		// Team testimonials Carousel
    	$('.tw-client-logos').owlCarousel({
    		items: 5,
		    loop:true,
		    margin:60,
		    nav:false,
		    dots: false
		})

    	// Circle Progress bar
    	$('#web-progress-bar').circleProgress({
    		startAngle: 30,
		    value: .90,
		    size: 270,
		    // lineCap: 'square',
		    thickness: 3,
		    fill: '#0bbbc1'
		}).on('circle-animation-progress', function(event, progress) {
		    $(this).find('strong').html(Math.round(90 * progress) + '%');
		});

		$('#graphic-progress-bar').circleProgress({
    		startAngle: 100,
		    value: .95,
		    size: 270,
		    // lineCap: 'square',
		    thickness: 3,
		    fill: '#0bbbc1'
		}).on('circle-animation-progress', function(event, progress) {
		    $(this).find('strong').html(Math.round(95 * progress) + '%');
		});

		$('#digital-progress-bar').circleProgress({
    		startAngle: 30,
		    value: .84,
		    size: 270,
		    // lineCap: 'square',
		    thickness: 3,
		    fill: '#0bbbc1'
		}).on('circle-animation-progress', function(event, progress) {
		    $(this).find('strong').html(Math.round(84 * progress) + '%');
		});



    });

}(jQuery));	