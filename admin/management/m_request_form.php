<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<?php
    $m_request  =   new USER();

  
    if(isset($_POST["m_request_submit"])){
        
        $route =         $_POST["route"];
        $lastitem   =   end($route);
        $string     =   '';
        
        foreach ($route as $row) {
            $string.=  $row;
            
            if ($row==$lastitem) {
                $string.='';
            }else {
                $string.='->';
            }
        }
        
        
        $inser_data =   array(
                'request_id'    =>  "DG-".rand(),
                'route'         =>  $string,
                'start_date'    =>  $_POST['start_date'],
                'pick_time'     =>  $_POST['pick_time'],
                'pick_location' =>  $_POST['pick_location'],
                'drop_location' =>  $_POST['drop_location'],
                'date_time'     =>  date("Y-m-d H:i:s"),
                'request_by'    =>  $userRow['user_name'],
                'request_for'   =>  $_POST['request_for'],
                'phone'         =>  $_POST['phone'],
                'email'         =>  $_POST['email'],
                'designation'   =>  $_POST['designation'],
                'request_by'    =>  $userRow['user_name']
            );
        if ($execute=$m_request->insert('m_request', $inser_data)) {
            //var_dump($execute);
        }
        else {
            $message    =   'Wrong';
        }
    }



?>

<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Request for Vehicle</h3>
        </div>
        <form action="" role="form" method="post" id="add_name">
            <div class="box-body">
                <!-- Route -->
                <div class="form-group" id="dynamic_field">
                    <label>Route:</label>
                        <div class="input-group" >
                            <div class="input-group-addon">
                                <i class="fa fa-map"></i>
                            </div>
                            <input type="text" name="route[]" placeholder="Enter your Route" class="form-control name_list" />  
                        </div>
                        
                    <!-- /.input group -->
                </div>
                <button type="button" name="add" id="add" class="btn btn-primary">Add More</button>
                <!-- /.form group -->
                <!-- Date and time -->
                <div class="form-group">
                    <label>Date and time:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input name="start_date" type="text" class="form-control pull-right" id="reservationtime">
                        </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <!-- Pickup Time -->
                <div class="bootstrap-timepicker">
                <div class="form-group">
                    <label>Pickup Time:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <input name="pick_time" type="text" class="form-control timepicker pull-right" id="">
                        </div>
                    <!-- /.input group -->
                </div>
                </div>
                <!-- /.form group -->
                <!-- Pickup Location -->
                <div class="form-group">
                    <label>Pickup Location:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <input name="pick_location" type="text" class="form-control pull-right" id="">
                        </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <!-- Final Drop -->
                <div class="form-group">
                    <label>Final Drop:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <input name="drop_location" type="text" class="form-control pull-right" id="">
                        </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <!-- Final Drop -->
                <div class="form-group">
                    <label>Request For:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input name="request_for" type="text" class="form-control pull-right" id="">
                        </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <div class="form-group has-feedback">
                    <label>Phone No:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input name="phone" type="text" class="form-control" data-inputmask='"mask": "(9999) 999-9999"' data-mask>
                        </div>
                </div>
                <!-- Email -->
                <div class="form-group">
                    <label>Email:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input name="email" type="text" class="form-control pull-right" id="">
                        </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <!-- Final Drop -->
                <div class="form-group">
                    <label>Designation:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <input name="designation" type="text" class="form-control pull-right" id="">
                        </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" name="m_request_submit" class="btn btn-primary" value="Submit"  >Create</button>
            </div>
        </form>    
    </div>
    <!-- /.box --
    <!-- iCheck -->
    
    
</div>




<script>  
$(document).ready(function(){  
    var i=1;  
    $('#add').click(function(){  
        i++;  
        $('#dynamic_field').append('</br><div class="input-group"  id="row'+i+'"><div class="input-group-addon"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-xs btn_remove">-</button></div><input type="text" name="route[]" placeholder="Enter your Route" class="form-control name_list" /></div>');  
    });  
    $(document).on('click', '.btn_remove', function(){  
        var button_id = $(this).attr("id");   
        $('#row'+button_id+'').remove();  
    });  
    $('#submit').click(function(){            
        $.ajax({  
            url:"name.php",
            method:"POST",
            data:$('#add_name').serialize(),  
            success:function(data)  
            {  
                alert(data);  
                $('#add_name')[0].reset();  
            }  
        });  
    });  
});  
</script>