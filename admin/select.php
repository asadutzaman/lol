<?php
                            	
                                
                                if(isset($_POST["id"])){
                                	
                                	//$output = '';
                                	$id=$_POST["id"];
                                	include 'operation.inc.php';
			    	            	$data	=	new	USER();
			    	            
			    	            //echo $id;
			                    $values = $data->getById('m_request',$id);
			            
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
			                    <td><?php echo $value['route']; ?></td>
			                </tr>
			                <tr>
			                    <th>Request For</th>
			                    <td><?php echo $value['request_for']; ?></td>
			                </tr>
			                <tr>
			                    <th>Request By</th>
			                    <td><?php echo $value['request_by']; ?></td>
			                </tr>
			                <tr>
			                    <th>Duration</th>
			                    <td><?php echo $value['start_date']; ?></td>
			                </tr>
			                <tr>
			                    <th>Phone</th>
			                    <td><?php echo $value['phone']; ?></td>
			                </tr>
			                <tr>
			                    <th>Designation</th>
			                    <td><?php echo $value['designation']; ?></td>
			                </tr>
			                <tr>
			                    <th>Drop</th>
			                    <td><?php echo $value['drop_location']; ?></td>
			                </tr>
		                    <tr>
	                            <td></td>
		                        <td>
                                    <button type="button" class="btn btn-success pull-right btn-xs" data-toggle="modal" data-target="#modal-info">
                                        Assign Vehicle
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
                <!--/////////////////////////////////-->