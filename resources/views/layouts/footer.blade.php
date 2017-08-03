<style>
    footer {
        position: inherit; 
        bottom: 0;
        left: 0;
        right: 0;       
}
</style>

<footer>
    
</footer>

@yield('pageFooterSpecificPlugin')

<script src="{!! asset('resources/assets/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('resources/assets/js/moment.js') !!}"></script>
<script src="{!! asset('resources/assets/js/bootstrap-datetimepicker.min.js') !!}"></script>
<script src="{!! asset('resources/assets/js/wow.min.js') !!}"></script>
<script src="{!! asset('resources/assets/js/jquery.easing.1.3.js') !!}"></script>
<script src="{!! asset('resources/assets/js/jquery.isotope.min.js') !!}"></script>
<script src="{!! asset('resources/assets/js/jquery.bxslider.min.js') !!}"></script>
@yield('pageFooterSpecificJS')