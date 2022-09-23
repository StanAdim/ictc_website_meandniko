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


                            <!--Menu list item-->
                            <li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['backend.posts.index','backend.posts.show','backend.posts.create','backend.posts.edit'])}}">
                                <a href="{{ route('backend.posts.index') }}">
                                    <i class="glyphicon glyphicon-tasks"></i>
                                    <span class="menu-title">
                                        <strong>Posts</strong>
                                    </span>
                                </a>
                            </li>

                            <!--Menu list item-->
                            <li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['backend.events.index','backend.events.show','backend.events.create','backend.events.edit'])}}">
                                <a href="{{ route('backend.events.index') }}">
                                    <i class="glyphicon glyphicon-tasks"></i>
                                    <span class="menu-title">
                                        <strong>Events</strong>
                                    </span>
                                </a>
                            </li>

                            <!--Menu list item-->
                            <li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['backend.awards.index','backend.awards.show','backend.awards.create','backend.awards.edit'])}}">
                                <a href="{{ route('backend.awards.index') }}">
                                    <i class="glyphicon glyphicon-tasks"></i>
                                    <span class="menu-title">
                                        <strong>Awards</strong>
                                    </span>
                                </a>
                            </li>

                            <!--Menu list item-->
                            <li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['backend.investments.index','backend.investments.show','backend.investments.create','backend.investments.edit'])}}">
                                <a href="{{ route('backend.investments.index') }}">
                                    <i class="glyphicon glyphicon-tasks"></i>
                                    <span class="menu-title">
                                        <strong>Investments</strong>
                                    </span>
                                </a>
                            </li>

                            <!--Menu list item-->
                            <li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['backend.pages.index','backend.pages.show','backend.pages.create','backend.pages.edit'])}}">
                                <a href="{{ route('backend.pages.index') }}">
                                    <i class="glyphicon glyphicon-tasks"></i>
                                    <span class="menu-title">
                                        <strong>Page</strong>
                                    </span>
                                </a>
                            </li>

                            <!--Menu list item-->
                            <li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['backend.socials.index','backend.socials.show','backend.socials.create','backend.socials.edit'])}}">
                                <a href="{{ route('backend.socials.index') }}">
                                    <i class="glyphicon glyphicon-tasks"></i>
                                    <span class="menu-title">
                                        <strong>Social Accounts</strong>
                                    </span>
                                </a>
                            </li>

                            <!--Menu list item-->
                            <li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['backend.links.index','backend.links.show','backend.links.create','backend.links.edit'])}}">
                                <a href="{{ route('backend.links.index') }}">
                                    <i class="glyphicon glyphicon-tasks"></i>
                                    <span class="menu-title">
                                        <strong>Useful Links</strong>
                                    </span>
                                </a>
                            </li>

                            {{--<!--Menu list item-->--}}
                            {{--<li class="{{\App\Helpers\ManageRoute::areActiveRoutes(['backend.general.index'])}}">--}}
                                {{--<a href="{{ route('backend.general.index') }}">--}}
                                    {{--<i class="glyphicon glyphicon-tasks"></i>--}}
                                    {{--<span class="menu-title">--}}
                                        {{--<strong>General Configuration</strong>--}}
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
