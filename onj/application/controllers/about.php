<!--

This controller is meant to control the views , models and scipts related to About tab 



-->



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