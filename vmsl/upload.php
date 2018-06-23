<?php
include'database_connection.php';

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

   $image = $_FILES["fileToUpload"]["name"];
	//$driver = $_POST["driver_id"];
	$driver_name = $_POST["driver_name"];
	$driving_license = $_POST["driving_license"];
	$driver_phone = $_POST["driver_phone"];
	$driver_alt_phone = $_POST["driver_alt_phone"];
	$address = $_POST["address"];
	$driver_nid = $_POST["driver_nid"];
	$remarks = $_POST["remarks"];

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        echo $driver_id ;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

 $sql = "SELECT * FROM driver ORDER BY driver_id DESC LIMIT 1";
      $result = $conn->query($sql);

           while ($row = mysqli_fetch_array($result))
           {
             $prefix ="DG-DRIVER";
             $driver_id = $row['driver_id'];
             echo $driver_id.'<br>';
             $pieces = explode("DG-DRIVER", $driver_id);
             $name = $pieces[1] + 1;
             $driver_idd = $prefix.''.$name;
            // echo $name;
 
          



        $sql = "INSERT INTO driver(driver_name,driver_id,driver_licnese ,phone_no,alt_phone,address,nid,remarks,photo) VALUES('$driver_name','$driver_idd','$driving_license','$driver_phone','$driver_alt_phone','$address','$driver_nid','$remarks','$image')";
           //$sql = "INSERT INTO info(name) VALUES('".mysqli_real_escape_string($conn, $_POST["name"][$i])."')";

           mysqli_query($conn, $sql);
           echo "Data Inserted Successfully";
           header('location:driver.php');
             
           }
            





?>
