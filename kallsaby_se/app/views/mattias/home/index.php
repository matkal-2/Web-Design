<?php
readfile("html/head.html");
include("php/head.php");
echo '<link rel="stylesheet" href="/css/main.css">';
readfile("html/end_head.html");
readfile("html/menu_bar.html");
include("php/menu_bar.php");

echo '
	<div class="body-background">
		<div class="body-content">
		<div class="body-center-container">
			<h1>V&auml;lkommen!</h1>		
			<div class="index-top-pic">
				<div class="inner-top-pic" id="inner-top-pic">
					<img src="/img/cheers.jpg" alt="Profile Picture">
					<img src="/img/princes.jpg" alt="Profile Picture">
				</div>
			</div>
			<div class="slider-button">
				<form>
					<input type="radio" onclick="slide(0, \'inner-top-pic\');" name="img">
					<input type="radio" onclick="slide(1, \'inner-top-pic\');" name="img">
				</form>
			</div>
		</div>
			
		</div>
	</div>';
readfile("html/foot_bar.html");
readfile("html/body.html");
echo '<script src="/js/menuBar.js"></script>
<script src="/js/slider.js"></script>';
readfile("html/foot.html");