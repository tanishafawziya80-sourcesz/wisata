<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Paket Wisata - WISATA.</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {

            min-height: 100vh;

            color: white;

            overflow-x: hidden;

            background:
                linear-gradient(
                    rgba(3, 43, 61, .62),
                    rgba(4, 75, 91, .82)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=90");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;
        }


        /* =====================================================
           BACKGROUND
        ===================================================== */

        body::before {

            content: "";

            position: fixed;

            inset: 0;

            pointer-events: none;

            z-index: -3;

            background:
                radial-gradient(
                    circle at 15% 15%,
                    rgba(139,232,255,.20),
                    transparent 28%
                ),
                radial-gradient(
                    circle at 85% 25%,
                    rgba(255,255,255,.13),
                    transparent 25%
                ),
                radial-gradient(
                    circle at 50% 90%,
                    rgba(70,210,230,.18),
                    transparent 32%
                );
        }


        body::after {

            content: "";

            position: fixed;

            width: 700px;

            height: 700px;

            border-radius: 50%;

            top: -300px;

            right: -250px;

            background:
                radial-gradient(
                    circle,
                    rgba(142,230,255,.13),
                    transparent 68%
                );

            animation:
                floatingLight 8s ease-in-out infinite alternate;

            pointer-events: none;

            z-index: -2;
        }


        @keyframes floatingLight {

            from {
                transform:
                    translate3d(0,0,0)
                    scale(1);
            }

            to {
                transform:
                    translate3d(-70px,50px,0)
                    scale(1.15);
            }
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {

            position: fixed;

            top: 0;
            left: 0;

            width: 100%;

            height: 78px;

            padding: 0 7%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            background:
                rgba(255,255,255,.10);

            backdrop-filter:
                blur(22px);

            -webkit-backdrop-filter:
                blur(22px);

            border-bottom:
                1px solid rgba(255,255,255,.18);

            box-shadow:
                0 10px 40px rgba(0,0,0,.10);

            z-index: 1000;
        }


        .logo {

            color: white;

            text-decoration: none;

            font-size: 27px;

            font-weight: 850;

            letter-spacing: 2px;

            transition: .3s ease;
        }


        .logo span {

            color: #9cecff;

            text-shadow:
                0 0 18px rgba(156,236,255,.50);
        }


        .logo:hover {

            transform:
                translateY(-1px);

            letter-spacing: 3px;
        }


        .nav-right {

            display: flex;

            align-items: center;

            gap: 14px;
        }


        .role {

            padding: 9px 17px;

            border-radius: 30px;

            background:
                rgba(255,255,255,.11);

            border:
                1px solid rgba(255,255,255,.20);

            color:
                rgba(255,255,255,.90);

            font-size: 12px;

            font-weight: 750;

            letter-spacing: .7px;

            backdrop-filter:
                blur(15px);
        }


        .logout {

            border:
                1px solid rgba(255,255,255,.25);

            padding: 10px 19px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.91);

            color: #16465d;

            font-weight: 750;

            cursor: pointer;

            transition: .3s ease;
        }


        .logout:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 12px 30px rgba(0,0,0,.20);

            background:
                white;
        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {

            width: 88%;

            max-width: 1280px;

            margin: auto;

            padding-top: 130px;

            padding-bottom: 100px;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .header {

            margin-bottom: 32px;

            animation:
                fadeUp .8s ease both;
        }


        .small-title {

            font-size: 12px;

            letter-spacing: 4px;

            text-transform: uppercase;

            color: #a8edff;

            margin-bottom: 12px;

            font-weight: 700;
        }


        .header h1 {

            font-size:
                clamp(40px,6vw,64px);

            line-height: 1.05;

            margin-bottom: 14px;

            font-weight: 850;

            letter-spacing: -1.5px;

            text-shadow:
                0 10px 35px rgba(0,0,0,.18);
        }


        .header p {

            max-width: 720px;

            color:
                rgba(255,255,255,.74);

            line-height: 1.75;

            font-size: 15px;
        }


        /* =====================================================
           CARD
        ===================================================== */

        .card {

            position: relative;

            padding: 28px;

            border-radius: 32px;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,.145),
                    rgba(255,255,255,.075)
                );

            backdrop-filter:
                blur(25px);

            -webkit-backdrop-filter:
                blur(25px);

            border:
                1px solid rgba(255,255,255,.20);

            box-shadow:
                0 30px 90px rgba(0,0,0,.25);

            overflow: hidden;

            animation:
                fadeUp .9s ease both;
        }


        .card::before {

            content: "";

            position: absolute;

            width: 320px;

            height: 320px;

            top: -180px;

            right: -100px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(160,235,255,.16),
                    transparent 68%
                );

            pointer-events: none;
        }


        /* =====================================================
           GRID
        ===================================================== */

        .package-grid {

            display: grid;

            grid-template-columns:
                repeat(3,1fr);

            gap: 22px;

            position: relative;

            z-index: 2;
        }


        /* =====================================================
           PACKAGE
        ===================================================== */

        .package {

            overflow: hidden;

            border-radius: 24px;

            background:
                rgba(255,255,255,.085);

            border:
                1px solid rgba(255,255,255,.15);

            backdrop-filter:
                blur(18px);

            -webkit-backdrop-filter:
                blur(18px);

            box-shadow:
                0 18px 50px rgba(0,0,0,.15);

            transition:
                .35s ease;

            animation:
                fadeUp .8s ease both;
        }


        .package:hover {

            transform:
                translateY(-8px);

            background:
                rgba(255,255,255,.13);

            border-color:
                rgba(170,235,255,.30);

            box-shadow:
                0 25px 60px rgba(0,0,0,.25);
        }


        /* =====================================================
           IMAGE
        ===================================================== */

        .package-image {

            width: 100%;

            height: 210px;

            overflow: hidden;

            background:
                rgba(255,255,255,.08);
        }


        .package-image img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            transition:
                transform .5s ease;
        }


        .package:hover
        .package-image img {

            transform:
                scale(1.07);
        }


        .no-image {

            width: 100%;

            height: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            color:
                rgba(255,255,255,.45);

            font-size: 13px;
        }


        /* =====================================================
           CONTENT
        ===================================================== */

        .package-content {

            padding: 22px;
        }


        .package-title {

            color: white;

            font-size: 21px;

            font-weight: 800;

            margin-bottom: 10px;
        }


        .package-description {

            color:
                rgba(255,255,255,.62);

            font-size: 13px;

            line-height: 1.7;

            min-height: 44px;

            margin-bottom: 18px;
        }


        .package-price {

            color: #baf2ff;

            font-size: 20px;

            font-weight: 800;

            margin-bottom: 15px;
        }


        .package-price small {

            font-size: 11px;

            color:
                rgba(255,255,255,.48);

            font-weight: 500;
        }


        /* =====================================================
           INFO
        ===================================================== */

        .package-info {

            display: flex;

            justify-content: space-between;

            gap: 10px;

            padding-top: 14px;

            border-top:
                1px solid rgba(255,255,255,.10);
        }


        .info-item {

            display: flex;

            flex-direction: column;

            gap: 4px;
        }


        .info-label {

            color:
                rgba(255,255,255,.42);

            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: 1px;
        }


        .info-value {

            color:
                rgba(255,255,255,.88);

            font-size: 12px;

            font-weight: 700;
        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {

            padding: 70px 20px;

            text-align: center;

            color:
                rgba(255,255,255,.60);
        }


        .empty h2 {

            color: white;

            font-size: 25px;

            margin-bottom: 10px;
        }


        .empty p {

            font-size: 14px;

            line-height: 1.7;
        }


        /* =====================================================
           BACK
        ===================================================== */

        .back-btn {

            display: inline-flex;

            align-items: center;

            margin-top: 25px;

            padding: 12px 20px;

            border-radius: 25px;

            text-decoration: none;

            background:
                rgba(255,255,255,.90);

            color: #15465d;

            font-weight: 750;

            transition: .3s ease;

            box-shadow:
                0 8px 25px rgba(0,0,0,.10);
        }


        .back-btn:hover {

            transform:
                translateY(-4px);

            background:
                white;

            box-shadow:
                0 15px 35px rgba(0,0,0,.18);
        }


        /* =====================================================
           ANIMATION
        ===================================================== */

        @keyframes fadeUp {

            from {

                opacity: 0;

                transform:
                    translateY(30px);
            }

            to {

                opacity: 1;

                transform:
                    translateY(0);
            }
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media(max-width: 1000px) {

            .package-grid {

                grid-template-columns:
                    repeat(2,1fr);
            }
        }


        @media(max-width: 650px) {

            .navbar {

                padding:
                    0 5%;
            }


            .role {

                display: none;
            }


            .container {

                width: 92%;

                padding-top: 115px;
            }


            .card {

                padding: 17px;

                border-radius: 25px;
            }


            .package-grid {

                grid-template-columns:
                    1fr;
            }


            .header h1 {

                font-size: 42px;
            }

        }

    </style>

</head>


<body>


    <!-- =====================================================
         NAVBAR
    ===================================================== -->

    <nav class="navbar">

        <a
            href="/pegawai/dashboard"
            class="logo"
        >
            WISATA<span>.</span>
        </a>


        <div class="nav-right">

            <div class="role">
                PEGAWAI
            </div>


            <form
                action="/logout"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                    class="logout"
                >
                    Logout
                </button>

            </form>

        </div>

    </nav>



    <!-- =====================================================
         CONTENT
    ===================================================== -->

    <main class="container">


        <div class="header">

            <div class="small-title">
                Travel Operations
            </div>


            <h1>
                Paket Wisata
            </h1>


            <p>
                Lihat seluruh paket wisata yang tersedia
                dan informasi paket yang telah ditambahkan
                oleh admin.
            </p>

        </div>



        <div class="card">


            @forelse($paketWisata as $paket)

                <div class="package-grid">


                    <div class="package">


                        <!-- FOTO -->

                        <div class="package-image">

                            @if($paket->foto_paket)

                                <img
                                    src="{{ asset(
                                        'storage/' .
                                        $paket->foto_paket
                                    ) }}"
                                    alt="{{ $paket->nama_paket }}"
                                >

                            @else

                                <div class="no-image">
                                    Tidak ada foto
                                </div>

                            @endif

                        </div>



                        <!-- DATA -->

                        <div class="package-content">


                            <div class="package-title">

                                {{ $paket->nama_paket }}

                            </div>


                            <div class="package-description">

                                {{ $paket->deskripsi
                                    ?? 'Tidak ada deskripsi paket.'
                                }}

                            </div>


                            <div class="package-price">

                                Rp
                                {{ number_format(
                                    $paket->harga,
                                    0,
                                    ',',
                                    '.'
                                ) }}

                                <small>
                                    / paket
                                </small>

                            </div>


                            <div class="package-info">


                                <div class="info-item">

                                    <span class="info-label">
                                        ID Paket
                                    </span>

                                    <span class="info-value">

                                        {{ $paket->id_paket }}

                                    </span>

                                </div>


                                <div class="info-item">

                                    <span class="info-label">
                                        Status
                                    </span>

                                    <span class="info-value">

                                        Tersedia

                                    </span>

                                </div>


                            </div>


                        </div>


                    </div>


                </div>

            @empty


                <div class="empty">

                    <h2>
                        Belum Ada Paket Wisata
                    </h2>

                    <p>
                        Paket wisata yang ditambahkan
                        oleh admin akan muncul di halaman ini.
                    </p>

                </div>


            @endforelse


        </div>



        <a
            href="/pegawai/dashboard"
            class="back-btn"
        >
            Kembali ke Dashboard
        </a>


    </main>


</body>

</html>