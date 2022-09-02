@push('after-styles')
    {{ Html::style(url("vendor/xdan/css/jquery.datetimepicker.min.css")) }}
@endpush

@push('after-scripts')
    {{ Html::script(url("vendor/xdan/js/jquery.datetimepicker.full.min.js")) }}
    <script>
        $(function () {
            jQuery('.datepicker').datetimepicker({
                timepicker:false,
                format:'Y-m-d',
                weeks: true,
                dayOfWeekStart: 1,
                lazyInit: true,
                scrollInput: false
            });

            jQuery('.datetimepicker').datetimepicker({
                timepicker:true,
                format:'Y-m-d H:i:s',
                weeks: true,
                dayOfWeekStart: 1,
                lazyInit: true,
                scrollInput: false
            });

            jQuery('.datepicker2').datetimepicker({
                timepicker:false,
                format:'d-M-Y',
                weeks: true,
                dayOfWeekStart: 1,
                lazyInit: true,
                scrollInput: false
            });

            jQuery('.datetimepicker2').datetimepicker({
                timepicker:true,
                format:'Y-m-d H:i:s',
                weeks: true,
                dayOfWeekStart: 1,
                lazyInit: true,
                scrollInput: false
            });
        });
    </script>
@endpush
