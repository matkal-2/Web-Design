<?php 

class Account extends Controller{
	public function index(){
		session_start();
		$visitor = $this->model('Visitor');
		if($visitor->isLoggedIn()){
			$user_info = $visitor->information($this->getManager());
		}
		
		$this->view('account/index', ['user_info' => $user_info, 'color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function settings(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('account/settings', ['user_info' => $user_info, 'color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
	}
}