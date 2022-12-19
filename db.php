<?php
	$host    = "localhost";
	$user    = "root";
	$pass    = "Sanjay123$";
	$db_name = "major_project";

	//create connection
	$connection = mysqli_connect($host, $user, $pass, $db_name);

	//test if connection failed
	if(mysqli_connect_errno()){
		die("connection failed: ". mysqli_connect_error(). " (" . mysqli_connect_errno(). ")");
	}
?>