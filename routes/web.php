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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Frontend Routes
Route::get('/', 'PagesController@getLandingPage')->name('landing_page');
Route::get('contact', 'PagesController@getContactPage')->name('contact_page');
Route::get('course', 'PagesController@getCoursePage')->name('course_page');
Route::get('about', 'PagesController@getAboutPage')->name('about_page');
Route::get('profile', 'PagesController@getProfilePage')->name('profile_page')->middleware('auth');
Route::get('account', 'PagesController@getAccountPage')->name('account_page')->middleware('auth');
Route::get('upload', 'PagesController@getUploadPage')->name('upload_page')->middleware('auth');
Route::post('upload', 'BookController@store')->name('upload_file')->middleware('auth');
Route::get('category/{category}', 'PagesController@getBookList')->name('category')->middleware('auth');
Route::get('book/{book}', 'BookController@previewBook')->name('book')->middleware('auth');
Route::resource('user', 'UserController')->middleware('auth');
Route::get('user/{user}/change-password', 'UserController@getChangePasswordPage')->name('user.password.page');
Route::put('user/{user}/change-update', 'UserController@changePassword')->name('user.password.update');
// Backend Routes
Route::prefix('admin')->name('admin.')->middleware('can:create,App\User')->group(function () {
    Route::get('dashboard', 'AdminController@getDashboard')->name('dashboard');
    Route::get('users', 'AdminController@getUsers')->name('users');
    Route::get('categories', 'AdminController@getCategories')->name('categories');
    Route::get('books', 'AdminController@getBooks')->name('books');
    Route::post('book/{book}/approve', 'BookController@approve')->name('book.approve');
    Route::post('book/{book}/disapprove', 'BookController@disapprove')->name('book.disapprove');
    Route::resource('book', 'BookController');
});
