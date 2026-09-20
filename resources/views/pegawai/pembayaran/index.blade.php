<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pembayaran - WISATA.</title>

    <style>

        /* =========================================================
           RESET
        ========================================================= */

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


        /* =========================================================
           OCEAN ATMOSPHERE
        ========================================================= */

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


        body::after {
            content: "";

            position: fixed;

            width: 700px;

            height: 700px;

            border-radius: 50%;

            top: -300px;

            right: -250px;

            background:
                radial-gradient(
                    circle,
                    rgba(142, 230, 255, .13),
                    transparent 68%
                );

            animation:
                floatingLight 8s ease-in-out infinite alternate;

            pointer-events: none;

            z-index: -2;
        }


        @keyframes floatingLight {

            from {
                transform:
                    translate3d(0, 0, 0)
                    scale(1);
            }

            to {
                transform:
                    translate3d(-70px, 50px, 0)
                    scale(1.15);
            }

        }


        /* =========================================================
           MOVING OCEAN GLOW
        ========================================================= */

        .ocean-glow {
            position: fixed;

            width: 420px;

            height: 420px;

            border-radius: 50%;

            left: -180px;

            bottom: -160px;

            background:
                radial-gradient(
                    circle,
                    rgba(90, 220, 240, .18),
                    transparent 70%
                );

            filter: blur(10px);

            animation:
                oceanFloat 9s ease-in-out infinite alternate;

            pointer-events: none;

            z-index: -1;
        }


        @keyframes oceanFloat {

            from {
                transform:
                    translate(0, 0);
            }

            to {
                transform:
                    translate(180px, -80px);
            }

        }


        /* =========================================================
           NAVBAR
        ========================================================= */

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
                blur(22px);

            -webkit-backdrop-filter:
                blur(22px);

            border-bottom:
                1px solid rgba(255,255,255,.18);

            box-shadow:
                0 10px 40px rgba(0,0,0,.10);

            z-index: 1000;
        }


        .logo {

            color: white;

            text-decoration: none;

            font-size: 27px;

            font-weight: 850;

            letter-spacing: 2px;

            transition: .3s ease;
        }


        .logo span {

            color: #9cecff;

            text-shadow:
                0 0 18px rgba(156,236,255,.50);
        }


        .logo:hover {

            transform:
                translateY(-1px);

            letter-spacing: 3px;
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

            backdrop-filter:
                blur(15px);
        }


        .logout {

            border: 1px solid
                rgba(255,255,255,.25);

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

            transform:
                translateY(-3px);

            box-shadow:
                0 12px 30px rgba(0,0,0,.20);

            background:
                white;
        }


        /* =========================================================
           CONTAINER
        ========================================================= */

        .container {

            width: 88%;

            max-width: 1280px;

            margin: auto;

            padding-top: 130px;

            padding-bottom: 100px;
        }


        /* =========================================================
           HEADER
        ========================================================= */

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

            text-shadow:
                0 0 18px rgba(168,237,255,.25);
        }


        .header h1 {

            font-size:
                clamp(40px, 6vw, 64px);

            line-height: 1.05;

            margin-bottom: 14px;

            font-weight: 850;

            letter-spacing: -1.5px;

            text-shadow:
                0 10px 35px rgba(0,0,0,.18);
        }


        .header p {

            max-width: 720px;

            color:
                rgba(255,255,255,.74);

            line-height: 1.75;

            font-size: 15px;
        }


        /* =========================================================
           ALERT
        ========================================================= */

        .alert {

            padding: 15px 20px;

            margin-bottom: 20px;

            border-radius: 18px;

            background:
                rgba(104,220,180,.13);

            border:
                1px solid rgba(142,255,210,.24);

            color:
                #dcfff0;

            backdrop-filter:
                blur(18px);

            animation:
                fadeUp .5s ease both;
        }


        .alert-error {

            background:
                rgba(255,100,120,.13);

            border:
                1px solid rgba(255,150,160,.25);

            color:
                #ffe3e6;
        }


        /* =========================================================
           MAIN CARD
        ========================================================= */

        .payment-card {

            position: relative;

            padding: 28px;

            border-radius: 32px;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,.145),
                    rgba(255,255,255,.075)
                );

            backdrop-filter:
                blur(25px);

            -webkit-backdrop-filter:
                blur(25px);

            border:
                1px solid rgba(255,255,255,.20);

            box-shadow:
                0 30px 90px rgba(0,0,0,.25);

            overflow: hidden;

            animation:
                fadeUp 1s ease both;
        }


        .payment-card::before {

            content: "";

            position: absolute;

            width: 300px;

            height: 300px;

            top: -190px;

            right: -100px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(160,235,255,.16),
                    transparent 68%
                );

            pointer-events: none;

            animation:
                cardGlow 7s ease-in-out infinite alternate;
        }


        @keyframes cardGlow {

            from {
                transform:
                    translate(0,0)
                    scale(1);
            }

            to {
                transform:
                    translate(-80px,80px)
                    scale(1.2);
            }

        }


        /* =========================================================
           TABLE
        ========================================================= */

        .table-wrapper {

            position: relative;

            overflow-x: auto;

            border-radius: 22px;

            scrollbar-width: thin;

            scrollbar-color:
                rgba(170,230,245,.35)
                transparent;
        }


        table {

            width: 100%;

            border-collapse: separate;

            border-spacing: 0;

            min-width: 950px;
        }


        th {

            text-align: left;

            padding: 17px 16px;

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: 1.4px;

            color:
                #bcefff;

            background:
                rgba(255,255,255,.075);

            border-bottom:
                1px solid rgba(255,255,255,.16);

            white-space: nowrap;
        }


        th:first-child {

            border-top-left-radius: 15px;
        }


        th:last-child {

            border-top-right-radius: 15px;
        }


        td {

            padding: 18px 16px;

            color:
                rgba(255,255,255,.88);

            border-bottom:
                1px solid rgba(255,255,255,.08);

            vertical-align: middle;

            font-size: 13px;
        }


        tbody tr {

            transition:
                .35s ease;

            background:
                rgba(255,255,255,.025);
        }


        tbody tr:hover {

            background:
                rgba(255,255,255,.095);

            transform:
                translateX(3px);
        }


        tbody tr:last-child td {

            border-bottom:
                none;
        }


        /* =========================================================
           BOOKING
        ========================================================= */

        td:nth-child(2) {

            color:
                #a9eaff;

            font-weight: 750;
        }


        td:nth-child(3) {

            font-weight: 650;
        }


        td:nth-child(5) {

            color:
                #baf5ff;

            font-weight: 750;

            white-space: nowrap;
        }


        /* =========================================================
           STATUS
        ========================================================= */

        .status {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 7px 13px;

            border-radius: 20px;

            background:
                rgba(255,255,255,.10);

            border:
                1px solid rgba(255,255,255,.17);

            color:
                rgba(255,255,255,.90);

            font-size: 11px;

            font-weight: 750;

            text-transform: capitalize;

            white-space: nowrap;

            transition: .3s ease;
        }


        .status:hover {

            background:
                rgba(255,255,255,.17);

            transform:
                translateY(-2px);
        }


        /* =========================================================
           PROOF BUTTON
        ========================================================= */

        .proof {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 9px 15px;

            border:
                1px solid rgba(170,235,255,.24);

            border-radius: 20px;

            background:
                rgba(150,225,245,.11);

            color:
                #d5f8ff;

            font-size: 11px;

            font-weight: 750;

            cursor: pointer;

            transition: .3s ease;

            position: relative;

            z-index: 20;

            text-decoration: none;

            white-space: nowrap;
        }


        .proof:hover {

            transform:
                translateY(-3px);

            background:
                rgba(150,225,245,.20);

            border-color:
                rgba(180,240,255,.40);

            box-shadow:
                0 8px 24px rgba(0,0,0,.18);
        }


        .proof:active {

            transform:
                scale(.96);
        }


        .no-proof {

            color:
                rgba(255,255,255,.42);

            font-size: 12px;
        }


        /* =========================================================
           ACTION BUTTON
        ========================================================= */

        .actions {

            display: flex;

            gap: 7px;

            flex-wrap: wrap;
        }


        .action-btn {

            border: 1px solid transparent;

            padding: 9px 14px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: 750;

            cursor: pointer;

            transition: .3s ease;
        }


        .approve {

            background:
                rgba(91,224,173,.14);

            border-color:
                rgba(120,255,200,.24);

            color:
                #d5ffed;
        }


        .approve:hover {

            background:
                rgba(91,224,173,.28);

            transform:
                translateY(-3px);

            box-shadow:
                0 8px 22px rgba(45,180,130,.15);
        }


        .reject {

            background:
                rgba(255,112,125,.13);

            border-color:
                rgba(255,145,155,.22);

            color:
                #ffe0e3;
        }


        .reject:hover {

            background:
                rgba(255,112,125,.26);

            transform:
                translateY(-3px);

            box-shadow:
                0 8px 22px rgba(200,70,90,.15);
        }


        /* =========================================================
           EMPTY
        ========================================================= */

        .empty {

            text-align: center;

            padding: 55px 20px;

            color:
                rgba(255,255,255,.60);
        }


        /* =========================================================
           BACK BUTTON
        ========================================================= */

        .back-btn {

            display: inline-flex;

            align-items: center;

            margin-top: 25px;

            padding: 12px 20px;

            border-radius: 25px;

            text-decoration: none;

            background:
                rgba(255,255,255,.90);

            color:
                #15465d;

            font-weight: 750;

            transition: .3s ease;

            box-shadow:
                0 8px 25px rgba(0,0,0,.10);
        }


        .back-btn:hover {

            transform:
                translateY(-4px);

            background:
                white;

            box-shadow:
                0 15px 35px rgba(0,0,0,.18);
        }


        /* =========================================================
           MODAL
        ========================================================= */

        .bukti-modal {

            position: fixed;

            inset: 0;

            display: none;

            align-items: center;

            justify-content: center;

            padding: 20px;

            background:
                rgba(0,24,40,.76);

            backdrop-filter:
                blur(15px);

            -webkit-backdrop-filter:
                blur(15px);

            z-index: 99999;
        }


        .bukti-modal.show {

            display: flex;
        }


        .bukti-modal-box {

            position: relative;

            width:
                min(760px, 95vw);

            max-height: 90vh;

            padding: 30px;

            border-radius: 30px;

            background:
                linear-gradient(
                    145deg,
                    rgba(22,76,91,.97),
                    rgba(9,55,70,.97)
                );

            border:
                1px solid rgba(255,255,255,.20);

            box-shadow:
                0 35px 110px rgba(0,0,0,.65);

            overflow: auto;

            animation:
                modalMasuk .28s ease both;
        }


        @keyframes modalMasuk {

            from {

                opacity: 0;

                transform:
                    scale(.93)
                    translateY(25px);
            }

            to {

                opacity: 1;

                transform:
                    scale(1)
                    translateY(0);
            }

        }


        /* =========================================================
           MODAL CLOSE
        ========================================================= */

        .bukti-close {

            position: absolute;

            top: 13px;

            right: 13px;

            width: 39px;

            height: 39px;

            border: 1px solid
                rgba(255,255,255,.17);

            border-radius: 50%;

            background:
                rgba(255,255,255,.10);

            color: white;

            font-size: 23px;

            line-height: 1;

            display: flex;

            align-items: center;

            justify-content: center;

            cursor: pointer;

            z-index: 999999;

            transition: .3s ease;
        }


        .bukti-close:hover {

            background:
                rgba(255,100,115,.45);

            transform:
                rotate(90deg)
                scale(1.05);
        }


        .bukti-close:active {

            transform:
                rotate(90deg)
                scale(.90);
        }


        /* =========================================================
           MODAL TITLE
        ========================================================= */

        .bukti-modal-title {

            font-size: 25px;

            font-weight: 850;

            margin-bottom: 6px;

            padding-right: 55px;
        }


        .bukti-modal-subtitle {

            font-size: 13px;

            color:
                rgba(255,255,255,.58);

            margin-bottom: 20px;
        }


        /* =========================================================
           IMAGE CONTAINER
        ========================================================= */

        .bukti-image-container {

            width: 100%;

            min-height: 300px;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 18px;

            border-radius: 20px;

            background:
                rgba(255,255,255,.07);

            border:
                1px solid rgba(255,255,255,.08);

            overflow: auto;
        }


        .bukti-image-container img {

            display: none;

            max-width: 100%;

            max-height: 65vh;

            object-fit: contain;

            border-radius: 13px;

            background: white;

            box-shadow:
                0 18px 50px rgba(0,0,0,.30);
        }


        /* =========================================================
           LOADING
        ========================================================= */

        .loading-bukti {

            display: none;

            text-align: center;

            color:
                rgba(255,255,255,.70);
        }


        .loading-bukti.show {

            display: block;
        }


        .loading-icon {

            width: 38px;

            height: 38px;

            margin: 0 auto 13px;

            border-radius: 50%;

            border:
                3px solid rgba(255,255,255,.18);

            border-top-color:
                #a8edff;

            animation:
                spin 1s linear infinite;
        }


        @keyframes spin {

            to {
                transform:
                    rotate(360deg);
            }

        }


        /* =========================================================
           ERROR
        ========================================================= */

        .image-error {

            display: none;

            text-align: center;

            padding: 40px;

            color:
                rgba(255,255,255,.70);
        }


        .error-title {

            font-size: 17px;

            font-weight: 750;

            margin-bottom: 8px;
        }


        .error-text {

            font-size: 13px;
        }


        /* =========================================================
           ANIMATIONS
        ========================================================= */

        @keyframes fadeUp {

            from {

                opacity: 0;

                transform:
                    translateY(30px);
            }

            to {

                opacity: 1;

                transform:
                    translateY(0);
            }

        }


        /* =========================================================
           FLOATING WAVE LINES
        ========================================================= */

        .wave {

            position: fixed;

            left: -10%;

            bottom: -100px;

            width: 120%;

            height: 180px;

            border-radius: 50%;

            border-top:
                1px solid rgba(190,240,255,.12);

            pointer-events: none;

            z-index: -1;

            animation:
                waveMove 10s ease-in-out infinite alternate;
        }


        .wave.wave-two {

            bottom: -130px;

            opacity: .55;

            animation-duration:
                13s;

            animation-direction:
                alternate-reverse;
        }


        @keyframes waveMove {

            from {

                transform:
                    translateX(-35px)
                    rotate(-1deg);
            }

            to {

                transform:
                    translateX(35px)
                    rotate(1deg);
            }

        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 900px) {

            .container {

                width: 92%;
            }


            .payment-card {

                padding: 20px;
            }

        }


        @media (max-width: 700px) {

            .navbar {

                padding:
                    0 5%;
            }


            .role {

                display: none;
            }


            .container {

                width: 92%;

                padding-top: 115px;
            }


            .payment-card {

                padding: 16px;

                border-radius: 24px;
            }


            .header h1 {

                font-size: 42px;
            }


            .bukti-modal {

                padding: 10px;
            }


            .bukti-modal-box {

                padding: 22px;

                border-radius: 24px;
            }


            .bukti-close {

                top: 8px;

                right: 8px;
            }

        }

    </style>

</head>


<body>


    <!-- ATMOSPHERE -->

    <div class="ocean-glow"></div>

    <div class="wave"></div>

    <div class="wave wave-two"></div>


    <!-- =========================================================
         NAVBAR
    ========================================================= -->

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


    <!-- =========================================================
         CONTENT
    ========================================================= -->

    <main class="container">


        <!-- HEADER -->

        <div class="header">

            <div class="small-title">
                Employee Workspace
            </div>


            <h1>
                Data Pembayaran
            </h1>


            <p>
                Periksa bukti pembayaran dan
                verifikasi pembayaran pelanggan.
            </p>

        </div>


        <!-- =====================================================
             SUCCESS
        ===================================================== -->

        @if(session('success'))

            <div class="alert">

                {{ session('success') }}

            </div>

        @endif


        <!-- =====================================================
             ERROR
        ===================================================== -->

        @if(session('error'))

            <div class="alert alert-error">

                {{ session('error') }}

            </div>

        @endif


        <!-- =====================================================
             PAYMENT CARD
        ===================================================== -->

        <div class="payment-card">


            <div class="table-wrapper">


                <table>


                    <thead>

                        <tr>

                            <th>
                                ID
                            </th>

                            <th>
                                Booking
                            </th>

                            <th>
                                Pelanggan
                            </th>

                            <th>
                                Metode
                            </th>

                            <th>
                                Total
                            </th>

                            <th>
                                Bukti
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        @forelse($pembayaran as $item)


                            <tr>


                                <!-- ID -->

                                <td>

                                    {{ $item->id_pembayaran }}

                                </td>


                                <!-- BOOKING -->

                                <td>

                                    @if($item->pemesanan)

                                        {{ $item->pemesanan->kode_booking }}

                                    @else

                                        -

                                    @endif

                                </td>


                                <!-- PELANGGAN -->

                                <td>

                                    @if(
                                        $item->pemesanan &&
                                        $item->pemesanan->pelanggan
                                    )

                                        {{ $item->pemesanan->pelanggan->nama_lengkap }}

                                    @else

                                        -

                                    @endif

                                </td>


                                <!-- METODE -->

                                <td>

                                    {{ $item->metode_pembayaran }}

                                </td>


                                <!-- TOTAL -->

                                <td>

                                    @if($item->pemesanan)

                                        Rp
                                        {{ number_format(
                                            $item->pemesanan->total_bayar,
                                            0,
                                            ',',
                                            '.'
                                        ) }}

                                    @else

                                        -

                                    @endif

                                </td>


                                <!-- BUKTI -->

                                <td>

                                    @if($item->bukti_pembayaran)

                                        <button
                                            type="button"
                                            class="proof btn-bukti"
                                            data-url="{{ route(
                                                'pegawai.pembayaran.bukti',
                                                $item->id_pembayaran
                                            ) }}"
                                        >

                                            Lihat Bukti

                                        </button>

                                    @else

                                        <span class="no-proof">

                                            Belum ada

                                        </span>

                                    @endif

                                </td>


                                <!-- STATUS -->

                                <td>

                                    <span class="status">

                                        {{ $item->status_pembayaran }}

                                    </span>

                                </td>


                                <!-- AKSI -->

                                <td>

                                    @if(
                                        strtolower(
                                            trim(
                                                $item->status_pembayaran
                                            )
                                        ) === 'menunggu'
                                        &&
                                        $item->bukti_pembayaran
                                    )

                                        <div class="actions">


                                            <!-- SETUJUI -->

                                            <form
                                                action="{{ route(
                                                    'pegawai.pembayaran.setujui',
                                                    $item->id_pembayaran
                                                ) }}"
                                                method="POST"
                                            >

                                                @csrf

                                                <button
                                                    type="submit"
                                                    class="action-btn approve"
                                                >

                                                    Setujui

                                                </button>

                                            </form>


                                            <!-- TOLAK -->

                                            <form
                                                action="{{ route(
                                                    'pegawai.pembayaran.tolak',
                                                    $item->id_pembayaran
                                                ) }}"
                                                method="POST"
                                            >

                                                @csrf

                                                <button
                                                    type="submit"
                                                    class="action-btn reject"
                                                >

                                                    Tolak

                                                </button>

                                            </form>


                                        </div>

                                    @else

                                        -

                                    @endif

                                </td>


                            </tr>


                        @empty


                            <tr>

                                <td
                                    colspan="8"
                                    class="empty"
                                >

                                    Belum ada data pembayaran.

                                </td>

                            </tr>


                        @endforelse


                    </tbody>


                </table>


            </div>


            <!-- BACK -->

            <a href="/pegawai/dashboard#operasional" class="back-btn">
    Kembali ke Dashboard
</a>


        </div>


    </main>


    <!-- =========================================================
         MODAL BUKTI PEMBAYARAN
    ========================================================= -->

    <div
        id="buktiModal"
        class="bukti-modal"
    >

        <div class="bukti-modal-box">


            <!-- CLOSE -->

            <button
                type="button"
                class="bukti-close"
                id="closeBuktiButton"
                aria-label="Tutup"
                title="Tutup"
            >

                ×

            </button>


            <!-- TITLE -->

            <div class="bukti-modal-title">

                Bukti Pembayaran

            </div>


            <div class="bukti-modal-subtitle">

                Verifikasi pembayaran pelanggan

            </div>


            <!-- IMAGE -->

            <div class="bukti-image-container">


                <!-- LOADING -->

                <div
                    id="loadingBukti"
                    class="loading-bukti"
                >

                    <div class="loading-icon"></div>

                    Membuka bukti pembayaran...

                </div>


                <!-- IMAGE -->

                <img
                    id="buktiImage"
                    src=""
                    alt="Bukti Pembayaran"
                >


                <!-- ERROR -->

                <div
                    id="imageError"
                    class="image-error"
                >

                    <div class="error-title">

                        Bukti pembayaran tidak dapat ditampilkan.

                    </div>


                    <div class="error-text">

                        File mungkin tidak ditemukan
                        atau tidak dapat diakses.

                    </div>

                </div>


            </div>


        </div>

    </div>


    <!-- =========================================================
         JAVASCRIPT
    ========================================================= -->

    <script>

        document.addEventListener(
            'DOMContentLoaded',
            function () {


                const modal =
                    document.getElementById(
                        'buktiModal'
                    );


                const image =
                    document.getElementById(
                        'buktiImage'
                    );


                const loading =
                    document.getElementById(
                        'loadingBukti'
                    );


                const imageError =
                    document.getElementById(
                        'imageError'
                    );


                const closeButton =
                    document.getElementById(
                        'closeBuktiButton'
                    );


                const buttons =
                    document.querySelectorAll(
                        '.btn-bukti'
                    );


                /* =================================================
                   BUKA MODAL
                ================================================= */

                buttons.forEach(
                    function (button) {

                        button.addEventListener(
                            'click',
                            function (event) {

                                event.preventDefault();

                                event.stopPropagation();


                                const url =
                                    this.getAttribute(
                                        'data-url'
                                    );


                                if (!url) {

                                    alert(
                                        'URL bukti pembayaran tidak ditemukan.'
                                    );

                                    return;
                                }


                                /* RESET */

                                image.src = '';

                                image.style.display =
                                    'none';

                                imageError.style.display =
                                    'none';

                                loading.classList.add(
                                    'show'
                                );


                                /* SHOW MODAL */

                                modal.classList.add(
                                    'show'
                                );

                                document.body.style.overflow =
                                    'hidden';


                                /* CHECK IMAGE */

                                const testImage =
                                    new Image();


                                testImage.onload =
                                    function () {

                                        loading.classList.remove(
                                            'show'
                                        );


                                        image.src =
                                            url;


                                        image.style.display =
                                            'block';

                                    };


                                testImage.onerror =
                                    function () {

                                        loading.classList.remove(
                                            'show'
                                        );


                                        image.style.display =
                                            'none';


                                        imageError.style.display =
                                            'block';

                                    };


                                testImage.src =
                                    url;

                            }
                        );

                    }
                );


                /* =================================================
                   TUTUP MODAL
                ================================================= */

                function closeBuktiModal() {

                    modal.classList.remove(
                        'show'
                    );


                    image.src = '';

                    image.style.display =
                        'none';


                    imageError.style.display =
                        'none';


                    loading.classList.remove(
                        'show'
                    );


                    document.body.style.overflow =
                        '';

                }


                /* =================================================
                   BUTTON X
                ================================================= */

                closeButton.addEventListener(
                    'click',
                    function (event) {

                        event.preventDefault();

                        event.stopPropagation();

                        closeBuktiModal();

                    }
                );


                /* =================================================
                   KLIK LUAR MODAL
                ================================================= */

                modal.addEventListener(
                    'click',
                    function (event) {

                        if (
                            event.target === modal
                        ) {

                            closeBuktiModal();

                        }

                    }
                );


                /* =================================================
                   ESC
                ================================================= */

                document.addEventListener(
                    'keydown',
                    function (event) {

                        if (
                            event.key === 'Escape' &&
                            modal.classList.contains('show')
                        ) {

                            closeBuktiModal();

                        }

                    }
                );


            }
        );

    </script>


</body>

</html>