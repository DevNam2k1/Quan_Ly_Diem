<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\Roles;
use App\Models\Admin;
use Auth;
use Session;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function my_point(){
        $student_id = Auth::user()->student_id;
        $subject_list = DB::table('tbl_subject')->get();
        $score_list = DB::table('tbl_point')->where("student_id",$student_id)->get();
        return view('my_point')->with('subject_list',$subject_list)->with('score_list',$score_list);
    }
    public function index()
    {
        
        $admin = Admin::with('roles')->orderBy('admin_id','ASC')->paginate(100);
        return view('admin.users.all_users')->with(compact('admin'));
    }
    public function add_users(){
        return view('admin.users.add_users');
    }
    public function delete_users_roles($admin_id){
         if(Auth::id() == $admin_id){
             return  redirect()->back()->with('error','Bạn khổng thể xóa quyền của chính mình');
         }

        $admin = Admin::find($admin_id);

        if($admin){
            $admin->roles()->detach();
            $admin->delete();
        }
        return redirect()->back()->with('message','Xóa tài khoản thành công');
    }
    public function assign_roles(Request $request){
        
        if(Auth::id() == $request->admin_id){
            return  redirect()->back()->with('error','Bạn khổng thể phân quyền của chính mình');
        }
        $data = $request->all();
        $user = Admin::where('admin_email',$request->admin_email)->first();
        $user->roles()->detach();
        if($request->author_role){
           $user->roles()->attach(Roles::where('name','Author')->first());     
        }
        if($request->user_role){
           $user->roles()->attach(Roles::where('name','User')->first());     
        }
        if($request->admin_role){
           $user->roles()->attach(Roles::where('name','Admin')->first());     
        }
        return redirect()->back()->with('message','Phân quyền thành công');
    }
    public function store_users(Request $request){
        $data = $request->all();
        $admin = new Admin();
        $admin->admin_name = $data['admin_name'];
        $admin->admin_phone = $data['admin_phone'];
        $admin->admin_email = $data['admin_email'];
        $admin->admin_password = md5($data['admin_password']);
        $admin->save();
        $admin->roles()->attach(Roles::where('name','user')->first());
        Session::put('message','Thêm users thành công');
        return Redirect::to('users');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
