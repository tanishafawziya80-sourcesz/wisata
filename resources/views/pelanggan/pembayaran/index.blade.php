```php
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pembayaran - FAWZATA TRAVEL</title>

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
                    rgba(4, 35, 52, .72),
                    rgba(7, 48, 67, .88)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=90");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            overflow-x: hidden;
        }


        /* =====================================================
           CLOUDS
        ===================================================== */

        .clouds {

            position: fixed;

            inset: 0;

            width: 100%;

            height: 100%;

            overflow: hidden;

            pointer-events: none;

            z-index: 0;
        }

        .cloud {

            position: absolute;

            width: 150px;

            height: 45px;

            background: rgba(255,255,255,.20);

            border-radius: 50px;

            filter: blur(.5px);

            opacity: .65;

            animation:
                cloudMove 45s linear infinite;
        }

        .cloud span {

            position: absolute;

            display: block;

            background: rgba(255,255,255,.22);

            border-radius: 50%;
        }

        .cloud span:nth-child(1) {

            width: 55px;

            height: 55px;

            left: 20px;

            bottom: 15px;
        }

        .cloud span:nth-child(2) {

            width: 70px;

            height: 70px;

            left: 55px;

            bottom: 10px;
        }

        .cloud span:nth-child(3) {

            width: 48px;

            height: 48px;

            right: 15px;

            bottom: 13px;
        }

        .cloud-1 {

            top: 18%;

            left: -200px;

            transform: scale(.75);

            animation-duration: 48s;
        }

        .cloud-2 {

            top: 35%;

            left: -230px;

            transform: scale(1.15);

            opacity: .35;

            animation-duration: 60s;

            animation-delay: -15s;
        }

        .cloud-3 {

            top: 55%;

            left: -180px;

            transform: scale(.65);

            opacity: .30;

            animation-duration: 52s;

            animation-delay: -25s;
        }

        .cloud-4 {

            top: 75%;

            left: -200px;

            transform: scale(.9);

            opacity: .25;

            animation-duration: 65s;

            animation-delay: -35s;
        }

        @keyframes cloudMove {

            0% {

                transform:
                    translateX(0)
                    translateY(0);
            }

            50% {

                transform:
                    translateX(55vw)
                    translateY(-10px);
            }

            100% {

                transform:
                    translateX(115vw)
                    translateY(5px);
            }
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

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

            -webkit-backdrop-filter:
                blur(20px);

            border-bottom:
                1px solid
                rgba(255,255,255,.18);

            z-index: 1000;
        }

        .logo {

            color: white;

            text-decoration: none;

            font-size: 27px;

            font-weight: 800;

            letter-spacing: 2px;

            transition: .3s ease;
        }

        .logo:hover {

            transform: translateY(-2px);

            letter-spacing: 3px;
        }

        .logo span {

            color: #9ddcff;
        }

        .nav-right {

            display: flex;

            align-items: center;

            gap: 15px;
        }

        .role {

            padding:
                9px 17px;

            border-radius: 30px;

            background:
                rgba(255,255,255,.12);

            border:
                1px solid
                rgba(255,255,255,.20);

            color:
                rgba(255,255,255,.90);

            font-size: 13px;

            font-weight: 700;
        }

        .logout {

            border:
                1px solid
                rgba(255,255,255,.20);

            padding:
                10px 18px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.92);

            color: #123c57;

            font-weight: 700;

            cursor: pointer;

            transition: .3s;
        }

        .logout:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 10px 25px
                rgba(0,0,0,.20);

            background: white;
        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {

            position: relative;

            z-index: 2;

            width: 90%;

            max-width: 1250px;

            margin: auto;

            padding-top: 130px;

            padding-bottom: 90px;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .header {

            margin-bottom: 35px;

            animation:
                fadeUp .8s ease both;
        }

        .small-title {

            font-size: 12px;

            letter-spacing: 4px;

            text-transform: uppercase;

            color: #a7e2ff;

            margin-bottom: 12px;

            font-weight: 700;
        }

        .header h1 {

            font-size:
                clamp(40px, 6vw, 62px);

            line-height: 1.05;

            margin-bottom: 12px;

            font-weight: 850;
        }

        .header p {

            max-width: 650px;

            color:
                rgba(255,255,255,.72);

            line-height: 1.7;

            font-size: 15px;
        }


        /* =====================================================
           MAIN CARD
        ===================================================== */

        .card {

            position: relative;

            padding: 30px;

            border-radius: 30px;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,.14),
                    rgba(255,255,255,.07)
                );

            backdrop-filter:
                blur(22px);

            -webkit-backdrop-filter:
                blur(22px);

            border:
                1px solid
                rgba(255,255,255,.20);

            box-shadow:
                0 30px 80px
                rgba(0,0,0,.22);

            animation:
                fadeUp 1s ease both;

            overflow: hidden;
        }

        .card::before {

            content: "";

            position: absolute;

            width: 300px;

            height: 300px;

            top: -180px;

            right: -100px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(150,230,255,.15),
                    transparent 70%
                );

            pointer-events: none;
        }


        /* =====================================================
           CARD HEADER
        ===================================================== */

        .card-header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 25px;

            gap: 20px;
        }

        .card-title {

            font-size: 21px;

            font-weight: 800;
        }

        .card-subtitle {

            margin-top: 5px;

            color:
                rgba(255,255,255,.55);

            font-size: 13px;
        }

        .total-payment {

            padding:
                10px 16px;

            border-radius: 20px;

            background:
                rgba(255,255,255,.10);

            border:
                1px solid
                rgba(255,255,255,.16);

            color:
                #cceeff;

            font-size: 12px;

            font-weight: 700;

            white-space: nowrap;
        }


        /* =====================================================
           ALERT
        ===================================================== */

        .alert {

            padding:
                13px 17px;

            border-radius: 15px;

            margin-bottom: 20px;

            font-size: 13px;

            line-height: 1.5;

            border:
                1px solid
                rgba(255,255,255,.15);
        }

        .alert-success {

            background:
                rgba(70,190,130,.12);

            color:
                #b8f2d2;

            border-color:
                rgba(100,220,160,.20);
        }

        .alert-error {

            background:
                rgba(255,90,90,.12);

            color:
                #ffd0d0;

            border-color:
                rgba(255,120,120,.20);
        }


        /* =====================================================
           PAYMENT CARD
        ===================================================== */

        .payment-list {

            display: flex;

            flex-direction: column;

            gap: 18px;
        }

        .payment-item {

            position: relative;

            padding: 24px;

            border-radius: 22px;

            background:
                rgba(255,255,255,.075);

            border:
                1px solid
                rgba(255,255,255,.14);

            transition:
                .3s ease;
        }

        .payment-item:hover {

            transform:
                translateY(-3px);

            background:
                rgba(255,255,255,.105);

            box-shadow:
                0 15px 35px
                rgba(0,0,0,.15);
        }


        /* =====================================================
           PAYMENT TOP
        ===================================================== */

        .payment-top {

            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            gap: 20px;

            margin-bottom: 20px;
        }

        .booking-label {

            font-size: 10px;

            color:
                rgba(255,255,255,.48);

            text-transform: uppercase;

            letter-spacing: 1.5px;

            margin-bottom: 6px;
        }

        .booking-code {

            font-size: 21px;

            font-weight: 800;

            color: #cceeff;

            letter-spacing: 1px;
        }


        /* =====================================================
           STATUS BADGE
        ===================================================== */

        .status {

            display: inline-flex;

            align-items: center;

            padding:
                7px 13px;

            border-radius: 20px;

            font-size: 10px;

            font-weight: 800;

            text-transform: uppercase;

            white-space: nowrap;
        }

        .status-waiting {

            background:
                rgba(255,190,70,.13);

            color:
                #ffd58a;

            border:
                1px solid
                rgba(255,190,70,.20);
        }

        .status-paid {

            background:
                rgba(70,200,130,.13);

            color:
                #aef0ca;

            border:
                1px solid
                rgba(70,200,130,.20);
        }

        .status-rejected {

            background:
                rgba(255,90,90,.13);

            color:
                #ffc0c0;

            border:
                1px solid
                rgba(255,90,90,.20);
        }

        .status-default {

            background:
                rgba(255,255,255,.08);

            color:
                rgba(255,255,255,.70);

            border:
                1px solid
                rgba(255,255,255,.12);
        }


        /* =====================================================
           PAYMENT INFO
        ===================================================== */

        .payment-info {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 12px;

            margin-bottom: 20px;
        }

        .info-box {

            padding:
                13px 15px;

            border-radius: 14px;

            background:
                rgba(255,255,255,.055);

            border:
                1px solid
                rgba(255,255,255,.09);
        }

        .info-label {

            color:
                rgba(255,255,255,.45);

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: .8px;

            margin-bottom: 5px;
        }

        .info-value {

            color:
                rgba(255,255,255,.88);

            font-size: 13px;

            font-weight: 700;
        }


        /* =====================================================
           UPLOAD AREA
        ===================================================== */

        .upload-area {

            padding-top: 18px;

            border-top:
                1px dashed
                rgba(255,255,255,.14);
        }

        .upload-title {

            color:
                rgba(255,255,255,.85);

            font-size: 12px;

            font-weight: 700;

            margin-bottom: 10px;
        }

        .upload-form {

            display: flex;

            align-items: center;

            gap: 10px;

            flex-wrap: wrap;
        }

        .file-input {

            flex: 1;

            min-width: 240px;

            padding:
                10px 12px;

            border-radius: 13px;

            background:
                rgba(255,255,255,.08);

            border:
                1px solid
                rgba(255,255,255,.14);

            color:
                rgba(255,255,255,.70);

            font-size: 11px;
        }

        .file-input::file-selector-button {

            margin-right: 10px;

            border: none;

            padding:
                7px 11px;

            border-radius: 10px;

            background:
                rgba(157,220,255,.18);

            color:
                #d8f4ff;

            cursor: pointer;

            font-weight: 700;
        }

        .upload-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            padding:
                11px 17px;

            border-radius: 22px;

            background:
                rgba(157,220,255,.14);

            border:
                1px solid
                rgba(157,220,255,.28);

            color:
                #d8f4ff;

            font-size: 11px;

            font-weight: 750;

            cursor: pointer;

            transition:
                .3s ease;
        }

        .upload-btn:hover {

            background:
                rgba(157,220,255,.27);

            border-color:
                rgba(180,235,255,.45);

            transform:
                translateY(-2px);

            box-shadow:
                0 10px 25px
                rgba(0,0,0,.20);
        }


        /* =====================================================
           PROOF
        ===================================================== */

        .proof {

            margin-top: 16px;

            padding:
                12px 14px;

            border-radius: 14px;

            background:
                rgba(70,200,130,.08);

            border:
                1px solid
                rgba(70,200,130,.14);

            color:
                rgba(255,255,255,.70);

            font-size: 11px;
        }

        .proof strong {

            color:
                #b8f2d2;
        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {

            text-align: center;

            padding:
                65px 20px;
        }

        .empty-icon {

            width: 60px;

            height: 60px;

            margin:
                0 auto 18px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background:
                rgba(255,255,255,.08);

            border:
                1px solid
                rgba(255,255,255,.12);

            font-size: 25px;
        }

        .empty-title {

            color: white;

            font-size: 20px;

            font-weight: 700;

            margin-bottom: 7px;
        }

        .empty-text {

            font-size: 13px;

            color:
                rgba(255,255,255,.50);
        }


        /* =====================================================
           BACK BUTTON
        ===================================================== */

        .back-btn {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            margin-top: 25px;

            padding:
                12px 20px;

            border-radius: 25px;

            text-decoration: none;

            background:
                rgba(255,255,255,.92);

            color: #123c57;

            font-weight: 700;

            transition: .3s;

            box-shadow:
                0 8px 25px
                rgba(0,0,0,.10);
        }

        .back-btn:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 12px 30px
                rgba(0,0,0,.20);

            background: white;
        }


        /* =====================================================
           ANIMATION
        ===================================================== */

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


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 750px) {

            .navbar {

                padding:
                    0 5%;
            }

            .role {

                display: none;
            }

            .container {

                width: 92%;

                padding-top: 110px;
            }

            .card {

                padding: 18px;

                border-radius: 24px;
            }

            .card-header {

                align-items: flex-start;

                flex-direction: column;
            }

            .payment-info {

                grid-template-columns:
                    1fr;
            }

            .payment-top {

                flex-direction: column;
            }

            .upload-form {

                align-items: stretch;

                flex-direction: column;
            }

            .file-input {

                width: 100%;

                min-width: 0;
            }

            .upload-btn {

                width: 100%;
            }
        }

    </style>

</head>


<body>


<!-- =========================================================
     ANIMATED CLOUDS
========================================================= -->

<div class="clouds">

    <div class="cloud cloud-1">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="cloud cloud-2">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="cloud cloud-3">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="cloud cloud-4">
        <span></span>
        <span></span>
        <span></span>
    </div>

</div>


<!-- =========================================================
     NAVBAR
========================================================= -->

<nav class="navbar">

    <a
        href="/pelanggan/dashboard"
        class="logo"
    >
        WISATA<span>.</span>
    </a>


    <div class="nav-right">

        <div class="role">
            PELANGGAN
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
            Travel Operations
        </div>


        <h1>
            Pembayaran
        </h1>


        <p>
            Kelola pembayaran perjalanan dan kirim
            bukti pembayaran Anda dalam satu ruang kerja.
        </p>

    </div>


    <!-- =====================================================
         MAIN CARD
    ===================================================== -->

    <div class="card">


        <!-- CARD HEADER -->

        <div class="card-header">

            <div>

                <div class="card-title">
                    Data Pembayaran
                </div>

                <div class="card-subtitle">
                    Daftar pembayaran pemesanan perjalanan Anda
                </div>

            </div>


            <div class="total-payment">

                Total
                {{ $pemesanan->count() }}
                Pemesanan

            </div>

        </div>


        <!-- =================================================
             SUCCESS MESSAGE
        ================================================= -->

        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif


        <!-- =================================================
             ERROR MESSAGE
        ================================================= -->

        @if(session('error'))

            <div class="alert alert-error">

                {{ session('error') }}

            </div>

        @endif


        <!-- =================================================
             VALIDATION ERROR
        ================================================= -->

        @if($errors->any())

            <div class="alert alert-error">

                @foreach($errors->all() as $error)

                    <div>
                        {{ $error }}
                    </div>

                @endforeach

            </div>

        @endif


        <!-- =================================================
             PAYMENT LIST
        ================================================= -->

        @if($pemesanan->count() > 0)


            <div class="payment-list">


                @foreach($pemesanan as $item)


                    @php

                        $pembayaran = $item->pembayaran;

                        $status =
                            strtolower(
                                $pembayaran->status_pembayaran
                                ?? 'belum dibayar'
                            );

                    @endphp


                    <div class="payment-item">


                        <!-- =================================================
                             TOP
                        ================================================= -->

                        <div class="payment-top">


                            <div>

                                <div class="booking-label">
                                    Kode Booking
                                </div>


                                <div class="booking-code">

                                    {{ $item->kode_booking ?? '-' }}

                                </div>

                            </div>


                            <!-- STATUS -->

                            @if(
                                str_contains($status, 'lunas') ||
                                str_contains($status, 'dibayar') ||
                                str_contains($status, 'terverifikasi') ||
                                str_contains($status, 'berhasil')
                            )

                                <div class="status status-paid">
                                    {{ strtoupper($status) }}
                                </div>

                            @elseif(
                                str_contains($status, 'tolak') ||
                                str_contains($status, 'gagal')
                            )

                                <div class="status status-rejected">
                                    {{ strtoupper($status) }}
                                </div>

                            @elseif(
                                str_contains($status, 'menunggu')
                            )

                                <div class="status status-waiting">
                                    {{ strtoupper($status) }}
                                </div>

                            @else

                                <div class="status status-default">
                                    {{ strtoupper($status) }}
                                </div>

                            @endif


                        </div>


                        <!-- =================================================
                             INFO
                        ================================================= -->

                        <div class="payment-info">


                            <div class="info-box">

                                <div class="info-label">
                                    ID Pemesanan
                                </div>

                                <div class="info-value">

                                    #{{ $item->id_pemesanan }}

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
                                    Status
                                </div>

                                <div class="info-value">

                                    {{ strtoupper($status) }}

                                </div>

                            </div>


                        </div>


                        <!-- =================================================
                             PAYMENT ACTION
                        ================================================= -->

                        <div class="upload-area">


                            @if($pembayaran)


                                @if(
                                    !empty($pembayaran->bukti_pembayaran)
                                )


                                    <div class="proof">

                                        <strong>
                                            ✓ Bukti pembayaran sudah dikirim.
                                        </strong>

                                        <br>

                                        Bukti pembayaran sedang diproses
                                        oleh pegawai.

                                    </div>


                                @else


                                    <div class="upload-title">

                                        Upload Bukti Pembayaran

                                    </div>


                                    <form
                                        action="{{ route('pelanggan.pembayaran.upload') }}"
                                        method="POST"
                                        enctype="multipart/form-data"
                                        class="upload-form"
                                    >

                                        @csrf


                                        <input
                                            type="hidden"
                                            name="id_pemesanan"
                                            value="{{ $item->id_pemesanan }}"
                                        >


                                        <input
                                            type="file"
                                            name="bukti_pembayaran"
                                            class="file-input"
                                            accept=".jpg,.jpeg,.png,.pdf"
                                            required
                                        >


                                        <button
                                            type="submit"
                                            class="upload-btn"
                                        >

                                            ↑
                                            Upload Bukti

                                        </button>

                                    </form>


                                @endif


                            @else


                                <div class="proof">

                                    Bukti pembayaran belum dapat dikirim
                                    karena data pembayaran belum tersedia.

                                </div>


                            @endif


                        </div>


                    </div>


                @endforeach


            </div>


        @else


            <!-- =================================================
                 EMPTY
            ================================================= -->

            <div class="empty">


                <div class="empty-icon">
                    💳
                </div>


                <div class="empty-title">

                    Belum Ada Pembayaran

                </div>


                <div class="empty-text">

                    Data pembayaran pemesanan Anda
                    akan muncul di halaman ini.

                </div>


            </div>


        @endif


        <!-- =================================================
             BACK
        ================================================= -->

        <a
            href="/pelanggan/dashboard"
            class="back-btn"
        >

            ←
            Kembali ke Dashboard

        </a>


    </div>


</main>


</body>

</html>

