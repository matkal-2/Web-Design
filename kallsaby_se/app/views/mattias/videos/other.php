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
						</form>';
						if($data['logged_in']){
							if($_SESSION['role'] < 6){
								echo '
								<br>
								<a href="/mattias/videos/upload" class="anchor-button">Upload File</a>
							';
							}
							
						}
						echo '						
					</div>
				</div>
				<div class="result-box">
					<div id="result-head" class="result-head">Other</div>';
					if(isset($videos)&& isset($amount)){

						for ($i=0; $i<$amount; $i++){							
							echo '
								<div class="result-video">
									<a href="/mattias/videos/player/'.$videos[$i][1].'">'.$videos[$i][0].'</a>									
									<br>
									<a href="/mattias/videos/removevid/'.$videos[$i][1].'">Remove video</a>
								</div>
								';
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
echo '<script src="/js/menuBar.js"></script>';
readfile("html/foot.html");
