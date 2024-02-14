<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\JournalPromptController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/random-prompt', [JournalPromptController::class, 'getRandomPrompt'])->name('random.prompt');

//Unauthenticated Route
Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.posts.index');
Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
Route::post('/admin/posts', [PostController::class, 'store'])->name('admin.posts.store');
Route::get('/admin/posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
Route::put('/admin/posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
Route::delete('/admin/posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');

Route::post('/admin/posts', [PostController::class, 'store'])->name('admin.posts.store');


//comment routes

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');  
Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');  


//
Route::get('/assign-role/{userId}', function ($userId) {
    $user = User::find($userId);

    if (! $user) {
        return 'User not found';
    }

    $user->role = 'admin';
    $user->save();

    return 'Role assigned successfully';
});
