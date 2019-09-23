<?php
	ob_start();
  session_start();
	$timezone = date_default_timezone_set("Europe/London");

	 $dbhost = 'eu-cdbr-west-02.cleardb.net';
         $dbuser = 'bffde41fe21608';
         $dbpass = '6916e9d6';
	 $dbname = 'heroku_3a90902f753aa9e';

	$con = mysqli_connect("eu-cdbr-west-02.cleardb.net", "bffde41fe21608", "6916e9d6", "heroku_3a90902f753aa9e");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
