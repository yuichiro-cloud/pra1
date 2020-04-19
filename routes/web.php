<?php

use App\Http\Middleware\HelloMiddleware;
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
// Route::get('/hello/{id}','HelloController@index')->where('id','[0-9]+');
// Route::get('/hello/other', 'HelloController@other'); 

Route::middleware([HelloMiddleware::class])->group(function(){
    // Route::get('/hello', 'HelloController@index');
    // Route::get('/hello/other', 'HelloController@other');
    // Route::get('/hello','HelloController@index');
    // Route::get('/hello/{item}','HelloController@show');
    // Route::post('/hello/new', 'HelloController@new');
});
Route::namespace('Sample')->group(function(){
    Route::get('/sample', 'SampleController@index');
    Route::get('/sample/other', 'SampleController@other');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::resource('/hello','HelloController', ['only' => ['index', 'show','create', 'edit', 'store' ]]);
    Route::post('/hello/edit','HelloController@update');
    Route::post('/hello/delete','HelloController@destroy');
    Route::get('/','HelloController@top');
    // Route::resource('information' , 'HelloController@' ); 
//   　Route::resource('school' , 'SchoolsController' ,['only' => ['create', 'edit']] ); 
//   　Route::resource('staff' , 'StaffsController' ,['only' => ['create', 'edit']] );  
  });
