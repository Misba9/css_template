/* 
 Date:02-09-2015
 Author:Vijayan PP
 */


$(window).load(function()
{
$("div.preloader").delay(299).fadeOut("slow");
}       
);

(function($) {
  
    var App = {
 
    /**
    * Init Function
    */
    init: function() {
        
        App.Carousel();
        App.Scroll();
        
    },
    Carousel: function() {
        $('#owl-gallery').owlCarousel({
            items : 5,
            itemsDesktop : [1199,5],
            itemsDesktopSmall : [980,5],
            itemsTablet: [768,5],
            itemsTabletSmall: [550,2],
            itemsMobile : [480,2],
        });
    },
    Scroll:function()
    {
        window.scrollReveal = new scrollReveal();
    }
    }
    
    $(function() {
     App.init();
    });    
    })(jQuery);

