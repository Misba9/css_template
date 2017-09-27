function foto (welke) {
	if (document.getElementById) {
		document.getElementById('thumbimg').src = welke.href;
		return false;
	}
}

function toonverberg( targetId ){
  if (document.getElementById){
  		target = document.getElementById( targetId );
  			if ((target.style.display == "none")||(target.style.display == "")){
  				target.style.display = "inline";
  			} else {
  				target.style.display = "none";
  			}
  	}
}