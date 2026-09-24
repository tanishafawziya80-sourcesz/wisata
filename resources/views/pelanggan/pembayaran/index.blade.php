<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

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

            color: #183b4d;

            background:
                linear-gradient(
                    rgba(7,48,67,.80),
                    rgba(18,60,87,.92)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=90");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            padding-bottom: 80px;
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
                rgba(18,60,87,.80);

            backdrop-filter: blur(20px);

            -webkit-backdrop-filter: blur(20px);

            border-bottom:
                1px solid
                rgba(255,255,255,.15);

            z-index: 1000;
        }


        .logo {

            color: white;

            text-decoration: none;

            font-size: 25px;

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

            padding: 9px 17px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.10);

            border:
                1px solid
                rgba(255,255,255,.18);

            color: white;

            font-size: 12px;

            font-weight: 700;
        }


        .logout {

            border: none;

            padding: 10px 18px;

            border-radius: 25px;

            background: white;

            color: #123c57;

            font-weight: 700;

            cursor: pointer;

            transition: .25s;
        }


        .logout:hover {

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px
                rgba(0,0,0,.15);
        }


        /* =========================================================
           CONTAINER
        ========================================================= */

        .container {

            position: relative;

            z-index: 2;

            width: 90%;

            max-width: 1050px;

            margin: auto;

            padding-top: 125px;
        }


        .small-title {

            color: #9ddcff;

            font-size: 11px;

            font-weight: 800;

            letter-spacing: 4px;

            text-transform: uppercase;

            margin-bottom: 10px;
        }


        h1 {

            color: white;

            font-size:
                clamp(38px,6vw,55px);

            margin-bottom: 10px;
        }


        .description {

            color:
                rgba(255,255,255,.72);

            font-size: 14px;

            margin-bottom: 30px;
        }


        /* =========================================================
           ALERT
        ========================================================= */

        .alert {

            padding: 14px 18px;

            border-radius: 14px;

            margin-bottom: 20px;

            font-size: 13px;
        }


        .success {

            background: #effbf4;

            border: 1px solid #c8efd7;

            color: #287448;
        }


        .error {

            background: #fff1f1;

            border: 1px solid #ffd0d0;

            color: #a33b3b;
        }


        /* =========================================================
           EMPTY
        ========================================================= */

        .empty {

            padding: 40px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.10);

            border:
                1px solid
                rgba(255,255,255,.18);

            color: white;

            text-align: center;
        }


        /* =========================================================
           BOOKING CARD
        ========================================================= */

        .booking-card {

            margin-bottom: 28px;

            padding: 28px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.94);

            border:
                1px solid
                rgba(255,255,255,.60);

            box-shadow:
                0 25px 70px
                rgba(0,0,0,.20);

            animation:
                fadeUp .45s ease both;
        }


        .booking-header {

            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            gap: 20px;

            margin-bottom: 22px;

            padding-bottom: 18px;

            border-bottom:
                1px dashed
                #cbdce4;
        }


        .booking-title {

            color: #123c57;

            font-size: 20px;

            font-weight: 800;
        }


        .booking-customer {

            margin-top: 7px;

            color: #126b91;

            font-size: 13px;

            font-weight: 700;
        }


        .booking-code {

            margin-top: 5px;

            color: #78909c;

            font-size: 12px;
        }


        .status {

            padding: 8px 14px;

            border-radius: 20px;

            background: #fff7df;

            border: 1px solid #f2dfaa;

            color: #856404;

            font-size: 11px;

            font-weight: 800;

            white-space: nowrap;
        }


        /* =========================================================
           DETAIL GRID
        ========================================================= */

        .detail-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 12px;

            margin-bottom: 25px;
        }


        .detail {

            padding: 15px;

            border-radius: 15px;

            background: #f7fbfd;

            border:
                1px solid
                #dfebef;
        }


        .detail-label {

            color: #78909c;

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 6px;
        }


        .detail-value {

            color: #183b4d;

            font-size: 14px;

            font-weight: 800;
        }


        /* =========================================================
           TOTAL
        ========================================================= */

        .total {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;

            padding: 18px;

            border-radius: 17px;

            background:
                linear-gradient(
                    135deg,
                    #eef9fd,
                    #e1f4fa
                );

            border:
                1px solid
                #c9e8f2;

            margin-bottom: 25px;
        }


        .total-label {

            color: #6d8795;

            font-size: 11px;

            font-weight: 700;
        }


        .total-value {

            color: #126b91;

            font-size: 23px;

            font-weight: 850;
        }


        /* =========================================================
           PAYMENT
        ========================================================= */

        .payment-section {

            padding-top: 22px;

            border-top:
                1px dashed
                #cbdce4;
        }


        .payment-title {

            color: #123c57;

            font-size: 16px;

            font-weight: 800;

            margin-bottom: 17px;
        }


        .method-grid {

            display: grid;

            grid-template-columns:
                repeat(3,1fr);

            gap: 12px;

            margin-bottom: 20px;
        }


        .method {

            position: relative;
        }


        .method input {

            position: absolute;

            opacity: 0;
        }


        .method label {

            display: block;

            min-height: 105px;

            padding: 17px;

            border-radius: 15px;

            background: #f8fbfc;

            border:
                1px solid
                #dce9ee;

            cursor: pointer;

            transition: .25s;
        }


        .method label:hover {

            border-color: #9acde0;

            transform: translateY(-2px);
        }


        .method input:checked + label {

            border-color: #3999bd;

            background: #eef9fd;

            box-shadow:
                0 0 0 3px
                rgba(57,153,189,.10);
        }


        .method-name {

            color: #123c57;

            font-size: 14px;

            font-weight: 800;
        }


        .method-description {

            margin-top: 6px;

            color: #78909c;

            font-size: 11px;

            line-height: 1.5;
        }


        /* =========================================================
           PAYMENT INFO
        ========================================================= */

        .payment-info {

            display: none;

            margin-bottom: 20px;

            padding: 20px;

            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    #f1faff,
                    #f8fcfe
                );

            border:
                1px solid
                #cfe8f1;

            animation:
                fadeUp .3s ease both;
        }


        .payment-info.active {

            display: block;
        }


        .payment-info-title {

            color: #123c57;

            font-size: 15px;

            font-weight: 800;

            margin-bottom: 8px;
        }


        .payment-info-text {

            color: #78909c;

            font-size: 12px;

            line-height: 1.7;
        }


        .payment-account {

            margin-top: 14px;

            padding: 14px;

            border-radius: 13px;

            background: white;

            border:
                1px solid
                #dce9ee;
        }


        .payment-account-label {

            color: #78909c;

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 5px;
        }


        .payment-account-value {

            color: #123c57;

            font-size: 16px;

            font-weight: 800;
        }


        /* =========================================================
           QRIS PLACEHOLDER
        ========================================================= */

        .qris-box {

            display: none;

            margin-top: 15px;

            padding: 18px;

            border-radius: 15px;

            background: white;

            border:
                1px dashed
                #b9dce8;

            text-align: center;
        }


        .qris-box.active {

            display: block;
        }


        .qris-placeholder {

            width: 180px;

            height: 180px;

            margin: 0 auto 12px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 15px;

            background:
                #f4f8fa;

            border:
                1px solid
                #dce9ee;

            color: #78909c;

            font-size: 12px;

            font-weight: 700;
        }


        .qris-note {

            color: #78909c;

            font-size: 11px;

            line-height: 1.5;
        }


        /* =========================================================
           UPLOAD
        ========================================================= */

        .upload-label {

            display: block;

            color: #546e7a;

            font-size: 12px;

            font-weight: 800;

            margin-bottom: 8px;
        }


        .upload-help {

            margin-top: 7px;

            color: #78909c;

            font-size: 11px;

            line-height: 1.5;
        }


        .file-input {

            width: 100%;

            padding: 12px;

            border-radius: 12px;

            border:
                1px solid
                #d6e4e9;

            background: #fff;

            color: #546e7a;

            cursor: pointer;
        }


        .file-input:focus {

            outline: none;

            border-color: #78bfdc;

            box-shadow:
                0 0 0 3px
                rgba(119,189,219,.13);
        }


        /* =========================================================
           PAY BUTTON
        ========================================================= */

        .pay-btn {

            width: 100%;

            margin-top: 20px;

            padding: 15px;

            border: none;

            border-radius: 17px;

            background:
                linear-gradient(
                    135deg,
                    #123c57,
                    #247da2
                );

            color: white;

            font-size: 14px;

            font-weight: 800;

            cursor: pointer;

            transition: .3s;
        }


        .pay-btn:hover {

            transform: translateY(-2px);

            box-shadow:
                0 12px 25px
                rgba(18,60,87,.22);
        }


        /* =========================================================
           SUCCESS PAYMENT
        ========================================================= */

        .payment-success {

            padding: 18px;

            border-radius: 17px;

            background: #effbf4;

            border:
                1px solid
                #c8efd7;
        }


        .payment-success-title {

            color: #287448;

            font-size: 16px;

            font-weight: 800;

            margin-bottom: 7px;
        }


        .payment-success-text {

            color: #4d7660;

            font-size: 13px;

            line-height: 1.6;
        }


        /* =========================================================
           REJECTED
        ========================================================= */

        .payment-rejected {

            padding: 15px;

            margin-bottom: 18px;

            border-radius: 14px;

            background: #fff3f3;

            border:
                1px solid
                #f1cccc;

            color: #a33b3b;

            font-size: 12px;

            line-height: 1.6;
        }


        /* =========================================================
           BACK BUTTON
        ========================================================= */

        .back-btn {

            display: inline-block;

            margin-top: 18px;

            color: white;

            text-decoration: none;

            font-size: 13px;

            font-weight: 700;

            opacity: .9;

            transition: .25s;
        }


        .back-btn:hover {

            opacity: 1;

            transform: translateX(-3px);
        }


        /* =========================================================
           ANIMATION
        ========================================================= */

        @keyframes fadeUp {

            from {

                opacity: 0;

                transform:
                    translateY(15px);
            }

            to {

                opacity: 1;

                transform:
                    translateY(0);
            }
        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media(max-width:800px) {

            .method-grid {

                grid-template-columns:
                    1fr;
            }

        }


        @media(max-width:700px) {

            .navbar {

                padding: 0 5%;
            }


            .role {

                display: none;
            }


            .container {

                width: 92%;

                padding-top: 110px;
            }


            .booking-card {

                padding: 20px;
            }


            .booking-header {

                flex-direction: column;
            }


            .detail-grid {

                grid-template-columns:
                    1fr;
            }


            .total {

                align-items: flex-start;

                flex-direction: column;
            }


            .qris-placeholder {

                width: 150px;

                height: 150px;
            }

        }

    </style>

</head>


<body>


<!-- =========================================================
     NAVBAR
========================================================= -->

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
                Logout
            </button>

        </form>

    </div>

</nav>



<!-- =========================================================
     CONTAINER
========================================================= -->

<div class="container">


    <div class="small-title">
        FAWZATA TRAVEL • PAYMENT
    </div>


    <h1>
        Pembayaran
    </h1>


    <p class="description">
        Pilih metode pembayaran dan kirim bukti pembayaran
        untuk diproses oleh pegawai.
    </p>



    <!-- =====================================================
         SUCCESS ALERT
    ====================================================== -->

    @if(session('success'))

        <div class="alert success">

            {{ session('success') }}

        </div>

    @endif



    <!-- =====================================================
         ERROR ALERT
    ====================================================== -->

    @if($errors->any())

        <div class="alert error">

            @foreach($errors->all() as $error)

                <div>
                    {{ $error }}
                </div>

            @endforeach

        </div>

    @endif



    <!-- =====================================================
         DAFTAR PEMESANAN
    ====================================================== -->

    @forelse($pemesanan as $pesanan)


        <div class="booking-card">


            <!-- =================================================
                 HEADER
            ================================================== -->

            <div class="booking-header">

                <div>

                    <div class="booking-title">

                        {{ optional(
                            optional($pesanan->jadwalTour)->paketWisata
                        )->nama_paket ?? 'Paket Wisata' }}

                    </div>


                    <div class="booking-customer">

                        Pemesan:

                        <strong>
                            {{ optional($pesanan->pelanggan)->nama_lengkap ?? '-' }}
                        </strong>

                    </div>


                    <div class="booking-code">

                        Kode Booking:

                        <strong>
                            {{ $pesanan->kode_booking }}
                        </strong>

                    </div>

                </div>


                <div class="status">

                    {{ ucfirst(
                        $pesanan->pembayaran->status_pembayaran
                        ?? 'Belum Bayar'
                    ) }}

                </div>

            </div>



            <!-- =================================================
                 DETAIL PEMESANAN
            ================================================== -->

            <div class="detail-grid">


                <div class="detail">

                    <div class="detail-label">
                        Jumlah Peserta
                    </div>

                    <div class="detail-value">

                        {{ $pesanan->jumlah_peserta }}
                        orang

                    </div>

                </div>



                <div class="detail">

                    <div class="detail-label">
                        Tanggal Pemesanan
                    </div>

                    <div class="detail-value">

                        {{ $pesanan->tgl_pemesanan
                            ? $pesanan->tgl_pemesanan->format('d M Y')
                            : '-' }}

                    </div>

                </div>



                <div class="detail">

                    <div class="detail-label">
                        Keberangkatan
                    </div>

                    <div class="detail-value">

                        {{ optional($pesanan->jadwalTour)->tgl_keberangkatan
                            ? \Carbon\Carbon::parse(
                                $pesanan->jadwalTour->tgl_keberangkatan
                            )->format('d M Y')
                            : '-' }}

                    </div>

                </div>



                <div class="detail">

                    <div class="detail-label">
                        Status Pesanan
                    </div>

                    <div class="detail-value">

                        {{ ucfirst($pesanan->status_pemesanan) }}

                    </div>

                </div>


            </div>



            <!-- =================================================
                 TOTAL
            ================================================== -->

            <div class="total">

                <div class="total-label">
                    TOTAL PEMBAYARAN
                </div>


                <div class="total-value">

                    Rp

                    {{ number_format(
                        $pesanan->total_bayar,
                        0,
                        ',',
                        '.'
                    ) }}

                </div>

            </div>



            <!-- =================================================
                 FORM PEMBAYARAN
            ================================================== -->

            @if(
                !$pesanan->pembayaran ||
                $pesanan->pembayaran->status_pembayaran === 'ditolak'
            )


                <div class="payment-section">


                    <div class="payment-title">
                        Pilih Metode Pembayaran
                    </div>



                    @if(
                        $pesanan->pembayaran &&
                        $pesanan->pembayaran->status_pembayaran === 'ditolak'
                    )

                        <div class="payment-rejected">

                            Pembayaran sebelumnya ditolak oleh pegawai.
                            Silakan lakukan pembayaran kembali dan upload
                            bukti pembayaran yang benar.

                        </div>

                    @endif



                    <form
                        action="{{ route('pelanggan.pembayaran.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >

                        @csrf



                        <input
                            type="hidden"
                            name="id_pemesanan"
                            value="{{ $pesanan->id_pemesanan }}"
                        >



                        <!-- =========================================
                             METODE PEMBAYARAN
                        ========================================== -->

                        <div class="method-grid">


                            <!-- TRANSFER BANK -->

                            <div class="method">

                                <input
                                    type="radio"
                                    id="bank{{ $pesanan->id_pemesanan }}"
                                    name="metode_pembayaran"
                                    value="transfer_bank"
                                    required
                                >


                                <label
                                    for="bank{{ $pesanan->id_pemesanan }}"
                                >

                                    <div class="method-name">
                                        Transfer Bank
                                    </div>


                                    <div class="method-description">
                                        Transfer melalui rekening bank
                                        FAWZATA TRAVEL.
                                    </div>

                                </label>

                            </div>



                            <!-- QRIS -->

                            <div class="method">

                                <input
                                    type="radio"
                                    id="qris{{ $pesanan->id_pemesanan }}"
                                    name="metode_pembayaran"
                                    value="qris"
                                    required
                                    onchange="showPaymentInfo(
                                        '{{ $pesanan->id_pemesanan }}',
                                        'qris'
                                    )"
                                >


                                <label
                                    for="qris{{ $pesanan->id_pemesanan }}"
                                >

                                    <div class="method-name">
                                        QRIS
                                    </div>


                                    <div class="method-description">
                                        Bayar menggunakan QRIS,
                                        lalu screenshot bukti transaksi.
                                    </div>

                                </label>

                            </div>



                            <!-- E-WALLET -->

                            <div class="method">

                                <input
                                    type="radio"
                                    id="ewallet{{ $pesanan->id_pemesanan }}"
                                    name="metode_pembayaran"
                                    value="e_wallet"
                                    required
                                    onchange="showPaymentInfo(
                                        '{{ $pesanan->id_pemesanan }}',
                                        'e_wallet'
                                    )"
                                >


                                <label
                                    for="ewallet{{ $pesanan->id_pemesanan }}"
                                >

                                    <div class="method-name">
                                        E-Wallet
                                    </div>


                                    <div class="method-description">
                                        Bayar melalui e-wallet,
                                        lalu screenshot bukti transaksi.
                                    </div>

                                </label>

                            </div>


                        </div>



                        <!-- =========================================
                             INFO QRIS
                        ========================================== -->

                        <div
                            id="qrisInfo{{ $pesanan->id_pemesanan }}"
                            class="payment-info"
                        >

                            <div class="payment-info-title">
                                Pembayaran QRIS
                            </div>


                            <div class="payment-info-text">

                                Silakan lakukan pembayaran menggunakan
                                QRIS FAWZATA TRAVEL.

                                Setelah pembayaran berhasil,
                                <strong>ambil screenshot bukti transaksi</strong>
                                dari aplikasi pembayaran kamu.

                            </div>


                            <div class="qris-box active">

                                <div class="qris-placeholder">

                                    QRIS
                                    <br>
                                    FAWZATA TRAVEL

                                </div>


                                <div class="qris-note">

                                    Tempatkan gambar QRIS asli
                                    FAWZATA TRAVEL di bagian ini.

                                </div>

                            </div>

                        </div>



                        <!-- =========================================
                             INFO E-WALLET
                        ========================================== -->

                        <div
                            id="ewalletInfo{{ $pesanan->id_pemesanan }}"
                            class="payment-info"
                        >

                            <div class="payment-info-title">
                                Pembayaran E-Wallet
                            </div>


                            <div class="payment-info-text">

                                Silakan lakukan pembayaran ke akun
                                e-wallet FAWZATA TRAVEL.

                                Setelah pembayaran berhasil,
                                <strong>ambil screenshot bukti transaksi</strong>
                                dari aplikasi e-wallet kamu.

                            </div>


                            <div class="payment-account">

                                <div class="payment-account-label">
                                    E-Wallet FAWZATA TRAVEL
                                </div>


                                <div class="payment-account-value">
                                    Nomor / Akun E-Wallet
                                </div>

                            </div>

                        </div>



                        <!-- =========================================
                             UPLOAD BUKTI
                        ========================================== -->

                        <label class="upload-label">

                            Upload Screenshot Bukti Pembayaran

                        </label>


                        <input
                            type="file"
                            name="bukti_pembayaran"
                            class="file-input"
                            accept=".jpg,.jpeg,.png,.pdf"
                            required
                        >


                        <div class="upload-help">

                            Upload screenshot bukti pembayaran
                            setelah transaksi berhasil.
                            Format: JPG, JPEG, PNG, atau PDF.
                            Maksimal 5 MB.

                        </div>



                        <!-- =========================================
                             BUTTON
                        ========================================== -->

                        <button
                            type="submit"
                            class="pay-btn"
                        >

                            Kirim Bukti Pembayaran

                        </button>


                    </form>


                </div>



            <!-- =================================================
                 MENUNGGU
            ================================================== -->

            @elseif(
                $pesanan->pembayaran->status_pembayaran === 'menunggu'
            )


                <div class="payment-section">


                    <div class="payment-title">
                        Pembayaran Sedang Diproses
                    </div>


                    <div class="payment-success">

                        <div class="payment-success-title">

                            Bukti Pembayaran Sudah Dikirim

                        </div>


                        <div class="payment-success-text">

                            Bukti pembayaran sudah berhasil dikirim.
                            Silakan tunggu pegawai memeriksa dan
                            menyetujui pembayaran Anda.

                        </div>

                    </div>


                </div>



            <!-- =================================================
                 DISETUJUI
            ================================================== -->

            @elseif(
                $pesanan->pembayaran->status_pembayaran === 'disetujui'
            )


                <div class="payment-section">


                    <div class="payment-title">

                        Pembayaran Berhasil

                    </div>


                    <div class="payment-success">

                        <div class="payment-success-title">

                            Pembayaran Telah Disetujui

                        </div>


                        <div class="payment-success-text">

                            Pembayaran Anda telah diperiksa dan
                            disetujui oleh pegawai.

                            <br><br>

                            Silakan menunggu proses penerbitan
                            <strong>e-ticket</strong> oleh pegawai.

                        </div>

                    </div>


                </div>


            @endif


        </div>


    @empty


        <div class="empty">

            Belum ada pemesanan yang perlu dibayar.

        </div>


    @endforelse



    <!-- =========================================================
         BACK
    ========================================================== -->

    <a
        href="{{ route('pelanggan.pemesanan.index') }}"
        class="back-btn"
    >

        Kembali ke Pemesanan

    </a>


</div>



<!-- =============================================================
     JAVASCRIPT
============================================================= -->

<script>

    function showPaymentInfo(
        id,
        method
    )
    {

        const qrisInfo =
            document.getElementById(
                'qrisInfo' + id
            );


        const ewalletInfo =
            document.getElementById(
                'ewalletInfo' + id
            );


        if (qrisInfo) {

            qrisInfo.classList.remove(
                'active'
            );

        }


        if (ewalletInfo) {

            ewalletInfo.classList.remove(
                'active'
            );

        }


        if (method === 'qris') {

            if (qrisInfo) {

                qrisInfo.classList.add(
                    'active'
                );

            }

        }


        if (method === 'e_wallet') {

            if (ewalletInfo) {

                ewalletInfo.classList.add(
                    'active'
                );

            }

        }

    }


    /*
    |--------------------------------------------------------------------------
    | TRANSFER BANK
    |--------------------------------------------------------------------------
    |
    | Jika transfer bank dipilih, informasi QRIS/E-Wallet disembunyikan.
    |
    */

    document.querySelectorAll(
        'input[name="metode_pembayaran"]'
    ).forEach(function(input) {

        input.addEventListener(
            'change',
            function() {

                const id =
                    this.id.replace(
                        'bank',
                        ''
                    )
                    .replace(
                        'qris',
                        ''
                    )
                    .replace(
                        'ewallet',
                        ''
                    );


                if (
                    this.value ===
                    'transfer_bank'
                ) {

                    const qrisInfo =
                        document.getElementById(
                            'qrisInfo' + id
                        );


                    const ewalletInfo =
                        document.getElementById(
                            'ewalletInfo' + id
                        );


                    if (qrisInfo) {

                        qrisInfo.classList.remove(
                            'active'
                        );

                    }


                    if (ewalletInfo) {

                        ewalletInfo.classList.remove(
                            'active'
                        );

                    }

                }

            }
        );

    });

</script>


</body>

</html>