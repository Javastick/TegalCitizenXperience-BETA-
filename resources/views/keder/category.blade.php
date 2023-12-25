@extends('layout')

@section('content')
    <div class="container shadow rounded d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="row w-100 d-flex justify-content-center text-center">
            <p>Berdasarkan laporane sampeyan miki, aku tah nyaranane sampeyan milih kategori <b>Layanan Publik</b></p>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Klik ngene terus pilih kategorine
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/keder/p">Sosial dan Ketenagakerjaan</a></li>
                    <li><a class="dropdown-item" href="/keder/p">Lalu Lintas</a></li>
                    <li><a class="dropdown-item" href="/keder/p">Layanan Publik</a></li>
                    <li><a class="dropdown-item" href="/keder/p">Infrastruktur</a></li>
                    <li><a class="dropdown-item" href="/keder/p">Lingkungan</a></li>
                </ul>
            </div>
        </div>

    </div>
@endsection
