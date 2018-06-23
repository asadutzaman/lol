
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<?php
    $m_request  =   new USER();

  
    if(isset($_POST["m_request_submit"])){
        
        $route      =   $_POST["route_name"];
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
                'request_id'    =>  time('Hms')."-".rand(1,5),
                'route_name'    =>  $string,
                'date_start'    =>  $_POST['date_start'],
                'pick_time'     =>  $_POST['pick_time'],
                'pick_palce'    =>  $_POST['pick_palce'],
                'final_drop'    =>  $_POST['final_drop'],
                'date'          =>  date("Y-m-d H:i:s"),
                'requested_for' =>  $_POST['requested_for'],
                'phoneNo'       =>  $_POST['phoneNo'],
                'email'         =>  $_POST['email'],
                'designation'   =>  $_POST['designation']
            );
        if ($execute=$m_request->insert('hod_request', $inser_data)) {
            //var_dump($execute);
        }
        else {
            $message    =   'Wrong';
        }
    }
?>



<div class="container-fluid">
              <div class="row bg-white has-shadow">
      
                   <br>
                    
                    <div class="card-body">
              
                        <form action="" role="form" method="post" id="add_name">
                            <div class="box-body">
                                <!-- Route -->
                                <div class="form-group row" id="dynamic_field">
                                    <label class="col-sm-3 form-control-label">Route:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="route_name[]" type="text" class="form-control pull-right" id="">
                                        </div>
                                        <div class="col-sm-3">
                                            <button type="button" name="add" id="add" class="btn btn-primary">Add More</button>
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Date:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="date_start" type="date" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="bootstrap-timepicker">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Pick Time:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="pick_time" type="time" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Pickup Location:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="pick_palce" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Final Drop:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="final_drop" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Request For:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="requested_for" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Phone No:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="phoneNo" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Email:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="email" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Designation:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="designation" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                
                            </div>
                            <!-- /.box-body -->
                            <div class="line"></div>
                            <br> <br>
                            <div class="box-footer">
                                <button type="submit" name="m_request_submit" class="btn btn-primary" value="Submit" onclick="location.href = 'hm_req.php';" >Request</button>
                            </div>
                        </form>

              </div>
            </div>
          </div>





<script>  
$(document).ready(function(){  
    var i=1;  
    $('#add').click(function(){  
        i++;  
        $('#dynamic_field').append('<div class="form-group row" id="row'+i+'"><label class="col-sm-5 form-control-label">Route:</label><div class="col-md-6 select input_fields_wrap_drop"><input type="text" name="route_name[]" placeholder="Enter your Route" class="form-control name_list" /></div><div class="col-sm-1"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-xs btn_remove">-</button></div></div>');  
    });  
    $(document).on('click', '.btn_remove', function(){  
        var button_id = $(this).attr("id");   
        $('#row'+button_id+'').remove();  
    });  
    $('#submit').click(function(){            
        $.ajax({  
            url:"hm_req.php",
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