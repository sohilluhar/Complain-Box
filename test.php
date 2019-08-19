<?php
	session_start();

	
	$name="fbahjsg";
	$details="Carpenter";

	
	$con = new mysqli('localhost', 'root','' ,'complainbox');
		if ($con->connect_error) 
			die("Connection failed: " . $con->connect_error);
	

		$sql="insert into complain (description,Departmentname) values('$details','$name');";
				echo "updating..";
		mysqli_query($con,$sql);
		
	
?>