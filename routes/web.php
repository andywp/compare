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

/* Route::get('/', function () {
    return view('welcome');
}); 
 */
Route::get('/', 'HomeController@index');
Route::get('/logout', 'HomeController@Logout');
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::prefix("admin")->group(function(){
        Route::get('/', 'HomeController@index_user')->name('admin.home')->middleware('is_admin');
        
    });
});

 
//oute::get('/home', 'HomeController@index')->name('home');
