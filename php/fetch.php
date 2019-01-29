<?php
require_once("connect.php");
if(isset($_POST["user_id"]))
{
	$query="SELECT * FROM users WHERE user_id = '".$_POST["user_id"]."'";
	$result =mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}
