<?php
session_start();
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\Course;

Route::get('/', 'userController@view');

Route::get('/add','adminController@addStudent');
Route::get('/add_doctor','adminController@addDoctor');

Route::post('/add','adminController@addStudent');
Route::post('/add_doctor','adminController@addDoctor');

Route::get('/view_students','adminController@viewStudents');

Route::get('/view_doctors','adminController@viewDoctors');

Route::get('/view_courses','adminController@viewCourses');

Route::get('add/{id}',function ($id){
    $user=User::find($id);
    $user->delete();
    return redirect("view_students");
});

Route::get('details/{id}','adminController@viewUserByID');

Route::get('/edit/{id}','adminController@editStudent');
Route::post('/edit/{id}','adminController@editUser');
Route::get('/edit_doctor/{id}','adminController@editDoctor');
Route::post('/edit_doctor/{id}','adminController@editDoctor');
Route::get('add_course/{id}',function ($id){
    $course=Course::find($id);
    $course->delete();
    return redirect("view_courses");
});

Route::get('/add_course','adminController@addCourse');
Route::post('/add_course','adminController@addCourse');

Route::get('/edit_course/{id}','adminController@editCourse');
Route::post('/edit_course/{id}','adminController@editCourse');
Route::get('/login','userController@login');
Route::post('/login','userController@login');
Route::get('/register_courses','studentController@viewCourses');
Route::get('/register_courses/{id}','studentController@registerCourse');
Route::get('/registered_courses','studentController@viewRegistered');
Route::get('/registered_courses/{id}','studentController@dropCourse');
Route::get('/my_courses','doctorController@viewCourses');
Route::get('/student_courses/{id}','doctorController@viewStudents');
Route::get('student_courses/edit/{courseid}/{studentid}', 'DoctorController@editGrade');
Route::post('student_courses/edit/{courseid}/{studentid}', 'DoctorController@editGrade');
Route::get('/logout','userController@logout');
Route::get('/profile','userController@profile');
Route::post('/profile/{id}','userController@profile');
Route::get('/add_post','doctorController@addPost');
Route::post('/add_post','doctorController@addPost');