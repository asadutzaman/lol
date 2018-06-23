<?php
include'database_connection.php';

if(isset($_POST["submit"])) {

$targetfolder = "testupload/";

$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
$file_name = $_FILES['file']['name'];

$ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }

 else
{
echo "Problem uploading file";
}

}

else {

      echo "You may only upload PDFs, JPEGs or GIF files.<br>";

    }
    
	$car_id = $_POST["car_id"];
	$license = $_POST["license"];
	$vendor = $_POST["vendor"];
	$mynumber = $_POST["mynumber"];
	$remarks = $_POST["remarks"];
 }
   

   $sql = "INSERT INTO vehicle(car_id,license,vendor_name,seat_capacity,Remarks,file) VALUES('$car_id','$license','$vendor','$mynumber','$remarks','$file_name')";
   //$sql = "INSERT INTO info(name) VALUES('".mysqli_real_escape_string($conn, $_POST["name"][$i])."')";

   mysqli_query($conn, $sql);
   echo "Data Inserted Successfully";

  
?>
