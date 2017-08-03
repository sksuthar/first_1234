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
    <div class="container" style="padding-top:50px;">
        <div class="row">
            <div class="col-sm-3 sol-md-3" style="padding:25px;">
                <img src="{{$profile_data[0]['photo']}}" style="border-radius: 15px; width: 65%;"/>
            </div>
            <div class="col-sm-9 sol-md-9" style="padding:25px;">
                    <p style="color:#32CD32; margin: 0 0 10px 0px;"><?php echo Session::get('message'); ?></p>

                <table class="table">
                    <tr>
                        <td>
                            <h4>Personal Details</h4>
                        </td>
                        <td colspan="3">
                            <a href="{{url("/profile/edit/".$profile_data[0]['id'])}}">
                                <span class="glyphicon glyphicon-pencil pull-right" style="border: 1px solid #CCC; padding: 10px;"></span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            First Name:
                        </td>
                        <td>
                            <p>{{$profile_data[0]['f_name']}}</p>
                        </td>
                         <td>
                            Middle Name:
                        </td>
                        <td>
                            <p>{{$profile_data[0]['m_name']}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Last Name:
                        </td>  
                        <td>
                            <p>{{$profile_data[0]['l_name']}}</p>
                        </td>
                         <td>
                           Email:
                        </td>  
                        <td>
                            <p>{{$profile_data[0]->userdata['email']}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Date Of Birth:
                        </td>  
                        <td>
                            <p>{{$profile_data[0]['dob']}}</p>
                        </td>
                        <td>
                           Mobile:
                        </td>  
                        <td>
                            <p>{{$profile_data[0]['mobile']}}</p>
                        </td>
                    </tr>
                     <tr>
                        <td colspan="7">
                            <h4>Postal Address</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Address 1:
                        </td>  
                        <td>
                            <p>{{$profile_data[0]['po_add_1']}}</p>
                        </td>
                        <td>
                           Address 2:
                        </td>  
                        <td>
                            <p>{{$profile_data[0]['po_add_2']}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            City:
                        </td>  
                        <td>
                            <p>{{$profile_data[0]['po_city']}}</p>
                        </td>
                        <td>
                           State:
                        </td>  
                        <td>
                            <p>{{$profile_data[0]['po_state']}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Pin Code:
                        </td>  
                        <td colspan="4"> 
                            <p>{{$profile_data[0]['po_pin_code']}}</p>
                        </td>
                       
                    </tr>
                </table>
            </div>
        </div>            
    </div>    
@endsection
