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



//get
//-------------------------------------------------------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
});

//Route::get('home','HelloController@index');
Route::get('kk','HelloController@kk');

Route::get('/admin/userlist','HelloController@getUsers')->middleware('auth');

Route::get('/admin/signup','HelloController@getSignup');

Route::get('mainhome','HomeArticleController@index');

Route::get('intro','HomeArticleController@intro');

Route::get('/admin/signin','HelloController@getSignin');

Route::get('schedule','HelloController@schedule');

Route::get('content','HelloController@content');

Route::get('/admin/index','HelloController@adindex');

Route::get('/admin/changehome','HomeArticleController@changehome')->middleware('auth');

Route::get('/admin/changeabout','HomeArticleController@changeabout')->middleware('auth');

Route::get('/admin/dashboard','HelloController@dashboard');

Route::get('/admin/profile','HelloController@getProfile')->middleware('auth');

Route::get('/admin/logout', 'HelloController@logout');

Route::get('auth','HelloController@getAuth');

Route::get('/home', 'HomeController@index')->name('home');



//post
//-------------------------------------------------------------------------------------------------------
Route::post('/admin/dashboard','HelloController@postdashboard');
Route::post('/admin/changehome','HomeArticleController@update');
Route::post('/admin/changehomecheck','HomeArticleController@changehomecheck');
Route::post('/admin/changehomedone','HomeArticleController@done');
Route::post('/admin/checkabout','HomeArticleController@update2');
Route::post('/admin/changeaboutcheck','HomeArticleController@changeaboutcheck');
Route::post('/admin/changeaboutdone','HomeArticleController@done2');
Route::post('auth','HelloController@postAuth');
Route::post('/admin/signup','HelloController@postSignup');
Route::post('/admin/signin','HelloController@postSignin');



Auth::routes();


