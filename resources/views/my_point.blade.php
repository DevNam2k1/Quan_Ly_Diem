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
    <h3 class="card-title">Điểm Cá Nhân (Lưu ý: X là bộ môn không có phần thi)</h3>
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
         <th>Kết Quả Lần 1</th>
         <th>Kết Quả Lần 2</th>
       </tr>
      </thead>

      <tbody>
        @foreach ($subject_list as $item => $subject)
       <tr>        
             <td>{{$subject->subject_name}}</td>
             <td>
             @foreach ($score_list as $item =>$score)
             @if ($score->subject_id == $subject->subject_id)
                 @if ($score->skill_1st == null)
                     X
                 @else
                     @if ($score->skill_1st < 5)
                         {{$score->skill_2st}}
                     @else
                         {{$score->skill_1st}}
                     @endif
                 @endif
             @endif
             
             @endforeach
             </td>
             <td>
              @foreach ($score_list as $item =>$score)
                @if ($score->subject_id == $subject->subject_id)
              @if ($score->final_1st == null)
                  X
              @else
                  @if ($score->final_1st < 5)
                      {{$score->final_2st}}
                  @else
                      {{$score->final_1st}}
                  @endif
                @endif
              @endif
              @endforeach
              </td>
               
            @if (empty($score->skill_1st) == true && empty($score->final_1st) == true )

            @if ($score->skill_1st >= 5 || $score->skill_1st == null )
            <!--Điểm trên 5-->
            @if ($score->final_1st >= 5 || $score->final_1st == null )
                 <td><span class="badge bg-success">Đạt</span></td> 
            @else
                 <td><span class="badge bg-danger">Thi Lại</span></td>
            @endif
            <!--Điểm dưới 5-->
            @else

            {{-- Thông báo sau khi thi lại --}}
                 <td><span class="badge bg-danger">Thi Lại</span></td>
            @endif
            @endif

            @if (empty($score->skill_1st) == true && empty($score->final_1st) == false )

            @if ($score->skill_1st >= 5 || $score->skill_1st == null )
            <!--Điểm trên 5-->
            @if ($score->final_1st >= 5 || $score->final_1st == null )
                 <td><span class="badge bg-success">Đạt</span></td> 
            @else
                 <td><span class="badge bg-danger">Thi Lại</span></td>
            @endif
            <!--Điểm dưới 5-->
            @else

            {{-- Thông báo sau khi thi lại --}}
                 <td><span class="badge bg-danger">Thi Lại</span></td>
            @endif
            @endif

            @if (empty($score->skill_1st) == false && empty($score->final_1st) == true )

            @if ($score->skill_1st >= 5 || $score->skill_1st == null )
            <!--Điểm trên 5-->
            @if ($score->final_1st >= 5 || $score->final_1st == null )
                 <td><span class="badge bg-success">Đạt</span></td> 
            @else
                 <td><span class="badge bg-danger">Thi Lại</span></td>
            @endif
            <!--Điểm dưới 5-->
            @else

            {{-- Thông báo sau khi thi lại --}}
                 <td><span class="badge bg-danger">Thi Lại</span></td>
            @endif
            @endif
            @if (empty($score->skill_1st) == false && empty($score->final_1st) == false )

            @if ($score->skill_1st >= 5 || $score->skill_1st == null )
            <!--Điểm trên 5-->
            @if ($score->final_1st >= 5 || $score->final_1st == null )
                 <td><span class="badge bg-success">Đạt</span></td> 
            @else
                 <td><span class="badge bg-danger">Thi Lại</span></td>
            @endif
            <!--Điểm dưới 5-->
            @else

            {{-- Thông báo sau khi thi lại --}}
                 <td><span class="badge bg-danger">Thi Lại</span></td>
            @endif
            @endif
            
            <td>
            @if (empty($score->skill_2st) == false && empty($score->final_2st) == false )
            @if ($score->skill_2st >= 5 || $score->skill_2st == null )
            <!--Điểm trên 5-->
            @if ($score->final_2st >= 5 || $score->final_2st == null )
                 <span class="badge bg-success">Đạt</span>
            @else
                 <span class="badge bg-danger">Học Lại</span>
            @endif
            <!--Điểm dưới 5-->
            @else

                 <span class="badge bg-danger">Học Lại</span>
            @endif
            @endif
         

                        
            @if (empty($score->skill_2st) == false && empty($score->final_2st) == true )
            @if ($score->skill_2st >= 5 || $score->skill_2st == null )
            <!--Điểm trên 5-->
            @if ($score->final_2st >= 5 || $score->final_2st == null )
                 <span class="badge bg-success">Đạt</span>
            @else
                 <span class="badge bg-danger">Học Lại</span>
            @endif
            <!--Điểm dưới 5-->
            @else

                 <span class="badge bg-danger">Học Lại</span>
            @endif
            @endif

                        
            @if (empty($score->skill_2st) == true && empty($score->final_2st) == false )
            @if ($score->skill_2st >= 5 || $score->skill_2st == null )
            <!--Điểm trên 5-->
            @if ($score->final_2st >= 5 || $score->final_2st == null )
                 <span class="badge bg-success">Đạt</span>
            @else
                 <span class="badge bg-danger">Học Lại</span>
            @endif
            <!--Điểm dưới 5-->
            @else

                 <span class="badge bg-danger">Học Lại</span>
            @endif
            @endif       
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