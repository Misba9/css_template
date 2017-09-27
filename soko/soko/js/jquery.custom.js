$(document).ready(function(){
	
	$("a[data-rel^='prettyPhoto']").prettyPhoto();
	
	$("#gallery ul").hide();
	$("#gallery ul:first").fadeIn(750);
	$("#gallery ul:first").addClass("current_gallery");
	
	$("#gallery-nav a").click(function() {
	
		// Highlight corrent link in menu
		$("#gallery-nav a").removeClass("current");
		$(this).addClass("current");

		var gallery_id = $(this).attr('href');
		
		$(".current_gallery").hide();
		$(".current_gallery").removeClass("current_gallery");
		$("#" + gallery_id).fadeIn(750);
		$("#" + gallery_id).addClass("current_gallery");		
		
	});
		
});