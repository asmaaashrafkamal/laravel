<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\Admin\UserController@getIndex');
Route::get('/landing', 'App\Http\Controllers\Admin\UserController@land');

Route::get('/landing12', 'App\Http\Controllers\Admin\UserController@land1');

Route::group(['middleware'=>'auth'],function(){

    Route::get('/m11', 'App\Http\Controllers\Controller@as');

});
Route::group(['prefix'=>'Admin5'],function(){
    Route::get('/', function () {
        return "work";
    });
    Route::get('user','UserController@index');
    
});
//middleware
Route::group(['prefix'=>'Admin1','middleware'=>'auth'],function(){
    Route::get('/', function () {
        return "work";
    });
    Route::get('user','UserController@index');
    
});
Route::get('asmaa', function () {
    return view('welcome');
})->middleware('auth');


Route::get('login', function () {
    return "you must be login";
})->name('login');

 //call controller function
 Route::get('/amm', 'App\Http\Controllers\Controller@as');

 Route::get('/amnn', 'App\Http\Controllers\Admin\UserController@ss');
 Route::resource('/ammm', 'App\Http\Controllers\Admin\UserController');
 

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
