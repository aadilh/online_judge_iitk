<?php

//NOT YET WORKING FOR JAVA

//To be made dynamic
$user='sid';
$prob_id = 'sum';
//

//Load "files" database
require("connect_db.php");

//Get name of uploaded file
$name = $_FILES['file']['name'];

//If no file!!
if (empty($name))
	exit ("Please upload a file");

//Get size
$size = $_FILES['file']['size'];

if ($size > 50000)
	exit ("Your source is too large!");


//Get temporary name for location change
$tmpname = $_FILES['file']['tmp_name'];

//Get language of code to compile
$extension = $_POST['lang'];

//Move the file
if (!move_uploaded_file($tmpname, 'users/sid/'.$name))
{
	echo "unable to upload";
	exit(0);
}
else echo "Evaluating...<br>";

date_default_timezone_get();
$date = date('m/d/Y h:i:s a', time());
echo $date;

//Push the file into database.
$query = "INSERT INTO `files_submitted`(`id`, `prob_id`, `file_name`, `lang`, `time`, `status`, `username`) VALUES (NULL, '$prob_id', '$name', '$extension', '$date', '-1', '$user') ";
mysql_query($query);

?>