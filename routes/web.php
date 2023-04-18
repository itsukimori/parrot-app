<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
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
// クレジットページ
Route::get('/credit', fn() => view('credit.credit'))->name('credit');
// ドローイングコンテンツ
Route::get('/drawing', [DrawingContentController::class, 'drawing'])->name('drawing');
// お問い合わせ
Route::get('/contact', fn() => view('contact.contact'))->name('contact.contact');

// 実装予定ルート
Route::get('/sorry', fn() => view('imp-plan'))->name('impPlan');