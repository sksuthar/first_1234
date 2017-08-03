<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Admission schools or colleges</title>
    <link href="{!! asset('resources/assets/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('resources/assets/css/bootstrap-datetimepicker.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('resources/assets/css/style.css') !!}" rel="stylesheet">
    <script src="{!! asset('resources/assets/js/jquery-2.1.1.min.js') !!}"></script>
    <script src="{!! asset('resources/assets/js/bootstrap.min.js') !!}"></script>
    
    <script type="text/javascript">
        var BASE_URL = "{{url('/')}}";
    </script>   
    </head>
    <body>        
        @include('layouts.header')           
        @yield('content')

        @if(Auth::guest())
             @include('layouts.footer')
        @else
            @if(strcmp(Auth::user()->user_role,getenv('STUDENT_CODE'))==1)
            @include('layouts.footer')
            @endif
        @endif
    </body>
</html>