<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản Lý Sinh Viên | Bảng Điều Khiển</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/summernote/summernote-bs4.min.css')}}">
  {{-- Validation Form CSS --}}
  <link rel="stylesheet" href="{{asset('public/backend/dist/css/formValidation.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
   {{-- Zalo --}}
  <div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div>
    
<script src="https://sp.zalo.me/plugins/sdk.js"></script>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{URL::to('public/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

   
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">0</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Không có thông báo</span>
          
      </li>
      <!-- Strat Logout admin -->
      <li class="nav-item ">
        <a class="nav-link"  href="{{URL::to('/logout-authentication')}}">
            <i class="fas fa-power-off"></i>
        </a>
          
      </li>





      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{URL::to('public/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Dev</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::to('public/backend/dist/img/'.Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{URL::to('/profile')}}" class="d-block">{{Auth::user()->admin_name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Tìm Kiếm" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @hasrole(['admin','author'])
          <li class="nav-item @if (Request::path() == "dashboard")
          menu-is-opening menu-open
          @endif ">
            <a href="{{URL::to('/dashboard')}}" class="nav-link @if (Request::path() == "dashboard")
            active
            @endif ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Bản Điều Khiển
              </p>
            </a>
          </li>
          @endhasrole
          @hasrole('user')
          <li class="nav-item menu-open">
            <a href="{{URL::to('/my-point')}}" class="nav-link {{ Request::path() == 'my-point'   ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Bảng Điểm Cá Nhân
              </p>
            </a>
          </li>
          @endhasrole
          {{-- Quản Lý Điểm --}}
          <li class="nav-item {{ Request::path() == 'score-list' || Request::path() == 'class-point-list' || Request::path() == 'add-point' ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::path() == 'score-list' || Request::path() == 'class-point-list' || Request::path() == 'add-point' ? 'active' : '' }}">
              <i class="fas fa-marker nav-icon"></i>
              <p>
                Quản Lý Điểm 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('/score-list')}}" class="nav-link {{ Request::path() == 'score-list'   ? 'active' : '' }}">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/class-point-list')}}" class="nav-link {{ Request::path() == 'class-point-list'   ? 'active' : '' }}">
                  <i class="fas fa-graduation-cap nav-icon"></i>
                  <p>Bảng Điểm Theo Lớp</p>
                </a>
              </li>
              @hasrole(['admin','author'])
              <li class="nav-item">
                <a href="{{URL::to('/add-point')}}" class="nav-link {{ Request::path() == 'add-point'   ? 'active' : '' }}">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p> Nhập Điểm </p>
                </a>
              </li>
              @endhasrole
            </ul>
          </li>
          {{--Quản lý sinh viên--}}
          <li class="nav-item {{ Request::path() == 'student-list'  || Request::path() == 'add-student' ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::path() == 'student-list'  || Request::path() == 'add-student' ? 'active' : '' }}">
              <i class="fas fa-user-graduate nav-icon"></i>
              <p>
                 Sinh Viên
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('/student-list')}}" class="nav-link {{ Request::path() == 'student-list'   ? 'active' : '' }}">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              @hasrole(['admin','author'])
              <li class="nav-item">
                <a href="{{URL::to('/add-student')}}" class="nav-link {{ Request::path() == 'add-student'   ? 'active' : '' }}">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm Sinh Viên</p>
                </a>
              </li>
              @endhasrole
            </ul>
          </li>
          
          @hasrole(['admin','author'])
          {{--Quản lý Giảng Viên--}}
          <li class="nav-item {{ Request::path() == 'lecturers-list'  || Request::path() == 'add-lecturers' ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::path() == 'lecturers-list'  || Request::path() == 'add-lecturers' ? 'active' : '' }}">
              <i class="fas fa-chalkboard-teacher nav-icon"></i>
              <p>
                Giảng Viên
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('lecturers-list')}}" class="nav-link {{ Request::path() == 'lecturers-list'   ? 'active' : '' }}">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/add-lecturers')}}" class="nav-link {{ Request::path() == 'add-lecturers'   ? 'active' : '' }}">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm Giảng Viên</p>
                </a>
              </li>
            </ul>
          </li>
          @endhasrole
          @hasrole(['admin','author'])
          {{--Quản Lý Môn Học--}}
          <li class="nav-item {{ Request::path() == 'subject-list'  || Request::path() == 'add-subject' ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::path() == 'subject-list'  || Request::path() == 'add-subject' ? 'active' : '' }}">
              <i class="fas fa-book nav-icon"></i>
              <p>
                Môn Học
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('subject-list')}}" class="nav-link {{ Request::path() == 'subject-list'   ? 'active' : '' }}">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/add-subject')}}" class="nav-link {{ Request::path() == 'add-subject'   ? 'active' : '' }}">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm Môn Học</p>
                </a>
              </li>
            </ul>
          </li>
          @endhasrole
          @hasrole(['admin','author'])
          {{--Quản Lý Lớp Học--}}
          <li class="nav-item {{ Request::path() == 'class-list'  || Request::path() == 'add-class' ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::path() == 'class-list'  || Request::path() == 'add-class' ? 'active' : '' }}">
              <i class="fas fa-school nav-icon"></i>
              <p>
                Lớp Học
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('class-list')}}" class="nav-link {{ Request::path() == 'class-list'   ? 'active' : '' }}">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/add-class')}}" class="nav-link {{ Request::path() == 'add-class'   ? 'active' : '' }}">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm Lớp Học</p>
                </a>
              </li>
            </ul>
          </li>
          @endhasrole
          {{--Quản Lý Ngành Học--}}
          @hasrole(['admin','author'])
          <li class="nav-item {{ Request::path() == 'major-list'  || Request::path() == 'add-major' ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::path() == 'major-list'  || Request::path() == 'add-major' ? 'active' : '' }}">
              <i class="fas fa-laptop nav-icon"></i>
              <p>
                Ngành Học
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('major-list')}}" class="nav-link {{ Request::path() == 'major-list'   ? 'active' : '' }}">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/add-major')}}" class="nav-link {{ Request::path() == 'add-major'   ? 'active' : '' }}">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm Ngành Học</p>
                </a>
              </li>
            </ul>
          </li>
          @endhasrole
          @hasrole(['admin','author'])
          {{--Quản Lý Khóa--}}
          <li class="nav-item {{ Request::path() == 'course-list'  || Request::path() == 'add-course' ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::path() == 'course-list'  || Request::path() == 'add-course' ? 'active' : '' }}">
              <i class="fas fa-id-card nav-icon"></i>
              <p>
                Khóa
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('course-list')}}" class="nav-link {{ Request::path() == 'course-list'   ? 'active' : '' }}">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/add-course')}}" class="nav-link {{ Request::path() == 'add-course'   ? 'active' : '' }}">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm Khóa</p>
                </a>
              </li>
            </ul>
          </li>
          @endhasrole
          {{--Lịch Học--}}
          <li class="nav-item">
            <a href="{{URL::to('/calendar')}}" class="nav-link {{ Request::path() == 'calendar'   ? 'active' : '' }}">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Lịch Học
                
              </p>
            </a>
          </li>
          @hasrole('admin')
          <li class="nav-item {{ Request::path() == 'users'  || Request::path() == 'register-lecturers' || Request::path() == 'register-student' ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::path() == 'users'  || Request::path() == 'register-lecturers' || Request::path() == 'register-student' ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Quản Lý User
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('/users')}}" class="nav-link {{ Request::path() == 'users'   ? 'active' : '' }}">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/register-lecturers')}}" class="nav-link {{ Request::path() == 'register-lecturers'   ? 'active' : '' }}">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm TK Giáo Vụ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/register-student')}}" class="nav-link {{ Request::path() == 'register-student'   ? 'active' : '' }}">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Thêm TK Sinh Viên</p>
                </a>
              </li>
            </ul>
          </li>
          @endhasrole
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      @yield('content-header')
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"> 
         {{-- main-content --}}
         @yield('admin_content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
    <i class="fas fa-chevron-up"></i>
  </a>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Quản Lý Sinh Viên</a>.</strong>
    Đã Đăng Kí Bản Quyền.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('public/backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('public/backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('public/backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/backend/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/backend/dist/js/pages/dashboard.js')}}"></script>
<!-- jquery-validation -->
<script src="{{asset('public/backend/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('public/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/flot/jquery.flot.js')}}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{asset('public/backend/plugins/flot/plugins/jquery.flot.resize.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{asset('public/backend/plugins/flot/plugins/jquery.flot.pie.js')}}"></script>


<script>
    $(function () {
      /*
       * Flot Interactive Chart
       * -----------------------
       */
      // We use an inline data source in the example, usually data would
      // be fetched from a server
      var data        = [],
          totalPoints = 100
  
      function getRandomData() {
  
        if (data.length > 0) {
          data = data.slice(1)
        }
  
        // Do a random walk
        while (data.length < totalPoints) {
  
          var prev = data.length > 0 ? data[data.length - 1] : 50,
              y    = prev + Math.random() * 10 - 5
  
          if (y < 0) {
            y = 0
          } else if (y > 100) {
            y = 100
          }
  
          data.push(y)
        }
  
        // Zip the generated y values with the x values
        var res = []
        for (var i = 0; i < data.length; ++i) {
          res.push([i, data[i]])
        }
  
        return res
      }
  
      var interactive_plot = $.plot('#interactive', [
          {
            data: getRandomData(),
          }
        ],
        {
          grid: {
            borderColor: '#f3f3f3',
            borderWidth: 1,
            tickColor: '#f3f3f3'
          },
          series: {
            color: '#3c8dbc',
            lines: {
              lineWidth: 2,
              show: true,
              fill: true,
            },
          },
          yaxis: {
            min: 0,
            max: 100,
            show: true
          },
          xaxis: {
            show: true
          }
        }
      )
  
      var updateInterval = 500 //Fetch data ever x milliseconds
      var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
      function update() {
  
        interactive_plot.setData([getRandomData()])
  
        // Since the axes don't change, we don't need to call plot.setupGrid()
        interactive_plot.draw()
        if (realtime === 'on') {
          setTimeout(update, updateInterval)
        }
      }
  
      //INITIALIZE REALTIME DATA FETCHING
      if (realtime === 'on') {
        update()
      }
      //REALTIME TOGGLE
      $('#realtime .btn').click(function () {
        if ($(this).data('toggle') === 'on') {
          realtime = 'on'
        }
        else {
          realtime = 'off'
        }
        update()
      })
      /*
       * END INTERACTIVE CHART
       */
  
  
      /*
       * LINE CHART
       * ----------
       */
      //LINE randomly generated data
  
      var sin = [],
          cos = []
      for (var i = 0; i < 14; i += 0.5) {
        sin.push([i, Math.sin(i)])
        cos.push([i, Math.cos(i)])
      }
      var line_data1 = {
        data : sin,
        color: '#3c8dbc'
      }
      var line_data2 = {
        data : cos,
        color: '#00c0ef'
      }
      $.plot('#line-chart', [line_data1, line_data2], {
        grid  : {
          hoverable  : true,
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor  : '#f3f3f3'
        },
        series: {
          shadowSize: 0,
          lines     : {
            show: true
          },
          points    : {
            show: true
          }
        },
        lines : {
          fill : false,
          color: ['#3c8dbc', '#f56954']
        },
        yaxis : {
          show: true
        },
        xaxis : {
          show: true
        }
      })
      //Initialize tooltip on hover
      $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
        position: 'absolute',
        display : 'none',
        opacity : 0.8
      }).appendTo('body')
      $('#line-chart').bind('plothover', function (event, pos, item) {
  
        if (item) {
          var x = item.datapoint[0].toFixed(2),
              y = item.datapoint[1].toFixed(2)
  
          $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
            .css({
              top : item.pageY + 5,
              left: item.pageX + 5
            })
            .fadeIn(200)
        } else {
          $('#line-chart-tooltip').hide()
        }
  
      })
      /* END LINE CHART */
  
      /*
       * FULL WIDTH STATIC AREA CHART
       * -----------------
       */
      var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
        [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
        [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
      $.plot('#area-chart', [areaData], {
        grid  : {
          borderWidth: 0
        },
        series: {
          shadowSize: 0, // Drawing is faster without shadows
          color     : '#00c0ef',
          lines : {
            fill: true //Converts the line chart to area chart
          },
        },
        yaxis : {
          show: false
        },
        xaxis : {
          show: false
        }
      })
  
      /* END AREA CHART */
  
      /*
       * BAR CHART
       * ---------
       */
  
      var bar_data = {
        data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
        bars: { show: true }
      }
      $.plot('#bar-chart', [bar_data], {
        grid  : {
          borderWidth: 1,
          borderColor: '#f3f3f3',
          tickColor  : '#f3f3f3'
        },
        series: {
           bars: {
            show: true, barWidth: 0.5, align: 'center',
          },
        },
        colors: ['#3c8dbc'],
        xaxis : {
          ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
        }
      })
      /* END BAR CHART */
  
      /*
       * DONUT CHART
       * -----------
       */
  
      var donutData = [
        {
          label: 'Series2',
          data : 30,
          color: '#3c8dbc'
        },
        {
          label: 'Series3',
          data : 20,
          color: '#0073b7'
        },
        {
          label: 'Series4',
          data : 50,
          color: '#00c0ef'
        }
      ]
      $.plot('#donutchart', donutData, {
        series: {
          pie: {
            show       : true,
            radius     : 1,
            innerRadius: 0.5,
            label      : {
              show     : true,
              radius   : 2 / 3,
              formatter: labelFormatter,
              threshold: 0.1
            }
  
          }
        },
        legend: {
          show: false
        }
      })
      /*
       * END DONUT CHART
       */
  
    })
  
    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
      return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
        + label
        + '<br>'
        + Math.round(series.percent) + '%</div>'
    }
  </script>

<script>
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#quickForm').validate({
      rules: {
        lecturers_id: {
          required: true,
        },
        lecturers_name: {
          required: true,
          minlength: 20
        },
        terms: {
          required: true
        },
      },
      messages: {
        lecturers_id: {
          required: "Please enter a email address",
          email: "Please enter a vaild email address"
        },
        lecturers_name: {
          required: "Please provide a password",
          minlength: "Your password must be at least 20 characters long"
        },
        terms: "Please accept our terms"
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
  
<script>
  $( document ).ready(function() {
    $('input[type="checkbox"]').on('change', function() {
      var checkedValue = $(this).prop('checked');
        $(this).closest('tr').find('input[type="checkbox"]').each(function(){
         $(this).prop('checked',false);
       });
        $(this).prop("checked",checkedValue);

      });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){

      // fetch_delivery();

      // function fetch_delivery(){
      //     var _token = $('input[name="_token"]').val();
      //      $.ajax({
      //         url : '{{url('/select-feeship')}}',
      //         method: 'POST',
      //         data:{_token:_token},
      //         success:function(data){
      //            $('#load_delivery').html(data);
      //         }
      //     });
      // }
      // $(document).on('blur','.fee_feeship_edit',function(){

      //     var feeship_id = $(this).data('feeship_id');
      //     var fee_value = $(this).text();
      //      var _token = $('input[name="_token"]').val();
      //     // alert(feeship_id);
      //     // alert(fee_value);
      //     $.ajax({
      //         url : '{{url('/update-delivery')}}',
      //         method: 'POST',
      //         data:{feeship_id:feeship_id, fee_value:fee_value, _token:_token},
      //         success:function(data){
      //            fetch_delivery();
      //         }
      //     });

      // });
      // $('.add_delivery').click(function(){

      //    var city = $('.city').val();
      //    var province = $('.province').val();
      //    var wards = $('.wards').val();
      //    var fee_ship = $('.fee_ship').val();
      //     var _token = $('input[name="_token"]').val();
      //    // alert(city);
      //    // alert(province);
      //    // alert(wards);
      //    // alert(fee_ship);
      //     $.ajax({
      //         url : '{{url('/insert-delivery')}}',
      //         method: 'POST',
      //         data:{city:city, province:province, _token:_token, wards:wards, fee_ship:fee_ship},
      //         success:function(data){
      //            fetch_delivery();
      //         }
      //     });


      // });
      $('.choose4').on('change',function(){
          var action = $(this).attr('id');
          var ma_id = $(this).val();
          var _token = $('input[name="_token"]').val();
          var result = '';
          // alert(action);
          //  alert(ma_id);
          //   alert(_token);
            

          if(action =='class_name'){
              result = 'subject_name';
          } else {
             result = 'table2';
          }
          $.ajax({
              url : '{{url('/select-class-name')}}',
              method: 'POST',
              data:{action:action,ma_id:ma_id,_token:_token},
              success:function(data){
                 $('#'+result).html(data);     
              }
          });
      }); 
      $('.choose3').on('change',function(){
          var action = $(this).attr('id');
          var ma_id = $(this).val();
          var _token = $('input[name="_token"]').val();
          var result = '';
          // alert(action);
          //  alert(ma_id);
          //   alert(_token);
          //   exit();

          if(action=='student_name'){
              result = 'table1';
          }
          $.ajax({
              url : '{{url('/select-student-name')}}',
              method: 'POST',
              data:{action:action,ma_id:ma_id,_token:_token},
              success:function(data){
                 $('#'+result).html(data);     
              }
          });
      }); 

      $('.choose2').on('change',function(){
          var action = $(this).attr('id');
          var ma_id = $(this).val();
          var _token = $('input[name="_token"]').val();
          var result = '';
          // alert(action);
          //  alert(ma_id);
          //   alert(_token);

          if(action=='student_id'){
              result = 'student_name';
          }
          $.ajax({
              url : '{{url('/select-student-id')}}',
              method: 'POST',
              data:{action:action,ma_id:ma_id,_token:_token},
              success:function(data){
                 $('#'+result).html(data);     
              }
          });
      }); 

      $('.choose').on('change',function(){
          var action = $(this).attr('id');
          var ma_id = $(this).val();
          var _token = $('input[name="_token"]').val();
          var result = '';
          // alert(action);
          //  alert(ma_id);
          //   alert(_token);

          if(action=='city'){
              result = 'province';
          }else{
              result = 'wards';
          }
          $.ajax({
              url : '{{url('/select-delivery')}}',
              method: 'POST',
              data:{action:action,ma_id:ma_id,_token:_token},
              success:function(data){
                 $('#'+result).html(data);     
              }
          });
      }); 
  })


</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script type="text/javascript">
  $.validate({

  });

</script>
<script>
$('#reservationtime').daterangepicker({
  timePicker: true,
  timePickerIncrement: 30,
  locale: {
    format: 'DD/MM/YYYY hh:mm A'
  }
})
$('#reservationdate').datetimepicker({
        format: 'L'
    });

  var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

</script>


</body>
</html>
