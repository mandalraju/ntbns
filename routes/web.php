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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::GET('/','PageController@getIndex');
Route::GET('/about','PageController@getAbout');
Route::GET('/contact','PageController@getContact');
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>['web']],function(){
	Route::resource('notice','NoticeController');
	Route::resource('event','EventController');	
});


/*Route::GET('/events','PageController@getEvents');
Route::GET('/notices','PageController@getNotices');
Route::GET('/mission','PageController@getMission');
Route::GET('/helpsupport','PageController@getHelpSupport');
Route::GET('/programs','PageController@getPrograms');
*/
Auth::routes();

