<?php
	$con=mysqli_connect('127.0.0.1','root','');
	if(!$con){
		echo'Not Connected To Server';
	}
	if(!mysqli_select_db($con,'test1'))
	{
		echo'Database Not Selected';
	}
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Mobile_no=$_POST['mobile_no'];
	$Password=$_POST['password'];
	
	$sql="INSERT INTO user(Name,Email,Mobile_no,Password) VALUES ('$Name','$Email','$Mobile_no','$Password')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo 'Inserted';
	}
	header("refresh:2; url=signup.html")
?>