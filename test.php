<?php

  include("config/config.php");
  date_default_timezone_set('Asia/Kolkata');

      $datetime = date("Y-m-d H:i:s");
	  echo $datetime;
	  
	   mysqli_query($con,"INSERT into complain(description,complainimg,Departmentname,status,complainant,complainantmail,building,location,complaindate) values('test','','test','Pending','123','sohil.l','ksjce','123','$datetime')");
echo $datetime;
	
?>