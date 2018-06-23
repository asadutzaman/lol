<?php

	require_once("session.php");
	
	include_once('operation.inc.php');
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
                    <?php include 'reports/short_report.php'; ?>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                    <!-- Left col -->
                        <!--/////////////////////////////////-->
                        
                        <?php include 'reports/route_ev.php' ?>
                        <!--/////////////////////////////////-->
                        <!-- Create route form elements -->
                        <div class="col-md-6">
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Assign Vehicle</h3>
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
                        <?php include 'reports/driver.php'; ?>    
                        <!-- /.box -->
                        <!--/////////////////////////////////-->
                        
                        <?php include 'reports/user_details.php' ?>
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