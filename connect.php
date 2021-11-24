<?php
	
	$hs= "localhost";
	$us= "root";
	$ps= "";
	
	$mysqlconnect = mysqli_connect("$hs","$us","$ps");
	if($mysqlconnect === false){
		die("my sql is not connected");
	}else{
		//mysqli_select_db(register);
		echo("mysql is connected");
	}
	
	
?>


