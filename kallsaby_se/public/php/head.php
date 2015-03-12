<?php 	
switch($data['color_theme']){
	case 'red':
		echo '<link rel="stylesheet" type="text/css" href="/css/red.css" media="screen">
		';
		break;
	case 'green':
		echo '<link rel="stylesheet" type="text/css" href="/css/green.css" media="screen">
		';
		break;
	case 'blue':
		echo '<link rel="stylesheet" type="text/css" href="/css/blue.css" media="screen">
		';
		break;
	case $this->getColorTheme():
		echo '<link rel="stylesheet" type="text/css" href="/css/grey.css" media="screen">
		';
		break;
}