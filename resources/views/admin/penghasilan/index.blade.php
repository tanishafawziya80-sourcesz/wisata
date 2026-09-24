<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Penghasilan - WISATA.</title>

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


        /* ================= BACKGROUND ================= */

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: -3;

            background:
                radial-gradient(
                    circle at 15% 15%,
                    rgba(139, 232, 255, .20),
                    transparent 28%
                ),
                radial-gradient(
                    circle at 85% 25%,
                    rgba(255, 255, 255, .13),
                    transparent 25%
                ),
                radial-gradient(
                    circle at 50% 90%,
                    rgba(70, 210, 230, .18),
                    transparent 32%
                );
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
                rgba(255,255,255,.10);

            backdrop-filter: blur(22px);
            -webkit-backdrop-filter: blur(22px);

            border-bottom:
                1px solid rgba(255,255,255,.18);

            z-index: 1000;
        }


        .logo {

            color: white;
            text-decoration: none;

            font-size: 27px;
            font-weight: 850;

            letter-spacing: 2px;
        }


        .logo span {
            color: #9cecff;
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

            transform: translateY(-3px);

            box-shadow:
                0 12px 30px rgba(0,0,0,.20);
        }


        /* ================= CONTAINER ================= */

        .container {

            width: 88%;
            max-width: 1280px;

            margin: auto;

            padding-top: 130px;
            padding-bottom: 100px;
        }


        /* ================= HEADER ================= */

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
                clamp(40px, 6vw, 64px);

            line-height: 1.05;

            margin-bottom: 14px;

            font-weight: 850;
        }


        .header p {

            max-width: 720px;

            color:
                rgba(255,255,255,.74);

            line-height: 1.75;

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

            padding: 25px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.15);

            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            border:
                1px solid rgba(255,255,255,.23);

            box-shadow:
                0 20px 50px rgba(0,35,55,.18);

            transition: .35s ease;

            animation:
                fadeUp .8s ease both;
        }


        .stat-card:hover {

            transform:
                translateY(-7px);

            background:
                rgba(255,255,255,.20);
        }


        .stat-label {

            color:
                rgba(255,255,255,.62);

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: 1.5px;

            margin-bottom: 8px;
        }


        .stat-number {

            color: white;

            font-size: 32px;

            font-weight: 850;
        }


        .stat-desc {

            color:
                rgba(255,255,255,.45);

            font-size: 12px;

            margin-top: 7px;
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
                fadeUp .9s ease both;
        }


        .card-title {

            color: white;

            font-size: 22px;

            font-weight: 800;
        }


        .card-subtitle {

            color:
                rgba(255,255,255,.55);

            font-size: 13px;

            margin-top: 5px;

            margin-bottom: 24px;
        }


        /* ================= BOOKING ================= */

        .booking {

            display: grid;

            grid-template-columns:
                1.2fr 1fr 1fr 1fr;

            gap: 18px;

            align-items: center;

            padding: 21px;

            margin-bottom: 13px;

            border-radius: 22px;

            background:
                rgba(255,255,255,.105);

            border:
                1px solid rgba(255,255,255,.13);

            transition: .35s ease;
        }


        .booking:last-child {
            margin-bottom: 0;
        }


        .booking:hover {

            transform:
                translateX(5px);

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
        }


        .info-value {

            color: white;

            font-size: 14px;

            font-weight: 650;
        }


        .income {

            color: #b8efff;

            font-size: 17px;

            font-weight: 800;
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

            background: #8be0bb;

            box-shadow:
                0 0 10px #8be0bb;
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

            transition: .3s ease;
        }


        .back-btn:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 10px 30px rgba(0,0,0,.18);
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
        }

    </style>

</head>


<body>


    <!-- NAVBAR -->

    <nav class="navbar">

        <a
            href="/admin/dashboard"
            class="logo"
        >
            WISATA<span>.</span>
        </a>


        <div class="nav-right">

            <div class="role">
                ADMIN
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


    <!-- CONTENT -->

    <main class="container">


        <!-- HEADER -->

        <div class="header">

            <div class="small-title">
                Admin Workspace
            </div>


            <h1>
                Penghasilan
            </h1>


            <p>
                Pantau jumlah pemesanan dan total
                penghasilan dari perjalanan wisata.
            </p>

        </div>


        @php

            /*
             * Hanya pemesanan yang sudah disetujui
             * dihitung sebagai penghasilan.
             */

            $pesananSelesai = $pemesanan->filter(function ($item) {

                $status = strtolower(
                    trim($item->status_pemesanan ?? '')
                );

                return
                    str_contains($status, 'setuju') ||
                    str_contains($status, 'selesai');

            });


            $jumlahPesanan =
                $pesananSelesai->count();


            $totalPenghasilan =
                $pesananSelesai->sum('total_bayar');


            $rataRata =
                $jumlahPesanan > 0
                    ? $totalPenghasilan / $jumlahPesanan
                    : 0;

        @endphp


        <!-- STATISTIK -->

        <div class="stats">


            <!-- TOTAL PENGHASILAN -->

            <div class="stat-card">

                <div class="stat-label">
                    Total Penghasilan
                </div>


                <div class="stat-number">

                    Rp
                    {{ number_format(
                        $totalPenghasilan,
                        0,
                        ',',
                        '.'
                    ) }}

                </div>


                <div class="stat-desc">
                    Dari pemesanan yang disetujui
                </div>

            </div>


            <!-- JUMLAH PESANAN -->

            <div class="stat-card">

                <div class="stat-label">
                    Pesanan Berhasil
                </div>


                <div class="stat-number">

                    {{ $jumlahPesanan }}

                </div>


                <div class="stat-desc">
                    Pemesanan yang sudah disetujui
                </div>

            </div>


            <!-- RATA-RATA -->

            <div class="stat-card">

                <div class="stat-label">
                    Rata-rata Penghasilan
                </div>


                <div class="stat-number">

                    Rp
                    {{ number_format(
                        $rataRata,
                        0,
                        ',',
                        '.'
                    ) }}

                </div>


                <div class="stat-desc">
                    Rata-rata setiap pemesanan
                </div>

            </div>


        </div>


        <!-- DAFTAR PENGHASILAN -->

        <div class="card">


            <div class="card-title">
                Riwayat Penghasilan
            </div>


            <div class="card-subtitle">
                Daftar pemesanan yang menghasilkan pendapatan
            </div>


            @forelse($pesananSelesai as $item)


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


                    <!-- TANGGAL -->

                    <div class="info">

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

                    </div>


                    <!-- PENGHASILAN -->

                    <div>

                        <div class="info-label">
                            Penghasilan
                        </div>


                        <div class="income">

                            Rp
                            {{ number_format(
                                $item->total_bayar,
                                0,
                                ',',
                                '.'
                            ) }}

                        </div>


                        <br>


                        <span class="status">

                            <span class="status-dot"></span>

                            Selesai

                        </span>

                    </div>


                </div>


            @empty


                <div class="empty">

                    <h2>
                        Belum Ada Penghasilan
                    </h2>


                    <p>
                        Penghasilan akan muncul
                        setelah terdapat pemesanan
                        yang sudah disetujui.
                    </p>

                </div>


            @endforelse


        </div>


        <!-- KEMBALI -->

        <a
            href="/admin/dashboard"
            class="back-btn"
        >
            Kembali ke Dashboard
        </a>


    </main>


</body>

</html>