<?php
  include("config/config.php");
	
	//dashboard of department
	$mysqli = new mysqli("localhost", "root", "", "complainbox");
	$sql = "SELECT name FROM user WHERE email='".$_SESSION["email"]."'";
	$res=$res_u=mysqli_query($mysqli,$sql);
	$row=$res->fetch_assoc();
	$uname=$row["name"];//set name to department name instead of gmail account name
	$_SESSION["name"] =$uname;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>

  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Complain Box
        </a>
      </div>
	  
	  
      <div class="sidebar-wrapper">
        <ul class="nav">

		<li class="nav-item">
			<br/>
			<div class="card-profile">
                <div class="card-avatar">
                
                    <img class="img" src="<?php  echo $_SESSION['imgurl'];  ?>" />
                
                </div>
	               <div class="card-body">
                  <h5 class="card-title">	<?php echo $_SESSION['name'];  ?></h5>
                 
                </div>
		</li>
		
		
         <li class="nav-item active ">
            <a class="nav-link" href="#">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
     
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">content_paste</i>
              <p>View Complain</p>
            </a>
          </li>
		
          <li class="nav-item ">
            <a class="nav-link" href="./logout.php">
              <i class="material-icons">arrow_back</i>
              <p>Logout</p>
            </a>
          </li>
     
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
    <!--  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " style="margin-top: 0px;">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
         
           
          <div class="collapse navbar-collapse justify-content-end">
        
            <ul class="navbar-nav">
            
         
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">User Name</a>
                
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>-->
      <!-- End Navbar -->


      <?php
      if(!isset($_GET['id'])){

      echo '<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " style="margin-top: 0px;">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
         
           
          <div class="collapse navbar-collapse justify-content-end">
        
            <ul class="navbar-nav">
            
         
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">User Name</a>
                
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="content" id="complainDetail">
        <div class="container-fluid">
          <div class="row">
			
				<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "><?php echo $_SESSION["name"];  ?></h4>
                  <p class="card-category"> List of complain </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Detail
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Date Time
                        </th>
                        <th>
                          Status
                        </th>
						<th>
                          Complainant
                        </th>
						<th>
                          Mail
                        </th>
						<th>
                          Action
                        </th>
                      </thead>
                      <tbody>';
					   
						$mysqli = new mysqli("localhost", "root", "", "complainbox");


						$sql = "SELECT * FROM complain WHERE Departmentname='".$_SESSION['name']."'";
						$result=mysqli_query($mysqli,$sql);
            while($row = mysqli_fetch_array($result)){  
	//Creates a loop to dipslay all complain
		echo "<tr><td>".$row['id']."</td>";
		echo "<td>". $row['description']."</td>";
		echo "<td><a target='_blank' href='" . $row['complainimg']."'>View Image</a></td>";
		echo "<td>".$row['complaindate']."</td>";
		echo "<td>".$row['status']."</td>"; 
		echo "<td>".$row['complainant']."</td>"; 
		echo "<td>".$row['complainantmail']."</td>"; 
		echo '<td><button type="button" class="btn btn-primary btn-round" name="'.$row['id'].'" onclick="takeAction(event)">Take Action!</button></td></tr>'; 
	   }
					
                     echo '</tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
     </div>
	 
      </div>
    <!--  <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="#" target="_blank">Complain box</a>
          </div>
        </div>
      </footer>-->
    </div>';

}
?>
    <!----     action form   ---->


<?php 

  if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query=mysqli_query($con, "SELECT * FROM complain WHERE id='$id'");
    $fetch = mysqli_fetch_array($query);
    $building = $fetch['building'];
    $location = $fetch['location'];
    $description = $fetch['description'];
    $upload_img  = $fetch['complainimg'];

    if(empty($upload_img)){
      $upload="";
    }else{
      $upload='<div class="text-center" style="float:right;">
                  <img src="'.$upload_img.'" class="rounded" alt="...">
                </div>';
    }
      
      //echo $a;

      echo '<div class="row" id="complain">  

              
      <div class="col-md-8 offset-md-2">
              <div class="card" id="dept_card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title" id="complain_card"></h4>
                  <p class="card-category">Complain Form</p>
                </div>
                <div class="card-body">
                  <form action="" enctype="multipart/form-data" style="margin-top: -40px;" method="POST">

                    <div class="form-group" id="building_input" style="">
                      <label for="exampleFormControlInput1"  style="font-size:20px" >Building:</label><br>
                      <input type="text" class="form-control" value="'.$building.'" id="Building"  readonly>
                    </div>    
                    <div class="form-group" >
                      <label for="exampleFormControlInput1"  style="font-size:20px">Location:</label><br>
                      <input type="text" class="form-control"  value="'.$location.'" id="location"  readonly>
                    </div>

                     <div class="form-group">
                      
            
            
                            <label class="bmd-label-floating" style="font-size:20px">Complain description</label><br>
                    <textarea class="form-control" name="complain_body" rows="5" id="complain_message" readonly>'.$description.'</textarea>
            
                      </div>';

                       
                          echo $upload;

                          $date=date("m-d-Y");

                         
                          $parts = explode('-', $date);
                          $date=$parts[2]. '-' . $parts[0] . '-' . $parts[1]  ;
                          

                          echo '
                    <form action="" method="POST">
                    <br>
                   <div>
                   <label for="start" style="font-size:20px">Specify The Time Constraints:</label><br>

                      <input type="date" id="start" name="timer"
                             value="'.$date.'" required>

                              </div>
                    <input type="submit" class="btn btn-secondary"  name="forward_admin" style="margin-top: 47px;color: #fff;background: #9c27b0;" value="Forward">
                       
                     
                      
                     


                      
                          <div class="dropdown" style="float:left;">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        STATUS
                      </a>

                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
                        <li class="dropdown-item" id="item1" name="pending" href="#">PENDING</li>
                        <li class="dropdown-item" id="item2" name="inprogress" href="#">INPROGRESS</li>
                        <li class="dropdown-item" id="item3" name="resolved" href="#">RESOLVED</li>
                      </ul>
                    </div>
                      <input type="submit" name="reg_complain" class="btn btn-primary btn-block" value="Complain Registered">
                    </form>';
                        

                      echo '<div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          
      
          </div>';
    
          echo '<a href="depthome.php" class="btn btn-primary" style="margin:-100px 0px 0px 40px; color: #fff"> BACK</a>';



    }




if(isset($_POST['reg_complain'])){

  if(isset($_COOKIE['status'])){
    $status=$_COOKIE['status'];
  }else{
    $status="PENDING";
  }

  $timer = $_POST['timer'];

  $query= mysqli_query($con,"UPDATE complain SET status='$status' , time_constraint='$timer' WHERE id='$id'");

  header("Location:depthome.php");

  }



?>






<?php 

/*if(isset($_POST['pending'])){
  header("Location: dashboard.php");
}*/

 ?>


<!----end of complain-->




  </div>
  <!--   Core JS Files 

margin-top: 34px;
    left: -119px;
    color: #fff;
    background: #9c27b0;


    -->





  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>


    <script>
/*  $("li").click(function(){
    alert("j");
    var val=$(this).text();
    $("#dropdownMenuLink").text("STATUS: "+$(this).text());
    $.ajax(function(){
      type:"POST",
      url:"status_update.php",
      data:"status="+val+"&id=<?php //echo $_GET['id']?>"
    }).done(function(){
      window.open("depthome.php?id="+<?php //echo $_GET['id']?>,"_self");
    });



    });
  */

</script>




  <script>
  
  function doSomething(a) {
    var x = document.getElementById("testing");
    var y = document.getElementById("test");
  //if (x.style.display === "none") {
	y.innerHTML  = a;
    //x.style.display = "block";
	console.log(a);
   // alert('Form submitted!'+a);
    return false;
}
  
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>

  <?php 
  


   ?>



  <script>

    function takeAction(event){

       // var building = document.getElementById('building');
       // var location = document.getElementById('location');
       // var msg = document.getElementById('complain_message');
        var id= event.target.name;

        window.open("depthome.php?id="+id,"_self");





    }


    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>








      <?php 

      if (isset($_POST['forward_admin'])) {
         $query = mysqli_query($con,"SELECT email from user WHERE usertype='admin'");
        $row = mysqli_fetch_array($query);
        $mail_to = $row['email'];

        echo  '<script>
        $.ajax({              
                url:"complain_submit_ajax.php",
                type:"POST",
               
                data:"id='.$id.'&mail_to='.$mail_to.'",
                cache:false,

              
            }).done(function(data){
                console.log(data);
                window.location.href = "depthome.php";

            }).fail(function() { 
                alert( "Login with Somaiya mail" );
            });
            </script>';
            //header("Location: depthome.php");
      }

       

       ?>

      
      

    

  <script>

  $("li").click(function(){
    
    var val=$(this).text();
    $("#dropdownMenuLink").text("STATUS: "+$(this).text());
   
    document.cookie = "status=" + $(this).text();
   /* $.ajax({
      type: "POST",
      url: "status_update.php",
      data:"status="+val+"&id=<?php //echo $_GET['id']?>"
    }).done(function(){
      window.open("depthome.php","_self");
    });

*/

    });
  
  
</script>





</body>

</html>
