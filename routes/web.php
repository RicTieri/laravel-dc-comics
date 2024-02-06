<?php

use App\Http\Controllers\Guest\ComicPageController as GuestComicPageController;
use App\Http\Controllers\Admin\ComicPageController as AdminComicPageController;
use Illuminate\Support\Facades\Route;

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

// Guest route
Route::get('/', [GuestComicPageController::class, 'index'])->name('pages.home');
Route::get('/{comic}', [GuestComicPageController::class, 'show'])->name('pages.comicShow');

// Admin route
Route::get('/', [AdminComicPageController::class, 'index'])->name('pages.home');
Route::get('/create', [AdminComicPageController::class, 'create'])->name('pages.comicCreate');
Route::get('/{comic}', [AdminComicPageController::class, 'show'])->name('pages.comicShow');
Route::post('/', [AdminComicPageController::class, 'store'])->name('pages.comicStore');
