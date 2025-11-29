<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | OpenHands</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * { font-family: 'Poppins', sans-serif; }

        /* BACKGROUND THEME (Dark + Orange Glow) */
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

        /* AURORA Lines */
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

        /* Glow Particles */
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

        /* LOGIN CARD */
        .login-card {
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(18px);
            padding: 45px;
            border-radius: 26px;
            width: 430px;
            border: 1px solid rgba(255,255,255,0.15);
            box-shadow: 0 0 30px rgba(255,122,0,0.35),
                        inset 0 0 18px rgba(255,122,0,0.1);
            animation: fadeIn .7s ease-out;
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

        h3 {
            color: #ffffff;
            font-weight: 700;
            letter-spacing: .5px;
        }

        /* INPUTS */
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

        /* BUTTON ORANGE */
        .btn-glow {
            background: linear-gradient(135deg, #FF9A32, #FF7A00);
            border: none;
            height: 50px;
            border-radius: 14px;
            font-weight: 600;
            color: white;
            font-size: 1.1em;
            box-shadow: 0 0 20px rgba(255,122,0,0.5);
            transition: 0.25s;
        }

        .btn-glow:hover {
            box-shadow: 0 0 28px rgba(255,122,0,0.75);
            transform: scale(1.02);
        }

        /* Register Link */
        .link-register {
            color: #FF7A00;
            text-decoration: none;
            font-weight: 600;
        }
        .link-register:hover { color: #ffc28a; }
    </style>
</head>
<body>

<!-- Aurora Lines -->
<div class="aurora">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
</div>

<!-- Glow Particles -->
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

<!-- LOGIN PAGE -->
<div class="d-flex justify-content-center align-items-center" style="min-height:100vh;">

    <div class="login-card text-center">

        <img src="{{ asset('assets/img/logo.png') }}" class="logo">

        <h3 class="mb-4">Welcome Back </h3>

        @if($errors->has('loginError'))
    <div style="
        background:#2A2A2A;
        border-left:5px solid #FF7A00;
        padding:12px;
        border-radius:8px;
        margin-bottom:15px;
        color:#ffb16e;">
        ⚠️ {{ $errors->first('loginError') }}
    </div>
@endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            @if($errors->has('loginError'))
                <div class="alert alert-danger text-start" style="font-size:14px;">
                {{ $errors->first('loginError') }}
            </div>
        @endif


            <div class="mb-3 text-start">
                <label class="text-white-50 fw-semibold">Email</label>
                <input type="email" class="form-control" name="email" required placeholder="Masukkan email...">
            </div>

            <div class="mb-4 text-start">
                <label class="text-white-50 fw-semibold">Password</label>
                <input type="password" class="form-control" name="password" required placeholder="Masukkan password...">
            </div>

            <button type="submit" class="btn-glow w-100">Login</button>

            <p class="mt-3 text-white-50">
                Belum punya akun?
                <a href="{{ route('register') }}" class="link-register">Daftar Sekarang</a>
            </p>

        </form>

    </div>

</div>

</body>
</html>
