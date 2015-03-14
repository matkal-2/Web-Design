<?php
readfile("html/head.html");
include("php/head.php");
echo '<link rel="stylesheet" href="/css/main.css">';
echo '<link rel="stylesheet" href="/css/about.css">';
readfile("html/end_head.html");
readfile("html/menu_bar.html");
include("php/menu_bar.php");


echo '
	<div class="body-background">
		<div class="body-content" id="body-content">';
		if($data['logged_in']){
			if($_SESSION['id'] == 1){
				echo '
					<div class="about-form">
						<form method="POST">							
							<input type="name" name="title" id="title" placeholder="Title">
							<br>
							<textarea type="text" name="content" id="content" placeholder="Content" ></textarea>
							<br>
							<div class="file-transfere">
								<input type="file" name="file" id="file">	
							</div>
							<div class="about-submit">
								<input type="submit" name="post" value="upload">
							</div>
						</form>
					</div>';
			}
		}
		echo '
			<div class="about-holder">
				<h1>Uppv&auml;xt i Kalls&auml;by</h1>
				<p>
					Hejsan!
					<br>
					V&auml;lkommen till min hemsida, jag t&auml;nkte ber&auml;tta lite om vem jag &auml;r. Jag heter Mattias Kalls&auml;by och jag kommer ifr&aring;n V&auml;ster&aring;s. Jag v&auml;xte upp p&aring; g&aring;rden Kalls&auml;by
					och d&auml;r bodde jag tills jag var nitton &aring;r gammal. 
					</p>
				<div class="about-top-pic">
					<img src="/img/skylten.jpg" alt="Profile Picture">
				</div>
			</div>
			

			<div class="about-holder">
				<h1>Flytten till Lule&aring;</h1>
				<p>
					P&aring; h&ouml;sten 2012 skjussade min bror Martin mig till arlanda f&ouml;r att jag skulle flytta norrut. Jag hade kommit in p&aring; en datateknisk utbildning p&aring; universitetet LTU i
					Lule&aring;. Jag hade n&aring;gra dagar tidigare ringt ett vandrar hem och lyckats f&aring;tt en
					sovplats. Jag hade ingen koll p&aring; boende eller hur man skulle klara sig. Som m&aring;nga andra saker i mitt liv s&aring; bara l&ouml;ste sig allt. Efter n&auml;stan tv&aring; m&aring;nader p&aring;
					vandrarhemmet fick jag bli inneboende hos tv&aring; killar som l&auml;ste p&aring; ltu. Dem hade en stor l&auml;genhet p&aring; nitiotre kvadrat och fyra rum. Jag fick det minsta p&aring; 8 kvadrat, men 
					det vart flera g&aring;nger b&auml;ttre &auml;n vandrarhemmet.
				</p>
				<div class="about-top-pic">
					<img src="/img/luleaHereICome.jpg" alt="Profile Picture">
				</div>
			</div>
			
		</div>
	</div>';


readfile("html/foot_bar.html");
readfile("html/body.html");
echo '
	<script src="/js/jquery-2.1.3.min.js"></script>
	<script src="/js/menuBar.js"></script>
	<script src="/js/scroll.js"></script>';
readfile("html/foot.html");



