<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Wisata</title>

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
            padding: 30px 0;
            background:
                linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)),
                url('https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=1920&q=80')
                center/cover no-repeat;
        }

        .register-card {
            width: 430px;
            padding: 40px;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.16);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
            color: white;
        }

        .register-card h1 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 30px;
        }

        .register-card > p {
            text-align: center;
            margin-bottom: 28px;
            color: rgba(255, 255, 255, 0.85);
        }

        .form-group {
            margin-bottom: 17px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
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

        .btn-register {
            width: 100%;
            padding: 14px;
            margin-top: 5px;
            border: none;
            border-radius: 12px;
            background: white;
            color: #333;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-register:hover {
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

        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .login-link a {
            color: white;
            font-weight: bold;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 500px) {
            .register-card {
                width: 90%;
                padding: 30px 25px;
            }
        }
    </style>
</head>

<body>

    <div class="register-card">

        <h1>Registrasi</h1>
        <p>Buat akun untuk memulai perjalananmu</p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="/register" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input
                    type="text"
                    id="nama_lengkap"
                    name="nama_lengkap"
                    value="{{ old('nama_lengkap') }}"
                    placeholder="Masukkan nama lengkap"
                    required
                >
            </div>

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
                <label for="no_telepon">No. Telepon</label>
                <input
                    type="text"
                    id="no_telepon"
                    name="no_telepon"
                    value="{{ old('no_telepon') }}"
                    placeholder="Masukkan nomor telepon"
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

            <button type="submit" class="btn-register">
                Daftar Sekarang
            </button>
        </form>

        <div class="login-link">
            Sudah punya akun?
            <a href="/login">Login</a>
        </div>

    </div>

</body>
</html>