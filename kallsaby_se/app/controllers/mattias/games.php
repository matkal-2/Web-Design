<?php 

class Games extends Controller{
	public function index(){
		session_start();
		$visitor = $this->model('Visitor');

		$this->view('mattias/games/other', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function leageoflegends(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('mattias/games/leageoflegends', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}

	public function worldofwarcraft(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('mattias/games/worldofwarcraft', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}

	public function csgo(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('mattias/games/csgo', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}

	public function other(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('mattias/games/other', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}
}