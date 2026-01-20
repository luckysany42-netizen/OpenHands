@extends('layouts.dashboard')

@section('title')
    Contact | Donation
@endsection

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Hubungi Kami</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Menu</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Hubungi Kami
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl py-5">
        <div class="container">

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="row g-5">
                <!-- FORM FULL WIDTH -->
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">

                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                        Hubungi Kami
                    </div>

                    <h1 class="display-6 mb-5">
                        Jika Anda memiliki pertanyaan, silakan hubungi kami
                    </h1>

                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf

                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                        <div class="row g-3">
                            <!-- Name -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id="name"
                                        value="{{ Auth::check() ? Auth::user()->name : '' }}"
                                        placeholder="Your Name"
                                        readonly
                                        required>
                                    <label for="name">Nama Anda</label>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        value="{{ Auth::check() ? Auth::user()->email : '' }}"
                                        placeholder="Your Email"
                                        readonly
                                        required>
                                    <label for="email">Email Anda </label>
                                </div>
                            </div>

                            <!-- Subject -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="subject"
                                        id="subject"
                                        placeholder="Subject"
                                        required>
                                    <label for="subject">Tentang</label>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        name="message"
                                        id="message"
                                        placeholder="Leave a message here"
                                        style="height: 120px"
                                        required></textarea>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary py-2 px-4">
                                    Kirim Pesan
                                    <span class="ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>

@endsection
