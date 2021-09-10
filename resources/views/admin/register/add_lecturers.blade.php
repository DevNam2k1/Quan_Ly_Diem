@extends('../admin_layout')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Thêm Tài Khoản Giáo Vụ</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Trang Chủ</a></li>
          <li class="breadcrumb-item active">Danh Sách</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('admin_content')

<div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg"></p>
      @if(session()->has('message'))
      <div class="alert alert-success">
          {!! session()->get('message') !!}
      </div>
  @elseif(session()->has('error'))
       <div class="alert alert-danger">
          {!! session()->get('error') !!}
      </div>
  @endif

      <form action="{{URL::to('register-authencation')}}" method="post">
        {{ csrf_field() }}
        <div class="input-group mb-3">
          <input type="text" name="admin_name" value="{{old('admin_name')}}" class="form-control" placeholder="Họ Và Tên">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @if($errors->has('admin_name'))
        <div class="alert alert-danger">
            {{$errors->first('admin_name')}}
         </div>
        @endif
        <div class="input-group mb-3">
          <input type="email" name="admin_email" value="{{old('admin_email')}}" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @if($errors->has('admin_email'))
        <div class="alert alert-danger">
            {{$errors->first('admin_email')}}
         </div>
        @endif
        <div class="input-group mb-3">
          <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @if($errors->has('password'))
        <div class="alert alert-danger">
            {{$errors->first('password')}}
         </div>
        @endif
        <div class="input-group mb-3">
          <input type="password" name="confirm_password" value="{{old('confirm_password')}}" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @if($errors->has('confirm_password'))
        <div class="alert alert-danger">
            {{$errors->first('confirm_password')}}
         </div>
        @endif
        <div class="row">
          <div class="col-10">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-2">
            <button type="submit" name="authencation" class="btn btn-primary btn-block">Đăng Kí</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
{{-- 
      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> --}}
      
      {{-- <p class="mb-1">
        <a href="{{URL::to('/login-authentication')}}" class="text-center">Đăng nhập tài khoản Authencation</a>
      </p> --}}
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
@endsection