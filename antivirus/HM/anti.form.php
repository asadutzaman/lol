<?php
    $m_request  =   new USER();

  
    if(isset($_POST["anti_submit"])){
         
        $inser_data =   array(
                'time'      =>  date("Y-m-d H:i:s"),
                'hostname'  =>  $_POST['hostname'],
                'deskno'    =>  $_POST['deskno'],
                'mac'       =>  $_POST['mac'],
                'process'   =>  $_POST['process'],
                'location'  =>  $_POST['location'],
                'status'    =>  $_POST['status']
            );
        if ($execute=$m_request->insert('antivirus', $inser_data)) {
            //var_dump($execute);
            ob_start();
            header('Location: index.php');
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
                        <b><h2>::Antivirus::</h2></b>
              
                        <form action="" role="form" method="post" id="add_name">
                            <div class="box-body">
                                <!-- Route -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">location</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="location" id="exampleRadios1" value="RTC" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    RTC
                                                </label>
                                        </div>&nbsp &nbsp &nbsp
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="location" id="exampleRadios2" value="JHTP">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    JHTP
                                                </label>
                                        </div>
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 select form-control-label">Process:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="process" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Desk No:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="deskno" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Hostname:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="hostname" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">MAC Address:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="mac" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Antivirus</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="yes" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    YES
                                                </label>
                                        </div>&nbsp &nbsp &nbsp
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="no">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    NO
                                                </label>
                                        </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="line"></div>
                            <br> <br>
                            <div class="box-footer">
                                <button type="submit" name="anti_submit" class="btn btn-primary" value="Submit" onclick="location.href = 'www.google.com';" >Submit</button>
                            </div>
                        </form>

              </div>
            </div>
          </div>