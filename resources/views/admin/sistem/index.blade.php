<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Sistem - WISATA.</title>


    <style>

        /* =================================================
           RESET
        ================================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }


        html {
            scroll-behavior: smooth;
        }


        /* =================================================
           BODY
        ================================================= */

        body {

            min-height: 100vh;

            color: #17384d;

            overflow-x: hidden;

            background:
                linear-gradient(
                    180deg,
                    #dff5fc 0%,
                    #eaf8fc 40%,
                    #f5fbfd 100%
                );

        }


        /* =================================================
           BACKGROUND LANGIT
        ================================================= */

        .page-background {

            position: fixed;

            inset: 0;

            z-index: -10;

            overflow: hidden;

            background:
                linear-gradient(
                    180deg,
                    #d7f1fa 0%,
                    #e8f8fc 48%,
                    #f6fbfd 100%
                );

        }


        /* =================================================
           CAHAYA LANGIT
        ================================================= */

        .page-background::before {

            content: "";

            position: absolute;

            width: 500px;

            height: 500px;

            top: -210px;

            right: 10%;

            border-radius: 50%;

            background:
                rgba(255,255,255,.55);

            filter:
                blur(10px);

        }


        /* =================================================
           AWAN 1
        ================================================= */

        .cloud-one {

            position: absolute;

            width: 480px;

            height: 150px;

            top: 80px;

            left: 12%;

            opacity: .78;

            filter: blur(2px);

            animation:
                cloudMove 28s
                ease-in-out
                infinite
                alternate;

        }


        .cloud-one::before {

            content: "";

            position: absolute;

            width: 180px;

            height: 100px;

            left: 80px;

            bottom: 10px;

            border-radius: 100px;

            background:
                rgba(255,255,255,.90);

            box-shadow:

                95px 18px 0
                rgba(255,255,255,.90),

                165px 25px 0
                rgba(255,255,255,.88),

                235px 38px 0
                rgba(255,255,255,.82);

        }


        .cloud-one::after {

            content: "";

            position: absolute;

            width: 120px;

            height: 100px;

            left: 160px;

            bottom: 35px;

            border-radius: 50%;

            background:
                rgba(255,255,255,.94);

        }


        /* =================================================
           AWAN 2
        ================================================= */

        .cloud-two {

            position: absolute;

            width: 560px;

            height: 170px;

            top: 420px;

            right: -80px;

            opacity: .62;

            filter: blur(3px);

            animation:
                cloudMoveReverse 34s
                ease-in-out
                infinite
                alternate;

        }


        .cloud-two::before {

            content: "";

            position: absolute;

            width: 190px;

            height: 105px;

            left: 80px;

            bottom: 10px;

            border-radius: 100px;

            background:
                rgba(255,255,255,.88);

            box-shadow:

                100px 20px 0
                rgba(255,255,255,.88),

                180px 30px 0
                rgba(255,255,255,.84),

                260px 42px 0
                rgba(255,255,255,.78);

        }


        .cloud-two::after {

            content: "";

            position: absolute;

            width: 135px;

            height: 110px;

            left: 180px;

            bottom: 40px;

            border-radius: 50%;

            background:
                rgba(255,255,255,.90);

        }


        /* =================================================
           AWAN 3
        ================================================= */

        .cloud-three {

            position: absolute;

            width: 500px;

            height: 150px;

            left: -130px;

            bottom: 130px;

            opacity: .58;

            filter: blur(3px);

            animation:
                cloudMove 38s
                ease-in-out
                infinite
                alternate;

        }


        .cloud-three::before {

            content: "";

            position: absolute;

            width: 170px;

            height: 90px;

            left: 70px;

            bottom: 5px;

            border-radius: 100px;

            background:
                rgba(255,255,255,.82);

            box-shadow:

                90px 18px 0
                rgba(255,255,255,.84),

                170px 28px 0
                rgba(255,255,255,.80),

                240px 38px 0
                rgba(255,255,255,.76);

        }


        /* =================================================
           ANIMASI AWAN
        ================================================= */

        @keyframes cloudMove {

            from {
                transform:
                    translateX(-25px);
            }

            to {
                transform:
                    translateX(55px);
            }

        }


        @keyframes cloudMoveReverse {

            from {
                transform:
                    translateX(45px);
            }

            to {
                transform:
                    translateX(-40px);
            }

        }


        /* =================================================
           CONTAINER
        ================================================= */

        .container {

            width: 90%;

            max-width: 1250px;

            margin:
                0 auto;

            padding:
                45px 0 70px;

        }


        /* =================================================
           HEADER
        ================================================= */

        .header {

            display: flex;

            justify-content:
                space-between;

            align-items:
                center;

            margin-bottom:
                30px;

        }


        /* =================================================
           LOGO
        ================================================= */

        .logo {

            color:
                #123c57;

            text-decoration:
                none;

            font-size:
                30px;

            font-weight:
                800;

            letter-spacing:
                2px;

        }


        .logo span {

            color:
                #62b8dc;

        }


        /* =================================================
           BACK BUTTON
        ================================================= */

        .back {

            display:
                inline-flex;

            align-items:
                center;

            justify-content:
                center;

            padding:
                11px 19px;

            border-radius:
                22px;

            color:
                #31566b;

            text-decoration:
                none;

            background:
                rgba(255,255,255,.62);

            border:
                1px solid
                rgba(255,255,255,.90);

            backdrop-filter:
                blur(15px);

            -webkit-backdrop-filter:
                blur(15px);

            font-weight:
                700;

            font-size:
                13px;

            transition:
                .3s;

            box-shadow:
                0 10px 30px
                rgba(27,71,93,.07);

        }


        .back:hover {

            transform:
                translateY(-3px);

            background:
                rgba(255,255,255,.88);

            box-shadow:
                0 15px 35px
                rgba(27,71,93,.12);

        }


        /* =================================================
           SYSTEM CARD
        ================================================= */

        .system-card {

            position:
                relative;

            overflow:
                hidden;

            padding:
                45px;

            border-radius:
                32px;

            background:
                rgba(255,255,255,.58);

            border:
                1px solid
                rgba(255,255,255,.88);

            backdrop-filter:
                blur(24px);

            -webkit-backdrop-filter:
                blur(24px);

            box-shadow:
                0 30px 80px
                rgba(27,71,93,.10);

            animation:
                fadeUp .7s ease both;

        }


        .system-card::before {

            content: "";

            position:
                absolute;

            width:
                280px;

            height:
                280px;

            right:
                -110px;

            top:
                -120px;

            border-radius:
                50%;

            background:
                rgba(111,190,218,.18);

        }


        .system-card::after {

            content: "";

            position:
                absolute;

            width:
                220px;

            height:
                220px;

            left:
                -100px;

            bottom:
                -120px;

            border-radius:
                50%;

            background:
                rgba(133,205,228,.12);

        }


        /* =================================================
           SYSTEM HEADER
        ================================================= */

        .system-header {

            position:
                relative;

            z-index:
                2;

            margin-bottom:
                38px;

        }


        .small-title {

            color:
                #4e91b2;

            font-size:
                11px;

            font-weight:
                800;

            letter-spacing:
                3px;

            text-transform:
                uppercase;

            margin-bottom:
                10px;

        }


        h1 {

            font-size:
                clamp(30px, 4vw, 43px);

            color:
                #123c57;

            margin-bottom:
                10px;

            font-weight:
                800;

            line-height:
                1.15;

        }


        .subtitle {

            color:
                #6c8490;

            line-height:
                1.7;

            font-size:
                14px;

        }


        /* =================================================
           STATISTICS
        ================================================= */

        .statistics {

            position:
                relative;

            z-index:
                2;

            display:
                grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap:
                18px;

            margin-bottom:
                38px;

        }


        .stat-card {

            position:
                relative;

            overflow:
                hidden;

            padding:
                25px;

            min-height:
                125px;

            border-radius:
                23px;

            background:
                rgba(255,255,255,.65);

            border:
                1px solid
                rgba(255,255,255,.92);

            backdrop-filter:
                blur(18px);

            -webkit-backdrop-filter:
                blur(18px);

            box-shadow:
                0 15px 35px
                rgba(27,71,93,.06);

            transition:
                .35s;

        }


        .stat-card::after {

            content: "";

            position:
                absolute;

            width:
                90px;

            height:
                90px;

            right:
                -35px;

            bottom:
                -35px;

            border-radius:
                50%;

            background:
                rgba(105,183,216,.13);

        }


        .stat-card:hover {

            transform:
                translateY(-6px);

            background:
                rgba(255,255,255,.82);

            box-shadow:
                0 22px 45px
                rgba(27,71,93,.10);

        }


        .stat-number {

            position:
                relative;

            z-index:
                2;

            font-size:
                30px;

            font-weight:
                800;

            color:
                #123c57;

            margin-bottom:
                6px;

        }


        .stat-name {

            position:
                relative;

            z-index:
                2;

            color:
                #6c8490;

            font-size:
                11px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                1.5px;

        }


        /* =================================================
           INFORMATION
        ================================================= */

        .information {

            position:
                relative;

            z-index:
                2;

            display:
                grid;

            grid-template-columns:
                1fr 1fr;

            gap:
                22px;

        }


        /* =================================================
           INFO CARD
        ================================================= */

        .info-card {

            padding:
                30px;

            border-radius:
                26px;

            background:
                rgba(255,255,255,.60);

            border:
                1px solid
                rgba(255,255,255,.90);

            backdrop-filter:
                blur(18px);

            -webkit-backdrop-filter:
                blur(18px);

            box-shadow:
                0 18px 40px
                rgba(27,71,93,.06);

            transition:
                .35s;

        }


        .info-card:hover {

            transform:
                translateY(-4px);

            background:
                rgba(255,255,255,.74);

        }


        .info-card h2 {

            font-size:
                20px;

            color:
                #123c57;

            margin-bottom:
                20px;

            font-weight:
                800;

        }


        /* =================================================
           INFO ROW
        ================================================= */

        .info-row {

            display:
                flex;

            justify-content:
                space-between;

            align-items:
                center;

            gap:
                20px;

            padding:
                14px 0;

            border-bottom:
                1px solid
                rgba(45,118,153,.10);

        }


        .info-row:last-child {

            border-bottom:
                none;

        }


        .info-label {

            color:
                #718893;

            font-size:
                13px;

        }


        .info-value {

            font-weight:
                800;

            color:
                #24566f;

            font-size:
                13px;

        }


        /* =================================================
           ROLE LIST
        ================================================= */

        .role-list {

            display:
                flex;

            flex-direction:
                column;

            gap:
                10px;

        }


        .role-item {

            display:
                flex;

            justify-content:
                space-between;

            align-items:
                center;

            padding:
                13px 16px;

            border-radius:
                17px;

            background:
                rgba(240,249,252,.70);

            border:
                1px solid
                rgba(255,255,255,.90);

            transition:
                .3s;

        }


        .role-item:hover {

            transform:
                translateX(5px);

            background:
                rgba(255,255,255,.82);

        }


        .role-name {

            font-weight:
                800;

            color:
                #24566f;

            font-size:
                13px;

        }


        .role-access {

            color:
                #367f9e;

            font-size:
                12px;

            font-weight:
                800;

        }


        /* =================================================
           DATABASE STATUS
        ================================================= */

        .database-status {

            position:
                relative;

            z-index:
                2;

            margin-top:
                24px;

            padding:
                18px 22px;

            border-radius:
                20px;

            display:
                flex;

            align-items:
                center;

            gap:
                13px;

            background:
                rgba(237,251,243,.72);

            border:
                1px solid
                rgba(187,247,208,.80);

            backdrop-filter:
                blur(12px);

            -webkit-backdrop-filter:
                blur(12px);

        }


        .status-dot {

            width:
                10px;

            height:
                10px;

            flex-shrink:
                0;

            border-radius:
                50%;

            background:
                #22c55e;

            box-shadow:
                0 0 0 4px
                rgba(34,197,94,.12);

        }


        .database-status strong {

            color:
                #166534;

            font-size:
                13px;

        }


        .database-status span {

            color:
                #15803d;

            font-size:
                12px;

        }


        /* =================================================
           FOOTER
        ================================================= */

        .footer {

            padding:
                30px 0 5px;

            text-align:
                center;

            color:
                #66808d;

            font-size:
                12px;

        }


        /* =================================================
           ANIMATION
        ================================================= */

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


        /* =================================================
           RESPONSIVE
        ================================================= */

        @media (max-width: 1000px) {

            .statistics {

                grid-template-columns:
                    repeat(2, 1fr);

            }

            .information {

                grid-template-columns:
                    1fr;

            }

        }


        @media (max-width: 700px) {

            .container {

                width:
                    92%;

                padding-top:
                    25px;

            }


            .header {

                align-items:
                    flex-start;

                flex-direction:
                    column;

                gap:
                    15px;

            }


            .system-card {

                padding:
                    28px 22px;

                border-radius:
                    26px;

            }


            .statistics {

                grid-template-columns:
                    1fr;

            }


            .information {

                grid-template-columns:
                    1fr;

            }

        }


        @media (max-width: 480px) {

            .logo {

                font-size:
                    25px;

            }


            .back {

                width:
                    100%;

            }


            .info-row {

                align-items:
                    flex-start;

                flex-direction:
                    column;

                gap:
                    5px;

            }


            .database-status {

                align-items:
                    flex-start;

            }

        }

    </style>

</head>


<body>


    <!-- =================================================
         BACKGROUND
    ================================================= -->

    <div class="page-background">

        <div class="cloud-one"></div>

        <div class="cloud-two"></div>

        <div class="cloud-three"></div>

    </div>



    <!-- =================================================
         MAIN CONTAINER
    ================================================= -->

    <div class="container">


        <!-- =================================================
             HEADER
        ================================================= -->

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



        <!-- =================================================
             SYSTEM CARD
        ================================================= -->

        <div class="system-card">


            <!-- SYSTEM HEADER -->

            <div class="system-header">

                <div class="small-title">
                    SYSTEM INFORMATION
                </div>


                <h1>
                    Sistem WISATA.
                </h1>


                <p class="subtitle">
                    Informasi dan kondisi sistem perjalanan wisata
                </p>

            </div>



            <!-- =================================================
                 STATISTICS
            ================================================= -->

            <div class="statistics">


                <div class="stat-card">

                    <div class="stat-number">
                        {{ $totalPengguna }}
                    </div>

                    <div class="stat-name">
                        Pengguna
                    </div>

                </div>



                <div class="stat-card">

                    <div class="stat-number">
                        {{ $totalPaket }}
                    </div>

                    <div class="stat-name">
                        Paket Wisata
                    </div>

                </div>



                <div class="stat-card">

                    <div class="stat-number">
                        {{ $totalJadwal }}
                    </div>

                    <div class="stat-name">
                        Jadwal Tour
                    </div>

                </div>



                <div class="stat-card">

                    <div class="stat-number">
                        {{ $totalPemesanan }}
                    </div>

                    <div class="stat-name">
                        Pesanan
                    </div>

                </div>


            </div>



            <!-- =================================================
                 INFORMATION
            ================================================= -->

            <div class="information">


                <!-- INFORMASI SISTEM -->

                <div class="info-card">

                    <h2>
                        Informasi Sistem
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
                        Hak Akses
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



            <!-- =================================================
                 DATABASE STATUS
            ================================================= -->

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



        <!-- =================================================
             FOOTER
        ================================================= -->

        <footer class="footer">

            © {{ date('Y') }} WISATA.
            All Rights Reserved.

        </footer>


    </div>


</body>

</html>