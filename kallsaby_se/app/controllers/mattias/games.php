<?php 

class Games extends Controller{
	public function index(){
		session_start();
		$visitor = $this->model('Visitor');

		$this->view('mattias/games/other', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function leagueoflegends(){
		session_start();

		echo 'controller';

		$visitor = $this->model('Visitor');
		echo 'controller Visitor';
		try{$lolapi = $this->model('Lolapi');}
		catch(Exception $e){
			echo $e->getMessage();
		}
		
		echo 'controller Lolapi';
		$lolstats = $lolapi->getStats() + $lolapi->getLeague();
		echo 'controller Lolapi get stats';

		$this->view('mattias/games/leageoflegends', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn(), 'lolstat' => $lolstats ]);
	}

	public function worldofwarcraft(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('mattias/games/worldofwarcraft', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}

	public function csgo(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('mattias/games/csgo', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}

	public function other(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('mattias/games/other', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
}