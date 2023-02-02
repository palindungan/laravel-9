<?php

use App\Events\PusherTest;
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

    Route::get('/pusher-test', function () {
        $name = request()->name;
        echo $name;
        event(new PusherTest($name));
    });
});

Route::get('test-example/soal1', [App\Http\Controllers\TestExampleController::class, 'soal1'])->name('testExample.soal1');
Route::get('test-mitra-informatika/soal1', [App\Http\Controllers\TestMitraInformatikaController::class, 'soal1'])->name('testMitraInformatik.soal1');
Route::post('test-mitra-informatika/hasilSoal1', [App\Http\Controllers\TestMitraInformatikaController::class, 'hasilSoal1'])->name('testMitraInformatik.hasilSoal1');
