<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>FAWZATA TRAVEL - E-Ticket</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 35px;
            background: #e9eef2;
            font-family: DejaVu Sans, Arial, sans-serif;
            color: #183b4d;
        }


        /* =========================================================
           TICKET WRAPPER
        ========================================================= */

        .ticket {
            width: 100%;
            max-width: 1050px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid #d8e3e8;
        }


        /* =========================================================
           HEADER
        ========================================================= */

        .header {
            background: #123c57;
            padding: 25px 30px;
            color: white;
        }

        .brand {
            font-size: 27px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .brand span {
            color: #8fd8f4;
        }

        .travel-label {
            margin-top: 5px;
            font-size: 10px;
            letter-spacing: 3px;
            color: #b8d9e7;
        }


        /* =========================================================
           TICKET TOP
        ========================================================= */

        .ticket-top {
            padding: 25px 30px 20px;
            border-bottom: 1px dashed #b9cbd4;
        }

        .ticket-title {
            font-size: 25px;
            font-weight: bold;
            color: #123c57;
        }

        .ticket-subtitle {
            margin-top: 5px;
            font-size: 11px;
            color: #78909c;
        }

        .status {
            display: inline-block;
            margin-top: 14px;
            padding: 7px 15px;
            border-radius: 20px;
            background: #e8f7ee;
            border: 1px solid #b9e3c9;
            color: #237044;
            font-size: 10px;
            font-weight: bold;
        }


        /* =========================================================
           MAIN INFORMATION
        ========================================================= */

        .content {
            padding: 25px 30px;
        }

        .section-title {
            margin-bottom: 13px;
            color: #78909c;
            font-size: 9px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
        }


        /* =========================================================
           PASSENGER
        ========================================================= */

        .passenger-box {
            background: #f5f9fb;
            border: 1px solid #dce8ed;
            border-radius: 12px;
            padding: 17px;
            margin-bottom: 20px;
        }

        .passenger-name {
            font-size: 18px;
            font-weight: bold;
            color: #123c57;
        }

        .passenger-role {
            margin-top: 4px;
            font-size: 10px;
            color: #78909c;
        }


        /* =========================================================
           JOURNEY
        ========================================================= */

        .journey {
            width: 100%;
            margin-bottom: 20px;
        }

        .journey-left {
            width: 36%;
            vertical-align: top;
        }

        .journey-middle {
            width: 28%;
            text-align: center;
            vertical-align: middle;
        }

        .journey-right {
            width: 36%;
            text-align: right;
            vertical-align: top;
        }

        .location-label {
            font-size: 9px;
            color: #78909c;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .location-name {
            margin-top: 5px;
            font-size: 19px;
            font-weight: bold;
            color: #123c57;
        }

        .date {
            margin-top: 5px;
            font-size: 11px;
            color: #546e7a;
        }

        .route-line {
            color: #3999bd;
            font-size: 22px;
            font-weight: bold;
        }

        .route-text {
            margin-top: 3px;
            font-size: 8px;
            color: #90a4ae;
            letter-spacing: 1px;
        }


        /* =========================================================
           DETAILS
        ========================================================= */

        .details {
            width: 100%;
            border-collapse: separate;
            border-spacing: 8px;
            margin-left: -8px;
        }

        .detail-card {
            width: 25%;
            padding: 13px;
            background: #f8fbfc;
            border: 1px solid #dce8ed;
            border-radius: 10px;
            vertical-align: top;
        }

        .detail-label {
            font-size: 8px;
            color: #78909c;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .detail-value {
            margin-top: 6px;
            font-size: 11px;
            font-weight: bold;
            color: #183b4d;
        }


        /* =========================================================
           PRICE
        ========================================================= */

        .price-box {
            margin-top: 12px;
            padding: 16px;
            background: #eef8fc;
            border: 1px solid #c8e4ee;
            border-radius: 11px;
        }

        .price-label {
            font-size: 9px;
            color: #78909c;
        }

        .price-value {
            margin-top: 4px;
            font-size: 20px;
            font-weight: bold;
            color: #126b91;
        }


        /* =========================================================
           QR + TICKET NUMBER
        ========================================================= */

        .bottom {
            border-top: 1px dashed #b9cbd4;
            padding: 22px 30px;
        }

        .qr-section {
            width: 25%;
            text-align: center;
            vertical-align: middle;
        }

        .qr-box {
            padding: 10px;
            background: white;
            border: 1px solid #d7e3e8;
            border-radius: 10px;
            display: inline-block;
        }

        .qr-image {
            width: 115px;
            height: 115px;
        }

        .qr-text {
            margin-top: 7px;
            font-size: 8px;
            color: #78909c;
        }


        .ticket-info {
            width: 75%;
            padding-left: 25px;
            vertical-align: middle;
        }

        .number-label {
            font-size: 8px;
            color: #78909c;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .number {
            margin-top: 5px;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 1px;
            color: #123c57;
        }

        .booking {
            margin-top: 15px;
        }

        .booking-label {
            font-size: 8px;
            color: #78909c;
            text-transform: uppercase;
        }

        .booking-value {
            margin-top: 4px;
            font-size: 13px;
            font-weight: bold;
            color: #183b4d;
        }


        /* =========================================================
           FOOTER
        ========================================================= */

        .footer {
            background: #f4f8fa;
            border-top: 1px solid #dce8ed;
            padding: 16px 30px;
            font-size: 8px;
            color: #78909c;
            line-height: 1.6;
        }

        .footer-title {
            color: #123c57;
            font-weight: bold;
            margin-bottom: 4px;
        }

        .footer-right {
            text-align: right;
        }


        /* =========================================================
           DECORATION
        ========================================================= */

        .circle {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #3999bd;
            margin-right: 5px;
        }

    </style>

</head>


<body>


<div class="ticket">


    <!-- =========================================================
         HEADER
    ========================================================= -->

    <div class="header">

        <div class="brand">
            FAWZATA<span> TRAVEL</span>
        </div>

        <div class="travel-label">
            TOUR & TRAVEL EXPERIENCE
        </div>

    </div>


    <!-- =========================================================
         TICKET TITLE
    ========================================================= -->

    <div class="ticket-top">

        <div class="ticket-title">
            E-TICKET PERJALANAN WISATA
        </div>

        <div class="ticket-subtitle">
            Dokumen perjalanan resmi pelanggan FAWZATA TRAVEL
        </div>

        <div class="status">
            ✓ TIKET TELAH DITERBITKAN
        </div>

    </div>


    <!-- =========================================================
         CONTENT
    ========================================================= -->

    <div class="content">


        <!-- PASSENGER -->

        <div class="section-title">
            Data Penumpang
        </div>

        <div class="passenger-box">

            <div class="passenger-name">

                {{ $ticket->pemesanan->pelanggan->nama_lengkap ?? '-' }}

            </div>

            <div class="passenger-role">
                PESERTA PERJALANAN WISATA
            </div>

        </div>


        <!-- JOURNEY -->

        <div class="section-title">
            Detail Perjalanan
        </div>


        <table class="journey">

            <tr>


                <!-- KEBERANGKATAN -->

                <td class="journey-left">

                    <div class="location-label">
                        Tanggal Keberangkatan
                    </div>

                    <div class="location-name">

                        @if(
                            optional($ticket->pemesanan->jadwalTour)
                            ->tgl_keberangkatan
                        )

                            {{ \Carbon\Carbon::parse(
                                $ticket->pemesanan
                                    ->jadwalTour
                                    ->tgl_keberangkatan
                            )->format('d M Y') }}

                        @else

                            -

                        @endif

                    </div>

                    <div class="date">
                        Jadwal perjalanan
                    </div>

                </td>


                <!-- ROUTE -->

                <td class="journey-middle">

                    <div class="route-line">
                        ✈ ───────── ✈
                    </div>

                    <div class="route-text">
                        FAWZATA TRAVEL
                    </div>

                </td>


                <!-- PAKET -->

                <td class="journey-right">

                    <div class="location-label">
                        Paket Wisata
                    </div>

                    <div class="location-name">

                        {{ $ticket->pemesanan->paketWisata->nama_paket
                            ?? 'Paket Wisata' }}

                    </div>

                    <div class="date">
                        Destinasi perjalanan
                    </div>

                </td>

            </tr>

        </table>


        <!-- DETAIL CARDS -->

        <table class="details">

            <tr>

                <td class="detail-card">

                    <div class="detail-label">
                        Kode Booking
                    </div>

                    <div class="detail-value">

                        {{ $ticket->pemesanan->kode_booking ?? '-' }}

                    </div>

                </td>


                <td class="detail-card">

                    <div class="detail-label">
                        Jumlah Peserta
                    </div>

                    <div class="detail-value">

                        {{ $ticket->pemesanan->jumlah_peserta ?? 0 }}
                        Orang

                    </div>

                </td>


                <td class="detail-card">

                    <div class="detail-label">
                        Tanggal Pemesanan
                    </div>

                    <div class="detail-value">

                        @if($ticket->pemesanan->tgl_pemesanan)

                            {{ \Carbon\Carbon::parse(
                                $ticket->pemesanan->tgl_pemesanan
                            )->format('d M Y') }}

                        @else

                            -

                        @endif

                    </div>

                </td>


                <td class="detail-card">

                    <div class="detail-label">
                        Tanggal Terbit
                    </div>

                    <div class="detail-value">

                        {{ $ticket->tgl_terbit
                            ? $ticket->tgl_terbit->format('d M Y')
                            : '-' }}

                    </div>

                </td>

            </tr>

        </table>


        <!-- TOTAL -->

        <div class="price-box">

            <div class="price-label">
                TOTAL PEMBAYARAN
            </div>

            <div class="price-value">

                Rp
                {{ number_format(
                    $ticket->pemesanan->total_bayar ?? 0,
                    0,
                    ',',
                    '.'
                ) }}

            </div>

        </div>


    </div>


    <!-- =========================================================
         QR + TICKET NUMBER
    ========================================================= -->

    <div class="bottom">


        <table width="100%">

            <tr>


                <!-- QR -->

                <td class="qr-section">

                    <div class="qr-box">

                        <img
                            src="data:image/svg+xml;base64,{{ $qrCode }}"
                            class="qr-image"
                        >

                    </div>

                    <div class="qr-text">
                        Scan untuk verifikasi tiket
                    </div>

                </td>


                <!-- TICKET INFORMATION -->

                <td class="ticket-info">

                    <div class="number-label">
                        Nomor E-Ticket
                    </div>

                    <div class="number">

                        {{ $ticket->nomor_ticket }}

                    </div>


                    <div class="booking">

                        <div class="booking-label">
                            Kode Booking
                        </div>

                        <div class="booking-value">

                            {{ $ticket->pemesanan->kode_booking ?? '-' }}

                        </div>

                    </div>


                    <div class="booking">

                        <div class="booking-label">
                            Status
                        </div>

                        <div class="booking-value">

                            TIKET AKTIF

                        </div>

                    </div>

                </td>


            </tr>

        </table>


    </div>


    <!-- =========================================================
         FOOTER
    ========================================================= -->

    <div class="footer">

        <table width="100%">

            <tr>

                <td>

                    <div class="footer-title">
                        <span class="circle"></span>
                        Informasi Penting
                    </div>

                    Harap membawa E-Ticket ini saat mengikuti perjalanan.
                    Tiket ini diterbitkan secara resmi oleh FAWZATA TRAVEL.

                </td>


                <td class="footer-right">

                    FAWZATA TRAVEL<br>

                    Tour & Travel<br>

                    E-Ticket Digital

                </td>

            </tr>

        </table>

    </div>


</div>


</body>

</html>