<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="h4">Accepted Request & Assigned Car</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">  
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>Car Model</th>
                            <th>Driver Licence</th>
                            <th>Driver Phone</th>
                            <th>Pick Time</th>
                            <th>Estimated Cost</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            include_once('operation.inc.php');
		               	 	$data	=	new	USER();
		                    $values = $data->select('m_request_process', 'id');
		                    foreach( $values as $value):
		                ?>
                          
                        <tr>
                            <td><?php echo $value['request_id'];?></td>
                            <td><?php echo $value['car_model'];?></td>
                            <td><?php echo $value['drive_licence'];?></td>
                            <td><?php echo $value['driver_phone'];?></td>
                            <td><?php echo $value['pick_time'];?></td>
                            <td><?php echo $value['est_cost'];?></td>
                            <td><?php echo $value['date_time'];?></td>  
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                    </tbody>  
                          
                </table>
            </div>
        </div>
    </div>
</div>