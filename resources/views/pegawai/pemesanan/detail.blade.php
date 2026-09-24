<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Detail Pemesanan - FAWZATA TRAVEL
    </title>


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
                    rgba(7,48,67,.78),
                    rgba(18,60,87,.90)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=90");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            padding-bottom: 70px;

        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {

            height: 78px;

            padding: 0 7%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            background:
                rgba(18,60,87,.88);

            backdrop-filter: blur(20px);

            -webkit-backdrop-filter: blur(20px);

            border-bottom:
                1px solid
                rgba(255,255,255,.15);

            box-shadow:
                0 8px 30px
                rgba(0,0,0,.15);

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

            background:
                rgba(255,255,255,.10);

            border:
                1px solid
                rgba(255,255,255,.18);

            font-size: 12px;

            font-weight: 700;

            transition: .3s;

        }


        .back:hover {

            background:
                rgba(255,255,255,.18);

            transform:
                translateY(-2px);

        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {

            width: 90%;

            max-width: 1100px;

            margin: auto;

            padding-top: 55px;

        }


        /* =====================================================
           HEADER
        ===================================================== */

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
                clamp(35px, 5vw, 50px);

            margin-bottom: 10px;

        }


        .subtitle {

            color:
                rgba(255,255,255,.72);

            font-size: 14px;

            margin-bottom: 30px;

        }


        /* =====================================================
           MAIN CARD
        ===================================================== */

        .card {

            padding: 30px;

            border-radius: 28px;

            background:
                rgba(255,255,255,.95);

            border:
                1px solid
                rgba(255,255,255,.65);

            box-shadow:
                0 30px 80px
                rgba(0,0,0,.25);

        }


        /* =====================================================
           BOOKING HEADER
        ===================================================== */

        .booking-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            padding-bottom: 22px;

            margin-bottom: 25px;

            border-bottom:
                1px dashed
                #cbdce4;

        }


        .booking-code {

            color: #1c769b;

            font-size: 13px;

            font-weight: 900;

            letter-spacing: 1px;

        }


        .booking-title {

            color: #123c57;

            font-size: 23px;

            font-weight: 900;

            margin-top: 5px;

        }


        .status {

            padding: 8px 14px;

            border-radius: 25px;

            background: #e4f5fb;

            color: #24789b;

            font-size: 10px;

            font-weight: 900;

            text-transform: uppercase;

            white-space: nowrap;

        }


        /* =====================================================
           INFO GRID
        ===================================================== */

        .info-grid {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 13px;

            margin-bottom: 30px;

        }


        .info-box {

            padding: 17px;

            border-radius: 16px;

            background:
                #f4f9fb;

            border:
                1px solid
                #dcebef;

        }


        .info-label {

            display: block;

            color: #78909c;

            font-size: 9px;

            font-weight: 800;

            letter-spacing: .8px;

            text-transform: uppercase;

            margin-bottom: 7px;

        }


        .info-value {

            color: #183b4d;

            font-size: 14px;

            font-weight: 800;

        }


        /* =====================================================
           SECTION
        ===================================================== */

        .section {

            margin-top: 25px;

            padding-top: 25px;

            border-top:
                1px dashed
                #cbdce4;

        }


        .section-header {

            display: flex;

            align-items: flex-end;

            justify-content: space-between;

            gap: 15px;

            margin-bottom: 18px;

        }


        .section-title {

            color: #123c57;

            font-size: 20px;

            font-weight: 900;

        }


        .section-description {

            color: #78909c;

            font-size: 12px;

            margin-top: 4px;

        }


        .participant-count {

            padding: 8px 14px;

            border-radius: 20px;

            background: #e8f7fc;

            color: #24789b;

            font-size: 11px;

            font-weight: 900;

            white-space: nowrap;

        }


        /* =====================================================
           PESERTA
        ===================================================== */

        .peserta-list {

            display: grid;

            gap: 15px;

        }


        .peserta-card {

            padding: 20px;

            border-radius: 19px;

            background:
                linear-gradient(
                    135deg,
                    #f8fcfd,
                    #f1f8fb
                );

            border:
                1px solid
                #dcebef;

            box-shadow:
                0 8px 20px
                rgba(18,60,87,.04);

            transition: .3s;

        }


        .peserta-card:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 12px 28px
                rgba(18,60,87,.08);

        }


        .peserta-top {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            margin-bottom: 17px;

            padding-bottom: 13px;

            border-bottom:
                1px dashed
                #d5e4e9;

        }


        .peserta-number {

            display: flex;

            align-items: center;

            gap: 10px;

        }


        .number {

            width: 34px;

            height: 34px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background:
                #123c57;

            color: white;

            font-size: 12px;

            font-weight: 900;

        }


        .peserta-name {

            color: #123c57;

            font-size: 17px;

            font-weight: 900;

        }


        .kategori {

            padding: 6px 11px;

            border-radius: 20px;

            background: #e4f5fb;

            color: #24789b;

            font-size: 9px;

            font-weight: 900;

            text-transform: uppercase;

        }


        .peserta-grid {

            display: grid;

            grid-template-columns:
                1.5fr
                1fr
                1fr
                1fr;

            gap: 12px;

        }


        .data-box {

            padding: 13px;

            border-radius: 12px;

            background: white;

            border:
                1px solid
                #e1edf1;

        }


        .data-label {

            display: block;

            color: #8aa0aa;

            font-size: 8px;

            font-weight: 800;

            letter-spacing: .7px;

            text-transform: uppercase;

            margin-bottom: 5px;

        }


        .data-value {

            color: #244e66;

            font-size: 12px;

            font-weight: 700;

        }


        /* =====================================================
           PEMESAN
        ===================================================== */

        .customer-box {

            padding: 19px;

            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    #eef9fd,
                    #f8fcfe
                );

            border:
                1px solid
                #d4eaf2;

            margin-bottom: 25px;

        }


        .customer-label {

            color: #78909c;

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 6px;

        }


        .customer-name {

            color: #123c57;

            font-size: 17px;

            font-weight: 900;

        }


        /* =====================================================
           CATATAN
        ===================================================== */

        .note-box {

            padding: 18px;

            border-radius: 16px;

            background: #f8fbfc;

            border:
                1px solid
                #dcebef;

            color: #547080;

            font-size: 13px;

            line-height: 1.6;

        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {

            padding: 35px;

            text-align: center;

            border-radius: 18px;

            background: #f8fbfc;

            border:
                1px dashed
                #cbdce4;

            color: #78909c;

            font-size: 13px;

        }


        /* =====================================================
           FOOTER BUTTON
        ===================================================== */

        .actions {

            display: flex;

            justify-content: flex-end;

            margin-top: 25px;

        }


        .back-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 13px 22px;

            border-radius: 25px;

            background: #123c57;

            color: white;

            text-decoration: none;

            font-size: 12px;

            font-weight: 800;

            transition: .3s;

        }


        .back-btn:hover {

            transform:
                translateY(-2px);

            background: #194e6d;

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media(max-width: 850px) {

            .info-grid {

                grid-template-columns:
                    repeat(2, 1fr);

            }


            .peserta-grid {

                grid-template-columns:
                    repeat(2, 1fr);

            }

        }


        @media(max-width: 600px) {

            .navbar {

                padding: 0 5%;

            }


            .logo {

                font-size: 20px;

            }


            .container {

                width: 92%;

                padding-top: 35px;

            }


            .card {

                padding: 20px;

            }


            .booking-header {

                align-items:
                    flex-start;

                flex-direction:
                    column;

            }


            .info-grid {

                grid-template-columns:
                    1fr;

            }


            .peserta-grid {

                grid-template-columns:
                    1fr;

            }


            .section-header {

                align-items:
                    flex-start;

                flex-direction:
                    column;

            }


            .actions {

                justify-content:
                    stretch;

            }


            .back-btn {

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
        href="/pegawai/dashboard"
        class="logo"
    >
        FAWZATA<span> TRAVEL</span>
    </a>


    <a
        href="{{ route('pegawai.pemesanan') }}"
        class="back"
    >
        ← Daftar Pemesanan
    </a>

</nav>


<!-- =========================================================
     CONTENT
========================================================= -->

<main class="container">


    <div class="small-title">
        FAWZATA TRAVEL • PEMESANAN
    </div>


    <h1>
        Detail Pemesanan
    </h1>


    <p class="subtitle">
        Informasi lengkap pemesanan dan data seluruh peserta.
    </p>


    <div class="card">


        <!-- =================================================
             HEADER PEMESANAN
        ================================================= -->

        <div class="booking-header">

            <div>

                <div class="booking-code">
                    {{ $pemesanan->kode_booking }}
                </div>

                <div class="booking-title">

                    @if($pemesanan->jadwalTour)
                        Jadwal Tour #{{ $pemesanan->jadwalTour->id_jadwal }}
                    @else
                        Pemesanan
                    @endif

                </div>

            </div>


            <div class="status">

                {{ $pemesanan->status_pemesanan }}

            </div>

        </div>


        <!-- =================================================
             DATA PEMESAN
        ================================================= -->

        <div class="customer-box">

            <div class="customer-label">
                Nama Pemesan
            </div>

            <div class="customer-name">

                {{ $pemesanan->pelanggan->nama_lengkap ?? '-' }}

            </div>

        </div>


        <!-- =================================================
             INFO PEMESANAN
        ================================================= -->

        <div class="info-grid">


            <div class="info-box">

                <span class="info-label">
                    Kode Booking
                </span>

                <span class="info-value">
                    {{ $pemesanan->kode_booking }}
                </span>

            </div>


            <div class="info-box">

                <span class="info-label">
                    Jumlah Peserta
                </span>

                <span class="info-value">

                    {{ $pemesanan->jumlah_peserta }}
                    orang

                </span>

            </div>


            <div class="info-box">

                <span class="info-label">
                    Tanggal Pesan
                </span>

                <span class="info-value">

                    {{ $pemesanan->tgl_pemesanan
                        ? \Carbon\Carbon::parse(
                            $pemesanan->tgl_pemesanan
                        )->format('d M Y')
                        : '-'
                    }}

                </span>

            </div>


            <div class="info-box">

                <span class="info-label">
                    Keberangkatan
                </span>

                <span class="info-value">

                    @if($pemesanan->jadwalTour)

                        {{ \Carbon\Carbon::parse(
                            $pemesanan->jadwalTour->tgl_keberangkatan
                        )->format('d M Y') }}

                    @else

                        -

                    @endif

                </span>

            </div>


        </div>


        <!-- =================================================
             DAFTAR PESERTA
        ================================================= -->

        <div class="section">


            <div class="section-header">

                <div>

                    <div class="section-title">
                        Daftar Peserta
                    </div>

                    <div class="section-description">
                        Seluruh nama peserta yang terdaftar dalam pemesanan ini.
                    </div>

                </div>


                <div class="participant-count">

                    {{ $pemesanan->pesertaPemesanan->count() }}
                    Peserta

                </div>

            </div>


            @if($pemesanan->pesertaPemesanan->count() > 0)

                <div class="peserta-list">


                    @foreach(
                        $pemesanan->pesertaPemesanan
                        as $index => $peserta
                    )

                        <div class="peserta-card">


                            <div class="peserta-top">


                                <div class="peserta-number">

                                    <div class="number">

                                        {{ $index + 1 }}

                                    </div>


                                    <div class="peserta-name">

                                        {{ $peserta->nama_peserta }}

                                    </div>

                                </div>


                                <div class="kategori">

                                    {{ $peserta->kategori }}

                                </div>

                            </div>


                            <div class="peserta-grid">


                                <div class="data-box">

                                    <span class="data-label">
                                        Nama Lengkap
                                    </span>

                                    <span class="data-value">

                                        {{ $peserta->nama_peserta }}

                                    </span>

                                </div>


                                <div class="data-box">

                                    <span class="data-label">
                                        NIK
                                    </span>

                                    <span class="data-value">

                                        {{ $peserta->nik ?: '-' }}

                                    </span>

                                </div>


                                <div class="data-box">

                                    <span class="data-label">
                                        Usia
                                    </span>

                                    <span class="data-value">

                                        {{ $peserta->usia }}
                                        tahun

                                    </span>

                                </div>


                                <div class="data-box">

                                    <span class="data-label">
                                        Jenis Kelamin
                                    </span>

                                    <span class="data-value">

                                        @if($peserta->jenis_kelamin === 'L')

                                            Laki-laki

                                        @elseif($peserta->jenis_kelamin === 'P')

                                            Perempuan

                                        @else

                                            -

                                        @endif

                                    </span>

                                </div>


                            </div>


                        </div>

                    @endforeach


                </div>


            @else

                <div class="empty">

                    Belum ada data peserta yang tersimpan.

                </div>

            @endif


        </div>


        <!-- =================================================
             CATATAN
        ================================================= -->

        @if(!empty($pemesanan->catatan_revisi))

            <div class="section">

                <div class="section-title">
                    Catatan Pemesanan
                </div>

                <div class="section-description">
                    Catatan yang diberikan pelanggan.
                </div>


                <div class="note-box">

                    {{ $pemesanan->catatan_revisi }}

                </div>

            </div>

        @endif


        <!-- =================================================
             BUTTON
        ================================================= -->

        <div class="actions">

            <a
                href="{{ route('pegawai.pemesanan') }}"
                class="back-btn"
            >
                ← Kembali ke Pemesanan
            </a>

        </div>


    </div>

</main>


</body>

</html>