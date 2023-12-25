<?php

use App\Http\Controllers\GptController;
use App\Http\Middleware\VerifyCsrfToken;
use Orhanerday\OpenAi\OpenAi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KederController;
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

Route::get('/', [InterfaceController::class, 'index']);

Route::post('/chat', [GptController::class, 'chat'])->withoutMiddleware([VerifyCsrfToken::class]);


