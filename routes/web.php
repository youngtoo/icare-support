<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Settings;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;

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

Route::get('/', [DashboardController::class,'index'])->name('home')->middleware('auth');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout']);

/* Ticket */
Route::get('/tickets', function(){
    Log::info("Tickets page visited.");
    return view('tickets');
})->name('tickets')->middleware('auth');

Route::get('/settings', [Settings::class, 'show'])->name('settings')->middleware('auth');

Route::get('/system', function(){
    Log::info("System page visited.");
    return view('system');
})->name('system')->middleware('auth');

Route::get('/reports', function(){
    Log::info("Reports page visited.");
    return view('reports');
})->name('reports')->middleware('auth');


/**
 * Ticket Route
 */

Route::prefix('ticket')->middleware('auth')->group(function () {

    Route::name('ticket.')->group(function(){
        Route::get('/new', function () {
            // Matches The "/ticket/new" URL
            return view('tickets.new-ticket');
        })->name('new');
    });
    
});

Route::prefix('settings')->middleware('auth')->group(function () {

    Route::name('settings.')->group(function(){
        Route::get('/department', [DepartmentController::class, 'index'])->name('department');
    });
    
});