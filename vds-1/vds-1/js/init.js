			$(document).ready(function() {		
		$(".latestnews").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 2,
		auto:3000,
		speed:1000,
		btnNext: ".next",
    	btnPrev: ".prev"
		});
});

$(function(){
	$('.moj-menu li a')
		.css( {backgroundPosition: "0 0"} )
		.mouseover(function(){
			$(this).stop().animate({backgroundPosition:"(0 -68px)"}, {duration:300})
		})
		.mouseout(function(){
			$(this).stop().animate({backgroundPosition:"(0 0)"}, {duration:300})
		});

});

