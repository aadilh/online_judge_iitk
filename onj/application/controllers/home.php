<?php


class Home extends CI_Controller{
	public function index(){
		$this->homepage();
	}

	public function homepage(){
		$data['title'] = "Home";
		$data['active'] = "Home" ;

		$this->load->view("header",$data);
		$this->load->view("body_nav",$data);

	}
}



?>