<?php

use App\Events\PusherTest;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/backup', [App\Http\Controllers\HomeController::class, 'backup']);
Route::get('/404', [App\Http\Controllers\HomeController::class, 'pageNotFound']);

Route::post('/greeting-store', [App\Http\Controllers\HomeController::class, 'greetingStore']);
Route::get('/{code?}', [App\Http\Controllers\HomeController::class, 'index']);