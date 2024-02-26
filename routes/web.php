<?php

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

Route::get('/', [App\Http\Controllers\Web\App\HomeController::class, 'index'])->name('home');

Route::get('/produk', [App\Http\Controllers\Web\App\ProductController::class, 'index'])->name('product.index');
Route::get('/galeri', [App\Http\Controllers\Web\App\GalleryController::class, 'index'])->name('gallery.index');
Route::get('/artikel', [App\Http\Controllers\Web\App\ArticleController::class, 'index'])->name('article.index');
Route::get('/forum', [App\Http\Controllers\Web\App\ForumController::class, 'index'])->name('forum.index');
