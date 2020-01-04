/*Quick Start Pack
(function($){
	"use strict";
	
	jQuery(document).ready(function($){
	
	});
	
	jQuery(window).load(function(){
	
	});


}(jQuery));

*/

(function($){
	"use strict";
	
	jQuery(document).ready(function($){
		$(".homepage-slides").owlCarousel({
			items: 1,
			navigation: true,
			dots: false,
			autoplay: false,
			loop: true,
			navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			mouseDrag: false,
			touchDrag: false,
		});
		/*
		$(".owl-next").click(function(){
			$(".single-slide-item h2").addClass("animated fadeInLeft").css("opacity","1");
		});
		*/
		$(".homepage-slides").on("translate.owl.carousel",function(){
			$(".single-slide-item h2").removeClass("animated fadeInUp").css("opacity","0");
			$(".single-slide-item h2").removeClass("animated fadeInUp").css("opacity","0");
		});
		$(".homepage-slides").on("translated.owl.carousel",function(){
			$(".single-slide-item h2").addClass("animated fadeInUp").css("opacity","1");
		});
		
		new WOW().init();
		
	});
	
	
	
	jQuery(window).load(function(){
		$(".factorian-slide-preloader").fadeOut(2000);
	});


}(jQuery));

