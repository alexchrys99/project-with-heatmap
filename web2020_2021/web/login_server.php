<?php
	include_once("connect.php");
	$requestPayload = file_get_contents("php://input");
	$data = json_decode($requestPayload);
	$email = $data->email;
	$pass = $data->pass;
	$result = $mysql_link->query("SELECT * FROM users WHERE email = '".$email."' AND password = '".$pass."'");
	if(mysqli_num_rows($result) != 0){
		$row = $result->fetch_array();
		session_start();
		$_SESSION["user_id"] = $row["id"];
		$_SESSION["email"] = $row["email"];
        $_SESSION["usertype"] = $row["isadmin"];
        $_SESSION["firstname"] = $row["firstname"];
        $_SESSION["lastname"] = $row["lastname"];
	}
	else{
		echo 2;
	}
?>