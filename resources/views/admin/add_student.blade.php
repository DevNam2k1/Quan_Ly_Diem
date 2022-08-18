@extends('../admin_layout')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Thêm Sinh Viên</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Trang Chủ</a></li>
          <li class="breadcrumb-item active">Thêm Sinh Viên</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('admin_content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Thêm Sinh Viên</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{URL::to('/save-student')}}" method="POST">
      {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Mã Sinh Viên</label>
          <input type="text" name="student_id" class="form-control @if($errors->has('student_id'))is-invalid @endif" id="exampleInputEmail1" placeholder="Mã Sinh Viên"
          @if($errors->has('student_id'))     
          aria-invalid="true"
          @endif>
          @if($errors->has('student_id'))
          <span  class="error invalid-feedback" >
              {{$errors->first('student_id')}}
          </span> 
          @endif
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Họ Đệm</label>
          <input type="text" name="lastname" class="form-control @if($errors->has('lastname'))is-invalid @endif" id="exampleInputPassword1" placeholder="Họ Đệm"
          @if($errors->has('lastname'))     
          aria-invalid="true"
          @endif>
         
          @if($errors->has('lastname'))
          <span  class="error invalid-feedback" >
              {{$errors->first('lastname')}}
          </span> 
          @endif
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Tên</label>
          <input type="text" name="firstname" class="form-control @if($errors->has('firstname'))is-invalid @endif" id="exampleInputPassword1" placeholder="Tên"
          @if($errors->has('firstname'))     
          aria-invalid="true"
          @endif>
          
          @if($errors->has('firstname'))
          <span  class="error invalid-feedback" >
              {{$errors->first('firstname')}}
          </span> 
          @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Giới Tính</label>
            <br>
            <input type="radio" value="1" id="radioPrimary3" name="gender" > Nam   
            <input type="radio" value="0" style="margin-left:200px;" id="radioPrimary3" name="gender" >  Nữ
            <input type="radio" value="2" style="margin-left:200px;" id="radioPrimary3" name="gender" >  Khác
            @if($errors->has('gender'))
            <span  class="error invalid-feedback" >
                {{$errors->first('gender')}}
            </span> 
            @endif
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Ngày Sinh</label>
            <input type="date" class="form-control @if($errors->has('dob'))is-invalid @endif" name="dob" id="exampleInputPassword1" placeholder="Ngày Sinh"
            @if($errors->has('dob'))     
          aria-invalid="true"
          @endif>
          
          @if($errors->has('dob'))
          <span  class="error invalid-feedback" >
              {{$errors->first('dob')}}
          </span> 
          @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Quê Quán</label>
            <input type="text" name="address" class="form-control @if($errors->has('address'))is-invalid @endif" id="exampleInputPassword1" placeholder="Địa chỉ"
            @if($errors->has('address'))     
          aria-invalid="true"
          @endif>
         
          @if($errors->has('address'))
          <span  class="error invalid-feedback" >
              {{$errors->first('address')}}
          </span> 
          @endif
        </div> 
        <div class="form-group">
            <label for="exampleInputPassword1">Lớp</label>
            <select class="form-control select2" name="class_id" style="width: 100%;">
                <option selected="selected">--Chọn Lớp--</option>
                @foreach ($class_list as $key => $class)
                   <option value="{{$class->class_id}}">{{$class->class_name}}-{{$class->course_id}}</option>
                @endforeach
                
              </select>
        </div> 
        
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" @if (empty($errors) == true)
        onClick="return confirm('Bạn thêm sinh viên thành công ^^')"
        @endif class="btn btn-primary" name="save_student">Thêm</button>
      </div>
    </form>
  </div>
@endsection