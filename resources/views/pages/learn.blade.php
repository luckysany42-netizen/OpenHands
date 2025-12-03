@extends('layouts.dashboard')

@section('title')
    Learn More | OpenHands
@endsection

@push('addon-script')
    <script>
        window.addEventListener('load', function () {
            document.querySelectorAll('.content-text').forEach(function (block) {
                const inner = block.querySelector('.content-text-inner');
                const btn = block.querySelector('.read-more-btn');
                if (!inner || !btn) return;

                block.classList.remove('expanded');
                block.classList.add('collapsed');

                const computed = getComputedStyle(inner);
                const lineHeight = parseFloat(computed.lineHeight) || parseFloat(computed.fontSize) * 1.6;
                const clampLines = 3;
                const clampHeight = Math.round(lineHeight * clampLines);

                const prevMax = inner.style.maxHeight;
                inner.style.maxHeight = 'none';
                const fullHeight = inner.scrollHeight;
                inner.style.maxHeight = prevMax || '';

                if (fullHeight <= clampHeight + 2) {
                    btn.style.display = 'none';
                }

                btn.addEventListener('click', function () {
                    const expanded = block.classList.toggle('expanded');
                    block.classList.toggle('collapsed', !expanded);
                    btn.textContent = expanded ? 'Tutup' : 'Selengkapnya';

                    const parentBox = block.closest('.content-box');
                    if (parentBox) {
                        parentBox.classList.toggle('expanded', expanded);
                    }
                });
            });
        });
    </script>
@endpush

@push('addon-style')
    <link href="{{ url('assets/css/learn.css') }}" rel="stylesheet">
@endpush

@section('content')

    <!-- Banner Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/assets/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">{{ $campaign->name }}</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">
                                        Pelajari informasi lengkap dari campaign ini.
                                    </p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="{{ route('causes') }}">
                                        Back
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-left"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Content Box Start -->
    <div class="content-box">
        <div class="content-wrapper">
            
            <!-- PHOTO + TITLE -->
            <div class="content-photo">
                <img src="{{ Storage::url($campaign->photos) }}" alt="Image">
                <h4 class="content-title">{{ $campaign->name }}</h4>
            </div>

            <!-- DESCRIPTION -->
            <div class="content-text collapsed">
                <div class="content-text-wrapper">
                    <div class="content-text-inner">
                        {!! $campaign->description !!}
                    </div>
                    <button type="button" class="read-more-btn">Selengkapnya</button>
                </div>
            </div>

        </div>

        <!-- DONATE BUTTON -->
        <div class="donate-now-wrapper">
            <a class="btn btn-primary" href="{{ route('donate', $campaign->id) }}">
                Donate Now
                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                    <i class="fa fa-arrow-right"></i>
                </div>
            </a>
        </div>
    </div>
    <!-- Content Box End -->

@endsection
