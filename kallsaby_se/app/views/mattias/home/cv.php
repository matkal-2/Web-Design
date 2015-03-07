<?php
include("php/head.php");
readfile("html/menu_bar.html");
include("php/menu_bar.php");
echo '
	<div class="body-background">
		<div class="body-content">
			<div class="pure-text">
				
				<div class="cv-head">
					<h2>Mattias Kalls&auml;by</h2>					
				</div>
				<div class="cv-menu">
					<ul>
						<li>
							<a onclick="menu(0)" >Utbildning</a>
						</li>
						<li>
							<a onclick="menu(1)" >Erfarenhet</a>
						</li>
						<li>
							<a onclick="menu(2)" >Datorkunskaper</a>
						</li>
						<li>
							<a onclick="menu(3)" >&Ouml;vrigt</a>
						</li>
					</ul>				
				</div>
				<div id="one" style="display:none;">
					<div class="cv-entry">
						<div class="cv-note">
							2012-2017
						</div>
						<div class="cv-entry-content">
							Civilingenj&ouml;r Datateknik, Lule&aring; Tekniska Universitet, Lule&aring;, 300 hp.
							<br>
						</div>						 
					</div>
					<div class="cv-entry">
						<div class="cv-note">
							2010-2012
						</div>
						<div class="cv-entry-content">
							Naturvetenskapsprogrammet, Kunskapsgymnasiet, V&auml;ster&aring;s.
							<br>
						</div>							 
					</div>
					<div class="cv-entry">
						<div class="cv-note">
							2009-2010
						</div>
						<div class="cv-entry-content">
							Entrepen&ouml;rsprogrammet, John Bauergymnasiet, V&auml;ster&aring;s.
						</div>	
						
					</div>					
				</div>

				<div id="two" style="display:none;">
				</div>

				<div id="three" style="display:none;">
				</div>

				<div id="four" style="display:none;">
				</div>
			</div>
		</div>
	</div>';


readfile("html/foot_bar.html");
readfile("html/body.html");
echo '<script src="/js/cv.js"></script>';
readfile("html/foot.html");



/*<div><img src="/img/mattiasprofile.png" alt="Profile Picture" class="cv_img"></div>*/