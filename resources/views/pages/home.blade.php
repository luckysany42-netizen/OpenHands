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
                                            Donate Now
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
                                        Donasi Anda memberi kesempatan baru bagi mereka yang sedang berjuang
                                    </p>
                                    <div class="text-center mt-4">
                                        <a href="{{ auth()->check() ? route('donate') : route('login') }}"
                                           class="btn px-5 py-3 rounded-pill fw-bold"
                                           style="font-size: 20px; background: #FF7A00; color: #fff; border: none; transition: .3s; box-shadow: 0 0 18px rgba(255,122,0,0.4);">
                                            Donate Now
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
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                        <h1 class="display-6 mb-5">Harapan Dimulai Dari Kebaikan</h1>

                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">Dengan kontribusi kecil, Anda ikut membangun masa depan yang lebih baik.</p>
                            <span class="text-primary">Lucky Meirino Sany, Founder</span>
                        </div>

                        <!-- FIXED Learn More -->
                        <a href="{{ route('causes') }}" class="btn btn-primary d-inline-flex align-items-center py-2 px-4">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-3">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>

                        <a class="btn btn-outline-primary py-2 px-3" href="/contact">
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
    <!-- About End -->


    <!-- Causes Start -->
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">

            <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Feature Causes</div>
                <h1 class="display-6 mb-5">Berbagi bukan tentang jumlah tapi kepedulian</h1>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach ($products as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp">

                        <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                    <small>{{ $item->category->name }}</small>
                                </div>

                                <h5 class="mb-3">{{ $item->name }}</h5>
                                <p>{!! $item->thumbnail_description !!}</p>

                                <div class="causes-progress bg-light p-3 pt-2">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-dark">{{ number_format($item->goal_price) }} <small>Goal</small></p>
                                        <p class="text-dark">{{ number_format($item->current_price) }} <small>Raised</small></p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: {{ ($item->current_price / $item->goal_price) * 100 }}%;">
                                            <span>{{ round(($item->current_price / $item->goal_price) * 100) }}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="{{ Storage::url($item->photos) }}" alt="">
                                <div class="causes-overlay">
                                    <a class="btn-readmore-learn card-readmore"
                                       href="{{ auth()->check() ? route('learn', $item->id) : route('login') }}">
                                        Read More
                                        <span class="icon-circle"><i class="fa fa-arrow-right"></i></span>
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

@endsection
