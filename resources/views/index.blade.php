<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Paket Wisata - WISATA.</title>


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
            background: #f4f7fa;
            color: #1f2937;
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

            background: rgba(255,255,255,0.88);

            backdrop-filter: blur(18px);

            border-bottom: 1px solid rgba(255,255,255,0.7);

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

            gap: 18px;
        }


        .back-btn {

            text-decoration: none;

            color: #153e75;

            font-weight: 600;

            transition: 0.3s;
        }


        .back-btn:hover {

            transform: translateX(-4px);
        }


        /* ================= HERO ================= */

        .hero {

            min-height: 520px;

            margin-top: 75px;

            padding: 90px 7%;

            display: flex;

            align-items: center;

            position: relative;

            overflow: hidden;

            background:

                linear-gradient(
                    90deg,
                    rgba(0,0,0,0.72),
                    rgba(0,0,0,0.32),
                    rgba(0,0,0,0.08)
                ),

                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1800&q=85");

            background-size: cover;

            background-position: center;

            animation: slowZoom 12s ease-in-out infinite alternate;
        }


        .hero-content {

            max-width: 680px;

            color: white;

            animation: fadeUp 1s ease forwards;
        }


        .hero-small {

            font-size: 14px;

            letter-spacing: 3px;

            text-transform: uppercase;

            margin-bottom: 18px;

            opacity: 0.9;
        }


        .hero h1 {

            font-size: clamp(45px, 6vw, 72px);

            line-height: 1.05;

            margin-bottom: 22px;
        }


        .hero p {

            font-size: 18px;

            line-height: 1.7;

            max-width: 570px;

            opacity: 0.92;
        }


        .hero-btn {

            display: inline-block;

            margin-top: 30px;

            padding: 14px 27px;

            border-radius: 30px;

            background: white;

            color: #153e75;

            text-decoration: none;

            font-weight: 700;

            transition: 0.3s;
        }


        .hero-btn:hover {

            transform: translateY(-4px) scale(1.04);
        }


        /* ================= SECTION ================= */

        .section {

            padding: 90px 7%;
        }


        .section-title {

            text-align: center;

            margin-bottom: 35px;
        }


        .section-title span {

            color: #6b7280;

            font-size: 13px;

            letter-spacing: 3px;

            text-transform: uppercase;
        }


        .section-title h2 {

            margin-top: 10px;

            font-size: 40px;

            color: #153e75;
        }


        .section-title p {

            margin-top: 12px;

            color: #6b7280;
        }


        /* ================= ADMIN BUTTON ================= */

        .admin-area {

            display: flex;

            justify-content: center;

            margin-bottom: 45px;
        }


        .admin-btn {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            padding: 14px 25px;

            border-radius: 30px;

            background: #153e75;

            color: white;

            text-decoration: none;

            font-weight: 700;

            border: none;

            cursor: pointer;

            box-shadow: 0 12px 30px rgba(21,62,117,0.20);

            transition: 0.3s;
        }


        .admin-btn:hover {

            transform: translateY(-4px);

            box-shadow: 0 18px 35px rgba(21,62,117,0.28);
        }


        /* ================= FORM TAMBAH PAKET ================= */

        .form-wrapper {

            max-width: 900px;

            margin: 0 auto 55px;

            padding: 35px;

            border-radius: 30px;

            background: rgba(255,255,255,0.72);

            backdrop-filter: blur(20px);

            border: 1px solid rgba(255,255,255,0.9);

            box-shadow: 0 20px 50px rgba(0,0,0,0.08);
        }


        .form-title {

            margin-bottom: 25px;

            text-align: center;
        }


        .form-title h3 {

            color: #153e75;

            font-size: 28px;
        }


        .form-title p {

            color: #6b7280;

            margin-top: 8px;
        }


        .form-grid {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 20px;
        }


        .form-group {

            display: flex;

            flex-direction: column;

            gap: 8px;
        }


        .form-group.full {

            grid-column: 1 / -1;
        }


        .form-group label {

            color: #153e75;

            font-weight: 700;

            font-size: 14px;
        }


        .form-group input,
        .form-group textarea,
        .form-group select {

            width: 100%;

            padding: 13px 15px;

            border: 1px solid rgba(21,62,117,0.12);

            border-radius: 14px;

            background: rgba(255,255,255,0.85);

            outline: none;

            color: #1f2937;

            transition: 0.3s;
        }


        .form-group textarea {

            min-height: 120px;

            resize: vertical;
        }


        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {

            border-color: #153e75;

            box-shadow: 0 0 0 4px rgba(21,62,117,0.08);
        }


        .form-actions {

            display: flex;

            justify-content: center;

            margin-top: 28px;
        }


        .save-btn {

            padding: 14px 30px;

            border: none;

            border-radius: 30px;

            background: #153e75;

            color: white;

            font-weight: 700;

            cursor: pointer;

            transition: 0.3s;
        }


        .save-btn:hover {

            transform: translateY(-3px);

            box-shadow: 0 12px 25px rgba(21,62,117,0.2);
        }


        /* ================= CARDS ================= */

        .cards {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 28px;
        }


        .card {

            position: relative;

            overflow: hidden;

            padding: 32px;

            min-height: 360px;

            border-radius: 28px;

            background: rgba(255,255,255,0.72);

            backdrop-filter: blur(18px);

            border: 1px solid rgba(255,255,255,0.9);

            box-shadow: 0 18px 45px rgba(0,0,0,0.08);

            transition: 0.35s;

            animation: fadeUp 0.8s ease forwards;
        }


        .card:hover {

            transform: translateY(-10px);

            box-shadow: 0 25px 55px rgba(0,0,0,0.13);
        }


        .card-top {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 25px;
        }


        .icon {

            width: 58px;

            height: 58px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 18px;

            background: #e8f0fb;

            font-size: 27px;

            animation: float 3s ease-in-out infinite;
        }


        .status {

            padding: 7px 13px;

            border-radius: 20px;

            background: #e8f0fb;

            color: #153e75;

            font-size: 12px;

            font-weight: 700;
        }


        .card h3 {

            color: #153e75;

            font-size: 25px;

            margin-bottom: 12px;
        }


        .description {

            color: #6b7280;

            line-height: 1.7;

            min-height: 58px;
        }


        .info {

            margin-top: 20px;

            padding-top: 15px;

            border-top: 1px solid rgba(21,62,117,0.08);

            color: #4b5563;

            font-size: 14px;

            line-height: 1.6;
        }


        .info strong {

            color: #153e75;
        }


        .price-area {

            margin-top: 25px;
        }


        .normal-price {

            color: #9ca3af;

            font-size: 13px;

            text-decoration: line-through;
        }


        .price {

            color: #153e75;

            font-size: 25px;

            font-weight: 800;

            margin-top: 4px;
        }


        .promo {

            color: #2563eb;

            font-size: 13px;

            margin-top: 5px;
        }


        /* ================= INFO SECTION ================= */

        .info-section {

            background: #eef3f8;
        }


        .info-box {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }


        .info-card {

            padding: 35px;

            border-radius: 25px;

            background: rgba(255,255,255,0.78);

            backdrop-filter: blur(15px);

            box-shadow: 0 15px 40px rgba(0,0,0,0.06);

            transition: 0.3s;
        }


        .info-card:hover {

            transform: translateY(-7px);
        }


        .info-card h3 {

            color: #153e75;

            margin-bottom: 12px;
        }


        .info-card p {

            color: #6b7280;

            line-height: 1.7;
        }


        /* ================= CTA ================= */

        .cta {

            margin: 20px 7% 90px;

            padding: 70px 30px;

            border-radius: 35px;

            text-align: center;

            color: white;

            background:

                linear-gradient(
                    135deg,
                    rgba(21,62,117,0.96),
                    rgba(37,99,235,0.85)
                );

            box-shadow: 0 20px 50px rgba(21,62,117,0.18);
        }


        .cta h2 {

            font-size: 40px;

            margin-bottom: 15px;
        }


        .cta p {

            opacity: 0.9;

            margin-bottom: 28px;
        }


        .cta-btn {

            display: inline-block;

            padding: 14px 30px;

            border-radius: 30px;

            background: white;

            color: #153e75;

            text-decoration: none;

            font-weight: 700;

            transition: 0.3s;
        }


        .cta-btn:hover {

            transform: translateY(-4px) scale(1.04);
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

            margin-bottom: 7px;
        }


        .footer-bottom {

            padding-top: 25px;

            border-top: 1px solid rgba(255,255,255,0.15);

            text-align: center;

            color: rgba(255,255,255,0.6);

            font-size: 13px;
        }


        /* ================= EMPTY ================= */

        .empty {

            text-align: center;

            padding: 70px 20px;

            border-radius: 25px;

            background: rgba(255,255,255,0.75);

            backdrop-filter: blur(15px);

            color: #6b7280;
        }


        .empty h2 {

            color: #153e75;

            margin-bottom: 10px;
        }


        /* ================= ANIMATION ================= */

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

                transform: translateY(-9px);
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


        /* ================= RESPONSIVE ================= */

        @media (max-width: 900px) {

            .cards {

                grid-template-columns: 1fr 1fr;
            }


            .info-box {

                grid-template-columns: 1fr;
            }


            .footer-content {

                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 600px) {

            .navbar {

                padding: 0 5%;
            }


            .hero {

                padding: 80px 5%;
            }


            .section {

                padding: 65px 5%;
            }


            .cards {

                grid-template-columns: 1fr;
            }


            .form-grid {

                grid-template-columns: 1fr;
            }


            .form-group.full {

                grid-column: auto;
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

            <a href="/dashboard" class="back-btn">
                ← Dashboard
            </a>

        </div>

    </nav>



    <!-- ================= HERO ================= -->

    <section class="hero">

        <div class="hero-content">

            <div class="hero-small">
                Travel • Explore • Experience
            </div>


            <h1>
                Find Your<br>
                Perfect Journey.
            </h1>


            <p>
                Jelajahi berbagai pilihan paket wisata dan
                temukan perjalanan yang sesuai dengan kebutuhanmu.
            </p>


            <a href="#paket" class="hero-btn">
                Lihat Paket Wisata ↓
            </a>

        </div>

    </section>



    <!-- ================= PAKET ================= -->

    <section class="section" id="paket">


        <div class="section-title">

            <span>
                Our Travel Package
            </span>


            <h2>
                Pilihan Paket Wisata
            </h2>


            <p>
                Temukan perjalanan yang cocok untukmu.
            </p>

        </div>



        <!-- ================= TOMBOL ADMIN ================= -->

        @if(auth()->user()->role === 'admin')

            <div class="admin-area">

                <a href="#form-tambah" class="admin-btn">
                    ＋ Tambah Paket Wisata
                </a>

            </div>

        @endif



        <!-- ================= FORM ADMIN ================= -->

        @if(auth()->user()->role === 'admin')

            <div class="form-wrapper" id="form-tambah">

                <div class="form-title">

                    <h3>
                        Tambah Paket Wisata
                    </h3>

                    <p>
                        Masukkan informasi paket wisata baru.
                    </p>

                </div>


                <form action="/paket-wisata" method="POST">

                    @csrf


                    <div class="form-grid">


                        <div class="form-group full">

                            <label>
                                Nama Paket
                            </label>

                            <input
                                type="text"
                                name="nama_paket"
                                placeholder="Contoh: Bali Paradise"
                                required
                            >

                        </div>



                        <div class="form-group full">

                            <label>
                                Deskripsi
                            </label>

                            <textarea
                                name="deskripsi"
                                placeholder="Deskripsi paket wisata..."
                                required
                            ></textarea>

                        </div>



                        <div class="form-group">

                            <label>
                                Akomodasi
                            </label>

                            <input
                                type="text"
                                name="akomodasi"
                                placeholder="Contoh: Hotel"
                                required
                            >

                        </div>



                        <div class="form-group">

                            <label>
                                Armada Transport
                            </label>

                            <input
                                type="text"
                                name="armada_transport"
                                placeholder="Contoh: Bus Pariwisata"
                                required
                            >

                        </div>



                        <div class="form-group">

                            <label>
                                Harga Normal
                            </label>

                            <input
                                type="number"
                                name="harga_normal"
                                placeholder="5000000"
                                min="0"
                                required
                            >

                        </div>



                        <div class="form-group">

                            <label>
                                Harga Promo
                            </label>

                            <input
                                type="number"
                                name="harga_promo"
                                placeholder="4500000"
                                min="0"
                            >

                        </div>



                        <div class="form-group full">

                            <label>
                                Status
                            </label>

                            <select name="status" required>

                                <option value="aktif">
                                    Aktif
                                </option>

                                <option value="nonaktif">
                                    Nonaktif
                                </option>

                            </select>

                        </div>

                    </div>



                    <div class="form-actions">

                        <button
                            type="submit"
                            class="save-btn"
                        >
                            Simpan Paket Wisata
                        </button>

                    </div>

                </form>

            </div>

        @endif



        <!-- ================= DAFTAR PAKET ================= -->

        @if($paketWisata->count() > 0)


            <div class="cards">


                @foreach($paketWisata as $paket)


                    <div class="card">


                        <div class="card-top">


                            <div class="icon">
                                🌴
                            </div>


                            <div class="status">
                                {{ $paket->status }}
                            </div>

                        </div>



                        <h3>
                            {{ $paket->nama_paket }}
                        </h3>



                        <p class="description">
                            {{ $paket->deskripsi }}
                        </p>



                        <div class="info">

                            <strong>
                                Akomodasi
                            </strong>

                            <br>

                            {{ $paket->akomodasi }}

                        </div>



                        <div class="info">

                            <strong>
                                Armada Transport
                            </strong>

                            <br>

                            {{ $paket->armada_transport }}

                        </div>



                        <div class="price-area">


                            <div class="normal-price">

                                Rp
                                {{ number_format($paket->harga_normal, 0, ',', '.') }}

                            </div>



                            @if($paket->harga_promo)


                                <div class="price">

                                    Rp
                                    {{ number_format($paket->harga_promo, 0, ',', '.') }}

                                </div>


                                <div class="promo">

                                    Harga Promo

                                </div>


                            @else


                                <div class="price">

                                    Rp
                                    {{ number_format($paket->harga_normal, 0, ',', '.') }}

                                </div>


                            @endif


                        </div>


                    </div>


                @endforeach


            </div>


        @else


            <div class="empty">

                <h2>
                    Belum Ada Paket Wisata
                </h2>


                <p>
                    Data paket wisata belum tersedia.
                </p>

            </div>


        @endif


    </section>



    <!-- ================= INFORMASI ================= -->

    <section class="section info-section">


        <div class="section-title">

            <span>
                Travel Experience
            </span>


            <h2>
                Perjalanan Lebih Mudah
            </h2>

        </div>



        <div class="info-box">


            <div class="info-card">

                <h3>
                    🌍 Pilih Destinasi
                </h3>


                <p>
                    Pilih paket wisata sesuai dengan
                    perjalanan yang kamu inginkan.
                </p>

            </div>



            <div class="info-card">

                <h3>
                    🧳 Persiapkan Perjalanan
                </h3>


                <p>
                    Lengkapi proses pemesanan dan
                    dokumen perjalanan yang diperlukan.
                </p>

            </div>



            <div class="info-card">

                <h3>
                    ✈️ Nikmati Perjalanan
                </h3>


                <p>
                    Nikmati perjalananmu dan akses
                    tiket perjalanan ketika sudah tersedia.
                </p>

            </div>


        </div>


    </section>



    <!-- ================= CTA ================= -->

    <section class="cta">


        <h2>
            Your Journey Starts Here.
        </h2>


        <p>
            Temukan paket wisata dan mulai perjalananmu.
        </p>


        <a href="#paket" class="cta-btn">
            Explore Packages
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
                    Platform informasi dan pemesanan
                    perjalanan wisata.
                </p>

            </div>



            <div>

                <h3>
                    Explore
                </h3>


                <p>
                    Paket Wisata
                </p>


                <p>
                    Perjalanan
                </p>

            </div>



            <div>

                <h3>
                    Travel
                </h3>


                <p>
                    Explore
                </p>


                <p>
                    Experience
                </p>

            </div>


        </div>



        <div class="footer-bottom">

            © {{ date('Y') }} WISATA. All Rights Reserved.

        </div>


    </footer>


</body>

</html>