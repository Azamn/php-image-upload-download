<?php 
session_start();
require_once ('connection.php');
	ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $error='';
     
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
			}else{
				$username = $_POST['username'];
				$password = $_POST['password'];	

				$login = "select * from user where username='$username' and password='$password'";
//				echo $login;
//				die();
				$loginResults = mysqli_query($conn,$login) or die(mysqli_error($conn));
//				echo $login;
//				die();
			//	echo mysqli_num_rows($loginResults);
			//	die();
				if(mysqli_num_rows($loginResults) == 1) {
            		$_SESSION['username'] = $username;

            		header("Location:index.php");
       		 	}
				else{
            			header("Location:login.php?error_msg=invalid_credentials");
        		}
        	}
    	}else{
		header("Location:login.php");
	}
 ?>