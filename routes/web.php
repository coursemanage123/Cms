<?php

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
Route::get('/', function () {
    return view('admin.registertechers');
});
/*
Route::get('/student', function () {
    return view('student');
});
Route::get('/instructor', function () {
    return view('instructor');
});
Route::get('/admin', function () {
    return view('admin');
});*/
Route::get('/adminDashboard', function () {
    return view('adminDashboard');
});
Route::get('/assignmentdisplay', function () {
    return view('teacher.assignmentdisplay');
});
Route::get('/studentdisplay', function () {
    return view('students.studentdisplay');
});
Route::get('/studentsregister', function () {
    return view('students.studentsregister');
});
Route::get('/homeStudent', function () {
    return view('homeStudent');
});
Route::get('/teachersDashboard', function () {
    return view('teachersDashboard');
});
//route::resource('posts','postcontroller');

/*
//dynamic routing
Route::get('/users/{id}' ,function($id){
	return 'This is user '.$id;
});

Route::get('/users/{id}/{name}' ,function($id,$name){
    return 'This is the user '.$name.'with an id of'.$id;
});

Route::get('/about',function(){
	return view('pages.about');
});

Route::get('/home','coursesController@show');

Route::get('/login','LoginController@');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/