<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::middleware('guest')->group(function () {
    Route::get('/', function () { return redirect('login'); });
    Route::get('/register', [UserController::class, 'register']);
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'validateLogin'])->name('validateLogin');
});

require __DIR__.'/auth.php';

// Route::middleware('auth')->group(function () {
    Route::get('/beliMobil1', function(){ return Inertia::render('BeliMobil1'); });
    Route::get('/beliMobil2', function(){ return Inertia::render('BeliMobil2'); });
    Route::get('/beliMobil3', function(){ return Inertia::render('BeliMobil3'); });
    Route::get('/dashboard', function(){ return Inertia::render('Dashboard'); });
    Route::get('/memprediksi', function(){ return Inertia::render('MemprediksiPengeluaran'); });
// });


