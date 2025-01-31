<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PumpController;
use App\Http\Controllers\RouteController;
use App\Models\Pump;
use Illuminate\Support\Facades\Route;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


Route::get('/', [RouteController::class, 'landing']);
Route::get('/shop', [RouteController::class, 'shop']);
Route::get('/shop/{slug}', [RouteController::class, 'shopDetail']);
Route::post('/order', [RouteController::class, 'order']);
Route::get('/careers', [RouteController::class, 'careers']);
Route::post('/careers', [RouteController::class, 'careersCreate']);
Route::post('/plant-recommendation', [RouteController::class, 'plantRecommend']);
Route::post('/fertilizer-recommendation', [RouteController::class, 'fertilizerRecommend']);


Route::get('/shop-detail', function () {
    return view('pages.shop-detail');
});

Route::view('/plant-recommendation', 'pages.plant-recommendation');
Route::view('/fertilizer-recommendation', 'pages.fertilizer-recommendation');


Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contacts', function () {
    return view('pages.contact');
});

Route::post('/contact', [ContactController::class, 'store']);


Route::post('/newsletter', [NewsletterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
