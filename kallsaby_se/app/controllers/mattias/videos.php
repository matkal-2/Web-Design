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
		echo ' in other; ';
		$visitor = $this->model('Visitor');
		echo ' before make video; ';
		$videos = $this->model('Videohandler');
		echo ' before is logged in; ';
		if($visitor->isLoggedIn()){
			echo ' before role from session; ';
			$role = $_SESSION['role'];
			echo ' after role from session; ';
		}
		else{
			echo ' before role from 10; ';
			$role = 10;
			echo ' after role from 10; ';
		}
		echo ' before Video upload files test; ';
		if(isset($_FILES['file'])){
			echo ' before Video upload; ';
			$videos->uploadVideo($this->getManager(),'public','Video');
			echo ' after Video upload; ';
		}
		echo ' in before search; ';
		if(isset($_REQUEST['search'])){
			echo ' in search; ';
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
			echo ' in not search; ';
			if(isset($_GET['p'])){
				echo ' in GET p; ';
				$v = $videos->getLatestVideo($this->getManager(), 'Video', $_GET['p'], $role);			
				$amount = $videos->amount;
			}
			else{
				echo ' in not GET p; ';
				$v = $videos->getLatestVideo($this->getManager(), 'Video', 0, $role);			
				$amount = $videos->amount;
			}
			if($amount >0){
				echo ' in amount > 0; ';
				$this->view('mattias/videos/other', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn(), 'amount' => $amount, 'videos' => $v]);
			}
			else{
				echo ' in amount =< 0; ';
				$this->view('mattias/videos/other', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
			}

		}
		echo ' in end of other; ';
		
		
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