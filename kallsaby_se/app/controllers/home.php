<?php 

class Home extends Controller{
	public function index(){
		session_start();
		if(isset($_GET['logOut'])){
			session_destroy();
			header( 'Location: /kallsaby_se/public/login/index' ) ;
		}
		$visitor = $this->model('Visitor');

		$this->view('home/index', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function about(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('home/about', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}
}