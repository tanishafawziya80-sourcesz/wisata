<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>E-Ticket - FAWZATA TRAVEL</title>

    <style>

        /*
        =====================================================
        PAGE PDF
        =====================================================
        */

        @page {
            size: A4 landscape;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        body {

            font-family: DejaVu Sans, sans-serif;

            background: #eef4f7;

            color: #183b4d;

            font-size: 10px;

        }


        /*
        =====================================================
        PAGE
        =====================================================
        */

        .page {

            width: 100%;

            min-height: 100%;

            padding: 22px;

        }


        /*
        =====================================================
        MAIN TICKET
        =====================================================
        */

        .ticket {

            width: 100%;

            background: #ffffff;

            border: 1px solid #dce8ed;

            border-radius: 12px;

            overflow: hidden;

        }


        /*
        =====================================================
        HEADER
        =====================================================
        */

        .brand-header {

            width: 100%;

            background: #123c57;

            color: white;

            padding: 20px 24px;

        }


        .brand-table {

            width: 100%;

            table-layout: fixed;

            border-collapse: collapse;

        }


        .brand-table td {

            padding: 0;

            vertical-align: middle;

        }


        .brand-left {

            width: 55%;

            text-align: left;

        }


        .brand-right {

            width: 45%;

            text-align: right;

        }


        .brand-name {

            font-size: 23px;

            font-weight: bold;

            letter-spacing: 1.5px;

            white-space: nowrap;

        }


        .brand-name span {

            color: #9ddcff;

        }


        .brand-subtitle {

            margin-top: 5px;

            font-size: 8px;

            color: #cdebf8;

            letter-spacing: 1.5px;

            text-transform: uppercase;

        }


        .ticket-label {

            font-size: 8px;

            color: #bde6f7;

            text-transform: uppercase;

            letter-spacing: 1px;

            white-space: nowrap;

        }


        .ticket-title {

            margin-top: 4px;

            font-size: 19px;

            font-weight: bold;

            white-space: nowrap;

        }


        /*
        =====================================================
        STATUS
        =====================================================
        */

        .status-area {

            width: 100%;

            padding: 14px 24px;

            background: #f5fafc;

            border-bottom: 1px solid #dce8ed;

        }


        .status-table {

            width: 100%;

            table-layout: fixed;

            border-collapse: collapse;

        }


        .status-table td {

            padding: 0 8px;

            vertical-align: top;

        }


        .status-table td:first-child {

            padding-left: 0;

        }


        .status-table td:last-child {

            padding-right: 0;

        }


        .status-label {

            color: #78909c;

            font-size: 7px;

            text-transform: uppercase;

            letter-spacing: .7px;

            margin-bottom: 4px;

        }


        .status-value {

            font-size: 10px;

            font-weight: bold;

            color: #183b4d;

            white-space: nowrap;

        }


        .status-paid {

            display: inline-block;

            padding: 4px 8px;

            border-radius: 12px;

            background: #e7f7ef;

            color: #168451;

            font-size: 7px;

            font-weight: bold;

        }


        /*
        =====================================================
        TICKET NUMBER
        =====================================================
        */

        .ticket-number-area {

            width: 100%;

            padding: 16px 24px;

            border-bottom: 1px dashed #cbdce4;

        }


        .ticket-number-label {

            font-size: 7px;

            text-transform: uppercase;

            letter-spacing: 1px;

            color: #78909c;

            margin-bottom: 5px;

        }


        .ticket-number {

            font-size: 19px;

            font-weight: bold;

            letter-spacing: 1.5px;

            color: #123c57;

        }


        /*
        =====================================================
        CONTENT
        =====================================================
        */

        .content {

            width: 100%;

            padding: 18px 24px;

        }


        .section-title {

            font-size: 8px;

            font-weight: bold;

            text-transform: uppercase;

            letter-spacing: 1px;

            color: #123c57;

            margin-bottom: 8px;

        }


        /*
        =====================================================
        INFORMATION TABLE
        =====================================================
        */

        .info-table {

            width: 100%;

            table-layout: fixed;

            border-collapse: collapse;

            margin-bottom: 15px;

        }


        .info-table td {

            width: 50%;

            padding: 9px;

            vertical-align: top;

            border: 1px solid #e4edf1;

        }


        .info-label {

            font-size: 7px;

            color: #78909c;

            text-transform: uppercase;

            letter-spacing: .5px;

            margin-bottom: 4px;

        }


        .info-value {

            font-size: 9px;

            font-weight: bold;

            color: #183b4d;

        }


        /*
        =====================================================
        JOURNEY
        =====================================================
        */

        .journey {

            width: 100%;

            padding: 13px;

            margin-bottom: 14px;

            background: #f5fafc;

            border: 1px solid #dce8ed;

            border-radius: 8px;

        }


        .journey-table {

            width: 100%;

            table-layout: fixed;

            border-collapse: collapse;

        }


        .journey-table td {

            vertical-align: middle;

        }


        .journey-point {

            font-size: 13px;

            font-weight: bold;

            color: #123c57;

        }


        .journey-label {

            font-size: 7px;

            color: #78909c;

            text-transform: uppercase;

            letter-spacing: .5px;

            margin-bottom: 2px;

        }


        .journey-arrow {

            text-align: center;

            font-size: 17px;

            color: #77bddb;

            font-weight: bold;

        }


        /*
        =====================================================
        QR AREA
        =====================================================
        */

        .qr-section {

            width: 100%;

            text-align: center;

            padding: 3px 0 12px;

        }


        .qr-title {

            font-size: 8px;

            font-weight: bold;

            color: #123c57;

            margin-bottom: 6px;

        }


        .qr-code {

            width: 100px;

            height: 100px;

            display: block;

            margin: 0 auto;

        }


        .qr-description {

            margin-top: 6px;

            font-size: 7px;

            color: #78909c;

        }


        /*
        =====================================================
        DIVIDER
        =====================================================
        */

        .divider {

            width: calc(100% - 48px);

            margin: 0 24px;

            border-top: 1px dashed #cbdce4;

        }


        /*
        =====================================================
        FOOTER
        =====================================================
        */

        .footer {

            width: 100%;

            padding: 13px 24px 15px;

            background: #fbfdfe;

        }


        .footer-title {

            font-size: 8px;

            font-weight: bold;

            color: #123c57;

            margin-bottom: 5px;

            text-transform: uppercase;

            letter-spacing: .7px;

        }


        .footer-text {

            font-size: 7px;

            line-height: 1.55;

            color: #78909c;

        }


        .footer-brand {

            text-align: center;

            margin-top: 9px;

            font-size: 9px;

            font-weight: bold;

            color: #123c57;

            letter-spacing: 1px;

        }


        .footer-brand span {

            color: #69b9da;

        }


        /*
        =====================================================
        SMALL DECORATION
        =====================================================
        */

        .header-line {

            width: 55px;

            height: 3px;

            margin-top: 7px;

            background: #9ddcff;

            border-radius: 5px;

        }

    </style>

</head>


<body>

<div class="page">


    <div class="ticket">


        <!-- =================================================
             HEADER
        ================================================= -->

        <div class="brand-header">

            <table class="brand-table">

                <tr>

                    <td class="brand-left">

                        <div class="brand-name">

                            FAWZATA<span> TRAVEL</span>

                        </div>


                        <div class="brand-subtitle">

                            TRAVEL & TOURISM

                        </div>


                        <div class="header-line"></div>

                    </td>


                    <td class="brand-right">

                        <div class="ticket-label">

                            DOKUMEN PERJALANAN

                        </div>


                        <div class="ticket-title">

                            E-TICKET

                        </div>

                    </td>

                </tr>

            </table>

        </div>


        <!-- =================================================
             STATUS
        ================================================= -->

        <div class="status-area">

            <table class="status-table">

                <tr>

                    <td width="33.33%">

                        <div class="status-label">

                            KODE BOOKING

                        </div>


                        <div class="status-value">

                            {{ $ticket->pemesanan->kode_booking ?? '-' }}

                        </div>

                    </td>


                    <td width="33.33%">

                        <div class="status-label">

                            STATUS PEMBAYARAN

                        </div>


                        @php

                            $statusPembayaran =
                                $ticket->pemesanan->pembayaran->status_pembayaran
                                ?? '-';

                        @endphp


                        <span class="status-paid">

                            {{ strtoupper($statusPembayaran) }}

                        </span>

                    </td>


                    <td width="33.33%">

                        <div class="status-label">

                            TANGGAL TERBIT

                        </div>


                        <div class="status-value">

                            {{ $ticket->tgl_terbit
                                ? \Carbon\Carbon::parse($ticket->tgl_terbit)->format('d M Y')
                                : '-'
                            }}

                        </div>

                    </td>

                </tr>

            </table>

        </div>


        <!-- =================================================
             TICKET NUMBER
        ================================================= -->

        <div class="ticket-number-area">

            <div class="ticket-number-label">

                NOMOR E-TICKET

            </div>


            <div class="ticket-number">

                {{ $ticket->nomor_ticket }}

            </div>

        </div>


        <!-- =================================================
             CONTENT
        ================================================= -->

        <div class="content">


            <!-- INFORMASI PEMESANAN -->

            <div class="section-title">

                INFORMASI PEMESANAN

            </div>


            <table class="info-table">

                <tr>

                    <td>

                        <div class="info-label">

                            NAMA PELANGGAN

                        </div>


                        <div class="info-value">

                            {{ $ticket->pemesanan->pelanggan->nama_lengkap ?? '-' }}

                        </div>

                    </td>


                    <td>

                        <div class="info-label">

                            ID PEMESANAN

                        </div>


                        <div class="info-value">

                            {{ $ticket->id_pemesanan }}

                        </div>

                    </td>

                </tr>


                <tr>

                    <td>

                        <div class="info-label">

                            ID TICKET

                        </div>


                        <div class="info-value">

                            {{ $ticket->id_ticket }}

                        </div>

                    </td>


                    <td>

                        <div class="info-label">

                            TANGGAL TERBIT

                        </div>


                        <div class="info-value">

                            {{ $ticket->tgl_terbit
                                ? \Carbon\Carbon::parse($ticket->tgl_terbit)->format('d M Y')
                                : '-'
                            }}

                        </div>

                    </td>

                </tr>

            </table>


            <!-- =================================================
                 DETAIL PERJALANAN
            ================================================= -->

            <div class="section-title">

                DETAIL PERJALANAN

            </div>


            <div class="journey">

                <table class="journey-table">

                    <tr>

                        <td width="42%">

                            <div class="journey-label">

                                STATUS PERJALANAN

                            </div>


                            <div class="journey-point">

                                CONFIRMED

                            </div>

                        </td>


                        <td width="16%" class="journey-arrow">

                            →

                        </td>


                        <td
                            width="42%"
                            style="text-align:right;"
                        >

                            <div class="journey-label">

                                STATUS TICKET

                            </div>


                            <div class="journey-point">

                                VALID

                            </div>

                        </td>

                    </tr>

                </table>

            </div>


            <!-- =================================================
                 QR CODE
            ================================================= -->

            <div class="qr-section">

                <div class="qr-title">

                    QR CODE E-TICKET

                </div>


                <img
                    src="data:image/png;base64,{{ $qrCode }}"
                    class="qr-code"
                    alt="QR Code"
                >


                <div class="qr-description">

                    Tunjukkan QR Code ini saat diperlukan
                    untuk verifikasi e-ticket.

                </div>

            </div>

        </div>


        <!-- =================================================
             DIVIDER
        ================================================= -->

        <div class="divider"></div>


        <!-- =================================================
             FOOTER
        ================================================= -->

        <div class="footer">

            <div class="footer-title">

                INFORMASI PENTING

            </div>


            <div class="footer-text">

                • E-ticket ini merupakan bukti resmi pemesanan perjalanan.

                <br>

                • Pastikan data pada e-ticket sesuai dengan identitas pelanggan.

                <br>

                • Simpan e-ticket ini dan tunjukkan apabila diperlukan selama perjalanan.

                <br>

                • QR Code digunakan untuk membantu proses verifikasi e-ticket.

            </div>


            <div class="footer-brand">

                FAWZATA<span> TRAVEL</span>

            </div>

        </div>


    </div>

</div>

</body>

</html>