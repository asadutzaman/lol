<?php
include'database_connection.php';
 $sql = "SELECT * FROM driver ORDER BY driver_id DESC LIMIT 1";
      $result = $conn->query($sql);

           while ($row = mysqli_fetch_array($result))
           {
             $prefix ="DG-DRIVER";
             $driver_id = $row['driver_id'];
             echo $driver_id.'<br>';
             $pieces = explode("DG-DRIVER", $driver_id);
             $name = $pieces[1] + 1;
            // echo $name;
 

             
           }
?>