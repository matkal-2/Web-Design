<?php 

class Projects extends Controller{
	public function index(){
		session_start();
		$visitor = $this->model('Visitor');

		$this->view('mattias/projects/other', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function webpage(){
		session_start();
		$visitor = $this->model('Visitor');

		$this->view('mattias/projects/webpage', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}

	public function imu(){
		session_start();
		$visitor = $this->model('Visitor');

		$this->view('mattias/projects/imu', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}

	public function other(){
		session_start();
		$visitor = $this->model('Visitor');

		$this->view('mattias/projects/other', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}
}