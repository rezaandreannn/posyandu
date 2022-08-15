<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VitaminbalitaController;
use App\Http\Controllers\ImunisasibalitaController;
use App\Http\Controllers\PenimbanganbalitaController;

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
    return view('frond.index');
});

Route::middleware('auth', 'ceklogin:admin')->group(function () {
    Route::Resource('role', 'App\Http\Controllers\RoleController');
    Route::Resource('user', 'App\Http\Controllers\UserController');
    Route::get('setting', [SettingController::class, 'edit'])->name('setting.edit');
    Route::patch('setting/{setting}', [SettingController::class, 'update'])->name('setting.update');
});

Route::middleware('auth', 'ceklogin:user,admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    // balita
    Route::Resource('balita', 'App\Http\Controllers\BalitaController')->except(['destroy', 'edit', 'update']);
    Route::get('balita/{balita}/edit', [BalitaController::class, 'edit'])->name('balita.edit');
    Route::patch('balita/{balita}', [BalitaController::class, 'update'])->name('balita.update');
    Route::delete('balita/{balita}', [BalitaController::class, 'destroy'])->name('balita.destroy');
    Route::get('imunisasi/balita/{id}', [BalitaController::class, 'imunisasiBalita'])->name('balita.imunisasi');
    Route::get('vitamin/balita/{id}', [BalitaController::class, 'vitaminBalita'])->name('balita.vitamin');
    Route::get('penimbangan/balita/{id}', [BalitaController::class, 'penimbanganBalita'])->name('balita.penimbangan');

    // imunisasi balita
    Route::Resource('imunisasibalita', 'App\Http\Controllers\ImunisasibalitaController')->except(['destroy', 'edit', 'update']);
    Route::get('imunisasibalita/{imunisasibalita}/edit', [ImunisasibalitaController::class, 'edit'])->name('imunisasibalita.edit');
    Route::patch('imunisasibalita/{imunisasibalita}', [ImunisasibalitaController::class, 'update'])->name('imunisasibalita.update');
    Route::delete('imunisasibalita/{imunisasibalita}', [ImunisasibalitaController::class, 'destroy'])->name('imunisasibalita.destroy');
    Route::get('antri/balita/imunisasi', [ImunisasibalitaController::class, 'antri'])->name('imunisasibalita.antri');

    // vitamin balita
    Route::Resource('vitaminbalita', 'App\Http\Controllers\VitaminbalitaController')->except(['destroy', 'edit', 'update']);
    Route::get('antri/balita/vitamin', [VitaminbalitaController::class, 'antri'])->name('vitaminbalita.antri');
    Route::get('vitaminbalita/{vitaminbalita}/edit', [VitaminbalitaController::class, 'edit'])->name('vitaminbalita.edit');
    Route::patch('vitaminbalita/{vitaminbalita}', [VitaminbalitaController::class, 'update'])->name('vitaminbalita.update');
    Route::delete('vitaminbalita/{vitaminbalita}', [VitaminbalitaController::class, 'destroy'])->name('vitaminbalita.destroy');

    // penimbangan balita
    Route::Resource('penimbanganbalita', 'App\Http\Controllers\penimbanganbalitaController')->except(['destroy', 'edit', 'update']);
    Route::get('antri/balita/penimbangan', [PenimbanganbalitaController::class, 'antri'])->name('penimbanganbalita.antri');
    Route::get('penimbanganbalita/{penimbanganbalita}/edit', [PenimbanganbalitaController::class, 'edit'])->name('penimbanganbalita.edit');
    Route::patch('penimbanganbalita/{penimbanganbalita}', [PenimbanganbalitaController::class, 'update'])->name('penimbanganbalita.update');
    Route::delete('penimbanganbalita/{penimbanganbalita}', [PenimbanganbalitaController::class, 'destroy'])->name('penimbanganbalita.destroy');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
