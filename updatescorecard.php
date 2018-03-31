<?php
	session_start();

	$ipldb = new mysqli("localhost", "root", "", "ipldb");

	for ($i = 0 ; $i <11 ; $i++) {
		echo $_POST["1".$i."1"];
	}

	// $query1="INSERT INTO scorecard "
	

	// $result1=mysqli_query($ipldb,$query1);
	










?>