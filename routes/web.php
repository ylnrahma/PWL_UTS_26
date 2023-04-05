<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;


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
Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DasboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/search', [PosyanduController::class, 'search'])->name('search');

Route::resource('posyandus', PosyanduController::class);

Route::get('/home', function () {
    $user = Auth::user();
        return view('layouts.app',['user'=>$user]);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
