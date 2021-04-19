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
//user
Route::get('/user/login', 'userController@login');
Route::post('/user/login', 'userController@checkLogin');
Route::get('/user/logout', 'userController@logout');
Route::get('/user/signup', 'userController@signup');
Route::post('/user/signup', 'userController@insertUser');


//admin layout
Route::get('/admin', 'adminController@admin');
//category
Route::get('/admin/category', 'categoryController@showCategory');
Route::get('/admin/category/add', 'categoryController@addCategory');
Route::post('/admin/category/add', 'categoryController@insertCategory');
Route::get('/admin/category/edit/{id}', 'categoryController@editCategory');
Route::post('/admin/category/edit/{id}', 'categoryController@updateCategory');
Route::get('/admin/category/delete/{id}', 'categoryController@deleteCategory');
// movie
Route::get('/admin/movie', 'movieController@showMovie');
Route::get('/admin/movie/add', 'movieController@addMovie');
Route::post('/admin/movie/add', 'movieController@insertMovie');
Route::get('/admin/movie/edit/{id}', 'movieController@editMovie');
Route::post('/admin/movie/edit/{id}', 'movieController@updateMovie');
Route::get('/admin/movie/delete/{id}', 'movieController@deleteMovie');
//room
Route::get('/admin/room', 'roomController@showRoom');

//admin user
Route::get('/admin/profile/{id}', 'userController@showProfile');
Route::post('/admin/profile/{id}', 'userController@editProfile');
//account
Route::get('/admin/account', 'userController@showAccount');
Route::get('/admin/profile/delete/{id}', 'userController@deleteProfile');

//client layout
Route::get('/', 'homeController@home');
Route::get('/home', 'homeController@home');
Route::get('/about', 'homeController@about');
Route::get('/blog', 'homeController@blog');
Route::get('/blog_single', 'homeController@blog_single');
Route::get('/about', 'homeController@about');
Route::get('/contact', 'homeController@contact');
Route::post('/search', 'homeController@searchMovie');
//contact
Route::post("/contact", "contactController@store");
Route::post('/send-mail', 'contactController@sendMail');

Route::get('/movie_booking', 'homeController@movie_booking');
Route::get('/movie', 'homeController@movie');
Route::get('/movie/{id}', 'homeController@movie_single');
//dat ve ghe
Route::get('/seat_booking/{id}', 'homeController@seat_booking');

//Route::resource('screen', screenController::class);
