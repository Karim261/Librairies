<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\EntreeStockController;


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


Route::resource('livres', 'LivreController');

Route::get('/livres', [LivreController::class, 'index'])->name('livres.index');
Route::get('/livres/create', [LivreController::class, 'create'])->name('livres.create');
Route::post('/livres', [LivreController::class, 'store'])->name('livres.store');
// Route::get('/livres/{livre}', [LivreController::class, 'show'])->name('livres.show');
Route::get('/livres/{livre}/edit', [LivreController::class, 'edit'])->name('livres.edit');
Route::put('/livres/{livre}', [LivreController::class, 'update'])->name('livres.update');
Route::delete('/livres/{livre}', [LivreController::class, 'destroy'])->name('livres.destroy');



Route::resource('entree_stocks', 'EntreeStockController');

Route::get('/entree_stocks', [EntreeStockController::class, 'index'])->name('entree_stocks.index');
Route::get('/entree_stocks/create', [EntreeStockController::class, 'create'])->name('entree_stocks.create');
Route::post('/entree_stocks', [EntreeStockController::class, 'store'])->name('entree_stocks.store');
// Route::get('/livres/{livre}', [LivreController::class, 'show'])->name('livres.show');
Route::get('/entree_stocks/{entree_stock}/edit', [EntreeStockController::class, 'edit'])->name('entree_stocks.edit');
Route::put('/entree_stocks/{entree_stock}', [EntreeStockController::class, 'update'])->name('entree_stocks.update');
Route::delete('/entree_stocks/{entree_stock}', [EntreeStockController::class, 'destroy'])->name('entree_stocks.destroy');




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





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
