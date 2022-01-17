<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Course;
use App\Models\Attendence;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function AttendenceReport(){
        $attendences=Attendence::orderBy('id', 'DESC')->get();
        // dd($attendences);
        return view('teacher.report', compact('attendences'));
    }
    public function SubmitAttendence(Request $request){
       $attend=new Attendence();
       $attend->user_id=$request->user_id;
       $attend->code=$request->code;
       $attend->attendence_date=Carbon::now();
       $attend->save();
       return back();
    }
    public function AttendenceTake(Request $request){
        $users=User::whereDept($request->dept)->whereSection($request->section)->whereCode($request->code)->whereBatch($request->batch)->get();
        $code=$request->code;
        return view('teacher.show-attendence', compact('users', 'code'));
    }
    public function AttendencePage(){
        $courses=Course::get();
        return view('teacher/attendence-page', compact('courses'));
    }
    public function StudentDelete($id=NULL){
        User::find($id)->delete();
        Session::flash('message', 'Student Deleted Successfully!'); 
        return back();
    }
    public function StudentEdit($id=NULL, Request $request){
        $Query=User::find($id);
        $Query->name=$request->name;
        $Query->batch=$request->batch;
        $Query->section=$request->section;
        $Query->code=$request->code;
        $Query->teacher_student_id=$request->teacher_student_id;
        $Query->email=$request->email;
        if($request->password){
           $Query->password=Hash::make($request->password);
        }
        $Query->dept=$request->dept;
        $Query->save();
        Session::flash('message', 'Student Updated Successfully!'); 
        return redirect('teacher/add_student');
    }
    public function StudentShow($id=NULL){
        $user=User::find($id);
        return view('teacher.show_student',compact('user'));
    }
    public function StudentList(){
        $teachers=User::whereType('Teacher')->orderBy('id','DESC')->get();
        return view('admin.teacher_list', compact('teachers'));
    }
    public function StudentPage(){
        $courses=Course::get();
        return view('teacher.add_student', compact('courses'));
    }
    public function StudentPageSubmit(Request $request){
        $Query=new User();
        $Query->type="Student";
        $Query->batch=$request->batch;
        $Query->section=$request->section;
        $Query->code=$request->code;
        $Query->name=$request->name;
        $Query->teacher_student_id=$request->teacher_student_id;
        $Query->email=$request->email;
        $Query->password=Hash::make($request->password);
        $Query->dept=$request->dept;
        $Query->is_active=1;
        $Query->save();

        $students=User::whereType("Student")->orderBy('id', 'DESC')->get();
        Session::flash('message', 'Student Added Successfully!'); 
        return redirect()->back()->with('students',$students);
    }
}
