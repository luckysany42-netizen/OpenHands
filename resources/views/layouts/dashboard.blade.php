<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    {{-- style link --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
</head>

<body>

    {{-- navbar --}}
    @include('includes.navbar')

    {{-- page content --}}
    @yield('content')

    {{-- footer --}}
    @include('includes.footer')

    {{-- ===============================
        DONATION TOAST CONTAINER
        (WAJIB SEBELUM SCRIPT)
    ================================ --}}
    @include('components.donation-toast')

    {{-- script link --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

    {{-- ===============================
        DONATION TOAST SCRIPT
    ================================ --}}
    <script>
document.addEventListener('DOMContentLoaded', function () {

    // 1️⃣ Pastikan container ada
    let container = document.getElementById('donation-toast-container');
    if (!container) {
        container = document.createElement('div');
        container.id = 'donation-toast-container';
        document.body.appendChild(container);
    }

    // 2️⃣ Ambil data donasi
    fetch('/donation-notifications')
        .then(res => res.json())
        .then(data => {

            if (!data.length) return;

            // 3️⃣ AMBIL DONASI TERBARU SAJA
            const latest = data[0]; // pastikan API kamu ORDER BY terbaru di atas

            // 4️⃣ Buat ID unik donasi
            const donationKey = latest.email + '-' + latest.amount;

            // 5️⃣ Cek apakah sudah pernah ditampilkan
            const lastShown = localStorage.getItem('lastDonationKey');
            if (lastShown === donationKey) {
                return; // ❌ STOP, jangan tampilkan lagi
            }

            // 6️⃣ Simpan sebagai sudah ditampilkan
            localStorage.setItem('lastDonationKey', donationKey);

            // 7️⃣ Buat toast
            const toast = document.createElement('div');
            toast.className = 'donation-toast';
            toast.innerHTML = `
                <span>💚</span>
                <span>
                    <strong>${latest.email}</strong>
                    telah berdonasi
                    <strong>Rp${latest.amount}</strong>
                </span>
            `;

            container.appendChild(toast);

            // 8️⃣ Hilang setelah 3 detik (SESUAI MAUMU)
            setTimeout(() => {
                toast.remove();
            }, 3000);

        })
        .catch(err => console.error('Toast error:', err));
});
</script>

</body>
</html>
