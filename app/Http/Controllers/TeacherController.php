<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class TeacherController extends Controller
{
    public function add_lecturers(){
        $admin_id = Session::get('admin_id');
        if(empty($admin_id)){
            Session::put('message','Không có quyền truy cập!');
         return Redirect::to('/login')->send();
        }
        return view('admin.add_lecturers');
    }
    public function save_lecturers(Request $request){
        $admin_id = Session::get('admin_id');
        if(empty($admin_id)){
            Session::put('message','Không có quyền truy cập!');
         return Redirect::to('/login')->send();
        }
        $data = array();
        $data['lecturers_id'] = $request->lecturers_id;
        $data['lecturers_name'] = $request->lecturers_name;
        $data['gender'] = $request->gender;
        

        DB::table('tbl_lecturers')->insert($data);
       
        return Redirect::to('/lecturers-list');
    }

    public function lecturers_list(){
        $admin_id = Session::get('admin_id');
        if(empty($admin_id)){
            Session::put('message','Không có quyền truy cập!');
         return Redirect::to('/login')->send();
        }
        $lecturers_list = DB::table('tbl_lecturers')->get();

        return view('admin.lecturers_list')->with('lecturers_list',$lecturers_list);
    }
    public function edit_lecturers($lecturers_id){
        $admin_id = Session::get('admin_id');
        if(empty($admin_id)){
            Session::put('message','Không có quyền truy cập!');
         return Redirect::to('/login')->send();
        }
        $lecturers = DB::table('tbl_lecturers')->where('lecturers_id',$lecturers_id)->get();

        return view('admin.edit_lecturers')->with('lecturers',$lecturers);
    }
    public function update_lecturers(Request $request, $lecturers_id){
        $admin_id = Session::get('admin_id');
        if(empty($admin_id)){
            Session::put('message','Không có quyền truy cập!');
         return Redirect::to('/login')->send();
        }
        $data = array();
        $data['lecturers_id'] = $request->lecturers_id;
        $data['lecturers_name'] = $request->lecturers_name;
        $data['gender'] = $request->gender;
        

        DB::table('tbl_lecturers')->where('lecturers_id',$lecturers_id)->update($data);

        Session::put('message','Cập nhật giảng viên thành công');
        return Redirect::to('/lecturers-list');

    }
    public function delete_lecturers($lecturers_id){
        $admin_id = Session::get('admin_id');
        if(empty($admin_id)){
            Session::put('message','Không có quyền truy cập!');
         return Redirect::to('/login')->send();
        }

        DB::table('tbl_lecturers')->where('lecturers_id',$lecturers_id)->delete();

        Session::put('message','Xóa giảng viên thành công');
        return Redirect::to('/lecturers-list');

    }
}
