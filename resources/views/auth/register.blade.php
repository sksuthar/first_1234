@extends('layouts.app')

@section('content')
<div class="container application-base">
    <div class="row">
        <?php if(Session::get('message')!=null){?>
        <div class="col-md-4 col-md-offset-4" style="padding-left: 0px; padding-right: 0px; margin-top: -3%;">  
             <div class="alert alert-danger">
                  <h4 class="alert-heading">Warning !</h4>
                    <?php echo Session::get('message'); ?>
                </div>
        </div>  
        <?php } ?>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 border-create back-color-f">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register/account') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">                            
                    <div class="col-md-12">
                        <h1>Register</h1>
                        <label>Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <label>E-Mail Address</label>
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
                        <label>Password</label>
                        <input id="password" type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <label>Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('user_role') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <label for="sel1">User Type</label>
                        <select class="form-control" id="sel1" name="user_role">
                            <option value="">Select</option>
                            <option value="stu0001">Student</option>
                            <option value="adm0002">Admin</option>
                        </select>
                        @if ($errors->has('user_role'))
                            <span class="help-block">
                                <strong>{{ $errors->first('user_role') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-md btn-block">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
