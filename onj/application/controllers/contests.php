<?php

class Contests extends CI_Controller {
    
    function __construct(){
          parent::__construct();
    }  
    
    public function index(){
              
          $this->contests();
     
    }
    public function contests(){
            $data['title']="Contests";
            $data['active']="Contests";
          
        $this->load->view('header',$data);
        $this->load->view('body_nav',$data);    
       // $this->load->view("body_contests");

         $this->load->model("contests_model");
         $data['contests_short_list']= $this->contests_model->get_all_contests_name_and_id();

        $this->load->view('contests_list',$data);
        
        $contest_id = $this->uri->segment(3);

       // echo '<h1>'.$contest_id.'</h1>';
       if($contest_id=="")
        foreach ($data['contests_short_list'] as $r) {
             
            $contest_id = $r->contest_id;

             break;
        }


        $contest_data['contest_details'] = $this->contests_model->get_contest_by_id($contest_id); 

        $this->load->view('contests_main_top',$contest_data);
        $this->load->view('contests_main_details',$contest_data);

        $this->load->model("problems_model");
        $problem_data['problems_list'] = $this->problems_model->get_problems_by_contest_id($contest_id);


        $this->load->view('contests_problems',$problem_data);
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