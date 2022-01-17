<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function TeacherDelete($id=NULL){
        User::find($id)->delete();
        Session::flash('message', 'Teacher Deleted Successfully!'); 
        return back();
    }
    public function TeacherEdit($id=NULL, Request $request){
        $Query=User::find($id);
        $Query->name=$request->name;
        $Query->teacher_student_id=$request->teacher_student_id;
        $Query->email=$request->email;
        if($request->password){
           $Query->password=Hash::make($request->password);
        }
        $Query->dept=$request->dept;
        $Query->save();
        Session::flash('message', 'Teacher Updated Successfully!'); 
        return redirect('admin/teacher_list');
    }
    public function TeacherShow($id=NULL){
        $user=User::find($id);
        return view('admin.show_teacher',compact('user'));
    }
    public function TeacherList(){
        $teachers=User::whereType('Teacher')->orderBy('id','DESC')->get();
        return view('admin.teacher_list', compact('teachers'));
    }
    public function TeacherPage(){
        return view('admin.add_teacher');
    }
    public function TeacherPageSubmit(Request $request){
        $Query=new User();
        $Query->type="Teacher";
        $Query->name=$request->name;
        $Query->teacher_student_id=$request->teacher_student_id;
        $Query->email=$request->email;
        $Query->password=Hash::make($request->password);
        $Query->dept=$request->dept;
        $Query->is_active=1;
        $Query->save();
        Session::flash('message', 'Teacher Added Successfully!'); 
        return back();
    }
}
