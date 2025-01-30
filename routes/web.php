<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// トップ
Route::view('/', 'top')->name('top');

// プロジェクト
Route::resource('projects', ProjectController::class);
