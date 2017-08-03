@extends('layouts.app')

@section('content')
<style>
*,
*:before,
*:after {
	box-sizing: border-box;
}

.row {
	/* column width */
	-moz-column-width: 25em;
	-webkit-column-width: 25em;
	
	/* space between columns */
	-moz-column-gap: 1em;
	-webkit-column-gap: 1em;
}

.item {
	display: inline-block;
	width: 100%;
}
</style>

<div class="container" style=" padding-top: 59px;">
    <h3>{{$classes_details[0]['class_name']}}</h3>
    <div class="row">
        @foreach($classes_details as $data)                       
            @foreach($data->courseDetails as $data1)
                <div class="item box">
                    {{$data1->course_name}}
                    @foreach($data1->bookDetails as $key=>$value)  
                        <br>
                        {{++$key}}.
                        {{$value->book_name}}
                    @endforeach
                    <br>
                    <p>Seat Intake: 60</p>
                    <a href="{{url("/school/$school_hash/$class_hash/$data1->id")}}" class="btn btn-warning btn-sm">Apply</a>
                </div>	
            @endforeach                   
        @endforeach
    </div>
</div>
<div class="container">
        <div class="row center-back">
            <!-- ======================= Center Part ============================ -->
            <div class="col-sm-9" style="border: 1px solid #DDD; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); padding-bottom:15px; ">
               <div>
                    <h3>{{$classes_details[0]['class_name']}}</h3>
                </div>
               @foreach($classes_details as $data)
                 
                    @foreach($data->courseDetails as $data1)
                  <div class="col-md-6" style="border: 1px solid #ccc; padding: 15px;">
                        {{$data1->id}}    {{$data1->course_name}}
                        @foreach($data1->bookDetails as $key=>$value)  
                        <br>
                         {{++$key}}
                      {{$value->book_name}}
                      
                        @endforeach
                     
                     </div>
                    @endforeach
                   
               @endforeach
            </div>
            <!-- ======================= Right Part ============================ -->

            <div class="col-sm-3 span3">
                <div>
                    <header>
                        <div class="box sb-right" style="background-color:#2cc16b; color:#fff; border:none;">
                            <span><i class="calendar icon"></i> Today</span>
                            <div style="margin-top:5px;">
                                <span style="font-size:18px;"><?php echo date("l, j F"); ?></span>
                            </div>
                        </div>

                    </header>
                    <div id="affi">
                        <div class="box">
                            <span style="color:#bbb;">My College</span>
                            <div style="margin-top:10px;" align="right">
                                <img style="margin-left:-10px; margin-bottom:10px;" src="assets/images/college.jpg" width="109%" height="auto">
                                <button class="btn btn-default btn-xs">Manage page</button>
                            </div>
                        </div>
                        <div class="box">
                            <p class="terms">sehooa &copy 2015</p>
                            <a class="a-tag terms" href="#">About</a>&nbsp
                            <a class="a-tag terms" href="#">Help</a>&nbsp
                            <a class="a-tag terms" href="#">Privace</a>&nbsp
                            <a class="a-tag terms" href="#">Terms</a>&nbsp
                            <a class="a-tag terms" href="#">Cookies</a>
                        </div>
                    </div>
                </div><!-- Fixed Div -->
            </div>
            <!-- ==== Close Right ====== -->
        </div>
    </div> <!-- close container ( center area) -->

@endsection