
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\OperatorController;
use App\Models\JurusanModel;
use App\Models\MahasiswaModel;
use App\Models\OperatorModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SesiController;


// Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class,'index'])->name('login');
    Route::post('/', [SesiController::class,'login']);
// });

// Route::get('/dashboard', function (){
//     return redirect('/admin');

// });

// route::post('/admin', [AdminController::class, 'dashboard']);


route::get('/logout', [SesiController::class, 'logout']);

// Bagian Home
// Route::get('/', [HomeController::class, 'index']);
Route::middleware(['auth','user_akses:operator'])->group(function(){
Route::get('/dashboard  ', [HomeController::class, 'Dashboard']);

// Bagian Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/mahasiswa_tambah', [MahasiswaController::class, 'tambah']);
Route::post('/mahasiswa_tambah', [MahasiswaController::class, 'tambah_action']);

Route::get('/mahasiswa/{id}/hapus', [MahasiswaController::class, 'hapus']);

Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit_action']);

// Bagian Jurusan
Route::get('/jurusan', [JurusanController::class, 'index']);

Route::get('/jurusan_tambah', [JurusanController::class, 'tambah']);
Route::post('/jurusan_tambah', [JurusanController::class, 'tambah_action']);

Route::get('/jurusan/{id}/hapus', [JurusanController::class, 'hapus']);

Route::get('/jurusan/{id}/edit', [JurusanController::class, 'edit']);
Route::post('/jurusan/{id}/edit', [JurusanController::class, 'edit_action']);

// Bagian Operator
Route::get('/operator', [OperatorController::class, 'index']);

Route::get('/operator_tambah', [OperatorController::class, 'tambah']);
Route::post('/operator_tambah', [OperatorController::class, 'tambah_action']);

Route::get('/operator/{id}/hapus', [OperatorController::class, 'hapus']);

Route::get('/operator/{id}/edit', [OperatorController::class, 'edit']);
Route::post('/operator/{id}/edit', [OperatorController::class, 'edit_action']);

Route::get('/beranda', [BerandaController::class, 'index']);
Route::post('/beranda', [BerandaController::class, 'beranda']);

});
