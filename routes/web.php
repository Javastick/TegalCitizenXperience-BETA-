<?php

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
Route::get('/keder', [KederController::class, 'index']);
Route::get('/keder/kategori', [KederController::class, 'kategori']);
Route::get('/keder/p', function(){
    return view('keder.prev', [
        'saran' => "Saya merasa keberatan dengan situasi ini, Pak. Setiap kali saya menghentikan motor di kota, saya diminta membayar parkir. Jika tukang parkirnya resmi, itu masih dapat dimengerti, tetapi masalahnya, karcisnya terlihat seperti dibuat secara mandiri. Selain itu, tarif parkirnya juga terlalu mahal, terutama di alun-alun yang meminta tarif sebesar 5 ribu rupiah. Apakah ada langkah yang bisa diambil untuk mengatasi hal ini?"
    ]);
});
Route::get('/keder/thx', function(){
    return view('keder.thx');
});
Route::get('/game', function(){
    return view('game.index');
});

