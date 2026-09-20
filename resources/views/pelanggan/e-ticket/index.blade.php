```blade
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
                    rgba(4, 35, 52, .78),
                    rgba(7, 48, 67, .92)
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

            background: rgba(255,255,255,.93);

            color: #123c57;

            font-weight: 700;

            cursor: pointer;
        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {

            position: relative;

            z-index: 2;

            width: 90%;

            max-width: 1150px;

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

            max-width: 650px;

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

            border-radius: 28px;

            padding: 28px;

            box-shadow:
                0 30px 80px
                rgba(0,0,0,.25);
        }


        .card-header {

            display: flex;

            justify-content: space-between;

            align-items: center;

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
        }


        /* =====================================================
           PEMESANAN
        ===================================================== */

        .booking {

            padding: 24px;

            margin-bottom: 20px;

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
        }


        .status-paid {

            background:
                rgba(53,211,137,.13);

            border:
                1px solid
                rgba(53,211,137,.25);

            color: #76e3ad;
        }


        .status-unpaid {

            background:
                rgba(255,193,7,.12);

            border:
                1px solid
                rgba(255,193,7,.25);

            color: #ffe08a;
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
           PEMBAYARAN
        ===================================================== */

        .payment-section {

            margin-top: 22px;

            padding-top: 22px;

            border-top:
                1px dashed
                rgba(255,255,255,.15);
        }


        .payment-title {

            color: #bfeaff;

            font-size: 12px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 15px;
        }


        .payment-info {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;

            padding: 15px 17px;

            border-radius: 15px;

            background:
                rgba(255,255,255,.05);

            border:
                1px solid
                rgba(255,255,255,.08);

            margin-bottom: 15px;
        }


        .payment-label {

            color:
                rgba(255,255,255,.48);

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: .8px;

            margin-bottom: 4px;
        }


        .payment-value {

            color: white;

            font-size: 14px;

            font-weight: 800;
        }


        /* =====================================================
           UPLOAD
        ===================================================== */

        .upload-area {

            padding: 18px;

            border-radius: 16px;

            background:
                rgba(255,255,255,.04);

            border:
                1px dashed
                rgba(157,220,255,.25);
        }


        .upload-title {

            color: #d8f4ff;

            font-size: 12px;

            font-weight: 700;

            margin-bottom: 5px;
        }


        .upload-description {

            color:
                rgba(255,255,255,.48);

            font-size: 10px;

            margin-bottom: 13px;
        }


        .upload-form {

            display: flex;

            gap: 10px;

            align-items: center;

            flex-wrap: wrap;
        }


        .file-input {

            flex: 1;

            min-width: 220px;

            padding: 10px;

            border-radius: 10px;

            background:
                rgba(255,255,255,.08);

            border:
                1px solid
                rgba(255,255,255,.12);

            color:
                rgba(255,255,255,.75);

            font-size: 11px;
        }


        .upload-btn {

            padding: 11px 17px;

            border: none;

            border-radius: 22px;

            background:
                #ffffff;

            color: #123c57;

            font-weight: 800;

            font-size: 11px;

            cursor: pointer;
        }


        .upload-btn:hover {

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px
                rgba(0,0,0,.18);
        }


        /* =====================================================
           BUKTI PEMBAYARAN
        ===================================================== */

        .proof {

            margin-top: 14px;

            padding: 12px 15px;

            border-radius: 13px;

            background:
                rgba(53,211,137,.08);

            border:
                1px solid
                rgba(53,211,137,.15);

            color: #9be8bd;

            font-size: 10px;
        }


        /* =====================================================
           E-TICKET
        ===================================================== */

        .ticket-info {

            margin-top: 18px;

            padding: 15px 17px;

            border-radius: 15px;

            background:
                rgba(157,220,255,.07);

            border:
                1px solid
                rgba(157,220,255,.13);
        }


        .ticket-info-title {

            color: #bfeaff;

            font-size: 11px;

            font-weight: 800;

            margin-bottom: 5px;
        }


        .ticket-info-text {

            color:
                rgba(255,255,255,.53);

            font-size: 10px;

            line-height: 1.6;
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

            .payment-info {

                flex-direction: column;

                align-items: flex-start;
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
        FAWZATA TRAVEL
    </div>


    <h1>
        Pembayaran
    </h1>


    <p class="description">
        Periksa pembayaran pemesanan perjalanan Anda
        dan unggah bukti pembayaran pada halaman ini.
    </p>



    <!-- =================================================
         MAIN CARD
    ================================================= -->

    <div class="main-card">


        <div class="card-header">

            <div>

                <div class="card-title">
                    Data Pemesanan
                </div>

                <div class="card-subtitle">
                    Daftar pemesanan dan status pembayaran Anda
                </div>

            </div>


            <div class="total">

                Total
                {{ $pemesanan->count() }}
                Pemesanan

            </div>

        </div>



        @forelse($pemesanan as $item)


            <!-- =================================================
                 BOOKING
            ================================================= -->

            <div class="booking">


                <!-- HEADER PEMESANAN -->

                <div class="booking-top">


                    <div>

                        <div class="booking-code-label">
                            Kode Booking
                        </div>


                        <div class="booking-code">

                            {{ $item->kode_booking ?? '-' }}

                        </div>

                    </div>



                    @php

                        $status =
                            strtolower(
                                $item->pembayaran->status_pembayaran
                                ?? 'belum dibayar'
                            );

                    @endphp


                    @if(
                        in_array(
                            $status,
                            ['lunas', 'dibayar', 'paid', 'berhasil']
                        )
                    )

                        <div class="status status-paid">
                            Pembayaran Berhasil
                        </div>

                    @elseif(
                        in_array(
                            $status,
                            ['pending', 'menunggu', 'diproses']
                        )
                    )

                        <div class="status status-pending">
                            Menunggu Verifikasi
                        </div>

                    @else

                        <div class="status status-unpaid">
                            Belum Dibayar
                        </div>

                    @endif


                </div>



                <!-- =================================================
                     INFORMASI PEMESANAN
                ================================================= -->

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
                                ? \Carbon\Carbon::parse($item->created_at)->format('d M Y')
                                : '-'
                            }}

                        </div>

                    </div>


                    <div class="info-box">

                        <div class="info-label">
                            Paket Wisata
                        </div>

                        <div class="info-value">

                            {{ $item->jadwalTour->paket_wisata
                                ?? $item->jadwalTour->nama_paket
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
                     PEMBAYARAN
                ================================================= -->

                <div class="payment-section">


                    <div class="payment-title">
                        Informasi Pembayaran
                    </div>



                    <div class="payment-info">


                        <div>

                            <div class="payment-label">
                                Metode Pembayaran
                            </div>


                            <div class="payment-value">

                                {{ $item->pembayaran->metode_pembayaran ?? '-' }}

                            </div>

                        </div>



                        <div>

                            <div class="payment-label">
                                Total Pembayaran
                            </div>


                            <div class="payment-value">

                                Rp
                                {{ number_format(
                                    $item->pembayaran->jumlah_bayar
                                    ?? $item->total_harga
                                    ?? 0,
                                    0,
                                    ',',
                                    '.'
                                ) }}

                            </div>

                        </div>


                    </div>



                    <!-- =================================================
                         UPLOAD BUKTI
                    ================================================= -->

                    @if(
                        !in_array(
                            $status,
                            ['lunas', 'dibayar', 'paid', 'berhasil']
                        )
                    )


                        <div class="upload-area">


                            <div class="upload-title">

                                Unggah Bukti Pembayaran

                            </div>


                            <div class="upload-description">

                                Pilih foto atau PDF bukti pembayaran
                                kemudian tekan tombol unggah.

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
                                    Unggah Bukti
                                </button>

                            </form>


                        </div>


                    @else


                        <div class="proof">

                            ✓ Bukti pembayaran telah diterima
                            dan pembayaran telah diproses.

                        </div>


                    @endif



                    <!-- =================================================
                         E-TICKET
                    ================================================= -->

                    <div class="ticket-info">


                        <div class="ticket-info-title">

                            E-Ticket Perjalanan

                        </div>


                        @if(
                            $item->eTicket
                            ?? false
                        )

                            <div class="ticket-info-text">

                                E-ticket sudah diterbitkan.
                                Silakan buka halaman E-Ticket
                                untuk melihat atau mengunduh tiket perjalanan.

                            </div>

                        @else

                            <div class="ticket-info-text">

                                E-ticket belum diterbitkan.
                                Setelah pembayaran berhasil diverifikasi,
                                e-ticket akan diterbitkan oleh pihak FAWZATA TRAVEL.

                            </div>

                        @endif


                    </div>


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
            href="/pelanggan/dashboard"
            class="back-btn"
        >

            ← Kembali ke Dashboard

        </a>


    </div>


</main>


</body>

</html>
```
