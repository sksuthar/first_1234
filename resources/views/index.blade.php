@extends('layouts.app')

@section('content')
    <style>
        .form-inline .form-control{
            width: 100%;
        }
    </style>

    <div class=" home-page-bg bg-img-fit">
        <div class="row pad-up-down wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-xs-12">
                {!! Form::open(['files'=>true, 'method'=>'get', 'url'=>'/search','enctype' => 'multipart/form-data']) !!}
                <div class="col-md-3 col-sm-3  col-xs-3 pad0">
                    <select class="marg pad-in width-full custom-select form-select  brd-a-2-green" id="inlineFormCustomSelect" name="state">
                        <option value="">Select State</option>
                        @foreach($state as $row)
                            <option value="{{$row->state_id}}">{{$row->getstate->state_name}}</option>
                        @endforeach
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
                    <button type="text" class="bot13 pad-in btn btn-primary form-text brd-a-2-green">Search</button>
                </div>
                <div class="col-xs-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="home-text" align="center">Book your seats in school or college<br> or applying through this</div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>


    </div>
  

    <div class="content">
        <div class="grid">
            <figure class="effect-zoe">
                <img src="{{asset('resources/assets/img/25.jpg')}}" alt="img25"/>
                <figcaption>
                    <h2>Title <span>Name</span></h2>
                    <p class="icon-links">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-eye"></span></a>
                        <a href="#"><span class="icon-paper-clip"></span></a>
                    </p>
                    <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                </figcaption>
            </figure>
            <figure class="effect-zoe">
                <img src="{{asset('resources/assets/img/26.jpg')}}" alt="img26"/>
                <figcaption>
                    <h2>Title <span>Name</span></h2>
                    <p class="icon-links">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-eye"></span></a>
                        <a href="#"><span class="icon-paper-clip"></span></a>
                    </p>
                    <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                </figcaption>
            </figure>
        </div>
    </div>

    <div class="content">
        <div class="grid">
            <figure class="effect-zoe">
                <img src="{{asset('resources/assets/img/26.jpg')}}" alt="img27"/>
                <figcaption>
                    <h2>Title <span>Name</span></h2>
                    <p class="icon-links">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-eye"></span></a>
                        <a href="#"><span class="icon-paper-clip"></span></a>
                    </p>
                    <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                </figcaption>
            </figure>
            <figure class="effect-zoe">
                <img src="{{asset('resources/assets/img/26.jpg')}}" alt="img30"/>
                <figcaption>
                    <h2>Title <span>Name</span></h2>
                    <p class="icon-links">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-eye"></span></a>
                        <a href="#"><span class="icon-paper-clip"></span></a>
                    </p>
                    <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                </figcaption>
            </figure>
        </div>
    </div>
@stop 