<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {


    Route::resource('journals', JournalController::class);
});



Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/home', [WelcomeController::class, 'index'])->name('welcome');



//force logout
Route::get('/force-logout', function () {
    Auth::logout();
    return redirect('/');
});


//return redirect view
Route::get('/redirview', function () {
    return view('redirview');
})->name('redirview');



Route::get('/ak', function () {
    return redirect()->route('redirview');
});



// routes/web.php
Route::get('/user/status', [UserController::class, 'getStatus'])->name('user.status');