function mycarousel_initCallback(carousel) {

	$('.next').bind('click', function() {
        carousel.next();
        return false;
    });

    $('.prev').bind('click', function() {
        carousel.prev();
        return false;
    });
    
};


$(function(){
	
	$('.slider').jcarousel({
		auto: 3,
		wrap: "both",
		scroll: 1,
		visible: 1,
		initCallback: mycarousel_initCallback,
        buttonNextHTML: null,
        buttonPrevHTML: null
	});
	
	$('.blink').focus(function () {
		if ($(this).val() == $(this).attr('title')) {
			$(this).css('color', '#000').val('');
		}
	});
	
	$('.blink').blur(function () {
		if ($(this).val() == '') {
			$(this).css('color', '#c0c0c0').val($(this).attr('title'));
		}
	});
	
	$('#navigation ul li a').css('text-shadow', '#fff 1px 1px 1px');
	
});