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

                        <!-- Learn More -->
                        <a href="{{ auth()->check() ? route('learn') : route('login') }}" class="btn btn-primary d-inline-flex align-items-center py-2 px-4">
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
                                        <div class="progress-bar" style="width: {{ $item->goal_price ? (($item->current_price / $item->goal_price) * 100) : 0 }}%;">
                                            <span>{{ $item->goal_price ? round(($item->current_price / $item->goal_price) * 100) : 0 }}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="position-relative mt-auto">
                                @if($item->photos)
                                    <img class="img-fluid" src="{{ Storage::url($item->photos) }}" alt="">
                                @endif
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

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Program Kami</div>
                <h1 class="display-6 mb-5">Apa Yang Kami Perjuangkan</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="assets/img/icon-1.png" alt="">
                        <h4 class="mb-3">Child Education</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                        <a class="btn btn-outline-primary px-3" href="{{ auth()->check() ? route('learn') : route('login') }}">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="assets/img/icon-2.png" alt="">
                        <h4 class="mb-3">Medical Treatment</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                        <a class="btn btn-outline-primary px-3" href="{{ auth()->check() ? route('learn') : route('login') }}">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="assets/img/icon-3.png" alt="">
                        <h4 class="mb-3">Pure Drinking Water</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                        <a class="btn btn-outline-primary px-3" href="{{ auth()->check() ? route('learn') : route('login') }}">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Donate Start -->
    <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="assets/img/carousel-2.jpg">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Donate Now</div>
                    <h1 class="display-6 text-white mb-5">Satu Aksi Anda, Ribuan Harapan Hidup Kembali</h1>
                    <p class="text-white-50 mb-0">Satu tindakan sederhana dapat membawa perubahan yang tak terbayangkan bagi banyak orang. Ketika kita memilih untuk membantu, kita tidak hanya memberi bantuan sesaat—kita menghidupkan kembali harapan yang mungkin telah lama padam. Ribuan orang menantikan uluran tangan dan kepedulian kita. Melalui satu aksi kebaikan, kita bisa membuka pintu kesempatan, menguatkan semangat, dan mengembalikan senyuman di wajah mereka yang membutuhkan.</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-white p-5">
                        <form method="post" action="{{route('donate.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row g-3">

                                {{-- NAME --}}
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text"
                                            class="form-control bg-light border-0 shadow-sm"
                                            name="username"
                                            id="username"
                                            placeholder="Your Name"
                                            value="{{ auth()->check() ? auth()->user()->name : '' }}"
                                            {{ auth()->check() ? 'readonly' : '' }}
                                            required>
                                        <label for="username">Your Name</label>
                                    </div>
                                </div>

                                {{-- EMAIL --}}
                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <input type="email"
                                            class="form-control bg-light border-0 shadow-sm"
                                            name="email"
                                            id="email"
                                            placeholder="Your Email"
                                            value="{{ auth()->check() ? auth()->user()->email : '' }}"
                                            {{ auth()->check() ? 'readonly' : '' }}
                                            required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>

                                {{-- CATEGORY --}}
                                <div class="col-12">
                                    <div class="form-floating mb-3" style="border-radius: 10px; overflow: hidden;">
                                        <select id="category_id" name="category_id"
                                            class="form-control bg-light border-0 shadow-sm"
                                            style="height: 58px;">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <label for="category_id">Choose Category</label>
                                    </div>
                                </div>

                                {{-- CAMPAIGN --}}
                                <div class="col-12">
                                    <div class="form-floating mb-3" style="border-radius: 10px; overflow: hidden;">
                                        <select id="products_id" name="products_id"
                                            class="form-control bg-light border-0 shadow-sm"
                                            style="height: 58px;">
                                            @foreach ($product as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <label for="products_id">Choose Campaign</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="btn-group d-flex justify-content-around">
                                        <input type="radio" class="btn-check" name="donate_price" id="donate_price1" value="10000" checked>
                                        <label class="btn btn-light py-3" for="donate_price1">Rp.10.000</label>

                                        <input type="radio" class="btn-check" name="donate_price" id="donate_price2" value="20000">
                                        <label class="btn btn-light py-3" for="donate_price2">Rp.20.000</label>

                                        <input type="radio" class="btn-check" name="donate_price" id="donate_price3" value="30000">
                                        <label class="btn btn-light py-3" for="donate_price3">Rp.30.000</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary px-5" style="height: 60px;">
                                        Donate Now
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Team Members</div>
                <h1 class="display-6 mb-5">Let's Meet With Our Ordinary Soldiers</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/team-1.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Lucky Meirino S</h5>
                            <p class="text-primary">Founder</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/team-2.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>M Hendry Risky F</h5>
                            <p class="text-primary">Planner</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/team-3.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/team-4.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Testimonial</div>
                <h1 class="display-6 mb-5">Cahaya Kecil Yang Menerangi Jalan</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/img/testimonial-1.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/img/testimonial-2.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/img/testimonial-3.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
