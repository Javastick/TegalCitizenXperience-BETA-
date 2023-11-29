<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class KederController extends Controller
{
    public function index(){
        return view('keder.index', [
            'saran' => "Saya merasa keberatan dengan situasi ini, Pak. Setiap kali saya menghentikan motor di kota, saya diminta membayar parkir. Jika tukang parkirnya resmi, itu masih dapat dimengerti, tetapi masalahnya, karcisnya terlihat seperti dibuat secara mandiri. Selain itu, tarif parkirnya juga terlalu mahal, terutama di alun-alun yang meminta tarif sebesar 5 ribu rupiah. Apakah ada langkah yang bisa diambil untuk mengatasi hal ini?"
        ]);
    }
    public function kategori(){
        return view('keder.kat');
    }
}
