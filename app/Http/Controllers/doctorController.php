<?php

namespace App\Http\Controllers;

use App\Course_user;
use App\Post;
use Illuminate\Http\Request;
use App\User;

class doctorController extends Controller
{
    //
    public function viewCourses(){
        $doctor=User::find($_SESSION['id']);
        $courses = $doctor->course;

        // $users=DB::table('users')->where('user_type','=',1)->get();
        $data=array('courses'=>$courses);
        return view('doctor.mycourses',$data);
    }
    public function viewStudents($id){

        $courses_student=Course_user::where('course_id',$id)->get();

       $data=array('courses_student'=>$courses_student);
        return view('doctor.student_courses',$data);


    }
    public function editGrade($courseid,$studentid,Request $request){
        if($request->isMethod('post')){
            $course_student=Course_user::where('user_id',$studentid)->where('course_id',$courseid)->update(['grade' => $request->input('grade')]);

         //   $course_student->grade=$request->input('grade');
          // $course_student->update();
            return redirect('student_courses/'.$courseid.'');
        }
        $course_student=Course_user::where('user_id',$studentid)->where('course_id',$courseid)->first();

        $data=array('course_student'=>$course_student);
        return view('doctor.edit_grade',$data);


    }
    public function addPost(Request $request)
    {
        if($request->isMethod('post')){
        //    $course_student=Course_user::where('user_id',$studentid)->where('course_id',$courseid)->update(['grade' => $request->input('grade')]);
$post=new Post();
$post->post=$request->input('post');
$post->date=date('y/m/d h/i/s');
$post->user_id=$_SESSION['id'];
$post->save();

            //   $course_student->grade=$request->input('grade');
            // $course_student->update();
            return redirect('add_post');
        }

        return view('doctor.add_post');

    }

}
