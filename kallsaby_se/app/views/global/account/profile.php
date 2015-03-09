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
			
		</div>
	</div>';


readfile("html/foot_bar.html");
readfile("html/body.html");
readfile("html/foot.html");