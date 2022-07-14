<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// version8からパスの使用方法が変更↓
// https://www.tairaengineer-note.com/laravel-error-target-class-does-not-exist/
// 解決策1:絶対パスから指定
// Route::get('tests/test','App\Http\Controllers\TestController@index');
//解決策2:：useでコントローラーをインポートする
// Route::get('tests/test',[TestController::class,'index']);

//prefixでcontactフォルダを指定する、middlewareがauthの場合（認証されたとき）　
// Route::group(['prefix' => 'contact','middleware' => 'auth'],
//     function(){
//         //contact省略 -> contact/index
//         Route::get('index',[ContactFormController::class,'index'])
//         ->name('contact.index');//nameを指定（名前は何でもよい）すると、viewを楽に書くことができるので、できるだけ記入すること。
//         Route::get('create',[ContactFormController::class,'create'])
//         ->name('contact.create');//nameを指定（名前は何でもよい）すると、viewを楽に書くことができるので、できるだけ記入すること。    
//     }
// );


//REST
// Route::resource('contact', ContactFormController::class)->only([
//     'index', 'show'
// ]);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[BlogController::class,'showList'])
->name('blogs');