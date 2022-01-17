<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendence;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function StudentHome(){
        $attendences=Attendence::orderBy('id', 'DESC')->get();
        return view('student.home', compact('attendences'));
    }
    public function TeacherHome(){
        return view('teacher.home');
    }
    public function Logout(){
        Auth::logout();
        Session::flush();
        return Redirect::to('/');
    }
    public function Home(){
        return view('admin.home');
    }
    public function Login(Request $request){
      $credentials = $request->validate([
        'email' => ['required'],
        'password' => ['required'],
    ]);
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        if (Auth::user()->type=="Admin") {
            return redirect('/admin/home');
        }else if (Auth::user()->type=="Teacher") {
            return redirect('/teacher/home');
        }else if (Auth::user()->type=="Student") {
            return redirect('/student/home');
        } else {
            return redirect(route('home'));
        }
    }else{
        return Redirect::to('/');
    }

    return back()->withErrors([
        'mobile' => 'The provided credentials do not match our records.',
    ]);
    }
    public function PageLogin(){
        return view('login');
    }
}
