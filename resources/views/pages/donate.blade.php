@extends('layouts.dashboard')

@section('title')
    Donate | Donation
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Donate</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Donate</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Donate Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Donasi Sekarang</div>
                    <h1 class="display-6 mb-5">Satu Aksi Anda, Ribuan Harapan Hidup Kembali</h1>
                    <p class="mb-0">
                        Satu tindakan sederhana dapat membawa perubahan yang tak terbayangkan bagi banyak 
                        orang. Ketika kita memilih untuk membantu, kita tidak hanya memberi bantuan 
                        sesaat kita menghidupkan kembali harapan yang mungkin telah lama padam. 
                        Ribuan orang menantikan uluran tangan dan kepedulian kita. Melalui satu aksi 
                        kebaikan, kita bisa membuka pintu kesempatan, menguatkan semangat, dan 
                        mengembalikan senyuman di wajah mereka yang membutuhkan.
                    </p>
                </div>

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-secondary p-5">

                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="text" id="username" class="form-control bg-light border-0 shadow-sm"
                                        placeholder="Your Name"
                                        value="{{ auth()->check() ? auth()->user()->name : '' }}"
                                        {{ auth()->check() ? 'readonly' : '' }} required>
                                    <label for="username">Your Name</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating mb-4">
                                    <input type="email" id="email" class="form-control bg-light border-0 shadow-sm"
                                        placeholder="Your Email"
                                        value="{{ auth()->check() ? auth()->user()->email : '' }}"
                                        {{ auth()->check() ? 'readonly' : '' }} required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <select id="category_id" class="form-control bg-light border-0 shadow-sm">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="category_id">Choose Category</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <select id="products_id" class="form-control bg-light border-0 shadow-sm">
                                        @foreach ($product as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="products_id">Choose Campaign</label>
                                </div>
                            </div>

                            <!-- NOMINAL PILIHAN -->
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

                            <!-- NOMINAL LAINNYA -->
                            <div class="col-12 mt-3">
                                <div class="form-floating">
                                    <input type="number" id="custom_amount" class="form-control bg-light border-0 shadow-sm"
                                           placeholder="Masukkan nominal lainnya (opsional)">
                                    <label for="custom_amount">Nominal Lainnya (Opsional)</label>
                                </div>
                                <small class="text-white-50">Jika diisi, pilihan nominal di atas akan diabaikan.</small>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="button" onclick="payNow()" class="btn btn-primary px-5" style="height: 60px;">
                                    Donate Now
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </button>
                            </div>

                        </div> <!-- row -->
                    </div> <!-- bg -->
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->

    <!-- Midtrans JS -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}">
    </script>

    <script>
        function payNow() {
            let name = document.getElementById("username").value;
            let email = document.getElementById("email").value;

            let selectedAmount = document.querySelector('input[name="donate_price"]:checked')?.value;
            let customAmount = document.getElementById("custom_amount").value;

            // Pilih nominal: custom > radio
            let amount = customAmount !== "" ? customAmount : selectedAmount;

            // Validasi minimal
            if (amount < 1000) {
                alert("Nominal donasi minimal Rp 1.000");
                return;
            }

            let category_id = document.getElementById("category_id").value;
            let product_id = document.getElementById("products_id").value;

            fetch("/pay", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    name: name,
                    email: email,
                    amount: amount,
                    category_id: category_id,
                    products_id: product_id
                })
            })
            .then(res => res.json())
            .then(data => {
                snap.pay(data.snapToken, {
                    onSuccess: function(result) {
                        alert("Pembayaran Berhasil!");
                        location.reload();
                    },
                    onPending: function(result) {
                        alert("Menunggu pembayaran...");
                    },
                    onError: function(result) {
                        alert("Pembayaran gagal.");
                    }
                });
            });
        }
    </script>

@endsection
