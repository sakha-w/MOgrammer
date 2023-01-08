<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\KuisController;
use Illuminate\Support\Facades\Auth;
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
    return view('landing');
});

Route::get('/landing', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('landing');

Route::get('/homepage', function(){
    return view('frontend.landing');
});

Route::get('/tutorial', function(){
    return view('frontend.tutorial');
});

Route::get('/java', function(){
    return view('frontend.tutorial.java');
});

Route::get('/javascript', function(){
    return view('frontend.tutorial.javascript');
});

Route::get('/css', function(){
    return view('frontend.tutorial.css');
});

Route::get('/php', function(){
    return view('frontend.tutorial.php');
});

Route::middleware('auth')->group(function () {
    Route::get('/kuis/{tipe}', function($tipe){
        return view('frontend.kuisapp');
    });
});
Route::get('/kuis/{category}', [KuisController::class, 'getQuestionsByCategory']);


Route::get('/forum', function(){
    return view('frontend.forum');
});

Route::get('/kuis', function(){
    return view('frontend.kuis');
});

Route::get('/tableUser', function(){
    return view('frontend.admin.user');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');