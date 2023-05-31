<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\Logout;

// ROUTE POUR LA VUE INDEX
Route::get('/', [IndexController::class, 'index'])->name('vue_index');

// ROUTE POUR LA VUE CONNEXION
Route::get('/connexion', [AuthController::class, 'index'])->name('vue_connexion');
Route::post('/connexion', [AuthController::class, 'store'])->name('store_connexion');

// ROUTE POUR LA VUE COMPTE
Route::get('/compte', [CompteController::class, 'index'])->name('vue_conpte')->middleware('auth.personnel'); // NE PEUX PAS ACCEDER SI PAS CONNECTER

// ROUTE POUR LA VUE UPDATECOMPTE
Route::get('/update', [UpdateController::class, 'index'])->name('vue_update')->middleware('auth.personnel'); // NE PEUX PAS ACCEDER SI PAS CONNECTER
Route::POST('/update', [UpdateController::class, 'update'])->name('vue_update-form')->middleware('auth.personnel'); // NE PEUX PAS ACCEDER SI PAS CONNECTER


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

