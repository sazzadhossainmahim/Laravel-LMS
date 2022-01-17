<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{
    public function CourseDelete($id=NULL){
        Course::find($id)->delete();
        Session::flash('message', 'Course Deleted Successfully!'); 
        return back();
    }
    public function CourseEdit($id=NULL, Request $request){
        $Query=Course::find($id);
        $Query->code=$request->code;
        $Query->title=$request->title;
        $Query->save();
        Session::flash('message', 'Course Updated Successfully!'); 
        return redirect('admin/course_list');
    }
    public function CourseShow($id=NULL){
        $course=Course::find($id);
        return view('admin.show_course',compact('course'));
    }
    public function CourseList(){
        $courses=Course::orderBy('id','DESC')->get();
        return view('admin.course_list', compact('courses'));
    }
      public function CoursePageSubmit(Request $request){

        $Query=new Course();
        $Query->code=$request->code;
        $Query->title=$request->title;
        $Query->save();

        Session::flash('message', 'Course Added Successfully!'); 
        return back();
      }
      public function CoursePage(){
        return view('admin.add_course');
      }    
}
