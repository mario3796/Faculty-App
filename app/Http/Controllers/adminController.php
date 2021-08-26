<?php
namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    //
    public function addStudent(Request $request){
        if($request->isMethod('post')){
            $this->validate($request,[
                'fname'=>'required',
                'lname'=>'required',
                'birthdate'=>'required',
                'email'=>'required',
                'password'=>'required',
                'level'=>'required'
            ]);

            $newuser=new User();
            $newuser->fname=$request->input('fname');
            $newuser->lname=$request->input('lname');
            $newuser->email=$request->input('email');
            $newuser->password=$request->input('password');
            $newuser->user_type=1;
            $newuser->birth_date=$request->input('birthdate');
            $newuser->level=$request->input('level');
            $newuser->save();
        }
        return view('admin.add');
    }
    public function addDoctor(Request $request){
        if($request->isMethod('post')){
            $this->validate($request,[
                'fname'=>'required',
                'lname'=>'required',
                'birthdate'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]);

            $newuser=new User();
            $newuser->fname=$request->input('fname');
            $newuser->lname=$request->input('lname');
            $newuser->email=$request->input('email');
            $newuser->password=$request->input('password');
            $newuser->user_type=2;
            $newuser->birth_date=$request->input('birthdate');
            $newuser->save();
        }
        return view('admin.add_doctor');
    }
    public function viewStudents(){
        $users=DB::table('users')->where('user_type','=',1)->get();
        $data=array('users'=>$users);
        return view('admin.view_students',$data);
    }

    public function viewDoctors(){
        $users=DB::table('users')->where('user_type','=',2)->get();
        $data=array('users'=>$users);
        return view('admin.view_doctors',$data);
    }

    public function  viewUserByID($id){
        $user=User::find($id);
        $data=array('user'=>$user);
        return view('admin.details',$data);
    }

    public function editStudent(Request $request,$id){
        if($request->isMethod('post')){
            $newuser=User::find($id);
            $newuser->fname=$request->input('fname');
            $newuser->lname=$request->input('lname');
            $newuser->email=$request->input('email');
            $newuser->password=$request->input('password');
            $newuser->birth_date=$request->input('birthdate');
            $newuser->level=$request->input('level');
            $newuser->save();
            return redirect('view_students');
        }
        else{
            $user = User::find($id);
            $data = array('user' => $user);
            return view('admin.edit', $data);
        }
    }
    public function editDoctor(Request $request,$id){
        if($request->isMethod('post')){
            $newuser=User::find($id);
            $newuser->fname=$request->input('fname');
            $newuser->lname=$request->input('lname');
            $newuser->email=$request->input('email');
            $newuser->password=$request->input('password');
            $newuser->birth_date=$request->input('birthdate');
            $newuser->save();
            return redirect('view_doctors');
        }
        else{
            $user = User::find($id);
            $data = array('user' => $user);
            return view('admin.edit_doctor', $data);
        }
    }

    public function viewCourses(){
        $courses=Course::all();
       // $courses=DB::table('courses')->get();
        $data=array('courses'=>$courses);
      //  $variable = Course::with('users')->find(1); //This will load the product with the related designs

        //echo $courses[0]->user->fname;
        return view('admin.view_courses',$data);
    }

    public function addCourse(Request $request){
        if($request->isMethod('post')){
            $this->validate($request,[
                'name'=>'required',
                'level'=>'required',
                'doctor_id'=>'required',
            ]);

            $newcourse=new Course();
            $newcourse->name=$request->input('name');
            $newcourse->level=$request->input('level');
            $newcourse->user_id=$request->input('doctor_id');
            $newcourse->save();
            $users=DB::table('users')->where('user_type','=',2)->get();
            $data=array('users'=>$users);
            return view('admin.add_course',$data);

        }

            $users=DB::table('users')->where('user_type','=',2)->get();
            $data=array('users'=>$users);
            return view('admin.add_course',$data);

    }

    public function editCourse(Request $request,$id){
        if($request->isMethod('post')){
            DB::table('courses')->where('id','=',$id)->update(['name'=>$request->input('name'),
            'level'=>$request->input('level'),
            'user_id'=>$request->input('doctor_id')]);
            return redirect('view_courses');
        }
        else{
            $course = Course::where('id',$id)->first();
            $users=DB::table('users')->where('user_type','=',2)->get();

       //    $course = DB::table('courses')->where('id','=',$id)->first();
            $data = array('course' => $course,'users'=>$users);
        //    echo $course->user->fname;

             return view('admin.edit_course', $data);
        }
    }

}
