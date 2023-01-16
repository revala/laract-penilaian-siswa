<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\GuruController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('/guru')->group(function(){
    Route::get('/index', [GuruController::class, 'index']);
    Route::get('/create', [GuruController::class, 'create']);
    Route::post('/store', [GuruController::class, 'store']);
    Route::get('/edit/{guru}', [GuruController::class, 'edit']);
    Route::post('/update/{guru}', [GuruController::class, 'update']);
    Route::get('/destroy/{guru}', [GuruController::class, 'destroy']);
});

Route::prefix('/jurusan')->group(function(){
    Route::get('/index', [JurusanController::class, 'index']);
    Route::get('/create', [JurusanController::class, 'create']);
    Route::post('/store', [JurusanController::class, 'store']);
    Route::get('/edit/{jurusan}', [JurusanController::class, 'edit']);
    Route::post('/update/{jurusan}', [JurusanController::class, 'update']);
    Route::get('/destroy/{jurusan}', [JurusanController::class, 'destroy']);
});


Route::get('/home', [IndexController::class, 'home']);

Route::prefix('login', function(){
    Route::post('/admin', [IndexController::class, 'loginAdmin']);
    Route::post('/siswa', [IndexController::class, 'loginSiswa']);
    Route::post('/guru', [IndexController::class, 'loginGuru']);
});

Route::get('/logout', [IndexController::class, 'logout']);

require __DIR__.'/auth.php';
