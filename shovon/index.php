<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modal Testing</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    

</head>
<body>


<div class="container">
    <table class="tabel table-bordered text-center">
        <thead>
            <tr>
                <th>Start Date</th>
                <th>Request For</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $conn =   new PDO('mysql:host=localhost;dbname=dblogin',"asadujjaman","");
                $data = $conn->query("SELECT * FROM hod_request")->fetchAll(PDO::FETCH_ASSOC);
                foreach($data as $row):
            ?>    
            <tr>
                <td><?php echo $row['date_start'];?></td>
                <td><?php echo $row['requested_for'];?></td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo $row['id']?>">
                      view
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">This modal will be study later</h4>
                          </div>
                          <div class="modal-body">
                            <table class="table">
                                <tr>
                                    <th>Request ID</th>
                                    <td><?php echo $row['request_id'];?></td>
                                </tr>
                                <tr>
                                    <th>Route</th>
                                    <td><?php echo $row['route_name'];?></td>
                                </tr>
                                <tr>
                                    <th>Request For</th>
                                    <td><?php echo $row['requested_for'];?></td>
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
                                    <td><?php echo $row['phoneNo'];?></td>
                                </tr>
                                <tr>
                                    <th>Designation</th>
                                    <td><?php echo $row['desgination'];?></td>
                                </tr>
                                <tr>
                                    <th>Drop</th>
                                    <td><?php echo $row['final_drop'];?></td>
                                </tr>
                                
                            </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ABC<?php echo $row['id']?>">
                              Assign
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--------------------------------->
                    <!-- Modal -->
                    <div class="modal fade" id="ABC<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Car Assign Modal</h4>
                          </div>
                          <div class="modal-body">
                          
                            <form action="action.php" method="post">
                                <div class="form-group">
                                    <label for="">Request ID</label>
                                    <input class="form-control" type="text" name="request_id" value="<?php echo $row['request_id']?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="">Car</label>
                                    <input class="form-control" type="text" name="car_model" value=""/>
                                </div>
                                
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button  name="assign_submit" value="Submit" type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                </td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
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
    

</body>
</html>