@extends('layouts.app')

@section('content')
 <style>
           .form-inline .form-control{
               width: 100%;
           }
       </style>
<div class="container pad" style="padding-top: 6%;">  
        <div class="row">
            <div class="col-md-12" style="padding-bottom: 5%;">
                <form class="form-inline text-center" role="form" method="GET" action="{{url('/home/search')}}">
                    <div class="col-md-3 col-sm-3  col-xs-3 pad0">
                        <select class="marg pad-in width-full custom-select form-select  brd-a-2-green" id="inlineFormCustomSelect" name="state">
                            <option value="">Select State</option>
                            <option value="1">Maharashtra</option>
                            <option value="2">Rajasthan</option>                                                                
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3 pad0 marg2">
                        <div class="input-group width-full m13-bot">
                            <select class=" width-full pad-in custom-select form-select  brd-a-2-green" id="inlineFormCustomSelect" name="city">
                                <option value="">Select City</option>
                                <option value="1">Mumbai</option>
                                <option value="2">Pune</option>
                                <option value="3">Jodhpur</option>
                                <option value="4">Jaipur</option>                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-11 pad0">
                        <input type="text" class="bot13 pad-in form-control form-text brd-a-2-green" id="title" name="school" placeholder="Search for Schools and Colleges..">
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-11 pad0">
                        <button type="text" class="bot13 pad-in btn btn-primary form-text brd-a-2-green pull-left">Search</button>
                    </div>                   
                </form>
            </div>
        </div>
        @foreach($results as $data)
            <div class="row" style="border: 1px solid #CCC; margin-bottom: 5%;">
                <div class="col-md-3" style="    padding-left: 0px;">
                    <img src="{{url('resources/assets/img/sinhgad.jpg')}}" style="width:100%;">
                </div>
                <div class="col-md-5">
                        <h3>{{$data->school_name}}</h3>
                        <p>Board/University : {{$data->board}}</p>
                        <p>Address: {{$data->address_1}} , {{$data->address_2}} , {{$data->city}}</p>
                        <p>Email: {{$data->email_id}}</p>
                        @if(strcmp(Auth::user()->user_role,getenv('ADMIN_CODE'))==0)
                            <a href="school/{{$data->school_hash}}" target="_blank" class="btn btn-warning pull-right">See Details</a>
                        @else
                            <a href="school/{{$data->school_hash}}" target="_blank" class="btn btn-warning pull-right">See Details and Apply</a>
                        @endif
                </div>
            </div>
        @endforeach
</div>
@endsection
