<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pemesanan - FAWZATA TRAVEL</title>

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
                rgba(7, 48, 67, .78),
                rgba(18, 60, 87, .90)
            ),
            url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=90");

        background-size: cover;

        background-position: center;

        background-attachment: fixed;

        overflow-x: hidden;
    }


    /* =====================================================
       BACKGROUND DECORATION
    ===================================================== */

    .background-decoration {

        position: fixed;

        inset: 0;

        overflow: hidden;

        pointer-events: none;

        z-index: 0;
    }


    .circle {

        position: absolute;

        border-radius: 50%;

        background: rgba(157,220,255,.10);

        filter: blur(2px);
    }


    .circle-one {

        width: 280px;

        height: 280px;

        top: 12%;

        left: -100px;
    }


    .circle-two {

        width: 350px;

        height: 350px;

        right: -140px;

        bottom: 5%;

        background: rgba(255,255,255,.07);
    }


    .circle-three {

        width: 170px;

        height: 170px;

        right: 20%;

        top: 15%;

        background: rgba(157,220,255,.06);
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

        gap: 15px;
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

        font-size: 13px;

        font-weight: 700;
    }


    .logout {

        border:
            1px solid
            rgba(255,255,255,.18);

        padding:
            10px 18px;

        border-radius: 25px;

        background:
            rgba(255,255,255,.94);

        color: #123c57;

        font-weight: 700;

        cursor: pointer;

        transition: .3s;
    }


    .logout:hover {

        transform:
            translateY(-2px);

        background: white;

        box-shadow:
            0 8px 20px
            rgba(0,0,0,.18);
    }


    /* =====================================================
       CONTAINER
    ===================================================== */

    .container {

        position: relative;

        z-index: 2;

        width: 90%;

        max-width: 1000px;

        margin: auto;

        padding-top: 125px;

        padding-bottom: 80px;
    }


    /* =====================================================
       HEADER
    ===================================================== */

    .header {

        margin-bottom: 28px;

        animation:
            fadeUp .8s ease both;
    }


    .small-title {

        font-size: 11px;

        letter-spacing: 3px;

        text-transform: uppercase;

        color: #9ddcff;

        margin-bottom: 10px;

        font-weight: 700;
    }


    .header h1 {

        font-size:
            clamp(38px, 6vw, 56px);

        line-height: 1.05;

        margin-bottom: 12px;

        color: white;

        font-weight: 850;

        letter-spacing: -.5px;
    }


    .header p {

        max-width: 650px;

        color:
            rgba(255,255,255,.72);

        line-height: 1.7;

        font-size: 14px;
    }


    /* =====================================================
       MAIN CARD
    ===================================================== */

    .card {

        position: relative;

        padding: 30px;

        border-radius: 26px;

        background:
            linear-gradient(
                135deg,
                rgba(255,255,255,.94),
                rgba(245,250,252,.90)
            );

        border:
            1px solid
            rgba(255,255,255,.55);

        box-shadow:
            0 30px 80px
            rgba(0,0,0,.25);

        animation:
            fadeUp 1s ease both;

        overflow: hidden;
    }


    .card::before {

        content: "";

        position: absolute;

        width: 180px;

        height: 180px;

        border-radius: 50%;

        background:
            rgba(157,220,255,.10);

        right: -70px;

        top: -70px;

        pointer-events: none;
    }


    .card::after {

        content: "";

        position: absolute;

        width: 120px;

        height: 120px;

        border-radius: 50%;

        background:
            rgba(18,60,87,.04);

        left: -55px;

        bottom: -55px;

        pointer-events: none;
    }


    /* =====================================================
       CARD HEADER
    ===================================================== */

    .card-header {

        position: relative;

        z-index: 2;

        margin-bottom: 24px;

        padding-bottom: 18px;

        border-bottom:
            1px dashed
            #cbdce4;
    }


    .card-title {

        font-size: 21px;

        font-weight: 800;

        color: #123c57;
    }


    .card-subtitle {

        margin-top: 5px;

        color:
            #78909c;

        font-size: 13px;
    }


    /* =====================================================
       CUSTOMER NAME
    ===================================================== */

    .customer-box {

        position: relative;

        z-index: 2;

        margin-bottom: 22px;

        padding: 17px 18px;

        border-radius: 16px;

        background:
            linear-gradient(
                135deg,
                #f1faff,
                #f8fcfe
            );

        border:
            1px solid
            #d5e8f0;

        box-shadow:
            0 8px 20px
            rgba(18,60,87,.05);
    }


    .customer-label {

        color:
            #78909c;

        font-size: 9px;

        text-transform: uppercase;

        letter-spacing: 1.2px;

        margin-bottom: 6px;

        font-weight: 700;
    }


    .customer-name {

        color: #123c57;

        font-size: 18px;

        font-weight: 800;
    }


    /* =====================================================
       INFO GRID
    ===================================================== */

    .info-grid {

        position: relative;

        z-index: 2;

        display: grid;

        grid-template-columns:
            repeat(2, 1fr);

        gap: 12px;

        margin-bottom: 24px;
    }


    .info-box {

        padding: 16px;

        border-radius: 14px;

        background:
            #f8fbfc;

        border:
            1px solid
            #e1edf1;

        transition: .3s;
    }


    .info-box:hover {

        transform:
            translateY(-2px);

        border-color:
            #c5dfe9;

        box-shadow:
            0 8px 20px
            rgba(18,60,87,.07);
    }


    .info-label {

        color:
            #78909c;

        font-size: 8px;

        text-transform: uppercase;

        letter-spacing: .8px;

        margin-bottom: 6px;

        font-weight: 700;
    }


    .info-value {

        color:
            #183b4d;

        font-size: 14px;

        font-weight: 700;
    }


    /* =====================================================
       FORM
    ===================================================== */

    .form-title {

        position: relative;

        z-index: 2;

        padding-top: 20px;

        border-top:
            1px dashed
            #cbdce4;

        margin-bottom: 18px;

        font-size: 11px;

        font-weight: 800;

        color: #123c57;

        text-transform: uppercase;

        letter-spacing: 1px;
    }


    .form-group {

        position: relative;

        z-index: 2;

        margin-bottom: 18px;
    }


    .form-label {

        display: block;

        margin-bottom: 7px;

        color:
            #546e7a;

        font-size: 11px;

        font-weight: 700;
    }


    .form-control {

        width: 100%;

        padding:
            13px 15px;

        border-radius: 12px;

        border:
            1px solid
            #d6e4e9;

        background:
            #ffffff;

        color:
            #183b4d;

        outline: none;

        font-size: 13px;

        transition: .3s;
    }


    .form-control:focus {

        border-color:
            #78bfdc;

        box-shadow:
            0 0 0 3px
            rgba(119,189,219,.13);
    }


    select.form-control option {

        color: #183b4d;

        background: white;
    }


    /* =====================================================
       HIDDEN CUSTOMER ID
    ===================================================== */

    .customer-hidden {

        display: none;
    }


    /* =====================================================
       TOTAL
    ===================================================== */

    .total-box {

        position: relative;

        z-index: 2;

        margin-top: 10px;

        margin-bottom: 22px;

        padding: 18px;

        border-radius: 16px;

        background:
            linear-gradient(
                135deg,
                #f1faff,
                #f8fcfe
            );

        border:
            1px solid
            #d5e8f0;

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 15px;
    }


    .total-label {

        color:
            #78909c;

        font-size: 12px;

        font-weight: 700;
    }


    .total-value {

        color: #123c57;

        font-size: 22px;

        font-weight: 850;
    }


    /* =====================================================
       BUTTON
    ===================================================== */

    .actions {

        position: relative;

        z-index: 2;

        display: flex;

        align-items: center;

        gap: 12px;

        flex-wrap: wrap;
    }


    .submit-btn {

        border: none;

        padding:
            13px 22px;

        border-radius: 25px;

        background:
            #123c57;

        border:
            1px solid
            #123c57;

        color: white;

        font-size: 13px;

        font-weight: 800;

        cursor: pointer;

        transition: .3s;

        box-shadow:
            0 8px 20px
            rgba(18,60,87,.18);
    }


    .submit-btn:hover {

        transform:
            translateY(-3px);

        background:
            #194e6d;

        box-shadow:
            0 12px 28px
            rgba(18,60,87,.25);
    }


    .back-btn {

        display: inline-flex;

        align-items: center;

        padding:
            13px 20px;

        border-radius: 25px;

        text-decoration: none;

        background:
            #ffffff;

        color: #123c57;

        border:
            1px solid
            #d4e3e8;

        font-size: 13px;

        font-weight: 700;

        transition: .3s;
    }


    .back-btn:hover {

        transform:
            translateY(-3px);

        background:
            #f5fafc;

        border-color:
            #bcd8e2;
    }


    /* =====================================================
       ALERT
    ===================================================== */

    .alert {

        position: relative;

        z-index: 2;

        margin-bottom: 20px;

        padding:
            13px 16px;

        border-radius: 12px;

        font-size: 12px;

        line-height: 1.5;
    }


    .alert-error {

        background:
            #fff3f3;

        border:
            1px solid
            #f2d0d0;

        color:
            #a33a3a;
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

    @media (max-width: 700px) {

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

            width: 92%;

            padding-top: 110px;
        }


        .card {

            padding: 20px;

            border-radius: 22px;
        }


        .info-grid {

            grid-template-columns: 1fr;
        }


        .total-box {

            align-items: flex-start;

            flex-direction: column;
        }


        .actions {

            flex-direction: column;

            align-items: stretch;
        }


        .submit-btn,
        .back-btn {

            width: 100%;

            justify-content: center;
        }
    }

</style>

</head>

<body>

<!-- =========================================================
     BACKGROUND
========================================================= -->

<div class="background-decoration">

<div class="circle circle-one"></div>

<div class="circle circle-two"></div>

<div class="circle circle-three"></div>

</div>

<!-- =========================================================
     NAVBAR
========================================================= -->

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
            Logout
        </button>

    </form>

</div>

</nav>

<!-- =========================================================
     CONTENT
========================================================= -->

<main class="container">

```
<div class="header">

    <div class="small-title">
        FAWZATA TRAVEL
    </div>

    <h1>
        Pemesanan
    </h1>

    <p>
        Lengkapi data pemesanan perjalanan Anda
        bersama FAWZATA TRAVEL.
    </p>

</div>


<!-- =====================================================
     CARD
===================================================== -->

<div class="card">


    <div class="card-header">

        <div class="card-title">
            Detail Pemesanan
        </div>

        <div class="card-subtitle">
            Pastikan data perjalanan Anda sudah benar.
        </div>

    </div>


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
         NAMA PELANGGAN
    ================================================= -->

    <div class="customer-box">

        <div class="customer-label">
            Nama Pelanggan
        </div>

        <div class="customer-name">

            {{ auth()->user()->nama_lengkap ?? '-' }}

        </div>

    </div>


    <!-- =================================================
         INFO PAKET
    ================================================= -->

    <div class="info-grid">


        <div class="info-box">

            <div class="info-label">
                Paket Wisata
            </div>

            <div class="info-value">

                {{ $paketWisata->nama_paket ?? '-' }}

            </div>

        </div>


        <div class="info-box">

            <div class="info-label">
                Harga
            </div>

            <div class="info-value">

                Rp
                {{ number_format(
                    $paketWisata->harga ?? 0,
                    0,
                    ',',
                    '.'
                ) }}

            </div>

        </div>


        @if(isset($jadwalTour))

            <div class="info-box">

                <div class="info-label">
                    Jadwal Tour
                </div>

                <div class="info-value">

                    {{ $jadwalTour->tanggal_tour ?? '-' }}

                </div>

            </div>


            <div class="info-box">

                <div class="info-label">
                    Kuota Tersedia
                </div>

                <div class="info-value">

                    {{ $jadwalTour->kuota ?? '-' }}

                </div>

            </div>

        @endif


    </div>


    <!-- =================================================
         FORM PEMESANAN
    ================================================= -->

    <form
        action="{{ route('pelanggan.pemesanan.store') }}"
        method="POST"
    >

        @csrf


        <!--
            ID PELANGGAN
            Tidak perlu diketik oleh pelanggan.
            Diambil otomatis dari akun yang sedang login.
        -->

        <input
            type="hidden"
            name="id_pelanggan"
            value="{{ auth()->id() }}"
        >


        <!-- ID PAKET -->

        <input
            type="hidden"
            name="id_paket_wisata"
            value="{{ $paketWisata->id_paket_wisata }}"
        >


        <!-- ID JADWAL -->

        @if(isset($jadwalTour))

            <input
                type="hidden"
                name="id_jadwal"
                value="{{ $jadwalTour->id_jadwal }}"
            >

        @endif


        <div class="form-title">
            Data Pemesanan
        </div>


        <!-- JUMLAH PESERTA -->

        <div class="form-group">

            <label
                for="jumlah_peserta"
                class="form-label"
            >
                Jumlah Peserta
            </label>


            <input
                type="number"
                id="jumlah_peserta"
                name="jumlah_peserta"
                class="form-control"
                min="1"
                value="{{ old('jumlah_peserta', 1) }}"
                required
            >

        </div>


        <!-- TOTAL -->

        <div class="total-box">

            <div class="total-label">
                Total Pembayaran
            </div>

            <div
                class="total-value"
                id="totalHarga"
            >

                Rp
                {{ number_format(
                    $paketWisata->harga ?? 0,
                    0,
                    ',',
                    '.'
                ) }}

            </div>

        </div>


        <!-- BUTTON -->

        <div class="actions">


            <button
                type="submit"
                class="submit-btn"
            >

                ✓
                Pesan Sekarang

            </button>


            <a
                href="/pelanggan/pemesanan"
                class="back-btn"
            >

                ←
                Kembali

            </a>


        </div>


    </form>


</div>
```

</main>

<script>

    const jumlahPeserta =
        document.getElementById('jumlah_peserta');

    const totalHarga =
        document.getElementById('totalHarga');


    const hargaPaket =
        {{ $paketWisata->harga ?? 0 }};


    function formatRupiah(angka)
    {
        return new Intl.NumberFormat(
            'id-ID'
        ).format(angka);
    }


    function updateTotal()
    {
        let jumlah =
            parseInt(jumlahPeserta.value) || 1;

        if (jumlah < 1) {

            jumlah = 1;

            jumlahPeserta.value = 1;
        }


        const total =
            hargaPaket * jumlah;


        totalHarga.innerText =
            'Rp ' +
            formatRupiah(total);
    }
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Pesan Paket - WISATA.</title>

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
                    rgba(4,35,52,.78),
                    rgba(7,48,67,.90)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=90");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            padding-top: 110px;
        }

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

            background: rgba(255,255,255,.10);

            backdrop-filter: blur(20px);

            border-bottom:
                1px solid rgba(255,255,255,.18);

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

        .back {

            color: white;

            text-decoration: none;

            padding: 10px 18px;

            border-radius: 25px;

            background: rgba(255,255,255,.12);

            border:
                1px solid rgba(255,255,255,.20);
        }

        .container {

            width: 90%;

            max-width: 850px;

            margin: auto;

            padding-bottom: 80px;
        }

        .card {

            padding: 35px;

            border-radius: 30px;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,.15),
                    rgba(255,255,255,.07)
                );

            backdrop-filter: blur(22px);

            border:
                1px solid rgba(255,255,255,.20);

            box-shadow:
                0 30px 80px rgba(0,0,0,.25);
        }

        .small-title {

            font-size: 11px;

            letter-spacing: 4px;

            color: #a7e2ff;

            text-transform: uppercase;

            margin-bottom: 10px;
        }

        h1 {

            font-size: 38px;

            margin-bottom: 25px;
        }

        .package {

            padding: 25px;

            border-radius: 22px;

            background: rgba(255,255,255,.08);

            border:
                1px solid rgba(255,255,255,.15);

            margin-bottom: 25px;
        }

        .package-name {

            font-size: 26px;

            font-weight: 800;

            margin-bottom: 15px;
        }

        .description {

            color: rgba(255,255,255,.68);

            line-height: 1.7;

            margin-bottom: 20px;
        }

        .price {

            font-size: 28px;

            font-weight: 800;

            color: #cceeff;
        }

        .price-label {

            font-size: 11px;

            color: rgba(255,255,255,.50);

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 5px;
        }

        .form-group {

            margin-bottom: 22px;
        }

        label {

            display: block;

            font-size: 13px;

            font-weight: 700;

            margin-bottom: 9px;
        }

        input {

            width: 100%;

            padding: 15px;

            border-radius: 14px;

            border:
                1px solid rgba(255,255,255,.18);

            background: rgba(255,255,255,.08);

            color: white;

            font-size: 16px;

            outline: none;
        }

        input:focus {

            border-color: #9ddcff;

            background: rgba(255,255,255,.12);
        }

        .total {

            margin-top: 20px;

            padding: 20px;

            border-radius: 18px;

            background:
                rgba(157,220,255,.12);

            border:
                1px solid rgba(157,220,255,.25);
        }

        .total-label {

            font-size: 11px;

            color: rgba(255,255,255,.55);

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 7px;
        }

        .total-value {

            font-size: 30px;

            font-weight: 850;

            color: #cceeff;
        }

        .btn {

            width: 100%;

            margin-top: 25px;

            padding: 15px;

            border: none;

            border-radius: 25px;

            background: rgba(255,255,255,.95);

            color: #123c57;

            font-size: 15px;

            font-weight: 800;

            cursor: pointer;

            transition: .3s;
        }

        .btn:hover {

            transform: translateY(-3px);

            box-shadow:
                0 15px 30px rgba(0,0,0,.25);
        }

        .error {

            margin-bottom: 20px;

            padding: 15px;

            border-radius: 15px;

            background: rgba(255,80,80,.12);

            border:
                1px solid rgba(255,100,100,.25);

            color: #ffd0d0;
        }

        @media(max-width:600px) {

            .card {
                padding: 22px;
            }

            h1 {
                font-size: 30px;
            }
        }

    </style>

</head>

<body>

<nav class="navbar">

    <a
        href="{{ route('pelanggan.dashboard') }}"
        class="logo"
    >
        WISATA<span>.</span>
    </a>

    <a
        href="{{ url('/paket-wisata') }}"
        class="back"
    >
        ← Kembali
    </a>

</nav>


<div class="container">

    <div class="card">

        <div class="small-title">
            Travel Booking
        </div>

        <h1>
            Pesan Paket Wisata
        </h1>


        @if($errors->any())

            <div class="error">

                @foreach($errors->all() as $error)

                    <div>
                        {{ $error }}
                    </div>

                @endforeach

            </div>

        @endif


        <div class="package">

            <div class="package-name">

                {{ $paketWisata->nama_paket }}

            </div>


            <div class="description">

                {{ $paketWisata->deskripsi }}

            </div>


            <div class="price-label">
                Harga per orang
            </div>


            <div class="price">

                Rp
                {{ number_format(
                    $harga,
                    0,
                    ',',
                    '.'
                ) }}

            </div>

        </div>


        <form
            action="{{ route('pelanggan.pemesanan.store') }}"
            method="POST"
        >

            @csrf


            <input
                type="hidden"
                name="id_paket"
                value="{{ $paketWisata->id_paket }}"
            >


            <div class="form-group">

                <label>
                    Jumlah Peserta
                </label>

                <input
                    type="number"
                    id="jumlah_peserta"
                    name="jumlah_peserta"
                    value="1"
                    min="1"
                    required
                >

            </div>


            <div class="total">

                <div class="total-label">
                    Total yang harus dibayar
                </div>

                <div
                    class="total-value"
                    id="totalHarga"
                >
                    Rp
                    {{ number_format(
                        $harga,
                        0,
                        ',',
                        '.'
                    ) }}
                </div>

            </div>


            <button
                type="submit"
                class="btn"
            >
                Pesan Sekarang
            </button>

        </form>

    </div>

</div>


<script>

    const jumlahInput =
        document.getElementById(
            'jumlah_peserta'
        );

    const totalHarga =
        document.getElementById(
            'totalHarga'
        );

    const hargaPerOrang =
        {{ $harga }};


    function hitungTotal()
    {
        let jumlah =
            parseInt(
                jumlahInput.value
            ) || 1;

        if (jumlah < 1) {
            jumlah = 1;
            jumlahInput.value = 1;
        }

        let total =
            hargaPerOrang * jumlah;


        totalHarga.innerText =
            'Rp ' +
            new Intl.NumberFormat(
                'id-ID'
            ).format(total);
    }


    jumlahInput.addEventListener(
        'input',
        hitungTotal
    );


    hitungTotal();

</script>

</body>

</html>

    jumlahPeserta.addEventListener(
        'input',
        updateTotal
    );


    updateTotal();

</script>

</body>

</html>
