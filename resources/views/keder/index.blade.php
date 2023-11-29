@extends('layout')

@section('content')
    <div class="container shadow rounded d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="row w-100 d-flex justify-content-center">
            <div class="col-5">
                <form>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="message" style="height: 200px" name="s"></textarea>
                        <label for="floatingTextarea2">Ceritakna Keluhane Sampeyan Ngene</label>
                    </div>
                    <button type="submit" class="btn btn-primary m-2">Saran</button>
                </form>
            </div>
            <div class="col-5">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="message" style="height: 200px">@if (isset($_GET["s"])){{ $saran }}@endif
                    </textarea>
                    <label for="floatingTextarea2">Angger jare nyong tah kaya kie bae</label>
                </div>
                @if (isset($_GET["s"]))
                    <a href="/keder/kategori" class="btn btn-primary m-2">Kirim</a>
                @endif
                
            </div>
        </div>

    </div>
@endsection
