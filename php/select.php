<?php
	require_once("connect.php");
	$sql = "SELECT * FROM users ";
	$result = $conn->query($sql);
	$tomb;
	while($row = $result->fetch_assoc()) {
        $tomb[] = $row;
    }
    echo json_encode($tomb);
