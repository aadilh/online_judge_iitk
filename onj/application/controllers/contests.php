<!--

This controller is meant to control the views , models and scipts related to Contests tab

_contruct() : is constructor which is used to call parent constructor 
I added this contructor because without it views were not loading 
if you have same problem with other controller please add this constructor

main() : function displays the main contest page on screen grabing data from  the two models 
              namely 'contest_model.php' and 'problem_model.php'


problem() : function displays clicked problem on screen grabing data from 'problem_model.php' model





-by Aadil Hayat
-->




<?php

class Contests extends CI_Controller {
    
    function __construct(){
          parent::__construct();
    }  
    
    public function index(){
              
          $this->main();
     
    }
    public function main(){
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