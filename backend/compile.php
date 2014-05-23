<?php

echo "start<br>";
$conn_error = "Unable to connect.";

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "";
$db = "onj";

if (!@mysql_connect($mysql_host,$mysql_user,$mysql_password) || !@mysql_select_db($db))
	die("Could not connect"); 
echo "connected!";
//NOT YET WORKING FOR JAVA

/*
Status = -1 : in queue
		  0 : correct
		  1 : wrong ans
		  2 : compilation error
		  3 : TLE
*/


while (true)
{
	echo "in loop";
	sleep(1);
	//Get problems to be judged.
	if (!($query = mysql_query("SELECT * FROM `files_submitted` WHERE `status` ='-1' ORDER BY `id` DESC")))
		echo "Error in loading table";
			
	while (mysql_num_rows($query)!=0)
	{
		$to_judge = mysql_fetch_assoc($query);
		$id = $to_judge['id'];
		$extension = $to_judge['lang'];
		$name = $to_judge['file_name'];
		$prob_id = $to_judge['prob_id'];
		$status = $to_judge['status'];
		$user = $to_judge['username'];
		echo "<br> id=".$id;
		echo "<br> lang=".$extension;
		echo "<br> name=".$name;
		echo "<br> probid=".$prob_id;
		echo "<br> status=".$status;
		echo "<br> user=".$user;


		//Random file name generation
		if ($extension != "java")
		{	
			$chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
			$length = 8;
			$filename = '';
			for($i = 0; $i < $length; $i++)
			{
				$filename .= $chars[mt_rand(0, 35)];
			}
		}
		else $filename = $name; 	//for java

		//$inputfilename="in";
		//$timelimit=100;
		//$memlimit=512;
		//$sampleoutputfile="out";

		//Compiling the file
		exec("/opt/lampp/htdocs/onj/upload/compiler ".$filename." /opt/lampp/htdocs/onj/users/".$user."/".$name." ".$extension);

		//Check if executable is formed.
		if (!file_exists("/var/chroot/".$filename))
			{
				echo "compilation error";
				$sql = "UPDATE `files_submitted` SET `status`='2' WHERE `id`='$id'";
				mysql_query($sql);

			}

		if (!($query = mysql_query("SELECT `num_input_file`, `time_limit`, `mem_limit` FROM `prob_stats` WHERE `prob_id`='$prob_id'")))
			echo "Unable to fetch prob data";
		$prob_data = mysql_fetch_array($query);
		$in=1;
		$ans = true;

		while ($in<=$prob_data['num_input_file'] && $ans)
		{	
			// ./judge <file to execute> <input file> <extension> <time limit> <memory limit> <file to save output in>
	    	echo "/var/chroot/judge ".$filename." /opt/lampp/htdocs/onj/problems/".$prob_id."/".$in.".in ".$extension." ".$prob_data['time_limit']." ".$prob_data['mem_limit']." out.txt";
	    	exec ("/var/chroot/judge ".$filename." /opt/lampp/htdocs/onj/problems/".$prob_id."/".$in.".in ".$extension." ".$prob_data['time_limit']." ".$prob_data['mem_limit']." out.txt");
	    	$in++;
	    	//exec ("rm /var/chroot/".$filename);

	    	//truncate the file
			$trunc = fopen("/var/chroot/check", "w");
			fclose($trunc);

			// $check=fopen("/var/chroot/check", "r");
			// if (filesize("/var/chroot/check") == 0)
			// 	echo "<br>The file is empty now. <br>";
			// fclose($check); 

			exec ("diff /var/chroot/out.txt /opt/lampp/htdocs/onj/problems/".$prob_id."/".$in.".out >/var/chroot/check");

			//Correct answer
			if (filesize("/var/chroot/check")==0)
			{
				echo "correct!";
				$sql = "UPDATE files_submitted SET status='0' WHERE id='$id'";
				mysql_query($sql);
				$ans = true;
				//exec ("rm /var/chroot/check");
			}
			else if (readfile("/var/chroot/check")=="TLE!!")
			{
				echo "TLE!!";
				$sql = "UPDATE files_submitted SET status='3' WHERE id='$id'";
				mysql_query($sql);
				$ans = false;
			}
			//Wrong Answer
			else
			{
				echo "Wrong ans";
				$sql = "UPDATE files_submitted SET status='1' WHERE id='$id'";
				mysql_query($sql);
				$ans = false;
				//exec ("rm /var/chroot/check");
			}
		}
	}
}
?>