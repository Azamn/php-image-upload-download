<?php 

	
	$host = "localhost";
	$user = "root";
	$password = "root";
	$dbname = "project";


	$conn=mysqli_connect($host,$user,$password,$dbname);
	if(!$conn){
		die($conn);
	}else

	// echo "connection established Succesfully";


 ?>