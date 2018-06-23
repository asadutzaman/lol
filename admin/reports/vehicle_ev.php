<?php
    $vehicle  =   new USER();
    if(isset($_POST["driver_submit"])){
        $inser_data =   array(
                'driver_id'             =>  $_POST['driver_id'],
                'driver_name'           =>  $_POST['driver_name'],
                'driving_licence_no'    =>  $_POST['driving_licence_no'],
                'driver_phone'          =>  $_POST['driver_phone'],
                'driver_address'        =>  $_POST['driver_address'],
                'driver_created_by'     =>  $userRow['user_name'],
                'driver_create_date'    =>  date("Y-m-d H:i:s")
            );
            //var_dump($inser_data);
        if ($vehicle->insert('vehicl', $inser_data)) {
            $message    =   'done';
        }
        else {
            $message    =   'Wrong';
        }
    }
?>




<div class="modal modal-primary fade" id="modal-primary">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Create New Driver</h4>
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
                                    <label for="exampleInputEmail1">Driver Name</label>
                                    <input type="name" name="driver_name" class="form-control" id="exampleInputEmail1" placeholder="Driver Name">
                                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="exampleInputPassword1">Driving Licence No</label>
                                    <input type="text" name="driving_licence_no" class="form-control" id="exampleInputPassword1" placeholder="Driving Licence No">
                                    <span class="glyphicon glyphicon-road form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="exampleInputEmail1">Driver Phone</label>
                                    <input type="name" name="driver_phone" class="form-control" id="exampleInputEmail1" placeholder="Driver Phone">
                                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="exampleInputEmail1">Driver Home address</label>
                                    <input type="name" name="driver_address" class="form-control" id="exampleInputEmail1" placeholder="Driver Home address">
                                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                </div>
                            </div>
                            <!-- /.box-body -->   
                            <div class="box-footer">
                                <button type="submit" name="driver_submit" class="btn btn-primary" value="Submit"  >Create</button>
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

<div class="col-md-6">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Driver Table</h3>
            <button type="button" class="btn btn-defaul pull-right" data-toggle="modal" data-target="#modal-primary">
                Create New Driver
            </button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
			        <th>#</th>
			        <th>Name</th>
			        <th>Driving Licence</th>
			        <th>Phone</th>
			        <th>Address</th>
			        <th>Created BY</th>
			        <th>Created date</th>
			    </tr>
			    <?php
			    	$data	=	new	USER();
			        $values = $data->select('driver', '	driver_id');
			        
			        //var_dump($values);
			        
			        foreach( $values as $value){
			           //var_dump($value);
			    ?>    
			        <tr>
			            <td><?php echo $value['	driver_id'];            ?></td>
			            <td><?php echo $value['driver_name'];      ?></td>
			            <td><?php echo $value['driving_licence_no'];         ?></td>
			            <td><?php echo $value['driver_phone'];    ?></td>
			            <td><?php echo $value['driver_address'];  ?></td>
			            <td><?php echo $value['driver_created_by'];  ?></td>
			            <td><?php echo $value['driver_create_date'];  ?></td>
			        </tr>
			        <?php
			        }
			        ?>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
<!-- /.box -->
</div>        