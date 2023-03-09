<div id="content-container">
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">@yield('title')</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->

    @include('backend.partials._breadcrumb')

    @include('backend.partials._alert')

    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        {{--<div class="row">--}}
            {{--<div class="col-lg-12">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-6 col-lg-6">--}}
                        {{--<!--Sparkline Area Chart-->--}}
                        {{--<div class="panel panel-info panel-colorful">--}}
                            {{--<div class="pad-all text-center">--}}
                                {{--<p class="text-lg text-semibold big-font">--}}
                                    {{--<i class="demo-pli-data-storage icon-fw"></i> Pending Work Orders--}}
                                {{--</p>--}}
                                {{--<p class="mar mt-2 bigger-font text-bold">--}}
                                    {{--{{number_format($pending_work_order)}}--}}
                                {{--</p>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 col-lg-6">--}}

                        {{--<!--Sparkline Line Chart-->--}}
                        {{--<div class="panel panel-info panel-colorful">--}}
                            {{--<div class="pad-all text-center">--}}
                                {{--<p class="text-lg text-semibold big-font">--}}
                                    {{--<i class="demo-pli-wallet-2 icon-fw"></i>Completed Work Orders</p>--}}
                                {{--<p class="mar mt-2 bigger-font text-bold">--}}
                                    {{--{{$completed_work_order}}--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}

                    {{--<div class="col-sm-6 col-lg-6">--}}
                        {{--<!--Sparkline Area Chart-->--}}
                        {{--<div class="panel panel-info panel-colorful">--}}
                            {{--<div class="pad-all text-center">--}}
                                {{--<p class="text-lg text-semibold big-font">--}}
                                    {{--<i class="demo-pli-data-storage icon-fw"></i> Average Performance--}}
                                {{--</p>--}}
                                {{--<p class="mar mt-2 bigger-font text-bold">--}}
                                    {{--{{$average_performance ? number_format($average_performance, 0) : '94'}}%--}}
                                {{--</p>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 col-lg-6">--}}

                        {{--<!--Sparkline Line Chart-->--}}
                        {{--<div class="panel panel-info panel-colorful">--}}
                            {{--<div class="pad-all text-center">--}}
                                {{--<p class="text-lg text-semibold big-font">--}}
                                    {{--<i class="demo-pli-wallet-2 icon-fw"></i>Equipment List</p>--}}
                                {{--<p class="mar mt-2 bigger-font text-bold">--}}
                                    {{--{{$equipment_count}}--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-6 col-lg-6">--}}
                        {{--<!--Sparkline bar chart -->--}}
                        {{--<div class="panel panel-info panel-colorful">--}}
                            {{--<div class="pad-all text-center">--}}
                                {{--<p class="text-lg text-semibold big-font">--}}
                                    {{--<i class="demo-pli-bag-coins icon-fw"></i> Performed Inspections</p>--}}
                                {{--<p class="mar mt-2 bigger-font text-bold">--}}
                                    {{--{{$inspection_count}}--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 col-lg-6">--}}

                        {{--<!--Sparkline pie chart -->--}}
                        {{--<div class="panel panel-info panel-colorful">--}}
                            {{--<div class="pad-all text-center">--}}
                                {{--<p class="text-lg text-semibold big-font">--}}
                                    {{--<i class="demo-pli-check icon-fw"></i> Performed Services--}}
                                {{--</p>--}}
                                {{--<p class="mar mt-2 bigger-font text-bold">--}}
                                    {{--{{$service_count}}--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>
