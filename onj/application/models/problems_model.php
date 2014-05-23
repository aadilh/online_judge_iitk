<!--

This is a model to retrieve and post data to the 'problems' table on the MySQL server

get_problems_by_contest_id() : function retrieves the all problems with given contest id with their short description 
								and other related informations being displayed on the contest page

get_contest_by_id() : function retreives all the information about contest by using contest_id parameter given to it 




-->


<?php


class Problems_model extends CI_Model{

	public function get_problems_by_contest_id($contest_id){

		$q=$this->db->query("SELECT `problem_id` , `problem_name` ,`short_desc`,`accepted_submissions`,`difficulty` FROM `problems` WHERE `contest_id` = '".$contest_id."' ORDER BY `difficulty`");

		return $q->result();

	}

	public function get_problems_by_difficulty($difficulty){

		$q=$this->db->query("SELECT `problem_id` , `problem_name` ,`short_desc`,`accepted_submissions`,`difficulty` FROM `problems` WHERE `difficulty` = '".$contest_id."' ORDER BY `difficulty`");

		return $q->result();

	}

	public function get_problem_by_id($problem_id){

		$q=$this->db->query("SELECT * FROM `problems` WHERE `problem_id` = '".$problem_id."'");

		return $q->result();
	} 

}

?>