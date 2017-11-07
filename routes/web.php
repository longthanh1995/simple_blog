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
//Pages
Route::get('/', 'PageController@getIndex')->name('home');
Route::get('tags/all', 'PageController@getTags')->name('tags.getTags');
Route::get('categories/all', 'PageController@getCategories')->name('categories.getCats');
Route::get('contact-us', 'PageController@getContact')->name('getContact');
Route::get('post/{slug}', 'PageController@getSinglePost')->name('post.show');
Route::get('category/{slug}', 'PageController@getSingleCat')->name('category.show');
Route::get('tag/{slug}', 'PageController@getSingleTag')->name('tag.show');
Route::get('page-not-found', 'PageController@getErrorPage')->name('page.error');
Route::get('search', 'PageController@getResults')->name('search.results');
Route::get('forum', 'PageController@getForum')->name('forum.getForum');
// User Login
Route::get('login', 'AuthController@getLogin')->name('login');
Route::post('login', 'AuthController@postLogin')->name('postLogin');
Route::get('register', 'AuthController@getRegister')->name('register');
Route::post('register', 'AuthController@postRegister')->name('postRegister');
Route::get('logout', 'AuthController@getLogout')->name('logout');
//Admin Area
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
	Route::get('dashboard', 'AdminController@getDashboard')->name('dashboard');
	Route::resource('tags', 'TagController');
	Route::resource('categories', 'CateController');
	Route::resource('posts', 'PostController');
	Route::resource('users', 'UserController');
	Route::resource('pages', 'UserController');
	Route::post('search_posts', 'PostController@postResults')->name('search.results');
	//Admin login
	Route::get('login', 'AuthController@getLogin')->name('login');
	Route::post('login', 'AuthController@postLogin')->name('postLogin');
	Route::get('logout', 'AuthController@getLogout')->name('logout');
});
Route::get('/{any}', function($any) {
	return redirect('/');
})->where('any', '.*');
