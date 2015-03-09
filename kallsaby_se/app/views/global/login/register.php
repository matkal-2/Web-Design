<?php
readfile("html/head.html");
include("php/head.php");
echo '<link rel="stylesheet" href="/css/main.css">';
readfile("html/end_head.html");
readfile("html/menu_bar.html");
include("php/menu_bar.php");
echo '<div class="body-background">';


echo '
	<div class="body-content">
		<div class="body-center-container">
			<div class="holder-bar">
				<form action="" method="POST">
					<fieldset class="form-fieldset">
						<legend>Register</legend>
						<br>
						<div class="form-field">
							<input type="name" name="register_username" id="register_username" placeholder="Username">
						</div>
						<br>
						<div class="form-field">
							<input type="email" name="register_email" id="register_username" placeholder="Email">
						</div>
						<br>
						<div class="form-field">
							<input type="password" name="register_password" id="register_password" placeholder="Password">
						</div>
						<br><br>
						<input type="submit" value="Register" class="form-button">
						';
						if(!$data['registerd']){
							echo '<p class="warning_text">Could not register that user</p>';
						}echo '							
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