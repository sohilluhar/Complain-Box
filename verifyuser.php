<?php

	//verify and login user from gmail
	session_start();

	$_SESSION["id"] = $_POST["id"];
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["imgurl"] = $_POST["imgurl"];	

	$mysqli = new mysqli("localhost", "root", "", "complainbox");

	$sql = "SELECT usertype FROM user WHERE email='".$_POST["email"]."'";
	$res=$res_u=mysqli_query($mysqli,$sql);
	$row=$res->fetch_assoc();
	
	$result = $mysqli->query($sql);
	if($row["usertype"]=="Department")
	{	
		$sql2 = "UPDATE user SET imgurl='".$_POST["imgurl"]."' WHERE email='".$_POST["email"]."'";
		$mysqli->query($sql2);		
		$usertype="Department";
		echo $usertype;//return value to ajax
	}
	else{
		if(!empty($result->fetch_assoc())){
			$sql2 = "UPDATE user SET imgurl='".$_POST["imgurl"]."' WHERE email='".$_POST["email"]."'";
			$usertype="User";
			$mysqli->query($sql2);
			echo $usertype;
		}else{
			$sql2 = "INSERT INTO user (name, email,usertype,imgurl) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', 'User','".$_POST["imgurl"]."')";
			$usertype= "Firstuser";
			$mysqli->query($sql2);			
			echo $usertype;
		}
	}
	
;
?>