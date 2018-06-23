				<?php
                         	
                             
                             if(isset($_POST["id"])){
                             	
                             	//$output = '';
                             	$id=$_POST["id"];
                             	include 'operation.inc.php';
    	            	$data	=	new	USER();
    	            
    	            //echo $id;
                    $values = $data->getById('hod_request',$id);
            
                    //var_dump($values);
            
                    foreach( $values as $value){
                    //var_dump($value);
                    //$output .= ';
                    ?>
		<!-- Create route form elements -->
                 <div class="box box-primary">
                 <!-- /.box-header -->
                     <table class="table table-bordered">
                         
                
                         <tr>
                    <th>Request ID</th>
                    <td><?php echo $value['request_id']; ?></td>
                </tr>
                <tr>
                    <th>Route</th>
                    <td><?php echo $value['route_name']; ?></td>
                </tr>
                <tr>
                    <th>Request For</th>
                    <td><?php echo $value['requested_for']; ?></td>
                </tr>
                <tr>
                    <th>Request By</th>
                    <td><?php echo $value['request_by_name']; ?></td>
                </tr>
                <tr>
                    <th>Duration</th>
                    <td><?php echo $value['date_start']; ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?php echo $value['phoneNo']; ?></td>
                </tr>
                <tr>
                    <th>Designation</th>
                    <td><?php echo $value['designation']; ?></td>
                </tr>
                <tr>
                    <th>Drop</th>
                    <td><?php echo $value['final_drop']; ?></td>
                </tr>
		                 <tr>
	                         <td></td>
		                     <td>
                                 <button type="button"  class="btn btn-info pull-right btn-xs view_data"  data-toggle="modal" data-target="#asModal"  id="
                                 <?php
                                 	$id=$value['request_id'];  echo $id;
                                 	
                                 ?>
                                 ">
                                 Assign
                             </button>
                             </td>
                         </tr>
                <?php
                //$output .= ';
                    	}
                             }
                ?>
                     </table>   
                 </div>
             <!-- /.box -->
             <!--/////////////////////////////////