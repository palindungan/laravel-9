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

Route::get('/soal1', [App\Http\Controllers\TestController::class, 'soal1'])->name('soal1');
Route::get('/soal2', [App\Http\Controllers\TestController::class, 'soal2'])->name('soal2');
Route::get('/soal3', [App\Http\Controllers\TestController::class, 'soal3'])->name('soal3');
Route::get('/soalQuery', [App\Http\Controllers\TestController::class, 'soalQuery'])->name('soalQuery');
Route::get('/soalQuery2', [App\Http\Controllers\TestController::class, 'soalQuery2'])->name('soalQuery2');
Route::get('/soalQuery3', [App\Http\Controllers\TestController::class, 'soalQuery3'])->name('soalQuery3');
Route::get('/soalQuery4', [App\Http\Controllers\TestController::class, 'soalQuery4'])->name('soalQuery4');

Auth::routes();
Route::group(['middleware' => ['auth:web']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('admins', App\Http\Controllers\AdminController::class);
    Route::post('admin/import/', [App\Http\Controllers\AdminController::class, 'import']);
    Route::get('admin/export/', [App\Http\Controllers\AdminController::class, 'export']);
    Route::get('admin/generate-docx', [App\Http\Controllers\AdminController::class, 'generateDocx']);

    Route::get('/intervention', function () {
        $img = Image::make('https://assets.infyom.com/logo/blue_logo_150x150.png')->resize(300, 200);
        return $img->response('jpg');
    });
});
