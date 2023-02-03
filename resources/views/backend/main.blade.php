<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICTC | @yield('title')</title>
    @include('backend.partials._stylesheet-section')
    <script>
        var base_url = "{!! url("/") !!}";
    </script>
</head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">
    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">
            @include('backend.partials._logo-section')
            @include('backend.partials._top-nav')
        </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">
        <!--CONTENT CONTAINER-->
        <!--===================================================-->
    @yield('content')
    <!--===================================================-->
        <!--END CONTENT CONTAINER-->

        <!--MAIN NAVIGATION-->
        <!--===================================================-->
        <!--Menu-->
        <!--================================-->
    @include('backend.partials._sidebar-nav')
    <!--================================-->
        <!--End menu-->
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->
    </div>

    <!-- FOOTER -->
    <!--===================================================-->
@include('backend.partials._footer-section')
<!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->

</body>
@include('backend.partials._script-section')

</html>
