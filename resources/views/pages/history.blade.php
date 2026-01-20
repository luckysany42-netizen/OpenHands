@extends('layouts.dashboard')

@section('title')
    Donation History | OpenHands
@endsection

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Riwayat Donasi</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/">Beranda</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('donate') }}">Donasi</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Riwayat Donasi</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<div class="container py-5">

    <h2 class="mb-4 fw-bold text-orange">Riwayat Donasi Anda</h2>

    @if (session('success'))
        <div class="alert alert-success mb-4">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger mb-4">{{ session('error') }}</div>
    @endif

    @if ($transactions->isEmpty())
        <div class="text-center py-5">
            <img src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png" width="100" class="mb-3 opacity-75">
            <h4 class="text-muted">Anda belum memiliki riwayat donasi</h4>
            <a href="{{ route('donate') }}" class="btn btn-orange mt-3 px-4 py-2">Mulai Donasi Sekarang</a>
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
                        <th>Status</th>
                        <th>Tanggal Donasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $index => $t)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $t->product->name ?? 'Unknown' }}</td>
                            <td class="text-orange fw-bold">Rp {{ number_format($t->donate_price, 0, ',', '.') }}</td>

                            <td>
                                @if ($t->status === 'success')
                                    <span class="badge bg-success">Sukses</span>
                                @elseif ($t->status === 'pending')
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @else
                                    <span class="badge bg-danger">Gagal</span>
                                @endif
                            </td>

                            <td>{{ $t->created_at->format('d M Y, H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    @endif
</div>

<style>
    .text-orange { color: #ff7a00 !important; }
    .bg-orange { background-color: #ff7a00 !important; }
    .btn-orange {
        background-color: #ff7a00;
        color: white;
        border-radius: 8px;
        transition: 0.3s;
    }
    .btn-orange:hover {
        background-color: #e46d00;
    }
</style>

@endsection
