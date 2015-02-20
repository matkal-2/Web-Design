<?php
if(isset($data['path'])){
	$path = $data['path'];
}
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
		            <source src="'.$path.'">
		        </video>
		        <section id="tags"></section>
		    </section>		    
		</div>
	</div>';


readfile("html/foot_bar.html");
echo '
	<script src="/js/popcorn.js"></script>
	<script src="/js/script.js"></script>';
readfile("html/foot.html");
