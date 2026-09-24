<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Pesanan Saya - FAWZATA TRAVEL
    </title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }


        body {

            min-height: 100vh;

            color: #173f58;

            background:
                linear-gradient(
                    rgba(224,244,251,.94),
                    rgba(242,250,253,.97)
                );

            padding-bottom: 70px;

        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {

            height: 78px;

            padding: 0 7%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            background:
                rgba(18,63,87,.97);

            box-shadow:
                0 8px 25px
                rgba(18,63,87,.12);

        }


        .logo {

            color: white;

            text-decoration: none;

            font-size: 27px;

            font-weight: 800;

            letter-spacing: 2px;

        }


        .logo span {

            color: #72d5ff;

        }


        .back {

            color: white;

            text-decoration: none;

            padding: 10px 17px;

            border-radius: 22px;

            background:
                rgba(255,255,255,.12);

            border:
                1px solid
                rgba(255,255,255,.20);

            font-size: 12px;

            font-weight: 700;

            transition: .25s;

        }


        .back:hover {

            background:
                rgba(255,255,255,.20);

            transform:
                translateY(-2px);

        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {

            width: 90%;

            max-width: 1100px;

            margin: auto;

            padding-top: 55px;

        }


        /* =====================================================
           HEADER
        ===================================================== */

        .small-title {

            color: #2685aa;

            font-size: 11px;

            font-weight: 800;

            letter-spacing: 3px;

            text-transform: uppercase;

        }


        h1 {

            margin-top: 8px;

            color: #153e58;

            font-size: 42px;

        }


        .subtitle {

            margin-top: 8px;

            color: #718a99;

            font-size: 14px;

        }


        /* =====================================================
           SUCCESS
        ===================================================== */

        .success {

            margin-top: 25px;

            padding: 15px 18px;

            border-radius: 15px;

            background: #edf9f2;

            border:
                1px solid
                #c6ead4;

            color: #267044;

            font-size: 13px;

        }


        /* =====================================================
           ORDERS
        ===================================================== */

        .orders {

            margin-top: 30px;

            display: grid;

            gap: 20px;

        }


        /* =====================================================
           ORDER CARD
        ===================================================== */

        .order-card {

            padding: 25px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.88);

            border:
                1px solid
                rgba(255,255,255,.95);

            box-shadow:
                0 15px 40px
                rgba(25,79,103,.08);

        }


        /* =====================================================
           ORDER TOP
        ===================================================== */

        .order-top {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;

            margin-bottom: 20px;

        }


        .booking-code {

            color: #1c769b;

            font-size: 14px;

            font-weight: 800;

        }


        .status {

            padding: 7px 13px;

            border-radius: 20px;

            background: #e4f5fb;

            color: #1c769b;

            font-size: 11px;

            font-weight: 800;

            text-transform: uppercase;

        }


        /* =====================================================
           PACKAGE
        ===================================================== */

        .package-name {

            color: #173f58;

            font-size: 21px;

            font-weight: 800;

            margin-bottom: 15px;

        }


        /* =====================================================
           DETAILS
        ===================================================== */

        .details {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 12px;

        }


        .detail {

            padding: 15px;

            border-radius: 15px;

            background:
                #f3f9fc;

            border:
                1px solid
                #e3eef2;

        }


        .detail-label {

            display: block;

            color: #7d95a2;

            font-size: 10px;

            font-weight: 800;

            text-transform: uppercase;

            margin-bottom: 6px;

        }


        .detail-value {

            color: #244e66;

            font-size: 13px;

            font-weight: 700;

        }


        /* =====================================================
           DETAIL PESERTA
        ===================================================== */

        .peserta-section {

            margin-top: 22px;

            padding-top: 22px;

            border-top:
                1px dashed
                #cbdde4;

        }


        .peserta-heading {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            margin-bottom: 15px;

        }


        .peserta-title {

            color: #173f58;

            font-size: 17px;

            font-weight: 800;

        }


        .peserta-count {

            padding: 6px 11px;

            border-radius: 20px;

            background:
                #e4f5fb;

            color: #1c769b;

            font-size: 10px;

            font-weight: 800;

        }


        /* =====================================================
           PESERTA GRID
        ===================================================== */

        .peserta-list {

            display: grid;

            gap: 10px;

        }


        .peserta-item {

            display: grid;

            grid-template-columns:
                45px
                1.8fr
                1fr
                .7fr
                1fr
                1fr;

            align-items: center;

            gap: 12px;

            padding: 14px 15px;

            border-radius: 15px;

            background:
                #f8fbfc;

            border:
                1px solid
                #e0edf1;

            transition: .25s;

        }


        .peserta-item:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 7px 18px
                rgba(25,79,103,.07);

        }


        .peserta-number {

            width: 32px;

            height: 32px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background:
                #123c57;

            color: white;

            font-size: 11px;

            font-weight: 800;

        }


        .peserta-data {

            min-width: 0;

        }


        .peserta-label {

            color: #8aa0aa;

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;

            margin-bottom: 4px;

        }


        .peserta-value {

            color: #244e66;

            font-size: 12px;

            font-weight: 700;

            word-break: break-word;

        }


        .jenis-kelamin {

            padding: 5px 9px;

            border-radius: 15px;

            background:
                #edf7fb;

            color: #24789b;

            font-size: 10px;

            font-weight: 700;

            display: inline-block;

        }


        .kategori {

            padding: 5px 9px;

            border-radius: 15px;

            background:
                #f0f7f2;

            color: #36724b;

            font-size: 10px;

            font-weight: 700;

            display: inline-block;

        }


        /* =====================================================
           CATATAN
        ===================================================== */

        .catatan-box {

            margin-top: 15px;

            padding: 15px;

            border-radius: 14px;

            background:
                #fffaf0;

            border:
                1px solid
                #f0e1bd;

        }


        .catatan-label {

            color: #9a8050;

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;

            margin-bottom: 5px;

        }


        .catatan-value {

            color: #6e5c38;

            font-size: 12px;

            line-height: 1.6;

        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {

            margin-top: 30px;

            padding: 50px;

            text-align: center;

            border-radius: 25px;

            background: white;

            color: #718a99;

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media(max-width:900px) {

            .details {

                grid-template-columns:
                    repeat(2, 1fr);

            }


            .peserta-item {

                grid-template-columns:
                    45px
                    1fr
                    1fr;

            }

        }


        @media(max-width:750px) {

            .container {

                width: 92%;

            }


            .order-top {

                align-items:
                    flex-start;

                flex-direction:
                    column;

            }


            .details {

                grid-template-columns:
                    1fr;

            }


            .peserta-item {

                grid-template-columns:
                    40px
                    1fr;

            }


            .peserta-item
            .peserta-data {

                grid-column:
                    span 1;

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

        FAWZATA<span> TRAVEL</span>

    </a>


    <a
        href="/paket-wisata"
        class="back"
    >

        Paket Wisata

    </a>


</nav>


<!-- =====================================================
     CONTENT
===================================================== -->

<div class="container">


    <div class="small-title">

        MY RESERVATION

    </div>


    <h1>

        Pesanan Saya

    </h1>


    <p class="subtitle">

        Daftar pemesanan perjalanan yang telah Anda buat.

    </p>


    <!-- =================================================
         SUCCESS
    ================================================= -->

    @if(session('success'))

        <div class="success">

            ✓
            {{ session('success') }}

        </div>

    @endif


    <!-- =================================================
         ORDERS
    ================================================= -->

    @if($pemesanan->count() > 0)


        <div class="orders">


            @foreach($pemesanan as $pesanan)


                <div class="order-card">


                    <!-- =================================
                         HEADER
                    ================================== -->

                    <div class="order-top">


                        <div class="booking-code">

                            KODE BOOKING:

                            {{ $pesanan->kode_booking }}

                        </div>


                        <div class="status">

                            {{ $pesanan->status_pemesanan }}

                        </div>


                    </div>


                    <!-- =================================
                         PAKET
                    ================================== -->

                    <div class="package-name">

                        {{ optional($pesanan->jadwalTour)->nama_jadwal
                            ?? 'Paket Wisata' }}

                    </div>


                    <!-- =================================
                         DETAIL PEMESANAN
                    ================================== -->

                    <div class="details">


                        <div class="detail">

                            <span class="detail-label">

                                Peserta

                            </span>


                            <span class="detail-value">

                                {{ $pesanan->jumlah_peserta }}

                                orang

                            </span>

                        </div>


                        <div class="detail">

                            <span class="detail-label">

                                Total

                            </span>


                            <span class="detail-value">

                                Rp

                                {{ number_format(
                                    $pesanan->total_bayar,
                                    0,
                                    ',',
                                    '.'
                                ) }}

                            </span>

                        </div>


                        <div class="detail">

                            <span class="detail-label">

                                Tanggal Pesan

                            </span>


                            <span class="detail-value">

                                {{ $pesanan->tgl_pemesanan
                                    ? \Carbon\Carbon::parse(
                                        $pesanan->tgl_pemesanan
                                    )->format('d M Y')
                                    : '-' }}

                            </span>

                        </div>


                        <div class="detail">

                            <span class="detail-label">

                                Keberangkatan

                            </span>


                            <span class="detail-value">

                                {{ optional($pesanan->jadwalTour)->tgl_keberangkatan
                                    ? \Carbon\Carbon::parse(
                                        $pesanan->jadwalTour->tgl_keberangkatan
                                    )->format('d M Y')
                                    : '-' }}

                            </span>

                        </div>


                    </div>


                    <!-- =================================
                         DATA PESERTA
                    ================================== -->

                    <div class="peserta-section">


                        <div class="peserta-heading">


                            <div class="peserta-title">

                                Data Peserta Perjalanan

                            </div>


                            <div class="peserta-count">

                                {{ $pesanan->jumlah_peserta }}

                                PESERTA

                            </div>


                        </div>


                        @php

                            $dataPeserta =
                                $pesanan->data_peserta ?? [];

                        @endphp


                        @if(count($dataPeserta) > 0)


                            <div class="peserta-list">


                                @foreach($dataPeserta as $index => $peserta)


                                    <div class="peserta-item">


                                        <!-- NOMOR -->

                                        <div class="peserta-number">

                                            {{ $index + 1 }}

                                        </div>


                                        <!-- NAMA -->

                                        <div class="peserta-data">

                                            <div class="peserta-label">

                                                Nama Lengkap

                                            </div>

                                            <div class="peserta-value">

                                                {{ $peserta['nama_peserta'] ?? '-' }}

                                            </div>

                                        </div>


                                        <!-- NIK -->

                                        <div class="peserta-data">

                                            <div class="peserta-label">

                                                NIK

                                            </div>

                                            <div class="peserta-value">

                                                {{ $peserta['nik'] ?? '-' }}

                                            </div>

                                        </div>


                                        <!-- USIA -->

                                        <div class="peserta-data">

                                            <div class="peserta-label">

                                                Usia

                                            </div>

                                            <div class="peserta-value">

                                                {{ $peserta['usia'] ?? '-' }}

                                                tahun

                                            </div>

                                        </div>


                                        <!-- KATEGORI -->

                                        <div class="peserta-data">

                                            <div class="peserta-label">

                                                Kategori

                                            </div>

                                            <div class="peserta-value">

                                                <span class="kategori">

                                                    {{ ucfirst(
                                                        $peserta['kategori']
                                                        ?? '-'
                                                    ) }}

                                                </span>

                                            </div>

                                        </div>


                                        <!-- JENIS KELAMIN -->

                                        <div class="peserta-data">

                                            <div class="peserta-label">

                                                Jenis Kelamin

                                            </div>

                                            <div class="peserta-value">

                                                <span class="jenis-kelamin">

                                                    @if(
                                                        ($peserta['jenis_kelamin'] ?? '')
                                                        === 'L'
                                                    )

                                                        Laki-laki

                                                    @elseif(
                                                        ($peserta['jenis_kelamin'] ?? '')
                                                        === 'P'
                                                    )

                                                        Perempuan

                                                    @else

                                                        -

                                                    @endif

                                                </span>

                                            </div>

                                        </div>


                                    </div>


                                @endforeach


                            </div>


                        @else


                            <div
                                style="
                                    padding:20px;
                                    border-radius:15px;
                                    background:#f8fbfc;
                                    color:#78909c;
                                    font-size:12px;
                                    text-align:center;
                                "
                            >

                                Data peserta belum tersedia.

                            </div>


                        @endif


                        <!-- =================================
                             CATATAN
                        ================================== -->

                        @if($pesanan->catatan_revisi)


                            <div class="catatan-box">


                                <div class="catatan-label">

                                    Catatan Pemesanan

                                </div>


                                <div class="catatan-value">

                                    {{ $pesanan->catatan_revisi }}

                                </div>


                            </div>


                        @endif


                    </div>


                </div>


            @endforeach


        </div>


    @else


        <div class="empty">

            Belum ada pemesanan.

        </div>


    @endif


</div>


</body>

</html>