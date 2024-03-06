<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PositionsController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Kategori_tiketController;
use App\Http\Controllers\Detail_tiketController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\CommentsController;

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


Route::get('/',[LoginController::class,'index']);
Route::get('/register',[LoginController::class,'create']);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/postLogin',[LoginController::class,'login']);
Route::post('/register/simpan',[LoginController::class,'store']);

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

Route::get('/user',[UserController::class,'index'])->middleware('auth');
Route::get('/user/tambah',[UserController::class,'create'])->middleware('chief');
Route::post('/user/simpan',[UserController::class,'store'])->middleware('chief');
Route::get('/user/{id}/edit',[UserController::class,'edit'])->middleware('chief');
Route::post('/user/{id}/update',[UserController::class,'update'])->middleware('chief');
Route::get('/user/{id}/hapus',[UserController::class,'destroy'])->middleware('chief');

Route::get('/position',[PositionsController::class,'index'])->middleware('auth');
Route::get('/position/tambah',[PositionsController::class,'create'])->middleware('korwil');
Route::post('/position/simpan',[PositionsController::class,'store'])->middleware('korwil');
Route::get('/position/{id}/edit',[PositionsController::class,'edit'])->middleware('korwil');
Route::post('/position/{id}/update',[PositionsController::class,'update'])->middleware('korwil');
Route::get('/position/{id}/hapus',[PositionsController::class,'destroy'])->middleware('korwil');

Route::get('/location',[LocationsController::class,'index'])->middleware('auth');
Route::get('/location/tambah',[LocationsController::class,'create'])->middleware('korwil');
Route::post('/location/simpan',[LocationsController::class,'store'])->middleware('korwil');
Route::get('/location/{id}/edit',[LocationsController::class,'edit'])->middleware('korwil');
Route::post('/location/{id}/update',[LocationsController::class,'update'])->middleware('korwil');
Route::get('/location/{id}/hapus',[LocationsController::class,'destroy'])->middleware('korwil');

Route::get('/kategori',[KategoriController::class,'index'])->middleware('auth');
Route::get('/kategori/tambah',[KategoriController::class,'create'])->middleware('korwil');
Route::post('/kategori/simpan',[KategoriController::class,'store'])->middleware('korwil');
Route::get('/kategori/{id}/edit',[KategoriController::class,'edit'])->middleware('korwil');
Route::post('/kategori/{id}/update',[KategoriController::class,'update'])->middleware('korwil');
Route::get('/kategori/{id}/hapus',[KategoriController::class,'destroy'])->middleware('korwil');

Route::get('/asset',[AssetsController::class,'index'])->middleware('auth');
Route::get('/asset/tambah',[AssetsController::class,'create'])->middleware('korwil');
Route::post('/asset/simpan',[AssetsController::class,'store'])->middleware('korwil');
Route::get('/asset/{id}/edit',[AssetsController::class,'edit'])->middleware('korwil');
Route::post('/asset/{id}/update',[AssetsController::class,'update'])->middleware('korwil');
Route::get('/asset/{id}/hapus',[AssetsController::class,'destroy'])->middleware('korwil');

Route::get('/client',[ClientController::class,'index'])->middleware('auth');
Route::get('/client/tambah',[ClientController::class,'create'])->middleware('korwil');
Route::post('/client/simpan',[ClientController::class,'store'])->middleware('korwil');
Route::get('/client/{id}/edit',[ClientController::class,'edit'])->middleware('korwil');
Route::post('/client/{id}/update',[ClientController::class,'update'])->middleware('korwil');
Route::get('/client/{id}/hapus',[ClientController::class,'destroy'])->middleware('korwil');

Route::get('/k_ticket',[Kategori_tiketController::class,'index'])->middleware('auth');
Route::get('/k_ticket/tambah',[Kategori_tiketController::class,'create'])->middleware('korwil');
Route::post('/k_ticket/simpan',[Kategori_tiketController::class,'store'])->middleware('korwil');
Route::get('/k_ticket/{id}/edit',[Kategori_tiketController::class,'edit'])->middleware('korwil');
Route::post('/k_ticket/{id}/update',[Kategori_tiketController::class,'update'])->middleware('korwil');
Route::get('/k_ticket/{id}/hapus',[Kategori_tiketController::class,'destroy'])->middleware('korwil');

Route::get('/detail_ticket',[Detail_tiketController::class,'index'])->middleware('auth');
Route::get('/detail_ticket/tambah',[Detail_tiketController::class,'create'])->middleware('korwil');
Route::post('/detail_ticket/simpan',[Detail_tiketController::class,'store'])->middleware('korwil');
Route::get('/detail_ticket/{id}/edit',[Detail_tiketController::class,'edit'])->middleware('korwil');
Route::post('/detail_ticket/{id}/update',[Detail_tiketController::class,'update'])->middleware('korwil');
Route::get('/detail_ticket/{id}/hapus',[Detail_tiketController::class,'destroy'])->middleware('korwil');

Route::get('/ticket',[TicketsController::class,'index'])->middleware('auth');
Route::get('/ticket/tambah',[TicketsController::class,'create'])->middleware('auth');
Route::post('/ticket/simpan',[TicketsController::class,'store'])->middleware('auth');
Route::get('/ticket/cetak',[TicketsController::class,'cetak'])->middleware('auth');
Route::get('/ticket/{id}/edit',[TicketsController::class,'edit'])->middleware('auth');
Route::post('/ticket/{id}/update',[TicketsController::class,'update'])->middleware('auth');
Route::get('/ticket/{id}/hapus',[TicketsController::class,'destroy'])->middleware('auth');
Route::get('/ticket/{id}/struk',[TicketsController::class,'struk'])->middleware('auth');

Route::get('/comment',[CommentsController::class,'index'])->middleware('auth');
Route::get('/comment/tambah',[CommentsController::class,'create'])->middleware('korwil');
Route::post('/comment/simpan',[CommentsController::class,'store'])->middleware('korwil');
Route::get('/comment/{id}/edit',[CommentsController::class,'edit'])->middleware('korwil');
Route::post('/comment/{id}/update',[CommentsController::class,'update'])->middleware('korwil');
Route::get('/comment/{id}/hapus',[CommentsController::class,'destroy'])->middleware('korwil');

