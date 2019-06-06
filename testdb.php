<?php

	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$connect=mysql_connect($dbhost,$dbuser,$dbpass);

	if(! $connect){
		die('couldnt connect:'. mysql_error());
	}
	echo 'connected successfully';
	mysql_close($connect);
?>