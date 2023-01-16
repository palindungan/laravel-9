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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('admins', App\Http\Controllers\AdminController::class);
Route::get('admin/export/', [App\Http\Controllers\AdminController::class, 'export']);

// usage inside a laravel route
Route::get('/intervention', function () {
    $img = Image::make('https://assets.infyom.com/logo/blue_logo_150x150.png')->resize(300, 200);
    return $img->response('jpg');
});

Route::get('generate-docx', [App\Http\Controllers\AdminController::class, 'generateDocx']);
