@extends('layouts.dashboard')

@section('content')
<div class="container py-5">

    <h2 class="mb-4 fw-bold text-orange">Riwayat Donasi Anda</h2>

    {{-- Notifikasi sukses / error --}}
    @if (session('success'))
        <div class="alert alert-success mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger mb-4">
            {{ session('error') }}
        </div>
    @endif

    @if ($transactions->isEmpty())
        <div class="text-center py-5">
            <img src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png" width="100" class="mb-3 opacity-75">
            <h4 class="text-muted">Anda belum memiliki riwayat donasi</h4>
            <a href="{{ route('donate') }}" class="btn btn-orange mt-3 px-4 py-2">
                Mulai Donasi Sekarang
            </a>
        </div>
    @else

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">

            <table class="table table-hover mb-0">
                <thead class="bg-orange text-white">
                    <tr>
                        <th>No</th>
                        <th>Program Donasi</th>
                        <th>Nominal Donasi</th>
                        <th>Tanggal Donasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $index => $t)
                        <tr>
                            <td class="fw-bold">{{ $index + 1 }}</td>
                            <td>{{ $t->product->title ?? 'Unknown' }}</td>
                            <td class="text-orange fw-bold">Rp {{ number_format($t->donate_price, 0, ',', '.') }}</td>
                            <td>{{ $t->created_at->format('d M Y, H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    @endif
</div>

{{-- Custom CSS untuk warna orange khas OpenHands --}}
<style>
    .text-orange {
        color: #ff7a00 !important;
    }

    .bg-orange {
        background-color: #ff7a00 !important;
    }

    .btn-orange {
        background-color: #ff7a00;
        color: white;
        border-radius: 8px;
        transition: 0.3s;
    }

    .btn-orange:hover {
        background-color: #e46d00;
        color: white;
    }
</style>

@endsection
