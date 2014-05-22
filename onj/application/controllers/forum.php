<!--

This controller is meant to control the views , models and scipts related to Forum tab 



-->



<?php


class Forum extends CI_Controller{

	function __construct(){
          parent::__construct();
    } 

	public function index(){
		$this->forum();
	}

	public function forum(){
		$data['title'] = "Forum";
		$data['active'] = "Forum" ;

		$this->load->view("header",$data);
		$this->load->view("body_nav",$data);

	}
}



?>