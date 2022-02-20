<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InspectionNoteController;
use App\Http\Controllers\Admin\ObstetricHistoryController;

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


Route::get('/', [FrontendController::class, 'index'])->name('index');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () { 
    Route::name('dashboard.')->prefix('dashboard')->group(function () {
        Route::middleware(['admin'])->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');
            Route::resource('patient', PatientController::class);
            Route::resource('patient.obstetric', ObstetricHistoryController::class);
            Route::resource('patient.inspection', InspectionNoteController::class);
            Route::resource('inspection', InspectionNoteController::class);
            Route::resource('obstetric', ObstetricHistoryController::class);
            Route::resource('user', UserController::class)->only([
                'index', 'edit', 'update', 'destroy'
            ]);
        });
    });

});

