<?php
	session_start();
	$username="";
	$email="";
	$errors=array();
	$db=mysqli_connect('localhost','root','','reg');
	if(isset($_POST['register'])){
		$username=mysql_real_escape_string($_POST['username']);
		$email=mysql_real_escape_string($_POST['Email']);
		$password_1=mysql_real_escape_string($_POST['password_1']);
		$password_2=mysql_real_escape_string($_POST['password_2']);
		
		if(empty($username)){
			array_push($errors,"Username is required");
		}
		if(empty($email)){
			array_push($errors,"Email is required");
		}
		if(empty($password_1)){
			array_push($errors,"Password is required");
		}
		
		if($password_1 != $password_2){
			array_push($errors,"The two passwords do not match");
		}
		
		if(count($errors)==0){
			$sql="INSERT INTO user(username,email,password) 
					VALUES('$username','$email','password')";
			mysqli_query($db,$sql);
			$_SESSION['username']=$username;
			$_SESSION['success']="You are now logged in";
			header('location:x1.html');

		}
	}
	
	if(isset($_POST['login'])){
		$username=mysql_real_escape_string($_POST['username']);
		$password=mysql_real_escape_string($_POST['password']);
		
		if(empty($username)){
			array_push($errors,"Username is required");
		}
		if(empty($password)){
			array_push($errors,"Password is required");
		}
		if(count($errors)==0){
			$query="SELECT*FROM user WHERE username='$username' AND password='$password'";
			$result=mysqli_query($db,$query);
			if(mysqli_num_rows($result)==1){
				$_SESSION['username']=$username;
				$_SESSION['success']="You are logged in now";
				header('location:x1.html');
			}
			else{
				array_push($errors,"wrong username/password combination");
			}
		}
	}
	
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location:log.php');
	}
?>