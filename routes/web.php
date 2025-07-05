<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('theme.')->group(function () {
    Route::get('index', [ThemeController::class, 'index'])->name('index');
    Route::get('birthdays', [ThemeController::class, 'birthdays'])->name('birthdays');
    Route::get('allsereved', [ThemeController::class, 'allsereved'])->name('served.index');
    Route::get('add-new-served', [ThemeController::class, 'addnewserved'])->name('served.create');
    Route::get('latecomers', [ThemeController::class, 'latecomers'])->name('latecomers');
});



Route::post('/served/store', [ThemeController::class, 'test'])->name('served.store');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
