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

Route::get('/', 'WelcomeController@index');


Route::get('about', function (){
    return view('about');
});

Route::get('statia', function (){
    return view('statia');
});

Route::get('gallery', function (){
    return view('gallery');
});

Route::get('news/{id}', 'NewsController@index');

Route::get('articleNews/{id}', 'NewsController@view');

Route::get('contacts',function (){
    return view('contacts');
});

Route::get('learner', function (){
     return view('learner');
});
/* роуты для статей*/

Route::get('articles', 'ArticlesController@index');
Route::post('article', 'ArticlesController@store');
Route::delete('article/{article}', 'ArticlesController@destroy');

Route::get('logout', function (){
    auth::logout();
    return redirect('/');
});

Auth::routes();


