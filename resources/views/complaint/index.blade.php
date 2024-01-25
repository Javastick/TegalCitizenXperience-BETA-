@extends('layouts.app')

@section('content')
    <div class="container">
        @if (count($data['complaints']) < 1)
            <div class="row d-flex justify-content-center align-items-center" style="min-height: 480px;">
                <p class="text-center">Belum ada pengaduan</p>
            </div>
        @else
            <div class="complaint row mt-3 d-flex justify-content-center">
                <div class="dropdown d-flex justify-content-center">
                    <button class="btn btn-outline-info dropdown-toggle px-5" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <h3 class=" text-capitalize">{{ $data['title'] }}</h3>
                    </button>
                    <ul class="dropdown-menu w-100">
                        <li><a class="dropdown-item {{ $data['title'] === 'Semua Pengaduan' ? 'd-none' : '' }}" href="{{route('complaints')}}">Semua Pengaduan</a></li>
                        <li>
                            <a class="dropdown-item {{ $data['title'] === 'lalu-lintas' ? 'd-none' : '' }}" href="{{route('complaints')}}?cat=lalu-lintas">Lalu Lintas</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ $data['title'] === 'infrastruktur' ? 'd-none' : '' }}" href="{{route('complaints')}}?cat=infrastruktur">Infrastruktur</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ $data['title'] === 'sosial' ? 'd-none' : '' }}" href="{{route('complaints')}}?cat=sosial">Sosial</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ $data['title'] === 'lingkungan' ? 'd-none' : '' }}" href="{{route('complaints')}}?cat=lingkungan">Lingkungan</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="row d-flex justify-content-end bg-danger">

                    </div>
                    <div id="content" class="content content-full-width">
                        <!-- begin profile-content -->
                        <div class="profile-content">
                            <!-- begin tab-content -->
                            <div class="tab-content p-0">
                                <!-- begin #profile-post tab -->
                                <div class="tab-pane fade active show" id="profile-post">
                                    <!-- begin timeline -->
                                    <ul class="timeline">
                                        @foreach ($data['complaints'] as $complaint)
                                            <li class="mb-3" id="{{ $complaint->getId() }}">
                                                <!-- begin timeline-time -->
                                                <div class="timeline-time">
                                                    <span class="date">Waktu</span>
                                                    <span class="time">{{ $complaint->getCreatedAt() }}</span>
                                                </div>
                                                <!-- end timeline-time -->
                                                <!-- begin timeline-icon -->
                                                <div class="timeline-icon">
                                                    <a href="javascript:;">&nbsp;</a>
                                                </div>
                                                <!-- end timeline-icon -->
                                                <!-- begin timeline-body -->
                                                <div class="timeline-body border">
                                                    <div class="timeline-header">
                                                        <span class="userimage">
                                                            @if ($complaint->getUser()->image !== null)
                                                                <img src="/storage/img/{{ $complaint->getUser()->image }}"
                                                                    alt="">
                                                            @else
                                                                <img src="/img/nopfp.jpeg" alt="">
                                                            @endif
                                                        </span>
                                                        <span class="username"><a
                                                                href="javascript:;">{{ $complaint->getUser()->getName() }}</a>
                                                            <small></small></span>
                                                        <span class="pull-right text-muted">mengadukan
                                                            {{ $complaint->getCategory() }}</span>
                                                    </div>
                                                    <div class="timeline-content row">
                                                        @if ($complaint->getImage() == null)
                                                            <h3>
                                                                <a
                                                                    href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">
                                                                    {{ $complaint->getTitle() }}
                                                                </a>
                                                            </h3>
                                                            <p>
                                                                {{ $complaint->getContentHalf() }}
                                                                <a
                                                                    href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">...Selengkapnya</a>
                                                            </p>
                                                        @else
                                                            <div class="col-12 col-lg-6 mb-2 ">
                                                                <h3>
                                                                    <a
                                                                        href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">
                                                                        {{ $complaint->getTitle() }}
                                                                    </a>
                                                                </h3>
                                                                <p>
                                                                    {{ $complaint->getContentHalf() }}<a
                                                                        href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">...Selengkapnya</a>
                                                                </p>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <img src="/storage/img/{{ $complaint->getImage() }}"
                                                                    alt="" class="w-100 h-100">
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="timeline-footer">

                                                        @if (count($complaint->getComments()) > 0)
                                                            {{ count($complaint->getComments()) }} tanggapan
                                                        @else
                                                            <p>Belum ada tanggapan
                                                            </p>
                                                        @endif
                                                    </div>
                                                    @guest
                                                    @else
                                                        @if ($data['user']->getRole() === 'agency')
                                                            <div class="timeline-comment-box">
                                                                <div class="user">
                                                                    @if ($data['user']->getImage() !== null)
                                                                        <img src="storage/img/{{ $data['user']->getImage() }}">
                                                                    @else
                                                                        <img src="/img/nopfp.jpeg" alt="">
                                                                    @endif
                                                                </div>
                                                                <div class="input">
                                                                    <form action="{{ route('complaint.comment') }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="input-group">
                                                                            <input type="text"
                                                                                class="form-control rounded-corner"
                                                                                placeholder="Beri tanggapan..." name="content">
                                                                            <input type="hidden" name="user_id"
                                                                                value="{{ $data['user']->getId() }}">
                                                                            <input type="hidden" name="complaint_id"
                                                                                value="{{ $complaint->getId() }}">
                                                                            <span class="input-group-btn p-l-10">
                                                                                <button
                                                                                    class="btn btn-primary f-s-12 rounded-corner"
                                                                                    type="submit">Kirim</button>
                                                                            </span>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endguest
                                                </div>
                                                <!-- end timeline-body -->
                                            </li>
                                        @endforeach
                                        <li>
                                            <!-- begin timeline-icon -->
                                            <div class="timeline-icon">
                                                <a href="javascript:;">&nbsp;</a>
                                            </div>
                                            <!-- end timeline-icon -->
                                            <!-- begin timeline-body -->
                                            <div class="timeline-body">
                                                Loading...
                                            </div>
                                            <!-- begin timeline-body -->
                                        </li>
                                    </ul>
                                    <!-- end timeline -->
                                </div>
                                <!-- end #profile-post tab -->
                            </div>
                            <!-- end tab-content -->
                        </div>
                        <!-- end profile-content -->
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
