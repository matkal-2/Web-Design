<?php
include("php/head.php");
readfile("html/menu_bar.html");
include("php/menu_bar.php");
$user_info = $data['user_info'];
$email = $user_info['email'];
$color_theme = $user_info['user_color_theme'];
$updated = $data['updated'];
if($updated['updated']){
	$updated_password= $updated['password'];
	$updated_email= $updated['email'];
	$updated_color_theme = $updated['color_theme'];
}

echo '
	<div class="body-background">
		<div class="body-content">
			<div class="body-center-container">
				<div class="title-bar">
					Settings
				</div>
				<div class="holder-bar">
					<form method="POST" id="settings">
						<fieldset class="form-fieldset">
							<legend>
								Account Settings
							</legend>
							Change Color Theme:
							<div class="form-select">				
								<select id="color_theme" name="color_theme" type="text">
								';  
								switch ($color_theme) {
									case 'red':
										echo '
										<option value="red" selected>Red</option>
				 						<option value="green">Green</option>
				  						<option value="blue">Blue</option>
				 						<option value="grey">Grey</option>';
										break;
									case 'green':
										echo '
										<option value="red">Red</option>
				 						<option value="green" selected>Green</option>
				  						<option value="blue">Blue</option>
				 						<option value="grey">Grey</option>';
										break;
									case 'blue':
										echo '
										<option value="red">Red</option>
				 						<option value="green">Green</option>
				  						<option value="blue" selected>Blue</option>
				 						<option value="grey">Grey</option>';
										break;
									case $this->getColorTheme():
										echo '
										<option value="red" selected>Red</option>
				 						<option value="green">Green</option>
				  						<option value="blue">Blue</option>
				 						<option value="grey" selected>Grey</option>';
										break;
									default:
										echo '
										<option value="red" selected>Red</option>
				 						<option value="green">Green</option>
				  						<option value="blue">Blue</option>
				 						<option value="grey" selected>Grey</option>';
										break;
								}
				 				echo'
								</select>
							</div>

							<br>
							Change Email:
							<div class="form-field">
								<input type="name" name="change_email" id="change_email" placeholder="New Email">
							</div>
							

							<br>

							Change Password:

							<div class="form-field">
								<input type="name" name="check_password" id="check_password" placeholder="Old Password">
							</div>

							<br>

							<div class="form-field">
								<input type="name" name="new_password" id="new_password" placeholder="New Password">
							</div>

							<br>

							<div class="form-field">
								<input type="password" name="repeat_password" id="repeat_password" placeholder="Repeat Password" >
							</div>
							';
							if($updated['updated']){
								switch ($updated_password) {
									case 'none':
										break;
									case 'failed':
										echo '<p style="color:red;">Setting Password failed!</p>';
										break;
									case 'updated':
										echo '<p>New Password set!</p>';
										break;							
									default:
										echo $updated_password;
										break;
								}
							}
							echo '

							<br><br>

							<input type="submit" name="account_setting" value="Accept" class="form-button">
							<br>
						</fieldset>
					</form>
				</div>				
			</div>
		</div>
	</div>';


readfile("html/foot_bar.html");
readfile("html/body.html");
readfile("html/foot.html");
