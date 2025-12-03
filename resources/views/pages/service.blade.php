@extends('layouts.dashboard')

@section('title')
    Service | Donation
@endsection

@section('content')

<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Service</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Service</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
            <h1 class="display-6 mb-5">Learn More What We Do And Get Involved</h1>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="assets/img/icon-1.png" alt="">
                    <h4 class="mb-3">Child Education</h4>
                    <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit.</p>

                    <a class="btn btn-outline-primary px-3"
                       href="{{ auth()->check() ? route('causes') : route('login') }}">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="assets/img/icon-2.png" alt="">
                    <h4 class="mb-3">Medical Treatment</h4>
                    <p>Ipsum diam justo sed vero dolor duo.</p>

                    <a class="btn btn-outline-primary px-3"
                       href="{{ auth()->check() ? route('causes') : route('login') }}">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="assets/img/icon-3.png" alt="">
                    <h4 class="mb-3">Pure Drinking Water</h4>
                    <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit.</p>

                    <a class="btn btn-outline-primary px-3"
                       href="{{ auth()->check() ? route('causes') : route('login') }}">
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

@endsection
