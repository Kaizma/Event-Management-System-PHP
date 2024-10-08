<?php
	$servername ="127.0.0.1";
	$username ="root";
	$password ="";
	$db = "partyway";


	//Database Connection
	$conn = mysqli_connect($servername, $username, $password, $db);

	//check connection 

	if($conn->connect_error)
	{
		die("connection failed: ".$conn->connect_error);
	}
	else{
		//echo"Connected Successfull";
	}
	
?>
