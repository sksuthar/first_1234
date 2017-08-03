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
        body{
            color: #1d2129;
        }
    </style>
    <div class="container">
        <div class="row center-back">
            <!-- ======================= Center Part ============================ -->
            <div class="col-sm-9" style="border: 1px solid #DDD; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); padding-bottom:15px; ">
                <div class="col-sm-12 span2">
                    <div class="home-back">
                        <div class="col-sm-12 col-md-12 col-lg-12 btm-bdr" style="  margin-bottom: 25px;     margin-top: 15px;" align="center">
                            <img src="{{url(@$school_data[0]['school_logo'])}}" style="width:11%;"/>
                            <h3>{{@$school_data[0]['school_name']}}</h3>
                             
                            <p>Approved By Director of General Civil</p>
                             
                            <div align="center">
                                <p>{{@$school_data[0]["address_1"]}}</p>
                                <p>{{@$school_data[0]["address_2"]}}</p>
                                <p>{{@$school_data[0]["city"]}}, {{@$school_data[0]->getstate['state_name']}} {{@$school_data[0]['pin_code']}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                {!! Form::open(['files'=>true, 'method'=>'POST', 'url'=>'/application_form/one','enctype' => 'multipart/form-data']) !!}
                <input type="hidden" name="c_h" value="{{@$class_data[0]["class_hash"]}}" />
                <input type="hidden" name="s_h" value="{{@$school_data[0]["school_hash"]}}" />
                <input type="hidden" name="co_h" value="{{@$course_data[0]["id"]}}" />

                <div class="form-group">
                    <div class="col-sm-12 col-md-12 col-lg-12 btm-bdr" style="  margin-bottom: 25px; margin-top: 20px;">
                        <h4>Basic details</h4>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('f_name') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Name(First):</label>
                                    <input id="school_name" type="text" class="form-control" name="f_name" value="{{@$user_prfile_data['f_name']}}">
                                    @if ($errors->has('f_name'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('f_name') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group{{ $errors->has('m_name') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="password">Name(Middle):</label>
                                    <input id="school_id" type="text" class="form-control" name="m_name" value="{{@$user_prfile_data['m_name']}}">
                                    @if ($errors->has('m_name'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('m_name') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('l_name') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="password">Name(Last):</label>
                                    <input id="school_id" type="text" class="form-control" name="l_name" value="{{@$user_prfile_data['l_name']}}">
                                    @if ($errors->has('l_name'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('l_name')}}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }} required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Date of Birth:</label>
                                    <div class="input-group date " id="date">
                                        <input type="text" name="dob" class="form-control ret input--textfield" value="{{@$user_prfile_data['dob']}}" dis>
                                        @if ($errors->has('dob'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('dob')}}</strong>
                                            </span>
                                        @endif
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">
                                <div class="col-md-12" align="center" style="margin-top: 28px;">
                                    <label for="password">Type:</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="type" value="1"><label>Male</label>
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="type" value="2"><label>Female</label>
                                    </label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group required">
                                <div class="col-md-12" align="center" style="margin-top: 28px;">
                                    <label class="control-label" for="password">Marital Status:</label>
                                    <label class="radio-inline">
                                        <input type="radio" value="1" name="marital_status"><label>Married</label>
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="2" name="marital_status"><label>Unmarried</label>
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }} required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Nationality:</label>
                                    <input id="school_id"  class="form-control" name="nationality" value="{{@$user_prfile_data['nationality']}}">
                                    @if ($errors->has('nationality'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('nationality') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group{{ $errors->has('blood_gr') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="password">Blood Group:</label>
                                    <input id="school_id" type="text" class="form-control" name="blood_group" value="{{@$user_prfile_data['blood_group']}}">
                                    @if ($errors->has('school_name'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }} required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Mobile No:</label>
                                    <input id="school_name" type="text" class="form-control" name="mobile" value="{{@$user_prfile_data['mobile']}}">
                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>


                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('father_name') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Father name:</label>
                                    <input id="school_name" type="text" class="form-control" name="father_name" value="{{@$user_prfile_data['father_name']}}">
                                    @if ($errors->has('father_name'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('father_name') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Occupation:</label>
                                    <input id="school_name" type="text" class="form-control" name="f_occupation" value="{{@$user_prfile_data['f_occupation']}}">
                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('mother_name') ? ' has-error' : '' }}  required">
                                <div class="col-md-12" style="    margin-left: 0.1%;">
                                    <label class="control-label" for="password">Mother name:</label>
                                    <input id="school_name" type="text" class="form-control" name="mother_name" value="{{@$user_prfile_data['mother_name']}}">
                                    @if ($errors->has('mother_name'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('mother_name') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Occupation:</label>
                                    <input id="school_name" type="text" class="form-control" name="m_occupation" value="{{@$user_prfile_data['m_occupation']}}">
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group">
                                <div class="col-sm-12 col-md-12 col-lg-12 btm-bdr" style="  margin-bottom: 25px; margin-top: 20px;">
                                    <h4>Postal Address</h4>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('po_add_1') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Address 1:</label>
                                    <input id="school_name" type="text" class="form-control" name="po_add_1" value="{{@$user_prfile_data['po_add_1']}}">
                                    @if ($errors->has('po_add_1'))
                                        <span class="help-block">
                                                    <strong>{{ $errors->first('po_add_1') }}</strong>
                                                </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Address 2:</label>
                                    <input id="school_name" type="text" class="form-control" name="po_add_2" value="{{@$user_prfile_data['po_add_2']}}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('po_city') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">City:</label>
                                    <input id="school_name" type="text" class="form-control" name="po_city" value="{{@$user_prfile_data['po_city']}}">
                                    @if ($errors->has('po_city'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('po_city') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group{{ $errors->has('po_state') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">State:</label>
                                    <input id="school_name" type="text" class="form-control" name="po_state" value="{{@$user_prfile_data['po_state']}}">
                                    @if ($errors->has('po_state'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('po_state') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" name="h_c" value="{{strrev(@$class_data[0]["class_hash"])}}" />
                            <input type="hidden" name="h_s" value="{{strrev(@$school_data[0]["school_hash"])}}" />
                            <input type="hidden" name="h_co" value="{{strrev(@$course_data[0]["id"])}}" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('po_pin_code') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Pin Code:</label>
                                    <input id="school_name" type="text" class="form-control" name="po_pin_code" value="{{@$user_prfile_data['po_pin_code']}}">
                                    @if ($errors->has('po_pin_code'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('po_pin_code') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>

                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <div class="form-group">
                                <div class="col-sm-12 col-md-12 col-lg-12 btm-bdr" style="  margin-bottom: 25px; margin-top: 20px;">
                                    <h4>Permanent Address</h4>
                                </div>
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('pe_add_1') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Address 1:</label>
                                    <input id="school_name" type="text" class="form-control" name="pe_add_1" value="{{@$user_prfile_data['pe_add_1']}}">
                                    @if ($errors->has('pe_add_1'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('pe_add_1') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Address 2:</label>
                                    <input id="school_name" type="text" class="form-control" name="pe_add_2" value="{{@$user_prfile_data['pe_add_2']}}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('pe_city') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">City:</label>
                                    <input id="school_name" type="text" class="form-control" name="pe_city" value="{{@$user_prfile_data['pe_city']}}">
                                    @if ($errors->has('pe_city'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('pe_city') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group{{ $errors->has('pe_state') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">State:</label>
                                    <input id="school_name" type="text" class="form-control" name="pe_state" value="{{@$user_prfile_data['pe_state']}}">
                                    @if ($errors->has('pe_state'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('pe_state') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('pe_pin_code') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Pin Code:</label>
                                    <input id="school_name" type="text" class="form-control" name="pe_pin_code" value="{{@$user_prfile_data['pe_pin_code']}}">
                                    @if ($errors->has('pe_pin_code'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('pe_pin_code') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group">
                                <div class="col-sm-12 col-md-12 col-lg-12 btm-bdr" style="  margin-bottom: 25px; margin-top: 20px;">
                                    <h4>Last Academic Information</h4>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">School or Institite or University:</label>
                                    <input id="school_name" type="text" class="form-control" name="school" value="{{@$user_prfile_data['school']}}">
                                    @if ($errors->has('school'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('school') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Year:</label>
                                    <input id="school_name" type="text" class="form-control" name="year" value="{{@$user_prfile_data['year']}}">
                                    @if ($errors->has('year'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('year') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group{{ $errors->has('marks') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Cgpa or % Obtained:</label>
                                    <input id="school_name" type="text" class="form-control" name="marks" value="{{@$user_prfile_data['marks']}}">
                                    @if ($errors->has('marks'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('marks') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}  required">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Upload Photo</label>
                                    <input type="file" class="form-control" accept="image/*" name="photo" id='product-front-image'>
                                    @if ($errors->has('photo'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('photo') }}</strong>
                                </span>
                                    @endif
                                   
                                   
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group" align="center">
                                <div class="col-md-12" style="    margin-top: 4%;">
                                    <input type="submit" value="Apply" class="btn btn-success">
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>



                    </form>
                </div>
                <div class="col-sm-3 span3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Your Course Details</h3>
                        </div>
                        <div class="panel-body">
                            <p>{{$school_data[0]['school_name']}}</p>
                            <b><span>Course Name:</span></b>
                            <p>{{$class_data[0]['class_name']}}</p>
                            <b><span>Class Name:</span></b>
                            <p>{{$course_data[0]['course_name']}}</p>
                        </div>
                    </div>
                </div>
        </div>
        <!-- ==== Close Right ====== -->
    </div>
    </div> <!-- close container ( center area) -->
    
    <script>
     $(document).ready(function(){
      
          $('[name="type"][value="{{@$user_prfile_data['type']}}"]').prop('checked', true);
             
        $('[name="marital_status"][value="{{@$user_prfile_data['marital_status']}}"]').prop('checked', true);
         
     });
     
     
    </script>
    <link rel="stylesheet" href="http://localhost/lobaanya/public/plugins/filer/jquery.filer.css">
<script src="http://localhost/lobaanya/public/plugins/filer/jquery.filer.js"></script>
<script src="http://localhost/lobaanya/public/js/product.js"></script>
@endsection
