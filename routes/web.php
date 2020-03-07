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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/11', function () {
//     return "salom";
// });

//Home page
Route::get('/', 'SiteController@home')->name('home');
//About page
Route::get('/about', 'SiteController@about')->name('about');
//Menu
Route::get('/Food_menu', 'SiteController@menu')->name('menu');
//Chef
Route::get('/Talent_chefs', 'SiteController@chef')->name('chef');
// //blog single
Route::get('/Blog_single', 'SiteController@blog')->name('blog');
// //blog details
Route::get('/blog_details', 'SiteController@blogdetails')->name('blogdetails');
//contact
Route::get('/contact', 'SiteController@contact')->name('contact');