<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\MasyarakatDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
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

// ------------------------- LANDING PAGE ----------------------------------
Route::get('/', [HomeControllers::class,'index']);
Route::get('/news', [NewsController::class,'news_list']);
Route::get('/news/{slug}', [NewsController::class,'read']);


// ------------------------- AUTHENTICATION ----------------------------------
Route::get('/login', [AuthController::class,'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class,'login_action'])->middleware('guest');
Route::get('/register', [AuthController::class,'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class,'register_action'])->middleware('guest');
Route::get('/forgot-password', [AuthController::class,'forgot_password'])->name('forgot_password')->middleware('guest');
Route::post('/forgot-password', [AuthController::class,'forgot_password_action'])->middleware('guest');
Route::get('/logout', [AuthController::class,'logout'])->name('logout')->middleware('auth');



// ------------------------- DASHBOARD MASYARAKAT ----------------------------------
Route::get('/masyarakat', [MasyarakatDashboardController::class,'index'])->middleware('auth', 'masyarakat');
Route::get('/masyarakat/pengaduan', [MasyarakatDashboardController::class,'pengaduan'])->middleware('auth', 'masyarakat');
Route::get('/masyarakat/pengaduan/create', [MasyarakatDashboardController::class,'pengaduan_create'])->middleware('auth', 'masyarakat');
Route::post('/masyarakat/pengaduan/create', [MasyarakatDashboardController::class,'pengaduan_create_action'])->middleware('auth', 'masyarakat');
Route::get('/masyarakat/pengaduan/read/{id}', [MasyarakatDashboardController::class,'pengaduan_read'])->middleware('auth', 'masyarakat');
Route::post('/masyarakat/pengaduan/read/{id}', [MasyarakatDashboardController::class,'pengaduan_read_action'])->middleware('auth', 'masyarakat');
Route::get('/masyarakat/pengaduan/finish/{id}', [MasyarakatDashboardController::class,'pengaduan_finish'])->middleware('auth', 'masyarakat');
Route::get('/masyarakat/pengaduan/banding/{id}', [MasyarakatDashboardController::class,'pengaduan_banding'])->middleware('auth', 'masyarakat');
Route::get('/masyarakat/layanan/surat', [MasyarakatDashboardController::class,'layanan_surat'])->middleware('auth', 'masyarakat');
Route::get('/masyarakat/settings', [UserController::class,'settings'])->middleware('auth', 'masyarakat');
Route::post('/masyarakat/settings', [UserController::class,'settings_action'])->middleware('auth', 'masyarakat');


// ------------------------- DASHBOARD ADMIN ----------------------------------
Route::get('/admin', [AdminDashboardController::class,'index'])->middleware('auth', 'admin');
Route::get('/admin/desa/info', [AdminDashboardController::class,'desa_info'])->middleware('auth', 'admin');
Route::post('/admin/desa/update', [AdminDashboardController::class,'desa_update_action'])->middleware('auth', 'admin');
Route::get('/admin/desa/sekre', [AdminDashboardController::class,'desa_team'])->middleware('auth', 'admin');
Route::get('/admin/desa/sekre/structure', [AdminDashboardController::class,'desa_team_structure'])->middleware('auth', 'admin');
Route::post('/admin/desa/sekre/structure', [AdminDashboardController::class,'desa_team_structure_action'])->middleware('auth', 'admin');
Route::get('/admin/desa/sekre/create', [AdminDashboardController::class,'desa_team_create'])->middleware('auth', 'admin');
Route::post('/admin/desa/sekre/create', [AdminDashboardController::class,'desa_team_create_action'])->middleware('auth', 'admin');
Route::get('/admin/desa/sekre/delete/{id}', [AdminDashboardController::class,'desa_team_delete'])->middleware('auth', 'admin');
Route::get('/admin/desa/sekre/update/{id}', [AdminDashboardController::class,'desa_team_update'])->middleware('auth', 'admin');
Route::post('/admin/desa/sekre/update/{id}', [AdminDashboardController::class,'desa_team_update_action'])->middleware('auth', 'admin');
Route::get('/admin/desa/visimisi', [AdminDashboardController::class,'desa_visimisi'])->middleware('auth', 'admin');
Route::get('/admin/desa/contact', [AdminDashboardController::class,'desa_contact'])->middleware('auth', 'admin');
Route::get('/admin/desa/services', [AdminDashboardController::class,'desa_service'])->middleware('auth', 'admin');
Route::get('/admin/desa/services/create', [AdminDashboardController::class,'desa_service_create'])->middleware('auth', 'admin');
Route::post('/admin/desa/services/create', [AdminDashboardController::class,'desa_service_create_action'])->middleware('auth', 'admin');
Route::get('/admin/desa/services/update/{id}', [AdminDashboardController::class,'desa_service_update'])->middleware('auth', 'admin');
Route::post('/admin/desa/services/update/{id}', [AdminDashboardController::class,'desa_service_update_action'])->middleware('auth', 'admin');
Route::get('/admin/desa/services/delete/{id}', [AdminDashboardController::class,'desa_service_delete'])->middleware('auth', 'admin');
Route::get('/admin/pengaduan', [AdminDashboardController::class,'pengaduan'])->middleware('auth', 'admin');
Route::get('/admin/pengaduan/read/{id}', [AdminDashboardController::class,'pengaduan_read'])->middleware('auth', 'admin');
Route::post('/admin/pengaduan/read/{id}', [MasyarakatDashboardController::class,'pengaduan_read_action'])->middleware('auth', 'admin');
Route::get('/admin/pengaduan/finish/{id}', [AdminDashboardController::class,'pengaduan_finish'])->middleware('auth', 'admin');
Route::get('/admin/pengaduan/proses/{id}', [AdminDashboardController::class,'pengaduan_proses'])->middleware('auth', 'admin');
Route::get('/admin/pengaduan/menunggu/{id}', [AdminDashboardController::class,'pengaduan_menunggu'])->middleware('auth', 'admin');
Route::get('/admin/pengaduan/delete/{id}', [AdminDashboardController::class,'pengaduan_delete'])->middleware('auth', 'admin');
Route::get('/admin/news', [NewsController::class,'news_dashboard'])->middleware('auth', 'admin');
Route::get('/admin/news/create', [NewsController::class,'news_create'])->middleware('auth', 'admin');
Route::post('/admin/news/create', [NewsController::class,'news_create_action'])->middleware('auth', 'admin');
Route::get('/admin/news/update/{id}', [NewsController::class,'news_update'])->middleware('auth', 'admin');
Route::post('/admin/news/update/{id}', [NewsController::class,'news_update_action'])->middleware('auth', 'admin');
Route::get('/admin/news/delete/{id}', [NewsController::class,'news_delete'])->middleware('auth', 'admin');
Route::get('/admin/settings', [UserController::class,'settings'])->middleware('auth', 'admin');
Route::post('/admin/settings', [UserController::class,'settings_action'])->middleware('auth', 'admin');







Route::get('/usulan', [HomeControllers::class,'usulan']); //keknya gk perlu, nanti hapus

// Route::get('/', function(){
//     return view ('Dashboard');
// });



