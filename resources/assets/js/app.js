$(document).ready(function () {    
    $(".edit_gallery").click(function () {
        var school_name =  $("#school_name").text();
        var board =  $("#board").text();
        var address1 =  $("#address1").text();
        var address2 =  $("#address2").text();
        var city =  $("#city").text();
        var state =  $("#state").text();
        var pincode =  $("#pincode").text();
        var phone1 =  $("#phone1").text();
        var phone2 =  $("#phone2").text();
        var phone3 =  $("#phone3").text();
        var school_email =  $("#school_email").text();
        var website =  $("#website").text();
        $("#school_name_edit").val(school_name);
        $("#board_edit").val(board);
        $("#address1_edit").val(address1);
        $("#address2_edit").val(address2);
        $("#city_edit").val(city);
        $("#state_edit").val(state);
        $("#pincode_edit").val(pincode);
        $("#phone1_edit").val(phone1);
        $("#phone2_edit").val(phone2);
        $("#phone3_edit").val(phone3);
        $("#school_email_edit").val(school_email);
        $("#website_edit").val(website);        
    }); 
    
    if($(".gallery-class").hasClass("has-error")){
        $("#myModal").modal('show'); 
    }
    $('[name="state"]').val('{{$schoolData->getstate->id}}');    
});