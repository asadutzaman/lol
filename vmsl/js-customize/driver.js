  $(document).ready(function(){
  $("#saved").click(function(){

     var driver_id = $('#driver_id').val();
     var driver_name = $('#driver_name').val();
     var driving_license = $('#driving_license').val();
     var driver_phone = $('#driver_phone').val();
     var driver_alt_phone = $('#driver_alt_phone').val();
     var address = $('#address').val();
     var driver_nid = $('#driver_nid').val();
     var remarks = $('#remarks').val();
     var driver_id = $('#driver_id').val();


     alert(driver_id);
     alert(driver_name);
     alert(driving_license);
     alert(driver_phone);
     alert(driver_alt_phone);
     alert(address); 
     alert(driver_nid);
     alert(remarks);
     
     
            $.ajax({
                     url:"insertinfo.php",
                     method:"POST",
                     data:{driver_id:driver_id,driver_name:driver_name,driving_license:driving_license,driver_phone:driver_phone,driver_alt_phone:driver_alt_phone,

                      address:address,driver_nid:driver_nid,remarks:remarks},
                     success: function(data) {
                                 $('div#notice').show();
                            
                        
                                
                            }
              }); 
    });
});
