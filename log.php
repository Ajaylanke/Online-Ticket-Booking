<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="fresh-minimalist-minimalistic-space-abstract-outer.jpg">
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="log.php">
		<?php include('errors.php');?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div> 
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
			<a href="x1.html"></a>
		</div>
		<p>
		Not a Member?<a href="register.php">Sign Up</a>
		</p>
	</form>
</body>
</html>