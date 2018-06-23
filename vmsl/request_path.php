<?php
include'database_connection.php';

$agnet_id = $_POST["agent_id"]; 
$p_name = $_POST["p_name"];
$place = $_POST["place"];
$agent_request = $_POST["agent_request"];
$request_pick_time = $_POST["request_pick_time"];
$request_drop_time = $_POST["request_drop_time"];
$start_time = $_POST["start_time"];
$end_time = $_POST["end_time"];
$daycount = $_POST["daycount"];

 $sql="SELECT route_id FROM pathmaking where route_name = '".$route_name ."'";

  $result = $conn->query($sql);
   while ($row = mysqli_fetch_array($result)) {
    $route_id = $row['route_id'];
     
 }

   $sql = "INSERT INTO pathrequest(agent_id,path_name,place,request_type,pick_time,drop_time,start_time,end_time,day_count)VALUES('$agnet_id','$p_name','$place','$agent_request','$request_pick_time','$request_drop_time','$start_time','$end_time','$daycount')";
   

   mysqli_query($conn, $sql);
   echo "Data Inserted Successfully";
 

?>