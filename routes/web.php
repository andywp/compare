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
        Route::get('/hosting_kategori', 'ProductController@HostingKategori')->name('hosting.kategori');
        Route::get('/hosting_kategori/add', 'ProductController@HostingKategoriAdd')->name('hosting.kategori.add');
        Route::post('/hosting_kategori/seve', 'ProductController@HostingKategoriSave')->name('hosting.kategori.save');
        Route::get('/hosting_kategori/delete/{id}', 'ProductController@HostingKategoriDdelete')->name('hosting.kategori.delete');
        Route::get('/hosting_kategori/edit/{id}', 'ProductController@HostingKategoriEdit')->name('hosting.kategori.edit');
        Route::post('/hosting_kategori/update', 'ProductController@HostingKategoriUpdate')->name('hosting.kategori.update');
        Route::get('/hosting', 'ProductController@hosting')->name('hosting');
        Route::get('/hosting/add', 'ProductController@HostingAdd')->name('hosting.add');
        
    });
});

 
//oute::get('/home', 'HomeController@index')->name('home');
