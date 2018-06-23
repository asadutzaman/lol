<?php
    include_once('operation.inc.php');
    $route  =   new USER();
    if(isset($_POST["assign_submit"])){
        $inser_data =   array(
                'request_id'    =>  $_POST['request_id'],
                'date_time'     =>  date("Y-m-d H:m:s"),
                'car_model'     =>  $_POST['car_model'],
                'drive_licence' =>  $_POST['drive_licence'],
                'driver_phone'  =>  $_POST['driver_phone'],
                'pick_time'     =>  $_POST['pick_time'],
                'est_cost'      =>  $_POST['est_cost']  
            );
            //var_dump($inser_data);
        if ($route->insert('m_request_process', $inser_data)) {
            echo  'done';
            header('location:index.php');
        }
        else {
            echo  'Wrong';
        }
    }
?>