<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoireeController;
use App\Http\Controllers\ParticipationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;
use App\Http\Controllers\ErrorController;

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



// Routes d'authentification
require __DIR__ . '/auth.php';

// Routes accessibles uniquement aux utilisateurs authentifiés
Route::middleware('auth')->group(function () {

    Route::group(['middleware' => 'checkRole:admin'], function () {
        Route::get('/admin', [ArticleController::class, 'index'])->name('articles.index');
    });

    Route::group(['middleware' => 'checkRole:user'], function () {
        Route::get('/soirees/create', [SoireeController::class, 'create'])->name('soirees.create');
        Route::post('/participations', [ParticipationController::class, 'store'])->name('participations.store');
        Route::delete('/participations/{participation}', [ParticipationController::class, 'destroy'])->name('participations.destroy');
        Route::delete('/soirees/{soiree}', [SoireeController::class, 'destroy'])->name('soirees.destroy');
        Route::get('/soirees/{soiree}/edit', [SoireeController::class, 'edit'])->name('soirees.edit');
        Route::put('/soirees/{soiree}', [SoireeController::class, 'update'])->name('soirees.update');
        Route::get('/mes-soirees', [SoireeController::class, 'userSoirees'])->name('soirees.user');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Routes accessibles aux utilisateurs non connectés
Route::get('/', [SoireeController::class, 'displayFiveSoirees'])->name('userDashboard');
Route::get('/soirees', [SoireeController::class, 'index'])->name('soirees.index');
Route::get('/soirees/search', [SoireeController::class, 'search'])->name('soirees.search');
Route::post('/soirees', [SoireeController::class, 'store'])->name('soirees.store');
Route::get('/soirees/{soiree}', [SoireeController::class, 'show'])->name('soirees.show');
Route::fallback(function () {
    return view('404');
});
