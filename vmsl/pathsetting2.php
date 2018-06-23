<?php
include'database_connection.php';
session_start();

if (isset($_GET["name"])) {
  //$phpVariableName = $_GET["name"];
  //echo $phpVariableName;
  //print_r (explode("->",$phpVariableName));
  //$p = explode("->",$phpVariableName);

                        
    $sql="SELECT  route_name FROM pathmaking where  path_name='".$_GET["name"]."'";

    $result = $conn->query($sql);

      while ($row = mysqli_fetch_array($result)) 
  {
  
      $phpVariableName =  $row['route_name'];
      //print_r (explode("->",$phpVariableName));
      $p = explode("->",$phpVariableName);
  }



}


$id          =  $_SESSION['user'];
$givenname   =  $_SESSION['givenname'];
$displayname =  $_SESSION['displayname'];
$agentper    =  $_SESSION['agentper'];
$adminper   =  $_SESSION['adminper'];
$adminupper =  $_SESSION['adminupper'];
$admindeper =  $_SESSION['admindeper'];


//$displayname =  $_POST['displayname'];

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['user'])) {


header('Location: index.php');

}
  //$id = $_SESSION["editstatus"];
 $sql="SELECT * FROM agnetbasicinfo where agent_id = '".$id ."'";
// $result1 = mysqli_query("SELECT agent_id FROM agnetbasicinfo WHERE agent_id = '".$id ."'");

 $result = $conn->query($sql);
 while ($row = mysqli_fetch_array($result)) {
    $agent_id = $row['agent_id'];
    echo $agent_id;

 }
 
 



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
    <script src="typeahead.min.js"></script>
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
              echo '<!-- Sidebar Navidation Menus--><span class="heading">Admin</span>
          <ul class="list-unstyled">
              <li class="active"><a href="index.html"> <i class="icon-home"></i>Home</a></li>
              <li><a href="pathmaking.php"> <i class="fa fa-road"></i>Path making</a></li>
              <li><a href="charts.html"> <i class="fa fa-bell"></i>Notification</a></li>
                    
            <li>

              <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-eye"></i>View</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="viewallroute.php">All Route</a></li>
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
                <li><a href="pathsetting.php">Request path setting</a></li>
 
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
<!--           <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header> -->
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom" id="section" >
            <div class="container-fluid">
              <div class="row bg-white has-shadow" id="shadow" > 
                <div class="alert alert-success" id="notice">
                        <strong>Success!</strong> Your information were updated successfully..
                 </div>

                  <table class="table table-hover"  >
                     <br>

                      <thead>
                        <tr>

                          <th>Name</th>
                          <th>User Id</th>
                          <th>Phone</th>
                          <th>Emergency Contact</th>
                          <th>Gender</th>
                          <th>Blood Group</th>
                          <th>Department</th>
                          <th>Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                              <?php
                               $sql="SELECT * FROM agnetbasicinfo where agent_id = '".$id ."'";
                                // $result1 = mysqli_query("SELECT agent_id FROM agnetbasicinfo WHERE agent_id = '".$id ."'");

                                 $result = $conn->query($sql);  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr  class="success" >  
                                    <td><?php echo $row["agent_name"]; ?></td> 
                                    <td>
                                      <?php 
                                      echo $row["agent_id"];
                                      ?>
                                      
                                    </td>  
                                    <td>
                                      <?php 
                                      echo  $row["phone"];
                                      ?>    
                                    </td>
                                    <td>
                                      <?php 
                                      echo  $row["emergency_contact"];
                                      ?>    
                                    </td>  
                                    <td>
                                      <?php 
                                      echo  $row["gender"];
                                      ?>    
                                    </td>  
                                    <td>
                                      <?php 
                                      echo  $row["blood_group"];
                                      ?>    
                                    </td> 
                                    <td>
                                      <?php 
                                      echo  $row["deaprtment"];
                                      ?>    
                                    </td>     
                                    <td>
                                      <?php 
                                      echo  $row["address"];
                                      ?>    
                                    </td>     
    
                               <?php  
                               }  
                               ?>  
                        </tr>
                      </tbody>
                    </table>
   

                  <?php 
                  
                    if(isset($_REQUEST['agent_request'])){

                      $agent_request = $_GET["agent_request"];
                       $_SESSION["agent_request"]= $agent_request;
                        echo'
                          <div class="form-group row" id="agent_request_div">
                          <label class="col-sm-3 form-control-label">Request Type</label>
                          <div class="col-md-5 select">
                          <input type="text" name="agent_request" class="form-control" id="agent_request" value="'.$_SESSION["agent_request"].'">

                           </div>
                         </div>';


                          $sql="SELECT  path_name FROM pathmaking where request_type='".$_GET["agent_request"]."'";

                           $result = $conn->query($sql);
                           echo '<div class="form-group row">
                        <label class="col-sm-3 form-control-label">Select Path Name</label>
                        <div class="col-md-5 select">';

                         echo "<select name='path_name' id='path_name'  class='form-control'>";
                            echo "<option>" .'Select path name'."</option>";
                          while ($row = mysqli_fetch_array($result)) 
                            {
                            
                             echo "<option value='" . $row['path_name'] ."'>" . $row['path_name']."</option>";
                            
                             
                            }
                           
                          echo "</select>";
                          echo '</div>
                      </div>';

                    }


                    else if(isset($_REQUEST['name'])){
                      $pathName = $_GET["name"];
                       $_SESSION["name"]= $pathName;

                       echo'
                          <div class="form-group row" id="agent_request_div">
                          <label class="col-sm-3 form-control-label">Request Type</label>
                          <div class="col-md-5 select">
                          <input type="text" name="" id="agent_request" value="'.$_SESSION["agent_request"].'">

                              </div>
                              </div>';


                             echo'
                          <div class="form-group row" id="path_name">
                          <label class="col-sm-3 form-control-label">Select Path Name</label>
                          <div class="col-md-5 select">
                          <input type="text" name="" id="p_name" value="'.$_SESSION["name"].'">

                     </div>
                    </div>';




                  echo '<div class="form-group row" id="" >
                        <label class="col-sm-3 form-control-label">Select place</label>
                        <div class="col-md-5 select">
                          <select  id="place" class="form-control ">
                          <option>Select place</option>';
                             foreach ($p as $key => $value)
                             {
                             echo'<option value="';echo $value;echo'">'; echo $value; echo '</option>';
                             }
  
                          echo'</select>
                        </div>
                      </div>';

                      if ($_SESSION["agent_request"]=='DROP') {
                     

                      echo ' <div class="form-group row" id="pick_time_div" >
                          <label class="col-sm-3 form-control-label">Select Pick Time</label>
                          <div class="col-md-5 select">
                            <select name="request_pick_time" id="request_pick_time" class="form-control">
                              <option value="0">Select Pick Time</option>
                              <option value="6:00AM">6:00AM</option>
                              <option value="7:00AM">7:00AM</option>
                              <option value="10:30PM">10:30PM</option>
                        
                            </select>
                          </div>
                        </div>';
                         }


                      else{ echo' <div class="form-group row" id="drop_time_div" >
                          <label class="col-sm-3 form-control-label">Select Drop Time</label>
                          <div class="col-md-5 select">
                            <select name="request_drop_time" id="request_drop_time" class="form-control">
                              <option>Select Drop Time</option>
                              <option value="10:00PM">10:00PM</option>
                              <option value="11:00PM">11:00PM</option>
                              <option value="12:30PM">12:30PM</option>
                              <option>1:30PM</option>
                        
                            </select>
                          </div>
                        </div>';
                      }

                      echo'<div class="form-group row" id="clanader_div" >
                          <label class="col-sm-3 form-control-label">Select Date</label>

                          <div class="col-md-5" >
                             <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><input type="date" id="start_time" name="date" value="" class="form-control" ></td>
                                    <td><input type="date" id="end_time" name="date" value="" class="form-control field" ></td>
                                  
                                  </tr>
                                </tbody>
                              </table> 
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submit" id="saved_request_path" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      <div >
                      ';


                    }
                    else{


                       echo'
                          <div class="form-group row" id="agent_request_div">
                          <label class="col-sm-3 form-control-label">Request Type</label>
                          <div class="col-md-5 select">
                              <select  name="agent_request_type" id="agent_request_type" value=""  class="form-control">
                              <option value="0">Select Request Type</option>
                              <option value="DROP">DROP</option>
                              <option value="PICK">PICK</option>
                              </select>
                              </div>
                          </div>';

                    }




                  if (!isset($agent_id)) {
                  
                    echo '<div class="card-body">
                   <h2>Filled up the  basic information</h2>
                   <form class="form-horizontal" id="add_formdata">
                       <div id="">
                       
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Agent Name</label>
                          <div class="col-md-6">
                            <input type="text" id="agent_name" name="agent_name" value=';
                             echo $displayname;
                             echo ' class="form-control">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Agent ID</label>
                          <div class="col-md-6">
                            <input type="text" name="agent_id" id="agent_id" name="agent_id" value=';
                             echo $id;
                             echo ' class="form-control" >
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Phone</label>
                          <div class="col-md-6">
                            <input type="text" id="phone" name="phone" value="" class="form-control">
                          </div>
                        </div>

                        <div class="form-group row" >
                        <label class="col-sm-3 form-control-label">Gender</label>
                          <div class="col-md-6">
                                
                            <div>
                              <input type="radio" name="male" value="male" id="male">
                              <label for="apple">Male</label>
                            </div>
                            <div>
                              <input type="radio" name="female" value="female" id="female">
                              <label for="banana">Female</label>
                            </div>
     
                          </div>
                        </div>
                         



                        <div class="form-group row" >
                          <label class="col-sm-3 form-control-label">Emergency Contact</label>
                          <div class="col-md-6" >
                            <input type="text" name="emergency_contact" id="emergency_contact" value="" class="form-control">
                          </div>
                        </div>

                        <div class="form-group row" >
                          <label class="col-sm-3 form-control-label">Blood Group</label>
                          <div class="col-md-6" >
                            <input type="text" name="blood_group" id="blood_group" value="" class="form-control">
                          </div>
                        </div>

                       <div class="form-group row" >
                        <label class="col-sm-3 form-control-label">Deaprtment</label>    
                         <div class="col-md-6" >
                           <input type="text" name="deaprtment" id="deaprtment" value="" class="form-control" >
                         </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Address</label>
                          <div class="col-sm-6">
                          <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                          </div>
                        </div>
               
                  
                       <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submit" id="saved" onclick="basicinfo()" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                  </div>
                      </form>
               

                </div> ';
                  
                 
                    }
                  ?> 
             
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
       
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <?php
   //echo $_SESSION["agent_request"];
    //echo $_SESSION["path_name"];
    ?>
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
    <script src="js-customize/insert_basic_info.js" type="text/javascript"></script>
   
  </body>
</html>

<script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
});
</script>

 <script type="text/javascript">
    $(document).ready(function(){
     $("#agent_request_type").change(function(){   
      var agent_request_type = $('#agent_request_type').val();

       alert(agent_request_type);
       window.location.href = "resend.php?agent_request=" + agent_request_type;
      });


     $("#path_name").change(function(){    
      var path_name = $('#path_name').val();
      window.location.href = "pathsetting2.php?name=" + path_name;
     });



      $("#saved_request_path").click(function(){     //path request value take form 
        var agent_id = '<?php echo $agent_id; ?>';
        var p_name          = $('#p_name').val();
        var agent_request = $('#agent_request').val();
        var place = $('#place').val();
        var request_pick_time  = $('#request_pick_time').val();
        var request_drop_time  = $('#request_drop_time').val();
        var start_time         = $('#start_time').val();
        var end_time           = $('#end_time').val();

        var date1 = new Date(start_time);
        var date2 = new Date(end_time);
        var timeDiff = Math.abs(date2.getTime() - date1.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
        var daycount = diffDays + 1;

                alert(agent_request);
                alert(agent_id);
                alert(p_name);
                alert(place); 

                alert(request_pick_time);
                alert(request_drop_time);
                alert(start_time);
                alert(end_time);
                alert(daycount);



             $.ajax({                      //request path ajax submit to request_path.php file

                url:"request_path.php",  
                method:"POST",  
                data:{agent_id:agent_id,p_name:p_name,place:place,agent_request:agent_request,request_pick_time:request_pick_time,request_drop_time:request_drop_time,start_time:start_time,end_time:end_time,daycount:daycount},
                success: function(data) {
                  
                }
            });

    

      });

     
});
</script>












<style type="text/css">
  #firstdiv 
{
    border-left:2px solid #117a8b;
    border-right:2px solid #117a8b;
    background-color: lightgrey;
    border-radius: 15px;
}
#seconddiv
{
    border-left:2px solid #117a8b;
    border-right:2px solid #117a8b;
    background-color: lightgrey;
    border-radius: 15px;
}
#shadow
{

}
#section
{
  padding-top: 3px;
  

}

</style>

<script type="text/javascript">
  $(document).ready(function(){
           $("#agent_request_type").change(function(){
             
            var x = $('#agent_request_type').val();

       
            if (x=='DROP') 
            { 
             
               $("#request_pick_time").prop("disabled", true).text('N/A');
        
               
              
            }

            if (x=='PICK')
            {
               $("#request_drop_time").prop("disabled", true).text('N/A');
             
           
            }


    });
  });
</script>
