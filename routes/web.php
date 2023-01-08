<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
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
})->name('homepage');

Route::get('/tutorial', function(){
    return view('frontend.tutorial');
});

Route::get('/tutorialJava', function(){
    return view('tutorial.java');
});

Route::get('/html', function(){
    return view('tutorial.html');
});

Route::get('/python', function(){
    return view('tutorial.python');
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

//admin
Route::get('/userDashboard', function(){
    return view('frontend.admin.user');
})->name('userDashboard');

Route::get('/kategoriDashboard', function(){
    return view('frontend.admin.kategori');
})->name('kategoriDashboard');

Route::get('/pertanyaanDashboard', function(){
    return view('frontend.admin.pertanyaan');
})->name('pertanyaanDashboard');

Route::get('/pertanyaanDashboard', function(){
    return view('frontend.admin.pertanyaan');
})->name('pertanyaanDashboard');

Route::get('/homepageDashboard', function(){
    return view('frontend.admin.dashboard');
})->name('homepageDashboard');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');