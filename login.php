<!-- <?php include('server.php') ?> -->
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form action="loginProcess.php" method="post">
  	<!-- <?php include('errors.php'); ?> -->
  	<div class="input-group">
  		<label>Username</label>
			<input type="text" name="username" placeholder="Enter Username" Required="required" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter password" Required="required">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="submit">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="registration.php">Sign up</a>
  	</p>
  </form>
</body>
</html>