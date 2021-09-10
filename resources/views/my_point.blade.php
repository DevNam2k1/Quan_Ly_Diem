@extends('../admin_layout')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Bảng Điểm Cá Nhân</h1>
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
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Điểm Cá Nhân</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped" style="text-align: center">
      <?php 
      $message = Session::get('message');
      if ($message) {
        echo '<span class="text-alert" style="color:green">' .$message. '</span>';
        Session::put('message',null);
      }
      ?>
      <br>
      <thead>
       <tr>
         <th>Môn Học</th>
         <th>Điểm Skill</th>
         <th>Điểm Final</th>
       </tr>
      </thead>

      <tbody>
        @foreach ($subject_list as $item => $subject)
       <tr>        
             <td>{{$subject->subject_name}}</td>
             <td>
             @foreach ($score_list as $item =>$score)
             {{$score->skill_1st}}
             @endforeach
             </td>
             <td>
              @foreach ($score_list as $item =>$score)
              {{$score->final_1st}}
              @endforeach
              </td>
                     
       </tr>
       @endforeach
             
       
          

      </tbody>
     
    </table>
   
  </div>
  <!-- /.card-body -->
  {{-- <div class="card-footer clearfix">
    <ul class="pagination pagination-sm m-0 float-right">
      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
    </ul>
  </div> --}}
</div>

@endsection