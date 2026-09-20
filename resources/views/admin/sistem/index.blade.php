<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem - WISATA.</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {

            min-height: 100vh;

            color: white;

            background:
                linear-gradient(
                    rgba(3, 35, 52, .72),
                    rgba(5, 48, 67, .84)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2000&q=85");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            padding: 40px;

        }


        /* =========================
           CONTAINER
        ========================== */

        .container {

            max-width: 1250px;

            margin: auto;

        }


        /* =========================
           HEADER
        ========================== */

        .header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 30px;

        }


        .logo {

            color: white;

            text-decoration: none;

            font-size: 30px;

            font-weight: 800;

            letter-spacing: 2px;

        }


        .logo span {

            color: #9ddcff;

        }


        .back {

            padding: 12px 20px;

            border-radius: 25px;

            color: white;

            text-decoration: none;

            background: rgba(255,255,255,.13);

            border: 1px solid rgba(255,255,255,.25);

            backdrop-filter: blur(15px);

            transition: .3s;

        }


        .back:hover {

            transform: translateY(-3px);

            background: rgba(255,255,255,.22);

        }


        /* =========================
           MAIN CARD
        ========================== */

        .system-card {

            padding: 40px;

            border-radius: 30px;

            background: rgba(255,255,255,.13);

            border: 1px solid rgba(255,255,255,.25);

            backdrop-filter: blur(22px);

            box-shadow:
                0 30px 80px rgba(0,0,0,.25);

        }


        .small-title {

            color: #a7e2ff;

            font-size: 12px;

            letter-spacing: 4px;

            text-transform: uppercase;

            margin-bottom: 10px;

        }


        h1 {

            font-size: 42px;

            margin-bottom: 10px;

        }


        .subtitle {

            color: rgba(255,255,255,.72);

            line-height: 1.7;

            margin-bottom: 35px;

        }


        /* =========================
           STATISTICS
        ========================== */

        .statistics {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 18px;

            margin-bottom: 35px;

        }


        .stat-card {

            padding: 25px;

            border-radius: 24px;

            background: rgba(255,255,255,.12);

            border:
                1px solid rgba(255,255,255,.18);

            backdrop-filter: blur(15px);

            transition: .3s;

        }


        .stat-card:hover {

            transform: translateY(-6px);

            background: rgba(255,255,255,.17);

        }


        .stat-icon {

            width: 52px;

            height: 52px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 17px;

            background: rgba(157,220,255,.18);

            font-size: 25px;

            margin-bottom: 18px;

        }


        .stat-number {

            font-size: 32px;

            font-weight: 800;

            margin-bottom: 5px;

        }


        .stat-name {

            color: rgba(255,255,255,.68);

            font-size: 14px;

        }


        /* =========================
           INFORMATION
        ========================== */

        .information {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 20px;

        }


        .info-card {

            padding: 30px;

            border-radius: 25px;

            background: rgba(255,255,255,.11);

            border:
                1px solid rgba(255,255,255,.18);

            backdrop-filter: blur(15px);

        }


        .info-card h2 {

            font-size: 21px;

            margin-bottom: 22px;

        }


        .info-row {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;

            padding: 14px 0;

            border-bottom:
                1px solid rgba(255,255,255,.10);

        }


        .info-row:last-child {

            border-bottom: none;

        }


        .info-label {

            color: rgba(255,255,255,.68);

        }


        .info-value {

            font-weight: 700;

        }


        /* =========================
           ROLE
        ========================== */

        .role-list {

            display: flex;

            flex-direction: column;

            gap: 12px;

        }


        .role-item {

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 13px 15px;

            border-radius: 15px;

            background: rgba(255,255,255,.08);

        }


        .role-name {

            font-weight: 700;

        }


        .role-access {

            color: #c8efff;

            font-size: 13px;

        }


        /* =========================
           DATABASE
        ========================== */

        .database-status {

            margin-top: 25px;

            padding: 18px 22px;

            border-radius: 20px;

            display: flex;

            align-items: center;

            gap: 12px;

            background: rgba(103, 214, 151, .12);

            border:
                1px solid rgba(103, 214, 151, .25);

        }


        .status-dot {

            width: 11px;

            height: 11px;

            border-radius: 50%;

            background: #62df99;

            box-shadow:
                0 0 12px rgba(98,223,153,.8);

        }


        .database-status strong {

            color: #d8ffe8;

        }


        .database-status span {

            color: rgba(255,255,255,.70);

            font-size: 13px;

        }


        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 950px) {

            .statistics {

                grid-template-columns:
                    repeat(2, 1fr);

            }

            .information {

                grid-template-columns: 1fr;

            }

        }


        @media (max-width: 600px) {

            body {

                padding: 20px;

            }

            .header {

                align-items: flex-start;

                gap: 15px;

            }

            h1 {

                font-size: 32px;

            }

            .system-card {

                padding: 25px;

            }

            .statistics {

                grid-template-columns: 1fr;

            }

        }

    </style>

</head>


<body>


<div class="container">


    <!-- =========================
         HEADER
    ========================== -->

    <div class="header">

        <a
            href="/admin/dashboard"
            class="logo"
        >
            WISATA<span>.</span>
        </a>


        <a
            href="/admin/dashboard"
            class="back"
        >
            ← Kembali ke Dashboard
        </a>

    </div>



    <!-- =========================
         SYSTEM
    ========================== -->

    <div class="system-card">


        <div class="small-title">
            SYSTEM INFORMATION
        </div>


        <h1>
            ⚙️ Sistem WISATA.
        </h1>


        <p class="subtitle">
            Informasi dan kondisi sistem perjalanan wisata
        </p>



        <!-- =========================
             STATISTICS
        ========================== -->

        <div class="statistics">


            <!-- PENGGUNA -->

            <div class="stat-card">

                <div class="stat-icon">
                    👥
                </div>

                <div class="stat-number">
                    {{ $totalPengguna }}
                </div>

                <div class="stat-name">
                    Pengguna
                </div>

            </div>



            <!-- PAKET -->

            <div class="stat-card">

                <div class="stat-icon">
                    🌴
                </div>

                <div class="stat-number">
                    {{ $totalPaket }}
                </div>

                <div class="stat-name">
                    Paket Wisata
                </div>

            </div>



            <!-- JADWAL -->

            <div class="stat-card">

                <div class="stat-icon">
                    📅
                </div>

                <div class="stat-number">
                    {{ $totalJadwal }}
                </div>

                <div class="stat-name">
                    Jadwal Tour
                </div>

            </div>



            <!-- PEMESANAN -->

            <div class="stat-card">

                <div class="stat-icon">
                    🎫
                </div>

                <div class="stat-number">
                    {{ $totalPemesanan }}
                </div>

                <div class="stat-name">
                    Pesanan
                </div>

            </div>


        </div>



        <!-- =========================
             INFORMATION
        ========================== -->

        <div class="information">


            <!-- INFORMASI SISTEM -->

            <div class="info-card">

                <h2>
                    ℹ️ Informasi Sistem
                </h2>


                <div class="info-row">

                    <span class="info-label">
                        Nama Sistem
                    </span>

                    <span class="info-value">
                        WISATA.
                    </span>

                </div>


                <div class="info-row">

                    <span class="info-label">
                        Status
                    </span>

                    <span class="info-value">
                        Aktif
                    </span>

                </div>


                <div class="info-row">

                    <span class="info-label">
                        Versi
                    </span>

                    <span class="info-value">
                        1.0
                    </span>

                </div>

            </div>



            <!-- HAK AKSES -->

            <div class="info-card">

                <h2>
                    🔐 Hak Akses
                </h2>


                <div class="role-list">


                    <div class="role-item">

                        <span class="role-name">
                            ADMIN
                        </span>

                        <span class="role-access">
                            Kelola
                        </span>

                    </div>


                    <div class="role-item">

                        <span class="role-name">
                            PEGAWAI
                        </span>

                        <span class="role-access">
                            Operasional
                        </span>

                    </div>


                    <div class="role-item">

                        <span class="role-name">
                            PELANGGAN
                        </span>

                        <span class="role-access">
                            Pemesanan
                        </span>

                    </div>


                </div>

            </div>


        </div>



        <!-- =========================
             DATABASE
        ========================== -->

        <div class="database-status">

            <div class="status-dot"></div>

            <div>

                <strong>
                    Database Terhubung
                </strong>

                <br>

                <span>
                    Sistem berhasil terhubung dengan database WISATA.
                </span>

            </div>

        </div>


    </div>


</div>


</body>

</html>