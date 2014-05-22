<!--

This controller is meant to control the views , models and scipts related to Leaderboard tab 



-->



<?php


class Leaderboard extends CI_Controller{
	public function index(){
		$this->board();
	}

	public function board(){
		$data['title'] = "Leaderboard";
		$data['active'] = "Leaderboard" ;

		$this->load->view("header",$data);
		$this->load->view("body_nav",$data);

	}
}



?>