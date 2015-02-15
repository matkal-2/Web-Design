<?php 

class Home extends Controller{
	public function index($name = '', $role = ''){
		session_start();
		if(isset($_GET['logOut'])){
			session_destroy();
			header( 'Location: /kallsaby_se/public/home/index' ) ;
		}

		$visitor = $this->model('Visitor');
		$visitor->name = $name;
		$visitor->role = $role;
		

		$this->view('home/index', ['name' => $visitor->name, 'role' => $visitor->role, 'color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function about($name = '', $role = ''){
		session_start();

		$visitor = $this->model('Visitor');
		$visitor->name = $name;
		$visitor->role = $role;

		$this->view('home/about', ['name' => $visitor->name, 'role' => $visitor->role, 'color_theme' => 'grey']);
	}
}