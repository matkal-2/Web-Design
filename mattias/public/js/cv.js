function menu(content){
	switch(content){
		case 0:
			d = "one";
			b = "two";
			c = "three";
			a = "four";
			break;
		case 1:
			a = "one";
			d = "two";
			c = "three";
			b = "four";
			break;
		case 2:
			a = "one";
			b = "two";
			d = "three";
			c = "four";
			break;
		case 3:
			a = "one";
			b = "two";
			c = "three";
			d = "four";
			break;
	}
	document.getElementById(d).style.display = "block";
	document.getElementById(a).style.display = "none";
	document.getElementById(b).style.display = "none";
	document.getElementById(c).style.display = "none";

}