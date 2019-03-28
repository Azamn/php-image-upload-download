<?php 

require_once ('connection.php');

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "insert into user (username,email,password)values('$username','$email','$password')";

	$insertUser =mysqli_query($conn,$sql);

	if(!$insertUser){
		echo "Something Error while Registration";
		header('location:registration.php') or die(mysqli_error($conn));
	}else{

		echo '<div class="alert alert-success">
                  <strong>Successfully</strong> Registration !.
                </div>';
		header('location:login.php') or die(mysqli_error($conn));
		
	}


 ?>