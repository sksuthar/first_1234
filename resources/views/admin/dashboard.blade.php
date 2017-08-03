@extends('layouts.app')

@section('content')   
<style>
    .container-top-mr{
          margin-top: 11em;
    }      
    .box-3-3 {
        width: 64%;
        text-align: center;
        height: 92px;
        margin: 0px 15px 15px 66px;
        background-color: #fff;
        border: 1px solid #DDD;
        border-radius: 4px; 
        padding: 32px 20px; 
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    } 
    body {
    margin-top:40px;
}
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>
<div class="container container-top-mr">
    <!-- <div class="stepwizard">
        <div class="stepwizard-row setup-panel">           
            <div class="stepwizard-step">
                <a href="" type="button" class="btn {{ @$schoolData->full_status == 1 ? ' btn-primary' : 'btn-default' }} btn-circle">1</a>
              <p>Step 1</p>
            </div>            
            <div class="stepwizard-step">
                <a href="" type="button" class="btn {{ @$schoolData->classdata[0]->create_status == 1 ? ' btn-primary' : 'btn-default' }} btn-circle">2</a>
              <p>Step 2</p>
            </div>            
            <div class="stepwizard-step">
                <a href="" type="button" class="btn {{ @$schoolData->classdata[0]->getadmissiondate[0]->admission_status == 1 ? ' btn-primary' : 'btn-default' }} btn-circle">3</a>
              <p>Step 3</p>
            </div>            
        </div>
    </div> -->
    <div class="row">
        @if(Session::get('success_message'))
            <div class="col-sm-8" style="padding-bottom:15px; margin-left: auto; margin-right: auto; padding-left: 0px; padding-right: 0px; ">
                <p class="bg-success" style="padding: 15px;"><?php echo Session::get('success_message'); ?></p>
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="box-3">

                <div class="label label-success lable-status">Complete</div>
                
                <div style="text-align: center;">
                    <h4>School Details</h4>
                    <a href="{{url('school-profile')}}" class="details-btn">Details</a>
                </div>                    
            </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="box-3">

               <div class="label label-warning lable-status">Pending</div>

            <div style="text-align: center;">
                <h4>Course Details</h4>
                <a href="" class="details-btn">Details</a>
            </div>   
            </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="box-3">

                 <div class="label label-warning lable-status">Pending</div>

            <div style="text-align: center;">
                <h4>Classes or Division Details</h4>
                <a href="" class="details-btn">Details</a>
            </div>   
            </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="box-3">

                <div class="label label-warning lable-status">Pending</div>

                <div style="text-align: center;">
                    <h4>Admissions Details</h4>
                    <a href="" class="details-btn">Details</a>
                </div>   
            </div>
        </div>
    </div>
</div>           
@stop 