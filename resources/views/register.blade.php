<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrasi - WISATA.</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 35px 20px;

            position: relative;
            overflow-x: hidden;

            background:
                url('https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=2000&q=90')
                center / cover no-repeat;
        }

        /* ================= OVERLAY TERANG ================= */

        body::before {
            content: "";

            position: fixed;
            inset: 0;

            background:
                linear-gradient(
                    135deg,
                    rgba(225, 246, 255, 0.72),
                    rgba(255, 255, 255, 0.35),
                    rgba(205, 237, 249, 0.55)
                );

            z-index: 0;
        }

        /* ================= CAHAYA ================= */

        body::after {
            content: "";

            position: fixed;

            width: 500px;
            height: 500px;

            border-radius: 50%;

            background:
                rgba(255,255,255,.45);

            filter: blur(80px);

            top: -180px;
            right: -120px;

            z-index: 0;
        }

        /* ================= REGISTER CARD ================= */

        .register-card {
            position: relative;

            z-index: 2;

            width: 430px;

            padding: 42px;

            border-radius: 32px;

            background:
                rgba(255,255,255,.72);

            border:
                1px solid rgba(255,255,255,.95);

            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);

            box-shadow:
                0 30px 80px rgba(45,100,125,.18);

            color: #17384d;

            animation:
                fadeUp .8s ease;
        }

        /* ================= BRAND ================= */

        .brand {
            text-align: center;

            margin-bottom: 27px;
        }

        .brand h1 {
            font-size: 34px;

            font-weight: 900;

            letter-spacing: 3px;

            color: #123c57;
        }

        .brand h1 span {
            color: #65afd0;
        }

        .brand p {
            margin-top: 8px;

            font-size: 13px;

            color: #718694;
        }

        /* ================= ERROR ================= */

        .error {
            padding: 12px 14px;

            margin-bottom: 20px;

            border-radius: 14px;

            background:
                rgba(255,225,225,.8);

            border:
                1px solid rgba(220,100,100,.2);

            color: #a33d4d;

            font-size: 13px;

            font-weight: 600;

            line-height: 1.6;
        }

        /* ================= FORM ================= */

        .form-group {
            margin-bottom: 17px;
        }

        .form-group label {
            display: block;

            margin-bottom: 8px;

            color: #31566b;

            font-size: 13px;

            font-weight: 700;
        }

        .form-group input {
            width: 100%;

            padding: 14px 16px;

            border-radius: 15px;

            border:
                1px solid rgba(150,190,205,.35);

            outline: none;

            background:
                rgba(255,255,255,.82);

            color: #17384d;

            font-size: 14px;

            transition: .3s;
        }

        .form-group input::placeholder {
            color: #9aaeb8;
        }

        .form-group input:focus {
            border-color: #62acd0;

            background: white;

            box-shadow:
                0 0 0 4px rgba(98,172,208,.12);
        }

        /* ================= BUTTON ================= */

        .btn-register {
            width: 100%;

            padding: 14px;

            margin-top: 5px;

            border: none;

            border-radius: 16px;

            background:
                linear-gradient(
                    135deg,
                    #2e789d,
                    #63b4d4
                );

            color: white;

            font-size: 14px;

            font-weight: 800;

            cursor: pointer;

            box-shadow:
                0 12px 28px rgba(65,145,177,.25);

            transition: .3s;
        }

        .btn-register:hover {
            transform: translateY(-3px);

            box-shadow:
                0 18px 35px rgba(65,145,177,.32);
        }

        /* ================= LOGIN LINK ================= */

        .login-link {
            text-align: center;

            margin-top: 20px;

            font-size: 13px;

            color: #718694;
        }

        .login-link a {
            color: #2d7699;

            font-weight: 800;

            text-decoration: none;

            transition: .2s;
        }

        .login-link a:hover {
            color: #123c57;

            text-decoration: underline;
        }

        /* ================= DECORATION ================= */

        .decoration {
            position: fixed;

            z-index: 1;

            border-radius: 50%;

            pointer-events: none;
        }

        .circle-one {
            width: 220px;
            height: 220px;

            left: -80px;
            bottom: -70px;

            background:
                rgba(110,190,220,.25);

            filter: blur(4px);
        }

        .circle-two {
            width: 150px;
            height: 150px;

            right: 8%;
            bottom: 8%;

            background:
                rgba(255,255,255,.45);

            filter: blur(5px);
        }

        /* ================= ANIMATION ================= */

        @keyframes fadeUp {

            from {
                opacity: 0;

                transform:
                    translateY(25px);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0);
            }
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 500px) {

            body {
                padding:
                    25px 15px;
            }

            .register-card {
                width: 100%;

                padding:
                    35px 25px;

                border-radius: 26px;
            }

            .brand h1 {
                font-size: 30px;
            }
        }
    </style>
</head>


<body>

    <!-- ================= DECORATION ================= -->

    <div class="decoration circle-one"></div>

    <div class="decoration circle-two"></div>


    <!-- ================= REGISTER CARD ================= -->

    <div class="register-card">


        <!-- BRAND -->

        <div class="brand">

            <h1>
                WISATA<span>.</span>
            </h1>

            <p>
                Buat akun dan mulai perjalananmu
            </p>

        </div>


        <!-- ERROR -->

        @if ($errors->any())

            <div class="error">

                @foreach ($errors->all() as $error)

                    <div>
                        {{ $error }}
                    </div>

                @endforeach

            </div>

        @endif


        <!-- FORM -->

        <form
            action="/register"
            method="POST"
        >

            @csrf


            <!-- NAMA -->

            <div class="form-group">

                <label for="nama_lengkap">
                    Nama Lengkap
                </label>

                <input
                    type="text"
                    id="nama_lengkap"
                    name="nama_lengkap"
                    value="{{ old('nama_lengkap') }}"
                    placeholder="Masukkan nama lengkap"
                    required
                >

            </div>


            <!-- EMAIL -->

            <div class="form-group">

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required
                >

            </div>


            <!-- TELEPON -->

            <div class="form-group">

                <label for="no_telepon">
                    No. Telepon
                </label>

                <input
                    type="text"
                    id="no_telepon"
                    name="no_telepon"
                    value="{{ old('no_telepon') }}"
                    placeholder="Masukkan nomor telepon"
                    required
                >

            </div>


            <!-- PASSWORD -->

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

            </div>


            <!-- BUTTON -->

            <button
                type="submit"
                class="btn-register"
            >
                Daftar Sekarang →
            </button>

        </form>


        <!-- LOGIN -->

        <div class="login-link">

            Sudah punya akun?

            <a href="{{ route('login') }}">
                Login sekarang
            </a>

        </div>


    </div>

</body>

</html>