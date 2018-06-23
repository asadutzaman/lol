<?php include 'component/head.php'; ?>
    <body>
        <div class="page">
        <!-- Main Navbar-->
        <?php include 'component/header.php'; ?>
        <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <?php include 'component/nav.php'; ?>
        <div class="content-inner">
            <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
        </header>
        <!-- Dashboard Counts Section-->
    <?php include 'component/s.report.php'; ?>
    <!-- body section -->
    <section class="dashboard-counts no-padding-bottom">
        <div class="row">
            <!------------------------------------------------------------------>
            

            <div class="container-fluid">
              <div class="row bg-white has-shadow">
      
                   <br>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">lol</h3>
                    </div>
                    <div class="card-body">
              
                        <form action="" role="form" method="post" id="add_name">
                            <div class="box-body">
                                <!-- Route -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Route:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="route_name[]" type="text" class="form-control pull-right" id="">
                                        </div>
                                        <div class="col-sm-3">
                                            <button type="button" name="add" id="add" class="btn btn-primary">Add More</button>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Date:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="date_start" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="bootstrap-timepicker">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Pick Time:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="pick_time" type="time" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Pickup Location:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="pick_palce" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Final Drop:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="final_drop" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Request For:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="requested_for" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Phone No:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="phoneNo" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Email:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="email" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Designation:</label>
                                        <div class="col-md-5 select input_fields_wrap_drop">
                                            <input name="designation" type="text" class="form-control pull-right" id="">
                                        </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                
                            </div>
                            <!-- /.box-body -->
                            <div class="line"></div>
                            <br> <br>
                            <div class="box-footer">
                                <button type="submit" name="m_request_submit" class="btn btn-primary" value="Submit"  >Request</button>
                            </div>
                        </form>

              </div>
            </div>
          </div>
              
            <!------------------------------------------------------------------>
        </div>
    </section>
    
    <!-- /body section -->
<?php include 'component/footer.php'; ?>