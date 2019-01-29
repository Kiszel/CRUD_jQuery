<?php
	require_once("connect.php");
	$userid = $_POST["user_id"];
		
		$sql = "DELETE FROM users WHERE user_id = '".$_POST["user_id"]."'";
	echo $conn->query($sql) ? "1" : "0";