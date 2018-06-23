
<!/--------------------------------------------------------------------------------------->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <?php $districts = $db->query("SELECT district from location GROUP BY district")->fetchAll(PDO::FETCH_ASSOC); ?>
                                    <select class="form-control" id="district" name="district">
                                        <option value="">Select Districts/City</option>
                                        <?php foreach($districts as $district): ?>
                                            <option value="<?php echo $district['district'] ?>"><?php echo $district['district'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <!/--------------------------------------------------------------------------------------->
                            <div class="col-sm-6 ">
                                <div class="form-group" id="area">
                                    <select name="" id="formality" class="form-control">
                                        <option value="">Select Location</option>
                                    </select>
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->

                            <!/--------------------------------------------------------------------------------------->
                            <!/--------------------------------------------------------------------------------------->



<script>
              $('#medium').on('change',function(){
                var medium       = document.getElementById("medium").value;
                
                
                if(district){
                    $.ajax({
                        type:'POST',
                        url:'ajax_class.php',
                        data:'medium='+medium,
                        success:function(html){
                            $('#lol').hide();        
                            $('#class').html(html).fadeIn('5000');
                        }
                    });
                }
                
                
              });
        </script>
        
        <script type="text/javascript">
            // VALIDATING APPOITMENT DATE
            
              $('#district').on('change',function(){
                var district       = document.getElementById("district").value;
                if(district){
                    $.ajax({
                        type:'POST',
                        url:'ajax_area.php',
                        data:'district='+district,
                        success:function(html){
                            $('#formality').hide();        
                            $('#area').html(html).fadeIn('5000');
                          
                        }
                    });
                }
              });
			

        </script>