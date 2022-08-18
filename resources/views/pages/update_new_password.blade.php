<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản Lý Sinh Viên | Recover Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{('public/backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{('public/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{('public/backend/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Quản Lý</b>Sinh Viên</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Bạn chỉ còn một bước nữa để có được mật khẩu mới, hãy khôi phục mật khẩu của bạn ngay bây giờ.</p>
      @php
          $email = $_GET['email'];
          $token = $_GET['token'];
      @endphp
      <form action="{{URL::to('/reset-password')}}" method="post">
          @csrf
          <input type="hidden" name="admin_email" value="{{$email}}">
          <input type="hidden" name="token_admin" value="{{$token}}">
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @if($errors->has('password'))is-invalid @endif" placeholder="Mật khẩu"          
           @if($errors->has('password'))     
          aria-invalid="true"
          @endif>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @if($errors->has('password'))
          <span  class="error invalid-feedback" >
              {{$errors->first('password')}}
          </span> 
          @endif
        </div>
        <div class="input-group mb-3">
          <input type="password" name="confirm_password" class="form-control @if($errors->has('password'))is-invalid @endif" placeholder="Nhập lại mật khẩu"            
          @if($errors->has('confirm_password'))     
          aria-invalid="true"
          @endif>
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @if($errors->has('confirm_password'))
          <span  class="error invalid-feedback" >
              {{$errors->first('confirm_password')}}
          </span> 
          @endif
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Đổi Mật Khẩu</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="{{URL::to('/login')}}">Đăng Nhập</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{('public/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{('public/backend/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
