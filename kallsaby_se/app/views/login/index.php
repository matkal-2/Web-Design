<?php
include("php/head.php");

readfile("html/menu_bar.html");
include("php/menu_bar.php");

echo '<div class="body-background">';



echo '
	<div class="body-content">
		<div class="body-center-container">
			<div class="holder-bar">
				<form action="" method="POST">
					<fieldset class="form-fieldset">
						<legend>Login</legend>
						<div class="form-field">
							<input type="name" name="login_username" id="login_username" placeholder="Username">
						</div>
						<br>
						<div class="form-field">
							<input type="password" name="login_password" id="login_password" placeholder="Password" >
						</div>
						<br><br>
						<input type="submit" value="Login" class="form-button">
						<br>
						<p>Not a user? <a href="/kallsaby_se/public/login/register">Register here!</a><p>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	';

echo '</div>';
readfile("html/foot_bar.html");
readfile("html/body.html");
readfile("html/foot.html");