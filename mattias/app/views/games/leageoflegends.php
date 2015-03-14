<?php
readfile("html/head.html");
include("php/head.php");
echo '<link rel="stylesheet" href="/css/main.css">';
echo '<link rel="stylesheet" href="/css/game.css">';
readfile("html/end_head.html");
readfile("html/menu_bar.html");
include("php/menu_bar.php");

$lolstat = $data['lolstat'];


echo '
	<div class="body-background">
		<div class="body-content">

			<div class="game-holder">
				<div class="game-head">
					<h1>League of Legends</h1>
					<div class="game-logo">
						<img src="/img/lollogo.png" alt="Game Logo">
					</div>
				</div>
				<div class="game-user">
					Username: Emka&iacute;
					<br>
					Server: EU-West
					<br>
					<br>';
					echo 'League: '.$lolstat['name']; echo '
					<br>';
					echo 'Tier: '.$lolstat['tier']. ' '.$lolstat['division']; echo '
					<br>';
					echo 'League Points: '.$lolstat['leaguePoints']; echo '
					<br>
					<br>';
					echo 'Wins: '.$lolstat['wins']; echo '
					<br>';
					echo 'Losses: '.$lolstat['losses']; echo '
					<br>';
					echo 'Kills: '.$lolstat['kills']; echo '
					<br>';
					echo 'Assists: '.$lolstat['assists']; echo '
					<br>
				</div>
			</div>
		</div>
	</div>';


readfile("html/foot_bar.html");
readfile("html/body.html");
echo '<script src="/js/menuBar.js"></script>';
readfile("html/foot.html");
