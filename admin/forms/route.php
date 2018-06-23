<?php
    $route  =   new USER();
    if(isset($_POST["route_submit"])){
        $inser_data =   array(
                'route_id'      =>  $_POST['route_id'],
                'created_date'  =>  date("Y-m-d H:i:s"),
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

<!--/////////////////////////////////-->
<!-- Create route form elements -->
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create Routes</h3>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                    Launch Default Modal
                </button>
            <?php include 'reports/route_ev.php' ?>
        </div>
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
            </div>
        </form>
    </div>
</div>    
<!-- /.box -->
<!--/////////////////////////////////-->