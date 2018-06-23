$(document).ready(function() {
    var max_fields            = 10; //maximum input boxes allowed
    var wrapper               = $(".input_fields_wrap_drop"); //Fields wrapper
    var add_button_drop       = $("#add_field_button_drop"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button_drop).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<br><div><select name="drop_time[]" class="form-control"><option>Select Drop Time</option><option>10:00PM</option><option>11:00PM</option><option>12:30PM</option><option>1:30PM</option></select><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});