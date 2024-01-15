<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('index-1');
});

Route::get('/Allinfo', function () {
    return view('admin.tables-basic');
});

Route::get('/Dashboard', function () {
    return view('');
});

// Jet stream route
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.Dashboard');
    })->name('dashboard');
});

// jet stream route end

// User datafetching admintable using admin controller 
Route::get('/AllPatient',[AdminController::class,'UserRecord']);




