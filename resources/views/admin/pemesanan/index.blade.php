<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Pemesanan - Admin WISATA.
    </title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {

            min-height: 100vh;

            color: #173f58;

            background:
                linear-gradient(
                    135deg,
                    #e7f6fb,
                    #f5fbfd
                );

            padding-bottom: 60px;

        }

        .navbar {

            height: 78px;

            padding: 0 7%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            background: #164c68;

        }

        .logo {

            color: white;

            text-decoration: none;

            font-size: 27px;

            font-weight: 800;

            letter-spacing: 2px;

        }

        .logo span {
            color: #70d6ff;
        }

        .back {

            color: white;

            text-decoration: none;

            padding: 10px 18px;

            border-radius: 22px;

            background:
                rgba(255,255,255,.12);

            border:
                1px solid
                rgba(255,255,255,.2);

            font-size: 12px;

            font-weight: 700;

        }

        .container {

            width: 90%;

            max-width: 1250px;

            margin: auto;

            padding-top: 55px;

        }

        .small-title {

            color: #2384aa;

            font-size: 11px;

            letter-spacing: 3px;

            font-weight: 800;

            text-transform: uppercase;

        }

        h1 {

            margin-top: 8px;

            color: #123d57;

            font-size: 42px;

        }

        .subtitle {

            margin-top: 8px;

            color: #718996;

            font-size: 14px;

        }

        .table-card {

            margin-top: 35px;

            padding: 25px;

            border-radius: 28px;

            background:
                rgba(255,255,255,.88);

            border: 1px solid white;

            box-shadow:
                0 20px 55px
                rgba(25,80,105,.08);

            overflow-x: auto;

        }

        table {

            width: 100%;

            border-collapse: collapse;

            min-width: 900px;

        }

        th {

            padding: 15px;

            text-align: left;

            color: #668393;

            background: #eef8fc;

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: 1px;

        }

        td {

            padding: 17px 15px;

            border-bottom:
                1px solid #e5eff3;

            color: #34566a;

            font-size: 13px;

        }

        tr:hover td {

            background: #f8fcfe;

        }

        .booking-code {

            color: #14759b;

            font-weight: 800;

        }

        .customer {

            color: #173f58;

            font-weight: 700;

        }

        .status {

            display: inline-block;

            padding: 6px 11px;

            border-radius: 20px;

            background: #e6f5fb;

            color: #1b759a;

            font-size: 10px;

            font-weight: 800;

            text-transform: uppercase;

        }

        .empty {

            padding: 50px;

            text-align: center;

            color: #718996;

        }

    </style>

</head>


<body>


<nav class="navbar">

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
        Dashboard
    </a>

</nav>


<div class="container">


    <div class="small-title">
        ADMIN WORKSPACE
    </div>


    <h1>
        Data Pemesanan
    </h1>


    <p class="subtitle">
        Seluruh pemesanan pelanggan yang masuk ke sistem WISATA.
    </p>


    <div class="table-card">


        @if($pemesanan->count() > 0)

            <table>

                <thead>

                    <tr>

                        <th>Kode Booking</th>

                        <th>Pelanggan</th>

                        <th>Jadwal</th>

                        <th>Peserta</th>

                        <th>Total</th>

                        <th>Status</th>

                    </tr>

                </thead>


                <tbody>

                    @foreach($pemesanan as $pesanan)

                        <tr>

                            <td>

                                <div class="booking-code">

                                    {{ $pesanan->kode_booking }}

                                </div>

                            </td>


                            <td>

                                <div class="customer">

                                    {{ $pesanan->pelanggan->nama_lengkap }}

                                </div>

                            </td>


                            <td>

                                {{ \Carbon\Carbon::parse(
                                    $pesanan->jadwalTour->tgl_keberangkatan
                                )->format('d M Y') }}

                            </td>


                            <td>

                                {{ $pesanan->jumlah_peserta }}
                                orang

                            </td>


                            <td>

                                Rp
                                {{ number_format(
                                    $pesanan->total_bayar,
                                    0,
                                    ',',
                                    '.'
                                ) }}

                            </td>


                            <td>

                                <span class="status">

                                    {{ $pesanan->status_pemesanan }}

                                </span>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        @else

            <div class="empty">

                Belum ada pemesanan pelanggan.

            </div>

        @endif


    </div>

</div>


</body>

</html>