<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DrawingContentController;

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


// トップページ
Route::get('/', [IndexController::class, 'index'])->name('index');
// ドローイングコンテンツ
Route::get('/drawing', [DrawingContentController::class, 'drawing'])->name('drawing');

// 実装予定ルート
Route::get('/sorry', fn() => view('imp-plan'))->name('impPlan');