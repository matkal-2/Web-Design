<?php 

class Home extends Controller{
	public function index(){
		session_start();
		$visitor = $this->model('Visitor');
		$this->view('fam/home/index', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function about(){
		session_start();
		$visitor = $this->model('Visitor');
		$this->view('fam/home/about', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
}