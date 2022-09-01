<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICTC | Login</title>

    @include('backend.partials._stylesheet-section')

   @include('backend.partials._script-section')

</head>

<body>
<div id="container" class="cls-container">

    <!-- LOGIN FORM -->
    <!--===================================================-->
    <div class="cls-content">
        <div class="cls-content-sm panel">
            <div class="panel-body">
                <div class="mar-ver">
                    <h1 class="h1 mar-no">Administration Login</h1>
                    <br/>
                    <p class="text-muted">Sign In to your account</p>
                </div>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
                </form>
            </div>

            <div class="pad-all">
                <a href="#" class="btn-link mar-rgt">Forgot password ?</a>
            </div>
        </div>
    </div>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
</body>
</html>
