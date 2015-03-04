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

	public function upload(){
		session_start();
		$visitor = $this->model('Visitor');
		$videos = $this->model('Videohandler');
		if($visitor->isLoggedIn()){
			$role = $_SESSION['role'];
		}
		else{
			$role = 10;
		}
		if($role < 6){
			if(isset($_FILES['file'])){				
				if($videos->uploadVideo($this->getManager(),'public','Video')){
					$this->view('mattias/videos/upload', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn(), 'uploaded' => $videos->status]);
				}
				else{
					$this->view('mattias/videos/upload', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn(), 'uploaded' => $videos->error]);
				}
			}
			else{
				$this->view('mattias/videos/upload', ['color_theme' => 'grey', 'logged_in' => $visitor->isLoggedIn()]);
			}			
		}
		else{
			header( 'Location: /mattias/videos/other' );
		}
	}

	public function player($privacy = '', $video = ''){
		session_start();
		echo 'heyo';
		$visitor = $this->model('Visitor');
		echo 'heyo 5';
		$videos = $this->model('videohandler');
		echo 'heyo 4';
		if($visitor->isLoggedIn()){
			$role = $_SESSION['role'];
		}
		else{
			$role = 10;
		}
		echo 'heyo 2';
		if(isset($privacy) && isset($video)){		
			echo 'heyo 3';
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