@extends('layouts.app')

@section('content')
    <div class="container timeline-body border rounded pt-2 my-4">
        <div class="timeline-header mt-3 mb-2">
            <span class="userimage">
                @if ($data['complaint']->getUser()->image !== null)
                    <img src="/storage/img/{{ $data['complaint']->getUser()->image }}" alt="" class="img-fluid">
                @else
                    <img src="/img/nopfp.jpeg" alt="" class="img-fluid">
                @endif
            </span>
            <div class="row d-flex justify-content-between">
                <div class="col-lg-6 col-sm-12">
                    <span class="username"><a href="">{{ $data['complaint']->getUser()->getName() }}</a></span>
                    <span class="pull-right text-muted">mengadukan
                        {{ $data['complaint']->getCategory() }}</span>
                </div>
                <div class="col-lg-3 col-sm-12">
                    {{ $data['complaint']->getCreatedAt() }}
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-3">
            <h3>{{ $data['complaint']->getTitle() }}</h3>
            <p>{{ $data['complaint']->getContent() }}</p>
            <div class="col-12 mb-2">
                Lokasi: {{ $data['complaint']->getLocation() }}
            </div>
            <div class="col-8 col-lg-8 col-sm-12">
                <img src="/storage/img/{{ $data['complaint']->getImage() }}" alt="" class="w-100 border">
            </div>
        </div>
        <div class="timeline-footer">
            @if (count($data['complaint']->getComments()) > 0)
                <h5 class="text-center my-2">Tanggapan ({{ count($data['complaint']->getComments()) }})</h5>
                @foreach ($data['complaint']->getComments() as $comment)
                    <div class="timeline-comment-box d-flex m-2">
                        <div class="user">
                            @if ($comment->getUser()->getImage() !== null)
                                <img src="/storage/img/{{ $comment->getUser()->getImage() }}">
                            @else
                                <img src="/img/nopfp.jpeg" alt="">
                            @endif
                        </div>
                        <div class="ms-2">
                            <span class="fw-bold">
                                {{ $comment->getUser()->getName() }}
                                <small class="fw-light">{{ $comment->created_at }}</small>
                            </span>
                            <p>{{ $comment->getContent() }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Belum ada tanggapan
                </p>
            @endif
        </div>
        @guest
        @else
            @if ($data['user']->getRole() === 'agency')
                <div class="timeline-comment-box m-2" id="{{$data['complaint']->getId()}}">
                    <div class="user">
                        @if ($data['user']->getImage() !== null)
                            <img src="/storage/img/{{ $data['user']->getImage() }}">
                        @else
                            <img src="/img/nopfp.jpeg" alt="">
                        @endif
                    </div>
                    <div class="input">
                        <form action="{{ route('complaint.comment') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control rounded-corner" placeholder="Beri tanggapan..."
                                    name="content">
                                <input type="hidden" name="user_id" value="{{ $data['user']->getId() }}">
                                <input type="hidden" name="complaint_id" value="{{ $data['complaint']->getId() }}">
                                <span class="input-group-btn p-l-10">
                                    <button class="btn btn-primary f-s-12 rounded-corner" type="submit">Kirim</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        @endguest
    </div>
@endsection
