<!--

This controller is meant to control the views , models and scipts related to Practice tab 

Added functions : easy() medium() and hard() so that url looks intuitive.
After the controller "/practice/" , the function name will be appended to open the desired page.

-Siddharth Gupta
-->



<?php


class Practice extends CI_Controller{

 	function __construct(){
          parent::__construct();
    }  

	public function index(){
		
		$data['title'] = "Easy | Practice";
		$data['active'] = "Practice" ;

		$this->load->view("header",$data);
		$this->load->view("body_nav",$data);

		$data['practice_type_selected'] = $this->uri->segment(2);

		if ($data['practice_type_selected'] == 'easy' || $data['practice_type_selected'] == '')
			$this->easy();
		else if ($data['practice_type_selected'] == 'medium')
			$this->medium();
		else if ($data['practice_type_selected'] == 'hard')
			$this->hard();
	}	

	public function easy()
	{		
		$data['title'] = "Easy | Practice";
		$data['active'] = "Practice" ;
		$data['practice_type_selected'] = $this->uri->segment(2);

		//to load header and body nav only once.
		if ($data['practice_type_selected'] == 'easy'){
			$this->load->view("header",$data);
			$this->load->view("body_nav",$data);
		}
		
		$this->load->view("practice_type_table",$data);

		$data['practice_type_selected'] = 'easy';		// So that default heading is not empty on practice page.

		$this->load->view("practice_type",$data);
		
	}

	public function medium()
	{		
		$data['title'] = "Medium | Practice";
		$data['active'] = "Practice" ;
		$data['practice_type_selected'] = $this->uri->segment(2);

		//to load header and body nav only once.
		if ($data['practice_type_selected'] == 'medium'){
			$this->load->view("header",$data);
			$this->load->view("body_nav",$data);
		}
		
		$this->load->view("practice_type_table",$data);

		$this->load->view("practice_type",$data);
		
	}

	public function hard()
	{		
		$data['title'] = "Hard | Practice";
		$data['active'] = "Practice" ;
		$data['practice_type_selected'] = $this->uri->segment(2);

		$this->load->view("header",$data);
		if ($data['practice_type_selected'] == 'hard') $this->load->view("body_nav",$data);

		
		$this->load->view("practice_type_table",$data);

		$this->load->view("practice_type",$data);
		//echo "<h1> ".$this->uri->segment(2)."</h1>";


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