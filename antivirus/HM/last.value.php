<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="h4">Last Entry</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">  
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Location</th>
                            <th>Process</th>
                            <th>Desk</th>
                            <th>Hostname</th>
                            <th>MAC Address</th>
                            <th>Antivirus</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            include_once('operation.inc.php');
		               	 	$data	=	new	USER();
		                    $values = $data->selectLast('antivirus', 'id');
		                    foreach( $values as $value):
		                ?>
                        <tr>
                            <td><?= $value['id'];?></td>
                            <td><?= $value['location'];?></td>
                            <td><?= $value['process'];?></td>
                            <td><?= $value['deskno'];?></td>
                            <td><?= $value['hostname'];?></td>
                            <td><?= $value['mac'];?></td>
                            <td><?= $value['status'];?></td>
                            <td><?= $value['time'];?></td>
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