<?php

use App\Http\Controllers\backoffice\BlogController;
use App\Http\Controllers\Kitchen\ClassicKitchenController;
use App\Http\Controllers\Kitchen\ModernKitchenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backoffice\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/cocina/clasica', [ClassicKitchenController::class, 'index'])->name('classic_kitchen.index');

Route::get('/cocina/moderna', [ModernKitchenController::class, 'index'])->name('modern_kitchen.index');

Route::get('/paginas', [PagesController::class, 'index'])->name('pages.index');

Route::get('/blog/views', [BlogController::class, 'index'])->name('blog.index');
