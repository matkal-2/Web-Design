<?php
if(isset($data['videos']) && isset($data['amount'])){
	$videos = $data['videos'];
	$amount = $data['amount'];
}
if(isset($_GET['p'])){
	if($_GET['p']<1){
		$down = 0;
		$up = 1;
	}
	else{
		$down = $_GET['p']-1;
		$up = $_GET['p']+1;
	}
	
}
else{
	$down = 0;
	$up = 1;
}


include("php/head.php");
readfile("html/menu_bar.html");
include("php/menu_bar.php");
echo '
	<div class="body-background">
		<div class="body-content">
			<div class="video-browser">
				<div class="search-menu">
					<div id="result-head" class="menu-head"></div>
					<div class="holder-bar">
						<form method="POST" id="search-form">
							<fieldset class="form-fieldset">
								<legend>
									Video Search
								</legend>
								<div class="search-field">
									<input type="text" name="search" id="search" placeholder="Search">
								</div>
								<br>
								<input type="submit" name="search-form" value="Search" class="form-button">							
							</fieldset>
						</form>
						<br>
						<a href="/mattias/videos/upload" class="anchor-button">Upload File</a>
					</div>
				</div>
				<div class="result-box">
					<div id="result-head" class="result-head"></div>';
					if(isset($videos)&& isset($amount)){

						for ($i=0; $i<$amount; $i++){							
							echo '
								<div class="result-video">
									<a href="/mattias/videos/player/public/'.$videos[$i][1].'">'.$videos[$i][0].'</a>
								</div>';
						}
					}					
					echo '
					<div class="page-buttons">
						<form method="GET">
							<input value="'.$down.'" type="submit" name="p">
							<input value="'.$up.'" type="submit" name="p">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>';


readfile("html/foot_bar.html");
readfile("html/foot.html");
