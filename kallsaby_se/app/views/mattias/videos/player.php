<?php
if(isset($data['path'])){
	$path = $data['path'];
}
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
				    <section id="main">
				        <video id="demo_video" style="max-width:90%;"controls autobuffer>
				            <source src="'.$path.'">
				        </video>
				        <section id="tags"></section>
				    </section>		
				</div>
			</div>    
		</div>
	</div>';


readfile("html/foot_bar.html");
echo '
	<script src="/js/popcorn.js"></script>
	<script src="/js/script.js"></script>';
readfile("html/foot.html");
