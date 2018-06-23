$(document).ready(function(){
  $('div#notice').hide();
  $("button#saved").click(function(){
            var agent_name = $('#agent_name').val();
            var agent_id = $('#agent_id').val();
            var phone = $('#phone').val();
            var emergency_contact = $('#emergency_contact').val();
            var blood_group = $('#blood_group').val();
            var deaprtment = $('#deaprtment').val();
            var address = $('#address').val();
            var gender = $( "input:checked" ).val();

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
