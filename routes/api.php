<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MainPageController;
use App\Http\Controllers\Api\RegApiController;
use App\Http\Controllers\Api\EmailController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// data for the frontend on the main page
Route::get('/getMainPage', [MainPageController::class, 'getDataMainPage']);

Route::post('/registration/google','App\Http\Controllers\Api\RegApiController@google');

Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->user();
    // All providers...
    $user->getId();
    $user->getname();
    $user->getEmail();
    $user-.getToken();
    });
// sending an email with a link to end registration
Route::post('/sendLinkToCompleteRegistration', [EmailController::class, 'sendLinkToCompleteRegistration']);
// link validation to complete registration
Route::post('/validationLinkToCompleteRegistration', [EmailController::class, 'validationLinkToCompleteRegistration']);
