<?php


	session_start();


	$_SESSION["id"] = $_POST["id"];
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["imgurl"] = $_POST["imgurl"];
	

	$mysqli = new mysqli("localhost", "root", "", "complainbox");


	$sql = "SELECT * FROM users WHERE email='".$_POST["email"]."'";
	$result = $mysqli->query($sql);


	if(!empty($result->fetch_assoc())){
		$sql2 = "UPDATE users SET google_id='".$_POST["id"]."' WHERE email='".$_POST["email"]."'";
		$sql2 = "UPDATE users SET imgurl='".$_POST["imgurl"]."' WHERE email='".$_POST["email"]."'";
	}else{
		$sql2 = "INSERT INTO users (name, email, google_id,imgurl) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["id"]."', '".$_POST["imgurl"]."')";
	}


	$mysqli->query($sql2);


	echo "Updated Successful";
?>