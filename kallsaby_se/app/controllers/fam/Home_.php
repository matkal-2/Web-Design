<?php 

class Home_ extends Controller{
	private $webpage;
	public function index(){
		session_start();
		if(isset($_GET['logOut'])){
			session_destroy();
			header( 'Location: /login/index' ) ;
		}
		$visitor = $this->model('Visitor');

		$this->view($this->webpage .'/home/index', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function about(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view($this->webpage .'/home/about', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}
}