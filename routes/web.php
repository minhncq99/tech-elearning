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
    $news = App\news::all();
    $courses = App\course::all();
    return view('home', ['news' => $news, 'courses' => $courses]);
});

Auth::routes();

Route::get('home', function () {
    $news = App\news::all();
    $courses = App\course::all();
    return view('home', ['news' => $news, 'courses' => $courses]);
});

//Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('news', function(){
    $news = DB::table('news')->paginate(5)->onEachSide(1);
    return view('page.news', compact('news'));
});


Route::get('courses', function(){
    $courses = DB::table('courses')->paginate(3)->onEachSide(1);
    return view('page.courses', compact('courses'));
});

Route::get('detailnews/{id}', function ($id) {
    $news = DB::table('news')->where('news_id', $id)->first();
    return view('page.detailnews', compact('news'));
});

Route::get('detailcourse/{id}', function ($id) {
    $course = DB::table('courses')->where('course_id', $id)->first();
    $lessons = DB::table('lessons')->where('lesson_id', $id)->get();

    return view('page.detailcourse', ['course' => $course, 'lessons' => $lessons]);
});