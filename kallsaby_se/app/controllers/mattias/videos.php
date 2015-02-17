<?php 

class Videos extends Controller{
	public function index(){
		session_start();
		$visitor = $this->model('Visitor');

		$this->view('mattias/videos/other', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function movies(){
		session_start();
		$visitor = $this->model('Visitor');

		$this->view('mattias/videos/movies', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}

	public function series(){
		session_start();
		$visitor = $this->model('Visitor');

		$this->view('mattias/videos/series', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}

	public function other(){
		session_start();
		$visitor = $this->model('Visitor');

		$this->view('mattias/videos/other', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}
}