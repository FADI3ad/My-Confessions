<?php

use App\Http\Controllers\ConfessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;
use Psy\Output\Theme;

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



// ===============================
// Public Route - Home Page
// This is the main landing page of the website.
// ===============================
Route::get('/', [ThemeController::class, 'index'])->name('home');




// ===============================
// Theme-related Routes
// These routes handle theme-specific pages such as birthdays and latecomers.
// All routes are prefixed with '/theme' and named with 'theme.'
// ===============================
Route::prefix('theme')->name('theme.')->controller(ThemeController::class)->group(function () {
    Route::get('birthdays', 'birthdays')->name('birthdays');    // /theme/birthdays
    Route::get('latecomers', 'latecomers')->name('latecomers');  // /theme/latecomers
});




// Route::name('confession.')->group(function () {


//     Route::get('allsereved', [ThemeController::class, 'allsereved'])->name('served.index');
//     Route::get('add-new-served', [ThemeController::class, 'addnewserved'])->name('served.create');
// });


// Route::post('/served/store', [ConfessionController::class, 'store'])->name('served.store');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';













