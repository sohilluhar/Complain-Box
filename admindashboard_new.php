<?php
    include("config/config.php");
    //dashboard of admin
    if(!isset($_SESSION['name'])){
   
        header("Location: index.php");
        exit();
    }
	else{
		 $sql = "SELECT usertype FROM user WHERE email='".$_SESSION["email"]."'";
    $res=mysqli_query($con,$sql);
	$row=$res->fetch_assoc();
	
	if( $row['usertype']!='admin' )
    {
		if($row['usertype']=='User'){
		header("Location: dashboard.php");
        exit();
		}
		else if($row['usertype']=='Department'){
		header("Location: depthome.php");
        exit();

			
		}
	}
	
	}
    $sql = "SELECT name FROM user WHERE email='".$_SESSION["email"]."'";
    $res=$res_u=mysqli_query($con,$sql);
    $row=$res->fetch_assoc();
    $uname=$row["name"];//set name to department name instead of gmail account name
    $_SESSION["name"] =$uname;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard | Complain Box
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />


</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-3.jpg">
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
                  <h5 class="card-title">   <?php echo $_SESSION['name'];  ?></h5>
                 
                </div>
        </li>
        
        
         <li class="nav-item active ">
            <a class="nav-link" href="./admindashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
      <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">person</i>
              <p>My Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./allcomplain.php">
              <i class="material-icons">content_paste</i>
              <p>View All Complain</p>
            </a>
          </li>
            <li class="nav-item ">
            <a class="nav-link" href="./adddepartment.php">
              <i class="material-icons">group_add</i>
              <p>Add department</p>
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
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
         
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          
         </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Used Space</p>
                  <h3 class="card-title">49/50
                    <small>GB</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="#pablo">Get More Space...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Revenue</p>
                  <h3 class="card-title">$34,245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Fixed Issues</p>
                  <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Github
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">Followers</p>
                  <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  <br/>
		<div class="row">
             <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                <h4 class="card-title">Select department to view complains </h4>
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                            
                      <ul class="nav nav-tabs" data-tabs="tabs">
                          
                        <?php
    

    $sql = "SELECT * FROM department ";
    $result=mysqli_query($con,$sql);
        //display all department
        while($row = mysqli_fetch_array($result)){ 
                $dptname=$row['dname'];
        
        
        
        
              echo'<li class="nav-item">';
              echo"<a class='nav-link ";
			  if($row['id']==1)
				  echo ' active';
			  echo"' href='#".$row['dname']."' data-toggle='tab'>";
               echo'    <i class="material-icons">portrait</i>';
               echo   $row['dname'];
               echo'             <div class="ripple-container"></div>
                          </a>
                        </li>';
        
        }
        
         
?>

                      
                      
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
 <?php 
                        
            $sql = "SELECT * FROM department ";
			$result=mysqli_query($con,$sql);
           //display all department
			while($row = mysqli_fetch_array($result)){ 
                                
                  $sql1 = "SELECT * FROM complain WHERE Departmentname='".$row['dname']."'";
                    $result1=mysqli_query($con,$sql1);
					
					$pendingcomp=mysqli_num_rows(mysqli_query($con,"SELECT * FROM complain WHERE Departmentname='".$row['dname']."' AND status='Pending'"));
					
					$solvedcomp=mysqli_num_rows(mysqli_query($con,"SELECT * FROM complain WHERE Departmentname='".$row['dname']."' AND status='Solved'"));
					
					$inprogresscomp=mysqli_num_rows(mysqli_query($con,"SELECT * FROM complain WHERE Departmentname='".$row['dname']."' AND status='Inprogress'"));
					
					
               echo  "<div class='tab-pane";
			   			  if($row['id']==1)
				  echo ' active';
			   echo "' id='".$row['dname']."'>";
			   
			   echo '<div class="row">';
			   	  echo '     <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header ">';
		
				echo '		</br>
		
                  <p class="card-category text-center">Total complain</p>
                  
                  <h3 class="card-title text-center" name="'.$row["dname"].'">'.mysqli_num_rows($result1).'</h3>									  
				</br>
				
				</div>
              </div>
            </div>';
			
			 	  echo '     <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header ">';
		
				echo '		</br>
		
                  <p class="card-category text-center">Pending complain</p>
                  
                  <h3 class="card-title text-center">'.$pendingcomp.'</h3>									  
				</br>
				
				</div>
              </div>
            </div>';
			
			
			
			
			 	  echo '     <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header ">';
		
				echo '		</br>
		
                  <p class="card-category text-center">Inprogress complain</p>
                  
                  <h3 class="card-title text-center">'.$inprogresscomp.'</h3>									  
				</br>
				
				</div>
              </div>
            </div>';
			
					 	  echo '     <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header ">';
		
				echo '		</br>
		
                  <p class="card-category text-center">Solved complain</p>
                  
                  <h3 class="card-title text-center">'.$solvedcomp.'</h3>									  
				</br>
				
				</div>
              </div>
            </div>';
			
			
			
			   echo '</div>';//close raw
			   
			   
			   
			   
			   
			   
			   
			   
			   
                echo '   <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-primary">
                        <th>ID</th>               
						<th>Detail</th>
						<th>Document</th>  
						<th>Date Time</th>                        
						<th>Status</th>                    
					<!--	<th>Complainant</th>  
						<th>Mail</th>-->
						<th>View</th>
                    </thead> <tbody>';
					
                    
                        
						while($row = mysqli_fetch_array($result1)){  
							//Creates a loop to dipslay all complain
							echo "<tr><td>".$row['id']."</td>";
							echo "<td>". $row['description']."</td>";
							echo "<td><a class='text-primary text-center'";
							if($row['complainimg'])
								echo "target='_blank' href='".$row['complainimg']."'>View";
							else
								echo " >---";
							
							echo "</a></td>";
							echo "<td>".$row['complaindate']."</td>";
							echo "<td>".$row['status']."</td>"; 
							
							//echo "<td>".$row['complainant']."</td>"; 
							//echo "<td>".$row['complainantmail']."</td>"; 
							echo '<td><button type="button" class="btn btn-primary btn-round" onclick="#">View Detail</button></td>'; 
	
						}
                   
                   echo'
                    </tbody>
                  </table>
                </div>
                   </div> ';
        }
                   
?>
                   
                   
                   
                   
                   
                   
                  </div>  
                
                </div>
              </div>
            </div>
           


        
            <div id='testing' style="display: none">
            <h1 id="test" value="he">He</h1>
            </div>
     </div>
     
      </div>
<?php
include("footer.php");
?>
    </div>
  </div>
  <!--   Core JS Files   -->
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
 
 <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>

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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>
