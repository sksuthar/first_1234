@extends('layouts.app')

@section('content')
    <style type="text/css">
        .active-home a img{
            border-bottom:2px solid #4ca2f4;
        }
        .active-home a img:hover {
            opacity: 1 !important;
        }
        .form-group.required .control-label:after {
            content:"*";
            color:red;
        }
        .td_1{
            width: 15%;
        }
        .td_2{
            width: 27%;
        }
    </style>
    <div class="container">
        <div class="row center-back">
            <!-- ======================= Center Part ============================ -->
            <div class="col-sm-12" style="border: 1px solid #DDD; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); padding-bottom:15px; ">
                <div class="col-sm-12 span2">
                    <div class="home-back">
                        <div class="col-sm-12 col-md-12 col-lg-12" style="  margin-bottom: 25px;     margin-top: 15px;" align="center">
                            <img class="home-logo" width="40px" height="auto" src="{{url('resources/assets/images/logo.jpg')}}">
                            <h3>{{@$admission_details[0]->schooldata['school_name']}}</h3>

                            <div align="center">
                                <p>Survey No. 111/1</p>
                                <p>Pune-Mumbai Bypass Highway, Warje</p>
                                <p>Pune, Maharashtra 411058</p>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::open(['files'=>true, 'method'=>'POST', 'url'=>'/application_form/confirm/payment','enctype' => 'multipart/form-data']) !!}
                     <input type="hidden" name="admission_f" value="{{@$admission_details[0]['admission_flag']}}">
                    <table class="table table-striped">              
                        <tbody>
                            <tr>
                              <td colspan="5"><h4>Basic Details</h4></td>
                           </tr> 
                           <tr>
                               <td class="td_1">First Name:</td>
                               <td class="td_2">{{@$admission_details[0]['f_name']}}</td>
                                <td class="td_1">Middle Name:</td>
                                <td class="td_2">{{@$admission_details[0]['m_name']}}</td>                         
                                <td rowspan="4">
                                    <img src="{{url(@$admission_details[0]['photo'])}}" style="width: 100%;">                    
                                </td>
                           </tr>
                          <tr>
                            <td scope="row"  class="td_1">Last Name:</td>
                            <td class="td_2">{{@$admission_details[0]['l_name']}}</td>
                            <td></td>   
                            <td></td>  
                          </tr>
                          <tr>
                            <td class="td_1" scope="row">DOB:</td>
                            <td class="td_2">{{@$admission_details[0]['dob']}}</td>
                            <td class="td_1">Mobile:</td>
                            <td class="td_2">{{@$admission_details[0]['mobile']}}</td>
                          </tr>
                            <tr>
                            <td class="td_1" scope="row">Blood Group:</td>
                            <td class="td_2">{{@$admission_details[0]['dob']}}</td>
                            <td class="td_1">Nationality:</td>
                            <td class="td_2">{{@$admission_details[0]['nationality']}}</td>
                          </tr>
                            <tr>
                            <td class="td_1" scope="row">Marital Status:</td>
                            <td class="td_2">{{@$admission_details[0]['marital_status']}}</td>
                            <td class="td_1">Sex:</td>
                            <td class="td_2">{{@$admission_details[0]['type']}}</td>
                          </tr>
                           <tr>
                            <td class="td_1">Father Name:</td>
                            <td class="td_2">{{@$admission_details[0]['father_name']}}</td>
                            <td class="td_1">Occupation:</td>
                            <td class="td_2">{{@$admission_details[0]['f_occupation']}}</td>
                          </tr>
                           <tr>
                            <td class="td_1">Mother Name:</td>
                            <td class="td_2">{{@$admission_details[0]['mother_name']}}</td>
                            <td>Occupation:</td>
                            <td class="td_2">{{@$admission_details[0]['m_occupation']}}</td>
                          </tr>                      
                          <tr>
                              <td class="td_1" colspan="4"><h4>Postal Address</h4></td>
                          </tr> 
                              <tr>
                            <td class="td_1">Address 1:</td>
                            <td class="td_2">{{@$admission_details[0]['po_add_1']}}</td>
                            <td class="td_1">Address 2:</td>
                            <td class="td_2">{{@$admission_details[0]['po_add_2']}}</td>
                          </tr>
                              <tr>
                            <td class="td_1">State:</td>
                            <td class="td_2">{{@$admission_details[0]['po_status']}}</td>
                            <td class="td_1">City:</td>
                            <td class="td_2">{{@$admission_details[0]['po_city']}}</td>
                          </tr>
                           <tr>
                            <td class="td_1">Pin Code:</td>
                            <td class="td_2" colspan="3">{{@$admission_details[0]['po_pin_code']}}</td>                   
                          </tr>
                           <tr>
                              <td class="td_1" colspan="4"><h4>Permanent Address</h4></td>
                           </tr> 
                          <tr>
                            <td class="td_1">Address 1:</td>
                            <td class="td_2">{{@$admission_details[0]['pe_add_1']}}</td>
                            <td class="td_1">Address 2:</td>
                            <td class="td_2">{{@$admission_details[0]['pe_add_2']}}</td>
                          </tr>
                           <tr>
                            <td class="td_1">State:</td>
                            <td class="td_2">{{@$admission_details[0]['pe_state']}}</td>
                            <td class="td_1">City:</td>
                            <td class="td_2">{{@$admission_details[0]['pe_city']}}</td>
                          </tr>
                           <tr>
                            <td class="td_1">Pin Code:</td>
                            <td class="td_2">{{@$admission_details[0]['pe_pin_code']}}</td>                   
                          </tr>
                             <tr>
                              <td class="td_1" colspan="4"><h4>Last Academic Information</h4></td>
                          </tr> 
                              <tr>
                            <td class="td_1">School or Institite or University:</td>
                            <td class="td_2">{{@$admission_details[0]['school']}}</td>

                          </tr>
                          <tr>
                            <td class="td_1">year:</td>
                            <td class="td_2">{{@$admission_details[0]['year']}}</td>
                            <td class="td_1">Marks:</td>
                            <td class="td_2">{{@$admission_details[0]['marks']}}</td>
                          </tr>                
                        </tbody>
                    </table>                                                                                
                    <div class="form-group" align="center">
                        <div class="col-md-12" style="    margin-top: 4%;">
                            @if(@$admission_status == 0)
                                <input type="submit" value="Confirm and Apply" class="btn btn-success">                         
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- close container ( center area) -->
    <script type="text/javascript">
        $('#affi').affix({
            offset: {
                top: $('header').height()
            }
        });
    </script>
    <style type="text/css">
        header {
            height:auto;
        }
        #affi.affix {
            position: fixed;
            top: 100px;
            width:277px;
        }
    </style>
@endsection
