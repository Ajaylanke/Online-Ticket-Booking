<?php
	$con=mysqli_connect('127.0.0.1','root','');
	if(!$con){
		echo'Not Connected To Server';
	}
	if(!mysqli_select_db($con,'user'))
	{
		echo'Database Not Selected';
	}
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Password=$_POST['password'];
	if(empty($Name)){
		echo"Name cannot be blank. Please enter again";
		die();
	}
	
	if(empty($Email)){
		echo"Email-Id cannot be blank. Please enter again";
		die();
	}
	
	if(empty($Password)){
		echo"Password cannot be blank. Please enter again";
		die();
	}
	
	$sql="INSERT INTO signup(Name,Email,Password) VALUES ('$Name','$Email','$Password')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Sorry!!!Unable to Sign up';
	}
	else
	{
		echo 'Congrats you are officially a member of our group';
	}
	header("refresh:2; url=x1.html");
?>