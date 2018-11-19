<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login</title>
</head>
<body>
<div class="loginBox">

<img src="images/avatar.png" class="avatar">
<h1>Login here</h1>
<form method="post" action="login.php">
  	<?php include('errors.php'); ?>

<p>Username</p>
<input type="text" name="username" placeholder="Enter Username">
<p>Password</p>
<input type="Password" name="password" placeholder="Enter Password">
<input type="submit" name="login_user" value="Login">
<a href="#">Don't have an account? </a><a href="register.php">Sign Up</a> 

</form>


</div>	


</body>
</html>