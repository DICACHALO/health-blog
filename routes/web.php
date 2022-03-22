<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {return view('welcome');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes for administrator role or member role
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', function () {
      return view('admin.dashboard');
    })->name('dashboard');
  });

// Route to list public post
Route::get('/', [App\Http\Controllers\PostController::class, 'index']);

// Route to results after searching posts.

Route::post('/search', [App\Http\Controllers\PostController::class, 'search'])->name('posts_search');

// Route to list private post
Route::get('/home', [App\Http\Controllers\PostController::class, 'list'])->name('posts_list');

Route::get('/create', [App\Http\Controllers\PostController::class, 'store'])->name('store');

Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('create');

Route::resource('/posts', PostController::class)->middleware('auth');