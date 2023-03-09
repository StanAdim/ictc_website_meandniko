<!--Navbar Dropdown-->
<!--================================-->
<div class="navbar-content clearfix">
    <ul class="nav navbar-top-links pull-left">

        <!--Navigation toogle button-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <li class="tgl-menu-btn">
            <a class="mainnav-toggle" href="#">
                <i class="demo-pli-view-list"></i>
            </a>
        </li>


        <!--End Navigation toogle button-->
    </ul>

    <ul class="nav navbar-top-links pull-right">

        <!--User dropdown-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <li id="dropdown-user" class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                    <span class="pull-right">
                        <i class="demo-pli-male ic-user"></i>
                    </span>
                <div class="username hidden-xs">{{ucfirst(Auth::user()->fname)}} {{ucfirst(Auth::user()->surname)}}</div>
            </a>

            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">
                <!-- User dropdown menu -->
                <ul class="head-list">
                    <li>
                        <a href="#">
                            <i class="demo-pli-male icon-lg icon-fw"></i> Profile
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                        </a>
                    </li>
                </ul>

                <!-- Dropdown footer -->
                <div class="pad-all text-right">
                    <a href="{{route('logout')}}" class="btn btn-primary">
                        <i class="demo-pli-unlock"></i> Logout
                    </a>
                </div>
            </div>
        </li>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End user dropdown-->

    </ul>
</div>

<!--================================-->
<!--End Navbar Dropdown-->
