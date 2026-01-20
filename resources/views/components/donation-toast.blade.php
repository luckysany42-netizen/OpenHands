<script>
document.addEventListener('DOMContentLoaded', function () {

    let container = document.getElementById('donation-toast-container');

    if (!container) {
        container = document.createElement('div');
        container.id = 'donation-toast-container';
        document.body.appendChild(container);
    }

    fetch('/donation-notifications')
        .then(res => res.json())
        .then(data => {

            if (!data.length) return;

            /**
             * Ambil index donasi terakhir yang sudah ditampilkan
             * default: -1 (belum ada apa-apa)
             */
            let lastShownIndex = localStorage.getItem('lastDonationIndex');
            lastShownIndex = lastShownIndex ? parseInt(lastShownIndex) : -1;

            // Ambil hanya donasi BARU
            const newDonations = data.slice(lastShownIndex + 1);

            if (!newDonations.length) return;

            let index = 0;

            function showToast() {
                if (index >= newDonations.length) return;

                const item = newDonations[index];

                const toast = document.createElement('div');
                toast.className = 'donation-toast';
                toast.innerHTML = `
                    <span>💚</span>
                    <span>
                        <strong>${item.email}</strong>
                        telah berdonasi
                        <strong>Rp${item.amount}</strong>
                    </span>
                `;

                container.appendChild(toast);

                setTimeout(() => {
                    toast.remove();
                    index++;

                    // Simpan index donasi terakhir yang sudah tampil
                    localStorage.setItem(
                        'lastDonationIndex',
                        lastShownIndex + index
                    );

                    showToast();
                }, 6000);
            }

            // delay awal biar natural
            setTimeout(showToast, 1500);
        });
});
</script>
