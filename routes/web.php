<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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
// version8からパスの使用方法が変更↓
// https://www.tairaengineer-note.com/laravel-error-target-class-does-not-exist/
// 解決策1:絶対パスから指定
// Route::get('tests/test','App\Http\Controllers\TestController@index');
//解決策2:：useでコントローラーをインポートする
Route::get('tests/test',[TestController::class,'index']);

