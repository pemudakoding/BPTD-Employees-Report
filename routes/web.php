<?php

use App\Http\Controllers\{DashboardController, ReportController};
use Illuminate\Support\Facades\Route;


use App\Policies\ActivityReportPolicy;

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

        Route::middleware([
            'can:viewAny,App\Models\ActivityReport',
        ])
            ->prefix('report')
            ->name('report.')
            ->group(function () {
                Route::get('', [ReportController::class, 'index'])
                    ->name('index');

                Route::middleware(['can:create,App\Models\ActivityReport'])->group(function () {
                    Route::get('create', [ReportController::class, 'create'])
                        ->name('create');

                    Route::post('', [ReportController::class, 'store'])
                        ->name('store');
                });
                Route::middleware(['can:update,activityReport'])->group(function () {
                    Route::get('edit/{activityReport}', [ReportController::class, 'edit'])
                        ->name('edit');
                    Route::put('update/{activityReport}', [ReportController::class, 'update'])
                        ->name('update');
                });
            });
    });
