<?php 

class Home extends Controller{
	public function index(){
		$this->view('layout','home/index');
	}
}