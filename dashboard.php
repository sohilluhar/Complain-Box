<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
</head>
<body>

	<div class="top_bar">
		<div class="logo">
			<a href="index.php">COMPLAIN<strong>BOX</strong></a>
		</div>

		<nav>

			<a href='' class="login_name">
				<?php session_start(); echo $_SESSION['name'];  ?>
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
			<a href="#">
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
	 			<button class="profile_complain_button">Option</button>
	 			<button class="profile_complain_button">Option</button>
	 			<button class="profile_complain_button">Option</button>
	 			<button class="profile_complain_button">Option</button>
	 		</div>
 			

	 		
	 	</div>


	 	</div>

<!-- *******************-->

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



</body>
</html>


	
