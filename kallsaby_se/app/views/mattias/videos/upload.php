<?php 

readfile("html/head.html");
include("php/head.php");
echo '<link rel="stylesheet" href="/css/main.css">';
echo '<link rel="stylesheet" href="/css/video.css">';
readfile("html/end_head.html");
readfile("html/menu_bar.html");
include("php/menu_bar.php");
echo '
	<div class="body-background">
		<div class="body-content">	
			<div class="body-center-container">		
				<div class="holder-bar">						
					<form  method="post" enctype="multipart/form-data">
						<fieldset class="form-fieldset">
							<legend>
								Upload Video
							</legend>
							<div class="search-field">
								<input type="name" name="filename" id="filename" placeholder="Video Name">
							</div>
							<br>
							<input type="file" name="file" id="file"> 
							<br>
							<br>
							<input type="submit" name="submit" value="Submit" class="form-button" />
						</fieldset>
					</form>
				</div>
			</div>';
			if(isset($data['uploaded'])){
				echo '
					<div class="body-center-container">
						<div class="holder-bar">
							'.$data['uploaded'].'
						</div>
					</div>';
			}					
			echo '	
		</div>
	</div>';


readfile("html/foot_bar.html");
readfile("html/foot.html");
