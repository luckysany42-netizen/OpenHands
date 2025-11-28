<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - OpenHands</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 5px 14px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #3b82f6;
            border: none;
            color: white;
            border-radius: 6px;
            font-size: 16px;
        }

        .link {
            text-align: center;
            margin-top: 15px;
        }

        .link a {
            color: #3b82f6;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="form-container">

        <h2>Login</h2>

        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif

        @if($errors->any())
            <div style="color: red;">
                <ul style="padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf

            <input type="email" name="email" placeholder="Email" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>

            <div class="link">
                Belum punya akun? <a href="/register">Register</a>
            </div>
        </form>
    </div>

</body>
</html>
