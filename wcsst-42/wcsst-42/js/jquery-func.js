function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });
 
    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });
 
    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};
 
jQuery(document).ready(function() {
    jQuery('.slider-carousel').jcarousel({
    	scroll: 1,
        auto: 2,
        wrap: 'both',
        start:1,
        initCallback: mycarousel_initCallback
    });
});


$(function(){
    $('.blink').
        focus(function() {
            if(this.title==this.value) {
                this.value = '';
            }
        }).
        blur(function(){
            if(this.value=='') {
                this.value = this.title;
            }
        });
})

