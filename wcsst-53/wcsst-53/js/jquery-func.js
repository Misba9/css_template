function htmlLoaded() {
	
};
function mycarousel_initCallback(carousel) {
	    $('.slider-navigation a').bind('click', function() {
	        carousel.scroll($.jcarousel.intval($(this).text()));
	        return false;
	    });	        
};
	
function mycarousel_itemFirstInCallback(carousel, item, idx, state) {
	$('.slider-navigation a').removeClass('active');
	$('.slider-navigation a').eq(idx-1).addClass('active');
};


$(document).ready (function(){
	
	$(".slider-carousel").jcarousel({
		scroll:1,
		auto:4,
		wrap:"both",
		visible:1,
        itemFirstInCallback: mycarousel_itemFirstInCallback,
        initCallback: mycarousel_initCallback,
        start: 1,
        // This tells jCarousel NOT to autobuild prev/next buttons
        buttonNextHTML: null,
        buttonPrevHTML: null
		
	});
	
})