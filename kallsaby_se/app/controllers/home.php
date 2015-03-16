<?php 

class Home extends Controller{
	public function index(){
		echo "heyo controller";
		$this->view('home/index');
		echo "heyo controller 1";
	}
}