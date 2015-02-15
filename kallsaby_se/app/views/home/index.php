<?php
include("php/head.php");

readfile("html/menu_bar.html");
include("php/menu_bar.php");

echo '<div class="body-background">';
echo '<div class="body-content">';

echo '<div class="title-bar">Title</div>';

echo '<div class="holder-bar">';
		
echo '
		
			<form action="" method="POST" id="form-main">
				<div class="form-select">
					<select id="color_theme" name="color_theme" type="text">
						<option value="red">Red</option>
	 					<option value="green">Green</option>
	  					<option value="blue">Blue</option>
	 					<option value="grey">Grey</option>
					</select>
				</div>
				<br>
				<div class="form-field">
					<input type="text" name="lastname" placeholder="Address">
				</div>

				<br>
				 <button type="submit" name="submit" class="form-button"><span>Change Colour</span></button>
			</form>
				
		';
echo '</div></div></div>';
readfile("html/foot_bar.html");
readfile("html/body.html");
readfile("html/foot.html");