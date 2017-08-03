@extends('layouts.app')

@section('content')   
<style>
.card.hovercard .cardheader { 
     background: url("{{url($schoolData->school_banner)}}");
}
.item{        
    background: #4DC7A0;     
    width: 13.5em;
    border:1px solid #c2c2c2;
    margin-left: 7%;
    height: 15em;
}
html,
input {
    box-sizing: border-box;
    font-family: Helvetica, sans-serif;
}

* {
    box-sizing: inherit;
}

.hidden {
    display: none;
}

.img-export {
    display: block;
}

</style>
<link href="{!! asset('resources/assets/css/owlcarousel/owl.carousel.min.css') !!}" rel="stylesheet">
<link href="{!! asset('resources/assets/css/owlcarousel/owl.theme.default.min.css') !!}" rel="stylesheet">
<script src="{!! asset('resources/assets/js/owlcarousel/owl.carousel.js') !!}"></script>
<div class="container application-base-profile">
    <div class="row">
        <div class="col-lg-10 col-sm-10 col-md-10" style="float: none;    margin-left: auto;  margin-right: auto;">
            <div class="card hovercard">
                <div class="cardheader"></div>
                <div class="avatar">
                    <img alt="" src="{{url($schoolData->school_logo)}}">
                </div>
                <div class="info">
                    <div class="title">
                        <p class="head-color" style="margin: 0 0 0px;">{{$schoolData->school_name}}</p>
                        [ {{$schoolData->board}} ]
                    </div>
                    <div class="desc">{{$schoolData->address1}} , {{$schoolData->address2}}</div>                        
                </div>             
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 col-sm-10 col-md-10" style="float: none;  margin-left: auto;  margin-right: auto; margin-top: 2em;">
            <div class="application-col-section">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="profile-head">Details</h4>
                    </div>
                    <div class="col-md-6 text-right">        
                        <span class="glyphicon glyphicon-pencil edit_gallery profile-head" data-toggle="modal" data-target="#editGallery"></span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 margin-btm-10" style="padding-left: 45px;">
                        <label>School Name :</label> <span id="school_name">{{$schoolData->school_name}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 margin-btm-10" style="padding-left: 45px;">
                        <label>Board :</label> <span id="board">{{$schoolData->board}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 margin-btm-10" style="padding-left: 45px;">
                        <label>Address :</label> <span id="address1">{{$schoolData->address1}}</span>&nbsp; <span id="address2">{{$schoolData->address2}}</span>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 margin-btm-10" style="padding-left: 45px;">
                        <label>City :</label> <span id="city">{{$schoolData->city}}</span>
                    </div>
                     <div class="col-md-6 col-sm-6 margin-btm-10">
                         <label>State :</label> <span id="state">{{$schoolData->getstate->state}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 margin-btm-10" style="padding-left: 45px;">
                        <label>Pin Code :</label> <span id="pincode">{{$schoolData->pincode}}</span>
                    </div>
                     <div class="col-md-6 col-sm-6 margin-btm-10">
                         <label>Phone 1 :</label> <span id="phone1">{{$schoolData->phone1}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 margin-btm-10" style="padding-left: 45px;">
                        <label>Phone 2 :</label> <span id="phone2">{{$schoolData->phone2}}</span>
                    </div>
                     <div class="col-md-6 col-sm-6 margin-btm-10">
                        <label>Phone 3 :</label> <span id="phone3">{{$schoolData->phone3}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 margin-btm-10" style="padding-left: 45px;">
                        <label>Email Id :</label> <span id="school_email">{{$schoolData->school_email}}</span>
                    </div>
                     <div class="col-md-6 col-sm-6 margin-btm-10">
                        <label>Website :</label> <span id="website">{{$schoolData->website}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 col-sm-10 col-md-10" style="float: none;  margin-left: auto;  margin-right: auto; margin-top: 2em;">
            <div class="application-col-section">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="profile-head">Gallery</h4>
                    </div>
                    <div class="col-md-6 text-right">       
                         <span class="glyphicon glyphicon-plus  profile-head" data-toggle="modal" data-target="#myModal"></span>
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    <div class="col-sm-12 large-12 columns">
                        <div class="owl-carousel owl-theme">
                            @foreach($gallery as $value)
                            <div class="item">
                               <img alt="" src="{{url($value->image_name)}}">
                            </div>
                            @endforeach
                        </div>
                    </div>                               
                </div>
            </div>  
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 col-sm-10 col-md-10" style="float: none;  margin-left: auto;  margin-right: auto; margin-top: 2em;">
            <div class="application-col-section">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="profile-head">Courses and Classes</h4>
                    </div>
                    <div class="col-md-6 text-right">                
                        <h4 class="profile-head"></h4>
                    </div>
                </div>
                <hr>
                
                <div class="row">
                                                 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Edit Details images  -->
<div id="editGallery" class="modal fade" role="dialog">
    <div class="gallery-dialog-modal">
        <div class="modal-content">
            {!! Form::open(['name'=>'gallery_form', 'id'=>'gallery_form', 'files'=>true, 'method'=>'POST', 'url'=>'/school-profile/upload-gallery','enctype' => 'multipart/form-data']) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Gallery</h4>             
                </div>
                <div class="modal-body">
                     
                <div class="row">
                    <div class="col-md-12 margin-btm-10" style="padding-left: 45px; padding-right: 45px;">
                        <label>School Name :</label>
                        <input type="text" class="form-control" id="school_name_edit" name="school_name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 margin-btm-10" style="padding-left: 45px; padding-right: 45px;">
                        <label>Board :</label>
                        <input type="text" class="form-control" id="board_edit" name="board">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 margin-btm-10" style="padding-left: 45px; padding-right: 45px;">                        
                        <label>Address Line 1 :</label>
                        <input type="text" class="form-control" id="address1_edit" name="address1">
                    </div>   
                     <div class="col-md-6 col-sm-6 margin-btm-10" style="padding-right: 45px;">   
                        <label>Address Line 2 :</label>
                        <input type="text" class="form-control" id="address2_edit" name="address2">
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 margin-btm-10" style="padding-left: 45px; padding-right: 45px;">
                        <label>City :</label>  
                        <input type="text" class="form-control" id="city_edit" name="city">
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
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 margin-btm-10" style="padding-left: 45px; padding-right: 45px;">
                        <label>Pin Code :</label>
                        <input type="text" class="form-control" id="pincode_edit" name="pincode">
                    </div>
                     <div class="col-md-6 col-sm-6 margin-btm-10">
                        <label>Phone 1 :</label>
                        <input type="text" class="form-control" id="phone1_edit" name="phone1">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 margin-btm-10" style="padding-left: 45px; padding-right: 45px;">
                        <label>Phone 2 :</label> 
                        <input type="text" class="form-control" id="phone2_edit" name="phone2">
                    </div>
                     <div class="col-md-6 col-sm-6 margin-btm-10">
                        <label>Phone 3 :</label>
                        <input type="text" class="form-control" id="phone3_edit" name="phone3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 margin-btm-10" style="padding-left: 45px; padding-right: 45px;">
                        <label>Email Id :</label><input type="text" class="form-control" id="school_email_edit" name="school_email">
                    </div>
                     <div class="col-md-6 col-sm-6 margin-btm-10">
                         <label>Website :</label><input type="text" class="form-control" id="website_edit" name="website">
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Upload" class="new-btn"></input>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End Details images -->

<!-- Add Gallery images  -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(['name'=>'gallery_form', 'id'=>'gallery_form', 'files'=>true, 'method'=>'POST', 'url'=>'/school-profile/upload-gallery','enctype' => 'multipart/form-data']) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Gallery</h4>             
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 gallery-class {{ $errors->has('image_name') ? ' has-error' : '' }}">
                            <input type="file" name="image_name" id="file" class="custom-file-input">
                            @if ($errors->has('image_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image_name') }}</strong>
                            </span>
                            @endif  
                        </div>
                    </div>    
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Upload" class="new-btn"></input>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End Gallery images -->

<script type="text/javascript">
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 3,
          nav: false
        },
        1000: {
          items: 4,
          nav: true,
          loop: false,
          margin: 20,
          width:200
        }
      }
    });      
});
</script>
<script src="{!! asset('resources/assets/js/jquery.validate.min.js') !!}"></script>
<script src="{!! asset('resources/assets/js/jqueryvalidation.js') !!}"></script>
<script src="{!! asset('resources/assets/js/app.js') !!}"></script>
@stop 