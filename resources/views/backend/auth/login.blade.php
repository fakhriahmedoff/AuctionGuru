<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auction Guru | Admin panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend')}}/dist/css/adminlte.min.css">
</head>
<body class="login-page" style="min-height: 496.781px;">
<div class="login-box">
    <div class="login-logo">
        <b>Auction</b>Guru
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Enter your admin credentials</p>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group mb-3">
                    {!! html()->input('email', old('email'), [
                                                     'placeholder' => 'Email',
                                                     'errorLabel' => $errors->first('email')
                                                     ]) !!}
                </div>
                <div class="form-group mb-3">
                    {!! html()->input('password', old('password'), [
                                                     'placeholder' => 'Password',
                                                     'errorLabel' => $errors->first('password')
                                                     ], 'password') !!}
                </div>
                <div class="row">
                    @if (isset($error))
                        <div class="alert w-100 alert-danger">
                            {{$error}}
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Log in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('backend')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend')}}/dist/js/adminlte.min.js"></script>


</body>
</html>
