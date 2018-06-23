<?php  
include'database_connection.php';
                        // $agent_request =$_POST["agent_request"];

                           $sql="SELECT route_name FROM pathmaking where request_type='PICk'";
                            $result = $conn->query($sql);

                          if (isset($_GET['name'])) {
                            $rnam=$_GET['name'];
                            echo "<input name='route_name' id='route_name' class='form-control'";  
                            echo "value='".$rnam."'";
                            echo"class='form-control'>";
                            echo'<br>';
                            echo'<button  class="btn btn-default btn-sm" onclick="myFunction()"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh</button>';
                          }
                          else{
                        
                          echo "<select name='route_name' id='route_name'  class='form-control'>";
                          echo "<option>" .'Select Route Area'."</option>";
                          while ($row = mysqli_fetch_array($result)) {
                          
                          
                          echo "<option value='" . $row['route_name'] ."'>" . $row['route_name']."</option>";
                          }
                          echo "</select>";
                      }
                          echo ' </div>
                      </div>
?>