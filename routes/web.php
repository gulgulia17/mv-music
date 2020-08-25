<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PagesController@index');
Route::get('/7at11', 'PagesController@sevenat11')->name('sevenat11');
Route::get('/whatwedo', 'PagesController@whatwedo')->name('whatwedo');
Route::get('/studiogear', 'PagesController@studiogear')->name('studiogear');
Route::get('/mymusic', 'PagesController@mymusic')->name('mymusic');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/store', 'PagesController@store')->name('store');
Route::get('gallery', 'PagesController@gallery')->name('gallery');


/**
 * Dropdown Menus
 * Total Menu
 */

Route::get('musicproduction', 'PagesController@musicproduction')->name('musicproduction');
Route::get('audiorecording', 'PagesController@audiorecording')->name('audiorecording');
Route::get('mixingmastering', 'PagesController@mixingmastering')->name('mixingmastering');
Route::get('onlinemixingmastering', 'PagesController@onlinemixingmastering')->name('onlinemixingmastering');
Route::get('completemusicalbum', 'PagesController@completemusicalbum')->name('completemusicalbum');
Route::get('songwriting', 'PagesController@songwriting')->name('songwriting');
Route::get('dubbingnvoiceovers', 'PagesController@dubbingnvoiceovers')->name('dubbingnvoiceovers');
Route::get('backgroundmusic', 'PagesController@backgroundmusic')->name('backgroundmusic');
Route::get('commercialadsnjingles', 'PagesController@commercialadsnjingles')->name('commercialadsnjingles');
Route::get('digitalmediapromotion', 'PagesController@digitalmediapromotion')->name('digitalmediapromotion');

Route::post('admin/test', 'DashboardController@test')->name('test');

Route::post('subscriber', 'PagesController@subscriber')->name('subs');
Route::post('inquiry', 'PagesController@Inquires')->name('inquiry');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    /**
     * Get Routes
     */
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin', 'HomeController@index');
    Route::get('/details', 'DashboardController@index');
    Route::get('/admin/gallery', 'GalleryController@index');
    Route::get('inquiry', 'ContactController@inquiry')->name('inquiry');
    Route::GET('admin/contact/{contact}/edit', 'ContactController@edit')->name('contact.edit');

    /**
     * Post Routes
     */
    Route::post('sitedetails', 'DashboardController@SiteDetails')->name('sitedetails');
    Route::post('socialmedia', 'DashboardController@SocialMedia')->name('socialmedia');
    Route::post('contact', 'DashboardController@Contact')->name('contact');
    Route::post('/admin/gallery', 'GalleryController@store')->name('gallery.about');
    Route::POST('admin/contact', 'ContactController@store')->name('contact.store');
    /**
     * Patch Routes
     */
    Route::PATCH('admin/contact/{contact}', 'ContactController@update')->name('contact.update');

    /**
     * Resource routes
     */
    Route::resource('admin/about', 'AboutController');
    Route::resource('admin/mymusic', 'MyMusicController');
});