<style>
.dropdown ul.dropdown-menu {
        border-radius:4px;
        box-shadow:none;
        margin-top:20px;
        margin-left: -210px;
        width:300px;
}
.dropdown ul.dropdown-menu:before {
        content: "";
        border-bottom: 10px solid #fff;
        border-right: 10px solid transparent;
        border-left: 10px solid transparent;
        position: absolute;
        top: -10px;
        right: 16px;
        z-index: 10;
}
.dropdown ul.dropdown-menu:after {
        content: "";
        border-bottom: 12px solid #ccc;
        border-right: 12px solid transparent;
        border-left: 12px solid transparent;
        position: absolute;
        top: -12px;
        right: 14px;
        z-index: 9;
}	

</style>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>                          
            @if (Auth::guest())
                  <a class="navbar-brand" href="{{url('/')}}"><span>India</span></a>
            @else               
                    <a class="navbar-brand" href="{{url('/home')}}"><span>India</span></a>
               
            @endif                                                       
        </div>
        @if (Auth::guest())
                <a href="{{ url('/login') }}" class="btn btn-primary btn-sm pull-right" style="margin-top: 10px;">Login</a>
        @else
        <div class="navbar-collapse collapse pull-right">
            <div class="menu">
                <ul role="tablist">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ ucfirst(Auth::user()->email) }}&nbsp;&nbsp;<span class="glyphicon glyphicon-user pull-right"></span></a>
                            <ul class="dropdown-menu">
                            @if(strcmp(Auth::user()->user_role,getenv('ADMIN_CODE'))==1)
                                <li><a href="{{url('/profile')}}">Profile<span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('/admission-details')}}">Admission Details<span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                                <li class="divider"></li>
                            @endif
                            @if(strcmp(Auth::user()->user_role,getenv('ADMIN_CODE'))==0)
                                <li>
                                    <a href="{{url('/school_college_details/one-step')}}">School and College details<span class="glyphicon glyphicon-cog pull-right"></span></a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{url('/application_list')}}">Application form list<span class="glyphicon glyphicon-cog pull-right"></span></a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{url("setting/tab/1")}}">Account Settings<span class="glyphicon glyphicon-cog pull-right"></span></a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{url("admission-status")}}">Admission Status<span class="glyphicon glyphicon-cog pull-right"></span></a>
                                </li>
                                <li class="divider"></li>
                            @endif
                            @if(strcmp(Auth::user()->user_role,getenv('ADMIN_CODE'))==1)

                            @endif
                            <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/logout') }}">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                            </ul>
                        </li>
                    </ul>
                        @endif
                </ul>
            </div>
        </div>
    </div>
</nav>