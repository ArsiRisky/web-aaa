<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GaleriprodukController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[IndexController::class,'index']);

// // about
// Route::get('/about', [AboutController::class, 'index'])->name('about');
// Route::get('/about/add', [AboutController::class, 'add']);
// Route::post('/about/insert', [AboutController::class, 'insert'])->name('insert-about');
// Route::get('/about/edit/{id}', [AboutController::class, 'edit']);
// Route::post('/about/simpanedit/{id}', [AboutController::class, 'simpanedit']);
// Route::get('/about/delete/{id}', [AboutController::class, 'delete']);

// achievement
Route::get('/achievement', [AchievementController::class, 'index'])->name('achievement');
Route::get('/achievement/add', [AchievementController::class, 'add']);
Route::post('/achievement/insert', [AchievementController::class, 'insert'])->name('insert-achievement');
Route::get('/achievement/edit/{id}', [AchievementController::class, 'edit']);
Route::post('/achievement/simpanedit/{id}', [AchievementController::class, 'simpanedit']);

// Visi Misi
Route::get('/visimisi', [VisimisiController::class, 'index'])->name('visimisi');
Route::get('/visimisi/add', [VisimisiController::class, 'add']);
Route::post('/visimisi/insert', [VisimisiController::class, 'insert'])->name('insert-visimisi');
Route::get('/visimisi/edit/{id}', [VisimisiController::class, 'edit']);
Route::post('/visimisi/simpanedit/{id}', [VisimisiController::class, 'simpanedit']);

// product
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/add', [ProdukController::class, 'add']);
Route::post('/produk/insert',[ProdukController::class, 'insert'])->name('insert-product');
Route::get('/produk/edit/{id}',[ProdukController::class, 'edit']);
Route::post('/produk/simpanedit/{id}',[ProdukController::class, 'simpanedit']);
Route::get('/produk/delete/{id}',[ProdukController::class, 'delete']);

// galery product
Route::get('/galeriproduk', [GaleriprodukController::class, 'index']);

// galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/galeri/add', [GaleriController::class, 'add']);
Route::post('/galeri/insert', [GaleriController::class, 'insert'])->name('insert-galeri');
Route::get('/galeri/edit/{id}', [GaleriController::class, 'edit']);
Route::post('/galeri/simpanedit/{id}', [GaleriController::class, 'simpanedit']);
Route::get('/galeri/delete/{id}', [GaleriController::class, 'delete']);

// berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/add',[BeritaController::class , 'add']);
Route::post('/berita/insert', [BeritaController::class, 'insert'])->name('insert-berita');
Route::get('/berita/edit/{id}',[BeritaController::class,'edit']);
Route::post('/berita/simpanedit/{id}',[BeritaController::class,'simpanedit']);
Route::get('/berita/delete/{id}',[BeritaController::class,'delete']);

Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

