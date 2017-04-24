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

Route::get('/', 'HomeController@index');

Route::get('register-user', 'UserRegistrationController@show');
Route::post('store-user', 'UserRegistrationController@store');

Auth::routes();

Route::get('home', 'HomeController@index');

Route::group(['prefix' => 'user'], function(){
    //notifications module
    Route::get('notification/compose', 'NotificationController@show');
    Route::post('notification/save', 'NotificationController@store');
    Route::post('notification/upload-files', 'NotificationController@upload');
    Route::get('notification/sent', 'NotificationController@sent');
    Route::get('notifications/sent', 'NotificationController@getSent');
    Route::get('notification/inbox', 'NotificationController@inbox');
    Route::get('notifications/inbox', 'NotificationController@getSent');

    // boxes
    Route::get('eboxes', 'EboxController@index');
    Route::post('eboxes/save', 'EboxController@store');
    Route::post('eboxes/update', 'EboxController@update');
    Route::get('eboxes/{ebox}', 'EboxController@get');
    Route::delete('eboxes/delete', 'EboxController@destroy');
});
