
$(function () {
	
	$('.blink')
		.focus(function(){
			if( $(this).val() == $(this).attr('title') ) {
				$(this).val('');
			}
		})
		.blur(function(){
			if( $(this).val() == '' ) {
				$(this).val( $(this).attr('title') );
			}
		});
	
	$('.slider').jcarousel( {
		initCallback: slider_initCallback,
		scroll: 1,
		wrap: 'both',
		auto: 5,
		// This tells jCarousel NOT to autobuild prev/next buttons
		buttonNextHTML: null,
		buttonPrevHTML: null
	});
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