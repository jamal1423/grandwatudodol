<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\WebsiteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WebsiteController::class, 'home'])->middleware('guest');
Route::get('/home', [WebsiteController::class, 'home'])->middleware('guest');
Route::get('/destinasi-wisata', [WebsiteController::class, 'destinasi_wisata'])->middleware('guest');
Route::get('/paket-wisata', [WebsiteController::class, 'paket_wisata'])->middleware('guest');
Route::get('/detail-paket-wisata/{slug}', [WebsiteController::class, 'paket_wisata_detail'])->middleware('guest');
Route::get('/galeri', [WebsiteController::class, 'galeri'])->middleware('guest');
Route::get('/kontak', [WebsiteController::class, 'kontak'])->middleware('guest');


//PANEL ADMIN
Route::get('/loginpanel', [LoginController::class, 'login_admin'])->name('login')->middleware('guest');
Route::post('/loginpanel', [LoginController::class, 'authenticate_admin']);
Route::get('/dashboard/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [MainController::class, 'dashboard_admin'])->middleware('auth');
// DESTINASI WISATAR
Route::get('/dashboard/add-destinasi-wisata', [MainController::class, 'add_destinasi_wisata'])->middleware('auth');
Route::post('/dashboard/post-destinasi', [MainController::class, 'post_destinasi'])->middleware('auth');
Route::get('/dashboard/list-destinasi-wisata', [MainController::class, 'list_destinasi_wisata'])->middleware('auth');
Route::get('/dashboard/detail-destinasi-wisata/{id}', [MainController::class, 'detail_destinasi_wisata'])->middleware('auth');
Route::get('/dashboard/get-destinasi-wisata/{id}', [MainController::class, 'get_data_destinasi'])->middleware('auth');
Route::patch('/dashboard/update-destinasi-wisata', [MainController::class, 'update_destinasi_wisata'])->middleware('auth');
Route::delete('/dashboard/delete-destinasi-wisata', [MainController::class, 'delete_destinasi_wisata'])->middleware('auth');
//PAKET WISATA
Route::get('/dashboard/add-paket-wisata', [MainController::class, 'add_paket_wisata'])->middleware('auth');
Route::post('/dashboard/post-paket', [MainController::class, 'post_paket'])->middleware('auth');
Route::get('/dashboard/list-paket-wisata', [MainController::class, 'list_paket_wisata'])->middleware('auth');
Route::get('/dashboard/detail-paket-wisata/{id}', [MainController::class, 'detail_paket_wisata'])->middleware('auth');
Route::get('/dashboard/get-paket-wisata/{id}', [MainController::class, 'get_data_paket'])->middleware('auth');
Route::patch('/dashboard/update-paket-wisata', [MainController::class, 'update_paket_wisata'])->middleware('auth');
Route::delete('/dashboard/delete-paket-wisata', [MainController::class, 'delete_paket_wisata'])->middleware('auth');
//GALERI
Route::get('/dashboard/galeri-gwd', [MainController::class, 'data_galeri'])->middleware('auth');
Route::post('/dashboard/post-galeri', [MainController::class, 'post_galeri'])->middleware('auth');
Route::get('/dashboard/list-galeri', [MainController::class, 'list_galeri'])->middleware('auth');
Route::get('/dashboard/get-galeri/{id}', [MainController::class, 'get_galeri'])->middleware('auth');
Route::delete('/dashboard/delete-galeri', [MainController::class, 'delete_galeri'])->middleware('auth');
//KONTAK
Route::get('/dashboard/kontak', [MainController::class, 'data_kontak'])->middleware('auth');
Route::patch('/dashboard/update-kontak', [MainController::class, 'update_kontak'])->middleware('auth');
