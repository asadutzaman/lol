<?php
 
include'database_connection.php';

$agent_name = $_POST['agent_name'];
$agent_id = $_POST['agent_id'];
$phone = $_POST['phone'];
$emergency_contact = $_POST['emergency_contact'];
$blood_group = $_POST['blood_group'];
$deaprtment = $_POST['deaprtment'];
$address = $_POST['address'];
$gender = $_POST['gender'];



   $sql = "INSERT INTO agnetbasicinfo(agent_name,agent_id,phone,emergency_contact,blood_group,deaprtment,address,gender )VALUES ('$agent_name','$agent_id','$phone','$emergency_contact','$blood_group','$deaprtment','$address','$gender')";
  
   $insert_query = mysqli_query($conn, $sql);

   
?>
