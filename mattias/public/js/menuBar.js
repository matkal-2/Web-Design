function dropDown(target){	
	document.getElementById(target).style.Transition = "max-height 0.8s";
	document.getElementById(target).style.WebkitTransition = "max-height 0.8s";
	document.getElementById(target).style.MozTransition = "max-height 0.8s";
	document.getElementById(target).style.OTransition = "max-height 0.8s";
	document.getElementById(target).style.msTransition = "max-height 0.8s";
	document.getElementById(target).style.maxHeight = "400px";

}

function riseUp(target){
	document.getElementById(target).style.Transition = "max-height 0.2s";
	document.getElementById(target).style.WebkitTransition = "max-height 0.2s";
	document.getElementById(target).style.MozTransition = "max-height 0.2s";
	document.getElementById(target).style.OTransition = "max-height 0.2s";
	document.getElementById(target).style.msTransition = "max-height 0.2s";
	document.getElementById(target).style.maxHeight = "0px";
}