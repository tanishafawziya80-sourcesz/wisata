<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pemesanan - WISATA.</title>

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
            background:
                linear-gradient(
                    180deg,
                    #eef7fa 0%,
                    #f7f9f8 45%,
                    #ffffff 100%
                );

            color: #173444;
            min-height: 100vh;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }

        :root {
            --navy: #123c57;
            --navy-light: #285b75;
            --blue: #6faeca;
            --blue-light: #eaf5f8;
            --white: #ffffff;
            --text: #173444;
            --muted: #748791;
            --line: rgba(18,60,87,.10);
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {

            position: sticky;

            top: 0;
            left: 0;

            width: 100%;
            height: 80px;

            padding: 0 7%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background:
                rgba(255,255,255,.88);

            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            border-bottom:
                1px solid rgba(18,60,87,.08);

            box-shadow:
                0 8px 30px rgba(18,60,87,.05);

            z-index: 9999;
        }


        .logo {

            color: var(--navy);

            font-size: 28px;

            font-weight: 900;

            letter-spacing: 3px;
        }


        .logo span {
            color: var(--blue);
        }


        .nav-right {

            display: flex;

            align-items: center;

            gap: 14px;
        }


        .dashboard-btn {

            display: inline-flex;

            align-items: center;
            justify-content: center;

            padding: 10px 17px;

            border-radius: 25px;

            background:
                var(--blue-light);

            border:
                1px solid rgba(111,174,202,.30);

            color: var(--navy);

            font-size: 12px;

            font-weight: 800;

            transition: .3s;
        }


        .dashboard-btn:hover {

            transform: translateY(-2px);

            background: #dff0f5;
        }


        .logout-btn {

            border: none;

            padding: 11px 21px;

            border-radius: 25px;

            background: var(--navy);

            color: white;

            font-size: 12px;

            font-weight: 800;

            cursor: pointer;

            transition: .3s;
        }


        .logout-btn:hover {

            background: var(--blue);

            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(18,60,87,.15);
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {

            position: relative;

            padding:
                95px 7% 85px;

            overflow: hidden;

            background:

                linear-gradient(
                    135deg,
                    #edf7fa 0%,
                    #ffffff 55%,
                    #e9f5f8 100%
                );
        }


        .hero::before {

            content: "";

            position: absolute;

            width: 380px;
            height: 380px;

            border-radius: 50%;

            background:
                rgba(111,174,202,.13);

            filter: blur(5px);

            top: -190px;
            left: -80px;
        }


        .hero::after {

            content: "";

            position: absolute;

            width: 300px;
            height: 300px;

            border-radius: 50%;

            background:
                rgba(18,60,87,.06);

            filter: blur(8px);

            right: -100px;
            bottom: -150px;
        }


        .hero-content {

            position: relative;

            z-index: 2;

            max-width: 1250px;

            margin: auto;

            animation:
                fadeUp .8s ease;
        }


        .small-title {

            color: #619db6;

            font-size: 11px;

            font-weight: 900;

            letter-spacing: 4px;

            text-transform: uppercase;

            margin-bottom: 17px;
        }


        .hero h1 {

            color: var(--navy);

            font-size:
                clamp(42px, 6vw, 70px);

            line-height: 1;

            letter-spacing: -2px;

            margin-bottom: 20px;
        }


        .hero h1 span {

            color: #5795b1;
        }


        .hero p {

            max-width: 700px;

            color: var(--muted);

            font-size: 15px;

            line-height: 1.9;
        }


        .hero p strong {

            color: var(--navy);
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {

            width: 86%;

            max-width: 1250px;

            margin: auto;

            padding:
                80px 0 110px;
        }


        .section-heading {

            margin-bottom: 42px;
        }


        .section-label {

            color: #619db6;

            font-size: 11px;

            font-weight: 900;

            letter-spacing: 3px;

            text-transform: uppercase;

            margin-bottom: 12px;
        }


        .section-heading h2 {

            color: var(--navy);

            font-size:
                clamp(32px, 5vw, 52px);

            line-height: 1.05;

            letter-spacing: -1.5px;

            margin-bottom: 13px;
        }


        .section-heading p {

            color: var(--muted);

            font-size: 14px;

            line-height: 1.8;

            max-width: 650px;
        }


        /* =====================================================
           ALERT
        ===================================================== */

        .alert-success {

            margin-bottom: 28px;

            padding: 16px 20px;

            border-radius: 16px;

            background:
                rgba(225,246,235,.85);

            border:
                1px solid rgba(92,174,122,.25);

            color: #36764b;

            font-size: 13px;

            font-weight: 700;
        }


        /* =====================================================
           PEMESANAN LIST
        ===================================================== */

        .booking-list {

            display: grid;

            gap: 25px;
        }


        /* =====================================================
           BOOKING CARD
        ===================================================== */

        .booking-card {

            position: relative;

            background:
                rgba(255,255,255,.82);

            backdrop-filter:
                blur(18px);

            -webkit-backdrop-filter:
                blur(18px);

            border:
                1px solid rgba(255,255,255,.95);

            border-radius: 26px;

            overflow: hidden;

            box-shadow:
                0 20px 55px rgba(28,73,94,.08);

            transition:
                .4s ease;

            animation:
                fadeUp .7s ease both;
        }


        .booking-card:hover {

            transform:
                translateY(-6px);

            box-shadow:
                0 30px 70px rgba(28,73,94,.13);
        }


        /* =====================================================
           CARD TOP
        ===================================================== */

        .booking-top {

            padding:
                25px 28px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            border-bottom:
                1px solid rgba(18,60,87,.07);

            background:
                rgba(239,248,251,.65);
        }


        .booking-code-label {

            color: #8a9ba3;

            font-size: 10px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1.5px;

            margin-bottom: 5px;
        }


        .booking-code {

            color: var(--navy);

            font-size: 20px;

            font-weight: 900;

            letter-spacing: .5px;
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding:
                9px 15px;

            border-radius: 30px;

            font-size: 10px;

            font-weight: 900;

            text-transform: uppercase;

            letter-spacing: .8px;

            white-space: nowrap;
        }


        .status-menunggu {

            background:
                #fff4d8;

            color:
                #9a741e;
        }


        .status-dikonfirmasi {

            background:
                #e1f4e8;

            color:
                #39704d;
        }


        .status-ditolak {

            background:
                #ffe4e4;

            color:
                #a04d4d;
        }


        .status-selesai {

            background:
                #e4f0f8;

            color:
                #35657d;
        }


        .status-default {

            background:
                var(--blue-light);

            color:
                var(--navy);
        }


        /* =====================================================
           CARD BODY
        ===================================================== */

        .booking-body {

            padding:
                30px 28px;
        }


        .booking-grid {

            display: grid;

            grid-template-columns:
                1.4fr 1fr 1fr;

            gap: 18px;
        }


        .info-box {

            padding:
                18px;

            border-radius:
                17px;

            background:
                rgba(242,248,250,.82);

            border:
                1px solid rgba(18,60,87,.06);

            min-height:
                105px;
        }


        .info-label {

            color:
                #8a9ba3;

            font-size:
                10px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                1.2px;

            margin-bottom:
                8px;
        }


        .info-value {

            color:
                var(--navy);

            font-size:
                14px;

            font-weight:
                800;

            line-height:
                1.6;
        }


        .info-value.muted {

            color:
                #607985;

            font-weight:
                600;
        }


        /* =====================================================
           TOTAL
        ===================================================== */

        .total-box {

            margin-top:
                18px;

            padding:
                20px 22px;

            border-radius:
                18px;

            background:
                linear-gradient(
                    135deg,
                    #edf7fa,
                    #ffffff
                );

            border:
                1px solid rgba(111,174,202,.18);

            display:
                flex;

            align-items:
                center;

            justify-content:
                space-between;

            gap:
                20px;
        }


        .total-label {

            color:
                #8295a0;

            font-size:
                10px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                1.5px;
        }


        .total-value {

            color:
                var(--navy);

            font-size:
                24px;

            font-weight:
                900;
        }


        /* =====================================================
           DOCUMENT
        ===================================================== */

        .document-area {

            margin-top:
                20px;

            padding-top:
                20px;

            border-top:
                1px solid rgba(18,60,87,.08);
        }


        .document-title {

            color:
                var(--navy);

            font-size:
                13px;

            font-weight:
                900;

            margin-bottom:
                12px;
        }


        .document-list {

            display:
                flex;

            flex-wrap:
                wrap;

            gap:
                9px;
        }


        .document-item {

            padding:
                8px 12px;

            border-radius:
                20px;

            background:
                #f1f7f9;

            border:
                1px solid rgba(18,60,87,.07);

            color:
                #607985;

            font-size:
                11px;

            font-weight:
                700;
        }


        .document-status {

            color:
                #5795b1;

            margin-left:
                4px;
        }


        /* =====================================================
           PAYMENT / TICKET
        ===================================================== */

        .booking-actions {

            display:
                flex;

            align-items:
                center;

            justify-content:
                flex-end;

            flex-wrap:
                wrap;

            gap:
                10px;

            margin-top:
                22px;
        }


        .action-btn {

            display:
                inline-flex;

            align-items:
                center;

            justify-content:
                center;

            padding:
                11px 17px;

            border-radius:
                22px;

            font-size:
                11px;

            font-weight:
                900;

            transition:
                .3s;
        }


        .payment-btn {

            background:
                var(--navy);

            color:
                white;
        }


        .payment-btn:hover {

            background:
                var(--blue);

            transform:
                translateY(-2px);
        }


        .ticket-btn {

            background:
                var(--blue-light);

            color:
                var(--navy);

            border:
                1px solid rgba(111,174,202,.28);
        }


        .ticket-btn:hover {

            background:
                #dceff5;

            transform:
                translateY(-2px);
        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {

            text-align:
                center;

            padding:
                90px 30px;

            border-radius:
                28px;

            background:
                rgba(255,255,255,.80);

            backdrop-filter:
                blur(18px);

            border:
                1px solid rgba(255,255,255,.95);

            box-shadow:
                0 20px 55px rgba(28,73,94,.07);
        }


        .empty-icon {

            width:
                70px;

            height:
                70px;

            margin:
                0 auto 20px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            border-radius:
                50%;

            background:
                var(--blue-light);

            color:
                var(--navy);

            font-size:
                28px;
        }


        .empty h3 {

            color:
                var(--navy);

            font-size:
                25px;

            margin-bottom:
                10px;
        }


        .empty p {

            color:
                var(--muted);

            font-size:
                14px;

            margin-bottom:
                25px;
        }


        .package-btn {

            display:
                inline-flex;

            align-items:
                center;

            justify-content:
                center;

            padding:
                12px 20px;

            border-radius:
                24px;

            background:
                var(--navy);

            color:
                white;

            font-size:
                11px;

            font-weight:
                900;

            transition:
                .3s;
        }


        .package-btn:hover {

            background:
                var(--blue);

            transform:
                translateY(-2px);
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {

            padding:
                30px 7%;

            background:
                #123c57;

            color:
                rgba(255,255,255,.70);

            text-align:
                center;

            font-size:
                12px;

            letter-spacing:
                .4px;
        }


        /* =====================================================
           ANIMATION
        ===================================================== */

        @keyframes fadeUp {

            from {

                opacity:
                    0;

                transform:
                    translateY(25px);
            }

            to {

                opacity:
                    1;

                transform:
                    translateY(0);
            }
        }


        /* =====================================================
           TABLET
        ===================================================== */

        @media (max-width: 900px) {

            .booking-grid {

                grid-template-columns:
                    repeat(2, 1fr);
            }

            .booking-grid
            .info-box:first-child {

                grid-column:
                    1 / -1;
            }
        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 650px) {

            .navbar {

                height:
                    70px;

                padding:
                    0 5%;
            }


            .logo {

                font-size:
                    23px;
            }


            .dashboard-btn {

                display:
                    none;
            }


            .hero {

                padding:
                    70px 5% 60px;
            }


            .hero h1 {

                font-size:
                    45px;
            }


            .main {

                width:
                    90%;

                padding:
                    65px 0 80px;
            }


            .booking-top {

                align-items:
                    flex-start;

                flex-direction:
                    column;
            }


            .booking-grid {

                grid-template-columns:
                    1fr;
            }


            .booking-grid
            .info-box:first-child {

                grid-column:
                    auto;
            }


            .total-box {

                align-items:
                    flex-start;

                flex-direction:
                    column;
            }


            .booking-actions {

                justify-content:
                    flex-start;
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
            href="/pelanggan/dashboard"
            class="logo"
        >

            WISATA<span>.</span>

        </a>


        <div class="nav-right">

            <a
                href="/pelanggan/dashboard"
                class="dashboard-btn"
            >
                ← Dashboard
            </a>


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



    <!-- =====================================================
         HERO
    ===================================================== -->

    <section class="hero">

        <div class="hero-content">

            <div class="small-title">
                WISATA. • PEMESANAN
            </div>


            <h1>

                Perjalananmu,

                <span>
                    dimulai dari sini.
                </span>

            </h1>


            <p>

                Kelola informasi pemesanan perjalananmu,
                mulai dari paket wisata, jumlah peserta,
                dokumen, pembayaran hingga e-ticket.

            </p>

        </div>

    </section>



    <!-- =====================================================
         MAIN
    ===================================================== -->

    <main class="main">


        <div class="section-heading">

            <div class="section-label">
                My Booking
            </div>


            <h2>
                Pemesananmu.
            </h2>


            <p>
                Berikut adalah daftar pemesanan perjalanan
                yang telah kamu lakukan melalui WISATA.
            </p>

        </div>



        <!-- =================================================
             SUCCESS MESSAGE
        ================================================= -->

        @if(session('success'))

            <div class="alert-success">

                {{ session('success') }}

            </div>

        @endif



        <!-- =================================================
             BOOKING DATA
        ================================================= -->

        @if($pemesanan->count() > 0)


            <div class="booking-list">


                @foreach($pemesanan as $item)


                    <div class="booking-card">


                        <!-- =================================
                             TOP
                        ================================== -->

                        <div class="booking-top">


                            <div>

                                <div class="booking-code-label">
                                    Kode Booking
                                </div>


                                <div class="booking-code">

                                    {{ $item->kode_booking }}

                                </div>

                            </div>



                            @php

                                $status =
                                    strtolower(
                                        $item->status_pemesanan
                                    );

                            @endphp


                            <div
                                class="status
                                @if($status === 'menunggu')
                                    status-menunggu
                                @elseif($status === 'dikonfirmasi')
                                    status-dikonfirmasi
                                @elseif($status === 'ditolak')
                                    status-ditolak
                                @elseif($status === 'selesai')
                                    status-selesai
                                @else
                                    status-default
                                @endif"
                            >

                                {{ $item->status_pemesanan }}

                            </div>


                        </div>



                        <!-- =================================
                             BODY
                        ================================== -->

                        <div class="booking-body">


                            <div class="booking-grid">


                                <!-- PAKET -->

                                <div class="info-box">

                                    <div class="info-label">
                                        Paket Wisata
                                    </div>


                                    <div class="info-value">

                                        {{ $item->jadwalTour->paketWisata->nama_paket ?? '-' }}

                                    </div>

                                </div>



                                <!-- JADWAL -->

                                <div class="info-box">

                                    <div class="info-label">
                                        Jadwal
                                    </div>


                                    <div class="info-value muted">

                                        @if($item->jadwalTour)

                                            {{ \Carbon\Carbon::parse(
                                                $item->jadwalTour->tgl_berangkat
                                            )->translatedFormat('d F Y')
                                            }}

                                        @else

                                            -

                                        @endif

                                    </div>

                                </div>



                                <!-- PESERTA -->

                                <div class="info-box">

                                    <div class="info-label">
                                        Jumlah Peserta
                                    </div>


                                    <div class="info-value muted">

                                        {{ $item->jumlah_peserta }}
                                        orang

                                    </div>

                                </div>


                            </div>



                            <!-- =================================
                                 TOTAL
                            ================================== -->

                            <div class="total-box">


                                <div>

                                    <div class="total-label">
                                        Total Pembayaran
                                    </div>

                                    <div class="total-value">

                                        Rp
                                        {{ number_format(
                                            $item->total_bayar,
                                            0,
                                            ',',
                                            '.'
                                        ) }}

                                    </div>

                                </div>


                                <div>

                                    <div class="total-label">
                                        Tanggal Pemesanan
                                    </div>

                                    <div class="info-value">

                                        {{ \Carbon\Carbon::parse(
                                            $item->tgl_pemesanan
                                        )->translatedFormat('d F Y')
                                        }}

                                    </div>

                                </div>


                            </div>



                            <!-- =================================
                                 DOKUMEN
                            ================================== -->

                            @if($item->dokumenPemesanan &&
                                $item->dokumenPemesanan->count() > 0)

                                <div class="document-area">


                                    <div class="document-title">

                                        Dokumen Pemesanan

                                    </div>


                                    <div class="document-list">


                                        @foreach(
                                            $item->dokumenPemesanan
                                            as $dokumen
                                        )

                                            <div class="document-item">

                                                {{ $dokumen->nama_dokumen }}

                                                <span class="document-status">

                                                    {{ $dokumen->status }}

                                                </span>

                                            </div>

                                        @endforeach


                                    </div>


                                </div>

                            @endif



                            <!-- =================================
                                 ACTION
                            ================================== -->

                            <div class="booking-actions">


                                @if(
                                    $item->pembayaran &&
                                    $item->pembayaran->count() > 0
                                )

                                    <a
                                        href="{{ route('pelanggan.pembayaran') }}"
                                        class="action-btn payment-btn"
                                    >

                                        Lihat Pembayaran

                                    </a>

                                @else

                                    <a
                                        href="{{ route('pelanggan.pembayaran') }}"
                                        class="action-btn payment-btn"
                                    >

                                        Pembayaran

                                    </a>

                                @endif



                                @if(
                                    $item->eTicket
                                )

                                    <a
                                        href="{{ route(
                                            'pelanggan.e-ticket'
                                        ) }}"
                                        class="action-btn ticket-btn"
                                    >

                                        Lihat E-Ticket

                                    </a>

                                @endif


                            </div>


                        </div>


                    </div>


                @endforeach


            </div>


        @else


            <!-- =============================================
                 EMPTY
            ============================================== -->

            <div class="empty">


                <div class="empty-icon">

                    📋

                </div>


                <h3>
                    Belum Ada Pemesanan
                </h3>


                <p>

                    Kamu belum memiliki pemesanan
                    perjalanan wisata.

                </p>


                <a
                    href="{{ route('paket-wisata.index') }}"
                    class="package-btn"
                >

                    Lihat Paket Wisata →

                </a>


            </div>


        @endif


    </main>



    <!-- =====================================================
         FOOTER
    ===================================================== -->

    <footer>

        © {{ date('Y') }} WISATA.
        All Rights Reserved.

    </footer>


</body>

</html>

