<?php

	require_once("session.php");
	
	require_once("operation.inc.php");
	$auth_user = new USER();
	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
	<header class="main-header">
		<?php 
    		ob_start();
    		include 'header.php';
    	?>
            <!-- Logo -->
            <a href="index.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>V</b>MS</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Vehicle</b>Managment</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <?php include 'nav.php';?>
    </header>
    
    

        
        <!-- Left side column. contains the logo and sidebar -->
        <?php include 'aside.php';?>
    
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard<small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard </li>
                    </ol>
                </section>
    
                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
            
                        <!--/////////////////////////////////-->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>20</h3>
                                    <p>Vehicles Available</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-model-s"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!--/////////////////////////////////-->
                
                        <!-- ./col -->
                        <!--/////////////////////////////////-->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>10</h3>
                                    <p>Routes only in Dhaka City</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-map"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!--/////////////////////////////////-->
                        <!-- ./col -->
                        <!--/////////////////////////////////-->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>44</h3>
                                    <p>Agents will take ride</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!--/////////////////////////////////-->
                        <!-- ./col -->
                        <!--/////////////////////////////////-->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>65</h3>
                                    <p>Visitors</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!--/////////////////////////////////-->
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                    <!-- Left col -->
                    <!--/////////////////////////////////-->
                    <!-- Create route form elements -->
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Create Routes</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group has-feedback">
                                            <label for="exampleInputEmail1">Route Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Route Name">
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="exampleInputPassword1">Routes</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Routes">
                                            <span class="glyphicon glyphicon-road form-control-feedback"></span>
                                        </div>
                                        
                                        
                                    </div>
                                    <!-- /.box-body -->   
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary" onclick="sweet();" id="click">Create</button>
                                        <script type="text/javascript">
                                            //document.getElementById("click").onclick=sweet;
                                            
                                            swal("sorry","something wrong","error")
                                            swal("good job","you have done it", "success")
                                        </script>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>    
                        <!-- /.box -->
                        <!--/////////////////////////////////-->
                        <!-- Create route form elements -->
                        <div class="col-md-6">
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Assign Vechicle</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group has-feedback">
                                            <label for="exampleInputEmail1">Route Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Route Name">
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="exampleInputPassword1">Vehicles</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Routes">
                                            <span class="glyphicon glyphicon-road form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->   
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.box -->
            
                        <!--/////////////////////////////////-->
                        <!-- Create Vechicle form elements -->
                        <div class="col-md-6">
                            <div class="box box-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Create Driver</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group has-feedback">
                                            <label for="exampleInputEmail1">Driver Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Driver Name">
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="exampleInputEmail1">Driving Licence No</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Driving Licence No">
                                            <span class="glyphicon glyphicon-file form-control-feedback"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="exampleInputPassword1">Driver Phone</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                                            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="exampleInputPassword1">Driver Home address</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address">
                                            <span class="glyphicon glyphicon-home form-control-feedback"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="exampleInputPassword1">Vechicle Registration No</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Registration">
                                            <span class="glyphicon glyphicon-list-alt form-control-feedback"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="exampleInputPassword1">Vechicle Type</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Vechicle Type">
                                            <span class="glyphicon glyphicon-list-alt form-control-feedback"></span>
                                        </div>
                                        
                                    </div>
                                    <!-- /.box-body -->   
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>    
                        <!-- /.box -->
                        <!--/////////////////////////////////-->
                        <div class="col-md-6">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Bordered Table</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                					        <th>#</th>
                					        <th>User Name</th>
                					        <th>User Email</th>
                					        <th>User Password ;P</th>
                					    </tr>
                					    <?php
                					    	$data	=	new	USER();
                					        $values = $data->select('users');
                					        
                					        //var_dump($values);
                					        
                					        foreach( $values as $value){
                					           //var_dump($value);
                					    ?>    
                					        <tr>
                					            <td><?php echo $value['user_id'];  ?></td>
                					            <td><?php echo $value['user_name']; ?></td>
                					            <td><?php echo $value['user_email']; ?></td>
                					            <td><?php echo $value['user_pass']; ?></td>
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
                        <!-- /.col -->
                
                    <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
                </section>
            <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.0
                </div>
                <strong>Copyright &copy; 2018 <a href="https://adminlte.io">Asad</a>.</strong> All rights
                    reserved.
            </footer>
            <div class="control-sidebar-bg">
            </div>
    </div>
    <!-- ./wrapper -->
<?php include 'footer.php';?>