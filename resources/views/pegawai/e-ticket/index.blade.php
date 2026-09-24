<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>E-Ticket - FAWZATA TRAVEL</title>


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
                    rgba(7,48,67,.82),
                    rgba(18,60,87,.94)
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
                rgba(18,60,87,.82);

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

            width: 90%;

            max-width: 1150px;

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

            margin-bottom: 35px;
        }


        /* =========================================================
           ALERT
        ========================================================= */

        .alert {

            padding: 15px 18px;

            border-radius: 14px;

            margin-bottom: 20px;

            font-size: 13px;

            font-weight: 600;
        }


        .alert-success {

            background: #effbf4;

            border: 1px solid #c8efd7;

            color: #287448;
        }


        .alert-error {

            background: #fff1f1;

            border: 1px solid #ffd0d0;

            color: #a33b3b;
        }


        /* =========================================================
           SECTION
        ========================================================= */

        .section {

            margin-bottom: 35px;
        }


        .section-heading {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 18px;
        }


        .section-title {

            color: white;

            font-size: 20px;

            font-weight: 800;
        }


        .section-badge {

            padding: 7px 13px;

            border-radius: 20px;

            background:
                rgba(255,255,255,.10);

            border:
                1px solid
                rgba(255,255,255,.18);

            color: #dff5ff;

            font-size: 11px;

            font-weight: 700;
        }


        /* =========================================================
           READY CARD
        ========================================================= */

        .ready-card {

            padding: 25px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.94);

            border:
                1px solid
                rgba(255,255,255,.60);

            box-shadow:
                0 25px 70px
                rgba(0,0,0,.20);

            margin-bottom: 18px;

            transition: .3s;

            animation:
                fadeUp .45s ease both;
        }


        .ready-card:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 30px 80px
                rgba(0,0,0,.26);
        }


        .ready-header {

            display: flex;

            align-items: flex-start;

            justify-content: space-between;

            gap: 20px;

            padding-bottom: 18px;

            margin-bottom: 20px;

            border-bottom:
                1px dashed
                #cbdce4;
        }


        .package-name {

            color: #123c57;

            font-size: 20px;

            font-weight: 800;
        }


        .booking-code {

            margin-top: 6px;

            color: #78909c;

            font-size: 12px;
        }


        .ready-status {

            padding: 8px 13px;

            border-radius: 20px;

            background: #e9f9f0;

            border:
                1px solid
                #c7ebd5;

            color: #287448;

            font-size: 10px;

            font-weight: 800;

            white-space: nowrap;
        }


        /* =========================================================
           DETAIL
        ========================================================= */

        .detail-grid {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 12px;

            margin-bottom: 20px;
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

            letter-spacing: 1px;

            text-transform: uppercase;

            margin-bottom: 6px;
        }


        .detail-value {

            color: #183b4d;

            font-size: 13px;

            font-weight: 800;
        }


        /* =========================================================
           READY FOOTER
        ========================================================= */

        .ready-footer {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            padding-top: 18px;

            border-top:
                1px solid
                #edf2f4;
        }


        .payment-approved {

            color: #287448;

            font-size: 12px;

            font-weight: 700;
        }


        .payment-approved span {

            display: block;

            color: #78909c;

            font-size: 11px;

            font-weight: 500;

            margin-top: 3px;
        }


        .issue-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            padding: 12px 20px;

            border: none;

            border-radius: 25px;

            background:
                linear-gradient(
                    135deg,
                    #123c57,
                    #247da2
                );

            color: white;

            font-size: 12px;

            font-weight: 800;

            cursor: pointer;

            text-decoration: none;

            transition: .25s;
        }


        .issue-btn:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 10px 25px
                rgba(18,60,87,.25);
        }


        /* =========================================================
           EMPTY READY
        ========================================================= */

        .empty-ready {

            padding: 30px;

            border-radius: 20px;

            background:
                rgba(255,255,255,.08);

            border:
                1px solid
                rgba(255,255,255,.15);

            color:
                rgba(255,255,255,.72);

            text-align: center;

            font-size: 13px;
        }


        /* =========================================================
           TICKET CARD
        ========================================================= */

        .ticket-card {

            position: relative;

            overflow: hidden;

            padding: 25px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.95);

            border:
                1px solid
                rgba(255,255,255,.65);

            box-shadow:
                0 25px 70px
                rgba(0,0,0,.20);

            margin-bottom: 18px;

            animation:
                fadeUp .45s ease both;
        }


        .ticket-card::before {

            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 6px;

            height: 100%;

            background:
                linear-gradient(
                    #5ac8f0,
                    #123c57
                );
        }


        .ticket-header {

            display: flex;

            align-items: flex-start;

            justify-content: space-between;

            gap: 20px;

            padding-bottom: 18px;

            margin-bottom: 20px;

            border-bottom:
                1px dashed
                #cbdce4;
        }


        .ticket-brand {

            color: #123c57;

            font-size: 12px;

            font-weight: 900;

            letter-spacing: 3px;
        }


        .ticket-number {

            margin-top: 7px;

            color: #126b91;

            font-size: 19px;

            font-weight: 900;
        }


        .issued {

            padding: 8px 13px;

            border-radius: 20px;

            background: #e9f9f0;

            border:
                1px solid
                #c7ebd5;

            color: #287448;

            font-size: 10px;

            font-weight: 800;
        }


        .ticket-info {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 12px;

            margin-bottom: 20px;
        }


        .ticket-info-box {

            padding: 15px;

            border-radius: 15px;

            background: #f7fbfd;

            border:
                1px solid
                #dfebef;
        }


        .ticket-info-label {

            color: #78909c;

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 6px;
        }


        .ticket-info-value {

            color: #183b4d;

            font-size: 13px;

            font-weight: 800;
        }


        .ticket-footer {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            padding-top: 18px;

            border-top:
                1px solid
                #edf2f4;
        }


        .issued-date {

            color: #78909c;

            font-size: 11px;
        }


        .download-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            padding: 11px 18px;

            border-radius: 23px;

            background: #123c57;

            color: white;

            text-decoration: none;

            font-size: 12px;

            font-weight: 800;

            transition: .25s;
        }


        .download-btn:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 10px 22px
                rgba(18,60,87,.22);
        }


        /* =========================================================
           EMPTY TICKET
        ========================================================= */

        .empty-ticket {

            padding: 35px;

            border-radius: 20px;

            background:
                rgba(255,255,255,.08);

            border:
                1px solid
                rgba(255,255,255,.15);

            color:
                rgba(255,255,255,.72);

            text-align: center;

            font-size: 13px;
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
           BACK BUTTON
        ========================================================= */

        .back-wrapper {

            margin-top: 10px;

            margin-bottom: 40px;
        }


        .back-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            padding: 12px 20px;

            border-radius: 25px;

            background:
                rgba(255,255,255,.10);

            border:
                1px solid
                rgba(255,255,255,.20);

            color: white;

            text-decoration: none;

            font-size: 12px;

            font-weight: 800;

            backdrop-filter: blur(12px);

            -webkit-backdrop-filter: blur(12px);

            transition: .25s;
        }


        .back-btn:hover {

            background:
                rgba(255,255,255,.18);

            transform:
                translateY(-2px);

            box-shadow:
                0 10px 25px
                rgba(0,0,0,.18);
        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media(max-width:850px) {

            .detail-grid {

                grid-template-columns:
                    repeat(2, 1fr);
            }

            .ticket-info {

                grid-template-columns:
                    repeat(2, 1fr);
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


            .ready-header,
            .ticket-header {

                flex-direction: column;
            }


            .detail-grid,
            .ticket-info {

                grid-template-columns: 1fr;
            }


            .ready-footer,
            .ticket-footer {

                flex-direction: column;

                align-items: stretch;
            }


            .issue-btn,
            .download-btn {

                width: 100%;
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
        href="{{ route('pegawai.dashboard') }}"
        class="logo"
    >
        FAWZATA<span> TRAVEL</span>
    </a>


    <div class="nav-right">

        <div class="role">
            PEGAWAI
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
     MAIN
========================================================= -->

<main class="container">


    <div class="small-title">
        FAWZATA TRAVEL • E-TICKET
    </div>


    <h1>
        E-Ticket
    </h1>


    <p class="description">
        Periksa pembayaran yang telah disetujui dan terbitkan
        E-Ticket untuk pelanggan.
    </p>


    <!-- =====================================================
         ALERT
    ===================================================== -->

    @if(session('success'))

        <div class="alert alert-success">

            ✓ {{ session('success') }}

        </div>

    @endif


    @if(session('error'))

        <div class="alert alert-error">

            ⚠ {{ session('error') }}

        </div>

    @endif


    <!-- =====================================================
         PEMESANAN SIAP DITERBITKAN
    ===================================================== -->

    <section class="section">


        <div class="section-heading">

            <div class="section-title">
                Siap Diterbitkan
            </div>


            <div class="section-badge">

                {{ $pemesananSiapTerbit->count() }}
                Pemesanan

            </div>

        </div>


        @forelse(
            $pemesananSiapTerbit
            as $pesanan
        )


            <div class="ready-card">


                <div class="ready-header">


                    <div>

                        <div class="package-name">

                            {{ optional($pesanan->jadwalTour)->nama_jadwal
                                ?? 'Paket Wisata' }}

                        </div>


                        <div class="booking-code">

                            Kode Booking:

                            <strong>
                                {{ $pesanan->kode_booking }}
                            </strong>

                        </div>

                    </div>


                    <div class="ready-status">

                        PEMBAYARAN DISETUJUI

                    </div>


                </div>


                <div class="detail-grid">


                    <div class="detail">

                        <div class="detail-label">
                            Pelanggan
                        </div>

                        <div class="detail-value">

                            {{ optional($pesanan->pelanggan)->nama_lengkap
                                ?? '-' }}

                        </div>

                    </div>


                    <div class="detail">

                        <div class="detail-label">
                            Peserta
                        </div>

                        <div class="detail-value">

                            {{ $pesanan->jumlah_peserta }}
                            orang

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
                            Total Bayar
                        </div>

                        <div class="detail-value">

                            Rp
                            {{ number_format(
                                $pesanan->total_bayar,
                                0,
                                ',',
                                '.'
                            ) }}

                        </div>

                    </div>


                </div>


                <div class="ready-footer">


                    <div class="payment-approved">

                        ✓ Pembayaran telah disetujui

                        <span>
                            Pesanan siap diterbitkan menjadi E-Ticket.
                        </span>

                    </div>


                    <form
                        action="{{ route(
                            'pegawai.e-ticket.terbitkan',
                            $pesanan->id_pemesanan
                        ) }}"
                        method="POST"
                    >

                        @csrf


                        <button
                            type="submit"
                            class="issue-btn"
                            onclick="
                                return confirm(
                                    'Terbitkan E-Ticket untuk pelanggan ini?'
                                )
                            "
                        >

                            Terbitkan E-Ticket

                        </button>

                    </form>


                </div>


            </div>


        @empty


            <div class="empty-ready">

                ✓ Tidak ada pemesanan yang menunggu penerbitan E-Ticket.

            </div>


        @endforelse


    </section>


    <!-- =====================================================
         E-TICKET SUDAH DITERBITKAN
    ===================================================== -->

    <section class="section">


        <div class="section-heading">

            <div class="section-title">
                E-Ticket Diterbitkan
            </div>


            <div class="section-badge">

                {{ $eTickets->count() }}
                Ticket

            </div>

        </div>


        @forelse(
            $eTickets
            as $ticket
        )


            <div class="ticket-card">


                <div class="ticket-header">


                    <div>

                        <div class="ticket-brand">
                            FAWZATA TRAVEL
                        </div>


                        <div class="ticket-number">

                            {{ $ticket->nomor_ticket }}

                        </div>

                    </div>


                    <div class="issued">

                        ✓ DITERBITKAN

                    </div>


                </div>


                <div class="ticket-info">


                    <div class="ticket-info-box">

                        <div class="ticket-info-label">
                            Pelanggan
                        </div>

                        <div class="ticket-info-value">

                            {{ optional(
                                $ticket->pemesanan->pelanggan
                            )->nama_lengkap ?? '-' }}

                        </div>

                    </div>


                    <div class="ticket-info-box">

                        <div class="ticket-info-label">
                            Kode Booking
                        </div>

                        <div class="ticket-info-value">

                            {{ $ticket->pemesanan->kode_booking
                                ?? '-' }}

                        </div>

                    </div>


                    <div class="ticket-info-box">

                        <div class="ticket-info-label">
                            Jumlah Peserta
                        </div>

                        <div class="ticket-info-value">

                            {{ $ticket->pemesanan->jumlah_peserta
                                ?? 0 }}
                            orang

                        </div>

                    </div>


                    <div class="ticket-info-box">

                        <div class="ticket-info-label">
                            Keberangkatan
                        </div>

                        <div class="ticket-info-value">

                            {{ optional(
                                $ticket->pemesanan->jadwalTour
                            )->tgl_keberangkatan
                                ? \Carbon\Carbon::parse(
                                    $ticket->pemesanan
                                        ->jadwalTour
                                        ->tgl_keberangkatan
                                )->format('d M Y')
                                : '-' }}

                        </div>

                    </div>


                    <div class="ticket-info-box">

                        <div class="ticket-info-label">
                            Kepulangan
                        </div>

                        <div class="ticket-info-value">

                            {{ optional(
                                $ticket->pemesanan->jadwalTour
                            )->tgl_kepulangan
                                ? \Carbon\Carbon::parse(
                                    $ticket->pemesanan
                                        ->jadwalTour
                                        ->tgl_kepulangan
                                )->format('d M Y')
                                : '-' }}

                        </div>

                    </div>


                    <div class="ticket-info-box">

                        <div class="ticket-info-label">
                            Status
                        </div>

                        <div class="ticket-info-value">

                            Selesai

                        </div>

                    </div>


                </div>


                <div class="ticket-footer">


                    <div class="issued-date">

                        Diterbitkan:

                        <strong>

                            {{ $ticket->tgl_terbit
                                ? \Carbon\Carbon::parse(
                                    $ticket->tgl_terbit
                                )->format('d M Y H:i')
                                : '-' }}

                        </strong>

                    </div>


                    <a
                        href="{{ route(
                            'pegawai.e-ticket.download',
                            $ticket->id_ticket
                        ) }}"
                        class="download-btn"
                    >

                        ↓ Download E-Ticket

                    </a>


                </div>


            </div>


        @empty


            <div class="empty-ticket">

                Belum ada E-Ticket yang diterbitkan.

            </div>


        @endforelse


    </section>


    <!-- =====================================================
         KEMBALI
    ===================================================== -->

    <div class="back-wrapper">

        <a
            href="{{ route('pegawai.dashboard') }}"
            class="back-btn"
        >

            ← Kembali ke Dashboard

        </a>

    </div>


</main>


</body>

</html>