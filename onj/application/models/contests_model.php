<!--

This is a model to retrieve and post data to the 'contests' table on the MySQL server

get_all_contests_name_and_id() : function retrieves the all contest's name and id to be displayed in short links list to 
								 all the contests on left side

get_contest_by_id() : function retreives all the information about contest by using contest_id parameter given to it 




-->



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