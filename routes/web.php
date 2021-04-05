<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ChaptersController;
use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\Auth\LoginController;

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

    // Route::get('/', function () {
    //     return Inertia::render('Welcome', [
    //         'canLogin' => Route::has('login'),
    //         'canRegister' => Route::has('register'),
    //         'laravelVersion' => Application::VERSION,
    //         'phpVersion' => PHP_VERSION,
    //     ]);
    // });

    Route::get('/', function() {
        return Inertia::render('Welcome');
    });

    Route::post('logout', [LoginController::class, 'logout'])
    ->name('logout');

// Dashboard
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

// Episodes
    Route::get('/episodes', [EpisodesController::class, 'index'])
        ->name('episodes');

    Route::get('/list/episodes', [EpisodesController::class, 'latestEpisode']);
        
    Route::get('/episodes/create', [EpisodesController::class, 'create'])
        ->name('episode-create');

    Route::post('/episodes/store', [EpisodesController::class, 'store'])
        ->name('episode-store');

    Route::get('/episodes/{id}/listen', [EpisodesController::class, 'show'])
        ->name('episode-listen');




// Chapters
    Route::get('/chapters', [ChaptersController::class, 'index'])
        ->name('chapters');

    Route::get('/chapters/create', [ChaptersController::class, 'create'])
        ->name('chapter-create');

    Route::get('/chapters/{id}/', [ChaptersController::class, 'show'])
        ->name('chapter-view');

    Route::post('/chapters/store', [ChaptersController::class, 'store'])
        ->name('chapter-store');

    Route::get('/chapters/{id}/edit', [ChaptersController::class, 'edit'])
        ->name('chapter-edit');

    Route::put('/chapter/{id}', [ChaptersController::class, 'update'])
        ->name('chapter-update');




// Players
    Route::get('/apple-player', [PlayerController::class, 'applePlayer'])
        ->name('apple-player');
        
    Route::get('/spotify-player', [PlayerController::class, 'spotifyPlayer'])
        ->name('spotify-player');