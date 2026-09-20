<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Pemesanan Pegawai - WISATA.</title>


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

            min-height: 100vh;

            color: #17384d;

            background:
                linear-gradient(
                    rgba(8, 55, 78, .58),
                    rgba(15, 78, 103, .68)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=90");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            overflow-x: hidden;
        }


        /* ================= BACKGROUND EFFECT ================= */

        body::before {

            content: "";

            position: fixed;

            inset: 0;

            pointer-events: none;

            background:
                radial-gradient(
                    circle at 10% 20%,
                    rgba(255,255,255,.13),
                    transparent 28%
                ),
                radial-gradient(
                    circle at 90% 75%,
                    rgba(164,225,245,.16),
                    transparent 30%
                );

            z-index: -1;
        }


        /* ================= NAVBAR ================= */

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
                rgba(255,255,255,.12);

            backdrop-filter: blur(20px);

            -webkit-backdrop-filter: blur(20px);

            border-bottom:
                1px solid rgba(255,255,255,.22);

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

            color: #9bdcf5;
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
                rgba(255,255,255,.14);

            border:
                1px solid rgba(255,255,255,.22);

            color: white;

            font-size: 12px;

            font-weight: 700;

            letter-spacing: .5px;
        }


        .logout {

            border: none;

            padding: 10px 20px;

            border-radius: 25px;

            background: rgba(255,255,255,.94);

            color: #164766;

            font-weight: 700;

            cursor: pointer;

            transition: .3s;
        }


        .logout:hover {

            transform: translateY(-2px);

            box-shadow:
                0 10px 30px rgba(0,0,0,.20);
        }


        /* ================= CONTAINER ================= */

        .container {

            width: 90%;

            max-width: 1300px;

            margin: auto;

            padding-top: 125px;

            padding-bottom: 80px;
        }


        /* ================= HEADER ================= */

        .header {

            margin-bottom: 30px;

            animation:
                fadeUp .8s ease;
        }


        .small-title {

            color: #b9eaff;

            font-size: 12px;

            letter-spacing: 4px;

            text-transform: uppercase;

            margin-bottom: 12px;

            font-weight: 700;
        }


        .header h1 {

            color: white;

            font-size:
                clamp(38px, 6vw, 60px);

            line-height: 1.05;

            margin-bottom: 12px;
        }


        .header p {

            color:
                rgba(255,255,255,.78);

            line-height: 1.7;

            max-width: 650px;

            font-size: 15px;
        }


        /* ================= STATISTICS ================= */

        .stats {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 18px;

            margin-bottom: 28px;
        }


        .stat-card {

            padding: 24px;

            border-radius: 24px;

            background:
                rgba(255,255,255,.15);

            backdrop-filter: blur(20px);

            -webkit-backdrop-filter: blur(20px);

            border:
                1px solid rgba(255,255,255,.23);

            box-shadow:
                0 20px 50px rgba(0,35,55,.18);

            transition: .35s;

            animation:
                fadeUp .8s ease;
        }


        .stat-card:hover {

            transform: translateY(-7px);

            background:
                rgba(255,255,255,.20);
        }


        .stat-icon {

            width: 44px;

            height: 44px;

            border-radius: 15px;

            display: flex;

            align-items: center;

            justify-content: center;

            background:
                rgba(210,240,250,.25);

            border:
                1px solid rgba(255,255,255,.20);

            margin-bottom: 15px;

            position: relative;
        }


        .stat-icon::after {

            content: "";

            width: 8px;

            height: 8px;

            border-radius: 50%;

            background: #a9e4fa;

            box-shadow:
                0 0 15px rgba(169,228,250,.8);
        }


        .stat-label {

            color:
                rgba(255,255,255,.65);

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: 1.5px;
        }


        .stat-number {

            color: white;

            font-size: 34px;

            font-weight: 800;

            margin-top: 4px;
        }


        /* ================= MAIN CARD ================= */

        .card {

            padding: 30px;

            border-radius: 30px;

            background:
                rgba(255,255,255,.15);

            backdrop-filter: blur(25px);

            -webkit-backdrop-filter: blur(25px);

            border:
                1px solid rgba(255,255,255,.24);

            box-shadow:
                0 30px 80px rgba(0,35,55,.22);

            animation:
                fadeUp .9s ease;
        }


        .card-top {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 24px;
        }


        .card-title {

            color: white;

            font-size: 22px;

            font-weight: 800;
        }


        .card-subtitle {

            color:
                rgba(255,255,255,.58);

            font-size: 13px;

            margin-top: 5px;
        }


        /* ================= BOOKING ================= */

        .booking {

            display: grid;

            grid-template-columns:
                1.2fr 1fr 1fr auto;

            gap: 18px;

            align-items: center;

            padding: 21px;

            margin-bottom: 13px;

            border-radius: 22px;

            background:
                rgba(255,255,255,.105);

            border:
                1px solid rgba(255,255,255,.13);

            transition: .35s;
        }


        .booking:last-child {

            margin-bottom: 0;
        }


        .booking:hover {

            transform: translateX(5px);

            background:
                rgba(255,255,255,.16);

            border-color:
                rgba(169,228,250,.30);
        }


        .booking-code {

            color: #a9e3f8;

            font-size: 12px;

            font-weight: 800;

            letter-spacing: 1px;

            margin-bottom: 7px;
        }


        .customer {

            color: white;

            font-size: 17px;

            font-weight: 750;
        }


        .customer-email {

            color:
                rgba(255,255,255,.50);

            font-size: 12px;

            margin-top: 4px;
        }


        .info {

            display: flex;

            flex-direction: column;

            gap: 5px;
        }


        .info-label {

            color:
                rgba(255,255,255,.42);

            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-top: 4px;
        }


        .info-value {

            color: white;

            font-size: 14px;

            font-weight: 650;
        }


        .payment {

            color: #b8e9fa;

            font-size: 13px;

            font-weight: 700;
        }


        /* ================= STATUS ================= */

        .status {

            display: inline-flex;

            align-items: center;

            gap: 7px;

            padding: 7px 12px;

            border-radius: 20px;

            font-size: 10px;

            font-weight: 800;

            text-transform: uppercase;

            background:
                rgba(255,255,255,.10);

            border:
                1px solid rgba(255,255,255,.16);

            color: white;
        }


        .status-dot {

            width: 7px;

            height: 7px;

            border-radius: 50%;

            background: #c7d0d4;
        }


        .status.waiting .status-dot {

            background: #f6d477;

            box-shadow:
                0 0 10px #f6d477;
        }


        .status.approved .status-dot {

            background: #8be0bb;

            box-shadow:
                0 0 10px #8be0bb;
        }


        .status.rejected .status-dot {

            background: #ff8f8f;

            box-shadow:
                0 0 10px #ff8f8f;
        }


        /* ================= BUTTON ================= */

        .detail-btn {

            border:
                1px solid rgba(178,227,244,.30);

            background:
                rgba(178,227,244,.13);

            color: #d9f5ff;

            padding: 9px 15px;

            border-radius: 18px;

            cursor: pointer;

            font-size: 12px;

            font-weight: 750;

            transition: .3s;

            white-space: nowrap;
        }


        .detail-btn:hover {

            background:
                rgba(178,227,244,.24);

            transform: translateY(-2px);
        }


        /* ================= EMPTY ================= */

        .empty {

            text-align: center;

            padding: 65px 20px;

            color:
                rgba(255,255,255,.55);
        }


        .empty h2 {

            color: white;

            margin-bottom: 8px;

            font-size: 25px;
        }


        .empty p {

            line-height: 1.7;
        }


        /* ================= BACK ================= */

        .back-btn {

            display: inline-block;

            margin-top: 25px;

            padding: 12px 20px;

            border-radius: 25px;

            text-decoration: none;

            background:
                rgba(255,255,255,.92);

            color: #164766;

            font-weight: 750;

            transition: .3s;
        }


        .back-btn:hover {

            transform: translateY(-3px);

            box-shadow:
                0 10px 30px rgba(0,0,0,.18);
        }


        /* ================= MODAL ================= */

        .modal {

            position: fixed;

            inset: 0;

            display: none;

            align-items: center;

            justify-content: center;

            padding: 25px;

            background:
                rgba(2,31,45,.68);

            backdrop-filter: blur(9px);

            -webkit-backdrop-filter: blur(9px);

            z-index: 2000;
        }


        .modal.active {

            display: flex;
        }


        .modal-box {

            width: 100%;

            max-width: 760px;

            max-height: 90vh;

            overflow-y: auto;

            padding: 30px;

            border-radius: 30px;

            background:
                rgba(27,75,98,.94);

            border:
                1px solid rgba(255,255,255,.22);

            box-shadow:
                0 35px 100px rgba(0,0,0,.45);

            animation:
                popup .25s ease;
        }


        .modal-head {

            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            margin-bottom: 25px;
        }


        .modal-head h2 {

            color: white;

            font-size: 25px;
        }


        .modal-head p {

            color:
                rgba(255,255,255,.55);

            margin-top: 5px;

            font-size: 13px;
        }


        .close {

            border: none;

            background:
                rgba(255,255,255,.10);

            color: white;

            width: 38px;

            height: 38px;

            border-radius: 50%;

            cursor: pointer;

            font-size: 20px;

            transition: .25s;
        }


        .close:hover {

            background:
                rgba(255,255,255,.20);

            transform: rotate(90deg);
        }


        /* ================= MODAL SECTION ================= */

        .section {

            margin-top: 20px;

            padding: 20px;

            border-radius: 20px;

            background:
                rgba(255,255,255,.065);

            border:
                1px solid rgba(255,255,255,.10);
        }


        .section-title {

            color: #b9eaff;

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: 2px;

            margin-bottom: 15px;

            font-weight: 800;
        }


        .detail-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 15px;
        }


        .detail-item span {

            display: block;

            color:
                rgba(255,255,255,.42);

            font-size: 11px;

            margin-bottom: 5px;
        }


        .detail-item strong {

            color: white;

            font-size: 14px;
        }


        /* ================= DOCUMENT ================= */

        .document {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 10px;

            padding: 12px;

            margin-bottom: 8px;

            border-radius: 14px;

            background:
                rgba(255,255,255,.06);
        }


        .document:last-child {

            margin-bottom: 0;
        }


        .document span {

            color: white;

            font-size: 13px;
        }


        .document a {

            color: #b8eafa;

            text-decoration: none;

            font-size: 12px;

            font-weight: 700;
        }


        /* ================= PAYMENT ================= */

        .payment-box {

            display: flex;

            justify-content: space-between;

            gap: 20px;

            flex-wrap: wrap;
        }


        .payment-status {

            padding: 7px 12px;

            border-radius: 20px;

            background:
                rgba(255,255,255,.09);

            color: white;

            font-size: 11px;

            font-weight: 800;
        }


        .proof {

            margin-top: 15px;

            border: 1px solid
                rgba(184,234,250,.30);

            background:
                rgba(184,234,250,.12);

            color: #d8f5ff;

            padding: 9px 15px;

            border-radius: 18px;

            cursor: pointer;

            font-size: 12px;

            font-weight: 700;

            transition: .25s;
        }


        .proof:hover {

            background:
                rgba(184,234,250,.22);

            transform: translateY(-2px);
        }


        .no-proof {

            display: inline-block;

            margin-top: 15px;

            color:
                rgba(255,255,255,.45);

            font-size: 12px;
        }


        /* ================= BUKTI PEMBAYARAN ================= */

        .bukti-box {

            position: relative;

            width: 100%;

            max-width: 650px;

            max-height: 90vh;

            padding: 28px;

            border-radius: 28px;

            background:
                rgba(27,75,98,.97);

            border:
                1px solid rgba(255,255,255,.20);

            box-shadow:
                0 35px 100px rgba(0,0,0,.50);

            overflow: auto;

            animation:
                popup .25s ease;
        }


        .bukti-title {

            color: white;

            font-size: 23px;

            font-weight: 800;

            margin-bottom: 5px;
        }


        .bukti-subtitle {

            color:
                rgba(255,255,255,.55);

            font-size: 13px;

            margin-bottom: 20px;
        }


        .bukti-close {

            position: absolute;

            top: 14px;
            right: 14px;

            width: 32px;
            height: 32px;

            border: none;

            border-radius: 50%;

            background:
                rgba(255,255,255,.10);

            color: white;

            font-size: 20px;

            cursor: pointer;

            transition: .25s;
        }


        .bukti-close:hover {

            background:
                rgba(255,255,255,.20);

            transform: rotate(90deg);
        }


        .bukti-image-wrapper {

            width: 100%;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 10px;
        }


        .bukti-image {

            display: block;

            max-width: 100%;

            max-height: 65vh;

            object-fit: contain;

            border-radius: 15px;

            background: white;

            box-shadow:
                0 15px 40px rgba(0,0,0,.25);
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


        @keyframes popup {

            from {

                opacity: 0;

                transform:
                    translateY(20px)
                    scale(.97);
            }

            to {

                opacity: 1;

                transform:
                    translateY(0)
                    scale(1);
            }
        }


        /* ================= RESPONSIVE ================= */

        @media(max-width: 950px) {

            .stats {

                grid-template-columns:
                    1fr;
            }


            .booking {

                grid-template-columns:
                    1fr 1fr;
            }
        }


        @media(max-width: 650px) {

            .navbar {

                padding: 0 5%;
            }


            .role {

                display: none;
            }


            .container {

                width: 92%;
            }


            .card {

                padding: 18px;
            }


            .booking {

                grid-template-columns:
                    1fr;
            }


            .detail-grid {

                grid-template-columns:
                    1fr;
            }


            .modal {

                padding: 15px;
            }


            .modal-box {

                padding: 22px;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     NAVBAR
====================================================== -->

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
                class="logout"
                type="submit"
            >
                Logout
            </button>

        </form>


    </div>

</nav>



<!-- =====================================================
     MAIN
====================================================== -->

<main class="container">


    <!-- HEADER -->

    <div class="header">


        <div class="small-title">
            Travel Operations
        </div>


        <h1>
            Pemesanan Masuk
        </h1>


        <p>
            Pantau pemesanan pelanggan, dokumen,
            dan pembayaran dalam satu ruang kerja.
        </p>


    </div>



    <!-- =================================================
         DATA STATISTIK
    ================================================== -->

    @php

        $totalPesanan = $pemesanan->count();

        $menunggu = $pemesanan
            ->where('status_pemesanan', 'menunggu')
            ->count();

        $selesai = $pemesanan
            ->where('status_pemesanan', 'disetujui')
            ->count();

    @endphp



    <div class="stats">


        <div class="stat-card">

            <div class="stat-icon"></div>

            <div class="stat-label">
                Total Pemesanan
            </div>

            <div class="stat-number">
                {{ $totalPesanan }}
            </div>

        </div>



        <div class="stat-card">

            <div class="stat-icon"></div>

            <div class="stat-label">
                Menunggu Diproses
            </div>

            <div class="stat-number">
                {{ $menunggu }}
            </div>

        </div>



        <div class="stat-card">

            <div class="stat-icon"></div>

            <div class="stat-label">
                Disetujui
            </div>

            <div class="stat-number">
                {{ $selesai }}
            </div>

        </div>


    </div>



    <!-- =================================================
         DAFTAR PEMESANAN
    ================================================== -->

    <div class="card">


        <div class="card-top">

            <div>

                <div class="card-title">
                    Daftar Pemesanan
                </div>

                <div class="card-subtitle">
                    Pesanan terbaru pelanggan
                </div>

            </div>

        </div>



        @forelse($pemesanan as $item)


            @php

                $status = strtolower(
                    $item->status_pemesanan ?? ''
                );

                $statusClass = 'waiting';

                if (
                    str_contains($status, 'setuju') ||
                    str_contains($status, 'selesai')
                ) {

                    $statusClass = 'approved';

                }

                if (
                    str_contains($status, 'tolak')
                ) {

                    $statusClass = 'rejected';

                }

            @endphp



            <div class="booking">


                <!-- PELANGGAN -->

                <div>


                    <div class="booking-code">

                        {{ $item->kode_booking }}

                    </div>


                    <div class="customer">

                        {{ $item->pelanggan->nama_lengkap
                            ?? 'Pelanggan'
                        }}

                    </div>


                    <div class="customer-email">

                        {{ $item->pelanggan->email
                            ?? '-'
                        }}

                    </div>


                </div>



                <!-- JADWAL -->

                <div class="info">


                    <div class="info-label">
                        Jadwal
                    </div>


                    <div class="info-value">

                        #{{ $item->id_jadwal }}

                    </div>


                    <div class="info-label">
                        Tanggal Pemesanan
                    </div>


                    <div class="info-value">

                        {{ $item->tgl_pemesanan
                            ? $item->tgl_pemesanan->format('d M Y')
                            : '-'
                        }}

                    </div>


                </div>



                <!-- PESERTA -->

                <div class="info">


                    <div class="info-label">
                        Peserta
                    </div>


                    <div class="info-value">

                        {{ $item->jumlah_peserta }}
                        Orang

                    </div>


                    <div class="info-label">
                        Total
                    </div>


                    <div class="payment">

                        Rp
                        {{ number_format(
                            $item->total_bayar,
                            0,
                            ',',
                            '.'
                        ) }}

                    </div>


                </div>



                <!-- STATUS -->

                <div>


                    <span class="status {{ $statusClass }}">

                        <span class="status-dot"></span>

                        {{ $item->status_pemesanan }}

                    </span>


                    <br>


                    <button
                        type="button"
                        class="detail-btn"
                        style="margin-top:10px;"
                        onclick="openModal(
                            'modal-{{ $item->id_pemesanan }}'
                        )"
                    >
                        Detail
                    </button>


                </div>


            </div>



            <!-- =================================================
                 MODAL DETAIL
            ================================================== -->

            <div
                class="modal"
                id="modal-{{ $item->id_pemesanan }}"
                onclick="closeOutside(event, this)"
            >


                <div class="modal-box">


                    <div class="modal-head">


                        <div>

                            <h2>
                                Detail Pemesanan
                            </h2>


                            <p>
                                {{ $item->kode_booking }}
                            </p>

                        </div>


                        <button
                            type="button"
                            class="close"
                            onclick="
                                closeModal(
                                    'modal-{{ $item->id_pemesanan }}'
                                )
                            "
                        >
                            ×
                        </button>


                    </div>



                    <!-- DATA PELANGGAN -->

                    <div class="section">


                        <div class="section-title">
                            Data Pelanggan
                        </div>


                        <div class="detail-grid">


                            <div class="detail-item">

                                <span>
                                    Nama
                                </span>

                                <strong>
                                    {{ $item->pelanggan->nama_lengkap
                                        ?? '-'
                                    }}
                                </strong>

                            </div>


                            <div class="detail-item">

                                <span>
                                    Email
                                </span>

                                <strong>
                                    {{ $item->pelanggan->email
                                        ?? '-'
                                    }}
                                </strong>

                            </div>


                            <div class="detail-item">

                                <span>
                                    No. Telepon
                                </span>

                                <strong>
                                    {{ $item->pelanggan->no_telepon
                                        ?? '-'
                                    }}
                                </strong>

                            </div>


                            <div class="detail-item">

                                <span>
                                    Kode Booking
                                </span>

                                <strong>
                                    {{ $item->kode_booking }}
                                </strong>

                            </div>


                        </div>

                    </div>



                    <!-- DATA PERJALANAN -->

                    <div class="section">


                        <div class="section-title">
                            Data Perjalanan
                        </div>


                        <div class="detail-grid">


                            <div class="detail-item">

                                <span>
                                    ID Jadwal
                                </span>

                                <strong>
                                    {{ $item->id_jadwal }}
                                </strong>

                            </div>


                            <div class="detail-item">

                                <span>
                                    Jumlah Peserta
                                </span>

                                <strong>

                                    {{ $item->jumlah_peserta }}
                                    Orang

                                </strong>

                            </div>


                            <div class="detail-item">

                                <span>
                                    Tanggal Pemesanan
                                </span>

                                <strong>

                                    {{ $item->tgl_pemesanan
                                        ? $item->tgl_pemesanan->format('d M Y H:i')
                                        : '-'
                                    }}

                                </strong>

                            </div>


                            <div class="detail-item">

                                <span>
                                    Total Pembayaran
                                </span>

                                <strong>

                                    Rp
                                    {{ number_format(
                                        $item->total_bayar,
                                        0,
                                        ',',
                                        '.'
                                    ) }}

                                </strong>

                            </div>


                        </div>

                    </div>



                    <!-- DOKUMEN -->

                    <div class="section">


                        <div class="section-title">
                            Dokumen Pelanggan
                        </div>


                        @forelse(
                            $item->dokumenPemesanan
                            as $dokumen
                        )


                            <div class="document">


                                <span>

                                    {{ $dokumen->jenis_dokumen
                                        ?? 'Dokumen'
                                    }}

                                </span>


                                @if($dokumen->file_path)


                                    <a
                                        href="{{ asset(
                                            'storage/' .
                                            $dokumen->file_path
                                        ) }}"
                                        target="_blank"
                                    >
                                        Lihat
                                    </a>


                                @else


                                    <span>
                                        Tidak tersedia
                                    </span>


                                @endif


                            </div>


                        @empty


                            <div
                                style="
                                    color:
                                    rgba(255,255,255,.5);
                                "
                            >

                                Belum ada dokumen.

                            </div>


                        @endforelse


                    </div>



                    <!-- PEMBAYARAN -->

                    <div class="section">


                        <div class="section-title">
                            Pembayaran
                        </div>


                        @if($item->pembayaran)


                            <div class="payment-box">


                                <div class="detail-item">


                                    <span>
                                        Metode
                                    </span>


                                    <strong>

                                        {{ $item->pembayaran
                                            ->metode_pembayaran
                                            ?? '-'
                                        }}

                                    </strong>


                                </div>



                                <div class="detail-item">


                                    <span>
                                        Status
                                    </span>


                                    <div class="payment-status">

                                        {{ $item->pembayaran
                                            ->status_pembayaran
                                            ?? '-'
                                        }}

                                    </div>


                                </div>


                            </div>



                            @if($item->pembayaran->bukti_pembayaran)


                                <button
                                    type="button"
                                    class="proof"
                                    onclick="
                                        openBukti(
                                            '{{ route(
                                                'pegawai.pembayaran.bukti',
                                                $item->pembayaran->id_pembayaran
                                            ) }}'
                                        )
                                    "
                                >
                                    Lihat Bukti
                                </button>


                            @else


                                <span class="no-proof">
                                    Belum ada bukti pembayaran
                                </span>


                            @endif


                        @else


                            <div
                                style="
                                    color:
                                    rgba(255,255,255,.5);
                                "
                            >

                                Belum ada data pembayaran.

                            </div>


                        @endif


                    </div>


                </div>

            </div>


        @empty


            <!-- EMPTY -->

            <div class="empty">


                <h2>
                    Belum Ada Pemesanan
                </h2>


                <p>
                    Pemesanan pelanggan akan muncul
                    di halaman ini.
                </p>


            </div>


        @endforelse


    </div>



    <!-- KEMBALI -->

    <a href="/pegawai/dashboard#operasional" class="back-btn">
    Kembali ke Dashboard
</a>


</main>



<!-- =====================================================
     MODAL BUKTI PEMBAYARAN
====================================================== -->

<div
    class="modal"
    id="buktiModal"
    onclick="closeBuktiOutside(event)"
>


    <div class="bukti-box">


        <button
            type="button"
            class="bukti-close"
            onclick="closeBukti()"
        >
            ×
        </button>


        <div class="bukti-title">
            Bukti Pembayaran
        </div>


        <div class="bukti-subtitle">
            Bukti pembayaran pelanggan
        </div>


        <div class="bukti-image-wrapper">


            <img
                id="buktiImage"
                src=""
                alt="Bukti Pembayaran"
                class="bukti-image"
            >


        </div>


    </div>


</div>



<script>


    /* =================================================
       MODAL DETAIL
    ================================================= */


    function openModal(id) {

        const modal =
            document.getElementById(id);

        if (!modal) return;

        modal.classList.add("active");

        document.body.style.overflow = "hidden";
    }



    function closeModal(id) {

        const modal =
            document.getElementById(id);

        if (!modal) return;

        modal.classList.remove("active");

        document.body.style.overflow = "";
    }



    function closeOutside(event, modal) {

        if (event.target === modal) {

            modal.classList.remove("active");

            document.body.style.overflow = "";
        }
    }



    /* =================================================
       MODAL BUKTI PEMBAYARAN
    ================================================= */


    function openBukti(url) {

        const modal =
            document.getElementById("buktiModal");

        const image =
            document.getElementById("buktiImage");

        image.src = url;

        modal.classList.add("active");

        document.body.style.overflow = "hidden";
    }



    function closeBukti() {

        const modal =
            document.getElementById("buktiModal");

        const image =
            document.getElementById("buktiImage");

        image.src = "";

        modal.classList.remove("active");

        document.body.style.overflow = "";
    }



    function closeBuktiOutside(event) {

        if (
            event.target.id === "buktiModal"
        ) {

            closeBukti();
        }
    }



    /* =================================================
       ESC UNTUK MENUTUP MODAL
    ================================================= */


    document.addEventListener(
        "keydown",
        function(event) {

            if (event.key === "Escape") {

                const activeModal =
                    document.querySelector(
                        ".modal.active"
                    );

                if (activeModal) {

                    activeModal.classList.remove(
                        "active"
                    );

                    document.body.style.overflow = "";
                }

            }

        }
    );

</script>


</body>

</html>