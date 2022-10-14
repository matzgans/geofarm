<?php

use App\Http\Controllers\{AuthController, PetaniController, LahanController, LandingController,
                             DetailLahanController};
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

Route::get('/', [LandingController::class, 'index'])->name('welcome');
Route::get('/dashboard', [LandingController::class, 'dashboard'])->name('dashboard');

// petani
Route::get('/petani/index', [PetaniController::class, 'index'])->name('petani.index');
Route::get('/petani/create', [PetaniController::class, 'create'])->name('petani.create');
Route::post('/petani/store', [PetaniController::class, 'store'])->name('petani.store');
Route::get('/petani/destroy/{id}', [PetaniController::class, 'destroy'])->name('petani.destroy');
Route::get('/petani/edit/{id}', [PetaniController::class, 'edit'])->name('petani.edit');
Route::get('/petani/show/{id}', [PetaniController::class, 'show'])->name('petani.show');
Route::post('/petani/update/{id}', [PetaniController::class, 'update'])->name('petani.update');


// lahans
Route::get('/lahan/index', [LahanController::class, 'index'])->name('lahan.index');
Route::get('/lahan/create', [LahanController::class, 'create'])->name('lahan.create');
Route::post('/lahan/store', [LahanController::class, 'store'])->name('lahan.store');

// Detail Lahans
Route::get('/detail_lahan/index', [DetailLahanController::class, 'index'])->name('detail_lahan.index');
Route::get('/detail_lahan/create/{id}', [DetailLahanController::class, 'create'])->name('detail_lahan.create');
Route::post('/detail_lahan/store', [DetailLahanController::class, 'store'])->name('detail_lahan.store');


Route::get('/auth/register', [AuthController::class, 'register'])->name('register');
Route::post('/auth/registerproses', [AuthController::class, 'registerproses'])->name('registerproses');
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/loginproses', [AuthController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
