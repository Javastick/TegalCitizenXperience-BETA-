@extends('layouts.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Sugeng rawuh <span>Masyarakat Kota Tegal!</span></h2>
                    <p>Ayo berpartisipasi untuk kemajuan Kota Tegal dengan melaporkan kekurangan dari Kota Tercinta kita!
                    <p>
                        TegalCitizenXperience(TCX) adalah aplikasi untuk menampung segala pengaduan dari masyarakat kota tegal.
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('complaint.make') }}" class="btn-get-started">Buat Pengaduan</a>
                        <a href="{{ route('game') }}" class="btn-get-started ms-2">Main Game</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="storage/img/news.png" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="100">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">
                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-easel"></i></div>
                            <h4 class="title"><a href="{{ route('complaints') }}?cat=lalu-lintas"
                                    class="stretched-link">Lalu Lintas</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gem"></i></div>
                            <h4 class="title"><a href="{{ route('complaints') }}?cat=infrastruktur"
                                    class="stretched-link">Infrastruktur</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title"><a href="{{ route('complaints') }}?cat=sosial"
                                    class="stretched-link">Sosial</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-command"></i></div>
                            <h4 class="title"><a href="{{ route('complaints') }}?cat=lingkungan"
                                    class="stretched-link">Lingkungan</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Hero Section -->
    <section id="about" class="about">
        <div class="container">
            @if (count($data['complaints']) < 1)
                <div class="row d-flex justify-content-center align-items-center" style="min-height: 480px;">
                    <p class="text-center">Belum ada pengaduan</p>
                </div>
            @else
                <div class="row ">
                    <h1 class="text-center">{{ $data['title'] }}</h1>
                    <div class="col-md-12">
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
                                                <li class="mb-3">
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
                                                                            <img
                                                                                src="storage/img/{{ $data['user']->getImage() }}">
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
                                                                                    placeholder="Beri tanggapan..."
                                                                                    name="content">
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
                                                    <a href="{{ route('complaints') }}" class="btn btn-secondary ">Lihat
                                                        semua laporan</a>
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

    </section>
@endsection
