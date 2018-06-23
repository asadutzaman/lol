<?php

// Inialize session
session_start();
// $agentper          =  $_SESSION['agentper'];
// $adminper   =  $_SESSION['adminper'];
// $adminupper =  $_SESSION['adminupper'];
// $admindeper =  $_SESSION['admindeper'];

$agentper          =  'YES';
$adminper   =  'YES';
$adminupper =  'YES';
$admindeper =  'YES';
$displayname =  'TANNAS';
//$displayname =  $_POST['displayname'];

// Check, if username session is NOT set then this page will jump to login page
// if (!isset($_SESSION['user'])) {


// header('Location: index.php');

// }
  //$id = $_SESSION["editstatus"];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transport Service</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/transport.png">
 





  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand">
                  <div class="brand-text brand-big"><span>VMS </span><strong>Dashboard</strong></div>
                  <div class="brand-text brand-small"><strong>VMS</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">1</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="notifications.html" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a>
                    </li>
<!--                     <li><a rel="nofollow" href="notifications.html" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a>
                    </li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a>
                    </li>
                    <li><a rel="nofollow" href="notifications.html" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a>
                    </li> -->
                    <li><a rel="nofollow" href="notifications.html" class="dropdown-item all-notifications text-center"> <strong>view all notifications     </strong></a>
                    </li>
                  </ul>
                </li>
                <!-- Messages                        -->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">2</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="message.html" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-7.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Md.Nasim Ahmed</h3><span>Sent You Message</span>
                        </div></a></li>
                      <li><a rel="nofollow" href="message.html" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-7.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Md.Nasim Ahmed</h3><span>Whats Wrong with me</span>
                        </div></a></li>
<!--                     <li><a rel="nofollow" href="message.html" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="message.html" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                        </div></a></li> -->
                    <li><a rel="nofollow" href="message.html" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>

                  </ul>
                </li>
                <li class="nav-item"><a href="login.html" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
                 
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-7.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Md.Nasim Ahmed</h1>
              <p>Programmer</p>
            </div>
          </div>

          <?php
            if ($adminper=='YES') {
              echo '          <!-- Sidebar Navidation Menus--><span class="heading">Admin</span>
          <ul class="list-unstyled">
              <li class="active"><a href="index.html"> <i class="icon-home"></i>Home</a></li>
              <li><a href="pathmaking.php"> <i class="fa fa-road"></i>Path making</a></li>
              <li><a href="charts.html"> <i class="fa fa-bell"></i>Notification</a></li>
                    
              <li>
 
                <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-eye"></i>View</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="viewallroute.php">View all path</a></li>
                  <li><a href="viewallrequest.php">View all rquest</a></li>
                  <li><a href="viewalldriver.php">View all driver</a></li>
                  <li><a href="viewallehicle.php">View all vehicle</a></li>
                </ul>
              </li>

              <li>

                <a href="#setting" aria-expanded="false" data-toggle="collapse"><i class="fa fa-cog"></i>Setting</a>
                <ul id="setting" class="collapse list-unstyled ">
                  <li><a href="driver.php">Driver</a></li>
                  <li><a href="vehicle.php">vehicle</a></li>
                  <li><a href="request-process.php">Request Process</a></li>
                </ul>
              </li>
                     
         </ul>';
            }
           ?>

     

           <?php 
        if ($agentper=='YES') {
         echo '<span class="heading">Agent</span>';

       
          echo '<ul class="list-unstyled">
           <li>
             <a href="#Dropdown" aria-expanded="false" data-toggle="collapse"><i class="fa fa-cog"></i>Setting</a>
              <ul id="Dropdown" class="collapse list-unstyled ">
                <li><a href="pathsetting2.php">Request path setting</a></li>
 
              </ul>
              
            </li>
           <li>
             <a href="#view" aria-expanded="false" data-toggle="collapse"><i class="fa fa-eye"></i>view</a>
              <ul id="view" class="collapse list-unstyled ">
                <li><a href="#">View Path</a></li>
              </ul>
              
            </li>
          

          </ul>';
        }
         ?> 
        </nav>


        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">

          <?php 
            if($adminper=='YES') {
              echo '<div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>New<br>Clients</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>25<?php echo $admindeper  ?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Work<br>Orders</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong>70</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>New<br>Invoices</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong>40</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Open<br>Cases</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong>50</strong></div>
                  </div>
                </div>
              </div>
              ';
            }
           ?>

            </div>
          </section>

          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>digicon technologies ltd  &copy; 2018</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by Digicon Application Team</p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>