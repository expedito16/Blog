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

// landing page
Route::get('/', function () {
    return view('welcome');
});

// authentication routes - php artisan make:auth generates it
Auth::routes();

// group the following routes by auth middleware - you have to be signed-in to proceeed
Route::group(['middleware' => 'auth'], function() {
	// Dashboard
	Route::get('/home', 'HomeController@index')->name('home');

	// Posts resourcfull controllers routes
	Route::resource('posts', 'PostController');

	// Comments routes
	Route::group(['prefix' => '/comments', 'as' => 'comments.'], function() {
        // store comment route
		Route::post('/{post}', 'CommentController@store')->name('store');
	});

	// Replies routes
	Route::group(['prefix' => '/replies', 'as' => 'replies.'], function() {
        // store reply route
		Route::post('/{comment}', 'ReplyController@store')->name('store');
	});

	// Delete routes
	Route::delete('/{posts}','PostController@destroy');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
