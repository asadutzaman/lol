  $(document).ready(function(){
        $("button#save").click(function(){

          alert("nasim");

            var route_id = $('#route_id').val();
       
            var request_type = $('#request_type').val();
            var mytext = $('#mytext').val();
            var pick_time = $('#pick_time').val();
            var drop_time = $('#drop_time').val();

     

/*            if (route_id=="")
             {
               alert("Insert Route Id");
             }
            if (request_type =='0')
             {
               alert("Select Request Type");
             }
            if (mytext=="")
             {
               alert("Insert Route Name");
             }
            if (pick_time=='0')
             {
               alert("Select Pick Time");
             }
            if (drop_time=='0')
             {
               alert("Select Drop Time");
             }
           else{*/

           $.ajax({
             url:"insert.php",
             method:"POST",
             data:$('#add_me').serialize(),
             success: function(data)
             {
             alert(data);
             
             $('#add_me')[0].reset();
             }
             });  
        
          
 
    });

            $("#request_type").change(function(){
             
            var x = $('#request_type').val();

            alert(x);
            if (x=='DROP') 
            { 
              
                $('div#pick_time_div').hide();

/*              $("#pick_time").hide();
                $('#add_field_button_pick').hide();
*/
             
/*               $("#pick_time").prop("disabled", true).val("12345");
                 $('#add_field_button_pick').prop('disabled', true);*/
               
              
            }

            if (x=='PICK')
            {

                $('div#drop_time_div').hide();
                /* $("#drop_time").hide();
                 $('#add_field_button_drop').hide();*/

/*               $("#drop_time").prop("disabled", true).val("12345");
                 $('#add_field_button_drop').prop('disabled', true);*/
           
            }
            if(x=='BOTH')
            {
                $('div#drop_time_div').show();    
                $('div#pick_time_div').show();
            }


    });
  });