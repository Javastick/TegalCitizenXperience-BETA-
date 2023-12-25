@extends('layout')

@section('content')
    <div class="container shadow rounded d-flex flex-column justify-content-center align-items-center" style="height: 80vh">
        <h3 class="mb-3 mt-5">Tinjauan Pengaduane Sampeyan</h3>
        <div class="form-floating w-50 m-2">
            <textarea class="form-control" placeholder="Leave a comment here" id="message" style="height: 200px">{{ $saran }}</textarea>
            <label for="floatingTextarea2">Pengaduan:</label>
        </div>
        <div class="">
            Kategori: <b>Layanan Publik</b>
        </div>
        <a href="/keder/thx" class="btn btn-primary m-3">Kirim</a>


    </div>
@endsection
