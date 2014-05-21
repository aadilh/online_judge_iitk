<?php


class About extends CI_Controller{
	public function index(){
		$this->abouts();
	}

	public function abouts(){
		$data['title'] = "About";
		$data['active'] = "About" ;

		$this->load->view("header",$data);
		$this->load->view("body_nav",$data);

	}
}



?>