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
        <div class="cls-content-lg panel">
            <div class="panel-body" style="background-color: #fff;">
                <div class="mar-ver">
                    <img src="{{asset('images/logo-default-250x142.png')}}" class="img img-rounded img-responsive" width="250px;" style="margin: 0 auto"/>
                    <h1 class="h1 mar-no">ICTC Password Reset</h1>
                    <br/>
                    <p class="text-muted">Reset your account</p>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Enter your E-mail" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block">
                                Send Password Reset Link
                            </button>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
</body>
</html>
