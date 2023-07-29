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

Route::get('/', function () {
    return Inertia::render('Dashboard');
});
Route::get('/beliRumah1', function () {
    return Inertia::render('BeliRumah1');
});
Route::get('/beliRumah2', function () {
    return Inertia::render('BeliRumah2');
});
Route::get('/beliRumah3', function () {
    return Inertia::render('BeliRumah3');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/beliMobil1', function(){
    return Inertia::render('BeliMobil1');
});

Route::get('/beliMobil2', function(){
    return Inertia::render('BeliMobil2');
});

Route::get('/beliMobil3', function(){
    return Inertia::render('BeliMobil3');
});
