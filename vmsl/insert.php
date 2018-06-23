<?php
 
include'database_connection.php';

$created_by_id = $_POST["employee_id"];
$created_by_name = $_POST["route_created_by"];
$route_id = $_POST["route_id"];
$request_type = $_POST["request_type"];


$pick_time = count($_POST["pick_time"]);
$drop_time = count($_POST["drop_time"]);


$path_name1 = $_POST["path_name1"];
$path_name2 = $_POST["path_name2"];
$path_name3 = $_POST["path_name3"];




$path_name = $path_name1."->".$path_name2."->".$path_name3;



$n="";
$number = count($_POST["mytext"]);


if($number > 0)
	
{
 for($i=0; $i<$number; $i++)
 {
  //if(trim($_POST["name"][$i] != ''))
  // {
  $name = $_POST['mytext'][$i];
    if($i==0)
    	{
    		$n = $name;
    	}
   else 
      {
          $n=$n."->".$name;
      }

 } 

}
else
{
 echo "Enter Your Route Name";
}






if($pick_time > 0)
	
{
 for($i=0; $i<$pick_time; $i++)
 {
  //if(trim($_POST["name"][$i] != ''))
  // {
  $name = $_POST['pick_time'][$i];
    if($i==0)
    	{
    		$p=$name;
    	}
   else 
    {
        $p=$p."->".$name;
    }

 } 

}
else
{
 echo "Enter Your Route Name";
}






if($drop_time > 0)
	
{
 for($i=0; $i<$drop_time; $i++)
 {
  //if(trim($_POST["name"][$i] != ''))
  // {
  $name = $_POST['drop_time'][$i];
    if($i==0)
    	{
    		$d=$name;
    	}
   else 
    {
        $d=$d."->".$name;
    }

 } 

}
else
{
 echo "Enter Your Route Name";
}








 //echo $n;

 //$naaa = explode("-",$n);

 //echo $naaa;
/* for ($i=0; $i<$number; $i++) { 
 	echo $naaa[$i]."</br>";
 }*/
   $sql = "INSERT INTO pathmaking(route_id,route_name,path_name,request_type,drop_time,pick_time,created_by_id,created_by_name) VALUES('$route_id','$n','$path_name','$request_type','$d','$p','$created_by_id','$created_by_name')";
   //$sql = "INSERT INTO info(name) VALUES('".mysqli_real_escape_string($conn, $_POST["name"][$i])."')";

   mysqli_query($conn, $sql);
   echo "Data Inserted Successfully";
?>