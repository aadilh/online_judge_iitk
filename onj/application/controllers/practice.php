<!--

This controller is meant to control the views , models and scipts related to Practice tab 



-->



<?php


class Practice extends CI_Controller{
	public function index(){
		$this->prac();
	}

	public function prac(){
		$data['title'] = "Practice";
		$data['active'] = "Practice" ;

		$this->load->view("header",$data);
		$this->load->view("body_nav",$data);

	}
}



?>