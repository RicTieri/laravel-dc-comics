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
Route::get('/', [GuestComicPageController::class, 'index'])->name('guest.comic.index');
Route::post('/', [GuestComicPageController::class, 'store'])->name('guest.comic.store');
Route::get('/comic/create', [GuestComicPageController::class, 'create'])->name('guest.comic.create');
Route::get('/comic/{comic}', [GuestComicPageController::class, 'show'])->name('guest.comic.show');

// Admin route
Route::get('/admin', [AdminComicPageController::class, 'index'])->name('admin.comic.index');
Route::post('/admin', [AdminComicPageController::class, 'store'])->name('admin.comic.store');
Route::get('/admin/create', [AdminComicPageController::class, 'create'])->name('admin.comic.create');
Route::get('/admin/{comic}', [AdminComicPageController::class, 'show'])->name('admin.comic.show');
Route::get('/admin/{comic}/edit', [AdminComicPageController::class, 'show'])->name('admin.comic.edit');
Route::put('/admin/{comic}', [AdminComicPageController::class, 'update'])->name('admin.comic.update');
