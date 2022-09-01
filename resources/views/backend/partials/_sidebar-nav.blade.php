<nav id="mainnav-container">
    <div id="mainnav">
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    @if(Auth::check())
                        <ul id="mainnav-menu" class="list-group">
                            <!--Category name-->
                            <li class="list-header">Menu</li>

                            <!--Menu list item-->
                            <li class="{{\App\Helpers\ManageRoute::isActiveRoute('backend.dashboard')}}">
                                <a href="{{ route('backend.dashboard') }}">
                                    <i class="glyphicon glyphicon-home"></i>
                                    <span class="menu-title">
                                        <strong>Dashboard</strong>
                                    </span>
                                </a>
                            </li>

                            <!--Menu list item-->
                            <li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['backend.banners.index','backend.banners.show','backend.banners.create','backend.banners.edit'])}}">
                                <a href="{{ route('backend.banners.index') }}">
                                    <i class="glyphicon glyphicon-tasks"></i>
                                    <span class="menu-title">
                                        <strong>Banners</strong>
                                    </span>
                                </a>
                            </li>

                            <!--Menu list item-->
                            <li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['backend.leaders.index','backend.leaders.show','backend.leaders.create','backend.leaders.edit'])}}">
                                <a href="{{ route('backend.leaders.index') }}">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span class="menu-title">
                                        <strong>Leaders</strong>
                                    </span>
                                </a>
                            </li>

                            <!--Menu list item-->
                            <li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['backend.sections.index','backend.sections.show','backend.sections.create','backend.sections.edit'])}}">
                                <a href="{{ route('backend.sections.index') }}">
                                    <i class="glyphicon glyphicon-tasks"></i>
                                    <span class="menu-title">
                                        <strong>Sections</strong>
                                    </span>
                                </a>
                            </li>


                            {{--<!--Menu list item-->--}}
                            {{--<li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['backend.banners.index'])}}">--}}
                                {{--<a href="{{ route('backend.banners.index') }}">--}}
                                    {{--<i class="glyphicon glyphicon-user"></i>--}}
                                    {{--<span class="menu-title">--}}
                                        {{--<strong>Spares</strong>--}}
                                    {{--</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                            {{--<!--Menu list item-->--}}
                            {{--<li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['breakdowns.index','breakdowns.show','breakdowns.create','breakdowns.edit'])}}">--}}
                                {{--<a href="{{ route('breakdowns.index') }}">--}}
                                    {{--<i class="glyphicon glyphicon-tasks"></i>--}}
                                    {{--<span class="menu-title">--}}
                                        {{--<strong>Breakdowns</strong>--}}
                                    {{--</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}


                            {{--<!--Menu list item-->--}}
                            {{--<li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['work_order.index','work_order.show','work_order.create.work_order','work_order.edit'])}}">--}}
                                {{--<a href="{{ route('work_order.index') }}">--}}
                                    {{--<i class="glyphicon glyphicon-tasks"></i>--}}
                                    {{--<span class="menu-title">--}}
                                        {{--<strong>Work Orders</strong>--}}
                                    {{--</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}


                            {{--<!--Menu list item-->--}}
                            {{--<li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['inspection.index','inspection.view', 'inspection.create'])}}">--}}
                                {{--<a href="{{ route('inspection.index') }}">--}}
                                    {{--<i class="glyphicon glyphicon-briefcase"></i>--}}
                                    {{--<span class="menu-title">--}}
                                        {{--<strong>Inspections</strong>--}}
                                    {{--</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                            {{--<!--Menu list item-->--}}
                            {{--<li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['service.index'])}}">--}}
                                {{--<a href="{{ route('service.index') }}">--}}
                                    {{--<i class="glyphicon glyphicon-briefcase"></i>--}}
                                    {{--<span class="menu-title">--}}
                                        {{--<strong>Services</strong>--}}
                                    {{--</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<!--Menu list item-->--}}
                            {{--<li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['report.index', 'report.equipment_job_card', 'report.current_spare', 'report.equipment_expenses_report'])}}">--}}
                                {{--<a href="{{ route('report.index') }}">--}}
                                    {{--<i class="glyphicon glyphicon-briefcase"></i>--}}
                                    {{--<span class="menu-title">--}}
                                        {{--<strong>Reports</strong>--}}
                                    {{--</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
