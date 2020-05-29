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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'MainController@index');
Route::get('/admin', 'MainController@admin');
Route::get('/dance/{dance?}', 'MainController@dance');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all', 'ContactController@allData')->name('contact-data');
Route::get('/contact/all/{id}', 'ContactController@showOneMessage')->name('contact-data-one');
Route::get('/contact/all/{id}/update', 'ContactController@updateMessage')->name('contact-update');
Route::post('/contact/all/{id}/update', 'ContactController@updateMessageSubmit')->name('contact-update-submit');
Route::get('/contact/all/{id}/delete', 'ContactController@deleteMessage')->name('contact-delete');
Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/new', function () {
    return view('new');
})->name('new');


Route::get('/users', function () {
    return view('users');
})->name('users');

Route::get('/users/all', 'RegisterController@allUser')->name('user-data');
