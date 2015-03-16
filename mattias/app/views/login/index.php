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
						<legend>Login</legend>
						<div class="form-field">
							<input type="name" name="login_username" id="login_username" placeholder="Username">
						</div>
						<br>
						<div class="form-field">
							<input type="password" name="login_password" id="login_password" placeholder="Password" >
						</div>';
						if(isset($data['loggin_failed'])){
							if($data['loggin_failed'] == true){
								echo '
									<br>
									<p style="color:red;">Wrong username or password!</p>
									';
							}
						}
						echo '
						<br><br>
						<input type="submit" value="Login" class="form-button"><br>
						<p>Not a user? <a href="/login/register">Register here!</a><p>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	';

echo '</div>';
readfile("html/foot_bar.html");
readfile("html/body.html");
echo '<script src="/js/menuBar.js"></script>';
readfile("html/foot.html");