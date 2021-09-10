@extends('../layout_validate')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Thêm Ngành Học</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Trang Chủ</a></li>
          <li class="breadcrumb-item active">Thêm Ngành Học</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('admin_content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Thêm Ngành Học</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{URL::to('/save-major')}}" method="post" id="quickForm">
        {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Mã Ngành Học</label>
          <input type="text" class="form-control @if($errors->has('major_id'))is-invalid @endif" name="major_id" id="exampleInputEmail1" placeholder="Mã Ngành Học"
          @if($errors->has('major_id'))     
          aria-invalid="true"
          @endif
          >
          @if($errors->has('major_id'))
          <span  class="error invalid-feedback" >
              {{$errors->first('major_id')}}
          </span> 
          @endif
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Tên Ngành Học </label>
          <input type="text" class="form-control @if($errors->has('major_name'))is-invalid @endif" name="major_name" id="exampleInputPassword1" placeholder="Tên Ngành Học"
          @if($errors->has('major_name'))     
          aria-invalid="true"
          @endif
          >
          @if($errors->has('major_name'))
          <span  class="error invalid-feedback" >
              {{$errors->first('major_name')}}
          </span> 
          @endif
        </div>
        </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" onClick="return alert('Bạn thêm ngành học thành công ^^')" name="save-major" class="btn btn-primary">Thêm</button>
      </div>
    </form>
  </div>

 @endsection