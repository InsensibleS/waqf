<?php

use App\Http\Controllers\Api\CommentDislikeController;
use App\Http\Controllers\Api\CommentLikeController;
use App\Http\Controllers\Api\NewsLikeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MainPageController;
use App\Http\Controllers\Api\EmailController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\GrantController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\NewsCommentController;
use App\Http\Controllers\Api\ProjectCommentLikeController;
use App\Http\Controllers\Api\ProjectCommentDislikeController;

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
// login with fb
Route::post('/login/fb', [AuthController::class, 'loginWithFb']);
// login with google
Route::post('/login/google', [AuthController::class, 'loginWithGoogle']);
// Get countries
Route::get('/getCountries', [CountryController::class, 'getDataCountries']);
// Get news
Route::get('/getNews/{link}', [NewsController::class, 'getNews']);
// Get all news
Route::get('/getAllNews', [NewsController::class, 'getAllNews']);
// Get more news
Route::get('/getMoreNews', [NewsController::class, 'getMoreNews']);
// Get all projects
Route::get('/getAllProjects', [ProjectController::class, 'getAllProjects']);
// Get project
Route::get('/getProject/{link}', [ProjectController::class, 'getProject']);
/**
 *  Routes for authorized users
 */
Route::middleware('auth:api')->group( function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    // receiving projects of the current user, broken down by grants
    Route::get('/getProjectsForProfile', [ProjectController::class, 'getProjectsForProfile']);
    // project creation by user
    Route::post('/storeProject', [ProjectController::class, 'storeProject']);
    // project creation by user
    Route::post('/deleteProject', [ProjectController::class, 'deleteProject']);
    //store Like news
    Route::post('/addCommentToNews', [NewsCommentController::class, 'addCommentToNews']);
    //save Like news
    Route::post('/addLikeToNews', [NewsLikeController::class, 'addLikeToNews']);
    //delete Like news
    Route::post('/deleteLikeToNews', [NewsLikeController::class, 'deleteLikeToNews']);
    //add Like to news comment
    Route::post('/addLikeToComment', [CommentLikeController::class, 'addLikeToComment']);
    //delete Like from news comment
    Route::post('/deleteLikeToComment', [CommentLikeController::class, 'deleteLikeToComment']);
    //add Dislike to news comment
    Route::post('/addDislikeToComment', [CommentDislikeController::class, 'addDislikeToComment']);
    //delete Dislike from news comment
    Route::post('/deleteDislikeToComment', [CommentDislikeController::class, 'deleteDislikeToComment']);
    //add Like to project comment
    Route::post('/addLikeToProjectComment', [ProjectCommentLikeController::class, 'addLikeToComment']);
    //delete Like from project comment
    Route::post('/deleteLikeFromProjectComment', [ProjectCommentLikeController::class, 'deleteLikeFromComment']);
    //add Dislike project comment
    Route::post('/addDislikeToProjectComment', [ProjectCommentDislikeController::class, 'addDislikeToComment']);
    //delete Dislike from project comment
    Route::post('/deleteDislikeFromProjectComment', [ProjectCommentDislikeController::class, 'deleteDislikeFromComment']);
});
