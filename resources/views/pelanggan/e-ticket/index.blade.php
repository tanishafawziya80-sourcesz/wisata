<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-Ticket - FAWZATA TRAVEL</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }


        body {

            min-height: 100vh;

            color: white;

            background:
                linear-gradient(
                    rgba(4,35,52,.80),
                    rgba(7,48,67,.94)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=90");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            overflow-x: hidden;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {

            position: fixed;

            top: 0;
            left: 0;

            width: 100%;

            height: 76px;

            padding: 0 7%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            background:
                rgba(255,255,255,.10);

            backdrop-filter: blur(20px);

            -webkit-backdrop-filter: blur(20px);

            border-bottom:
                1px solid
                rgba(255,255,255,.18);

            z-index: 1000;
        }


        .logo {

            color: white;

            text-decoration: none;

            font-size: 26px;

            font-weight: 800;

            letter-spacing: 2px;
        }


        .logo span {

            color: #9ddcff;
        }


        .nav-right {

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .role {

            padding: 9px 16px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.11);

            border:
                1px solid
                rgba(255,255,255,.18);

            color:
                rgba(255,255,255,.88);

            font-size: 12px;

            font-weight: 700;
        }


        .logout {

            padding: 10px 18px;

            border-radius: 24px;

            border: none;

            background:
                rgba(255,255,255,.93);

            color: #123c57;

            font-weight: 700;

            cursor: pointer;

            transition: .25s;
        }


        .logout:hover {

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px
                rgba(0,0,0,.20);
        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {

            position: relative;

            z-index: 2;

            width: 90%;

            max-width: 1180px;

            margin: auto;

            padding-top: 125px;

            padding-bottom: 80px;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .small-title {

            color: #a7e2ff;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: 3px;

            text-transform: uppercase;

            margin-bottom: 10px;
        }


        h1 {

            font-size: clamp(38px, 6vw, 58px);

            line-height: 1.05;

            margin-bottom: 12px;
        }


        .description {

            color:
                rgba(255,255,255,.68);

            font-size: 14px;

            line-height: 1.7;

            max-width: 700px;

            margin-bottom: 35px;
        }


        /* =====================================================
           MAIN CARD
        ===================================================== */

        .main-card {

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,.14),
                    rgba(255,255,255,.07)
                );

            backdrop-filter: blur(22px);

            -webkit-backdrop-filter: blur(22px);

            border:
                1px solid
                rgba(255,255,255,.20);

            border-radius: 30px;

            padding: 28px;

            box-shadow:
                0 30px 80px
                rgba(0,0,0,.25);
        }


        .card-header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 15px;

            margin-bottom: 25px;
        }


        .card-title {

            font-size: 21px;

            font-weight: 800;
        }


        .card-subtitle {

            margin-top: 5px;

            color:
                rgba(255,255,255,.55);

            font-size: 12px;
        }


        .total {

            padding: 9px 15px;

            border-radius: 20px;

            background:
                rgba(157,220,255,.12);

            border:
                1px solid
                rgba(157,220,255,.22);

            color: #cceeff;

            font-size: 11px;

            font-weight: 700;

            white-space: nowrap;
        }


        /* =====================================================
           ALERT
        ===================================================== */

        .alert {

            padding: 13px 16px;

            margin-bottom: 20px;

            border-radius: 14px;

            font-size: 11px;
        }


        .alert-success {

            background:
                rgba(53,211,137,.10);

            border:
                1px solid
                rgba(53,211,137,.20);

            color: #9be8bd;
        }


        .alert-error {

            background:
                rgba(255,80,80,.10);

            border:
                1px solid
                rgba(255,80,80,.20);

            color: #ffb0b0;
        }


        /* =====================================================
           BOOKING
        ===================================================== */

        .booking {

            padding: 24px;

            margin-bottom: 22px;

            border-radius: 22px;

            background:
                rgba(255,255,255,.065);

            border:
                1px solid
                rgba(255,255,255,.13);
        }


        .booking:last-child {

            margin-bottom: 0;
        }


        .booking-top {

            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            gap: 20px;

            padding-bottom: 20px;

            border-bottom:
                1px solid
                rgba(255,255,255,.10);
        }


        .booking-code-label {

            color:
                rgba(255,255,255,.50);

            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: 1.3px;

            margin-bottom: 5px;
        }


        .booking-code {

            color: #bfeaff;

            font-size: 20px;

            font-weight: 800;

            letter-spacing: 1px;
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status {

            display: inline-flex;

            align-items: center;

            padding: 8px 13px;

            border-radius: 20px;

            font-size: 10px;

            font-weight: 800;

            text-transform: uppercase;

            white-space: nowrap;
        }


        .status-ready {

            background:
                rgba(53,211,137,.13);

            border:
                1px solid
                rgba(53,211,137,.25);

            color: #76e3ad;
        }


        .status-pending {

            background:
                rgba(157,220,255,.12);

            border:
                1px solid
                rgba(157,220,255,.22);

            color: #bfeaff;
        }


        /* =====================================================
           INFORMATION
        ===================================================== */

        .information {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 12px;

            margin-top: 20px;
        }


        .info-box {

            padding: 15px;

            border-radius: 15px;

            background:
                rgba(255,255,255,.045);

            border:
                1px solid
                rgba(255,255,255,.08);
        }


        .info-label {

            color:
                rgba(255,255,255,.45);

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 6px;
        }


        .info-value {

            color:
                rgba(255,255,255,.90);

            font-size: 13px;

            font-weight: 700;
        }


        /* =====================================================
           TICKET SECTION
        ===================================================== */

        .ticket-section {

            margin-top: 25px;

            padding-top: 25px;

            border-top:
                1px dashed
                rgba(255,255,255,.15);
        }


        .ticket-title {

            color: #bfeaff;

            font-size: 12px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 15px;
        }


        /* =====================================================
           TICKET CARD
        ===================================================== */

        .ticket-card {

            position: relative;

            overflow: hidden;

            border-radius: 24px;

            background:
                linear-gradient(
                    135deg,
                    #ffffff,
                    #edf8fc
                );

            color: #123c57;

            box-shadow:
                0 25px 60px
                rgba(0,0,0,.22);

            border:
                1px solid
                rgba(255,255,255,.8);
        }


        .ticket-card::before {

            content: "";

            position: absolute;

            width: 330px;

            height: 330px;

            border-radius: 50%;

            right: -150px;

            top: -170px;

            background:
                rgba(157,220,255,.28);
        }


        .ticket-card::after {

            content: "";

            position: absolute;

            width: 240px;

            height: 240px;

            border-radius: 50%;

            left: -120px;

            bottom: -150px;

            background:
                rgba(18,60,87,.06);
        }


        /* =====================================================
           TICKET TOP
        ===================================================== */

        .ticket-top {

            position: relative;

            z-index: 2;

            padding: 24px 26px 20px;

            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            gap: 20px;

            background:
                linear-gradient(
                    135deg,
                    #0c4966,
                    #123c57
                );

            color: white;
        }


        .ticket-brand {

            display: flex;

            align-items: center;

            gap: 13px;
        }


        .airplane-icon {

            width: 48px;

            height: 48px;

            border-radius: 15px;

            display: flex;

            align-items: center;

            justify-content: center;

            background:
                rgba(255,255,255,.13);

            border:
                1px solid
                rgba(255,255,255,.20);

            font-size: 25px;

            transform: rotate(-10deg);
        }


        .brand-name {

            font-size: 17px;

            font-weight: 900;

            letter-spacing: 1.5px;
        }


        .brand-sub {

            margin-top: 3px;

            color:
                rgba(255,255,255,.60);

            font-size: 9px;

            letter-spacing: 1.4px;

            text-transform: uppercase;
        }


        .ticket-label {

            padding: 7px 11px;

            border-radius: 20px;

            background:
                rgba(255,255,255,.13);

            border:
                1px solid
                rgba(255,255,255,.18);

            font-size: 9px;

            font-weight: 800;

            letter-spacing: 1px;
        }


        /* =====================================================
           TICKET BODY
        ===================================================== */

        .ticket-body {

            position: relative;

            z-index: 2;

            padding: 27px;
        }


        .route {

            display: grid;

            grid-template-columns:
                1fr
                auto
                1fr;

            align-items: center;

            gap: 15px;

            margin-bottom: 25px;
        }


        .location {

            min-width: 0;
        }


        .location:last-child {

            text-align: right;
        }


        .location-label {

            color: #78909c;

            font-size: 8px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1.5px;

            margin-bottom: 5px;
        }


        .location-name {

            color: #123c57;

            font-size: 22px;

            font-weight: 900;

            word-break: break-word;
        }


        .location-small {

            color: #78909c;

            font-size: 9px;

            margin-top: 3px;
        }


        .flight-line {

            position: relative;

            min-width: 130px;

            display: flex;

            align-items: center;

            justify-content: center;
        }


        .flight-line::before {

            content: "";

            position: absolute;

            width: 100%;

            height: 1px;

            border-top:
                2px dashed
                #a8cddc;
        }


        .plane {

            position: relative;

            z-index: 2;

            width: 43px;

            height: 43px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            background:
                #ffffff;

            border:
                1px solid
                #d8ebf2;

            color: #24789b;

            font-size: 20px;

            transform: rotate(90deg);

            box-shadow:
                0 5px 15px
                rgba(18,60,87,.10);
        }


        /* =====================================================
           TICKET META
        ===================================================== */

        .ticket-meta {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 10px;

            padding-top: 20px;

            border-top:
                1px solid
                #dcecf1;
        }


        .meta-box {

            padding: 11px;

            border-radius: 12px;

            background:
                rgba(18,60,87,.035);
        }


        .meta-label {

            color: #8aa1ab;

            font-size: 7px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 5px;
        }


        .meta-value {

            color: #234d61;

            font-size: 11px;

            font-weight: 800;

            word-break: break-word;
        }


        /* =====================================================
           TICKET DIVIDER
        ===================================================== */

        .ticket-divider {

            position: relative;

            height: 18px;

            border-top:
                2px dashed
                #c7dfe7;

            margin-top: 4px;
        }


        .ticket-divider::before {

            content: "";

            position: absolute;

            left: -10px;

            top: -10px;

            width: 20px;

            height: 20px;

            border-radius: 50%;

            background:
                #123c57;
        }


        .ticket-divider::after {

            content: "";

            position: absolute;

            right: -10px;

            top: -10px;

            width: 20px;

            height: 20px;

            border-radius: 50%;

            background:
                #123c57;
        }


        /* =====================================================
           TICKET BOTTOM
        ===================================================== */

        .ticket-bottom {

            position: relative;

            z-index: 2;

            padding: 18px 27px 24px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;
        }


        .ticket-number-box {

            flex: 1;
        }


        .ticket-number-label {

            color: #8aa1ab;

            font-size: 8px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1.2px;

            margin-bottom: 5px;
        }


        .ticket-number-value {

            color: #123c57;

            font-size: 19px;

            font-weight: 900;

            letter-spacing: 1.5px;
        }


        .issued {

            color: #78909c;

            font-size: 9px;

            text-align: right;
        }


        .issued strong {

            display: block;

            color: #24789b;

            margin-top: 3px;

            font-size: 10px;
        }


        /* =====================================================
           ACTIONS
        ===================================================== */

        .ticket-actions {

            display: flex;

            flex-wrap: wrap;

            gap: 10px;

            margin-top: 18px;
        }


        .btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 11px 17px;

            border-radius: 22px;

            text-decoration: none;

            font-size: 10px;

            font-weight: 800;

            transition: .25s;

            cursor: pointer;

            border: none;
        }


        .btn-primary {

            background: white;

            color: #123c57;
        }


        .btn-secondary {

            background:
                rgba(255,255,255,.08);

            border:
                1px solid
                rgba(255,255,255,.15);

            color: white;
        }


        .btn:hover {

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px
                rgba(0,0,0,.18);
        }


        /* =====================================================
           PENDING
        ===================================================== */

        .ticket-pending {

            padding: 20px;

            border-radius: 17px;

            background:
                rgba(255,193,7,.07);

            border:
                1px solid
                rgba(255,193,7,.16);
        }


        .pending-title {

            color: #ffe08a;

            font-size: 11px;

            font-weight: 800;

            margin-bottom: 6px;
        }


        .pending-text {

            color:
                rgba(255,255,255,.50);

            font-size: 10px;

            line-height: 1.6;
        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {

            text-align: center;

            padding: 55px 20px;

            color:
                rgba(255,255,255,.55);
        }


        .empty-title {

            color: white;

            font-size: 19px;

            font-weight: 800;

            margin-bottom: 7px;
        }


        .empty-text {

            font-size: 12px;

            color:
                rgba(255,255,255,.45);
        }


        /* =====================================================
           BACK
        ===================================================== */

        .back-btn {

            display: inline-flex;

            margin-top: 25px;

            padding: 11px 18px;

            border-radius: 22px;

            text-decoration: none;

            background:
                rgba(255,255,255,.92);

            color: #123c57;

            font-size: 11px;

            font-weight: 800;

            transition: .25s;
        }


        .back-btn:hover {

            transform: translateY(-2px);
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 700px) {

            .navbar {

                padding: 0 5%;
            }


            .role {

                display: none;
            }


            .container {

                width: 92%;

                padding-top: 105px;
            }


            .main-card {

                padding: 18px;
            }


            .booking {

                padding: 18px;
            }


            .booking-top {

                flex-direction: column;
            }


            .information {

                grid-template-columns: 1fr;
            }


            .route {

                grid-template-columns: 1fr;

                text-align: center;
            }


            .location:last-child {

                text-align: center;
            }


            .flight-line {

                min-width: 100%;

                height: 45px;
            }


            .flight-line::before {

                width: 80%;
            }


            .ticket-meta {

                grid-template-columns: 1fr;
            }


            .ticket-bottom {

                flex-direction: column;

                align-items: flex-start;
            }


            .issued {

                text-align: left;
            }


            .ticket-actions {

                flex-direction: column;
            }


            .ticket-actions .btn {

                width: 100%;
            }


            .card-header {

                flex-direction: column;

                align-items: flex-start;
            }

        }


        /* =====================================================
           PRINT
        ===================================================== */

        @media print {

            @page {

                size: A4;

                margin: 15mm;
            }


            body {

                background: white !important;

                color: #123c57 !important;
            }


            .navbar,
            .back-btn,
            .ticket-actions,
            .description,
            .small-title,
            .main-card > .card-header,
            .alert {

                display: none !important;
            }


            .container {

                width: 100%;

                max-width: none;

                padding: 0;
            }


            .main-card {

                background: white !important;

                border: none !important;

                box-shadow: none !important;

                padding: 0;
            }


            .booking {

                background: white !important;

                border: none !important;

                padding: 0;

                margin: 0;

                page-break-inside: avoid;
            }


            .information {

                display: none !important;
            }


            .ticket-section {

                margin: 0;

                padding: 0;

                border: none;
            }


            .ticket-title {

                display: none;
            }


            .ticket-card {

                width: 100%;

                box-shadow: none !important;

                border:
                    1px solid
                    #c5dce5 !important;

                page-break-inside: avoid;
            }


            .ticket-card::before,
            .ticket-card::after {

                display: none;
            }


            .ticket-top {

                -webkit-print-color-adjust: exact;

                print-color-adjust: exact;
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
        FAWZATA<span> TRAVEL</span>
    </a>


    <div class="nav-right">

        <div class="role">
            PELANGGAN
        </div>


        <form
            action="{{ url('/logout') }}"
            method="POST"
        >

            @csrf

            <button
                type="submit"
                class="logout"
            >
                Keluar
            </button>

        </form>

    </div>

</nav>



<!-- =====================================================
     CONTENT
===================================================== -->

<main class="container">


    <div class="small-title">
        FAWZATA TRAVEL • PELANGGAN
    </div>


    <h1>
        E-Ticket
    </h1>


    <p class="description">
        Lihat tiket perjalanan yang telah diterbitkan
        dan cetak atau download tiket Anda melalui halaman ini.
    </p>



    <!-- =================================================
         MAIN CARD
    ================================================= -->

    <div class="main-card">


        <div class="card-header">

            <div>

                <div class="card-title">
                    Tiket Perjalanan
                </div>

                <div class="card-subtitle">
                    E-ticket akan tersedia setelah pembayaran
                    diverifikasi dan tiket diterbitkan oleh pegawai.
                </div>

            </div>


            <div class="total">

                Total
                {{ $pemesanan->count() }}
                Pemesanan

            </div>

        </div>



        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif


        @if(session('error'))

            <div class="alert alert-error">

                {{ session('error') }}

            </div>

        @endif



        @forelse($pemesanan as $item)


            <!-- =================================================
                 BOOKING
            ================================================= -->

            <div class="booking">


                <!-- BOOKING HEADER -->

                <div class="booking-top">


                    <div>

                        <div class="booking-code-label">
                            Kode Booking
                        </div>


                        <div class="booking-code">

                            {{ $item->kode_booking ?? '-' }}

                        </div>

                    </div>



                    @if($item->eTicket)

                        <div class="status status-ready">

                            ✓ Tiket Diterbitkan

                        </div>

                    @else

                        <div class="status status-pending">

                            Menunggu Penerbitan

                        </div>

                    @endif


                </div>



                <!-- INFORMASI PEMESANAN -->

                <div class="information">


                    <div class="info-box">

                        <div class="info-label">
                            ID Pemesanan
                        </div>

                        <div class="info-value">

                            {{ $item->id_pemesanan }}

                        </div>

                    </div>


                    <div class="info-box">

                        <div class="info-label">
                            Tanggal Pemesanan
                        </div>

                        <div class="info-value">

                            {{ $item->created_at
                                ? \Carbon\Carbon::parse(
                                    $item->created_at
                                )->format('d M Y')
                                : '-'
                            }}

                        </div>

                    </div>


                    <div class="info-box">

                        <div class="info-label">
                            Paket Wisata
                        </div>

                        <div class="info-value">

                            {{ $item->jadwalTour->nama_paket
                                ?? $item->jadwalTour->paket_wisata
                                ?? '-'
                            }}

                        </div>

                    </div>


                    <div class="info-box">

                        <div class="info-label">
                            Jumlah Peserta
                        </div>

                        <div class="info-value">

                            {{ $item->jumlah_peserta ?? '-' }}
                            Peserta

                        </div>

                    </div>


                </div>



                <!-- =================================================
                     E-TICKET
                ================================================= -->

                <div class="ticket-section">


                    <div class="ticket-title">

                        E-Ticket Perjalanan

                    </div>



                    @if($item->eTicket)


                        <!-- =========================================
                             TICKET
                        ========================================== -->

                        <div class="ticket-card">


                            <!-- TICKET HEADER -->

                            <div class="ticket-top">


                                <div class="ticket-brand">


                                    <div class="airplane-icon">

                                        ✈

                                    </div>


                                    <div>

                                        <div class="brand-name">

                                            FAWZATA TRAVEL

                                        </div>


                                        <div class="brand-sub">

                                            Travel & Tour

                                        </div>

                                    </div>


                                </div>



                                <div class="ticket-label">

                                    E-TICKET

                                </div>


                            </div>



                            <!-- TICKET BODY -->

                            <div class="ticket-body">


                                <div class="route">


                                    <div class="location">


                                        <div class="location-label">

                                            Perjalanan

                                        </div>


                                        <div class="location-name">

                                            {{ $item->jadwalTour->nama_paket
                                                ?? $item->jadwalTour->paket_wisata
                                                ?? 'WISATA'
                                            }}

                                        </div>


                                        <div class="location-small">

                                            FAWZATA TRAVEL

                                        </div>


                                    </div>



                                    <div class="flight-line">

                                        <div class="plane">

                                            ✈

                                        </div>

                                    </div>



                                    <div class="location">


                                        <div class="location-label">

                                            Status

                                        </div>


                                        <div
                                            class="location-name"
                                            style="font-size:18px;"
                                        >

                                            READY

                                        </div>


                                        <div class="location-small">

                                            Perjalanan Terkonfirmasi

                                        </div>


                                    </div>


                                </div>



                                <!-- TICKET META -->

                                <div class="ticket-meta">


                                    <div class="meta-box">

                                        <div class="meta-label">

                                            Penumpang

                                        </div>


                                        <div class="meta-value">

                                            {{ $item->pelanggan->nama_lengkap
                                                ?? '-'
                                            }}

                                        </div>

                                    </div>



                                    <div class="meta-box">

                                        <div class="meta-label">

                                            Peserta

                                        </div>


                                        <div class="meta-value">

                                            {{ $item->jumlah_peserta ?? '-' }}
                                            Orang

                                        </div>

                                    </div>



                                    <div class="meta-box">

                                        <div class="meta-label">

                                            Booking

                                        </div>


                                        <div class="meta-value">

                                            {{ $item->kode_booking ?? '-' }}

                                        </div>

                                    </div>


                                </div>


                            </div>



                            <!-- TICKET DIVIDER -->

                            <div class="ticket-divider"></div>



                            <!-- TICKET BOTTOM -->

                            <div class="ticket-bottom">


                                <div class="ticket-number-box">


                                    <div class="ticket-number-label">

                                        Nomor E-Ticket

                                    </div>


                                    <div class="ticket-number-value">

                                        {{ $item->eTicket->nomor_ticket
                                            ?? '-'
                                        }}

                                    </div>


                                </div>



                                <div class="issued">

                                    Diterbitkan

                                    <strong>

                                        {{ $item->eTicket->tgl_terbit
                                            ? \Carbon\Carbon::parse(
                                                $item->eTicket->tgl_terbit
                                            )->format('d M Y')
                                            : '-'
                                        }}

                                    </strong>

                                </div>


                            </div>


                        </div>



                        <!-- =================================================
                             ACTION
                        ================================================= -->

                        <div class="ticket-actions">


                            <!-- CETAK -->

                            <button
                                type="button"
                                class="btn btn-primary"
                                onclick="window.print()"
                            >

                                🖨 Cetak E-Ticket

                            </button>



                            <!-- DOWNLOAD -->

                            @if(
                                !empty(
                                    $item->eTicket->file_pdf
                                )
                            )

                                <a
                                    href="{{ route(
                                        'pelanggan.e-ticket.download',
                                        ['id' => $item->id_pemesanan]
                                    ) }}"
                                    class="btn btn-secondary"
                                >

                                    ↓ Download E-Ticket

                                </a>

                            @endif


                        </div>


                    @else


                        <!-- =================================================
                             BELUM TERBIT
                        ================================================= -->

                        <div class="ticket-pending">


                            <div class="pending-title">

                                E-Ticket Belum Diterbitkan

                            </div>


                            <div class="pending-text">

                                Setelah pembayaran Anda diverifikasi,
                                pegawai FAWZATA TRAVEL akan menerbitkan
                                e-ticket perjalanan Anda.

                                Setelah diterbitkan,
                                tiket akan muncul di halaman ini
                                dan dapat dicetak maupun di-download.

                            </div>


                        </div>


                    @endif


                </div>


            </div>


        @empty


            <!-- =================================================
                 EMPTY
            ================================================= -->

            <div class="empty">


                <div class="empty-title">

                    Belum Ada Pemesanan

                </div>


                <div class="empty-text">

                    Pemesanan perjalanan Anda
                    akan muncul di halaman ini.

                </div>


            </div>


        @endforelse



        <!-- =================================================
             BACK
        ================================================= -->

        <a
            href="{{ route('pelanggan.dashboard') }}"
            class="back-btn"
        >

            ← Kembali ke Dashboard

        </a>


    </div>


</main>


</body>

</html>