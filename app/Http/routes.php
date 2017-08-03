<?php

Route::get('/', 'HomeController@index');

Route::post('/account', function(Request $request) {
      Route::resource('/register', 'HomeContrtoller\AdminController@index');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::get('/home', 'DashboardController@dashboard');
Route::get('/', 'HomeController@index');
Route::get('/home', 'DashboardController@dashboard');
Route::auth();

//School Fill Process
Route::post('/school_details/save', 'Master\Admin\SchoolDetailsController@store');

//School Details
Route::get('/school-profile', 'Master\Admin\SchoolDetailsController@index');
Route::post('/school-profile/upload-gallery', 'Master\Admin\SchoolDetailsController@upload_gallery');



Route::group(array('prefix' => 'register/'), function() {
  Route::post('account', 'Master\AuthController@store');
  });
Route::resource('/wrong', 'HomeController@index');