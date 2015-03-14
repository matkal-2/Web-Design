<?php 

class Account extends Controller{
	public function index(){
		session_start();
		$visitor = $this->model('Visitor');
		if($visitor->isLoggedIn()){
			$user_info = $visitor->information($this->getManager());
		}
		else{
			header( 'Location: /home' ) ;
		}
		
		$this->view('account/index', ['user_info' => $user_info, 'color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function settings(){
		session_start();
		$updated['updated']=false;
		$visitor = $this->model('Visitor');
		if(!empty($_POST)){
			if(isset($_POST['account_setting'])){
				$updated = $visitor->accountSetting($this->getManager());
				if($updated['color_theme'] != false){
					$_SESSION['color_theme'] = $_POST['color_theme'];
				}
				$updated['updated'] = true;
			}
		}

		if($visitor->isLoggedIn()){
			$user_info = $visitor->information($this->getManager());
		}
		else{
			header( 'Location: /home' ) ;
		}

		$this->view('account/settings', ['updated'=> $updated, 'user_info' => $user_info, 'color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function files(){
		session_start();
		$visitor = $this->model('Visitor');

		$this->view('account/files', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
}