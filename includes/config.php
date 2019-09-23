<?php
	ob_start();
  	session_start();
	$timezone = date_default_timezone_set("Europe/London");

	$servername = "eu-cdbr-west-02.cleardb.net";

	$username = "bffde41fe21608";

	$password = "6916e9d6";

	$db = "heroku_3a90902f753aa9e";


	 try {

	   $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password, $db);

	   // set the PDO error mode to exception

	   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	   echo "Connected successfully";

	   }

	catch(PDOException $e)

	   {

	   echo "Connection failed: " . $e->getMessage();

	   }

	?>
