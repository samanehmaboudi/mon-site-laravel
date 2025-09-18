<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home']);
Route::get('/a-propos', [SiteController::class, 'aPropos']);
Route::get('/projets', [SiteController::class, 'projets']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::post('/contact', [SiteController::class, 'storeContact']);
