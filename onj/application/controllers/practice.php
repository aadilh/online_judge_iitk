<!--

This controller is meant to control the views , models and scipts related to Practice tab 



-->



<?php


class Practice extends CI_Controller{

 	function __construct(){
          parent::__construct();
    }  

	public function index(){
		
		$data['title'] = "Practice";
		$data['active'] = "Practice" ;

		$this->load->view("header",$data);
		$this->load->view("body_nav",$data);

		$data['practice_type_selected'] = $this->uri->segment(2);

		$this->load->view("practice_type_table",$data);

		$this->load->view("practice_type",$data);
		echo "<h1> ".$this->uri->segment(2)."</h1>";


	}

	public function problem (){
          
                
       // $this->load->view('body_problem') ;


        $this->load->model('problems_model');
        $problem_id = $this->uri->segment(3);

        if($problem_id !="")
        {

            $problem_data['problem_details'] = $this->problems_model->get_problem_by_id($problem_id);


            $data['title']="Problem";
            $data['active']="Contests";
          
            $this->load->view('header',$data);
            $this->load->view('body_nav',$data);
            $this->load->view('problem_head',$problem_data);
            $this->load->view('problem_desc',$problem_data);
            $this->load->view('problem_submission');
            $this->load->view('problem_recent_submissions');
            $this->load->view('problem_user_submissions');
        }
        else
        {
            redirect(base_url().'/index.php/contests/contests');
        }

    }
}



?>