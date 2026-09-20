<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dokumen Perjalanan - WISATA.</title>

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

            color: white;

            overflow-x: hidden;

            background:

                linear-gradient(
                    rgba(4, 42, 67, .72),
                    rgba(5, 74, 91, .86)
                ),

                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=90");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

        }


        /* =========================================
           BACKGROUND EFFECT
        ========================================= */

        body::before {

            content: "";

            position: fixed;

            inset: 0;

            pointer-events: none;

            background:

                radial-gradient(
                    circle at 15% 20%,
                    rgba(117, 224, 255, .16),
                    transparent 30%
                ),

                radial-gradient(
                    circle at 85% 75%,
                    rgba(255, 255, 255, .10),
                    transparent 30%
                );

            z-index: -1;

        }


        /* =========================================
           FLOATING LIGHT
        ========================================= */

        .light {

            position: fixed;

            width: 220px;

            height: 220px;

            border-radius: 50%;

            background: rgba(150, 235, 255, .10);

            filter: blur(35px);

            pointer-events: none;

            animation: floatingLight 8s ease-in-out infinite;

        }


        .light.one {

            top: 120px;

            left: -80px;

        }


        .light.two {

            right: -80px;

            bottom: 80px;

            animation-delay: 3s;

        }


        @keyframes floatingLight {

            0%,
            100% {

                transform:
                    translateY(0)
                    translateX(0);

            }

            50% {

                transform:
                    translateY(-35px)
                    translateX(25px);

            }

        }


        /* =========================================
           NAVBAR
        ========================================= */

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
                blur(20px);

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

            transition: .3s;

        }


        .logo span {

            color: #91ddff;

        }


        .logo:hover {

            transform:
                translateY(-2px);

        }


        .nav-right {

            display: flex;

            align-items: center;

            gap: 15px;

        }


        .role {

            padding: 9px 17px;

            border-radius: 30px;

            background:
                rgba(255,255,255,.12);

            border:
                1px solid rgba(255,255,255,.22);

            color: #e3f8ff;

            font-size: 13px;

            font-weight: 700;

        }


        .logout {

            border: none;

            padding: 10px 18px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.93);

            color: #123c57;

            font-weight: 700;

            cursor: pointer;

            transition: .3s;

        }


        .logout:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 10px 25px rgba(0,0,0,.22);

        }


        /* =========================================
           CONTAINER
        ========================================= */

        .container {

            width: 88%;

            max-width: 1250px;

            margin: auto;

            padding-top: 130px;

            padding-bottom: 90px;

        }


        /* =========================================
           HEADER
        ========================================= */

        .header {

            margin-bottom: 35px;

            animation:
                fadeUp .8s ease;

        }


        .small-title {

            font-size: 12px;

            letter-spacing: 4px;

            text-transform: uppercase;

            color: #a9e8ff;

            margin-bottom: 12px;

        }


        .header h1 {

            font-size:
                clamp(38px, 6vw, 62px);

            line-height: 1.05;

            margin-bottom: 14px;

        }


        .header p {

            max-width: 650px;

            color:
                rgba(255,255,255,.73);

            line-height: 1.7;

        }


        /* =========================================
           STAT
        ========================================= */

        .stats {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 18px;

            margin-bottom: 25px;

        }


        .stat-card {

            padding: 23px;

            border-radius: 24px;

            background:
                rgba(255,255,255,.11);

            backdrop-filter:
                blur(20px);

            border:
                1px solid rgba(255,255,255,.18);

            box-shadow:
                0 20px 55px rgba(0,0,0,.18);

            transition:
                .35s ease;

            animation:
                fadeUp .8s ease;

        }


        .stat-card:hover {

            transform:
                translateY(-7px);

            background:
                rgba(255,255,255,.16);

        }


        .stat-label {

            color:
                rgba(255,255,255,.58);

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: 1.5px;

            margin-bottom: 7px;

        }


        .stat-number {

            font-size: 34px;

            font-weight: 800;

        }


        .stat-line {

            width: 45px;

            height: 3px;

            margin-top: 13px;

            border-radius: 10px;

            background: #94e2ff;

            animation:
                lineMove 2s ease-in-out infinite;

        }


        @keyframes lineMove {

            0%,
            100% {

                width: 35px;

            }

            50% {

                width: 70px;

            }

        }


        /* =========================================
           MAIN CARD
        ========================================= */

        .document-card {

            padding: 28px;

            border-radius: 30px;

            background:
                rgba(255,255,255,.11);

            backdrop-filter:
                blur(24px);

            border:
                1px solid rgba(255,255,255,.19);

            box-shadow:
                0 30px 80px rgba(0,0,0,.23);

            animation:
                fadeUp 1s ease;

        }


        .card-head {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 22px;

        }


        .card-title {

            font-size: 21px;

            font-weight: 800;

        }


        .card-subtitle {

            color:
                rgba(255,255,255,.52);

            font-size: 13px;

            margin-top: 5px;

        }


        /* =========================================
           DOCUMENT ITEM
        ========================================= */

        .document-item {

            display: grid;

            grid-template-columns:
                1.1fr 1.2fr 1fr auto;

            gap: 18px;

            align-items: center;

            padding: 20px;

            margin-bottom: 13px;

            border-radius: 22px;

            background:
                rgba(255,255,255,.07);

            border:
                1px solid rgba(255,255,255,.10);

            transition:
                .35s ease;

            animation:
                itemIn .7s ease both;

        }


        .document-item:nth-child(2) {
            animation-delay: .05s;
        }

        .document-item:nth-child(3) {
            animation-delay: .10s;
        }

        .document-item:nth-child(4) {
            animation-delay: .15s;
        }

        .document-item:nth-child(5) {
            animation-delay: .20s;
        }


        .document-item:hover {

            transform:
                translateX(6px)
                translateY(-2px);

            background:
                rgba(255,255,255,.13);

            border-color:
                rgba(155,230,255,.30);

            box-shadow:
                0 12px 30px rgba(0,0,0,.15);

        }


        @keyframes itemIn {

            from {

                opacity: 0;

                transform:
                    translateY(18px);

            }

            to {

                opacity: 1;

                transform:
                    translateY(0);

            }

        }


        .booking-code {

            color: #a5e5ff;

            font-size: 12px;

            font-weight: 800;

            letter-spacing: 1px;

            margin-bottom: 7px;

        }


        .customer {

            font-size: 17px;

            font-weight: 750;

        }


        .customer-email {

            color:
                rgba(255,255,255,.50);

            font-size: 12px;

            margin-top: 3px;

        }


        .info {

            display: flex;

            flex-direction: column;

            gap: 5px;

        }


        .info-label {

            color:
                rgba(255,255,255,.43);

            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: 1px;

        }


        .info-value {

            font-size: 14px;

            font-weight: 650;

        }


        /* =========================================
           DOCUMENT STATUS
        ========================================= */

        .document-status {

            display: inline-flex;

            align-items: center;

            gap: 7px;

            padding: 7px 12px;

            border-radius: 20px;

            background:
                rgba(140,230,255,.12);

            border:
                1px solid rgba(140,230,255,.22);

            color: #c9f4ff;

            font-size: 11px;

            font-weight: 800;

            text-transform: uppercase;

        }


        .status-dot {

            width: 7px;

            height: 7px;

            border-radius: 50%;

            background: #83e3ff;

            box-shadow:
                0 0 10px #83e3ff;

            animation:
                pulse 1.8s infinite;

        }


        @keyframes pulse {

            0%,
            100% {

                transform: scale(1);

                opacity: 1;

            }

            50% {

                transform: scale(1.4);

                opacity: .55;

            }

        }


        /* =========================================
           BUTTON
        ========================================= */

        .view-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 10px 16px;

            border-radius: 18px;

            text-decoration: none;

            color: #dff9ff;

            background:
                rgba(140,225,255,.13);

            border:
                1px solid rgba(140,225,255,.28);

            font-size: 12px;

            font-weight: 750;

            transition: .3s;

            white-space: nowrap;

        }


        .view-btn:hover {

            transform:
                translateY(-3px);

            background:
                rgba(140,225,255,.24);

            box-shadow:
                0 10px 25px rgba(0,0,0,.18);

        }


        /* =========================================
           EMPTY
        ========================================= */

        .empty {

            text-align: center;

            padding: 65px 20px;

            color:
                rgba(255,255,255,.58);

        }


        .empty h2 {

            color: white;

            margin-bottom: 8px;

        }


        /* =========================================
           BACK
        ========================================= */

        .back-btn {

            display: inline-block;

            margin-top: 25px;

            padding: 12px 20px;

            border-radius: 25px;

            text-decoration: none;

            background:
                rgba(255,255,255,.93);

            color: #123c57;

            font-weight: 750;

            transition: .3s;

        }


        .back-btn:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 12px 30px rgba(0,0,0,.20);

        }


        /* =========================================
           ANIMATION
        ========================================= */

        @keyframes fadeUp {

            from {

                opacity: 0;

                transform:
                    translateY(28px);

            }

            to {

                opacity: 1;

                transform:
                    translateY(0);

            }

        }


        /* =========================================
           RESPONSIVE
        ========================================= */

        @media(max-width: 900px) {

            .stats {

                grid-template-columns: 1fr;

            }


            .document-item {

                grid-template-columns:
                    1fr 1fr;

            }

        }


        @media(max-width: 600px) {

            .navbar {

                padding: 0 5%;

            }


            .role {

                display: none;

            }


            .container {

                width: 92%;

            }


            .document-card {

                padding: 18px;

            }


            .document-item {

                grid-template-columns: 1fr;

            }

        }

    </style>

</head>


<body>


    <div class="light one"></div>

    <div class="light two"></div>


    <!-- =========================================
         NAVBAR
    ========================================= -->

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


    <!-- =========================================
         CONTENT
    ========================================= -->

    <main class="container">


        <div class="header">

            <div class="small-title">
                Travel Operations
            </div>


            <h1>
                Dokumen Perjalanan
            </h1>


            <p>
                Kelola dan periksa dokumen pelanggan
                yang berkaitan dengan pemesanan perjalanan.
            </p>

        </div>


        @php

            $totalDokumen = $dokumen->count();

            $denganFile = $dokumen
                ->whereNotNull('file_path')
                ->count();

            $tanpaFile = $totalDokumen - $denganFile;

        @endphp


        <!-- =========================================
             STATISTICS
        ========================================= -->

        <div class="stats">


            <div class="stat-card">

                <div class="stat-label">
                    Total Dokumen
                </div>

                <div class="stat-number">
                    {{ $totalDokumen }}
                </div>

                <div class="stat-line"></div>

            </div>


            <div class="stat-card">

                <div class="stat-label">
                    Dokumen Tersedia
                </div>

                <div class="stat-number">
                    {{ $denganFile }}
                </div>

                <div class="stat-line"></div>

            </div>


            <div class="stat-card">

                <div class="stat-label">
                    Belum Tersedia
                </div>

                <div class="stat-number">
                    {{ $tanpaFile }}
                </div>

                <div class="stat-line"></div>

            </div>


        </div>


        <!-- =========================================
             DOCUMENT CARD
        ========================================= -->

        <div class="document-card">


            <div class="card-head">

                <div>

                    <div class="card-title">
                        Daftar Dokumen
                    </div>

                    <div class="card-subtitle">
                        Dokumen pelanggan berdasarkan pemesanan
                    </div>

                </div>

            </div>


            @forelse($dokumen as $item)


                <div class="document-item">


                    <!-- CUSTOMER -->

                    <div>

                        <div class="booking-code">

                            {{ $item->pemesanan->kode_booking ?? '-' }}

                        </div>


                        <div class="customer">

                            {{ $item->pemesanan->pelanggan->nama_lengkap ?? 'Pelanggan' }}

                        </div>


                        <div class="customer-email">

                            {{ $item->pemesanan->pelanggan->email ?? '-' }}

                        </div>

                    </div>


                    <!-- DOCUMENT -->

                    <div class="info">

                        <div class="info-label">
                            Jenis Dokumen
                        </div>


                        <div class="info-value">

                            {{ $item->jenis_dokumen ?? '-' }}

                        </div>


                        <div class="info-label">
                            ID Dokumen
                        </div>


                        <div class="info-value">

                            #{{ $item->id_dokumen }}

                        </div>

                    </div>


                    <!-- STATUS -->

                    <div>

                        @if($item->file_path)

                            <span class="document-status">

                                <span class="status-dot"></span>

                                Tersedia

                            </span>

                        @else

                            <span class="document-status">

                                <span class="status-dot"></span>

                                Belum Tersedia

                            </span>

                        @endif

                    </div>


                    <!-- ACTION -->

                    <div>

                        @if($item->file_path)

                            <a
                                href="{{ asset('storage/' . $item->file_path) }}"
                                target="_blank"
                                class="view-btn"
                            >
                                Lihat Dokumen
                            </a>

                        @else

                            <span
                                style="
                                    color:rgba(255,255,255,.40);
                                    font-size:12px;
                                "
                            >
                                Tidak tersedia
                            </span>

                        @endif

                    </div>


                </div>


            @empty


                <div class="empty">

                    <h2>
                        Belum Ada Dokumen
                    </h2>

                    <p>
                        Dokumen pelanggan akan muncul
                        di halaman ini setelah tersedia.
                    </p>

                </div>


            @endforelse


        </div>


        <a href="/pegawai/dashboard#operasional" class="back-btn">
    Kembali ke Dashboard
</a>


    </main>


</body>

</html>