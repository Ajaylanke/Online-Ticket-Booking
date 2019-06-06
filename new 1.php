<?php
$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='test1';
	$connect=mysql_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(! $connect){
		die('couldnt connect:'. mysql_error());
	}
	echo 'connected successfully';
	mysql_close($connect);
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$pass=$_POST['pass'];
	if(empty($name)){
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
if($connect->query($sql)===TRUE){
	echo"Thank you";
}else{
	echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn-close();
mysql_close($connect);
echo 'Why no Connected?';
?>