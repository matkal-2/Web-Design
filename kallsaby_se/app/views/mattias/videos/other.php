<?php
include("php/head.php");
readfile("html/menu_bar.html");
include("php/menu_bar.php");
echo '
	<div class="body-background">
		<div class="body-content">
			<section id="side">
		        <div id="wiki"></div>
		    </section>
		 
		    <section id="main">
		        <video id="demo_video" style="max-width:90%;"controls autobuffer>
		            <source src="file:///c:/Users/Mattias/Videos/Movies/loveactually.mkv">
		        </video>
		        <section id="tags"></section>
		    </section>
		    <section id="main2">
		        <video id="demo_video2" controls autobuffer>
		            <source src="http://videos.mozilla.org/serv/webmademovies/popcornplug.mp4">
          			<source src="http://videos.mozilla.org/serv/webmademovies/popcornplug.ogv">
          			<source src="http://videos.mozilla.org/serv/webmademovies/popcornplug.webm">
		        </video>
		        <section id="tags"></section>
		    </section>
		 
		    
		</div>
	</div>';


readfile("html/foot_bar.html");
echo '
	<script src="js/popcorn.js"></script>
	<script src="js/script.js"></script>';
readfile("html/foot.html");
