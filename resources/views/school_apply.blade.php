@extends('layouts.app')

@section('content')
    <style type="text/css">
        .active-home a img{
            border-bottom:2px solid #4ca2f4;
        }
        .active-home a img:hover {
            opacity: 1 !important;
        }
        .row2 {
            -moz-column-width: 400px;
            -webkit-column-width: 400px;
            -moz-column-gap: 15px;
            -webkit-column-gap: 15px;
        }
        .menu-category {
            display: inline-block;
            width: 100%;
            border: 1px solid #ddd;
            margin: 0 0 10px 0;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
            border-radius: 2px;
            /* background: #FFF; */
            padding: 15px;
            color: #444;
        }
    </style>
    @php 
    $school_hash = $school_data[0]['school_hash'];
    @endphp
    <div class="container">
        <div class="row center-back">
            <!-- ======================= Center Part ============================ -->
            <div class="col-sm-9" style="border: 1px solid #DDD; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); padding-bottom:15px; ">
                <div align="center">
                    <h4>{{@$school_data[0]['school_name']}}</h4>
                    <p></p>
                </div>
                <div align="center" style="padding-bottom: 3em;">
                    <a href="{{url('/')}}" class="btn btn-primary btn-sm pull-right">Download Prospectus</a>
                </div>
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td>School or College Name:</td>
                        <td>{{@$school_data[0]['school_name']}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Address 1:</td>
                        <td>{{@$school_data[0]['address_1']}}</td>
                        <td>Address 1:</td>
                        <td>{{@$school_data[0]['address_1']}}</td>
                    </tr>
                    <tr>
                        <td>City :</td>
                        <td>{{@$school_data[0]['city']}}</td>
                        <td>Pin Code :</td>
                        <td>{{@$school_data[0]['pin_code']}}</td>
                    </tr>
                    <tr>
                        <td>City :</td>
                        <td>{{@$school_data[0]['city']}}</td>
                        <td>Pin Code :</td>
                        <td>{{@$school_data[0]['pin_code']}}</td>
                    </tr>
                    <tr>
                        <td>State :</td>
                        <td> {{@$school_data[0]->getstate['state_name']}}</td>
                        <td>Phone No 1 :</td>
                        <td>{{@$school_data[0]['phone_no1']}}</td>
                    </tr>
                    <tr>
                        <td>Phone No 2 :</td>
                        <td>{{@$school_data[0]['phone_no2']}}</td>
                        <td>Phone No 3 :</td>
                        <td>{{@$school_data[0]['phone_no3']}}</td>
                    </tr>

                    </tbody>
                </table>

                <div class="form-group">
                    <div class="col-sm-12 col-md-12 col-lg-12 btm-bdr" style="  margin-bottom: 25px; margin-top: 20px;">
                        <h4>Classes details</h4>
                    </div>
                </div>
                <div class="form-group">
                    @if(@$classes_details)
                        <?php $i = 1 ?>
                        @foreach(@$classes_details as $row)                        
                            <div class="col-md-4" style="border: 1px solid #ccc; padding: 15px;">
                                {{--{!! Form::open(['name'=>'create', 'id'=>'create', 'files'=>true, 'method'=>'post', 'url'=>'/apply/student/application_form','enctype' => 'multipart/form-data']) !!}  --}}
                                 @if(!empty($row->getadmissiondate[0]))
                                    @foreach($row->getadmissiondate as $details)
                                        <p><span class="label label-warning">{{$details->class_id}}Admission Open</span></p>
                                    @endforeach
                                 @endif<br>
                                {{$row->class_name}}
                                <?php $j = 1; ?>
                                @foreach(@$course_details as $key=>$value)
                                    @if($value->class_id == $row->id)
                                        <div class="input_fields_wrap" id="field">
                                            <div style="margin: 7px 0px; border-bottom: 1px solid #CCCCCC;">
                                                {{$j++}} . {{$value->course_name}}
                                                  @if(!empty($row->getadmissiondate[0]))
                                                <button class="btn btn-warning btn-xs pull-right course_details" value="{{$row->class_name}}" data-course="{{$value->course_name}}" data-ch="{{$value->id}}" id="{{$row->class_hash}}" data-toggle="modal" data-target="#myModal">Apply</button>
                                                @endif
                                            </div>
                                           
                                        </div>
                                    @endif
                                    
                                @endforeach
                                    <div>
                                        <a href="{{url("/view-course/$school_hash/$row->class_hash")}}" class="btn btn-info btn-sm">View Details</a>
                                    </div>  
                                @if(!empty($row->getadmissiondate[0]))
                                    @foreach($row->getadmissiondate as $details)
                                     <input type="hidden" value="{{$row->class_hash}}" name="c_n"/>
                                        {{--<button class="btn btn-warning btn-xs pull-right applyadmission" value="{{$row->class_name}}" data-course="{{$value->course_name}}" id="{{$row->class_hash}}" data-toggle="modal" data-target="#myModal">Active Admission</button>--}}
                                    {{--<button type="submit" class="btn btn-warning btn-xs pull-right">Apply For Admission</button>--}}
                                    @endforeach
                                 @endif
                                  {{--{!! Form::close() !!}--}}
                            </div>                        
                        @endforeach
                    @endif
                </div>
            </div>
            <!-- ======================= Right Part ============================ -->

            <div class="col-sm-3 span3">
                <div>
                    <header>
                        <div class="box sb-right" style="background-color:#2cc16b; color:#fff; border:none;">
                            <span><i class="calendar icon"></i> Today</span>
                            <div style="margin-top:5px;">
                                <span style="font-size:18px;"><?php echo date("l, j F"); ?></span>
                            </div>
                        </div>

                    </header>
                    <div id="affi">
                        <div class="box">
                            <span style="color:#bbb;">My College</span>
                            <div style="margin-top:10px;" align="right">
                                <img style="margin-left:-10px; margin-bottom:10px;" src="assets/images/college.jpg" width="109%" height="auto">
                                <button class="btn btn-default btn-xs">Manage page</button>
                            </div>
                        </div>
                        <div class="box">
                            <p class="terms">sehooa &copy 2015</p>
                            <a class="a-tag terms" href="#">About</a>&nbsp
                            <a class="a-tag terms" href="#">Help</a>&nbsp
                            <a class="a-tag terms" href="#">Privace</a>&nbsp
                            <a class="a-tag terms" href="#">Terms</a>&nbsp
                            <a class="a-tag terms" href="#">Cookies</a>
                        </div>
                    </div>
                </div><!-- Fixed Div -->
            </div>
            <!-- ==== Close Right ====== -->
        </div>
    </div> <!-- close container ( center area) -->

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" >
            <!-- Modal content-->
            <div class="modal-content" ng-app="wizboat-app"  ng-controller="admissionapplyctrl">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Course Details</h4>
                </div>
                <div class="alert alert-success" id="success-container" style="display:none;">

                </div>
                <div class="alert alert-danger" id="error-container" style="display:none;">

                </div>
                <form class="form-horizontal" name="userForm" role="form" method="POST" ng-submit="course_details()">
                    <div class="modal-body">
                        <h4 id="admission_model1"></h4>
                        <h5 id="year_data"></h5>
                        <input id="_cl_h" type="hidden" ng-model="app_a" value="">
                        <input id="_c_h" type="hidden" ng-model="app_a" value="">
                        <input id="_s_h" type="hidden" ng-model="app_a" value="{{@$school_data[0]['school_hash']}}">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <label class="control-label" for="password"></label>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Next</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
