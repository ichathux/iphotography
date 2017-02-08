<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/welcome', 'HomeController@wel');
Route::get('/home', 'HomeController@index');
Route::get('/about', 'PageController@about');
Route::get('/events', 'DataController@show_events');
Route::get('/contact', 'PageController@contact');
Route::get('/profile', 'HomeController@profile');
Route::post('/profile', 'HomeController@update_prof_pic');
Route::get('/dashboard','HomeController@dashboard');

/*
routs for dashboard
*/

Route::get('add_news', 'DataController@show');
Route::post('insert_news', 'DataController@insert_news');
Route::post('insert_events', 'DataController@insert_events');
Route::get('dashboard', 'DataController@dshow');
Route::get('welcome', 'DataController@wshow');
Route::get('news', 'DataController@show_news');
Route::get('add_events', 'DataController@add_events');
Route::get('view_news&{id?}', 'DataController@view_news');
Route::get('post_event', 'DataController@post_event');



