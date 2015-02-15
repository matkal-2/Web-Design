<?php
include("php/head.php");

readfile("html/menu_bar.html");
include("php/menu_bar.php");

echo '<div class="body-background">';


echo '
	<form action="" method="POST">
		Username:<br>
		<input type="text" name="register_username" id="register_username" value="">
		<br>
		Email Address:<br>
		<input type="text" name="register_email" id="register_username" value="">
		<br>
		Password:<br>
		<input type="text" name="register_password" id="register_password" value="">
		<br><br>
		<input type="submit" value="Submit">
	</form>
	';
	if(!$data['registerd']){
		echo '
		<p class="warning_text">Could not register that user</p>
		';
	}


echo '</div>';

readfile("html/foot_bar.html");
readfile("html/body.html");
	
readfile("html/foot.html");