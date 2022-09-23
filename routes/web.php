<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

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
    
    Log::debug("The index page /, returns the welcome blade file. Named as 'home' Route");
    Log:info("Returning the welcome blade resource file.");
    return view('welcome');
})->name('home');

/* Ticket */
Route::get('/tickets', function(){
    Log::info("Tickets page visited.");
    return view('tickets');
})->name('tickets');

Route::get('/settings', function(){
    Log::info("Settings page visited.");
    return view('settings');
})->name('settings');

Route::get('/system', function(){
    Log::info("System page visited.");
    return view('system');
})->name('system');
