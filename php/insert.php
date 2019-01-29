<?php
	require_once("connect.php");
	//$uzenet='';
	$username = $_POST["user_name"];
	$userpass = $_POST["user_password"];
	$useremail = $_POST["user_email"];
	$userid = $_POST["user_id"];
			$sql = "INSERT INTO users (user_id,user_name, user_password, user_email) VALUES ('$userid','$username','$userpass','$useremail')";
	echo $conn->query($sql) ? "1" : "0";
