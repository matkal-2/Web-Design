<?php

class Controller{

	public function getManager(){
		require_once "../bootstrap.php";
		return $entityManager;
	}

	public function model($model){
		require_once '../app/models/' . $model . '.php';
		return new $model();
	}

	public function view($view, $data = []){
		require_once '../app/views/'. $view . '.php';
	}
}