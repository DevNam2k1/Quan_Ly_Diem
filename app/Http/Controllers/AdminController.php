<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
session_start();

class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('/dashboard');
        } else {
            Session::put('message','Không có quyền truy cập!');
            return Redirect::to('/login')->send();
        }
    }
    public function login(){
        return view('admin_login');
    }
    public function calendar(){
        return view('calendar');
    }
    public function forgot_password(){
        return view('pages.forgot_password');
    }
    public function dashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');
    }

    public function login_admin(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $validated = $request->validate([
            'admin_email' => 'required|email:rfc,dns',
            'admin_password' => 'required|min:8|max:20',
        ],
        [
            'admin_email.dns' => 'Vui lòng nhập đúng dịnh dạng!',
            'admin_email.required' => 'Vui lòng diền email!',
            'admin_password.required' => 'Vui lòng diền mật khẩu!',
            'admin_password.min' => 'Mật khẩu ít nhất 8 kí tự!',
            'admin_password.max' => 'Mật khẩu nhiều nhất 20 kí tự!'
        ] 
        );
    
        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
    
            return Redirect::to('/dashboard');
        } else {
            Session::put('message','Mật khẩu hoặc tài khoản bị sai. Vui lòng nhập lại');
            return Redirect::to('/login');
        }
    }

    public function logout_admin(){
        $this->AuthLogin();
         Session::put('admin_name',null);
         Session::put('admin_id',null);
         Session::put('subject_id',null);
         return Redirect::to('/login');
    }

    public function manager(){
        return view('admin.users.user_list');
    }
}
