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
		$videos = $this->model('Videohandler');
		if($visitor->isLoggedIn()){
			$role = $_SESSION['role'];
		}
		else{
			$role = 10;
		}
		if(isset($_FILES['file'])){
			$videos->uploadVideo($this->getManager(),'public','Video');
		}
		if(isset($_REQUEST['search'])){
			$v = $videos->getSearchVideo($this->getManager(), $_REQUEST['search'], 'Video', $role, 10);
			$amount = $videos->amount;
			if($amount >0){
				$this->view('mattias/videos/other', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn(), 'amount' => $amount, 'videos' => $v]);
			}
			else{
				$this->view('mattias/videos/other', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
			}
		}
		else{
			if(isset($_GET['p'])){
				$v = $videos->getLatestVideo($this->getManager(), 'Video', $_GET['p'], $role);			
				$amount = $videos->amount;
			}
			else{
				$v = $videos->getLatestVideo($this->getManager(), 'Video', 0, $role);			
				$amount = $videos->amount;
			}
			if($amount >0){
				$this->view('mattias/videos/other', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn(), 'amount' => $amount, 'videos' => $v]);
			}
			else{
				$this->view('mattias/videos/other', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
			}

		}
		
		
	}

	public function player($privacy, $video){
		session_start();

		$visitor = $this->model('Visitor');
		$videos = $this->model('videohandler');
		if($visitor->isLoggedIn()){
			$role = $_SESSION['role'];
		}
		else{
			$role = 10;
		}
		if(isset($privacy) && isset($video)){		
			$path = $videos->getVideopath($this->getManager(), $privacy, $video, 'Video', $role);
			if($path != null){
				$this->view('mattias/videos/player', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn(), 'path' => $path]);
			}
			else{
				header( 'Location: /mattias/videos/other' ) ;
			}
		}
	}
}