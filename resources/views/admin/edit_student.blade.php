@extends('../admin_layout')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Cập Nhật Sinh Viên</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Trang Chủ</a></li>
          <li class="breadcrumb-item active">Cập Nhật Sinh Viên</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('admin_content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Cập Nhật Sinh Viên</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @foreach ($edit_student as $key => $student)
    <form action="{{URL::to('/update-student/'.$student->student_id)}}" method="POST">
      {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Mã Sinh Viên</label>
          <input type="text" name="student_id" value="{{$student->student_id}}" class="form-control @if($errors->has('student_id'))is-invalid @endif" id="exampleInputEmail1" placeholder="Mã Sinh Viên"
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
          <input type="text" name="lastname" value="{{$student->lastname}}" class="form-control @if($errors->has('lastname'))is-invalid @endif" id="exampleInputPassword1" placeholder="Họ Đệm"
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
          <input type="text" name="firstname" value="{{$student->firstname}}" class="form-control @if($errors->has('firstname'))is-invalid @endif" id="exampleInputPassword1" placeholder="Tên"
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
            <input type="radio" value="1" id="radioPrimary3" 
            @if ($student->gender == 1)
               checked
            @endif 
            name="gender" > Nam   
            <input type="radio" value="0" style="margin-left:200px;" id="radioPrimary3"
            @if ($student->gender == 0)
                checked
            @endif 
            name="gender" >  Nữ
            <input type="radio" value="2" style="margin-left:200px;" id="radioPrimary3" name="gender" >  Khác
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ngày Sinh</label>
            <input type="date" class="form-control @if($errors->has('dob'))is-invalid @endif" name="dob" value="{{$student->dob}}"  id="exampleInputPassword1" placeholder="Ngày Sinh"
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
            <input type="text" name="address" value="{{$student->address}}" class="form-control @if($errors->has('address'))is-invalid @endif" id="exampleInputPassword1" placeholder="Địa chỉ"
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
            <label for="exampleInputPassword1">Mã Lớp</label>
            <select class="form-control select2" name="class_id" style="width: 100%;">
                <option selected="selected">--Chọn Lớp--</option>
                @foreach ($class_list as $key => $class)
                  @if ($student->class_id == $class->class_id)
                    <option selected value="{{$class->class_id}}">{{$class->class_name}}</option>
                  @endif
                  <option  value="{{$class->class_id}}">{{$class->class_name}}</option>
                @endforeach
                
              </select>
        </div> 
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary"  @if (empty($errors) == true)
        onClick="return confirm('Bạn có chắc muốn cập nhật?')"
        @endif name="update_student">Cập Nhật</button>
      </div>
    </form>
    @endforeach
  </div>
@endsection