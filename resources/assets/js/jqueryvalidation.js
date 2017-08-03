//*********** School Form Fill Process****************//
$(document).ready(function()
{    
    $("#school_register").removeAttr('disabled');
   
    var form = $("[name=create]");
    form.validate(
    {
        ignore: "",
        rules:
        {
            school_name:
            {
                required: true,
                minlength: 3,
                maxlength: 70
            },
            board:
            {
                required: true,
                minlength: 3,
                maxlength: 50                
            },
            address1:
            {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            city:
            {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            state:
            {
                required: true,
                maxlength: 50
            },
            pincode:
            {
                required: true,
                minlength: 6,
                number:true
            },
            phone1:
            {
                required: true,
                minlength: 10,
                number:true
            },
             phone2:
            {
                minlength: 10,
                number:true
            },
             phone3:
            {
                minlength: 10,
                number:true
            },
            school_email:
            {
                minlength: 2,
                email:true
            },
            website:
            {
              url:true    
            }
            
        },
        messages:
        {
            school_name:
            {
                required: "Please enter School name"
            },
            board:
            {
                required: "Please enter Board"
            },
            address1:
            {
                required: "Please enter address"
            },
            city:
            {
                required: "Please enter city"
            },
            state:
            {
                required: "Please select state"
            },
            pincode:
            {
                required: "Please enter pin code"
            },
            phone1:
            {
                required: "Please select phone no"
            },
        }
    });

    var form = $("[name=gallery_form]");
    form.validate(
    {
        ignore: "",
        rules:
        {
            image_name:
            {
                required: true
            }
            
        },
        messages:
        {
            image_name:
            {
                required: "Please select image"
            }
        }
    });
});
