<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', [StudentController::class, 'home']);
Route::get('home', [StudentController::class, 'home']);
Route::get('about', [StudentController::class, 'about']);

Route::group(["prefix" => "/student"], function () {
    Route::get('/all', [StudentController::class, 'index'])->name('student.all');
    Route::get("/detail/{student}", [StudentController::class, 'show']);
    Route::get("/create", [StudentController::class, 'create']);
    Route::post('/store', [StudentController::class, 'store']);
    Route::get('/remove/{id}', [StudentController::class, 'remove'])->name('student.remove');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::patch('/update/{id}', [StudentController::class, 'update'])->name('student.update');
});

Route::group(["prefix" => "/kelas"], function () {
    Route::get('/all', [KelasController::class, 'index'])->name('kelas.all');
    Route::get("/create", [KelasController::class, 'create']);
    Route::post('/store', [KelasController::class, 'store']);
    Route::get('/remove/{id}', [KelasController::class, 'remove'])->name('kelas.remove');
    Route::get('/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
    Route::patch('/update/{id}', [KelasController::class, 'update'])->name('kelas.update');
});

Route::group(["prefix" => "/auth"], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::group(["prefix" => "/dashboard"], function () {
    Route::get('/main', [DashboardController::class, 'index'])->middleware(['auth']);
    Route::get('/student', [DashboardController::class, 'student'])->middleware(['auth']);
    Route::get('/kelas', [DashboardController::class, 'kelas'])->middleware(['auth']);
});
