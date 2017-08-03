$(document).ready(function () {
    //********** Start Add paper modal**************//

     $(".add_paper").click(function(){
         var course_hash =  $(this).data('co_h');
         var class_hash =  $(this).data('_c_h');

         $("#p_a").attr('value',course_hash);
         $("#_c_h_").attr('value',class_hash);
     });

     $(".edit_paper").click(function(){
         var paper_class_name = $(this).data('_p_n');
         var course_hash =  $(this).data('co_h');
         var paper_id =  $(this).data('paper_i');


         var paper_name =  $("."+paper_class_name).text();
         $("#_p_i").val(paper_name);
         $("#p_e").attr('value',course_hash);
         $("#paper_ii").attr('value',paper_id);
     });


    //********** End Add paper modal**************//

     $("#course_edit_btn").click(function(){
        var course_name =  $("#course_name_edit").text();
        $("#class_val").val(course_name); 
     });
     
     $(".class_update").click(function(){
         var class_id = $(this).data('_c_i');
         var p_i = $(this).data('store');

         var store1 = $(this).data('store1');
         var store2 = $(this).data('store2');
         var store3 = $(this).data('store3');

         var eligibility1 = $(".elg-1").text();
         var eligibility2 = $(".elg-2").text();
         var eligibility3 = $(".elg-3").text();

         $("#_c_i").val(class_id);
         $("#course_name").val(store1);
         $("#fee").val(store2);
         $("#seat").val(store3);
         $(".elg-1-e").val(eligibility1);
         $(".elg-2-e").val(eligibility2);
         $(".elg-3-e").val(eligibility3);
         $("#edit_class").modal('show');
     });


     $(".course_delete").click(function (){
         var course_hash = $(this).data('c');
         var course_id = $(this).data('c_d_i');
         $("#update_att").attr('data-c_h',course_hash);
         $("#update_att").attr('data-c_i',course_id);
     });

     $(".course_update_btn").click(function ()   {
        var course_hash = $(this).data('c_h');
        var course_id = $(this).data('c_i');
        $("#loaderr").show();

        $.ajax({
            type: "get",
            url: BASE_URL+"/course_disable",
            data: "course_hash=" + course_hash+ "&course_id="+course_id,
            success: function (result)
            {
                if (result.success == true)
                {
                    $("#deleteCourse").modal('hide');
                    $("#deleteCourseSuccess").modal('show');
                    setTimeout(function () {
                                location.reload()
                            }, 2000);
                }
            }
        });          
    });

     $(".admission_status_open").click(function ()
     {         
        var course_id = $(this).data('co_i');
        var class_id = $(this).data('_c_i_d');
        var class_hash = $(this).data('_c_i');
        $.ajax({
            type: "get",
            url: BASE_URL+"/admission-status/edit",
            data: "course_id="+course_id+"&class_id="+class_id+"&class_hash=" + class_hash,
            dataType: "json",
            success: function (result)
            {               
               if (result.success == true)
               {                                                             
                   $('#get_status_ad').html("<input type='hidden' name='co_i' id='co_i'><input type='hidden' name='_c_i_d' id='_c_i_d'><input type='hidden' name='_c_i' id='_c_i'><div class='col-sm-6 col-md-6 col-lg-6'><label class='control-label'>Open Admission Date:</label><div class='input-group date' id='start_ad'><label id='start_dd'></label></div></div><div class='col-sm-6 col-md-6 col-lg-6'><label class='control-label'>Close Admission Date:</label><div class='input-group date' id='start_ad'><label id='end_dd'></label></div></div>");
                   $("#form_update_ad_status").attr('action',BASE_URL+"/admission-status/update");
                   $("#co_i").val(course_id);
                   $("#_c_i_d").val(class_id);
                   $("#_c_i").val(class_hash);
                   $("#start_dd").text(result.data.admission_status.start_date); 
                   $("#end_dd").text(result.data.admission_status.end_date); 
                   $("#update_admission_status").modal('show'); 
               }
            }
        });
     });
     
     $(".new_admission").click(function(){
            var course_id = $(this).data('co_i');
            var class_id = $(this).data('_c_i_d');
            var class_hash = $(this).data('_c_i');
           
            $("#status_1").val(course_id);
            $("#status_2").val(class_id);
            $("#status_3").val(class_hash);

     });



 });