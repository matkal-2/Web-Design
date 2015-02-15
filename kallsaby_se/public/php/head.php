<?php 
echo '<!DOCTYPE html>
<html>
	<head>
		<title>Webpage</title>';
		
switch($data['color_theme']){
	case 'red':
		echo '<link rel="stylesheet" href="/kallsaby_se/public/css/main.css">
		<link rel="stylesheet" href="/kallsaby_se/public/css/red.css">
		';
		break;
	case 'green':
		echo '<link rel="stylesheet" href="/kallsaby_se/public/css/main.css">
		<link rel="stylesheet" href="/kallsaby_se/public/css/green.css">
		';
		break;
	case 'blue':
		echo '<link rel="stylesheet" href="/kallsaby_se/public/css/main.css">
		<link rel="stylesheet" href="/kallsaby_se/public/css/blue.css">
		';
		break;
	case 'grey':
		echo '<link rel="stylesheet" href="/kallsaby_se/public/css/main.css">
		<link rel="stylesheet" href="/kallsaby_se/public/css/grey.css">
		';
		break;
}
echo '	</head>
	<body>';