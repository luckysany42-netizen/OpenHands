<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Anda</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #121212;
            color: white;
            font-family: 'Inter', sans-serif;
        }

        .profile-card {
            max-width: 500px;
            margin: 70px auto;
            padding: 35px;
            border-radius: 18px;
            background: rgba(255,255,255,0.07);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255,255,255,0.09);
            box-shadow: 0px 8px 30px rgba(0,0,0,0.4);
        }

        /* Avatar Placeholder */
        .avatar {
            width: 95px;
            height: 95px;
            border-radius: 50%;
            background: linear-gradient(135deg, #FF8A00, #FF6A00);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            font-weight: bold;
            margin: auto;
            box-shadow: 0 0 18px rgba(255,120,0,0.5);
        }

        /* Profile Image Preview */
        .preview-img {
            width: 95px;
            height: 95px;
            border-radius: 50%;
            object-fit: cover;
            margin: auto;
            display: block;
            box-shadow: 0 0 18px rgba(255,120,0,0.5);
        }

        .btn-save {
            background: linear-gradient(90deg,#FF9A32,#FF7A00);
            border: none;
            padding: 12px;
            border-radius: 12px;
            font-weight: 600;
        }

        .btn-danger {
            background: linear-gradient(135deg, #ff4b4b, #b30000);
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- Tombol Back -->
<a href="{{ route('home') }}" class="btn btn-secondary m-3">← Kembali</a>

<div class="profile-card">

    <!-- AVATAR / FOTO -->
    <div id="avatarWrapper" class="text-center mb-3">
        @if(Auth::user()->photo)
            <img id="profilePreview" src="{{ asset('profile_photos/' . Auth::user()->photo) }}" class="preview-img">
        @else
            <div id="initialAvatar" class="avatar">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>
        @endif
    </div>

    <h3 class="text-center mb-4 fw-bold">Profil Anda</h3>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Foto Profil</label>
            <input type="file" name="photo" class="form-control" id="uploadPhoto">
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
        </div>

        <div class="mb-3">
            <label>Password Baru (Opsional)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button type="submit" class="btn-save w-100">Simpan Perubahan</button>
    </form>

    <button class="btn btn-danger w-100 mt-3" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
        Hapus Akun
    </button>
</div>

<!-- MODAL HAPUS -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white border-danger">
            
            <div class="modal-header">
                <h5 class="modal-title fw-semibold">Konfirmasi Hapus Akun</h5>
                <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                Anda yakin ingin menghapus akun ini?
                <br><strong class="text-warning">Tindakan ini tidak bisa dibatalkan.</strong>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>

                <form action="{{ route('profile.delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Ya, Hapus</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- SCRIPT PREVIEW FOTO -->
<script>
document.getElementById('uploadPhoto').addEventListener('change', function(event) {

    let file = event.target.files[0];
    let preview = document.getElementById('profilePreview');
    let fallback = document.getElementById('initialAvatar');

    if (!preview) {
        preview = document.createElement("img");
        preview.id = "profilePreview";
        preview.classList.add("preview-img");
        document.getElementById("avatarWrapper").appendChild(preview);
    }

    preview.src = URL.createObjectURL(file);
    preview.style.display = "block";

    if (fallback) fallback.style.display = "none";
});
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
