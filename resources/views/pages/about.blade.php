@extends('layouts.dashboard')

@section('title')
    About | Donation
@endsection

@section('content')

<!-- PAGE HEADER -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Tentang Kami</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</div>

<!-- ============================= -->
<!-- 1. ABOUT US -->
<!-- ============================= -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <!-- Images -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100 pt-5 pe-5" src="assets/img/about-1.jpg" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="assets/img/about-2.jpg" alt=""
                         style="width: 200px; height: 200px;">
                </div>
            </div>

            <!-- Text -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                    <h1 class="display-6 mb-5">Harapan Dimulai Dari Kebaikan</h1>

                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <p class="text-dark mb-2">
                            Dengan kontribusi kecil, Anda ikut membangun masa depan yang lebih baik untuk banyak orang.
                            Setiap bantuan yang diberikan membawa harapan baru bagi mereka yang membutuhkan.
                        </p>
                        <span class="text-primary">Lucky Meirino Sany, Founder</span>
                    </div>

                    <a class="btn btn-primary py-2 px-3 me-3" href="{{ route('causes') }}">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>

                    <a class="btn btn-outline-primary py-2 px-3" href="{{ route('contact') }}">
                        Contact Us
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- ============================= -->
<!-- 2. TEAM -->
<!-- ============================= -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Anggota Tim</div>
                <h1 class="display-6 mb-5">Mari Bertemu dengan Anggota Kita</h1>
            </div>

            <div class="row g-4 justify-content-center">

                {{-- Team Member 1 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/team-2.jpeg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Lucky Mairino Sany</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://instagram.com/lkyymei" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square" href="https://wa.me/6281222116923" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-square" href="https://facebook.com/Kyle El" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Team Member 2 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/team-3.jpeg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>M Hendry Risky F</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                               <a class="btn btn-square" href="https://instagram.com/fedbrian" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square" href="https://wa.me/6281222116923" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-square" href="https://facebook.com/Hen W Z" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->

<!-- ============================= -->
<!-- 3. APA YANG KAMU PERJUANGKAN -->
<!-- (Program Kami dari SERVICE) -->
<!-- ============================= -->
<div class="container-xxl py-5">
    <div class="container">

        <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Apa Yang Kami Perjuangkan</div>
            <h1 class="display-6 mb-5">Program Yang Kami Dedikasikan Untuk Sesama</h1>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="assets/img/icon-1.png" alt="">
                    <h4 class="mb-3">Pendidikan Anak</h4>
                    <p>Program ini membantu anak-anak yang terdampak kondisi darurat agar tetap memiliki 
                    kesempatan belajar dengan fasilitas yang layak. Kami menyediakan perlengkapan sekolah,
                    ruang belajar aman, serta pendampingan agar mereka dapat terus mengejar masa depan
                    dengan penuh harapan.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="assets/img/icon-2.png" alt="">
                    <h4 class="mb-3">Perawatan Medis</h4>
                    <p>Program ini menyediakan bantuan kesehatan bagi masyarakat yang tidak memiliki akses
                    pelayanan medis setelah bencana atau keadaan darurat. Kami membantu dengan obat-obatan,
                    pemeriksaan dasar, serta dukungan tenaga medis agar setiap orang mendapatkan perawatan 
                    yang layak dan tepat.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="assets/img/icon-3.png" alt="">
                    <h4 class="mb-3">Air Minum Bersih</h4>
                    <p>Program ini memastikan masyarakat terdampak tetap memiliki akses air bersih yang 
                    layak untuk kebutuhan sehari-hari setelah bencana terjadi. Kami menyediakan sumber air,
                    instalasi sanitasi, filter aman, serta edukasi kebersihan agar lingkungan tetap sehat 
                    dan mendukung pemulihan masyarakat.</p>
                </div>
            </div>

        </div>

    </div>
</div>


<!-- ============================= -->
<!-- 4. PENERIMA BANTUAN -->
<!-- ============================= -->
<div class="container-xxl py-5">
    <div class="container">

        <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Penerima Bantuan</div>
            <h1 class="display-6 mb-5">Harapan Yang Kembali Tumbuh</h1>
        </div>

        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

            <!-- Item 1 -->
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                     src="assets/img/testimonial-1.jpeg"
                     style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>Saat banjir datang, semua buku sekolah dan pakaian saya hanyut terbawa air. 
                    Saya pikir saya tidak bisa kembali sekolah lagi. Tapi ketika bantuan datang, saya 
                    menerima seragam baru, buku, dan perlengkapan belajar. Saya sangat senang karena bisa 
                    kembali belajar dan bertemu teman-teman. Terima kasih kepada semua yang sudah 
                    membantu. Saya akan belajar lebih giat agar suatu hari bisa membantu orang lain 
                    seperti kalian membantu saya.</p>
                    <h5 class="mb-1">Adek Aqis</h5>
                    <span class="fst-italic">Penerima Program Pendidikan Anak</span>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                     src="assets/img/testimonial-2.jpg"
                     style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>Saya kehilangan rumah dan semua barang saya. Saya hanya membawa baju yang saya 
                    kenakan saat itu. Tetapi ketika bantuan datang, saya menerima pakaian bersih dan 
                    selimut tebal. Rasanya seperti menerima pelukan hangat. Terima kasih kepada para 
                    donatur, doa kami selalu menyertai kalian. Kebaikan ini tidak akan kami lupakan.</p>
                    <h5 class="mb-1">Bapak Haris</h5>
                    <span class="fst-italic">Penerima Bantuan Pakaian & Kebutuhan Harian</span>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                     src="assets/img/testimonial-3.jpg"
                     style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>Kami hidup di pengungsian selama berminggu-minggu. Anak saya sakit karena kurang air 
                    bersih dan sanitasi. Setelah bantuan air bersih datang, semuanya berubah. Anak saya 
                    mulai pulih dan keluarga kami bisa hidup lebih sehat. Terima kasih kepada donatur yang 
                    telah membantu tanpa mengenal nama dan wajah kami. Bantuan kalian menyelamatkan hidup.</p>
                    <h5 class="mb-1">Bapak Arman</h5>
                    <span class="fst-italic">Penerima Program Air Bersih & Kesehatan</span>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
