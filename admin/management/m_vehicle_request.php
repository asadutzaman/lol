<?php

	require_once("session.php");
	
	include_once('operation.inc.php');
	$auth_user = new USER();
	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<?php
    $m_request  =   new USER();
    if(isset($_POST["route_submit"])){
        $inser_data =   array(
                'route_id'      =>  $_POST['route_id'],
                'created_date'  =>  date("Y-m-d"),
                'route'         =>  $_POST['route'],
                'created_by'    =>  $userRow['user_name']
            );
            //var_dump($inser_data);
        if ($m_request->insert('route', $inser_data)) {
            $message    =   'done';
        }
        else {
            $message    =   'Wrong';
        }
    }
?>


<div class="col-md-6">
    <div class="modal-body">
        <!--/////////////////////////////////-->
        <!-- Create route form elements -->
        
            <div class="box box-primary">
                
                <!-- /.box-header -->
                <!-- form start -->
                <form action="" role="form" method="post">
                    <div class="box-body">
                        <?php echo $message; ?>
                        <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Route </label>
                            <input type="name" name="route_id" class="form-control" id="exampleInputEmail1" placeholder="Route Name">
                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>Date and time range:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="reservationtime">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group has-feedback">
                            <label for="exampleInputPassword1">End time</label>
                            <input type="text" name="route" class="form-control" id="exampleInputPassword1" placeholder="Routes">
                            <span class="glyphicon glyphicon-road form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="exampleInputPassword1">Pickup Location</label>
                            <input type="text" name="route" class="form-control" id="exampleInputPassword1" placeholder="Routes">
                            <span class="glyphicon glyphicon-road form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="exampleInputPassword1">Drop Location</label>
                            <input type="text" name="route" class="form-control" id="exampleInputPassword1" placeholder="Routes">
                            <span class="glyphicon glyphicon-road form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="exampleInputPassword1">Date</label>
                            <input type="text" name="route" class="form-control" id="exampleInputPassword1" placeholder="Routes">
                            <span class="glyphicon glyphicon-road form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- /.box-body -->   
                    <div class="box-footer">
                        <button type="submit" name="route_submit" class="btn btn-primary" value="Submit"  >Create</button>
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
           
        <!-- /.box -->
        <!--/////////////////////////////////-->
    </div>
</div>


<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Create a New Route</h4>
            </div>
            <div class="modal-body">
                <!--/////////////////////////////////-->
                <!-- Create route form elements -->
                
                    <div class="box box-primary">
                        
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form action="" role="form" method="post">
                            <div class="box-body">
                                <?php echo $message; ?>
                                <div class="form-group has-feedback">
                                    <label for="exampleInputEmail1">Route Name</label>
                                    <input type="name" name="route_id" class="form-control" id="exampleInputEmail1" placeholder="Route Name">
                                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="exampleInputPassword1">Routes</label>
                                    <input type="text" name="route" class="form-control" id="exampleInputPassword1" placeholder="Routes">
                                    <span class="glyphicon glyphicon-road form-control-feedback"></span>
                                </div>
                            </div>
                            <!-- /.box-body -->   
                            <div class="box-footer">
                                <button type="submit" name="route_submit" class="btn btn-primary" value="Submit"  >Create</button>
                                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                   
                <!-- /.box -->
                <!--/////////////////////////////////-->
            </div>
            <div class="modal-footer">
              
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
