<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MainPageController;
use App\Http\Controllers\Api\EmailController;
use App\Http\Controllers\Api\GrantController;
use App\Http\Controllers\Api\AuthController;

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
// data for the frontend on the grant page
Route::get('/getCurrentGrantWithProjects', [GrantController::class, 'getCurrentGrantWithProjects']);
// sending an email with a link to end registration
Route::post('/sendLinkToCompleteRegistration', [EmailController::class, 'sendLinkToCompleteRegistration']);
// link validation to complete registration
Route::post('/validationLinkToCompleteRegistration', [EmailController::class, 'validationLinkToCompleteRegistration']);
// logit with fb
Route::post('/login/fb', [AuthController::class, 'loginWithFb']);
// login wihit google
Route::post('/login/google', [AuthController::class, 'loginWithGoogle']);

//Get country
/**
 *  Routes for authorized users
 */
Route::middleware('auth:api')->group( function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});
// test
Route::post('/test', [AuthController::class, 'test']);
