Cufon.replace('h1 a', { fontFamily: 'CalibriBold'});
Cufon.replace('h2', { fontFamily: 'ChaparralPro'});

$(document).ready(function(){
	
    $('.field').
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
            
        
        $("#slider ul").jcarousel({
        	scroll:1,
        	//auto:5,
        	wrap: "both"
        });
});


function htmlLoaded()
{
	Cufon.now();
}