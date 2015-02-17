<?php
include("php/head.php");
readfile("html/menu_bar.html");
include("php/menu_bar.php");
echo '
	<div class="body-background">
		<div class="body-content">
			<div class="pure-text">
				<h2>Mattias Kalls&auml;by</h2>';
readfile("html/lipsum/lipsum1.html");
readfile("html/lipsum/lipsum2.html");
readfile("html/lipsum/lipsum4.html");
			echo '</div>
		</div>
	</div>';


readfile("html/foot_bar.html");
readfile("html/body.html");
readfile("html/foot.html");



