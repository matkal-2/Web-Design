<?php
include("php/head.php");
readfile("html/menu_bar.html");
include("php/menu_bar.php");

echo '
	<div class="body-background">
		<div class="body-content">
		<div class="body-center-container">
			<h1>V&auml;lkommen!</h1>
		</div>
		<div class="index-top-pic">
			<img src="/img/cheers.jpg" alt="Profile Picture">
		</div>
			
		</div>
	</div>';
readfile("html/foot_bar.html");
readfile("html/body.html");
readfile("html/foot.html");