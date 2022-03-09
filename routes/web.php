<?php

use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/products', [ProductController::class, 'index'])->middleware(['auth', 'verified'])->name('index');

// Route::get('/product/{id}', [ProductController::class, 'edit'])->middleware(['auth', 'verified'])->name('products.edit');
// Route::put('/product/{id}', [ProductController::class, 'update'])->middleware(['auth', 'verified'])->name('products.update');

Route::resource('products', ProductController::class);


require __DIR__.'/auth.php';
