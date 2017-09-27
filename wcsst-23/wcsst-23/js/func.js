
$(document).ready(function() {
	$('.slider').jcarousel( {
		initCallback: slider_initCallback,
		scroll: 1,
		wrap : 'both',
		// This tells jCarousel NOT to autobuild prev/next buttons
		buttonNextHTML: null,
		buttonPrevHTML: null
	});
	
	var sliderNav = $('.slider-holder .nav');
	sliderNav.css({ left : (sliderNav.parent().width() - sliderNav.width()) / 2 })
});

function slider_initCallback (carousel) {
	$(".prev").click(function () {
		carousel.prev();
		return false;
	});
	
	$(".next").click(function () {
		carousel.next();
		return false;
	});
}