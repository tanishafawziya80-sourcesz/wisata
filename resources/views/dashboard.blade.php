<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Wisata</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {
            background: #f5f7fa;
            color: #1f2937;
        }


        /* ================= ANIMATIONS ================= */

        @keyframes fadeUp {

            from {
                opacity: 0;
                transform: translateY(35px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }


        @keyframes float {

            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

        }


        @keyframes slowZoom {

            from {
                background-size: 100%;
            }

            to {
                background-size: 108%;
            }

        }


        .hero-content {
            animation: fadeUp 1s ease forwards;
        }


        .hero {
            animation: slowZoom 12s ease-in-out infinite alternate;
        }


        .card {
            animation: fadeUp 0.8s ease forwards;
        }


        .card:nth-child(1) {
            animation-delay: 0.1s;
        }


        .card:nth-child(2) {
            animation-delay: 0.25s;
        }


        .card:nth-child(3) {
            animation-delay: 0.4s;
        }


        .icon {
            animation: float 3s ease-in-out infinite;
        }


        .feature {
            animation: fadeUp 0.9s ease forwards;
        }


        .feature:nth-child(1) {
            animation-delay: 0.1s;
        }


        .feature:nth-child(2) {
            animation-delay: 0.25s;
        }


        .feature:nth-child(3) {
            animation-delay: 0.4s;
        }


        .feature:nth-child(4) {
            animation-delay: 0.55s;
        }


        .hero-btn,
        .cta-btn,
        .logout-btn,
        .card-link {
            transition: all 0.3s ease;
        }


        .hero-btn:hover,
        .cta-btn:hover {
            transform: translateY(-4px) scale(1.04);
        }


        .logout-btn:hover {
            transform: translateY(-2px) scale(1.03);
        }



        /* ================= NAVBAR ================= */

        .navbar {

            position: fixed;

            top: 0;
            left: 0;

            width: 100%;

            height: 75px;

            padding: 0 7%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            background: rgba(255, 255, 255, 0.88);

            backdrop-filter: blur(15px);

            border-bottom: 1px solid rgba(0,0,0,0.06);

            z-index: 1000;

        }


        .logo {

            font-size: 25px;

            font-weight: 800;

            letter-spacing: 1px;

            color: #153e75;

        }


        .nav-right {

            display: flex;

            align-items: center;

            gap: 25px;

        }


        .welcome {

            font-size: 14px;

            color: #555;

        }


        .welcome strong {

            color: #153e75;

        }


        .logout-btn {

            padding: 10px 20px;

            border: none;

            border-radius: 30px;

            background: #153e75;

            color: white;

            cursor: pointer;

            font-weight: 600;

        }



        /* ================= HERO ================= */

        .hero {

            min-height: 620px;

            margin-top: 75px;

            padding: 100px 7%;

            display: flex;

            align-items: center;

            position: relative;

            overflow: hidden;

            background:

                linear-gradient(

                    90deg,

                    rgba(0,0,0,0.72),

                    rgba(0,0,0,0.28),

                    rgba(0,0,0,0.05)

                ),

                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1800&q=85");

            background-size: cover;

            background-position: center;

        }


        .hero-content {

            max-width: 650px;

            color: white;

        }


        .hero-small {

            font-size: 15px;

            letter-spacing: 3px;

            text-transform: uppercase;

            margin-bottom: 20px;

            opacity: 0.9;

        }


        .hero h1 {

            font-size: clamp(45px, 6vw, 78px);

            line-height: 1.05;

            margin-bottom: 25px;

        }


        .hero p {

            font-size: 18px;

            line-height: 1.7;

            max-width: 580px;

            opacity: 0.92;

        }


        .hero-btn {

            display: inline-block;

            margin-top: 35px;

            padding: 15px 28px;

            border-radius: 35px;

            background: white;

            color: #153e75;

            text-decoration: none;

            font-weight: 700;

        }


        .hero-btn:hover {

            transform: translateY(-3px);

        }



        /* ================= SECTION ================= */

        .section {

            padding: 90px 7%;

        }


        .section-title {

            text-align: center;

            margin-bottom: 50px;

        }


        .section-title span {

            color: #6b7280;

            font-size: 14px;

            letter-spacing: 2px;

            text-transform: uppercase;

        }


        .section-title h2 {

            margin-top: 10px;

            font-size: 38px;

            color: #153e75;

        }



        /* ================= GLASS CARDS ================= */

        .cards {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;

        }


        .card {

            background: rgba(255,255,255,0.72);

            backdrop-filter: blur(18px);

            border: 1px solid rgba(255,255,255,0.8);

            border-radius: 25px;

            padding: 35px;

            box-shadow: 0 15px 40px rgba(0,0,0,0.07);

            transition: 0.35s;

        }


        .card:hover {

            transform: translateY(-8px);

            box-shadow: 0 20px 50px rgba(0,0,0,0.12);

        }


        .icon {

            width: 58px;

            height: 58px;

            border-radius: 18px;

            background: #e8f0fb;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 27px;

            margin-bottom: 25px;

        }


        .card h3 {

            font-size: 22px;

            margin-bottom: 12px;

            color: #153e75;

        }


        .card p {

            color: #6b7280;

            line-height: 1.7;

            font-size: 15px;

        }


        .card-link {

            display: inline-block;

            margin-top: 22px;

            color: #153e75;

            font-weight: 700;

            text-decoration: none;

        }


        .card-link:hover {

            color: #2563eb;

            transform: translateX(5px);

        }



        /* ================= FEATURE AREA ================= */

        .feature-section {

            background: #eef3f8;

        }


        .feature-box {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 30px;

        }


        .feature {

            min-height: 280px;

            padding: 40px;

            border-radius: 28px;

            background: white;

            box-shadow: 0 15px 40px rgba(0,0,0,0.06);

            position: relative;

            overflow: hidden;

        }


        .feature h3 {

            font-size: 27px;

            color: #153e75;

            margin-bottom: 15px;

        }


        .feature p {

            color: #6b7280;

            line-height: 1.8;

            max-width: 500px;

        }


        .feature-number {

            position: absolute;

            right: 30px;

            bottom: 10px;

            font-size: 100px;

            font-weight: 800;

            color: rgba(21,62,117,0.06);

        }



        /* ================= CTA ================= */

        .cta {

            margin: 20px 7% 90px;

            padding: 70px;

            border-radius: 35px;

            text-align: center;

            color: white;

            background:

                linear-gradient(

                    135deg,

                    rgba(21,62,117,0.95),

                    rgba(37,99,235,0.85)

                );

        }


        .cta h2 {

            font-size: 40px;

            margin-bottom: 15px;

        }


        .cta p {

            opacity: 0.9;

            margin-bottom: 30px;

        }


        .cta-btn {

            display: inline-block;

            background: white;

            color: #153e75;

            padding: 14px 30px;

            border-radius: 30px;

            text-decoration: none;

            font-weight: 700;

        }



        /* ================= FOOTER ================= */

        footer {

            background: #102d52;

            color: white;

            padding: 55px 7% 25px;

        }


        .footer-content {

            display: grid;

            grid-template-columns: 2fr 1fr 1fr;

            gap: 50px;

            margin-bottom: 40px;

        }


        footer h3 {

            margin-bottom: 15px;

        }


        footer p {

            color: rgba(255,255,255,0.7);

            line-height: 1.7;

        }


        .footer-bottom {

            padding-top: 25px;

            border-top: 1px solid rgba(255,255,255,0.15);

            text-align: center;

            color: rgba(255,255,255,0.6);

            font-size: 13px;

        }



        /* ================= RESPONSIVE ================= */

        @media (max-width: 900px) {

            .cards {

                grid-template-columns: 1fr;

            }


            .feature-box {

                grid-template-columns: 1fr;

            }


            .footer-content {

                grid-template-columns: 1fr;

            }


            .hero {

                min-height: 550px;

            }


            .cta {

                padding: 50px 25px;

            }

        }


        @media (max-width: 600px) {

            .navbar {

                padding: 0 5%;

            }


            .welcome {

                display: none;

            }


            .section {

                padding: 65px 5%;

            }


            .hero {

                padding: 80px 5%;

            }


            .hero h1 {

                font-size: 45px;

            }


            .cta {

                margin-left: 5%;

                margin-right: 5%;

            }

        }

    </style>

</head>


<body>


    <!-- ================= NAVBAR ================= -->

    <nav class="navbar">

        <div class="logo">
            WISATA.
        </div>


        <div class="nav-right">

            <div class="welcome">

                Selamat datang,

                <strong>
                    {{ Auth::user()->nama_lengkap }}
                </strong>

            </div>


            <form
                action="{{ url('/logout') }}"
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



    <!-- ================= HERO ================= -->

    <section class="hero">

        <div class="hero-content">

            <div class="hero-small">
                Travel • Explore • Experience
            </div>


            <h1>
                Discover Your<br>
                Next Journey.
            </h1>


            <p>
                Temukan pengalaman perjalanan yang sesuai dengan
                pilihanmu dan nikmati perjalanan dengan lebih mudah.
            </p>


            <a
                href="#layanan"
                class="hero-btn"
            >
                Jelajahi Sekarang →
            </a>

        </div>

    </section>



    <!-- ================= LAYANAN ================= -->

    <section
        class="section"
        id="layanan"
    >

        <div class="section-title">

            <span>
                Explore Our Service
            </span>


            <h2>
                Perjalananmu Dimulai Di Sini
            </h2>

        </div>



        <div class="cards">


            <!-- ================= PAKET WISATA ================= -->

            <div class="card">

                <div class="icon">
                    🌴
                </div>


                <h3>
                    Paket Wisata
                </h3>


                <p>
                    Lihat dan pilih paket wisata yang tersedia
                    sesuai dengan kebutuhan perjalananmu.
                </p>


                <!-- LINK YANG SUDAH DIPERBAIKI -->

                <a
                    href="{{ route('paket-wisata.index') }}"
                    class="card-link"
                >
                    Lihat Paket →
                </a>

            </div>



            <!-- ================= PEMESANAN ================= -->

            <div class="card">

                <div class="icon">
                    🧳
                </div>


                <h3>
                    Pemesanan
                </h3>


                <p>
                    Lakukan pemesanan paket wisata dan lihat
                    informasi pemesanan perjalananmu.
                </p>


                <!-- LINK PEMESANAN -->

                <a
                    href="{{ route('pelanggan.pemesanan.index') }}"
                    class="card-link"
                >
                    Lihat Pemesanan →
                </a>

            </div>



            <!-- ================= STATUS ================= -->

            <div class="card">

                <div class="icon">
                    🎫
                </div>


                <h3>
                    Status & E-Ticket
                </h3>


                <p>
                    Periksa status perjalanan dan akses
                    E-Ticket atau E-Voucher setelah tersedia.
                </p>


                <a
                    href="{{ route('pelanggan.e-ticket') }}"
                    class="card-link"
                >
                    Cek Status →
                </a>

            </div>

        </div>

    </section>



    <!-- ================= INFORMASI PERJALANAN ================= -->

    <section class="section feature-section">

        <div class="section-title">

            <span>
                Your Travel Process
            </span>


            <h2>
                Semua Lebih Mudah
            </h2>

        </div>


        <div class="feature-box">


            <div class="feature">

                <h3>
                    Pilih Paket Wisata
                </h3>


                <p>
                    Temukan paket wisata yang sesuai dengan
                    perjalanan yang kamu inginkan.
                </p>


                <div class="feature-number">
                    01
                </div>

            </div>



            <div class="feature">

                <h3>
                    Lakukan Pemesanan
                </h3>


                <p>
                    Isi informasi pemesanan dan lengkapi
                    dokumen yang diperlukan.
                </p>


                <div class="feature-number">
                    02
                </div>

            </div>



            <div class="feature">

                <h3>
                    Pembayaran
                </h3>


                <p>
                    Lakukan pembayaran sesuai dengan
                    informasi pemesanan perjalanan.
                </p>


                <div class="feature-number">
                    03
                </div>

            </div>



            <div class="feature">

                <h3>
                    E-Ticket / E-Voucher
                </h3>


                <p>
                    Setelah proses selesai, E-Ticket atau
                    E-Voucher dapat diakses sesuai status pemesanan.
                </p>


                <div class="feature-number">
                    04
                </div>

            </div>

        </div>

    </section>



    <!-- ================= CTA ================= -->

    <section class="cta">

        <h2>
            Ready For Your Next Adventure?
        </h2>


        <p>
            Mulai perjalananmu dan temukan pengalaman baru.
        </p>


        <a
            href="#layanan"
            class="cta-btn"
        >
            Explore Now
        </a>

    </section>



    <!-- ================= FOOTER ================= -->

    <footer>

        <div class="footer-content">


            <div>

                <h3>
                    WISATA.
                </h3>


                <p>
                    Platform informasi dan pemesanan perjalanan
                    wisata untuk membantu perjalananmu menjadi
                    lebih mudah.
                </p>

            </div>



            <div>

                <h3>
                    Layanan
                </h3>


                <p>
                    Paket Wisata
                </p>


                <p>
                    Pemesanan
                </p>


                <p>
                    E-Ticket
                </p>

            </div>



            <div>

                <h3>
                    Perjalanan
                </h3>


                <p>
                    Explore
                </p>


                <p>
                    Booking
                </p>


                <p>
                    Experience
                </p>

            </div>

        </div>


        <div class="footer-bottom">

            © {{ date('Y') }} WISATA.
            All Rights Reserved.

        </div>

    </footer>


</body>

</html>