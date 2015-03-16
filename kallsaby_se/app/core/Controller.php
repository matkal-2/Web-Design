<?php

class Controller{
	require_once '../app/lib/viewHelper.php';
	
	public function model($model){
		if (file_exists('../app/models/' . $model . '.php')){
			require_once '../app/models/' . $model . '.php';
		}
		else{
			echo 'core controlelr no file named '.$model . '.php, ';
		}
		return new $model();
	}

	public function view($layout, $view, $data = []){
		$expView = explode('/',$view , FILTER_SANITIZE_URL));
		$style = '<link rel="stylesheet" href="/css/fam.css">';
		if(file_exists('/public/css/'.$styler[0].'.css')){
			$style .= '<link rel="stylesheet" href="/css/'.$expView[0].'.css">';
		}
		$js = importJS($view);
		require_once '../app/views/layouts/'.$layout.'.phtml';
	}

}