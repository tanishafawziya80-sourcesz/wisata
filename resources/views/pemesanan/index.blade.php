```blade
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pemesanan - WISATA.</title>


    <style>

        /* =====================================================
           RESET
        ===================================================== */

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
            background:
                linear-gradient(
                    135deg,
                    #f7fbfc 0%,
                    #edf6f8 50%,
                    #ffffff 100%
                );
            color: #173444;
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

            --cream: #f8f7f2;

            --white: #ffffff;

            --text: #173444;

            --muted: #748791;

            --line: rgba(18,60,87,.10);

            --shadow:
                0 20px 60px rgba(28,73,94,.09);

        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {

            position: fixed;

            top: 0;
            left: 0;

            width: 100%;

            height: 80px;

            padding:
                0 7%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            background:
                rgba(255,255,255,.90);

            backdrop-filter:
                blur(20px);

            -webkit-backdrop-filter:
                blur(20px);

            border-bottom:
                1px solid rgba(18,60,87,.08);

            box-shadow:
                0 8px 30px rgba(18,60,87,.05);

            z-index: 9999;

        }


        .logo {

            color:
                var(--navy);

            font-size:
                28px;

            font-weight:
                900;

            letter-spacing:
                3px;

        }


        .logo span {

            color:
                var(--blue);

        }


        .nav-right {

            display:
                flex;

            align-items:
                center;

            gap:
                15px;

        }


        .role-badge {

            padding:
                9px 18px;

            border-radius:
                30px;

            background:
                var(--blue-light);

            border:
                1px solid rgba(111,174,202,.30);

            color:
                var(--navy);

            font-size:
                11px;

            font-weight:
                800;

            letter-spacing:
                1px;

        }


        .back-btn {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                8px;

            padding:
                11px 18px;

            border-radius:
                25px;

            background:
                var(--navy);

            color:
                white;

            font-size:
                12px;

            font-weight:
                800;

            transition:
                .3s;

        }


        .back-btn:hover {

            background:
                var(--blue);

            transform:
                translateY(-2px);

            box-shadow:
                0 12px 25px rgba(18,60,87,.15);

        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {

            position:
                relative;

            min-height:
                430px;

            padding:
                170px 7% 90px;

            display:
                flex;

            align-items:
                center;

            overflow:
                hidden;

            background:

                linear-gradient(
                    90deg,
                    rgba(255,255,255,.97),
                    rgba(255,255,255,.78),
                    rgba(255,255,255,.30)
                ),

                url("https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=2200&q=90");

            background-size:
                cover;

            background-position:
                center;

        }


        .hero::after {

            content:
                "";

            position:
                absolute;

            left:
                0;

            right:
                0;

            bottom:
                0;

            height:
                120px;

            background:
                linear-gradient(
                    transparent,
                    #f7fbfc
                );

        }


        .hero-content {

            position:
                relative;

            z-index:
                2;

            max-width:
                850px;

            animation:
                heroEnter .8s ease;

        }


        .eyebrow {

            display:
                flex;

            align-items:
                center;

            gap:
                12px;

            color:
                #619db6;

            font-size:
                11px;

            font-weight:
                900;

            letter-spacing:
                4px;

            text-transform:
                uppercase;

            margin-bottom:
                20px;

        }


        .eyebrow::before {

            content:
                "";

            width:
                42px;

            height:
                2px;

            background:
                #78b5ce;

        }


        .hero h1 {

            color:
                var(--navy);

            font-size:
                clamp(45px, 6vw, 75px);

            line-height:
                1;

            letter-spacing:
                -2px;

            margin-bottom:
                22px;

            font-weight:
                800;

        }


        .hero h1 span {

            color:
                #5795b1;

        }


        .hero p {

            max-width:
                650px;

            color:
                #607985;

            font-size:
                15px;

            line-height:
                1.9;

        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {

            position:
                relative;

            z-index:
                3;

            max-width:
                1250px;

            margin:
                -35px auto 0;

            padding:
                0 30px 100px;

        }


        /* =====================================================
           SUMMARY
        ===================================================== */

        .summary {

            display:
                grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap:
                20px;

            margin-bottom:
                55px;

        }


        .summary-card {

            position:
                relative;

            padding:
                27px;

            min-height:
                145px;

            border:
                1px solid rgba(18,60,87,.08);

            border-radius:
                22px;

            background:
                rgba(255,255,255,.82);

            backdrop-filter:
                blur(18px);

            -webkit-backdrop-filter:
                blur(18px);

            box-shadow:
                0 18px 50px rgba(28,73,94,.08);

            overflow:
                hidden;

            animation:
                fadeUp .7s ease both;

        }


        .summary-card:nth-child(2) {

            animation-delay:
                .1s;

        }


        .summary-card:nth-child(3) {

            animation-delay:
                .2s;

        }


        .summary-card::before {

            content:
                "";

            position:
                absolute;

            left:
                0;

            top:
                0;

            width:
                100%;

            height:
                4px;

            background:
                var(--blue);

        }


        .summary-label {

            color:
                #8a9ba3;

            font-size:
                10px;

            font-weight:
                900;

            letter-spacing:
                1.5px;

            text-transform:
                uppercase;

            margin-bottom:
                12px;

        }


        .summary-number {

            color:
                var(--navy);

            font-size:
                34px;

            line-height:
                1;

            font-weight:
                900;

        }


        .summary-description {

            margin-top:
                9px;

            color:
                var(--muted);

            font-size:
                12px;

        }


        /* =====================================================
           HEADING
        ===================================================== */

        .section-heading {

            display:
                flex;

            align-items:
                flex-end;

            justify-content:
                space-between;

            gap:
                30px;

            margin-bottom:
                35px;

        }


        .section-label {

            color:
                #619db6;

            font-size:
                11px;

            font-weight:
                900;

            letter-spacing:
                3px;

            text-transform:
                uppercase;

            margin-bottom:
                10px;

        }


        .section-heading h2 {

            color:
                var(--navy);

            font-size:
                clamp(32px, 4vw, 50px);

            line-height:
                1.05;

            letter-spacing:
                -1.5px;

        }


        .section-description {

            max-width:
                390px;

            color:
                var(--muted);

            font-size:
                13px;

            line-height:
                1.8;

        }


        /* =====================================================
           SUCCESS
        ===================================================== */

        .success-message {

            display:
                flex;

            align-items:
                center;

            gap:
                12px;

            margin-bottom:
                25px;

            padding:
                15px 18px;

            border-radius:
                15px;

            background:
                #edf8f1;

            border:
                1px solid #c9e8d5;

            color:
                #2f7550;

            font-size:
                13px;

            font-weight:
                700;

        }


        .success-icon {

            width:
                28px;

            height:
                28px;

            border-radius:
                50%;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            background:
                #d4efdf;

        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {

            padding:
                80px 30px;

            text-align:
                center;

            background:
                rgba(255,255,255,.80);

            border:
                1px solid rgba(18,60,87,.08);

            border-radius:
                25px;

            box-shadow:
                0 20px 60px rgba(28,73,94,.07);

        }


        .empty-icon {

            width:
                70px;

            height:
                70px;

            margin:
                0 auto 20px;

            border-radius:
                50%;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            background:
                var(--blue-light);

            color:
                var(--navy);

            font-size:
                30px;

        }


        .empty h3 {

            color:
                var(--navy);

            font-size:
                24px;

            margin-bottom:
                10px;

        }


        .empty p {

            color:
                var(--muted);

            font-size:
                13px;

            margin-bottom:
                25px;

        }


        .empty-btn {

            display:
                inline-flex;

            padding:
                12px 20px;

            border-radius:
                25px;

            background:
                var(--navy);

            color:
                white;

            font-size:
                12px;

            font-weight:
                800;

            transition:
                .3s;

        }


        .empty-btn:hover {

            background:
                var(--blue);

            transform:
                translateY(-2px);

        }


        /* =====================================================
           ORDER LIST
        ===================================================== */

        .order-list {

            display:
                flex;

            flex-direction:
                column;

            gap:
                20px;

        }


        /* =====================================================
           ORDER CARD
        ===================================================== */

        .order-card {

            position:
                relative;

            display:
                grid;

            grid-template-columns:
                1fr auto;

            gap:
                30px;

            padding:
                30px;

            background:
                rgba(255,255,255,.88);

            border:
                1px solid rgba(18,60,87,.08);

            border-radius:
                24px;

            box-shadow:
                0 18px 50px rgba(28,73,94,.07);

            backdrop-filter:
                blur(15px);

            -webkit-backdrop-filter:
                blur(15px);

            transition:
                .4s;

            animation:
                fadeUp .7s ease both;

            overflow:
                hidden;

        }


        .order-card::before {

            content:
                "";

            position:
                absolute;

            left:
                0;

            top:
                0;

            bottom:
                0;

            width:
                4px;

            background:
                var(--blue);

        }


        .order-card:hover {

            transform:
                translateY(-6px);

            box-shadow:
                0 28px 65px rgba(28,73,94,.12);

        }


        /* =====================================================
           ORDER TOP
        ===================================================== */

        .order-top {

            display:
                flex;

            align-items:
                center;

            justify-content:
                space-between;

            gap:
                15px;

            margin-bottom:
                18px;

        }


        .booking-label {

            color:
                #8a9ba3;

            font-size:
                10px;

            font-weight:
                900;

            letter-spacing:
                1.5px;

            text-transform:
                uppercase;

            margin-bottom:
                5px;

        }


        .booking-code {

            color:
                var(--navy);

            font-size:
                18px;

            font-weight:
                900;

            letter-spacing:
                .5px;

        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                7px;

            padding:
                8px 13px;

            border-radius:
                30px;

            font-size:
                10px;

            font-weight:
                900;

            letter-spacing:
                .5px;

            text-transform:
                uppercase;

            white-space:
                nowrap;

        }


        .status::before {

            content:
                "";

            width:
                7px;

            height:
                7px;

            border-radius:
                50%;

            background:
                currentColor;

        }


        .status-menunggu {

            color:
                #9a7010;

            background:
                #fff7d8;

        }


        .status-diproses {

            color:
                #367b9a;

            background:
                #e4f3f8;

        }


        .status-dibayar {

            color:
                #39765a;

            background:
                #e4f5eb;

        }


        .status-selesai {

            color:
                #326a50;

            background:
                #def2e6;

        }


        .status-batal {

            color:
                #a64b4b;

            background:
                #fbe8e8;

        }


        .status-default {

            color:
                #607985;

            background:
                #eef3f5;

        }


        /* =====================================================
           PACKAGE INFO
        ===================================================== */

        .package-name {

            color:
                var(--navy);

            font-size:
                25px;

            font-weight:
                800;

            margin-bottom:
                20px;

        }


        .detail-grid {

            display:
                grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap:
                12px;

        }


        .detail {

            padding:
                14px 15px;

            border-radius:
                14px;

            background:
                #f5f9fa;

            border:
                1px solid rgba(18,60,87,.05);

        }


        .detail-label {

            color:
                #8a9ba3;

            font-size:
                9px;

            font-weight:
                800;

            letter-spacing:
                1px;

            text-transform:
                uppercase;

            margin-bottom:
                5px;

        }


        .detail-value {

            color:
                var(--navy);

            font-size:
                13px;

            font-weight:
                800;

        }


        /* =====================================================
           TOTAL
        ===================================================== */

        .order-right {

            min-width:
                220px;

            display:
                flex;

            flex-direction:
                column;

            justify-content:
                space-between;

            align-items:
                flex-end;

            text-align:
                right;

        }


        .total-label {

            color:
                #8a9ba3;

            font-size:
                10px;

            font-weight:
                800;

            letter-spacing:
                1.3px;

            text-transform:
                uppercase;

            margin-bottom:
                6px;

        }


        .total-value {

            color:
                var(--navy);

            font-size:
                25px;

            font-weight:
                900;

        }


        .date {

            color:
                var(--muted);

            font-size:
                11px;

            margin-top:
                7px;

        }


        /* =====================================================
           CANCEL BUTTON
        ===================================================== */

        .cancel-form {

            margin-top:
                18px;

        }


        .cancel-btn {

            display:
                inline-flex;

            align-items:
                center;

            justify-content:
                center;

            gap:
                7px;

            padding:
                10px 17px;

            border-radius:
                22px;

            border:
                1px solid #e5caca;

            background:
                #fff4f4;

            color:
                #a64b4b;

            font-size:
                11px;

            font-weight:
                800;

            cursor:
                pointer;

            transition:
                .3s;

        }


        .cancel-btn:hover {

            background:
                #fbe1e1;

            border-color:
                #d99d9d;

            transform:
                translateY(-2px);

            box-shadow:
                0 8px 20px rgba(166,75,75,.10);

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

        @keyframes heroEnter {

            from {

                opacity:
                    0;

                transform:
                    translateY(30px);

            }

            to {

                opacity:
                    1;

                transform:
                    translateY(0);

            }

        }


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

        @media (max-width: 950px) {

            .summary {

                grid-template-columns:
                    repeat(2, 1fr);

            }


            .order-card {

                grid-template-columns:
                    1fr;

            }


            .order-right {

                min-width:
                    auto;

                align-items:
                    flex-start;

                text-align:
                    left;

                gap:
                    15px;

            }


            .detail-grid {

                grid-template-columns:
                    repeat(2, 1fr);

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


            .role-badge {

                display:
                    none;

            }


            .back-btn {

                padding:
                    9px 14px;

                font-size:
                    11px;

            }


            .hero {

                min-height:
                    420px;

                padding:
                    145px 5% 75px;

                background-position:
                    65% center;

            }


            .hero h1 {

                font-size:
                    47px;

            }


            .hero p {

                font-size:
                    13px;

            }


            .main {

                margin:
                    -20px auto 0;

                padding:
                    0 5% 70px;

            }


            .summary {

                grid-template-columns:
                    1fr;

                gap:
                    14px;

                margin-bottom:
                    45px;

            }


            .summary-card {

                min-height:
                    125px;

            }


            .section-heading {

                display:
                    block;

            }


            .section-description {

                margin-top:
                    15px;

            }


            .order-card {

                padding:
                    24px 20px;

                border-radius:
                    20px;

            }


            .order-top {

                align-items:
                    flex-start;

                flex-direction:
                    column;

            }


            .package-name {

                font-size:
                    22px;

            }


            .detail-grid {

                grid-template-columns:
                    1fr;

            }


            .total-value {

                font-size:
                    23px;

            }


            .cancel-btn {

                width:
                    100%;

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
            href="{{ route('pelanggan.dashboard') }}"
            class="logo"
        >

            WISATA<span>.</span>

        </a>


        <div class="nav-right">


            <div class="role-badge">

                PELANGGAN

            </div>


            <a
                href="{{ route('pelanggan.dashboard') }}"
                class="back-btn"
            >

                ← Dashboard

            </a>


        </div>


    </nav>



    <!-- =====================================================
         HERO
    ===================================================== -->

    <section class="hero">


        <div class="hero-content">


            <div class="eyebrow">

                WISATA. • PEMESANAN

            </div>


            <h1>

                Perjalananmu,

                <span>
                    tercatat di sini.
                </span>

            </h1>


            <p>

                Lihat seluruh riwayat pemesanan perjalananmu,
                mulai dari paket wisata yang dipilih,
                jumlah peserta, hingga total pembayaran.

            </p>


        </div>


    </section>



    <!-- =====================================================
         MAIN
    ===================================================== -->

    <main class="main">


        <!-- =================================================
             RINGKASAN
        ================================================= -->

        <div class="summary">


            <div class="summary-card">


                <div class="summary-label">

                    Total Pemesanan

                </div>


                <div class="summary-number">

                    {{ $pemesanan->count() }}

                </div>


                <div class="summary-description">

                    Seluruh pemesanan perjalananmu

                </div>


            </div>



            <div class="summary-card">


                <div class="summary-label">

                    Peserta

                </div>


                <div class="summary-number">

                    {{ $pemesanan->sum('jumlah_peserta') }}

                </div>


                <div class="summary-description">

                    Total peserta dari seluruh pemesanan

                </div>


            </div>



            <div class="summary-card">


                <div class="summary-label">

                    Total Transaksi

                </div>


                <div class="summary-number"
                     style="font-size:25px;">

                    Rp
                    {{ number_format(
                        $pemesanan->sum('total_bayar'),
                        0,
                        ',',
                        '.'
                    ) }}

                </div>


                <div class="summary-description">

                    Total nilai seluruh pemesanan

                </div>


            </div>


        </div>



        <!-- =================================================
             HEADING
        ================================================= -->

        <div class="section-heading">


            <div>

                <div class="section-label">

                    Riwayat Perjalanan

                </div>


                <h2>

                    Pemesananmu.

                </h2>

            </div>


            <div class="section-description">

                Semua data perjalanan yang pernah kamu
                pesan melalui sistem WISATA.

            </div>


        </div>



        <!-- =================================================
             SUCCESS MESSAGE
        ================================================= -->

        @if(session('success'))

            <div class="success-message">

                <div class="success-icon">

                    ✓

                </div>

                {{ session('success') }}

            </div>

        @endif



        <!-- =================================================
             DATA PEMESANAN
        ================================================= -->

        @if($pemesanan->count() > 0)


            <div class="order-list">


                @foreach($pemesanan as $item)


                    @php

                        $status =
                            strtolower(
                                $item->status_pemesanan ?? ''
                            );

                        $statusClass =
                            match($status) {

                                'menunggu',
                                'menunggu pembayaran'
                                    => 'status-menunggu',

                                'diproses'
                                    => 'status-diproses',

                                'dibayar'
                                    => 'status-dibayar',

                                'selesai'
                                    => 'status-selesai',

                                'batal',
                                'dibatalkan'
                                    => 'status-batal',

                                default
                                    => 'status-default',

                            };

                    @endphp


                    <div class="order-card">


                        <!-- =================================
                             KIRI
                        ================================== -->

                        <div>


                            <div class="order-top">


                                <div>


                                    <div class="booking-label">

                                        Kode Booking

                                    </div>


                                    <div class="booking-code">

                                        {{ $item->kode_booking }}

                                    </div>


                                </div>


                                <div class="status {{ $statusClass }}">

                                    {{ $item->status_pemesanan }}

                                </div>


                            </div>



                            <!-- NAMA PAKET -->

                            <div class="package-name">


                                {{ $item->jadwalTour->paketWisata->nama_paket
                                    ?? 'Paket Wisata'
                                }}


                            </div>



                            <!-- DETAIL -->

                            <div class="detail-grid">


                                <div class="detail">


                                    <div class="detail-label">

                                        Jadwal

                                    </div>


                                    <div class="detail-value">

                                        {{ $item->jadwalTour->tgl_keberangkatan
                                            ?? '-'
                                        }}

                                    </div>


                                </div>



                                <div class="detail">


                                    <div class="detail-label">

                                        Peserta

                                    </div>


                                    <div class="detail-value">

                                        {{ $item->jumlah_peserta }}

                                        orang

                                    </div>


                                </div>



                                <div class="detail">


                                    <div class="detail-label">

                                        Pemesanan

                                    </div>


                                    <div class="detail-value">

                                        {{ $item->tgl_pemesanan
                                            ? \Carbon\Carbon::parse(
                                                $item->tgl_pemesanan
                                            )->format('d M Y')
                                            : '-'
                                        }}

                                    </div>


                                </div>


                            </div>


                        </div>



                        <!-- =================================
                             KANAN
                        ================================== -->

                        <div class="order-right">


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


                                <div class="date">

                                    Dipesan pada

                                    {{ $item->tgl_pemesanan
                                        ? \Carbon\Carbon::parse(
                                            $item->tgl_pemesanan
                                        )->format('d M Y, H:i')
                                        : '-'
                                    }}

                                </div>


                                <!-- =================================
                                     TOMBOL BATALKAN PESANAN
                                ================================== -->

                                @if(
                                    !in_array(
                                        strtolower(
                                            $item->status_pemesanan ?? ''
                                        ),
                                        [
                                            'selesai',
                                            'dibayar',
                                            'batal',
                                            'dibatalkan'
                                        ]
                                    )
                                )

                                    <form
                                        action="{{ route(
                                            'pelanggan.pemesanan.destroy',
                                            $item->id_pemesanan
                                        ) }}"
                                        method="POST"
                                        class="cancel-form"
                                        onsubmit="return confirm(
                                            'Yakin ingin membatalkan pesanan ini?'
                                        );"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="cancel-btn"
                                        >

                                            ✕
                                            Batalkan Pesanan

                                        </button>

                                    </form>

                                @endif


                            </div>


                        </div>


                    </div>


                @endforeach


            </div>


        @else


            <!-- =============================================
                 BELUM ADA PEMESANAN
            ============================================== -->

            <div class="empty">


                <div class="empty-icon">

                    ✈

                </div>


                <h3>

                    Belum Ada Pemesanan

                </h3>


                <p>

                    Kamu belum memiliki pemesanan perjalanan.
                    Yuk mulai cari paket wisata yang sesuai
                    dengan perjalananmu.

                </p>


                <a
                    href="{{ route('paket-wisata.index') }}"
                    class="empty-btn"
                >

                    Jelajahi Paket Wisata →

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
```
