@extends('../admin_layout')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Quản Lý Tài Khoản</h1>
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
    <div class="card-header">
      <h3 class="card-title">Danh Sách Users</h3>
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
            <th width="150px">Tên Tài Khoản</th>
            <th>Email</th>
            <th>Admin</th>
            <th>Author</th>
            <th>User</th>
            
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach($admin as $key => $user)
            <form action="{{url('/assign-roles')}}" method="POST">
              @csrf
          <tr>
            <td>{{ $user->admin_name }}</td>
            <td>{{ $user->admin_email }} <input type="hidden" name="admin_email" value="{{ $user->admin_email }}"></td>
            <td><input type="checkbox" name="admin_role"  {{$user->hasRole('Admin') ? 'checked' : ''}}></td>
            <td><input type="checkbox" name="author_role" {{$user->hasRole('Author') ? 'checked' : ''}}></td>
            <td><input type="checkbox" name="user_role"  {{$user->hasRole('User') ? 'checked' : ''}}></td>
            <td>
              <input type="submit" value="Assign roles" class="btn btn-sm btn-default">
           </td> 
          </tr>
        </form>
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