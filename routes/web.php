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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route test database
Route::prefix('testmodel')->group(function () {
    Route::get('users', function () {
        $data = App\User::all()->toArray();
        print_r($data);
    });
    
     //Chu de
    Route::get('topics', function () {
        $data = App\topic::all()->toArray();
        print_r($data);
    });
    
    //Khoa hoc
    Route::get('courses', function () {
        $data = App\course::all()->toArray();
        print_r($data);
    });
    
    //hv-kh
    Route::get('usercourse', function () {
        $data = App\user_course::all()->toArray();
        print_r($data);
    });
    
    
    //kh-bg
    Route::get('courselesson', function () {
        $data = App\course_lesson::all()->toArray();
        print_r($data);
    });
    
    
    //Bai giang
    Route::get('lessons', function () {
        $data = App\lesson::all()->toArray();
        print_r($data);
    });
    
    //Tin tuc
    Route::get('news', function () {
        $data = App\news::all()->toArray();
        print_r($data);
    });
    
    //Binh luan
    Route::get('comments', function () {
        $data = App\comment::all()->toArray();
        print_r($data);
    });
    
    //Phan hoi
    Route::get('feedbacks', function () {
        $data = App\feedback::all()->toArray();
        print_r($data);
    });
});