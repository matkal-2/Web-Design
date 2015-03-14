<?php 

class Home extends Controller{
	public function index(){
		session_start();
		if(isset($_GET['logOut'])){
			session_destroy();
			header( 'Location: /login/index' ) ;
		}
		$visitor = $this->model('Visitor');

		$this->view('home/index', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function about(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('home/about', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}

	public function aboutCont(){
		if(isset($_POST['pos'])){				
			$visitor = $this->model('Visitor');
			$this->view('home/aboutCont', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
		}else{
			header( 'Location: /home/about' );
		}
	}

	public function cv(){
		session_start();

		$visitor = $this->model('Visitor');

		$this->view('home/cv', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
}