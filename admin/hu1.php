    <?php  
 $connect = mysqli_connect("localhost", "asadujjaman", "", "dblogin");  
 $route = $_POST["route"];
 $lastitem = end($route);
 $string ='';
 
 foreach($route as $row){
     $string.=$row;
     if($row==$lastitem){
         $string.='';
     }else{
         $string.='-';
     }
 }
 
 var_dump($string);die;
 
 
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if($_POST["route"][$i] != '')  
           {  
                $sql = "INSERT INTO m_request(route) VALUES('".mysqli_real_escape_string($connect, $_POST["route"][$i])."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";  
      var_dump($number); 
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?>
 
