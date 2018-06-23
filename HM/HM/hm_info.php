<?php
    $m_request  =   new USER();

  
    if(isset($_POST["hm_info"])){
         
        $inser_data =   array(
                'date'              =>  date("Y-m-d H:i:s"),
                'name'              =>  $_POST['displayname'],
                'ntid'              =>  $_POST['ntid'],
                'phoneNo'           =>  $_POST['phoneNo'],
                'emargency_contact' =>  $_POST['emargency_contact'],
                'email'             =>  $_POST['email'],
                'designation'       =>  $_POST['designation']                
            );
        if ($execute=$m_request->insert('hm_info', $inser_data)) {
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
                        Give your information for the first time only
              
                        <form action="" role="form" method="post" id="add_name">
                            <div class="box-body">
                                <!-- Route -->
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
                                    <label class="col-sm-3 form-control-label">Emargency contact No:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="emargency_contact" type="text" class="form-control pull-right" id="">
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
                                <button type="submit" name="hm_info" class="btn btn-primary" value="Submit" onclick="location.href = 'hm_.php';" >Request</button>
                            </div>
                        </form>

              </div>
            </div>
          </div>