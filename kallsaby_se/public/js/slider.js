function slide(pos, target){
	var margin = pos * -100;
	var posi = margin+"%";
	document.getElementById(target).style.transitionTimingFunction = "cubic-bezier(0,0,0,1)";
	document.getElementById(target).style.WebkitTransition = "margin 1s";
	document.getElementById(target).style.marginLeft = posi;

}