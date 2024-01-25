@extends('layouts.app')

@section('content')
    <div class="container contact-form row d-flex justify-content-center align-items-center">
        {{-- <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
        </div> --}}
        <form method="post" enctype="multipart/form-data" action="{{route('complaint.store')}}">
            @csrf
            <div class="row m-2 d-flex justify-content-center">
                <h3 class="mb-4 text-center">Buat Pengaduan</h3>
                <div class="col-md-6">
                    <div class="form-group m-2">
                        <input type="text" name="title" class="form-control" placeholder="Judul *" value="" required/>
                    </div>
                    <div class="form-group m-2">
                        <input type="file" name="image" class="form-control" placeholder="Your Email *"
                            value="" />
                    </div>
                    <div class="form-group m-2">
                        <label for="option1" class="me-3">Kategori:</label>
                        <div class="category">
                            <input type="radio" class="btn-check" name="category" id="option5" autocomplete="off"
                                value="lalu-lintas" checked>
                            <label class="btn" for="option5">Lalu Lintas</label>

                            <input type="radio" class="btn-check" name="category" id="option6" autocomplete="off"
                                value="lingkungan">
                            <label class="btn" for="option6">Lingkungan</label>

                            <input type="radio" class="btn-check" name="category" id="option7" autocomplete="off"
                                value="infrastruktur">
                            <label class="btn" for="option7">Infrastruktur</label>

                            <input type="radio" class="btn-check" name="category" id="option8" autocomplete="off"
                                value="sosial">
                            <label class="btn" for="option8">Sosial</label>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="content" class="form-control" placeholder="Ceritakan keluhan anda *" maxlength="1500"
                            style="width: 100%; height: 150px;" required></textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control mt-2" type="text" name="location" id="" required maxlength="255" placeholder="Lokasi *">
                    </div>
                </div>
                <div class="form-group mt-4 d-flex justify-content-center">
                    <input type="submit" name="btnSubmit" class="btn btn-primary" value="Kirim" />
                </div>
            </div>
        </form>
    </div>
@endsection
