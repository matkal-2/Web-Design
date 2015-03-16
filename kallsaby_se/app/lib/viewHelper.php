<?php

class viewHelper{
	public function importJS($view){
		$js = "";
		switch($view){
			case "views/home/index.phtml":
				$js .= "";
				break;

			default:
				$js .= "";
				break;
		}
		return $js;
	}
}