<?php

namespace App\Http\Controllers;
//session_start();

use App\Course_user;
use App\User;
use App\Course;

use Illuminate\Http\Request;

class studentController extends Controller
{

    public function viewCourses(){
    $student=User::find($_SESSION['id']);
    $courses = Course::where('level',$student->level)->get();

    // $users=DB::table('users')->where('user_type','=',1)->get();
    $data=array('courses'=>$courses);
    return view('student.register_courses',$data);
}
    public function viewRegistered(){
        $student=User::find($_SESSION['id']);
        $courses = $student->courses;

        // $users=DB::table('users')->where('user_type','=',1)->get();
        $data=array('courses'=>$courses);
        return view('student.registerd_courses',$data);
    }
    public function registerCourse($id){
        $course_student=new Course_user();
        $course_student->user_id=$_SESSION['id'];
        $course_student->course_id=$id;
        $course_student->save();



       return redirect("register_courses");
    }
    public function dropCourse($id){
        $course_student=Course_user::where('user_id',$_SESSION['id'])->where('course_id',$id);
        $course_student->delete();



        return redirect("registered_courses");
    }
}
