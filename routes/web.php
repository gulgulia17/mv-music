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
    Route::post('admin/test', 'DashboardController@test')->name('test');
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

/*
+--------+-----------+------------------------------+------------------+------------------------------------------------------------------------+--------------+
| Domain | Method    | URI                          | Name             | Action                                                                 | Middleware   |
+--------+-----------+------------------------------+------------------+------------------------------------------------------------------------+--------------+
|        | GET|HEAD  | /                            |                  | App\Http\Controllers\PagesController@index                             | web          |
|        | GET|HEAD  | 7at11                        | sevenat11        | App\Http\Controllers\PagesController@sevenat11                         | web          |
|        | GET|HEAD  | about                        | about            | App\Http\Controllers\PagesController@about                             | web          |
|        | GET|HEAD  | admin                        |                  | App\Http\Controllers\HomeController@index                              | web,auth     |
|        | GET|HEAD  | admin/about                  | about.index      | App\Http\Controllers\AboutController@index                             | web,auth     |
|        | POST      | admin/about                  | about.store      | App\Http\Controllers\AboutController@store                             | web,auth     |
|        | GET|HEAD  | admin/about/create           | about.create     | App\Http\Controllers\AboutController@create                            | web,auth     |
|        | DELETE    | admin/about/{about}          | about.destroy    | App\Http\Controllers\AboutController@destroy                           | web,auth     |
|        | GET|HEAD  | admin/about/{about}          | about.show       | App\Http\Controllers\AboutController@show                              | web,auth     |
|        | PUT|PATCH | admin/about/{about}          | about.update     | App\Http\Controllers\AboutController@update                            | web,auth     |
|        | GET|HEAD  | admin/about/{about}/edit     | about.edit       | App\Http\Controllers\AboutController@edit                              | web,auth     |
|        | POST      | admin/contact                | contact.store    | App\Http\Controllers\ContactController@store                           | web,auth     |
|        | PATCH     | admin/contact/{contact}      | contact.update   | App\Http\Controllers\ContactController@update                          | web,auth     |
|        | GET|HEAD  | admin/contact/{contact}/edit | contact.edit     | App\Http\Controllers\ContactController@edit                            | web,auth     |
|        | POST      | admin/gallery                | gallery.about    | App\Http\Controllers\GalleryController@store                           | web,auth     |
|        | GET|HEAD  | admin/gallery                |                  | App\Http\Controllers\GalleryController@index                           | web,auth     |
|        | GET|HEAD  | admin/mymusic                | mymusic.index    | App\Http\Controllers\MyMusicController@index                           | web,auth     |
|        | POST      | admin/mymusic                | mymusic.store    | App\Http\Controllers\MyMusicController@store                           | web,auth     |
|        | GET|HEAD  | admin/mymusic/create         | mymusic.create   | App\Http\Controllers\MyMusicController@create                          | web,auth     |
|        | GET|HEAD  | admin/mymusic/{mymusic}      | mymusic.show     | App\Http\Controllers\MyMusicController@show                            | web,auth     |
|        | PUT|PATCH | admin/mymusic/{mymusic}      | mymusic.update   | App\Http\Controllers\MyMusicController@update                          | web,auth     |
|        | DELETE    | admin/mymusic/{mymusic}      | mymusic.destroy  | App\Http\Controllers\MyMusicController@destroy                         | web,auth     |
|        | GET|HEAD  | admin/mymusic/{mymusic}/edit | mymusic.edit     | App\Http\Controllers\MyMusicController@edit                            | web,auth     |
|        | GET|HEAD  | api/user                     |                  | Closure                                                                | api,auth:api |
|        | GET|HEAD  | contact                      | contact          | App\Http\Controllers\PagesController@contact                           | web          |
|        | POST      | contact                      | contact          | App\Http\Controllers\DashboardController@Contact                       | web,auth     |
|        | GET|HEAD  | details                      |                  | App\Http\Controllers\DashboardController@index                         | web,auth     |
|        | GET|HEAD  | home                         | home             | App\Http\Controllers\HomeController@index                              | web,auth     |
|        | GET|HEAD  | inquiry                      | inquiry          | App\Http\Controllers\ContactController@index                           | web,auth     |
|        | POST      | inquiry                      | inquiry          | App\Http\Controllers\PagesController@Inquires                          | web          |
|        | POST      | login                        |                  | App\Http\Controllers\Auth\LoginController@login                        | web,guest    |
|        | GET|HEAD  | login                        | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest    |
|        | POST      | logout                       | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web          |
|        | GET|HEAD  | mymusic                      | mymusic          | App\Http\Controllers\PagesController@mymusic                           | web          |
|        | GET|HEAD  | password/confirm             | password.confirm | App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm    | web,auth     |
|        | POST      | password/confirm             |                  | App\Http\Controllers\Auth\ConfirmPasswordController@confirm            | web,auth     |
|        | POST      | password/email               | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web          |
|        | POST      | password/reset               | password.update  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web          |
|        | GET|HEAD  | password/reset               | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web          |
|        | GET|HEAD  | password/reset/{token}       | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web          |
|        | GET|HEAD  | register                     | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest    |
|        | POST      | register                     |                  | App\Http\Controllers\Auth\RegisterController@register                  | web,guest    |
|        | POST      | sitedetails                  | sitedetails      | App\Http\Controllers\DashboardController@SiteDetails                   | web,auth     |
|        | POST      | socialmedia                  | socialmedia      | App\Http\Controllers\DashboardController@SocialMedia                   | web,auth     |
|        | GET|HEAD  | store                        | store            | App\Http\Controllers\PagesController@store                             | web          |
|        | GET|HEAD  | studiogear                   | studiogear       | App\Http\Controllers\PagesController@studiogear                        | web          |
|        | POST      | subscriber                   | subs             | App\Http\Controllers\PagesController@subscriber                        | web          |
|        | GET|HEAD  | whatwedo                     | whatwedo         | App\Http\Controllers\PagesController@whatwedo                          | web          |
+--------+-----------+------------------------------+------------------+------------------------------------------------------------------------+--------------+
*/