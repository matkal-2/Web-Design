<?php

class Login extends Controller{
	public function index(){
		session_start();
		$visitor = $this->model('Visitor');
		if(!$visitor->isLoggedIn()){
			if(isset($_REQUEST['login_username'])){
				if($visitor->login($this->getManager())){
					header( 'Location: /home' ) ;
				}
				else{
					$this->view('global/login/index', ['color_theme' => 'grey', 'loggin_failed' => true]);
				}
			}
			else{
				$this->view('global/login/index', ['color_theme' => 'grey']);
			}
		}
		else{
			header( 'Location: /home' ) ;
		}
	}

	public function register($data=[]){
		session_start();
		$visitor = $this->model('Visitor');
		if(!$visitor->isLoggedIn()){
			if(isset($_REQUEST['register_username'])){
				echo 'post is set';
				if(true){
					echo 'data not set';
					if($visitor->register($this->getManager())){
						header( 'Location: /login/register/register_done' ) ;
					}
					else{
						header( 'Location: /login/register/register_failed' ) ;
					}
				}
			}
			else{
				if(isset($data)){
					if($data == "register_done"){
						$registerd = true;
						header( 'Location: /login/index' ) ;

					}
					else if($data == "register_failed"){

						$registerd = false;
						$this->view('global/login/register', ['color_theme' => 'grey', 'registerd' => $registerd]);
					}
					else{
						$registerd = true;
						$this->view('global/login/register', ['color_theme' => 'grey', 'registerd' => $registerd]);
					}
					
				}
				else{
					$registerd = true;
					$this->view('global/login/register', ['color_theme' => 'grey', 'registerd' => $registerd]);
				}
				
			}
		}
		else{
			header( 'Location: /home/index' ) ;
		}
	}

}