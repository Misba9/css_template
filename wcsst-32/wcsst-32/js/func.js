
$(document).ready(function() {
	$('.slider').jcarousel( {
		initCallback: slider_initCallback,
		scroll: 1,
		wrap : 'both',
		vertical: true,
		auto : 3,
		// This tells jCarousel NOT to autobuild prev/next buttons
		buttonNextHTML: null,
		buttonPrevHTML: null
	});
});

function slider_initCallback (carousel) {
	$(".prev").click(function () {
		carousel.prev();
		carousel.stopAuto();
		return false;
	});
	
	$(".next").click(function () {
		carousel.next();
		carousel.stopAuto();
		return false;
	});
}