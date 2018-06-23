<?php
    $conn =   new PDO('mysql:host=localhost;dbname=dblogin',"asadujjaman","");
    
        if (isset($_POST['assign_submit'])) {
        $request_id =   $_POST['request_id'];
        $car_model  =   $_POST['car_model'];
        
        $query  ="INSERT INTO m_request_process (request_id, car_model) VALUES(:request_id, :car_model)";
        
        $pdoresult   =   $conn->prepare($query);
        $pdoresult  ->  bindValue(':request_id',$request_id);
        $pdoresult  ->  bindValue(':car_model',$car_model);
        
        //var_dump($query);
        
        if($pdoresult->execute() == TRUE){
            echo 'success';
            
        }
        else {
            echo 'something wrong';
        }
    }

?>