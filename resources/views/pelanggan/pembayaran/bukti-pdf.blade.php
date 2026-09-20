<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Bukti Pembayaran - FAWZATA TRAVEL</title>

    <style>

        @page {
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
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            background: #eef4f7;
            color: #183b4d;
            font-size: 10px;
        }


        /* =====================================================
           PAGE
        ===================================================== */

        .page {
            width: 100%;
            padding: 30px;
        }


        /* =====================================================
           MAIN RECEIPT
        ===================================================== */

        .receipt {
            width: 100%;
            background: #ffffff;
            border: 1px solid #dce8ed;
            border-radius: 12px;
            overflow: hidden;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .header {
            width: 100%;
            background: #123c57;
            color: #ffffff;
            padding: 22px 25px;
        }

        .header-table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
        }

        .header-table td {
            padding: 0;
            vertical-align: middle;
        }

        .brand-left {
            width: 60%;
            text-align: left;
        }

        .brand-right {
            width: 40%;
            text-align: right;
        }

        .brand-name {
            font-size: 21px;
            font-weight: bold;
            letter-spacing: 1.5px;
            white-space: nowrap;
        }

        .brand-name span {
            color: #9ddcff;
        }

        .brand-subtitle {
            margin-top: 5px;
            font-size: 7px;
            color: #cdebf8;
            letter-spacing: 1.2px;
            text-transform: uppercase;
        }

        .document-label {
            font-size: 7px;
            color: #bde6f7;
            text-transform: uppercase;
            letter-spacing: .8px;
            white-space: nowrap;
        }

        .document-title {
            margin-top: 4px;
            font-size: 16px;
            font-weight: bold;
            white-space: nowrap;
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status-area {
            width: 100%;
            padding: 15px 25px;
            background: #f5fafc;
            border-bottom: 1px solid #dce8ed;
        }

        .status-table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
        }

        .status-table td {
            padding: 0 7px;
            vertical-align: top;
        }

        .status-table td:first-child {
            padding-left: 0;
        }

        .status-table td:last-child {
            padding-right: 0;
        }

        .label {
            color: #78909c;
            font-size: 7px;
            text-transform: uppercase;
            letter-spacing: .7px;
            margin-bottom: 4px;
        }

        .value {
            color: #183b4d;
            font-size: 9px;
            font-weight: bold;
            white-space: nowrap;
        }

        .paid {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 12px;
            background: #e7f7ef;
            color: #168451;
            font-size: 7px;
            font-weight: bold;
            text-transform: uppercase;
        }


        /* =====================================================
           PAYMENT NUMBER
        ===================================================== */

        .payment-number {
            padding: 18px 25px;
            border-bottom: 1px dashed #cbdce4;
        }

        .payment-number-label {
            font-size: 7px;
            color: #78909c;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .payment-number-value {
            font-size: 18px;
            font-weight: bold;
            color: #123c57;
            letter-spacing: 1px;
        }


        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            width: 100%;
            padding: 20px 25px;
        }

        .section-title {
            margin-bottom: 9px;
            font-size: 8px;
            font-weight: bold;
            color: #123c57;
            text-transform: uppercase;
            letter-spacing: 1px;
        }


        /* =====================================================
           INFORMATION TABLE
        ===================================================== */

        .info-table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
            margin-bottom: 18px;
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


        /* =====================================================
           PAYMENT DETAIL
        ===================================================== */

        .payment-box {
            width: 100%;
            background: #f5fafc;
            border: 1px solid #dce8ed;
            border-radius: 8px;
            padding: 14px;
            margin-bottom: 18px;
        }

        .payment-table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .payment-table td {
            padding: 6px 0;
            vertical-align: middle;
        }

        .payment-table .left {
            width: 55%;
            color: #78909c;
            font-size: 8px;
        }

        .payment-table .right {
            width: 45%;
            text-align: right;
            color: #183b4d;
            font-size: 9px;
            font-weight: bold;
        }

        .total-row td {
            padding-top: 11px;
            border-top: 1px dashed #cbdce4;
        }

        .total-label {
            color: #123c57 !important;
            font-weight: bold;
        }

        .total-value {
            color: #123c57 !important;
            font-size: 13px !important;
            font-weight: bold;
        }


        /* =====================================================
           PAYMENT CONFIRMATION
        ===================================================== */

        .confirmation {
            width: 100%;
            padding: 13px;
            background: #e7f7ef;
            border: 1px solid #c7ead9;
            border-radius: 8px;
            margin-bottom: 18px;
        }

        .confirmation-title {
            color: #168451;
            font-size: 8px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: .8px;
            margin-bottom: 4px;
        }

        .confirmation-text {
            color: #39765b;
            font-size: 7.5px;
            line-height: 1.5;
        }


        /* =====================================================
           DIVIDER
        ===================================================== */

        .divider {
            width: calc(100% - 50px);
            margin: 0 25px;
            border-top: 1px dashed #cbdce4;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {
            width: 100%;
            padding: 16px 25px 20px;
            background: #fbfdfe;
        }

        .footer-title {
            color: #123c57;
            font-size: 8px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: .8px;
            margin-bottom: 6px;
        }

        .footer-text {
            color: #78909c;
            font-size: 7px;
            line-height: 1.6;
        }

        .footer-brand {
            text-align: center;
            margin-top: 13px;
            color: #123c57;
            font-size: 9px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .footer-brand span {
            color: #69b9da;
        }

    </style>

</head>


<body>

<div class="page">

    <div class="receipt">


        <!-- =================================================
             HEADER
        ================================================= -->

        <div class="header">

            <table class="header-table">

                <tr>

                    <td class="brand-left">

                        <div class="brand-name">
                            FAWZATA<span> TRAVEL</span>
                        </div>

                        <div class="brand-subtitle">
                            TRAVEL & TOURISM
                        </div>

                    </td>


                    <td class="brand-right">

                        <div class="document-label">
                            DOKUMEN TRANSAKSI
                        </div>

                        <div class="document-title">
                            BUKTI PEMBAYARAN
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

                        <div class="label">
                            KODE BOOKING
                        </div>

                        <div class="value">
                            {{ $pembayaran->pemesanan->kode_booking ?? '-' }}
                        </div>

                    </td>


                    <td width="33.33%">

                        <div class="label">
                            STATUS PEMBAYARAN
                        </div>

                        <span class="paid">

                            {{ strtoupper(
                                $pembayaran->status_pembayaran ?? 'BELUM DIKONFIRMASI'
                            ) }}

                        </span>

                    </td>


                    <td width="33.33%">

                        <div class="label">
                            TANGGAL PEMBAYARAN
                        </div>

                        <div class="value">

                            {{ $pembayaran->tanggal_pembayaran
                                ? \Carbon\Carbon::parse(
                                    $pembayaran->tanggal_pembayaran
                                )->format('d M Y')
                                : '-'
                            }}

                        </div>

                    </td>

                </tr>

            </table>

        </div>



        <!-- =================================================
             PAYMENT NUMBER
        ================================================= -->

        <div class="payment-number">

            <div class="payment-number-label">
                NOMOR PEMBAYARAN
            </div>

            <div class="payment-number-value">

                {{ $pembayaran->id_pembayaran }}

            </div>

        </div>



        <!-- =================================================
             CONTENT
        ================================================= -->

        <div class="content">


            <!-- INFORMASI PELANGGAN -->

            <div class="section-title">
                INFORMASI PELANGGAN
            </div>


            <table class="info-table">

                <tr>

                    <td>

                        <div class="info-label">
                            NAMA PELANGGAN
                        </div>

                        <div class="info-value">

                            {{ $pembayaran->pemesanan->pelanggan->nama_lengkap ?? '-' }}

                        </div>

                    </td>


                    <td>

                        <div class="info-label">
                            ID PELANGGAN
                        </div>

                        <div class="info-value">

                            {{ $pembayaran->pemesanan->id_pelanggan ?? '-' }}

                        </div>

                    </td>

                </tr>


                <tr>

                    <td>

                        <div class="info-label">
                            ID PEMESANAN
                        </div>

                        <div class="info-value">

                            {{ $pembayaran->pemesanan->id_pemesanan ?? '-' }}

                        </div>

                    </td>


                    <td>

                        <div class="info-label">
                            KODE BOOKING
                        </div>

                        <div class="info-value">

                            {{ $pembayaran->pemesanan->kode_booking ?? '-' }}

                        </div>

                    </td>

                </tr>

            </table>



            <!-- DETAIL PEMBAYARAN -->

            <div class="section-title">
                DETAIL PEMBAYARAN
            </div>


            <div class="payment-box">

                <table class="payment-table">


                    <tr>

                        <td class="left">
                            METODE PEMBAYARAN
                        </td>

                        <td class="right">

                            {{ $pembayaran->metode_pembayaran ?? '-' }}

                        </td>

                    </tr>


                    <tr>

                        <td class="left">
                            TANGGAL PEMBAYARAN
                        </td>

                        <td class="right">

                            {{ $pembayaran->tanggal_pembayaran
                                ? \Carbon\Carbon::parse(
                                    $pembayaran->tanggal_pembayaran
                                )->format('d M Y')
                                : '-'
                            }}

                        </td>

                    </tr>


                    <tr>

                        <td class="left">
                            STATUS
                        </td>

                        <td class="right">

                            {{ strtoupper(
                                $pembayaran->status_pembayaran ?? '-'
                            ) }}

                        </td>

                    </tr>


                    <tr class="total-row">

                        <td class="left total-label">
                            TOTAL PEMBAYARAN
                        </td>

                        <td class="right total-value">

                            Rp
                            {{ number_format(
                                $pembayaran->jumlah_bayar
                                ?? $pembayaran->total_bayar
                                ?? $pembayaran->pemesanan->total_bayar
                                ?? 0,
                                0,
                                ',',
                                '.'
                            ) }}

                        </td>

                    </tr>


                </table>

            </div>



            <!-- KONFIRMASI -->

            <div class="confirmation">

                <div class="confirmation-title">

                    Pembayaran Berhasil

                </div>


                <div class="confirmation-text">

                    Pembayaran untuk pemesanan ini telah tercatat
                    dalam sistem FAWZATA TRAVEL. Simpan dokumen
                    ini sebagai bukti pembayaran resmi.

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

                • Bukti pembayaran ini merupakan dokumen transaksi
                pemesanan perjalanan.

                <br>

                • Pastikan data pada dokumen sesuai dengan
                pemesanan pelanggan.

                <br>

                • Simpan bukti pembayaran ini untuk keperluan
                administrasi dan verifikasi.

                <br>

                • E-ticket perjalanan diterbitkan sesuai dengan
                ketentuan pemesanan dan pembayaran.

            </div>


            <div class="footer-brand">

                FAWZATA<span> TRAVEL</span>

            </div>

        </div>


    </div>

</div>

</body>

</html>