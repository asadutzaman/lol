<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="h4">User Info</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">  
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>NTID</th>
                            <th>Phone</th>
                            <th>Emergency Contact No</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            include_once('operation.inc.php');
		               	 	$data	=	new	USER();
		                    $values = $data->select('hm_info', 'id');
		                    foreach( $values as $value):
		                ?>
                        <tr>
                            <td><?= $value['displayname'];?></td>
                            <td><?= $value['ntid'];?></td>
                            <td><?= $value['phoneNo'];?></td>
                            <td><?= $value['emargency_contact'];?></td>
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