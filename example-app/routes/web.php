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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home/{id}', 'App\Http\Controllers\HomeController@index')->name('index');
Route::get('/home/post', 'App\Http\Controllers\PostController@index');
Route::get('/comment/create', 'App\Http\Controllers\CommentController@create');
Route::get('/comment/html_view', 'App\Http\Controllers\CommentController@htmlView');
Route::get('/home/post/create', 'App\Http\Controllers\PostController@create');
Route::get('/home/post/update', 'App\Http\Controllers\PostController@update');
Route::get('/home/post/re_delete', 'App\Http\Controllers\PostController@reDelete');
Route::get('/home/post/delete', 'App\Http\Controllers\PostController@delete');
Route::get('/home/post/first_or_create', 'App\Http\Controllers\PostController@firstOrCreate');
Route::get('/home/post/update_or_create', 'App\Http\Controllers\PostController@updateOrCreate');
Route::get('/character', 'App\Http\Controllers\CharacterController@index')->name('index');

Route::get('/post/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/post/contacts', 'App\Http\Controllers\ContactController@index')->name('contact.index');


Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');
Route::get('/about/create', 'App\Http\Controllers\AboutController@create')->name('about.create');
Route::post('/about', 'App\Http\Controllers\AboutController@store')->name('about.store');
Route::get('/about/{about}', 'App\Http\Controllers\AboutController@show')->name('about.show');
Route::get('/about/{about}/edit', 'App\Http\Controllers\AboutController@edit')->name('about.edit');
Route::patch('/about/{about}', 'App\Http\Controllers\AboutController@update')->name('about.update');
Route::delete('/about/{about}', 'App\Http\Controllers\AboutController@destroy')->name('about.delete');



Route::get('/post', 'App\Http\Controllers\PostController@index')->name('post.index');
Route::get('/post/create', 'App\Http\Controllers\PostController@create')->name('post.create');
Route::post('/post', 'App\Http\Controllers\PostController@store')->name('post.store');
Route::get('/post/{post}', 'App\Http\Controllers\PostController@show')->name('post.show');
Route::get('/post/{post}/edit', 'App\Http\Controllers\PostController@edit')->name('post.edit');
Route::patch('/post/{post}', 'App\Http\Controllers\PostController@update')->name('post.update');
Route::delete('/post/{post}', 'App\Http\Controllers\PostController@destroy')->name('post.delete');


Route::get('/user', 'App\Http\Controllers\PostController@userIndex')->name('post.userIndex');

Route::get('/country', 'App\Http\Controllers\PostController@countryIndex')->name('post.countryIndex');


Route::get('/tags', 'App\Http\Controllers\PostController@IndexTag')->name('post.IndexTag');



