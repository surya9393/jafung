<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\VerifikasiController;


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
// Login
Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/proses','proses');
    Route::get('logout','logout');
});
Route::group(['middleware'=>['auth']], function(){
    Route::group(['middleware'=>['cek_login:1']], function(){
        Route::resource('admin',AdminController::class);
    });
    Route::group(['middleware'=>['cek_login:2']], function(){
        Route::resource('pengguna',PenggunaController::class);
    });
});
//Lihat Pendaftar
Route::get('/pendaftar', [PendaftarController::class,'index'])->middleware('auth');
//Verifikasi
Route::resource('/verifikasi', VerifikasiController::class)->middleware('auth');

Route::get('/usulan', function(){
    return view('usulan');
});
Route::get('/uji-kompetensi', function(){
    return view('uji');
});

// Route::get('/verifikasi', [VerifikasiController::class,'index'])->middleware('auth');
// Route::get('/verifikasi/pendaftar/{$id}', [VerifikasiController::class,'show'])->middleware('auth');
// Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard Pengguna
// Route::get('/dashboard', function(){
//     return view('dashboard.index',[
//         'title'=>'Dashboard'
//     ]);
// })->middleware('auth');


// Route::resource('/dashboard/posts', DashboardController::class)->middleware('auth');


//web lama
// Route::get('/blog', [PostController::class, 'index']);

// //Single Post
// Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Route::get('/categories', [CategoryController::class, 'show']);

Route::get('/dashboard/upload', [UploadController::class, 'upload'])->middleware('auth');
Route::post('/dashboard/upload/proses', [UploadController::class, 'proses_upload'])->middleware('auth');
Route::get('/dashboard/upload/hapus/{id}', [UploadController::class,'hapus'])->middleware('auth');
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
//Lihat Pendaftar

