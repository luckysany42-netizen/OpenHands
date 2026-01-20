@extends('layouts.dashboard')

@section('title')
    Learn More | OpenHands
@endsection

@push('addon-script')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.content-text').forEach(function (block) {
        const btn = block.querySelector('.read-more-btn');
        const contentBox = block.closest('.content-box');
        if (!btn || !contentBox) return;

        btn.addEventListener('click', function () {
            const expanded = block.classList.toggle('expanded');
            block.classList.toggle('collapsed', !expanded);

            // 🔑 supaya foto + progress ikut tinggi text
            contentBox.classList.toggle('expanded', expanded);

            btn.textContent = expanded ? 'Tutup' : 'Selengkapnya';
        });
    });
});
</script>
@endpush

@push('addon-style')
<link href="{{ url('assets/css/learn.css') }}" rel="stylesheet">
@endpush

@section('content')

{{-- ========================= --}}
{{-- SLIDER + TOMBOL BACK --}}
{{-- ========================= --}}
<div class="container-fluid p-0 mb-5">
    <div id="learnCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="w-100" src="/assets/img/carousel-1.jpg" alt="Campaign">

                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">

                                <h1 class="display-4 text-white mb-3">
                                    {{ $campaign->name }}
                                </h1>

                                <p class="text-white-50 mb-4">
                                    Detail Campaign
                                </p>

                                {{-- TOMBOL BACK --}}
                        <a href="{{ route('causes') }}"
                            class="btn px-5 py-3 rounded-pill fw-bold"
                            style="
                                font-size: 20px;
                                background: #FF7A00;
                                color: #fff;
                                border: none;
                                transition: .3s;
                                box-shadow: 0 0 18px rgba(255,122,0,0.4);
                            ">
                                ← Kembali
                            </a>


                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

{{-- ========================= --}}
{{-- CONTENT BOX --}}
{{-- ========================= --}}
<div class="container mb-5">

    <div class="content-box">

        <div class="content-wrapper">

            {{-- KIRI --}}
            <div class="content-photo">
                <img src="{{ Storage::url($campaign->photos) }}" alt="Image">

                <div class="progress-wrapper">
                    <div class="d-flex justify-content-between mb-1">
                        <small>Terkumpul</small>
                        <small>{{ $progress }}%</small>
                    </div>

                    <div class="progress">
                        <div class="progress-bar" style="width: {{ $progress }}%"></div>
                    </div>

                    <small class="text-muted">
                        Rp{{ number_format($campaign->current_price) }}
                        dari Rp{{ number_format($campaign->goal_price) }}
                    </small>
                </div>
            </div>

            {{-- KANAN --}}
            <div class="content-right">
                <h2 class="content-title">{{ $campaign->name }}</h2>

                <div class="content-text collapsed">
                    <div class="content-text-inner">
                        {!! $campaign->description !!}
                    </div>
                    <button type="button" class="read-more-btn">Selengkapnya</button>
                </div>
            </div>

        </div>

        {{-- DONATE --}}
        <div class="donate-now-wrapper">
            <a class="btn btn-primary" href="{{ route('donate', $campaign->id) }}">
                Donate Now
                <span class="btn-circle">
                    <i class="fa fa-arrow-right"></i>
                </span>
            </a>
        </div>

    </div>

    {{-- ========================= --}}
    {{-- TABEL DONATUR --}}
    {{-- ========================= --}}
    <div class="donatur-section">
        <div class="table-responsive">
            <table class="table table-sm align-middle text-center">
                <thead>
                    <tr>
                        <th>Donatur</th>
                        <th>Donasi</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($donations as $donation)
                        @php
                            $name = substr($donation->username, 0, 3) . '**';
                            $amount = substr($donation->donate_price, 0, 2)
                                . str_repeat('0', strlen($donation->donate_price) - 2);
                        @endphp
                        <tr>
                            <td>{{ $name }}</td>
                            <td>Rp{{ number_format($amount) }}</td>
                            <td>{{ $donation->created_at->format('d M Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-muted">
                                Belum ada donasi
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection
