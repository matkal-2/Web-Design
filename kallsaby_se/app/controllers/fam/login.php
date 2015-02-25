<?php

class Login_ extends Controller{
	public function index(){
		session_start();
		$visitor = $this->model('Visitor');
		if(!$visitor->isLoggedIn()){
			if(isset($_REQUEST['login_username'])){
				if($visitor->login($this->getManager())){
					header( 'Location: /mattias/home' ) ;
				}
				else{
					echo 'Did not log in';
				}
			}
			else{
				$this->view('login/index', ['color_theme' => 'grey']);
			}
		}
		else{
			header( 'Location: /mattias/home' ) ;
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
						header( 'Location: /mattias/login/register/register_done' ) ;
					}
					else{
						header( 'Location: /mattias/login/register/register_failed' ) ;
					}
				}
			}
			else{
				if(isset($data)){
					if($data == "register_done"){
						$registerd = true;
						header( 'Location: /mattias/login/index' ) ;

					}
					else if($data == "register_failed"){

						$registerd = false;
						$this->view('login/register', ['color_theme' => 'grey', 'registerd' => $registerd]);
					}
					else{
						$registerd = true;
						$this->view('login/register', ['color_theme' => 'grey', 'registerd' => $registerd]);
					}
					
				}
				else{
					$registerd = true;
					$this->view('login/register', ['color_theme' => 'grey', 'registerd' => $registerd]);
				}
				
			}
		}
		else{
			header( 'Location: /mattias/home/index' ) ;
		}
	}

}