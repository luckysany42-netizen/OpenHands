<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | OpenHands</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    * { font-family: 'Poppins', sans-serif; }

    /* BACKGROUND DARK THEME */
    body {
        margin: 0;
        overflow: hidden;
        background: linear-gradient(135deg, #0f0f0f, #181818, #1f1f1f);
        background-size: 200% 200%;
        animation: bgFlow 10s ease infinite;
    }

    @keyframes bgFlow {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* AURORA LINES */
    .aurora {
        position: fixed;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
    }

    .line {
        position: absolute;
        width: 180%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #FF7A00, transparent);
        opacity: 0.15;
        animation: moveLine 10s linear infinite;
    }

    .line:nth-child(1) { top: 22%; animation-duration: 12s; }
    .line:nth-child(2) { top: 48%; animation-duration: 16s; opacity: .25; }
    .line:nth-child(3) { top: 70%; animation-duration: 14s; }

    @keyframes moveLine {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    /* Floating Glows */
    .glow {
        position: fixed;
        border-radius: 50%;
        background: rgba(255,122,0,0.7);
        filter: blur(10px);
        animation: glowFloat linear infinite;
        z-index: -1;
    }

    @keyframes glowFloat {
        from { transform: translateY(120vh) scale(0.6); opacity: 0; }
        60%  { opacity: 1; }
        to   { transform: translateY(-20vh) scale(1); opacity: 0; }
    }

    /* FORM CARD */
    .register-card {
        width: 430px;
        padding: 45px;
        border-radius: 26px;
        background: rgba(255,255,255,0.08);
        backdrop-filter: blur(18px);
        border: 1px solid rgba(255,255,255,0.15);
        box-shadow: 0 0 30px rgba(255,122,0,0.35),
                    inset 0 0 18px rgba(255,122,0,0.1);
        animation: fadeIn .7s ease-out;
        color: white;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(25px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .logo {
        width: 70px;
        margin-bottom: 10px;
        filter: drop-shadow(0px 3px 12px rgba(255,122,0,0.4));
    }

    .form-control {
        height: 50px;
        border-radius: 12px;
        border: 1px solid rgba(255,255,255,0.25);
        background: rgba(255,255,255,0.12);
        color: white;
        transition: 0.3s;
    }

    .form-control::placeholder { color: rgba(255,255,255,0.65); }

    .form-control:focus {
        background: rgba(255,255,255,0.18);
        border-color: #FF7A00;
        box-shadow: 0 0 18px rgba(255,122,0,0.6);
        color: white;
    }

    .btn-orange {
        background: linear-gradient(135deg, #FF9A32, #FF7A00);
        height: 50px;
        border: none;
        font-weight: 600;
        border-radius: 14px;
        transition: 0.25s;
        color: white;
        font-size: 1.1rem;
        box-shadow: 0 0 20px rgba(255,122,0,0.5);
    }

    .btn-orange:hover {
        box-shadow: 0 0 28px rgba(255,122,0,0.75);
        transform: scale(1.02);
    }

    .link-login {
        color: #FF7A00;
        text-decoration: none;
        font-weight: 600;
    }

    .link-login:hover { color: #ffc28a; }
</style>
</head>

<body>

<!-- Animated Lines -->
<div class="aurora">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
</div>

<script>
for (let i = 0; i < 12; i++) {
    let g = document.createElement("div");
    g.classList.add("glow");
    g.style.width = g.style.height = (Math.random() * 22 + 12) + "px";
    g.style.left = Math.random() * 100 + "vw";
    g.style.animationDuration = (Math.random() * 6 + 6) + "s";
    g.style.animationDelay = Math.random() * 4 + "s";
    document.body.appendChild(g);
}
</script>

<div class="d-flex justify-content-center align-items-center" style="min-height:100vh;">

    <div class="register-card text-center">

        <img src="{{ asset('assets/img/logo.png') }}" class="logo">

        <h3 class="mb-4 fw-bold">Buat Akun Baru</h3>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-3 text-start">
                <label class="text-white-50 fw-semibold">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama..." required>
            </div>

            <div class="mb-3 text-start">
                <label class="text-white-50 fw-semibold">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan email..." required>
            </div>

            <div class="mb-4 text-start">
                <label class="text-white-50 fw-semibold">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Buat password..." required>
            </div>

            <button type="submit" class="btn-orange w-100">Daftar</button>

            <p class="mt-3 text-white-50">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="link-login">Login</a>
            </p>

        </form>
    </div>
</div>

</body>
</html>
