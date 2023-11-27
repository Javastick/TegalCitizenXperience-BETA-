@extends('layout')

@section('content')
    <div class="jumbo d-flex flex-column justify-content-center align-items-center"
        style="background-image: url(img/jumbobg.png); background-size: cover;height:75vh;">
        <div class="img">
            <img src="img/logotegal.png" alt="" class="position-relative" width="300" height="300" style="top:70px;">
            <img src="img/walkot.png" alt="" width="350" class="position-absolute"
                style="right:500px; top:100px;">
        </div>
        <div class="text position-relative bg-white border border-3 border-dark rounded" style="width: 600px;top:-50px;">
            <div class="m-3 d-flex flex-column justify-content-center align-items-center">
                <h3>Hallo Tegalitans!! </h3>
                <p class="text-center">Selamat datang ning Tegal Citizen Xperience (TCX). Bokan sampeyan durung ngarti, TCX
                    kue aplikasi pengaduan rakyat online (PRO) Kota Tegal. Gadi sampeyan bisa nuturna pirang pirang keluhan
                    sing sampeyan ranapi ning Kota Tegal kie.</p>
            </div>
        </div>
        {{-- <div class="svg" style="width:100%;">
            <svg id="visual" viewBox="0 0 900 600" width="900" height="600" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                <path
                    d="M0 501L21.5 496.5C43 492 86 483 128.8 481.5C171.7 480 214.3 486 257.2 488.5C300 491 343 490 385.8 485.7C428.7 481.3 471.3 473.7 514.2 476.8C557 480 600 494 642.8 499.2C685.7 504.3 728.3 500.7 771.2 497.5C814 494.3 857 491.7 878.5 490.3L900 489L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z"
                    fill="#293a8a"></path>
                <path
                    d="M0 484L21.5 483.5C43 483 86 482 128.8 480.7C171.7 479.3 214.3 477.7 257.2 485C300 492.3 343 508.7 385.8 513C428.7 517.3 471.3 509.7 514.2 502.2C557 494.7 600 487.3 642.8 488.7C685.7 490 728.3 500 771.2 506.2C814 512.3 857 514.7 878.5 515.8L900 517L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z"
                    fill="#2b46a5"></path>
                <path
                    d="M0 526L21.5 523.7C43 521.3 86 516.7 128.8 516.2C171.7 515.7 214.3 519.3 257.2 524.2C300 529 343 535 385.8 537.7C428.7 540.3 471.3 539.7 514.2 540C557 540.3 600 541.7 642.8 535.8C685.7 530 728.3 517 771.2 515.7C814 514.3 857 524.7 878.5 529.8L900 535L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z"
                    fill="#2953c2"></path>
                <path
                    d="M0 536L21.5 540.3C43 544.7 86 553.3 128.8 553C171.7 552.7 214.3 543.3 257.2 542.5C300 541.7 343 549.3 385.8 553.5C428.7 557.7 471.3 558.3 514.2 559.2C557 560 600 561 642.8 558C685.7 555 728.3 548 771.2 543C814 538 857 535 878.5 533.5L900 532L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z"
                    fill="#2260df"></path>
                <path
                    d="M0 556L21.5 558.3C43 560.7 86 565.3 128.8 568.7C171.7 572 214.3 574 257.2 574.3C300 574.7 343 573.3 385.8 571.2C428.7 569 471.3 566 514.2 566C557 566 600 569 642.8 571.3C685.7 573.7 728.3 575.3 771.2 574C814 572.7 857 568.3 878.5 566.2L900 564L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z"
                    fill="#0d6efd"></path>
            </svg>
        </div> --}}
    </div>
    <img src="img/wave.png" alt="" style="width: 100%; height:70px;">
    <div class="features bg-primary text-light">
        <div class="title d-flex justify-content-center">
            <h1>Pengaduan</h1>
        </div>
        <div class="row w-100 d-flex justify-content-center my-3">
            <div class="col-2 choice m-2 rounded shadow d-flex flex-column text-center text-dark"
                style="height:150px;">
                <div class="icon m-5 mb-4">
                    <i class="fa-solid fa-people-roof fa-2xl" style="color: lime ;"></i>
                </div>
                <h5 class="mt-">Sosial dan Ketenagakerjaan</h5>
                <div class="explain d-flex rounded d-flex justify-content-center align-items-center">
                    Laporna masalah sing terkait karo ketenagakerjaan lan permasalahan sosial ning Tegal, kaya ketidaksetaraan pekerjaan utawa konflik sosial.
                </div>
            </div>
            <div class="col-2 choice m-2 rounded shadow d-flex flex-column text-center text-dark"
                style="height:150px;">
                <div class="icon m-5 mb-4">
                    <i class="fa-solid fa-traffic-light fa-2xl" style="color: red;"></i>
                </div>
                <h3 class="mt-">Lalu Lintas</h3>
                <div class="explain d-flex rounded d-flex justify-content-center align-items-center">
                    Laporna masalah sing terkait karo lalu lintas lan transportasi ning Tegal, kaya dalan macet mbuh keamanan dalan.
                </div>
            </div>
            <div class="col-2 choice m-2 rounded shadow d-flex flex-column text-center text-dark"
                style="height:150px;">
                <div class="icon m-5 mb-4">
                    <i class="fa-solid fa-landmark fa-2xl" style="color: blue;"></i>
                </div>
                <h3 class="mt-">Layanan Publik</h3>
                <div class="explain d-flex rounded d-flex justify-content-center align-items-center">
                    Nain pengaduan terkait karo layanan publik ning Tegal, kaya kesehatan, pendidikan, lan fasilitas umum liyane sing perlu dibeneri utawa diapiki.
                </div>
            </div>
            <div class="col-2 choice m-2 rounded shadow d-flex flex-column text-center text-dark"
                style="height:150px;">
                <div class="icon m-5 mb-4">
                    <i class="fa-solid fa-road-bridge fa-2xl" style="color: rgb(221, 221, 0)"></i>
                </div>
                <h3 class="mt-">Infrastruktur</h3>
                <div class="explain d-flex rounded d-flex justify-content-center align-items-center">
                    Laporna masalah sing terkait karo proyek infrastruktur ning Tegal, termasuk pembangunan sing ora memadai utawa potensi dampak ora apik.
                </div>
            </div>
            <div class="col-2 choice m-2 rounded shadow d-flex flex-column text-center text-dark"
                style="height:150px;">
                <div class="icon m-5 mb-4">
                    <i class="fa-solid fa-tree fa-2xl" style="color: green"></i>
                </div>
                <h3 class="mt-">Lingkungan</h3>
                <div class="explain d-flex rounded d-flex justify-content-center align-items-center">
                    Tuturna keluhan sing terkait karo lingkungan ning Tegal, kaya polusi lan kerusakan lingkungan sing perlu ditangani luwih lanjut.
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-center">
                <div class="row choice my-3 bg-light shadow-lg rounded text-dark w-50">
                    <div class="col-3">
                        <img src="img/console.jpg" alt="" width="150">
                    </div>
                    <div class="col-9 d-flex flex-column justify-content-center">
                        <h5>TCX Game</h5>
                        Dolanan gim terus dikumpulna poine eben akeh, Tegalitans sing poine paling akeh olih hadiah ngko dang
                        Car Free Day.
                    </div>
                </div>
        </div>
    </div>
@endsection
