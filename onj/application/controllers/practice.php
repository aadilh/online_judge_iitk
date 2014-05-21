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