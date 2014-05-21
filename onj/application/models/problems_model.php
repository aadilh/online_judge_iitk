<?php


class Problems_model extends CI_Model{

	public function get_problems_by_contest_id($contest_id){

		$q=$this->db->query("SELECT `problem_id` , `problem_name` ,`short_desc`,`accepted_submissions`,`difficulty` FROM `problems` WHERE `contest_id` = '".$contest_id."' ORDER BY `difficulty`");

		return $q->result();

	}

	public function get_problem_by_id($problem_id){

		$q=$this->db->query("SELECT * FROM `problems` WHERE `problem_id` = '".$problem_id."'");

		return $q->result();
	} 

}

?>