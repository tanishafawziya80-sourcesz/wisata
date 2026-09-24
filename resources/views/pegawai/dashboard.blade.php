<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Pegawai - WISATA.</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            color: #ffffff;
            background: #0b1d2a;
            overflow-x: hidden;
        }


        /* =================================================
           HERO
        ================================================= */

        .hero {

            min-height: 100vh;

            background:
                linear-gradient(
                    rgba(0, 31, 52, .48),
                    rgba(0, 31, 52, .66)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2000&q=85");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            display: flex;

            flex-direction: column;

            position: relative;
        }


        /* =================================================
           NAVBAR
        ================================================= */

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

            background: rgba(255,255,255,.10);

            backdrop-filter: blur(18px);

            border-bottom:
                1px solid rgba(255,255,255,.18);

            z-index: 1000;
        }


        .logo {

            color: white;

            text-decoration: none;

            font-size: 27px;

            font-weight: 800;

            letter-spacing: 2px;
        }


        .logo span {

            color: #9ddcff;
        }


        .nav-right {

            display: flex;

            align-items: center;

            gap: 18px;
        }


        .role-badge {

            padding: 9px 17px;

            border-radius: 30px;

            background:
                rgba(255,255,255,.16);

            border:
                1px solid rgba(255,255,255,.25);

            backdrop-filter: blur(10px);

            font-size: 13px;

            font-weight: 700;
        }


        .logout-btn {

            border: none;

            padding: 10px 19px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.94);

            color: #123c57;

            font-weight: 700;

            cursor: pointer;

            transition: .3s;
        }


        .logout-btn:hover {

            transform: translateY(-3px);

            background: white;

            box-shadow:
                0 10px 30px rgba(0,0,0,.20);
        }


        /* =================================================
           HERO CONTENT
        ================================================= */

        .hero-content {

            width: 86%;

            max-width: 1250px;

            margin: auto;

            padding-top: 80px;

            animation:
                fadeUp 1s ease;
        }


        .small-title {

            font-size: 13px;

            letter-spacing: 4px;

            text-transform: uppercase;

            margin-bottom: 18px;

            color:
                rgba(255,255,255,.86);
        }


        .hero-content h1 {

            font-size:
                clamp(48px, 7vw, 82px);

            line-height: 1.02;

            max-width: 900px;

            margin-bottom: 22px;
        }


        .hero-content h1 span {

            color: #a7e2ff;
        }


        .hero-content p {

            max-width: 650px;

            line-height: 1.8;

            font-size: 17px;

            color:
                rgba(255,255,255,.88);

            margin-bottom: 30px;
        }


        .hero-btn {

            display: inline-block;

            padding: 14px 25px;

            border-radius: 30px;

            text-decoration: none;

            color: #123c57;

            background:
                rgba(255,255,255,.94);

            font-weight: 700;

            transition: .3s;
        }


        .hero-btn:hover {

            transform:
                translateY(-4px);

            box-shadow:
                0 15px 35px rgba(0,0,0,.20);
        }


        /* =================================================
           DECORATION
        ================================================= */

        .circle {

            position: absolute;

            border-radius: 50%;

            background:
                rgba(255,255,255,.08);

            backdrop-filter:
                blur(4px);

            animation:
                float 5s ease-in-out infinite;

            pointer-events: none;
        }


        .circle.one {

            width: 170px;

            height: 170px;

            right: 8%;

            top: 23%;
        }


        .circle.two {

            width: 80px;

            height: 80px;

            right: 24%;

            bottom: 18%;

            animation-delay: 1s;
        }


        /* =================================================
           OVERVIEW
        ================================================= */

        .section {

            padding: 105px 7%;

            background:
                linear-gradient(
                    180deg,
                    #edf7fb,
                    #f8fbfc
                );

            color: #17384d;
        }


        .section-title {

            text-align: center;

            max-width: 700px;

            margin:
                0 auto 55px;
        }


        .section-title span {

            color: #4c91b6;

            font-size: 13px;

            text-transform: uppercase;

            letter-spacing: 4px;

            font-weight: 700;
        }


        .section-title h2 {

            margin-top: 12px;

            font-size:
                clamp(34px, 5vw, 52px);

            color: #123c57;
        }


        .section-title p {

            margin-top: 14px;

            color: #6c8190;

            line-height: 1.7;
        }


        /* =================================================
           OVERVIEW CARDS
        ================================================= */

        .cards {

            max-width: 1250px;

            margin: auto;

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 25px;
        }


        .card {

            min-height: 235px;

            padding: 30px;

            border-radius: 28px;

            background:
                rgba(255,255,255,.62);

            backdrop-filter:
                blur(18px);

            border:
                1px solid rgba(255,255,255,.85);

            box-shadow:
                0 18px 45px rgba(27,71,93,.08);

            transition: .35s;

            animation:
                fadeUp .9s ease;
        }


        .card:hover {

            transform:
                translateY(-9px);

            box-shadow:
                0 28px 60px rgba(27,71,93,.14);
        }


        .icon {

            width: 60px;

            height: 60px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 20px;

            background:
                rgba(190,225,239,.50);

            color: #28617d;

            font-size: 20px;

            font-weight: 800;

            margin-bottom: 22px;
        }


        .card h3 {

            color: #123c57;

            font-size: 21px;

            margin-bottom: 10px;
        }


        .card p {

            color: #687f8d;

            line-height: 1.7;

            font-size: 14px;
        }


        /* =================================================
           TUGAS PEGAWAI
        ================================================= */

        .pegawai-section {

            padding: 110px 7%;

            background:
                linear-gradient(
                    180deg,
                    #f8fbfc,
                    #e9f5f9
                );

            color: #17384d;
        }


        .pegawai-container {

            max-width: 1250px;

            margin: auto;
        }


        .pegawai-heading {

            margin-bottom: 55px;
        }


        /* =================================================
           LIST TUGAS
        ================================================= */

        .pegawai-list {

            display: flex;

            flex-direction: column;

            gap: 30px;
        }


        /* =================================================
           TASK CARD
        ================================================= */

        .pegawai-card {

            min-height: 310px;

            border-radius: 32px;

            background-size: cover;

            background-position: center;

            position: relative;

            overflow: hidden;

            border:
                1px solid rgba(255,255,255,.80);

            box-shadow:
                0 25px 60px rgba(27,71,93,.13);

            transition:
                transform .45s ease,
                box-shadow .45s ease;

            animation:
                fadeUp .8s ease;
        }


        .pegawai-card:hover {

            transform:
                translateY(-7px);

            box-shadow:
                0 35px 75px rgba(27,71,93,.20);
        }


        /* =================================================
           TASK CONTENT
        ================================================= */

        .pegawai-card-content {

            min-height: 310px;

            width: 100%;

            padding: 45px 50px;

            display: flex;

            align-items: center;

            gap: 30px;

            color: white;
        }


        .pegawai-number {

            width: 68px;

            height: 68px;

            min-width: 68px;

            border-radius: 22px;

            display: flex;

            align-items: center;

            justify-content: center;

            background:
                rgba(255,255,255,.14);

            border:
                1px solid rgba(255,255,255,.30);

            backdrop-filter:
                blur(15px);

            font-size: 18px;

            font-weight: 700;

            letter-spacing: 1px;
        }


        .pegawai-card h3 {

            font-size: 34px;

            margin-bottom: 10px;

            color: white;

            letter-spacing: -.5px;
        }


        .pegawai-card p {

            max-width: 570px;

            color:
                rgba(255,255,255,.86);

            font-size: 15px;

            line-height: 1.8;

            margin-bottom: 20px;
        }


        /* =================================================
           BUTTON
        ================================================= */

        .pegawai-link {

            display: inline-block;

            padding: 11px 21px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.94);

            color: #123c57;

            text-decoration: none;

            font-size: 13px;

            font-weight: 700;

            transition: .3s;

            backdrop-filter:
                blur(10px);
        }


        .pegawai-link:hover {

            transform:
                translateY(-3px);

            background: white;

            box-shadow:
                0 12px 30px rgba(0,0,0,.20);
        }


        /* =================================================
           CTA
        ================================================= */

        .cta {

            min-height: 450px;

            padding: 90px 7%;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            background:
                linear-gradient(
                    rgba(6,44,64,.66),
                    rgba(6,44,64,.72)
                ),
                url("https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=2000&q=85");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;
        }


        .cta-content {

            max-width: 760px;

            animation:
                fadeUp 1s ease;
        }


        .cta h2 {

            font-size:
                clamp(35px, 5vw, 56px);

            margin-bottom: 18px;
        }


        .cta p {

            line-height: 1.8;

            color:
                rgba(255,255,255,.85);

            margin-bottom: 28px;
        }


        /* =================================================
           FOOTER
        ================================================= */

        footer {

            padding: 32px 7%;

            background: #092333;

            text-align: center;

            color:
                rgba(255,255,255,.65);

            font-size: 13px;
        }


        /* =================================================
           ANIMATION
        ================================================= */

        @keyframes fadeUp {

            from {

                opacity: 0;

                transform:
                    translateY(35px);
            }

            to {

                opacity: 1;

                transform:
                    translateY(0);
            }
        }


        @keyframes float {

            0%,
            100% {

                transform:
                    translateY(0);
            }

            50% {

                transform:
                    translateY(-10px);
            }
        }


        /* =================================================
           RESPONSIVE
        ================================================= */

        @media (max-width: 850px) {

            .cards {

                grid-template-columns:
                    1fr 1fr;
            }

        }


        @media (max-width: 650px) {

            .navbar {

                padding:
                    0 5%;
            }


            .role-badge {

                display: none;
            }


            .hero-content {

                width: 90%;
            }


            .hero-content h1 {

                font-size: 48px;
            }


            .cards {

                grid-template-columns:
                    1fr;
            }


            .section,
            .pegawai-section {

                padding:
                    80px 5%;
            }


            .pegawai-card {

                min-height: 370px;

                border-radius: 26px;
            }


            .pegawai-card-content {

                min-height: 370px;

                padding: 35px;

                align-items:
                    flex-start;

                flex-direction:
                    column;

                justify-content:
                    center;
            }


            .pegawai-card h3 {

                font-size: 29px;
            }


            .pegawai-number {

                width: 58px;

                height: 58px;

                min-width: 58px;
            }


            .cta {

                min-height: 400px;

                padding:
                    70px 5%;
            }

        }

        /* =========================================
   ANIMATED CLOUDS
========================================= */

.clouds {
    position: fixed;
    inset: 0;

    width: 100%;
    height: 100%;

    overflow: hidden;

    pointer-events: none;

    z-index: 0;
}

/* semua isi dashboard tetap di atas awan */

.navbar,
.container {
    position: relative;
    z-index: 2;
}


/* =========================================
   CLOUD
========================================= */

.cloud {
    position: absolute;

    width: 150px;
    height: 45px;

    background: rgba(188, 225, 241, 0.58);

    border-radius: 50px;

    filter: blur(.3px);

    opacity: .65;

    animation:
        cloudMove 35s linear infinite;
}


/* bagian bulat awan */

.cloud span {
    position: absolute;

    display: block;

    background: rgba(7, 121, 156, 0.62);

    border-radius: 50%;
}


/* bulatan pertama */

.cloud span:nth-child(1) {

    width: 55px;
    height: 55px;

    left: 20px;
    bottom: 15px;

}


/* bulatan kedua */

.cloud span:nth-child(2) {

    width: 70px;
    height: 70px;

    left: 55px;
    bottom: 10px;

}


/* bulatan ketiga */

.cloud span:nth-child(3) {

    width: 48px;
    height: 48px;

    right: 15px;
    bottom: 13px;

}


/* =========================================
   POSISI AWAN
========================================= */

.cloud-1 {

    top: 20%;

    left: -180px;

    transform: scale(.8);

    animation-duration: 42s;

}


.cloud-2 {

    top: 34%;

    left: -220px;

    transform: scale(1.15);

    opacity: .45;

    animation-duration: 55s;

    animation-delay: -18s;

}


.cloud-3 {

    top: 52%;

    left: -170px;

    transform: scale(.65);

    opacity: .40;

    animation-duration: 48s;

    animation-delay: -30s;

}


.cloud-4 {

    top: 68%;

    left: -200px;

    transform: scale(.95);

    opacity: .35;

    animation-duration: 60s;

    animation-delay: -10s;

}


.cloud-5 {

    top: 82%;

    left: -180px;

    transform: scale(.55);

    opacity: .30;

    animation-duration: 50s;

    animation-delay: -25s;

}


.cloud-6 {

    top: 43%;

    left: -250px;

    transform: scale(1.35);

    opacity: .25;

    animation-duration: 70s;

    animation-delay: -40s;

}


/* =========================================
   GERAK AWAN
========================================= */

@keyframes cloudMove {

    0% {

        transform:
            translateX(0)
            scale(var(--cloud-scale, 1));

    }

    50% {

        transform:
            translateX(55vw)
            translateY(-12px)
            scale(var(--cloud-scale, 1));

    }

    100% {

        transform:
            translateX(115vw)
            translateY(5px)
            scale(var(--cloud-scale, 1));

    }

}

.header,
.stats,
.card,
.dashboard-content {
    position: relative;
    z-index: 3;
}

.operations-grid {
    width: 100%;

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 24px;

    margin-top: 55px;
}

@media (max-width: 1000px) {

    .operations-grid {
        grid-template-columns:
            repeat(2, 1fr);
    }

}


@media (max-width: 650px) {

    .operations-grid {
        grid-template-columns:
            1fr;
    }

}

    </style>

</head>


<body>


      <!-- ANIMATED CLOUDS -->
<div class="clouds">

    <div class="cloud cloud-1">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="cloud cloud-2">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="cloud cloud-3">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="cloud cloud-4">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="cloud cloud-5">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="cloud cloud-6">
        <span></span>
        <span></span>
        <span></span>
    </div>

</div>

    <!-- =================================================
         HERO
    ================================================= -->

    <section class="hero">


        <nav class="navbar">


            <a
                href="/pegawai/dashboard"
                class="logo"
            >
                WISATA<span>.</span>
            </a>


            <div class="nav-right">


                <div class="role-badge">
                    PEGAWAI
                </div>


                <form
                    action="/logout"
                    method="POST"
                >

                    @csrf

                    <button
                        type="submit"
                        class="logout-btn"
                    >
                        Logout
                    </button>

                </form>


            </div>


        </nav>



        <div class="circle one"></div>

        <div class="circle two"></div>



        <div class="hero-content">


            <div class="small-title">
                WISATA. • PEGAWAI DASHBOARD
            </div>


            <h1>

                Layani perjalanan,
                <span>
                    buat semuanya lebih mudah.
                </span>

            </h1>


            <p>

                Selamat datang,
                <strong>
                    {{ auth()->user()->nama_lengkap }}
                </strong>.

                Kelola proses perjalanan wisata dan bantu
                memastikan kebutuhan pelanggan berjalan
                dengan baik.

            </p>


            <a
                href="#tugas"
                class="hero-btn"
            >
                Lihat Tugas ↓
            </a>


        </div>


    </section>



    <!-- =================================================
         OVERVIEW
    ================================================= -->

    <section class="section">


        <div class="section-title">


            <span>
                Employee Overview
            </span>


            <h2>
                Operasional Perjalanan
            </h2>


            <p>

                Pegawai dapat menangani proses operasional
                perjalanan melalui data yang terhubung
                dengan sistem WISATA.

            </p>


        </div>



        <div class="cards">


            <!-- PEMESANAN -->

            <div class="card">


                <div class="icon">
                    01
                </div>


                <h3>
                    Pemesanan
                </h3>


                <p>

                    Melihat dan menangani proses pemesanan
                    perjalanan wisata pelanggan.

                </p>


            </div>



            <!-- PEMBAYARAN -->

<div class="card">

    <div class="icon">
        02
    </div>

    <h3>
        Pembayaran
    </h3>

    <p>
        Membantu proses pemeriksaan dan
        pengelolaan pembayaran pelanggan.
    </p>

</div>



<!-- E-TICKET -->

<a href="/pegawai/e-ticket"
   class="card"
   style="text-decoration: none;">

    <div class="icon">
        03
    </div>

    <h3>
        E-Ticket
    </h3>

    <p>
        Menangani informasi dokumen perjalanan
        yang berkaitan dengan pelanggan.
    </p>

</a>



<!-- DOKUMEN -->

<div class="card">

    <div class="icon">
        04
    </div>

    <h3>
        Dokumen
    </h3>

    <p>
        Mengelola dokumen perjalanan
        yang berkaitan dengan pelanggan.
    </p>

</div>



<!-- PAKET WISATA -->

<div class="card">

    <div class="icon">
        05
    </div>

    <h3>
        Paket Wisata
    </h3>

    <p>
        Mengelola informasi dan data
        paket wisata yang tersedia.
    </p>

</div>


</div>

</section>



    <!-- =================================================
         TUGAS PEGAWAI
    ================================================= -->

    <section
        class="pegawai-section"
        id="tugas"
    >


        <div class="pegawai-container">


            <div class="section-title pegawai-heading">


                <span>
                    Employee Workspace
                </span>


                <h2>
                    Tugas Pegawai
                </h2>


                <p>
                    Pilih bagian yang ingin ditangani.
                </p>


            </div>



            <div class="pegawai-list">


                <!-- =================================================
                     PEMESANAN
                ================================================= -->

                <div
                    class="pegawai-card"
                    style="
                        background-image:
                        linear-gradient(
                            90deg,
                            rgba(3,42,62,.84),
                            rgba(3,42,62,.45)
                        ),
                        url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1800&q=85');
                    "
                >


                    <div class="pegawai-card-content">


                        <div class="pegawai-number">
                            01
                        </div>


                        <div>


                            <h3>
                                Pemesanan
                            </h3>


                            <p>

                                Melihat dan menangani data
                                pemesanan pelanggan.

                            </p>


                            <a
                                href="/pegawai/pemesanan"
                                class="pegawai-link"
                            >
                                Kelola Pemesanan
                            </a>


                        </div>


                    </div>


                </div>



                <!-- =================================================
                     PEMBAYARAN
                ================================================= -->

                <div
                    class="pegawai-card"
                    style="
                        background-image:
                        linear-gradient(
                            90deg,
                            rgba(3,42,62,.84),
                            rgba(3,42,62,.45)
                        ),
                        url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1800&q=85');
                    "
                >


                    <div class="pegawai-card-content">


                        <div class="pegawai-number">
                            02
                        </div>


                        <div>


                            <h3>
                                Pembayaran
                            </h3>


                            <p>

                                Memeriksa informasi pembayaran
                                yang masuk ke dalam sistem.

                            </p>


                            <a
                                href="/pegawai/pembayaran"
                                class="pegawai-link"
                            >
                                Kelola Pembayaran
                            </a>


                        </div>


                    </div>


                </div>



                <!-- =================================================
                     DOKUMEN
                ================================================= -->

                <div
                    class="pegawai-card"
                    style="
                        background-image:
                        linear-gradient(
                            90deg,
                            rgba(3,42,62,.84),
                            rgba(3,42,62,.45)
                        ),
                        url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1800&q=85');
                    "
                >


                    <div class="pegawai-card-content">


                        <div class="pegawai-number">
                            03
                        </div>


                        <div>


                            <h3>
                                Dokumen
                            </h3>


                            <p>

                                Menangani dokumen yang berkaitan
                                dengan pemesanan perjalanan.

                            </p>


                            <a
                                href="/pegawai/dokumen"
                                class="pegawai-link"
                            >
                                Kelola Dokumen
                            </a>


                        </div>


                    </div>


                </div>



                <!-- =================================================
                     E-TICKET
                ================================================= -->

                <div
                    class="pegawai-card"
                    style="
                        background-image:
                        linear-gradient(
                            90deg,
                            rgba(3,42,62,.84),
                            rgba(3,42,62,.45)
                        ),
                        url('https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=1800&q=85');
                    "
                >


                    <div class="pegawai-card-content">


                        <div class="pegawai-number">
                            04
                        </div>


                        <div>


                            <h3>
                                E-Ticket
                            </h3>


                            <p>

                                Menangani informasi e-ticket
                                perjalanan pelanggan.

                            </p>


                            <a
                                href="/pegawai/e-ticket"
                                class="pegawai-link"
                            >
                                Kelola E-Ticket
                            </a>


                        </div>


                    </div>


                </div>



                <!-- =================================================
                     PAKET WISATA
                ================================================= -->

                <div
                    class="pegawai-card"
                    style="
                        background-image:
                        linear-gradient(
                            90deg,
                            rgba(3,42,62,.84),
                            rgba(3,42,62,.45)
                        ),
                        url('https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=1800&q=85');
                    "
                >


                    <div class="pegawai-card-content">


                        <div class="pegawai-number">
                            05
                        </div>


                        <div>


                            <h3>
                                Paket Wisata
                            </h3>


                            <p>

                                Melihat informasi paket wisata
                                yang tersedia untuk kebutuhan
                                operasional perjalanan.

                            </p>


                            <a
                                href="/paket-wisata"
                                class="pegawai-link"
                            >
                                Lihat Paket Wisata
                            </a>


                        </div>


                    </div>


                </div>


            </div>


        </div>


    </section>



    <!-- =================================================
         CTA
    ================================================= -->

    <section class="cta">


        <div class="cta-content">


            <h2>

                Perjalanan yang baik
                dimulai dari pelayanan.

            </h2>


            <p>

                WISATA. menghubungkan proses operasional
                dengan pengalaman pelanggan dalam satu
                sistem perjalanan wisata.

            </p>


            <a
                href="#tugas"
                class="hero-btn"
            >
                Mulai Bekerja
            </a>


        </div>


    </section>



    <!-- =================================================
         FOOTER
    ================================================= -->

    <footer>

        © {{ date('Y') }} WISATA.
        All Rights Reserved.

    </footer>


</body>

</html>