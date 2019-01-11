$(function () {
	'use strict'

  /* Offcanvas Mobile Menu */
	$('[data-toggle="offcanvas"]').on('click', function () {
	$('.offcanvas-collapse').toggleClass('open')
	})


  $('body').on('mouseenter mouseleave','.dropdown-hover',function(e){
     let dropdown=$(e.target).closest('.dropdown-hover');
      dropdown.addClass('show');
      
    setTimeout(function(){
          dropdown[dropdown.is(':hover')?'addClass':'removeClass']('show');
      },300);
  });

  $('.ss-product-slide-area').owlCarousel({
      items:1,
      loop:true,
      margin:0,
      nav:false,
      dots: false,
      autoplay: true
  })
  $('.ss-brand-logo-slider').owlCarousel({
      items: 6,
      loop: true,
      margin: 60,
      nav: false,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:6
          }
      }
  })

})
