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
//Home page
Route::get('/', 'SiteController@home')->name('home');
//About page
Route::get('/about', 'SiteController@about')->name('about');
//Menu
Route::get('/Food_menu', 'SiteController@menu')->name('menu');
//Chef
Route::get('/Talent_chefs', 'SiteController@chef')->name('chef');
//News
Route::get('/News', 'SiteController@blog')->name('blog');
Route::get('/News/{id}', 'SiteController@newsMore')->name('batafsil');
//contact
Route::get('/contact', 'SiteController@contact')->name('contact');
//Admin routes
Route::namespace('Admin')->name('admin.')->prefix('admin') -> group(function(){
    Route::resource('posts', 'PostsController');
});