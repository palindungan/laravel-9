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

Route::prefix('backend-ain-cici')->group(function() {
    // Route::get('/', 'BackendController@index');
    Route::resource('admins', AdminController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('greetings', GreetingController::class);
    Route::resource('weddings', WeddingController::class);
    Route::resource('events', EventController::class);
    Route::resource('photoGalleries', PhotoGalleryController::class);
    Route::resource('guests', GuestController::class);
});
