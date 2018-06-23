<?php
session_start();
// $id          =  $_SESSION['user'];
// $givenname   =  $_SESSION['givenname'];
// $displayname =  $_SESSION['displayname'];
$id          =  '6575';
$givenname   =  'Nsim';
$displayname =  'Nsim ASmed';
//echo "$id";
//echo "$givenname";
//echo "$displayname";
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

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

<!-- <link href="/digicon/vms/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="/digicon/vms/css/bootstrap.min.js"></script>
<script src="/digicon/vms/css/jquery-1.11.1.min.js"></script> -->
<!-- Include the above in your HEAD tag -->
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
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">

                    <li class="active"><a href="index.php"> <i class="icon-home"></i>Home</a></li>

                    <li><a href="pathmaking.php"><i class="fa fa-road"></i>Path making</a></li>

                    <li><a href="charts.html"> <i class="fa fa-bell"></i>Notification</a></li>
                    

                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-eye"></i>View</a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#setting" aria-expanded="false" data-toggle="collapse"><i class="fa fa-cog"></i>Setting</a>
                      <ul id="setting" class="collapse list-unstyled ">
                        <li><a href="#">Driver</a></li>
                        <li><a href="vehicle.php">vehicle</a></li>
                      </ul>
                    </li>

                  
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
<!--             <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li> -->
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom" id="section" >
            <div class="container-fluid">
              <div class="row bg-white has-shadow">

                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4"></h3>
                    </div>
                    <div class="card-body">
                  <form class="form-horizontal" id="add_me" >
                  
                    <div class="line"></div>
                     <div id="">
                      <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Employee Id </label>
                          <div class="col-md-5">
                            <input type="text" name="employee_id" id="employee_id" class="form-control" value="<?php echo $id ?>" readonly >
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Route Created By </label>
                          <div class="col-md-5">
                            <input type="text"  name="route_created_by" id="route_created_by" class="form-control" value="<?php echo $displayname ?>" readonly >
                          </div>
                       </div>
            
                       <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Route-Id</label>
                          <div class="col-md-5">
                            <input type="text" name="route_id" id="route_id" class="form-control"><span id="route_id"></span>

                          </div>
                       </div>



                      <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Path Name</label>
                        <div class="form-row">
                          <div class="col-md-3 mb-3">
                            <label for="validationCustom03">Start Place</label>
                            <input type="text" class="form-control"  name="path_name1" id="path_name1" placeholder="Enter start place" required>
                            <div class="invalid-feedback">
                              Please provide a valid city.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationCustom04">via Place</label>
                            <input type="text" class="form-control"  name="path_name2" id="path_name2" placeholder="Enter via place" required>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationCustom05">End Place</label>
                            <input type="text" class="form-control" name="path_name3" id="path_name3" placeholder="Enter end place" required>
                            <div class="invalid-feedback">
                              Please provide a valid zip.
                            </div>
                          </div>
                        </div>
                      </div>
                      


                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Route-Name</label>
                          <div class="col-md-5 input_fields_wrap">

                             <input id="mytext" type="text" name="mytext[]" class="form-control">
                          </div>
                          <br>    
                          <!--  <input type="text"  placeholder="Enter Route-Name"  name="mytext[]" class="form-control"> --> 
                          <div class="col-sm-3">
                            <button type="" id="add_field_button" class="btn btn-success"><i class="fa fa-plus-square"></i>Add More Route Name </button>
                          </div>    
                       </div>



                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Request Type</label>
                          <div class="col-md-5 select">
                            <select name="request_type" id="request_type" class="form-control">
                              <option value="0" >Select Request Type</option>
                              <option value="DROP">DROP</option>
                              <option value="PICK">PICK</option>
                               
                            </select>
                          </div>
                        </div>



                       <div class="form-group row" id="pick_time_div" >
                          <label class="col-sm-3 form-control-label">Select Pick Time</label>
                          <div class="col-md-5 select input_fields_wrap_pick ">
                            <select   name="pick_time[]" id="pick_time" class="form-control s">
                              <option value="0">Select Pick Time</option>
                              <option value="6:00AM">6:00AM</option>
                              <option value="7:00AM">7:00AM</option>
                              <option value="10:30PM">10:30PM</option>
                            </select>
                          </div>
                         <div class="col-sm-3">
                            <button type="" id="add_field_button_pick" class="btn btn-success"><i class="fa fa-plus-square"></i>Add More Pick Time </button>
                          </div>  
                      </div>

                       <div class="form-group row" id="drop_time_div" >
                          <label class="col-sm-3 form-control-label">Select Drop Time</label>
                          <div class="col-md-5 select input_fields_wrap_drop ">
                            <select name="drop_time[]" id="drop_time"  class="form-control">
                              <option value="0" >Select Drop Time</option>
                              <option value="10:00PM" >10:00PM</option>
                              <option value="11:00PM">11:00PM</option>
                              <option value="12:30PM">12:30PM</option>
                              <option value="1:30PM">1:30PM</option>
                        
                            </select>
                          </div>

                           <div class="col-sm-3">
                            <button type="" id="add_field_button_drop" class="btn btn-success"><i class="fa fa-plus-square"></i>Add More Drop Time</button>
                           </div>  
                        </div>


                        <div class="line"></div>

                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" id="cancel" class="btn btn-secondary">Cancel</button>
                            <button type="submit" id="save" class="btn btn-primary">Save</button>
                          </div>
                        </div>

                 </form>
              </div>
          </form> 




 
              </div>
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



<script src="js-customize/add_route_button.js" type="text/javascript"></script> <!---add route button increment file-->
<script  src="js-customize/add_pick_time_button.js" type="text/javascript"></script> <!---add pick time button increment file-->
<script  src="js-customize/add_drop_time_button.js" type="text/javascript"></script><!---add drop time button increment file-->
<script src="js-customize/insert.js" type="text/javascript"></script> <!-- path create ajax request file & form Validation  -->



<style type="text/css">
  #pathmakingdiv
  {
    border-left:2px solid #28a745;
    border-right:2px solid #28a745;
    background-color: lightgrey;
    border-radius: 15px;
  }
#section
{
  padding-top: 3px;
}
</style>


