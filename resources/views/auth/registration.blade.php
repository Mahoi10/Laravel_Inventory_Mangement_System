<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NYC | Registration Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>NYC INVENTORY</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="{{route('register-user')}}" method="post">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf  
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" placeholder="Enter Full name" name="name" value="{{old('name')}}">
            <span class="text-danger">@error('name'){{$message}} @enderror</span>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
            <span class="text-danger">@error('email'){{$message}} @enderror</span>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
            <span class="text-danger">@error('password'){{$message}} @enderror</span>
        </div>
        <div class="form-group">
            <label for="password">Retype Password</label>
            <input type="password" class="form-control" placeholder="Retype Password" name="password" value="">
            <span class="text-danger">@error('password'){{$message}} @enderror</span>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
        <div class="form-group">
            <button class="btn btn-block btn-primary" type="submit">Register</button>
        </div>
        <a href="login" class="text-center">I already have a membership</a>
               </form>
            </div>
        </div>
    </div>
       
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
