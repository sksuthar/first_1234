@extends('layouts.app')

@section('content')
 
<div class="container application-base">
    <div class="row">
        <?php if(Session::get('message')!=null){?>
        <div class="col-md-4 col-md-offset-4" style="padding-left: 0px; padding-right: 0px; margin-top: -3%;">  
            <div class="alert alert-success">
                <h4 class="alert-heading">Register Success !</h4>
                <?php echo Session::get('message'); ?>
            </div>
        </div>  
        <?php } ?>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 border-create back-color-f">                                  
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                   
                    <div class="col-md-12">
                        <h1>Login</h1>
                        <label for="ap_email">Email Id</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-md btn-block">Login</button>
                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <a href="{{url('/register')}}" class="btn btn-default btn-md btn-block">Create your Admission account</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
