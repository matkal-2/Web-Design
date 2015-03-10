function slide(pos, target){
	var margin = pos * -100;
	var posi = margin+"%";
	document.getElementById(target).style.WebkitTransition = "margin 0.8s";
	document.getElementById(target).style.marginLeft = posi;

}