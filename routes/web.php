<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

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
// Home
Route::get('/', [HomeController::class, 'index']);
// Daftar
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
// Login Pengguna
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// Login Admin
Route::prefix('admin')->group(function(){
    Route::get('/',[LoginAdminController::class, 'loginform']);
    Route::get('/login',[LoginAdminController::class, 'loginform'])->name('admin.login');
    Route::get('/home', [AdminHomeController::class, 'index'])->name('admin.home');
});
// Dashboard Pengguna
Route::get('/dashboard', function(){
    return view('dashboard.index',[
        'title'=>'Dashboard'
    ]);
})->middleware('auth');
// Dashboard Admin
Route::get('/backoffice/dashboard', function(){
    return view('dashboard.backoffice.index',[
        'title'=>'Admin'
    ]);
});

Route::resource('/dashboard/posts', DashboardController::class)->middleware('auth');


//web lama
Route::get('/blog', [PostController::class, 'index']);

//Single Post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'show']);

Route::get('/dashboard/upload', [UploadController::class, 'upload'])->middleware('auth');
Route::post('/dashboard/upload/proses', [UploadController::class, 'proses_upload'])->middleware('auth');
Route::get('/dashboard/upload/hapus/{id}', [UploadController::class,'hapus'])->middleware('auth');
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
