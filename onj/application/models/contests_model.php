<?php

class Contests_model extends CI_Model{

	public function get_all_contests_name_and_id (){

		$q= $this->db->query("SELECT `contest_name` ,`contest_id`  FROM `contests` ORDER BY `id` DESC ");

		return $q->result();


	}

	public function get_contest_by_id($contest_id){

		if($contest_id=="")
			$q= $this->db->query("");
		else
		$q = $this->db->query("SELECT *  FROM `contests` WHERE `contest_id` = '".$contest_id."'");
		return $q->result();
	}



	public function post_data(){

	}
	
}

?>