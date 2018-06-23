<div class="col-md-6">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Driver Table</h3>
            
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
			        
			        <th>route</th>
			        <th>start_date</th>
			        <th>#request_for</th>
			        <th>Action</th>
			        
			    </tr>
			    <?php
			    	$data	=	new	USER();
			        $values = $data->select('m_request', 'id');
			        
			        //var_dump($values);
			        
			        foreach( $values as $value){
			            //$id =   $value['id'];
			          // var_dump($id);
			    ?>    
			        <tr>
			            <td><?php echo $value['route']; ?></td>
			            <td><?php echo $value['start_date']; ?></td>
			            <td><?php echo $value['request_for']; ?></td>
			            <td>
                            <button type="button" class="btn btn-info pull-right btn-xs view_data"  data-toggle="modal" data-target="#dataModal"  id="<?php $id=$value['id'];  echo $id; ?>">
                                Veiw
                            </button>
                        </td>
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


        
<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Employee Details</h4>
   </div>
   <div class="modal-body" id="hm">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
<!-- /.modal -->
<!--
//////////////////////////////////////////////////////
//////////////////////////////////////////////////////
-->
<?php
    $route  =   new USER();
    if(isset($_POST["route_submit"])){
        $inser_data =   array(
                'route_id'      =>  $_POST['route_id'],
                'created_date'  =>  date("Y-m-d"),
                'route'         =>  $_POST['route'],
                'created_by'    =>  $userRow['user_name']
            );
            //var_dump($inser_data);
        if ($route->insert('route', $inser_data)) {
            $message    =   'done';
        }
        else {
            $message    =   'Wrong';
        }
    }
?>




<div class="modal fade" id="modal-info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Assign Car </h4>
            </div>
            <div class="modal-body">
                <!--/////////////////////////////////-->
                <!-- Create route form elements -->
                
                    <div class="box box-primary">
                        
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form action="" role="form" method="post">
                            <div class="box-body">
                                <?php echo $message; ?>
                                <div class="form-group has-feedback">
                                    <label for="exampleInputEmail1">Driver Name</label>
                                        <input type="name" name="route_id" class="form-control" id="exampleInputEmail1" placeholder="Route Name">
                                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="exampleInputPassword1">Car</label>
                                        <input type="text" name="route" class="form-control" id="exampleInputPassword1" placeholder="Routes">
                                    <span class="glyphicon glyphicon-road form-control-feedback"></span>
                                </div>
                            </div>
                            <!-- /.box-body -->   
                            <div class="box-footer">
                                <button type="submit" name="route_submit" class="btn btn-primary" value="Submit"  >Create</button>
                                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                   
                <!-- /.box -->
                <!--/////////////////////////////////-->
            </div>
            <div class="modal-footer">
              
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>  
$(document).ready(function(){

 $(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
  var id = $(this).attr("id");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{id:id},
   success:function(data){
    $('#hm').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
});  
</script>































