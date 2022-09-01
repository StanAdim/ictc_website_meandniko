<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>

<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!--NiftyJS [ RECOMMENDED ]-->
<script src="{{asset('assets/js/nifty.min.js')}}"></script>


<!--=================================================-->
<!--Bootstrap Timepicker [ OPTIONAL ]-->
<script src="{{asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>

<!--Bootstrap Datepicker [  ]-->
<script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<!--Form Component [ SAMPLE ]-->
{{--<script src="{{asset('assets/js/demo/form-component.js')}}"></script>--}}

<script>
    $('#demo-dp-txtinput input').datepicker({
        format: "yyyy-mm-dd",
        todayBtn: "linked",
        autoclose: true
    });
</script>

@yield('scripts')
@stack('after-scripts')