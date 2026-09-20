<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>E-Ticket {{ $ticket->nomor_ticket }}</title>

    <style>

        @page {
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 35px;
            background: #eef5f8;
            font-family: DejaVu Sans, Arial, sans-serif;
            color: #173f55;
        }

        .ticket {
            width: 100%;
            max-width: 760px;
            margin: auto;

            background: #ffffff;

            border: 1px solid #c9dce5;

            border-radius: 22px;

            overflow: hidden;
        }

        /* =========================
           HEADER
        ========================= */

        .header {
            padding: 28px 34px;

            background: #123f57;

            color: white;
        }

        .brand {
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 3px;
        }

        .brand span {
            color: #9edcf5;
        }

        .header-right {
            text-align: right;
        }

        .electronic {
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #a9dff3;
        }

        .travel-ticket {
            font-size: 17px;
            font-weight: bold;
            margin-top: 5px;
        }

        /* =========================
           TICKET NUMBER
        ========================= */

        .ticket-number-section {
            padding: 30px 34px 22px;

            border-bottom: 1px dashed #bfd2dc;
        }

        .label {
            font-size: 9px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #7192a2;
            margin-bottom: 7px;
        }

        .ticket-number {
            font-size: 25px;
            font-weight: bold;
            color: #143f55;
            letter-spacing: 1px;
        }

        .issued {
            margin-top: 8px;
            font-size: 10px;
            color: #6e8997;
        }

        /* =========================
           CONTENT
        ========================= */

        .content {
            padding: 25px 34px;
        }

        .section-title {
            font-size: 10px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #4c7587;

            margin-bottom: 18px;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
        }

        .info-table td {
            width: 50%;
            padding: 13px 8px;
            vertical-align: top;
        }

        .info-table td:first-child {
            padding-left: 0;
            padding-right: 20px;
        }

        .info-table td:last-child {
            padding-left: 20px;
            padding-right: 0;
        }

        .info-box {
            background: #f5f9fb;

            border: 1px solid #dce9ee;

            border-radius: 12px;

            padding: 14px 16px;
        }

        .info-label {
            font-size: 8px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #7693a0;

            margin-bottom: 7px;
        }

        .info-value {
            font-size: 13px;
            font-weight: bold;
            color: #173f55;
        }

        /* =========================
           PAYMENT
        ========================= */

        .payment-section {
            margin-top: 20px;

            padding: 20px;

            background: #f7fafb;

            border: 1px solid #dce9ee;

            border-radius: 14px;
        }

        .payment-title {
            font-size: 9px;

            letter-spacing: 2px;

            text-transform: uppercase;

            color: #71909e;

            margin-bottom: 14px;
        }

        .payment-table {
            width: 100%;
            border-collapse: collapse;
        }

        .payment-table td {
            padding: 6px 0;
            font-size: 11px;
        }

        .payment-method {
            font-size: 16px;
            font-weight: bold;
            color: #173f55;
        }

        .dana {
            display: inline-block;

            margin-left: 8px;

            padding: 5px 12px;

            background: #108ee9;

            color: white;

            border-radius: 6px;

            font-size: 10px;

            font-weight: bold;

            letter-spacing: 1px;
        }

        .status {
            display: inline-block;

            padding: 6px 12px;

            border-radius: 20px;

            background: #e7f6ed;

            color: #27824a;

            font-size: 9px;

            font-weight: bold;

            text-transform: uppercase;
        }

        /* =========================
           BARCODE
        ========================= */

        .barcode-section {
            padding: 25px 34px;

            border-top: 1px dashed #bfd2dc;

            border-bottom: 1px dashed #bfd2dc;

            text-align: center;
        }

        .barcode-title {
            font-size: 8px;

            letter-spacing: 2px;

            color: #7893a0;

            margin-bottom: 12px;
        }

        .barcode {
            height: 58px;

            width: 310px;

            margin: auto;

            background:
                repeating-linear-gradient(
                    90deg,
                    #173f55 0px,
                    #173f55 3px,
                    transparent 3px,
                    transparent 7px,
                    #173f55 7px,
                    #173f55 9px,
                    transparent 9px,
                    transparent 13px
                );
        }

        .barcode-number {
            margin-top: 9px;

            font-size: 10px;

            letter-spacing: 3px;

            color: #173f55;
        }

        /* =========================
           FOOTER
        ========================= */

        .footer {
            padding: 22px 34px;

            background: #f2f7f9;

            text-align: center;
        }

        .footer-brand {
            font-size: 11px;

            font-weight: bold;

            letter-spacing: 3px;

            color: #173f55;
        }

        .footer-text {
            margin-top: 8px;

            font-size: 8px;

            color: #78909d;

            line-height: 1.6;
        }

        .footer-line {
            margin-top: 14px;

            font-size: 8px;

            color: #9aabb3;
        }

    </style>

</head>


<body>


<div class="ticket">


    {{-- HEADER --}}

    <table width="100%" cellspacing="0" cellpadding="0" class="header">

        <tr>

            <td>

                <div class="brand">
                    FAWZATA<span>TRAVEL.</span>
                </div>

            </td>

            <td class="header-right">

                <div class="electronic">
                    Official Electronic Ticket
                </div>

                <div class="travel-ticket">
                    E-TICKET
                </div>

            </td>

        </tr>

    </table>



    {{-- NOMOR TICKET --}}

    <div class="ticket-number-section">

        <div class="label">
            Ticket Number
        </div>

        <div class="ticket-number">
            {{ $ticket->nomor_ticket }}
        </div>

        <div class="issued">

            Issued by
            <strong>FAWZATA TRAVEL</strong>

            &nbsp; • &nbsp;

            {{ $ticket->tgl_terbit
                ? $ticket->tgl_terbit->format('d M Y')
                : '-'
            }}

        </div>

    </div>



    {{-- DETAIL --}}

    <div class="content">

        <div class="section-title">
            Passenger / Booking Information
        </div>


        <table class="info-table">

            <tr>

                <td>

                    <div class="info-box">

                        <div class="info-label">
                            Kode Booking
                        </div>

                        <div class="info-value">
                            {{ $ticket->pemesanan->kode_booking ?? '-' }}
                        </div>

                    </div>

                </td>


                <td>

                    <div class="info-box">

                        <div class="info-label">
                            Jumlah Peserta
                        </div>

                        <div class="info-value">

                            {{ $ticket->pemesanan->jumlah_peserta ?? '-' }}
                            Orang

                        </div>

                    </div>

                </td>

            </tr>


            <tr>

                <td>

                    <div class="info-box">

                        <div class="info-label">
                            Tanggal Terbit
                        </div>

                        <div class="info-value">

                            {{ $ticket->tgl_terbit
                                ? $ticket->tgl_terbit->format('d M Y')
                                : '-'
                            }}

                        </div>

                    </div>

                </td>


                <td>

                    <div class="info-box">

                        <div class="info-label">
                            Total Pembayaran
                        </div>

                        <div class="info-value">

                            Rp
                            {{ number_format(
                                $ticket->pemesanan->total_bayar ?? 0,
                                0,
                                ',',
                                '.'
                            ) }}

                        </div>

                    </div>

                </td>

            </tr>

        </table>



        {{-- PAYMENT --}}

        <div class="payment-section">

            <div class="payment-title">
                Payment Information
            </div>


            <table class="payment-table">

                <tr>

                    <td>

                        <span class="payment-method">

                            {{ $ticket->pemesanan->pembayaran->metode_pembayaran ?? 'DANA' }}

                        </span>


                        @if(
                            strtoupper(
                                $ticket->pemesanan->pembayaran->metode_pembayaran ?? 'DANA'
                            ) === 'DANA'
                        )

                            <span class="dana">
                                DANA
                            </span>

                        @endif

                    </td>


                    <td align="right">

                        <span class="status">

                            {{ $ticket->pemesanan->pembayaran->status_pembayaran ?? 'Disetujui' }}

                        </span>

                    </td>

                </tr>

            </table>

        </div>

    </div>



    {{-- BARCODE --}}

    <div style="text-align:center;">

    <div class="barcode-title">
        SCAN / VERIFY E-TICKET
    </div>

    <img
        src="data:image/png;base64,{{ $qrCode }}"
        width="120"
        height="120"
    >

    <div class="barcode-number">
        {{ $ticket->nomor_ticket }}
    </div>

</div>

    </div>



    {{-- FOOTER --}}

    <div class="footer">

        <div class="footer-brand">
            FAWZATA TRAVEL
        </div>


        <div class="footer-text">

            Please present this electronic ticket
            when required during your journey.

        </div>


        <div class="footer-line">

            This ticket is electronically generated
            and does not require a signature.

        </div>

    </div>


</div>


</body>

</html>