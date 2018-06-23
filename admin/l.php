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
                    
                    <!-- /***.row*** -->
                    <div class="row">
                        <!-- /.col (left) -->
                                     <div class="box box-primary">

                        <!-- /.box-header -->
                        <!-- form start -->
                        <table class="table table-hover table-dark">
                            
                            <?php
			    	            $getbyid	=	new	USER();
			                    $vals = $getbyid->getById('m_request', 'id');
			                    //var_dump($values);
			                    
			                    foreach($vals as $val){

			                ?>
                    
                         
                            <tbody>
                                <tr>
                                    <th>route</th>
                                    <td><?php echo $val['route'];          ?></td>
                                </tr>
                                <tr>
                                    <th>start_date</th>
                                    <td><?php echo $val['start_date'];     ?></td>
                                </tr>
                                <tr>
                                    <th>request_for</th>
                                    <td><?php echo $val['request_for'];    ?></td>
                                </tr>
                                <tr>
                                    <th>Drop Place</th>
                                    <td><?php echo $val['route'];          ?></td>
                                </tr>
                                <tr>
                                    <th>Date Time</th>
                                    <td><?php echo $val['start_date'];     ?></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <button class="btn btn-danger pull-right btn-xs" data-toggle="modal" data-target="#modal-default" type="button">Reject</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-success pull-right btn-xs" data-toggle="modal" data-target="#modal-default" type="button">Assing A Vehicle</button>
			                        </td>
                                </tr>
                            </tbody>
                            
                            <?php } ?>
                            
                            
                        </table>
  
                    </div>
                        
                        <!-- /.col (right) -->
                    </div>
                    <div class="row">
                        <!-- /.col (left) -->
                        
                        <?php //include 'management/m_request_table.php'; ?>
                        <!-- /.col (right) -->
                    </div>
                    <!-- /***.row*** -->

                </section>
                <!-- /.content -->
            </div>
<?php include 'footer.php'; ?>