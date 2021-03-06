<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUP-SOLAR</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminTLE/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminTLE/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminTLE/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .login-page, .register-page{
            background-color: #464646 !important;
        }
        .login-box-body, .register-box-body{
            background-color: rgba(0, 0, 0, 0.31) !important;
        }
        .login-box-msg, .register-box-msg{
            font-size: 2rem;
            text-transform: uppercase;
        }
        .btn-menu{
            background-color: #A90641;
            border-color: #800531;
            color: white;
            font-size: 1em;
        }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/home') }}"><b>CRUP</b>-SOLAR</a>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Iniciar sesión</p>

        <form method="post" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember">Recuérdame
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-menu btn-block btn-flat">Ingresar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        {{--
        <a href="{{ url('/password/reset') }}">Olvidé mi contraseña</a><br>
        <a href="{{ url('/register') }}" class="text-center">Registrar una nueva cuenta</a>
        --}}

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

    <!-- jQuery 3.1.1 -->
    <script src="{{ asset('js/adminTLE/jquery.min.js') }}"></script>
    <script src="{{ asset('js/adminTLE/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/adminTLE/icheck.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminTLE/app.min.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
