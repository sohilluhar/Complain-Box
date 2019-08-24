<?php
	session_start();
	//dashboard of department
	$mysqli = new mysqli("localhost", "root", "", "complainbox");
	$sql = "SELECT name FROM user WHERE email='".$_SESSION["email"]."'";
	$res=$res_u=mysqli_query($mysqli,$sql);
	$row=$res->fetch_assoc();
	$uname=$row["name"];//set name to department name instead of gmail account name
	$_SESSION["name"] =$uname;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="google-signin-client_id" content="1085777605069-2qss1bn1n04qpq0t8ip51o8ulkh1gdte.apps.googleusercontent.com">
</head>
<body>

	<div class="top_bar">
		<div class="logo">
			<a href="index.php">COMPLAIN<strong>BOX</strong></a>
		</div>

		<nav>

			<a href='' class="login_name">
				<?php echo $_SESSION['name'];  ?>
			</a>

			<a href="#">
				<i class="fa fa-home fa-2x"></i>
			</a>
			<a href="#">
				<i class="fa fa-envelope fa-2x"></i>
			</a>
			<a href="#">
				<i class="fa fa-bell fa-2x"></i>
			</a>
			<a href="#">
				<i class="fa fa-info-circle fa-2x"></i>
				
			</a>
			<a href="#">
				<i class="fa fa-cog fa-2x"></i>
			</a>
			<a href="/complainbox/index.php">
				<i class="fa fa-sign-out fa-2x"></i>
			</a>
			
		

		</nav>


	</div>


<!-- profile         -->



<div class="profile_left">
 		<img src="<?php  echo $_SESSION['imgurl'];  ?>">
 		<div class="profile_info">
	 		<strong class="my_name"><?php  echo $_SESSION['name'];  ?></strong>
	 			<div class="profile_buttons">
	 			<button onclick="window.location.href = '/ComplainBox/adddepartment.php';" class="profile_complain_button">Add Department</button>
	 			<button class="profile_complain_button" onclick="window.location.href = '/ComplainBox/admindashboard.php';">Complain</button>
	 			<button class="profile_complain_button "onclick="window.location.href = '/ComplainBox/allcomplain.php'">View All Complain</button>
	 			
	 		</div>
 			

	 		
	 	</div>


	 	</div>

<!-- *******************

<div class="card_list">
	
	<div class="card-columns">
  
 
  <div class="card">
    <img src="assets/pictures/carp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
     <button class='card_button'>
     	Carpentry
     </button>
    
    </div>
  </div>

  <div class="card">
    <img src="assets/pictures/welding.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <button class='card_button'>
     	Carpentry
     </button>
     
    </div>
  </div>

  <div class="card">
    <img src="assets/pictures/carp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <button class='card_button'>
     	Carpentry
     </button>
      
    </div>
  </div>

  <div class="card">
    <img src="assets/pictures/carp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
     <button class='card_button'>
     	Carpentry
     </button>
      
    </div>
  </div>

  <div class="card">
    <img src="assets/pictures/carp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <button class='card_button'>
     	Carpentry
     </button>
      
    </div>
  </div>

  <div class="card">
    <img src="assets/pictures/welding.jpg" class="card-img-top" alt="...">
    <div class="card-body">
     <button class='card_button'>
     	Carpentry
     </button>
     
    </div>
  </div>
  
  
 
 
  






</div>

</div>
-->
   <?php 
	$mysqli = new mysqli("localhost", "root", "", "complainbox");

	$sql = "SELECT * FROM complain ORDER BY Departmentname";
	$result=mysqli_query($mysqli,$sql);
	echo '<h2>Complain of All Department</h2>';
	
	echo '<table border="1" cellspacing="2" cellpadding="2"> 
		  <tr> 
			  <td> <font face="Arial">Id</font> </td> 
			  <td> <font face="Arial">Department Name</font> </td> 
			  <td> <font face="Arial">Details</font> </td> 
			  <td> <font face="Arial">Image</font> </td> 
			  <td> <font face="Arial">Date Time</font> </td> 
			  <td> <font face="Arial">Status</font> </td> 
			  <td> <font face="Arial">Complainant</font> </td> 
			  <td> <font face="Arial">Mail</font> </td> 
			 		
		  </tr>';



	while($row = mysqli_fetch_array($result)){  
	//Creates a loop to dipslay all complain
		echo "<tr><td>".$row['id']."</td>";
		echo "<td>". $row['Departmentname']."</td>";
		echo "<td>". $row['description']."</td>";
		echo "<td><a target='_blank' href='" . $row['complainimg']."'>View Image</a></td>";
		echo "<td>".$row['complaindate']."</td>";
		echo "<td>".$row['status']."</td>"; 
		echo "<td>".$row['complainant']."</td>"; 
		echo "<td>".$row['complainantmail']."</td>"; 
	
	}

?>
</body>
</html>


	
