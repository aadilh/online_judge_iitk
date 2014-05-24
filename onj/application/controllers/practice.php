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
		
		$practice_data['title'] = "Easy | Practice";
		$practice_data['active'] = "Practice" ;

		$this->load->view("header",$practice_data);
		$this->load->view("body_nav",$practice_data);

		$practice_data['practice_type_selected'] = $this->uri->segment(2);
		
		if ($practice_data['practice_type_selected'] == 'easy' || $practice_data['practice_type_selected'] == '')
			$this->easy();
		else if ($practice_data['practice_type_selected'] == 'medium')
			$this->medium();
		else if ($practice_data['practice_type_selected'] == 'hard')
			$this->hard();
	}

# If the easy problems link is selected or practice page is opened,
# the easy function will be called displaying the first page of problems.
# Else, the category page is opened with the default page set to 1.		

	public function easy()
	{		
		$practice_data['title'] = "Easy | Practice";
		$practice_data['active'] = "Practice" ;
		$practice_data['practice_type_selected'] = $this->uri->segment(2);

		//to load header and body nav only once.
		if ($practice_data['practice_type_selected'] == 'easy'){
			$this->load->view("header",$practice_data);
			$this->load->view("body_nav",$practice_data);
		}
		
		#To get the problems of the desired category.
		$this->load->model("problems_model");

		$this->load->view("practice_type_table",$practice_data);

		$sort_by=$this->uri->segment(4);
		//echo "<h1>".$this->uri->segment(4)."</h1>";

		if ($sort_by == '' )
		{
			//echo "<h1>redirecting...</h1>";
			redirect(base_url().'practice/easy/1/sort_accepted_submissions');
		}

		// So that default heading is not empty on practice page.
		$practice_data['practice_type_selected'] = 'easy';		
		$practice_data['page_num'] = $this->uri->segment(3);

		if ($practice_data['page_num'] == '')
			$practice_data['page_num'] = '1';

		$sort_by = substr($sort_by,	5);
		//echo "<h1>".$sort_by."</h1>";

		#Got list of problems to be shown in the category.
		$practice_data['problems'] = $this->problems_model->get_problems_by_difficulty('1',$sort_by);

		$this->load->view("practice_type",$practice_data);
		$this->load->view("practice_type_problems_list",$practice_data);
	}

/*

Copy of the above easy function with a few changes so as to accomodate the change in difficulty.
Could not integrate with easy as the function name appears in uri.

*/

	public function medium()
	{		
		$practice_data['title'] = "Medium | Practice";
		$practice_data['active'] = "Practice" ;
		$practice_data['practice_type_selected'] = $this->uri->segment(2);

		//to load header and body nav only once.
		if ($practice_data['practice_type_selected'] == 'medium'){
			$this->load->view("header",$practice_data);
			$this->load->view("body_nav",$practice_data);
		}
		
		$this->load->model("problems_model");

		$this->load->view("practice_type_table",$practice_data);

		$sort_by=$this->uri->segment(4);
		//echo "<h1>".$this->uri->segment(4)."</h1>";

		if ($sort_by == '' )
		{
			//echo "<h1>redirecting...</h1>";
			redirect(base_url().'practice/medium/1/sort_accepted_submissions');
		}

		$practice_data['page_num'] = $this->uri->segment(3);

		if ($practice_data['page_num'] == '')
			$practice_data['page_num'] = '1';

		$sort_by = substr($sort_by,	5);

		$practice_data['problems'] = $this->problems_model->get_problems_by_difficulty('2',$sort_by);

		$this->load->view("practice_type",$practice_data);
		$this->load->view("practice_type_problems_list",$practice_data);
		
	}

	public function hard()
	{		
		$practice_data['title'] = "Hard | Practice";
		$practice_data['active'] = "Practice" ;
		$practice_data['practice_type_selected'] = $this->uri->segment(2);

		if ($practice_data['practice_type_selected'] == 'hard'){
			$this->load->view("header",$practice_data);
			$this->load->view("body_nav",$practice_data);
		}

		$this->load->model("problems_model");
		
		$this->load->view("practice_type_table",$practice_data);
		
		$sort_by=$this->uri->segment(4);
		//echo "<h1>".$this->uri->segment(4)."</h1>";

		if ($sort_by == '' )
		{
			//echo "<h1>redirecting...</h1>";
			redirect(base_url().'practice/hard/1/sort_accepted_submissions');
		}

		$practice_data['page_num'] = $this->uri->segment(3);

		if ($practice_data['page_num'] == '')
			$practice_data['page_num'] = '1';

		$sort_by = substr($sort_by,	5);

		$practice_data['problems'] = $this->problems_model->get_problems_by_difficulty('3',$sort_by);

		$this->load->view("practice_type",$practice_data);
		$this->load->view("practice_type_problems_list",$practice_data);

	}



	public function problem (){
          
                
       // $this->load->view('body_problem') ;


        $this->load->model('problems_model');
        $problem_id = $this->uri->segment(3);

        if($problem_id !="")
        {

            $practice_data['problem_details'] = $this->problems_model->get_problem_by_id($problem_id);


            $practice_data['title']="Problem";
            $practice_data['active']="Practice";
          
            $this->load->view('header',$practice_data);
            $this->load->view('body_nav',$practice_data);
            $this->load->view('problem_head',$practice_data);
            $this->load->view('problem_desc',$practice_data);
            $this->load->view('problem_submission');
            $this->load->view('problem_recent_submissions');
            $this->load->view('problem_user_submissions');
        }
        else
        {
            redirect(base_url().'/practice/easy');
        }

    }
}



?>