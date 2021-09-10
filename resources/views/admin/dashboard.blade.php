@extends('../admin_layout')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Bảng Điều Khiển</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Trang Chủ</a></li>
          <li class="breadcrumb-item active">Bảng Điều Khiển</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('admin_content')
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>4</h3>

        <p>Sinh Viên</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-graduate nav-icon"></i>
      </div>
      <a href="{{URL::to('/student-list')}}" class="small-box-footer">Thông Tin <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>3</h3>

        <p>Giảng Viên</p>
      </div>
      <div class="icon">
        <i class="fas fa-chalkboard-teacher nav-icon"></i>
      </div>
      <a href="{{URL::to('lecturers-list')}}" class="small-box-footer">Thông Tin <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>5</h3>

        <p>Tài Khoản Đăng Kí</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="{{URL::to('/users')}}" class="small-box-footer">Thông Tin <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>90<sup style="font-size: 20px">%</sup></h3>

        <p>Điểm Trung Bình</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="{{URL::to('/class-point-list')}}" class="small-box-footer">Thông Tin <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<!-- /.row -->
<div class="col-md-12">
  <div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Bảng Điểm Sinh Viên</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @csrf
      <h4><b>Thống Kê</b></h4>
      <br>
      <p><b>Note* : X là kí hiệu môn không có phần thi</b></p>
      <select id="student_name" class="form-control select2 choose3  student-name" style="width: 100%" name="student_name">
        <option selected="selected">--Tên Sinh Viên--</option>
        @foreach ($student_list as $student)        
        <option  value="{{$student->student_id}}">{{$student->lastname}} {{$student->firstname}}</option>
        @endforeach
      </select>
      <br>
      <br>
      <table id="table1" class="table table-bordered table-striped" style="text-align: center">
        
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

<div class="col-md-12">
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Danh Sách Điểm Theo Lớp</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <h4><b>Thống Kê</b></h4>
      <br>
      <p><b>Note* : X là kí hiệu môn không có phần thi</b></p>
      @csrf
      <select id="class_name" class="form-control select2 choose4  class-name" style="width: 100%" name="class_name">
        <option>--Tên Lớp Học--</option>
        @foreach ($class_list as $class)
          <option  value="{{$class->class_id}}">{{ $class->class_name }}</option>
        @endforeach
      </select>
      <br>
      <select id="subject_name" class="form-control select2 choose4  subject-name" style="width: 100%" name="subject_name">
        <option selected="selected">--Tên Môn Học--</option>
      </select>
     <br>
      <table id="table2" class="table table-bordered table-striped" style="text-align: center">
        
      </table>
      <br>
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- Main row -->
<div class="row">
  <!-- Left col -->
  <section class="col-lg-12 connectedSortable">
    <div class="col-12">
      <!-- interactive chart -->
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">
            <i class="far fa-chart-bar"></i>
            Lưu lương truy cập
          </h3>

          <div class="card-tools">
            Thời gian thực
            <div class="btn-group" id="realtime" data-toggle="btn-toggle">
              <button type="button" class="btn btn-default btn-sm active" data-toggle="on">Bật</button>
              <button type="button" class="btn btn-default btn-sm" data-toggle="off">Tắt</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div id="interactive" style="height: 300px;"></div>
        </div>
        <!-- /.card-body-->
      </div>
      <!-- /.card -->

    </div>
   


    {{-- <div class="card card-primary card-danger card-outline">
      <div class="card-header">
        <h3 class="card-title">
          <i class="far fa-chart-bar"></i>
          Area Chart
        </h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div id="area-chart" style="height: 300px;"></div>
      </div>
      <!-- /.card-body-->
    </div>
            <!-- /.card -->
   
    <div class="card card-primary card-success card-outline">
      <div class="card-header">
        <h3 class="card-title">
          <i class="far fa-chart-bar"></i>
          Line Chart
        </h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div id="line-chart" style="height: 300px;"></div>
      </div>
      <!-- /.card-body-->
    </div>
    </div>
  </section>
  <!-- right col -->
</div> --}}
 
@endsection