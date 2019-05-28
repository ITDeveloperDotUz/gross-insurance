<!DOCTYPE html>
<html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('admin/css/font.css') }}" type="text/css"/>
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{ asset('admin/js/jquery2.0.3.min.js') }}"></script>
    <style>
        html, body {
            background:rgba(27,49,106,1);
        }
    </style>
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2 class="">GROSS insurance</h2>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input id="email" type="email" class="ggg" name="email" value="{{ old('email') }}" required autofocus>
            <input id="password" type="password" class="ggg" name="password" required>
            {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
            @if (Route::has('password.request'))
                <h6><a href="{{ route('password.request') }}">
                    {{ __('auth.forgot_password') }}
                </a></h6>
            @endif
            <div class="clearfix"></div>
            <input type="submit" value="{{ __('auth.login') }}" name="login">
        </form>

    </div>
</div>
</body>
</html>
