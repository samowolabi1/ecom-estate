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

Route::get('/','PagesController@index')->name('welcome');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//
	Route::get('/about-us', 'PagesController@about')->name('about');
	Route::get('/contact-us', 'PagesController@contact')->name('contact');
	Route::get('/blog', 'PagesController@blog')->name('blog');
	
Route::group(['middleware' => 'auth'],function(){
    
    //users
	Route::get('/users', 'UserController@index')->name('users');
	Route::get('/user/show/{id}',  'UserController@show')->name('user.show');
	Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
	Route::get('/user/edit-profile/{id}', 'UserController@editpro')->name('profile.edit');
	Route::get('/user/delete/{id}', 'UserController@destroy')->name('user.delete');
	Route::put('/user/update/{id}', 'UserController@update')->name('update.user');
	Route::put('/user/update-profile/{id}', 'UserController@proupdate')->name('update.profile');
	Route::put('/user/status/{id}', 'UserController@status')->name('user.status');
	Route::post('/user/new', 'UserController@store')->name('adduser');

	

	//Tickets
	Route::get('/tickets', 'TicketController@index')->name('tickets');
	Route::get('/ticket/show/{id}',  'TicketController@show')->name('ticket.show');
	Route::post('/ticket/new', 'TicketController@store')->name('ticket.create');
	Route::put('/ticket/status/{id}','TicketController@cstatus')->name('ticket.status');
	Route::put('/ticket/support/{id}','TicketController@support')->name('ticket.support');	

	//Comment
	Route::get('/ticket/message/{id}', 'CommentController@index')->name('messages');
	Route::post('/ticket/message/new', 'CommentController@store')->name('message.create');



	Route::get('/categories', 'CategoryController@index')->name('categories');
	Route::post('/category/new', 'CategoryController@store')->name('addcategory');
	Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category.delete');

	Route::get('/letters', 'LetterController@index')->name('letters');





    });
