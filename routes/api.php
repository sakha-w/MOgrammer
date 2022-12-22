<?php

use App\Http\Controllers\ForumController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/comment-save', [ForumController::class, 'saveComment'])->name('saveComment');
Route::post('/comment-view', [ForumController::class, 'viewComment'])->name('viewComment');
