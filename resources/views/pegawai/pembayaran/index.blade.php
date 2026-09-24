<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Pembayaran - WISATA.</title>

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
                    rgba(7, 48, 67, .78),
                    rgba(18, 60, 87, .90)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=90");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            padding-bottom: 70px;

            overflow-x: hidden;
        }


        /* =========================
           NAVBAR
        ========================= */

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
                rgba(18,60,87,.78);

            backdrop-filter: blur(20px);

            -webkit-backdrop-filter: blur(20px);

            border-bottom:
                1px solid
                rgba(255,255,255,.15);

            box-shadow:
                0 8px 30px
                rgba(0,0,0,.15);

            z-index: 1000;
        }


        .logo {

            color: white;

            text-decoration: none;

            font-size: 27px;

            font-weight: 800;

            letter-spacing: 2px;
        }


        .logo span {

            color: #9ddcff;
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

            transition: .3s;
        }


        .logout:hover {

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px
                rgba(0,0,0,.18);
        }


        /* =========================
           CONTAINER
        ========================= */

        .container {

            width: 92%;

            max-width: 1200px;

            margin: auto;

            padding-top: 125px;
        }


        .small-title {

            color: #9ddcff;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: 4px;

            text-transform: uppercase;

            margin-bottom: 10px;
        }


        h1 {

            color: white;

            font-size:
                clamp(42px, 6vw, 64px);

            line-height: 1;

            margin-bottom: 14px;

            font-weight: 850;
        }


        .description {

            color:
                rgba(255,255,255,.75);

            font-size: 14px;

            margin-bottom: 35px;
        }


        /* =========================
           ALERT
        ========================= */

        .alert {

            padding: 15px 18px;

            border-radius: 14px;

            margin-bottom: 20px;

            font-size: 13px;
        }


        .alert-success {

            background:
                rgba(76, 175, 80, .15);

            border:
                1px solid
                rgba(120, 220, 140, .25);

            color: #d8ffe0;
        }


        /* =========================
           CARD
        ========================= */

        .card {

            padding: 28px;

            border-radius: 28px;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,.16),
                    rgba(255,255,255,.07)
                );

            backdrop-filter: blur(22px);

            -webkit-backdrop-filter: blur(22px);

            border:
                1px solid
                rgba(255,255,255,.20);

            box-shadow:
                0 30px 80px
                rgba(0,0,0,.25);

            overflow-x: auto;
        }


        /* =========================
           TABLE
        ========================= */

        table {

            width: 100%;

            border-collapse: collapse;

            min-width: 1000px;
        }


        thead {

            background:
                rgba(255,255,255,.08);
        }


        th {

            padding: 17px 14px;

            text-align: left;

            color: #bdeaff;

            font-size: 10px;

            font-weight: 800;

            letter-spacing: 1px;

            text-transform: uppercase;

            border-bottom:
                1px solid
                rgba(255,255,255,.18);
        }


        td {

            padding: 18px 14px;

            color:
                rgba(255,255,255,.82);

            font-size: 13px;

            border-bottom:
                1px solid
                rgba(255,255,255,.10);

            vertical-align: middle;
        }


        tbody tr {

            transition: .25s;
        }


        tbody tr:hover {

            background:
                rgba(255,255,255,.05);
        }


        .booking {

            color: #bdeaff;

            font-weight: 800;
        }


        .total {

            color: #c9f0ff;

            font-weight: 800;
        }


        /* =========================
           STATUS
        ========================= */

        .status {

            display: inline-flex;

            align-items: center;

            padding: 8px 14px;

            border-radius: 25px;

            font-size: 11px;

            font-weight: 800;

            white-space: nowrap;
        }


        .status-menunggu {

            background:
                rgba(255,193,7,.12);

            border:
                1px solid
                rgba(255,210,80,.28);

            color: #ffe59a;
        }


        .status-disetujui {

            background:
                rgba(76,175,80,.12);

            border:
                1px solid
                rgba(100,220,120,.28);

            color: #baffc5;
        }


        .status-ditolak {

            background:
                rgba(244,67,54,.12);

            border:
                1px solid
                rgba(255,100,90,.28);

            color: #ffc0ba;
        }


        /* =========================
           BUTTON
        ========================= */

        .btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 8px 13px;

            border-radius: 20px;

            border: 1px solid;

            font-size: 11px;

            font-weight: 800;

            cursor: pointer;

            text-decoration: none;

            transition: .25s;

            white-space: nowrap;
        }


        .btn:hover {

            transform: translateY(-2px);
        }


        .btn-bukti {

            background:
                rgba(157,220,255,.10);

            border-color:
                rgba(157,220,255,.30);

            color: #cceeff;

            margin-bottom: 7px;
        }


        .btn-setujui {

            background:
                rgba(82, 190, 110, .16);

            border-color:
                rgba(110, 230, 135, .35);

            color: #caffd3;

            margin-right: 5px;
        }


        .btn-setujui:hover {

            background:
                rgba(82, 190, 110, .25);
        }


        .btn-tolak {

            background:
                rgba(240, 80, 70, .14);

            border-color:
                rgba(255,100,90,.30);

            color: #ffd0cb;
        }


        .btn-tolak:hover {

            background:
                rgba(240,80,70,.23);
        }


        .aksi {

            min-width: 190px;
        }


        .aksi-form {

            display: inline;
        }


        .no-data {

            text-align: center;

            padding: 35px;

            color:
                rgba(255,255,255,.60);
        }


        /* =========================
           BACK BUTTON
        ========================= */

        .back-btn {

            display: inline-flex;

            margin-top: 25px;

            padding: 12px 20px;

            border-radius: 25px;

            background: white;

            color: #123c57;

            text-decoration: none;

            font-size: 13px;

            font-weight: 800;

            transition: .3s;
        }


        .back-btn:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 10px 25px
                rgba(0,0,0,.18);
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width:700px) {

            .navbar {

                padding: 0 5%;
            }


            .logo {

                font-size: 22px;
            }


            .role {

                display: none;
            }


            .container {

                width: 94%;

                padding-top: 110px;
            }


            .card {

                padding: 18px;

                border-radius: 22px;
            }

        }

    </style>

</head>


<body>


<!-- =========================
     NAVBAR
========================= -->

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


<!-- =========================
     CONTENT
========================= -->

<main class="container">


    <div class="small-title">
        WISATA. • PEGAWAI
    </div>


    <h1>
        Data Pembayaran
    </h1>


    <p class="description">
        Periksa bukti pembayaran dan verifikasi pembayaran pelanggan.
    </p>


    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif


    <div class="card">


        <table>

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Booking</th>

                    <th>Pelanggan</th>

                    <th>Metode</th>

                    <th>Total</th>

                    <th>Bukti</th>

                    <th>Status</th>

                    <th>Aksi</th>

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

                            <span class="booking">

                                {{ $item->pemesanan->kode_booking ?? '-' }}

                            </span>

                        </td>


                        <!-- PELANGGAN -->

                        <td>

                            {{ $item->pemesanan->pelanggan->nama_lengkap ?? '-' }}

                        </td>


                        <!-- METODE -->

                        <td>

                            {{ $item->metode_pembayaran ?? '-' }}

                        </td>


                        <!-- TOTAL -->

                        <td>

                            @if($item->pemesanan)

                                <span class="total">

                                    Rp
                                    {{ number_format(
                                        $item->pemesanan->total_bayar ?? 0,
                                        0,
                                        ',',
                                        '.'
                                    ) }}

                                </span>

                            @else

                                -

                            @endif

                        </td>


                        <!-- BUKTI -->

                        <td>

                            @if($item->bukti_pembayaran)

                                <a
                                    href="{{ route(
                                        'pegawai.pembayaran.bukti',
                                        $item->id_pembayaran
                                    ) }}"
                                    target="_blank"
                                    class="btn btn-bukti"
                                >
                                    Lihat Bukti
                                </a>

                            @else

                                Belum ada

                            @endif

                        </td>


                        <!-- STATUS -->

                        <td>

                            @if($item->status_pembayaran === 'menunggu')

                                <span class="status status-menunggu">
                                    Menunggu
                                </span>

                            @elseif($item->status_pembayaran === 'disetujui')

                                <span class="status status-disetujui">
                                    Disetujui
                                </span>

                            @elseif($item->status_pembayaran === 'ditolak')

                                <span class="status status-ditolak">
                                    Ditolak
                                </span>

                            @else

                                <span class="status status-menunggu">
                                    {{ ucfirst($item->status_pembayaran ?? '-') }}
                                </span>

                            @endif

                        </td>


                        <!-- AKSI -->

                        <td class="aksi">


                            @if($item->status_pembayaran === 'menunggu')


                                <!-- SETUJUI -->

                                <form
                                    action="{{ route(
                                        'pegawai.pembayaran.setujui',
                                        $item->id_pembayaran
                                    ) }}"
                                    method="POST"
                                    class="aksi-form"
                                >

                                    @csrf

                                    <button
                                        type="submit"
                                        class="btn btn-setujui"
                                    >
                                        ✓ Setujui
                                    </button>

                                </form>


                                <!-- TOLAK -->

                                <form
                                    action="{{ route(
                                        'pegawai.pembayaran.tolak',
                                        $item->id_pembayaran
                                    ) }}"
                                    method="POST"
                                    class="aksi-form"
                                >

                                    @csrf

                                    <button
                                        type="submit"
                                        class="btn btn-tolak"
                                    >
                                        ✕ Tolak
                                    </button>

                                </form>


                            @else

                                -

                            @endif


                        </td>


                    </tr>


                @empty

                    <tr>

                        <td
                            colspan="8"
                            class="no-data"
                        >
                            Belum ada data pembayaran.
                        </td>

                    </tr>

                @endforelse


            </tbody>

        </table>


    </div>


    <a
        href="/pegawai/dashboard"
        class="back-btn"
    >
        ← Kembali ke Dashboard
    </a>


</main>


</body>

</html>