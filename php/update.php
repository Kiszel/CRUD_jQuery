<?php
require_once("connect.php");
	$username = $_POST["user_name"];
	$userpass = $_POST["user_password"];
	$useremail = $_POST["user_email"];
	$userid = $_POST["user_id"];
		$sql="UPDATE users SET user_name='$username',user_password='$userpass',user_email='$useremail' WHERE user_id='".$_POST["user_id"]."'";
	echo $conn->query($sql) ? "1" : "0";