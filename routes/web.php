<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests;
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
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'tintuc'],function(){
        //admin/tintuc/danhsach
        Route::get('danhsach','TinTucController@getDanhSach');
        //admin/tintuc/sua
        Route::get('sua/{tinTuc_id}','TinTucController@getSua');
        Route::post('sua/{tinTuc_id}','TinTucController@postSua');
        //admin/tintuc/them
        Route::get('them','TinTucController@getThem');
        Route::post('them','TinTucController@postThem');
        //admin/tintuc/xoa
        Route::get('xoa/{tinTuc_id}','TinTucController@getXoa');
    });
});

Route::get('tintuc/{tinTuc_id}/{tenTinTuc}.html', 'PageController@tintuc');
