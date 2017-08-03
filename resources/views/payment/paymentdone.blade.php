@extends('layouts.app')

@section('content')
<style type="text/css">
    .well {
        height:380px;
    }

    .form-group {
        margin-bottom: 0px;
    }
    .col-md-offset-2 {
        margin-left: 15.666667%;
    }
</style>

<div class="row wrapper border-bottom white-bg page-heading" style="    margin-top: 6%;">
    <div class="col-md-5 col-md-offset-2 col-sm-5">
        <h2>Hello, <span class="text-navy">Suresh Kumar !</h2> 
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12" style="margin: 0px;padding: 0px;">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="ibox-content" >
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                            <h2 style="    border-bottom: 1px solid #CCC; padding-bottom: 4%;">Thank you for the payment.</h2>
                            <div class="ibox-content p-xl" style="margin-bottom: 10%;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5>From:</h5>
                                        <address>
                                            <strong>Innovare</strong><br>
                                        </address>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <h4>Invoice No.</h4>
                                        <h4 class="text-navy"><?php echo "INV-"; ?>85695585</h4>
                                        <p>
                                            <span><strong>Invoice Date:</strong> <?php echo date('M d, Y'); ?></span><br/>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5>Name:</h5>
                                    </div>

                                    <div class="col-sm-6 text-right">
                                        <h5>Suresh Kumar</h5>
                                    </div>
                                </div>
                                <div class="row" style="background: #1AB394; padding-top: 15px; padding-bottom: 15px;">
                                    <div class="col-sm-6">
                                        <h5 style="color: #FFF;">Total Amount:</h5>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <h5 style="color: #FFF;">500</h5>
                                    </div>
                                </div>
                                <div><strong>Note: Email is sent to the registered id given</strong></div>
                            </div>

                           <div class="text-left col-sm-6 col-offset-l-0">
                                <a href="{{url('/home')}}" class="btn btn-warning"><i class="fa fa-angle-double-left"></i> Back to Home</a>
                            </div>
                            <div class="text-right col-sm-6 col-offset-r-0">
                                <button class="btn btn-danger download_receipt"  data-file="application_form_payment_receipt.pdf" data-stu_id="<?php ?>"><i class="fa fa-download"></i> Download Receipt</button>
                            </div>
                        </div>

                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Name: Jagruti Sangani 
Date: 2015-11-24
Purpose: Adde below code for downlad pdf f receipt -->


<script>

$(document).ready(function () {
    
$('body').on('click', '.download_receipt', function (e) {
            e.preventDefault();
            var file = $(this).data('file');
            var stu_id = $(this).data('stu_id');
            var url = 'admin/ajax/download_receipt/' + stu_id + '/' + file;
            downloadFile(url);
        });
});
</script>
@endsection