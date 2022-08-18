@extends('../layout_validate')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Thêm Giảng Viên</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Trang Chủ</a></li>
          <li class="breadcrumb-item active">Thêm Giảng Viên</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('admin_content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Thêm Giảng Viên</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{URL::to('/save-lecturers')}}" method="post" id="quickForm">
        {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputIdLecturers1">Mã Giảng Viên</label>
          <input type="text" class="form-control @if($errors->has('lecturers_id'))is-invalid @endif" name="lecturers_id" id="exampleInputIdLecturers1" placeholder="Mã Giảng Viên"
          @if($errors->has('lecturers_id'))     
          aria-invalid="true"
          @endif
          >
          @if($errors->has('lecturers_id'))
          <span  class="error invalid-feedback" >
              {{$errors->first('lecturers_id')}}
          </span> 
          @endif
        </div>
        <div class="form-group">
          <label for="exampleInputLecturers1">Họ Và Tên </label>
          <input type="text" class="form-control @if($errors->has('lecturers_name'))is-invalid @endif" name="lecturers_name" id="exampleInputLecturers1" placeholder="Họ và Tên"
          @if($errors->has('lecturers_name'))     
          aria-invalid="true"
          @endif
          >
          @if($errors->has('lecturers_name'))
          <span  class="error invalid-feedback" >
              {{$errors->first('lecturers_name')}}
          </span> 
          @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Giới Tính</label>
            <br>
            <input type="radio" id="radioPrimary3" value="1" name="gender" > Nam   
            <input type="radio" style="margin-left:200px;" value="0" id="radioPrimary3" name="gender" >  Nữ
            <input type="radio" style="margin-left:200px;" value="2" id="radioPrimary3" name="gender" >  Khác
            @if($errors->has('gender'))
            <span  class="error invalid-feedback" >
                {{$errors->first('gender')}}
            </span> 
            @endif
        </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" @if (empty($errors) == true)
        onClick="return alert('Bạn thêm giảng viên thành công ^^')"
        @endif  name="save-lecturers" class="btn btn-primary">Thêm</button>
      </div>
    </form>
  </div>

  @endsection
{{-- 
  @section('validate_form')
  <script>
    $(function () {
      $.validator.setDefaults({
        submitHandler: function () {
          alert( "Thêm giảng viên thành công" );
        }
      });
      $('#quickForm').validate({
        rules: {
          lecturers_id: {
            required: true,
            minlength: 2
          },
          lecturers_name: {
            required: true,
            minlength: 5,
            maxlength: 20
          },
          gender: {
            required: true
          },
        },
        messages: {
          lecturers_id: {
            required: "Vui lòng nhập mã giảng viên, VD: GV01,...",
            minlength: "Vui lòng nhập nhiều hơn 2 kí tự"
          },
          lecturers_name: {
            required: "Vui lòng nhập tên giảng viên, VD: Nguyễn Văn A,...",
            minlength: "Vui lòng nhập nhiều hơn 5 kí tự",
            maxlength: "Vui lòng nhập ít hơn 20 kí tự"
          },
          gender: "Vui lòng chọn giới tính"
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
    </script>
  @endsection --}}