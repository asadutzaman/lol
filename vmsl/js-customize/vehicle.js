  $(document).ready(function(){
  $("button#saved").click(function(){

 
    var car_id = $('#car_id').val();
     alert(car_id);
    

            $.ajax({
                     url:"insertinfo.php",
                     method:"POST",
                     data:{agent_name:agent_name,agent_id:agent_id,phone:phone,emergency_contact:emergency_contact,blood_group:blood_group,deaprtment:deaprtment,address:address,gender:gender},
                     success: function(data) {
                                 $('div#notice').show();
                            
                        
                                
                            }
              }); 
    });
});
