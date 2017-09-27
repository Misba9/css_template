$(document).ready(function(){
	
	$(".slider-holder ul").jcarousel({
		
		scroll:1,
        wrap:"both",
        auto:4,
        start:1
		
	});
	
	$('.form-holder .field').focus(function(){
		if($(this).val()=="Enter your E-Mail Address")
			$(this).val("");	
	});
	
	$('.form-holder .field').blur(function(){
		if($(this).val()=="")
			$(this).val("Enter your E-Mail Address");			
	});
	
});