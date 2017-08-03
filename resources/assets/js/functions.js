$(document).ready(function() {
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" style="width: 90%; margin-bottom: 4%; display: inline-table;" class="input form-control" id="field' + next + '" name="class[]" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);

        $('.remove-me').click(function(e){
            e.preventDefault();
            var fieldNum = this.id.charAt(this.id.length-1);
            var fieldID = "#field" + fieldNum;
            $(this).remove();
            $(fieldID).remove();
        });
    });


    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap1"); //Fields wrapper
    var add_button      = $(".add_field_button1"); //Add button ID

    var next = 1;
    var x = 1; //initlal text box count
    var addto = "#field1" + next;
    var addRemove = "#field1" + (next);
    next = next + 1;

    $(add_button).click(function(e){ //on add input button click
        
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div style="padding: 7px 0px;   "><input type="text" name="class[]" class="form-control" style="width:80%; display:inline-block;"  required="required"/><a href="#" class="remove_field btn btn-danger" style="float:right">Remove</a></div>'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });





    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap2"); //Fields wrapper
    var add_button      = $(".add_field_button2"); //Add button ID

    var next = 1;
    var x = 1; //initlal text box count
    var addto = "#field" + next;
    var addRemove = "#field" + (next);
    next = next + 1;

    $(add_button).click(function(e){ //on add input button click
       
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group"><div class="col-md-5"><label for="password">Select Class:</label><select class="form-control" name="class_id[]"> @if(!empty(@$class_detail))@foreach(@$class_detail as $row)<option value="{{$row->id}}">{{$row->class_name}}</option>@endforeach   @endif </select></div></div><div class="input_fields_wrap2 form-group" ><div class="col-md-6"><label for="password">Enter Course Name:</label><input type="text" name="course_name[]" style="width:70%; display:inline-block;" class="form-control" required="required"><button class="remove_field btn btn-danger btn-sm">Remove</button></div></div>');
            //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });


    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var next = 1;
    var x = 1; //initlal text box count
    var addto = "#field" + next;
    var addRemove = "#field" + (next);
    next = next + 1;

    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div style="padding: 7px 0px;   "><input type="text" name="class[]" class="form-control" style="width:80%; display:inline-block;"  required="required"/><a href="#" class="remove_field btn btn-danger" style="float:right">Remove</a></div>'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })


    $(".applyadmission").click(function() {
        document.getElementById("admission_model").innerHTML = this.value;
        document.getElementById("_c_h").value = this.id;
    });

});