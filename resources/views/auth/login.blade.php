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
                    <h3 class="h3 mar-no">ICTC Login</h3>
                    <br/>
                    <p class="text-muted">Sign In to your Account</p>
                </div>

                <form role="form" method="POST" action="{{ url('/login') }}" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <input type="text" style="display:none;">

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required />

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="checkbox pull-left">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            Login
                        </button>
                    </div>

                    <a href="{{ url('/password/reset') }}" class="btn-link mar-rgt">Forgot password ?</a>

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
