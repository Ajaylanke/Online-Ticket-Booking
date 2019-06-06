<?php
$user='root';
$pass='';
$db='test1';

$name=$_POST['name'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$pass=$_POST['pass'];

#$conn=mysql_connect('localhost',$user,$pass);
#if(!$conn) {
#die("Connection failed:" . $conn->connect_error);
//}
/*if(empty($name)){
	echo"Name cannot be blank. Please enter again";
	die();
}
if(empty($email)){
	echo"Email-Id cannot be blank. Please enter again";
	die();
}
if(empty($mob)){
	echo"Mobile Number cannot be blank. Please enter again";
	die();
}
if(empty($pass)){
	echo"Password cannot be blank. Please enter again";
	die();
}
$sql="INSERT INTO sign_up(Name,Email,Password,Phone_no)
VALUES('$name','$email','$pass','$mob')";
if($conn-->query($sql)===TRUE){
	echo"Thank you";
}
else{
	echo"Error" . $sql . "<br>" . $conn->error;
}
$conn-close();*/
echo 'Why no Connected?Bro';
?>