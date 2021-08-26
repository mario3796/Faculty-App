<?php

namespace App\Http\Controllers;
//session_start();

use App\Post;
use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [

                'email' => 'required',
                'pass' => 'required',
            ]);

            $user = User::where('email', $request->input('email'))->first();
            if ($user != null && $user->password == $request->input('pass')) {
                $_SESSION['id'] = $user->id;
                $_SESSION['name'] = $user->fname;
                $_SESSION['type'] = $user->user_type;
                ///  echo $_SESSION['id'];

                return redirect('/');
            } else
                return view('user.login');

        } else {
            return view('user.login');
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        return redirect('login');

    }

    public function profile(Request $request)
    {
        if ($request->isMethod('post')) {
            $newuser = User::find($_SESSION['id']);
            $newuser->fname = $request->input('fname');
            $newuser->lname = $request->input('lname');
            $newuser->email = $request->input('email');
            $newuser->password = $request->input('password');
            $newuser->birth_date = $request->input('birthdate');
            $_SESSION['name']= $newuser->fname ;
            $newuser->save();
            return redirect('profile');
        } else {
            $user = User::find($_SESSION['id']);
            $data = array('user' => $user);
            return view('user.profile', $data);
        }
    }
    public function view()
    {
        if (!isset($_SESSION['id']))
        {
            return view('user.login');

        }
        $posts=Post::all()->sortByDesc('id');
       // array_reverse($posts, true);
        // $courses=DB::table('courses')->get();
        $data=array('posts'=>$posts);
       // array_reverse($data, true);

        return view('user.index',$data);
    }
}
