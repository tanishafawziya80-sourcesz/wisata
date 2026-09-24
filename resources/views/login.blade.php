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
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 30px;

            color: #17384d;

            /*
            |--------------------------------------------------------------------------
            | BACKGROUND PEMANDANGAN TERANG
            |--------------------------------------------------------------------------
            */

            background:
                linear-gradient(
                    rgba(235, 248, 252, 0.30),
                    rgba(244, 250, 252, 0.45)
                ),
                url('https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=1920&q=85')
                center / cover no-repeat fixed;

            position: relative;

            overflow: hidden;
        }


        /*
        |--------------------------------------------------------------------------
        | EFEK CAHAYA
        |--------------------------------------------------------------------------
        */

        body::before {
            content: "";

            position: fixed;

            width: 450px;
            height: 450px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.30);

            filter: blur(80px);

            top: -180px;
            left: -150px;

            pointer-events: none;
        }

        body::after {
            content: "";

            position: fixed;

            width: 400px;
            height: 400px;

            border-radius: 50%;

            background: rgba(154, 220, 240, 0.25);

            filter: blur(80px);

            right: -150px;
            bottom: -150px;

            pointer-events: none;
        }


        /*
        |--------------------------------------------------------------------------
        | LOGIN CARD
        |--------------------------------------------------------------------------
        */

        .login-card {

            position: relative;

            z-index: 2;

            width: 410px;

            padding: 42px;

            border-radius: 30px;

            background:
                rgba(255, 255, 255, 0.68);

            border:
                1px solid rgba(255, 255, 255, 0.90);

            backdrop-filter: blur(22px);
            -webkit-backdrop-filter: blur(22px);

            box-shadow:
                0 25px 70px rgba(37, 83, 103, 0.18);

            animation:
                fadeUp .7s ease both;
        }


        /*
        |--------------------------------------------------------------------------
        | LOGO
        |--------------------------------------------------------------------------
        */

        .logo {

            text-align: center;

            color: #123c57;

            font-size: 29px;

            font-weight: 800;

            letter-spacing: 2px;

            margin-bottom: 7px;
        }

        .logo span {
            color: #5ba8c8;
        }


        /*
        |--------------------------------------------------------------------------
        | TITLE
        |--------------------------------------------------------------------------
        */

        .login-card h1 {

            text-align: center;

            color: #123c57;

            font-size: 30px;

            margin-bottom: 8px;
        }


        .login-card .subtitle {

            text-align: center;

            color: #718694;

            font-size: 14px;

            margin-bottom: 30px;
        }


        /*
        |--------------------------------------------------------------------------
        | ERROR
        |--------------------------------------------------------------------------
        */

        .error {

            background:
                rgba(255, 235, 238, 0.82);

            border:
                1px solid rgba(210, 90, 105, 0.25);

            color: #a33d4c;

            padding: 12px 14px;

            border-radius: 14px;

            margin-bottom: 20px;

            font-size: 13px;

            font-weight: 600;
        }


        /*
        |--------------------------------------------------------------------------
        | FORM
        |--------------------------------------------------------------------------
        */

        .form-group {

            margin-bottom: 20px;
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

            border-radius: 14px;

            border:
                1px solid rgba(120, 170, 190, 0.25);

            outline: none;

            background:
                rgba(255, 255, 255, 0.78);

            color: #17384d;

            font-size: 14px;

            transition: .3s;

            box-shadow:
                inset 0 1px 3px rgba(30, 80, 100, 0.04);
        }


        .form-group input::placeholder {

            color: #9aaab2;
        }


        .form-group input:focus {

            border-color: #70b8d5;

            background:
                rgba(255, 255, 255, 0.95);

            box-shadow:
                0 0 0 4px rgba(91, 168, 200, 0.12);
        }


        /*
        |--------------------------------------------------------------------------
        | BUTTON LOGIN
        |--------------------------------------------------------------------------
        */

        .btn-login {

            width: 100%;

            padding: 14px;

            border: none;

            border-radius: 16px;

            background:
                linear-gradient(
                    135deg,
                    #2d7699,
                    #5aa9c8
                );

            color: white;

            font-size: 14px;

            font-weight: 800;

            cursor: pointer;

            box-shadow:
                0 12px 28px rgba(67, 145, 177, 0.25);

            transition: .3s;
        }


        .btn-login:hover {

            transform: translateY(-3px);

            box-shadow:
                0 17px 35px rgba(67, 145, 177, 0.32);
        }


        /*
        |--------------------------------------------------------------------------
        | REGISTER
        |--------------------------------------------------------------------------
        */

        .register-link {

            text-align: center;

            margin-top: 20px;

            margin-bottom: 0;

            color: #718694;

            font-size: 13px;
        }


        .register-link a {

            color: #2d7699;

            font-weight: 800;

            text-decoration: none;

            margin-left: 3px;

            transition: .3s;
        }


        .register-link a:hover {

            color: #174f6c;

            text-decoration: underline;
        }


        /*
        |--------------------------------------------------------------------------
        | FOOTER KECIL
        |--------------------------------------------------------------------------
        */

        .bottom-text {

            text-align: center;

            margin-top: 22px;

            color: rgba(23, 56, 77, 0.60);

            font-size: 11px;

            letter-spacing: .5px;
        }


        /*
        |--------------------------------------------------------------------------
        | ANIMATION
        |--------------------------------------------------------------------------
        */

        @keyframes fadeUp {

            from {

                opacity: 0;

                transform:
                    translateY(25px)
                    scale(.98);
            }

            to {

                opacity: 1;

                transform:
                    translateY(0)
                    scale(1);
            }
        }


        /*
        |--------------------------------------------------------------------------
        | RESPONSIVE
        |--------------------------------------------------------------------------
        */

        @media (max-width: 500px) {

            body {

                padding: 20px;
            }

            .login-card {

                width: 100%;

                padding: 32px 25px;

                border-radius: 25px;
            }

            .login-card h1 {

                font-size: 27px;
            }

            .logo {

                font-size: 26px;
            }
        }

    </style>

</head>


<body>


    <div class="login-card">


        <!-- LOGO -->

        <div class="logo">
            WISATA<span>.</span>
        </div>


        <!-- TITLE -->

        <h1>
            Login
        </h1>


        <p class="subtitle">
            Masuk ke sistem perjalanan wisata
        </p>


        <!-- ERROR -->

        @if ($errors->any())

            <div class="error">
                {{ $errors->first() }}
            </div>

        @endif


        <!-- FORM -->

        <form action="/login" method="POST">

            @csrf


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


            <!-- LOGIN BUTTON -->

            <button
                type="submit"
                class="btn-login"
            >
                Login
            </button>


            <!-- REGISTER -->

            <p class="register-link">

                Belum punya akun?

                <a href="{{ route('register') }}">
                    Daftar
                </a>

            </p>

        </form>


        <div class="bottom-text">
            Jelajahi perjalananmu bersama WISATA.
        </div>

        <div class="bottom-text">
            *login pelanggan harus(pelanggan..@gmail.com)
        </div>



    </div>


</body>

</html>