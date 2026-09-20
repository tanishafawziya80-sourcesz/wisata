<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Wisata</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background:
                linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)),
                url('https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=1920&q=80')
                center/cover no-repeat;
        }

        .login-card {
            width: 400px;
            padding: 40px;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.16);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
            color: white;
        }

        .login-card h1 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 30px;
        }

        .login-card p {
            text-align: center;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.85);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 13px 15px;
            border: none;
            outline: none;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            font-size: 14px;
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 12px;
            background: #ffffff;
            color: #333;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }

        .error {
            background: rgba(255, 0, 0, 0.2);
            border: 1px solid rgba(255, 100, 100, 0.5);
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        @media (max-width: 500px) {
            .login-card {
                width: 90%;
                padding: 30px 25px;
            }
        }
        .register-link {
    text-align: center;
    margin-top: 18px;
    margin-bottom: 0;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.85);
}

.register-link a {
    color: white;
    font-weight: bold;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}
    </style>
</head>

<body>

    <div class="login-card">

        <h1>Login</h1>
        <p>Masuk ke sistem wisata</p>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <button type="submit" class="btn-login">
                Login
            </button>

            <p class="register-link">
                Belum punya akun?
              <a href="{{ route('register') }}">Daftar</a>
            </p>
        </form>

    </div>

</body>
</html>