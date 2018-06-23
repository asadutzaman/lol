<div class="col-md-6">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Bordered Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
			        <th>#</th>
			        <th>User Name</th>
			        <th>User Email</th>
			        <th>User Password ;P</th>
			    </tr>
			    <?php
			    	$data	=	new	USER();
			        $values = $data->select('users', 'user_id');
			        
			        //var_dump($values);
			        
			        foreach( $values as $value){
			           //var_dump($value);
			    ?>    
			        <tr>
			            <td><?php echo $value['user_id'    ];  ?></td>
			            <td><?php echo $value['user_name'  ];  ?></td>
			            <td><?php echo $value['user_email' ];  ?></td>
			            <td><?php echo $value['user_pass'  ];  ?></td>
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