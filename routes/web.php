<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\ProfileController;
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

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/homepage', function(){
    return view('frontend.landing');
});

Route::get('/tutorialJava', function(){
    return view('tutorial.java');
});
Route::get('/tutorialJavaScript', function(){
    return view('tutorial.javascript');
});
Route::get('/tutorialCss', function(){
    return view('tutorial.css');
});
Route::get('/tutorialPhp', function(){
    return view('tutorial.php');
});

Route::get('/webdev', function(){
    return view('frontend.webdev');
});
Route::get('/forum', function(){
    return view('frontend.forum');
});
Route::get('/kuis', function(){
    return view('frontend.kuis');
});

// require __DIR__.'/auth.php';

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');