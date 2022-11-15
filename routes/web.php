<?php

use App\Http\Controllers\{AuthController, PetaniController, LahanController, LandingController,
                             DetailLahanController, BeritaController, ReponseController,
                            DesaController, PoktanController};
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
Route::post('/reponse/store', [ReponseController::class, 'store'])->name('reponse.store');
Route::group(['middleware' => ['auth', 'hakakses:pegawai']], function(){
    // petani
    Route::get('/petani/index', [PetaniController::class, 'index'])->name('petani.index');
    Route::get('/petani/create', [PetaniController::class, 'create'])->name('petani.create');
    Route::post('/petani/store', [PetaniController::class, 'store'])->name('petani.store');
    Route::get('/petani/destroy/{id}', [PetaniController::class, 'destroy'])->name('petani.destroy');
    Route::get('/petani/edit/{id}', [PetaniController::class, 'edit'])->name('petani.edit');
    Route::get('/petani/show/{id}', [PetaniController::class, 'show'])->name('petani.show');
    Route::post('/petani/update/{id}', [PetaniController::class, 'update'])->name('petani.update');

    // Berita
    Route::get('/berita/index', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');

    // Respon
    Route::get('/reponse/index', [ReponseController::class, 'index'])->name('reponse.index');

    // desa
    Route::get('/desa/index', [DesaController::class, 'index'])->name('desa.index');
    Route::get('/desa/edit/{id}', [DesaController::class, 'edit'])->name('desa.edit');
    Route::get('/desa/destroy/{id}', [DesaController::class, 'destroy'])->name('desa.destroy');
    Route::post('/desa/store', [DesaController::class, 'store'])->name('desa.store');
    Route::post('/desa/update/{id}', [DesaController::class, 'update'])->name('desa.update');

    // desa
    Route::get('/poktan/index', [PoktanController::class, 'index'])->name('poktan.index');
    Route::get('/poktan/edit/{id}', [PoktanController::class, 'edit'])->name('poktan.edit');
    Route::get('/poktan/destroy/{id}', [PoktanController::class, 'destroy'])->name('poktan.destroy');
    Route::post('/poktan/store', [PoktanController::class, 'store'])->name('poktan.store');
    Route::post('/poktan/update/{id}', [PoktanController::class, 'update'])->name('poktan.update');

});

Route::group(['middleware' => ['auth', 'hakakses:petani']], function(){
    // lahans
    Route::get('/lahan/index', [LahanController::class, 'index'])->name('lahan.index');
    Route::get('/lahan/edit/{id}', [LahanController::class, 'edit'])->name('lahan.edit');
    Route::get('/lahan/create', [LahanController::class, 'create'])->name('lahan.create');
    Route::post('/lahan/store', [LahanController::class, 'store'])->name('lahan.store');

    // Detail Lahans
    Route::get('/detail_lahan/index', [DetailLahanController::class, 'index'])->name('detail_lahan.index');
    Route::get('/detail_lahan/create/{id}', [DetailLahanController::class, 'create'])->name('detail_lahan.create');
    Route::post('/detail_lahan/store/{id}', [DetailLahanController::class, 'store'])->name('detail_lahan.store');
});

Route::group(['middleware' => ['auth', 'hakakses:petani,pegawai']], function(){
    Route::get('/dashboard', [LandingController::class, 'dashboard'])->name('dashboard');
});







Route::get('/auth/register', [AuthController::class, 'register'])->name('register');
Route::post('/auth/registerproses', [AuthController::class, 'registerproses'])->name('registerproses');
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/loginproses', [AuthController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
