<?php

use Orhanerday\OpenAi\OpenAi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GptController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\KederController;
use App\Http\Controllers\ComplainController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\Game\GameController;
use App\Http\Controllers\InterfaceController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaints');
Route::get('/complaints/{id}/detail', [ComplaintController::class, 'detail'])->name('complaint.detail');

Route::middleware('auth')->group(function(){
    Route::get('/complaints/make', [ComplaintController::class, 'make'])->name('complaint.make');
    Route::post('/complaints/make', [ComplaintController::class, 'store'])->name('complaint.store');
    Route::post('/complaints/comment', [ComplaintController::class, 'comment'])->name('complaint.comment');

    Route::get('/game', [GameController::class, 'index'])->name('game');
    Route::post('/game/math', [GameController::class, 'math'])->name('game.math');
});


