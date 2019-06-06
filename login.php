<?php
	//include"x1.html";
	
	$email_id=$_POST['email_id'];
	$password=$_POST['password'];	
	if(empty($email_id)){
		echo"Email-Id cannot be blank. Please enter again";
		die();
	}
	
	if(empty($password)){
		echo"Password cannot be blank. Please enter again";
		die();	
	}
	
	$con=mysqli_connect('127.0.0.1','root','', 'user');
	if(! $con){
		echo 'Not Connected To Server';
		die();
	}
	$sql = "SELECT * FROM login WHERE Email = ".$email_id." AND Password = ".$password;
	$res = mysqli_query($con,$sql);
	if(mysqli_num_rows($res)<=0) 
	{
		echo 'Sorry!!!Unable to Login. Please enter the details correctly';
	}
	else
	{	
		echo 'Congrats you have been successfully logged in';
	}
	while($row = mysqli_fetch_assoc($res)){
		echo $row["Email"];
	}
	mysqli_close($con);
?>