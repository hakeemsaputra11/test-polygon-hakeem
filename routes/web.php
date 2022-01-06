<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
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

Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('/', function () {
    return redirect()->route('dashboards.index');
})->name('home');

Route::resource('dashboards', DashboardController::class);
Route::resource('pemasukans', PemasukanController::class);
Route::resource('pengeluarans', PengeluaranController::class);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('laporans', LaporanController::class);
    Route::get('/approvepemasukan/{id}', [LaporanController::class, 'approvePemasukan']);
    Route::get('/approvepengeluaran/{id}', [LaporanController::class, 'approvePengeluaran']);

    Route::get('/showeditpemasukan/{id}', [LaporanController::class, 'showEditPemasukan']);
    Route::post('/updatepemasukan/{id}', [LaporanController::class, 'updatePemasukan']);
    Route::delete('/deletepemasukan/{id}', [LaporanController::class, 'deletePemasukan']);

    Route::get('/showeditpengeluaran/{id}', [LaporanController::class, 'showEditPengeluaran']);
    Route::post('/updatepengeluaran/{id}', [LaporanController::class, 'updatePengeluaran']);
    Route::delete('/deletepengeluaran/{id}', [LaporanController::class, 'deletePengeluaran']);

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
