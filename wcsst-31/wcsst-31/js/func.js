
$(function() {
	
	$('a[rel=facebox]').fancybox();
	
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
});

