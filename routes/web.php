<?php

use App\Mail\LinkShipped;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ImageController;

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

//Route::get('/test', function () {
   // return view('welcome');
//});
Route::get('/test', Function () {
    return view('image/imageuplode');
});
Route::post('/image', [ImageController::class, 'upload'])->name('image.upload');
