@extends('../layout_validate')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Thêm Khóa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Trang Chủ</a></li>
          <li class="breadcrumb-item active">Thêm Khóa</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('admin_content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Thêm Khóa</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{URL::to('/save-course')}}" method="post" id="quickForm">
        {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Mã Khóa</label>
          <input type="text" class="form-control @if($errors->has('course_id'))is-invalid @endif" name="course_id" id="exampleInputEmail1" placeholder="Mã Khóa"
          @if($errors->has('course_id'))     
          aria-invalid="true"
          @endif
          >
          @if($errors->has('course_id'))
          <span  class="error invalid-feedback" >
              {{$errors->first('course_id')}}
          </span> 
          @endif
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Tên Khóa </label>
          <input type="text" class="form-control @if($errors->has('course_name'))is-invalid @endif" name="course_name" id="exampleInputPassword1" placeholder="Tên Khóa"
          @if($errors->has('course_name'))     
          aria-invalid="true"
          @endif
          >
          @if($errors->has('course_name'))
          <span  class="error invalid-feedback" >
              {{$errors->first('course_name')}}
          </span> 
          @endif
        </div>
        </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" onClick="return alert('Bạn thêm khóa thành công ^^')" name="save-course" class="btn btn-primary">Thêm</button>
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
          alert( "Thêm khóa thành công" );
        }
      });
      $('#quickForm').validate({
        rules: {
          course_id: {
            required: true,
            minlength: 2
          },
          course_name: {
            required: true,
            minlength: 5,
            maxlength: 20
          }
        },
        messages: {
          course_id: {
            required: "Vui lòng nhập mã khóa, VD: K11,...",
            minlength: "Vui lòng nhập nhiều hơn 2 kí tự"
          },
          course_name: {
            required: "Vui lòng nhập tên khóa",
            minlength: "Vui lòng nhập nhiều hơn 5 kí tự",
            maxlength: "Vui lòng nhập ít hơn 20 kí tự"
          }
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