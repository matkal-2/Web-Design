<?php
include("php/head.php");
readfile("html/menu_bar.html");
include("php/menu_bar.php");

echo '
	<div class="body-background">
		<div class="body-content">
			
		</div>
	</div>';

readfile("html/foot_bar.html");
readfile("html/body.html");
readfile("html/foot.html");
