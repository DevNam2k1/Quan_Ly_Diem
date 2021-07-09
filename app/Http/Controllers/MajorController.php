<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class MajorController extends Controller
{
    public function add_major(){
        $admin_id = Session::get('admin_id');
        if(empty($admin_id)){
        Session::put('message','Không có quyền truy cập!');
         return Redirect::to('/login')->send();
        }
        return view('admin.add_major');
    }
    public function save_major(Request $request){
        $admin_id = Session::get('admin_id');
        if(empty($admin_id)){
        Session::put('message','Không có quyền truy cập!');
         return Redirect::to('/login')->send();
        }
        $data = array();
        $data['major_id'] = $request->major_id;
        $data['major_name'] = $request->major_name;
        
        DB::table('tbl_major')->insert($data);
       
        return Redirect::to('/major-list');
    }
    public function major_list(){
        $admin_id = Session::get('admin_id');
        if(empty($admin_id)){
        Session::put('message','Không có quyền truy cập!');
         return Redirect::to('/login')->send();
        }
        $major_list = DB::table('tbl_major')->get();

        return view('admin.major_list')->with('major_list',$major_list);
    }
    public function edit_major($major_id){
        $admin_id = Session::get('admin_id');
        if(empty($admin_id)){
        Session::put('message','Không có quyền truy cập!');
         return Redirect::to('/login')->send();
        }
        $major_list = DB::table('tbl_major')->where('major_id',$major_id)->get();

        return view('admin.edit_major')->with('major_list',$major_list);
    }
    public function update_major(Request $request, $major_id){
        $admin_id = Session::get('admin_id');
        if(empty($admin_id)){
        Session::put('message','Không có quyền truy cập!');
         return Redirect::to('/login')->send();
        }
        $data = array();
        $data['major_id'] = $request->major_id;
        $data['major_name'] = $request->major_name;
        
        DB::table('tbl_major')->where('major_id',$major_id)->update($data);

        Session::put('message','Cập nhật giảng viên thành công');
        return Redirect::to('/major-list');

    }
    public function delete_major($major_id){
        $admin_id = Session::get('admin_id');
        if(empty($admin_id)){
        Session::put('message','Không có quyền truy cập!');
         return Redirect::to('/login')->send();
        }

        DB::table('tbl_major')->where('major_id',$major_id)->delete();

        Session::put('message','Xóa ngành học thành công');
        return Redirect::to('/major-list');

    }
}
