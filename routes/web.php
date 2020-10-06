<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcome;

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


Auth::routes();

Route::get('/email', function(){
	return new NewUserWelcome();
});

Route::post('follow/{user}', 'FollowController@store');

Route::get('/', 'PostsController@index');

Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

Route::get('/p/{post}', 'PostsController@show');

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

 