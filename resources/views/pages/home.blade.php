@extends('layouts.dashboard')

@section('title')
    Home | Donation
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Dari Hati Untuk Sesama</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">
                                        Kami menghubungkan niat baik Anda dengan mereka yang membutuhkan bantuan paling mendesak
                                    </p>
                                    <div class="text-center mt-4">
                                        <a href="{{ auth()->check() ? route('donate') : route('login') }}"
                                           class="btn px-5 py-3 rounded-pill fw-bold"
                                           style="font-size: 20px; background: #FF7A00; color: #fff; border: none; transition: .3s; box-shadow: 0 0 18px rgba(255,122,0,0.4);">
                                            Donasi Sekarang
                                            <span class="ms-2 d-inline-flex rounded-circle"
                                                style="width:32px;height:32px;background:white;color:#FF7A00;align-items:center;justify-content:center;">
                                                <i class="fa fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECOND SLIDE -->
                <div class="carousel-item">
                    <img class="w-100" src="assets/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Bersama Kita Hadirkan Harapan</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">
                                        Dengan kontribusi kecil, Anda ikut membangun masa depan yang lebih baik untuk banyak orang.
                            Setiap bantuan yang diberikan membawa harapan baru bagi mereka yang membutuhkan.
                                    </p>
                                    <div class="text-center mt-4">
                                        <a href="{{ auth()->check() ? route('donate') : route('login') }}"
                                           class="btn px-5 py-3 rounded-pill fw-bold"
                                           style="font-size: 20px; background: #FF7A00; color: #fff; border: none; transition: .3s; box-shadow: 0 0 18px rgba(255,122,0,0.4);">
                                            Donasi Sekarang
                                            <span class="ms-2 d-inline-flex rounded-circle"
                                                style="width:32px;height:32px;background:white;color:#FF7A00;align-items:center;justify-content:center;">
                                                <i class="fa fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CAROUSEL CONTROLS -->
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <!-- LEFT IMAGE -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="assets/img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="assets/img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Tentang Kami</div>
                        <h1 class="display-6 mb-5">Harapan Dimulai Dari Kebaikan</h1>

                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">Dengan kontribusi kecil, Anda ikut membangun masa depan yang lebih baik.</p>
                            <span class="text-primary">Lucky Meirino Sany, Founder</span>
                        </div>

                        <!-- FIXED: Learn More harus pakai parameter id (default 1 untuk halaman non-item) -->
                        <a href="{{ auth()->check() ? route('about', 1) : route('login') }}" class="btn btn-primary d-inline-flex align-items-center py-2 px-4">
                            Pelajari Lebih Lanjut
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-3">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>

                        <a class="btn btn-outline-primary py-2 px-3" href="/contact">
                            Hubungi Kami
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

   <!-- Causes Start -->
<div class="container-xxl bg-light my-5 py-5">
    <div class="container py-5">

        <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Program Donasi</div>
            <h1 class="display-6 mb-5">Berbagi bukan tentang jumlah tapi kepedulian</h1>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach ($products as $item)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">

                        <div class="text-center p-4 pt-0">

                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>{{ $item->category->name }}</small>
                            </div>

                            <!-- NEW IMAGE BELOW TITLE -->
                            @if($item->photos)
                                <img class="img-fluid mb-3"
                                     src="{{ Storage::url($item->photos) }}"
                                     alt="{{ $item->name }}"
                                     style="border-radius: 10px;">
                            @endif

                            <h5 class="mb-3">{{ $item->name }}</h5>
                            <p>{!! $item->thumbnail_description !!}</p>

                            <div class="causes-progress bg-light p-3 pt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="text-dark">
                                        {{ number_format($item->goal_price) }}
                                        <small class="text-body">Goal</small>
                                    </p>
                                    <p class="text-dark">
                                        {{ number_format($item->current_price) }}
                                        <small class="text-body">Raised</small>
                                    </p>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar"
                                        role="progressbar"
                                        style="width: {{ $item->goal_price ? ($item->current_price / $item->goal_price * 100) : 0 }}%;"
                                        aria-valuenow="{{ $item->goal_price ? ($item->current_price / $item->goal_price * 100) : 0 }}"
                                        aria-valuemin="0"
                                        aria-valuemax="100">

                                        <span>
                                            {{ $item->goal_price ? round(($item->current_price / $item->goal_price) * 100) : 0 }}%
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- OVERLAY AREA (TOMBOL READ MORE) -->
                        <div class="position-relative mt-auto">

                            <!-- HIDDEN IMAGE FOR OVERLAY => AGAR TOMBOL TIDAK HILANG -->
                            @if($item->photos)
                                <img class="img-fluid"
                                     src="{{ Storage::url($item->photos) }}"
                                     alt="{{ $item->name }}"
                                     style="opacity: 0; height: 0; width: 100%;">
                            @endif

                            <div class="causes-overlay">
                                <a class="btn-readmore-learn card-readmore"
                                   href="{{ auth()->check() ? route('learn', $item->id) : route('login') }}">
                                    Baca Selengkapnya
                                    <span class="icon-circle">
                                        <i class="fa fa-arrow-right"></i>
                                    </span>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
<!-- Causes End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Program Kami</div>
                <h1 class="display-6 mb-5">Apa Yang Kami Perjuangkan</h1>
            </div>
                        <style>
                .service-item {
                    display: flex;
                    flex-direction: column;
                }
                .service-item img {
                        width: 120px;
                        height: auto;
                        margin: 0 auto 20px;
                    }


                .service-item p {
                    flex-grow: 1; /* supaya paragraf mendorong tombol ke bawah */
                    min-height: 150px; /* agar tinggi teks konsisten */
                }
            </style>


            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="assets/img/icon-1.png" alt="">
                        <h4 class="mb-3">Pendidikan Anak</h4>
                        <p class="mb-4">
                            Program ini membantu anak-anak yang terdampak kondisi darurat agar tetap memiliki kesempatan belajar dengan fasilitas yang layak.
                            Kami menyediakan perlengkapan sekolah, ruang belajar aman, serta pendampingan agar mereka dapat terus mengejar masa depan dengan penuh harapan.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="assets/img/icon-2.png" alt="">
                        <h4 class="mb-3">Perawatan Medis</h4>
                        <p class="mb-4">
                            Program ini menyediakan bantuan kesehatan bagi masyarakat yang tidak memiliki akses pelayanan medis setelah bencana atau keadaan darurat.
                            Kami membantu dengan obat-obatan, pemeriksaan dasar, serta dukungan tenaga medis agar setiap orang mendapatkan perawatan yang layak dan tepat.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="assets/img/icon-3.png" alt="">
                        <h4 class="mb-3">Air Minum Bersih</h4>
                        <p class="mb-4">
                            Program ini memastikan masyarakat terdampak tetap memiliki akses air bersih yang layak untuk kebutuhan sehari-hari setelah bencana terjadi.
                            Kami menyediakan sumber air, instalasi sanitasi, filter aman, serta edukasi kebersihan agar lingkungan tetap sehat dan mendukung pemulihan masyarakat.
                        </p>
                    </div>
                </div>
            </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
<!-- Penerima Donasi Start -->
<div class="container-xxl py-5">
    <div class="container">

        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                Para Penerima Donasi
            </div>
            <h1 class="display-6 mb-5">Donasi Yang Telah Tersampaikan</h1>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Penerima Donasi 1 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="assets/img/team-2.jpeg" alt="Penerima Donasi">
                    </div>
                    <div class="team-text bg-light text-center p-4">

                        <!-- Nama Program (selalu tampil) -->
                        <h5 class="text-dark fw-bold mb-2">
                            Program Bantuan Alat Tulis
                        </h5>

                        <!-- Info Pop Up -->
                        <div class="donation-info">
                            <p class="text-dark mb-1">
                                Total Tersalurkan:
                                <span class="text-primary fw-bold font-monospace">
                                    Rp 2.500.000
                                </span>
                            </p>
                            <small class="text-dark fst-italic" style="font-size: 13px;">
                                Tersampaikan pada: 12 Desember 2025
                            </small>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Penerima Donasi 2 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="assets/img/team-3.jpeg" alt="Penerima Donasi">
                    </div>
                    <div class="team-text bg-light text-center p-4">

                        <h5 class="text-dark fw-bold mb-2">
                            Program Bantuan Air Bersih
                        </h5>

                        <div class="donation-info">
                            <p class="text-dark mb-1">
                                Total Tersalurkan:
                                <span class="text-primary fw-bold font-monospace">
                                    Rp 3.750.000
                                </span>
                            </p>
                            <small class="text-dark fst-italic" style="font-size: 13px;">
                                Tersampaikan pada: 5 Januari 2026
                            </small>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Penerima Donasi 3 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="assets/img/team-4.jpeg" alt="Penerima Donasi">
                    </div>
                    <div class="team-text bg-light text-center p-4">

                        <h5 class="text-dark fw-bold mb-2">
                            Program Bantuan Obat Lansia
                        </h5>

                        <div class="donation-info">
                            <p class="text-dark mb-1">
                                Total Tersalurkan:
                                <span class="text-primary fw-bold font-monospace">
                                    Rp 1.800.000
                                </span>
                            </p>
                            <small class="text-dark fst-italic" style="font-size: 13px;">
                                Tersampaikan pada: 20 Januari 2026
                            </small>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Penerima Donasi 4 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="assets/img/team-5.jpeg" alt="Penerima Donasi">
                    </div>
                    <div class="team-text bg-light text-center p-4">

                        <h5 class="text-dark fw-bold mb-2">
                            Program Bantuan Sembako
                        </h5>

                        <div class="donation-info">
                            <p class="text-dark mb-1">
                                Total Tersalurkan:
                                <span class="text-primary fw-bold font-monospace">
                                    Rp 4.200.000
                                </span>
                            </p>
                            <small class="text-dark fst-italic" style="font-size: 13px;">
                                Tersampaikan pada: 2 Februari 2026
                            </small>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Penerima Donasi End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Penerima bantuan</div>
                <h1 class="display-6 mb-5">Harapan Yang Kembali Tumbuh</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/img/testimonial-1.jpeg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Saat banjir datang, semua buku sekolah dan pakaian saya hanyut terbawa air. Saya pikir saya tidak bisa kembali sekolah lagi. Tapi ketika bantuan datang, saya menerima seragam baru, buku, dan perlengkapan belajar. Saya sangat senang karena bisa kembali belajar dan bertemu teman-teman. Terima kasih kepada semua yang sudah membantu. Saya akan belajar lebih giat agar suatu hari bisa membantu orang lain seperti kalian membantu saya.
                        </p>
                        <h5 class="mb-1">Adek Aqis</h5>
                        <span class="fst-italic">Penerima Program Pendidikan Anak</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/img/testimonial-2.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Saya kehilangan rumah dan semua barang saya. Saya hanya membawa baju yang saya kenakan saat itu. Tetapi ketika bantuan datang, saya menerima pakaian bersih dan selimut tebal. Rasanya seperti menerima pelukan hangat. Terima kasih kepada para donatur, doa kami selalu menyertai kalian. Kebaikan ini tidak akan kami lupakan.
                        </p>
                        <h5 class="mb-1">Bapak Haris</h5>
                        <span class="fst-italic">Penerima Bantuan Pakaian & Kebutuhan Harian</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/img/testimonial-3.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Kami hidup di pengungsian selama berminggu-minggu. Anak saya sakit karena kurang air bersih dan sanitasi. Setelah bantuan air bersih datang, semuanya berubah. Anak saya mulai pulih dan keluarga kami bisa hidup lebih sehat. Terima kasih kepada donatur yang telah membantu tanpa mengenal nama dan wajah kami. Bantuan kalian menyelamatkan hidup.
                        </p>
                        <h5 class="mb-1">Bapak Arman</h5>
                        <span class="fst-italic">Penerima Program Air Bersih & Kesehatan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection