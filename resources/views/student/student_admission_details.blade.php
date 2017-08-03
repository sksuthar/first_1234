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
        <div class="row">
            <div class="col-sm-3 sol-md-3" style="margin-top: 64px; padding:25px; border: 1px solid #DDD; margin-right: 5px;">
                <div class="row">
                    <a href="http://localhost/wi/27-06-2017/application_list/search/436">  
                       <div style="text-align: center; border-bottom: 1px solid #DDD; padding-top: 10px; padding-bottom: 10px;">
                           1. Master Of Computer Application
                       </div>
                    </a>
                </div>
                <div class="row">
                    <a href="http://localhost/wi/27-06-2017/application_list/search/436">  
                       <div style="text-align: center; border-bottom: 1px solid #DDD; padding-top: 10px; padding-bottom: 10px;">
                           2. Master Of Computer Application
                       </div>
                    </a>
                </div>   
                <div class="row">
                    <a href="http://localhost/wi/27-06-2017/application_list/search/436">  
                       <div style="text-align: center; border-bottom: 1px solid #DDD; padding-top: 10px; padding-bottom: 10px;">
                           3. Master Of Computer Application
                       </div>
                    </a>
                </div>   
            </div>
            <div class="col-sm-8 sol-md-8" style="padding:25px;">
                <h3>Admision Details</h3>                                 
                  <div style="border: 1px solid #DDD;  padding-bottom:30px; ">
                      @if(!empty(@$admission_data))
                    @foreach(@$admission_data as $row)
                        <div style="border-bottom: 1px solid #ccc; padding: 30px;">
                            <span style="    color: #20bd99;
    font-weight: 700;"> {{@$row->classdata['class_name']}}</span><span class="pull-right">Admisson Date : {{date('d-m-Y', strtotime(@$row->created_at))}}</span><br>    
                        {{@$row->coursedata['course_name']}}    <br>  
                        School / College : {{@$row->schooldata['school_name']}}  
                        </div>
                    @endforeach
                    @else
                     <div style="border-bottom: 1px solid #ccc; padding: 75px;">                       
                         <div style="color: #20bd99; font-weight: 700; text-align: center;"> Not yet take admission</div>
                        </div>
                    <div style="text-align: center; padding-top: 15px;"><a href="{{url('/')}}">Take Admission</a></div>
                    @endif
                  </div>
            </div>
        </div>     
        </div>
    </div>    
@endsection
