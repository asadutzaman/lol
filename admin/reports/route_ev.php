<?php
    $route  =   new USER();
    if(isset($_POST["route_submit"])){
        $inser_data =   array(
                'route_id'      =>  $_POST['route_id'],
                'created_date'  =>  date("Y-m-d"),
                'route'         =>  $_POST['route'],
                'created_by'    =>  $userRow['user_name']
            );
            //var_dump($inser_data);
        if ($route->insert('route', $inser_data)) {
            $message    =   'done';
        }
        else {
            $message    =   'Wrong';
        }
    }
?>




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

<div class="col-md-6">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Route Table</h3>
            <button type="button" class="btn btn-defaul pull-right" data-toggle="modal" data-target="#modal-default">
                    Create New Route
                  </button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
			        <th>#</th>
			        <th>Route ID</th>
			        <th>Route</th>
			        <th>Created BY</th>
			        <th>Created date</th>
			    </tr>
			    <?php
			    	$data	=	new	USER();
			        $values = $data->select('route', 'id');
			        
			        //var_dump($values);
			        
			        foreach( $values as $value){
			           //var_dump($value);
			    ?>    
			        <tr>
			            <td><?php echo $value['id'];            ?></td>
			            <td><?php echo $value['route_id'];      ?></td>
			            <td><?php echo $value['route'];         ?></td>
			            <td><?php echo $value['created_by'];    ?></td>
			            <td><?php echo $value['created_date'];  ?></td>
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