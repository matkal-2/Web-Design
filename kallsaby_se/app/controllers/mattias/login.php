<?php

class Login extends Controller{
	public function index(){
		session_start();
		$visitor = $this->model('Visitor');
		if(!$visitor->isLoggedIn()){
			if(isset($_REQUEST['login_username'])){
				if($visitor->login($this->getManager())){
					header( 'Location: /mattias/home' ) ;
				}
				else{
					$this->view('global/login/index', ['color_theme' => $this->getColorTheme(), 'loggin_failed' => true]);
				}
			}
			else{
				$this->view('global/login/index', ['color_theme' => $this->getColorTheme()]);
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
			if(isset($data)){
				if($data == "register_done"){
					$registerd = true;
					header( 'Location: /mattias/login/index' ) ;

				}
				else if($data == "register_failed"){
					$registerd = false;
					$this->view('global/login/register', ['color_theme' => $this->getColorTheme(), 'registerd' => $registerd]);
				}				
			}							
			if(isset($_REQUEST['register_username'])){				
				if($visitor->register($this->getManager())){
					header( 'Location: /mattias/login/register/register_done' ) ;
				}
				else{
					header( 'Location: /mattias/login/register/register_failed' ) ;
				}				
			}
			else{
				$registerd = true;
				$this->view('global/login/register', ['color_theme' => $this->getColorTheme(), 'registerd' => $registerd]);
			}
		}
		else{
			header( 'Location: /mattias/home/index' ) ;
		}
	}

}