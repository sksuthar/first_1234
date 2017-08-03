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
                <img src="" style="border-radius: 15px;"/>
            </div>
            <div class="col-sm-9 sol-md-9" style="padding:25px;">
                <table class="table">
                    <tr>
                        <td>
                            <h4>Personal Details</h4>
                        </td>
                        <td colspan="3">
                          
                        </td>
                    </tr>
                    {!! Form::model($row, ['name'=>'edit','id'=>'edit', 'method'=>'PUT', 'url'=> '/profile/update/' . $row->id, 'class'=>'form-horizontal']) !!}
                    <input type="hidden" name="admission_flag" class="form-control" value="{{$row->admission_flag}}">
                    <input type="hidden" name="admission_flag" class="form-control" value="{{$row->admission_flag}}">
                    <tr>
                        <td>
                            First Name:
                        </td>
                        <td>
                            <div class="{{ $errors->has('f_name') ? ' has-error' : '' }}">                                                              
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{$row->f_name}}">
                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif                               
                            </div>
                        </td>
                         <td>
                            Middle Name:
                        </td>
                        <td>
                            <input type="text" class="form-control" name="m_name" value="{{$row->m_name}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Last Name:
                        </td>  
                        <td>                           
                            <div class="{{ $errors->has('l_name') ? ' has-error' : '' }}">                                                              
                                <input id="f_name" type="text" class="form-control" name="l_name" value="{{$row->l_name}}">
                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('l_name') }}</strong>
                                    </span>
                                @endif                               
                            </div>
                        </td>
                         <td>
                           Email:
                        </td>  
                        <td>
                            <input type="text" class="form-control" name="email" value="{{$row->userdata['email']}}" disabled="disabled">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Date Of Birth:
                        </td>  
                        <td>
                             <div class="input-group date " id="one_way">
                                <input type="text" name="dob" class="form-control ret input--textfield" id="firstd" autocomplete="off">
                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                           </div>
                        </td>
                        <td>
                           Mobile:
                        </td>  
                        <td>
                            <input type="text" class="form-control" name="mobile" value="{{$row->mobile}}">
                        </td>
                    </tr>
                     <tr>
                        <td>
                           Nationality:
                        </td>  
                        <td>
                              <div class="{{ $errors->has('nationality') ? ' has-error' : '' }}">                                                        
                                <input id="f_name" type="text" class="form-control" name="nationality" value="{{$row->nationality}}">
                                @if ($errors->has('nationality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                @endif                               
                            </div>
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
                            <div class="{{ $errors->has('po_add_1') ? ' has-error' : '' }}">                                                              
                                <input id="f_name" type="text" class="form-control" name="po_add_1" value="{{$row->po_add_1}}">
                                @if ($errors->has('po_add_1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('po_add_1') }}</strong>
                                    </span>
                                @endif                               
                            </div>
                        </td>
                        <td>
                           Address 2:
                        </td>  
                        <td>                        
                            <div class="{{ $errors->has('po_add_2') ? ' has-error' : '' }}">                                                              
                                <input id="f_name" type="text" class="form-control" name="po_add_2" value="{{$row->po_add_2}}">
                                @if ($errors->has('po_add_2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('po_add_2') }}</strong>
                                    </span>
                                @endif                               
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            City:
                        </td>  
                        <td>
                            <div class="{{ $errors->has('po_city') ? ' has-error' : '' }}">                                                         
                                 <input id="f_name" type="text" class="form-control" name="po_city" value="{{$row->po_city}}">
                                 @if ($errors->has('po_city'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('po_city') }}</strong>
                                     </span>
                                 @endif                               
                             </div>
                        </td>
                        <td>
                           State:
                        </td>  
                        <td>
                            <input type="text" class="form-control" name="po_state" value="{{$row->po_state}}">
                        </td>
                    </tr>
                    <tr>
                    <td>
                        Pin Code:
                    </td>  
                    <td colspan="4">                          
                       <div class="{{ $errors->has('po_pin_code') ? ' has-error' : '' }}">                                                         
                             <input id="f_name" type="text" class="form-control" name="po_pin_code" value="{{$row->po_pin_code}}">
                             @if ($errors->has('po_pin_code'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('po_pin_code') }}</strong>
                                 </span>
                             @endif                               
                         </div>
                    </td>
                       
                    </tr>
                    <tr>
                        <td colspan="6">
                            <input type="submit" value="Update" class="btn btn-success btn-sm">
                              <a class="btn btn-info pull-right" href="{{ URL::previous() }}">back</a>
                        </td>
                    </tr>
                  {!! Form::close() !!}
                </table>
            </div>
        </div>            
    </div>    
@endsection
