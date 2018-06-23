<div class="col-lg-8">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="h4">HM Request Table</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">  
                <table class="table table-striped">
        <thead>
            <tr>
                <th>Start Date</th>
                <th>Request For</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
                      <?php
                        include_once('operation.inc.php');
			 	                $data	=	new	USER();
		                    $values = $data->select('hod_request', 'id');
		                    foreach( $values as $value):
		                  ?>
              
            <tr>
                <td><?php echo $value['date_start'];?></td>
                <td><?php echo $value['requested_for'];?></td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo $value['id']?>">
                      view
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo $value['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"onclick="location.href = 'admin_home.php';"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                          </div>
                          <div class="modal-body">
                            <table class="table">
                                <tr>
                                    <th>Request ID</th>
                                    <td><?php echo $value['request_id'];?></td>
                                </tr>
                                <tr>
                                    <th>Route</th>
                                    <td><?php echo $value['route_name'];?></td>
                                </tr>
                                <tr>
                                    <th>Request For</th>
                                    <td><?php echo $value['requested_for'];?></td>
                                </tr>
                                <tr>
                                    <th>Request By</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Duration</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td><?php echo $value['phoneNo'];?></td>
                                </tr>
                                <tr>
                                    <th>Designation</th>
                                    <td><?php echo $value['designation'];?></td>
                                </tr>
                                <tr>
                                    <th>Drop</th>
                                    <td><?php echo $value['final_drop'];?></td>
                                </tr>
                                
                            </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ABC<?php echo $value['id']?>">
                              Assign
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--------------------------------->
                    <!-- Modal -->
                    <div class="modal fade" id="ABC<?php echo $value['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" href="admin_home.php" data-dismiss="modal" aria-label="Close" onclick="location.href = 'admin_home.php';"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Car Assign Modal</h4>
                          </div>
                          <div class="modal-body">
                          
                            <form action="action.php" method="post">
                                <div class="form-group">
                                    <label for="">Request ID</label>
                                    <input class="form-control" type="text" name="request_id" value="<?php echo $value['request_id']?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="">Car</label>
                                    <input class="form-control" type="text" name="car_model" value="" required/>
                                </div>
                                <div class="form-group">
                                    <label for="">Driver Licence</label>
                                    <input class="form-control" type="text" name="drive_licence" value="" required/>
                                </div>
                                <div class="form-group">
                                    <label for="">Driver Phone</label>
                                    <input class="form-control" type="number" name="driver_phone" value="" required/>
                                </div>
                                <div class="form-group">
                                    <label for="">Estimated Cost</label>
                                    <input class="form-control" type="number" name="est_cost" value="" required/>
                                </div>
                                
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button"  class="btn btn-default btn-xs" data-dismiss="modal" onclick="location.href = 'admin_home.php';">Close</button>
                            <button  name="assign_submit" value="Submit" type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <?php
		                endforeach;
                    ?>
                </td>
            </tr>
        </tbody>
        
</table>
            </div>
        </div>
    </div>
</div>        
    

    
    
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  
<script>
    $(function() {
  return $(".modal").on("show.bs.modal", function() {
    var curModal;
    curModal = this;
    $(".modal").each(function() {
      if (this !== curModal) {
        $(this).modal("hide");
      }
    });
  });
});
</script>