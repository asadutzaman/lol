$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap_pick"); //Fields wrapper
    var add_button_pick      = $("#add_field_button_pick"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button_pick).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<br><div><select name="pick_time[]" class="form-control"><option>Select Pick Time</option><option>6:00AM</option><option>7:00AM</option><option>10:30PM</option></select><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});