<?php

use App\Http\Controllers\{DashboardController, ReportController};
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {
        Route::get('', [DashboardController::class, 'index'])
            ->name('index');

        Route::prefix('report')
            ->name('report.')
            ->group(function () {
                Route::get('', [ReportController::class, 'index'])
                    ->name('index');
                Route::get('create', [ReportController::class, 'create'])
                    ->name('create');
                Route::get('edit', [ReportController::class, 'edit'])
                    ->name('edit');
            });
    });
