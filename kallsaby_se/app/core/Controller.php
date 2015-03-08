<?php

class Controller{
	private $em;
	private $color_theme = 'grey';

	public function getColorTheme(){
		return $this->color_theme;
	}
	public function getManager(){
		if(isset($this->em)){
			return $this->em;
		}
		else{
			require_once "../bootstrap.php";
			$this->em = $entityManager;
			return $this->em;
		}
	}

	public function model($model){
		require_once '../app/models/' . $model . '.php';
		return new $model();
	}

	public function view($view, $data = []){
		require_once '../app/views/'. $view . '.php';
	}
}