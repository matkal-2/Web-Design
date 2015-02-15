<?php
include("php/head.php");

readfile("html/menu_bar.html");
include("php/menu_bar.php");

echo '<div class="body-background">';



echo '
	<form action="" method="POST">
		Username:<br>
		<input type="text" name="login_username" id="login_username" value="">
		<br>
		Password:<br>
		<input type="text" name="login_password" id="login_password" value="">
		<br><br>
		<input type="submit" value="Submit">
	</form>
	Not a user? <a href="/kallsaby_se/public/login/register">Register here!</a>
	';

echo '</div>';
readfile("html/foot_bar.html");
readfile("html/body.html");
readfile("html/foot.html");