@extends('layouts.app')

@section('content')    
<div class="container application-base">
    <div class="col-md-8 col-md-offset-2 d_mar-btm">  
        <div class="panel panel-default">
            <div class="panel-heading main-page-head">School Details</div>
            <div class="panel-body">
                {!! Form::open(['name'=>'create', 'id'=>'create', 'files'=>true, 'method'=>'POST', 'url'=>'/school_details/save','enctype' => 'multipart/form-data']) !!}
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="row{{ $errors->has('school_name') ? ' has-error' : '' }}">
                    <div class="col-md-12 margin-btm">
                        <p>School Name:<span class="star">*</span></p>
                        <input id="school_name" type="text" class="form-control" name="school_name">
                        @if ($errors->has('school_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('school_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row{{ $errors->has('board') ? ' has-error' : '' }}">
                    <div class="col-md-12 margin-btm">
                        <p>Board or University Name:<span class="star">*</span></p>
                        <input id="board" type="text" class="form-control" name="board">
                        @if ($errors->has('board'))
                            <span class="help-block">
                                <strong>{{ $errors->first('board') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 margin-btm {{ $errors->has('address1') ? ' has-error' : '' }}">
                        <p>Address 1:<span class="star">*</span></p>
                        <input id="address1" type="text" class="form-control" name="address1">
                        @if ($errors->has('address1'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address1') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 margin-btm">
                        <p>Address 2:</p>
                        <input id="address2" type="text" class="form-control" name="address2">
                        @if ($errors->has('address2'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address2') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 margin-btm {{ $errors->has('city') ? ' has-error' : '' }}">
                        <p>City:<span class="star">*</span></p>
                        <input id="city" type="text" class="form-control" name="city">
                        @if ($errors->has('city'))
                            <span class="help-block">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 margin-btm {{ $errors->has('state') ? ' has-error' : '' }}">
                        <p>State:<span class="star">*</span></p>
                        <select class="form-control" name="state">
                            <option value="">------Select State------</option>                            
                            @foreach($state as $key=>$value)
                                <option value="{{++$key}}">{{$value->state}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('state'))
                            <span class="help-block">
                                <strong>{{ $errors->first('state') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 margin-btm {{ $errors->has('pincode') ? ' has-error' : '' }}">
                        <p>Pin Code:<span class="star">*</span></p>
                        <input id="pincode" type="text" class="form-control" name="pincode">
                        @if ($errors->has('pincode'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pincode') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 margin-btm phone1 {{ $errors->has('phone1') ? ' has-error' : '' }}">
                        <p>Phone No 1:<span class="star">*</span></p>
                         <input id="phone1" type="text" class="form-control" name="phone1">
                        @if ($errors->has('phone1'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone1') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 margin-btm">
                        <p>Phone No 2:</p>
                        <input id="phone2" type="text" class="form-control" name="phone2">                       
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 margin-btm">
                        <p>Phone No 3:</p>
                         <input id="phone3" type="text" class="form-control" name="phone3">                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 margin-btm">
                        <p>School Email:</p>
                        <input id="school_email" type="text" class="form-control" name="school_email">                       
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 margin-btm">
                        <p>Website:</p>
                        <input id="website"  type="text" class="form-control" name="website" placeholder="http://xyz.com">                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 margin-btm {{ $errors->has('school_logo') ? ' has-error' : '' }}">
                        <p>School logo:</p>
                        <input id="school_logo" type="file" class="form-control" name="school_logo">    
                         @if ($errors->has('school_logo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('school_logo') }}</strong>
                            </span>
                        @endif                   
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 margin-btm">
                        <p>School Banner:</p>
                         <input id="school_banner" type="file" class="form-control" name="school_banner">                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 col-save">
                        <input type="submit" id="school_register" class="new-btn pull-right" value="Save">
                    </div>                        
                </div>
                {!! Form::close()!!}
            </div>
        </div> 
    </div>
</div>
<script src="{!! asset('resources/assets/js/jquery.validate.min.js') !!}"></script>
<script src="{!! asset('resources/assets/js/jqueryvalidation.js') !!}"></script>
@stop 