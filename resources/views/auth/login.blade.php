<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <<link rel="shortcut icon" href="img/favicon.png">
  <title>Login Page | Inventory Management</title>
  <!-- Bootstrap CSS -->
  <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('backend/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('backend/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/css/font-awesome.css') }}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet" />
</head>
<body class="login-img3-body">
  <div class="container">
    <form class="login-form" action="{{ route('login') }}" method="post">
      @csrf
      @if ($errors->has('email'))
      <span class="alert alert-danger text-center" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif
      @if ($errors->has('password'))
        <span class="alert alert-danger text-center" role="alert">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
      @endif
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="email" name="email" class="form-control" placeholder="Email" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <label class="checkbox">
          <input type="checkbox" name="remember"> Remember me
          {{-- <span class="pull-right"> <a href="{{ route('password.request') }}"> Forgot Password?</a></span> --}}
        </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
      </div>
    </form>
  </div>
</body>
</html>