<?php 

class Games extends Controller{
	public function index(){
		session_start();
		$visitor = $this->model('Visitor');

		$this->view('games/other', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function leagueoflegends(){
		session_start();

		$visitor = $this->model('Visitor');
		
		$lolapi = $this->model('Lolapi');
		$lolstats = $lolapi->getStats() + $lolapi->getLeague();

		$this->view('games/leageoflegends', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn(), 'lolstat' => $lolstats ]);
	}

	public function worldofwarcraft(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('games/worldofwarcraft', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}

	public function csgo(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('games/csgo', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}

	public function other(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('games/other', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
}