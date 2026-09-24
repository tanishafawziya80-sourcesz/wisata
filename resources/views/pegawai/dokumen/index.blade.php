<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Dokumen - FAWZATA TRAVEL
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
                    rgba(7,48,67,.82),
                    rgba(18,60,87,.94)
                ),

                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=90");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            padding: 40px;

        }


        .container {

            max-width: 1250px;

            margin: auto;

        }


        /* =====================================================
           HEADER
        ===================================================== */

        .header {

            margin-bottom: 28px;

        }


        .small-title {

            color: #9ddcff;

            font-size: 11px;

            letter-spacing: 3px;

            font-weight: 800;

            margin-bottom: 8px;

        }


        h1 {

            color: white;

            font-size: 42px;

            margin-bottom: 8px;

        }


        .header p {

            color:
                rgba(255,255,255,.72);

            font-size: 13px;

        }


        /* =====================================================
           MAIN CARD
        ===================================================== */

        .card {

            background:
                rgba(255,255,255,.96);

            border-radius: 26px;

            padding: 28px;

            box-shadow:
                0 25px 70px
                rgba(0,0,0,.25);

        }


        .card-header {

            padding-bottom: 18px;

            margin-bottom: 22px;

            border-bottom:
                1px solid
                #e2edf1;

        }


        .card-title {

            color: #123c57;

            font-size: 21px;

            font-weight: 800;

        }


        .card-subtitle {

            color: #78909c;

            font-size: 12px;

            margin-top: 5px;

        }


        /* =====================================================
           ALERT
        ===================================================== */

        .alert {

            padding: 13px 15px;

            border-radius: 13px;

            margin-bottom: 18px;

            font-size: 12px;

        }


        .alert-success {

            background: #e8f7ed;

            color: #267044;

            border:
                1px solid
                #c9ead4;

        }


        .alert-error {

            background: #fff0f0;

            color: #a33a3a;

            border:
                1px solid
                #f0d0d0;

        }


        /* =====================================================
           BOOKING CARD
        ===================================================== */

        .booking-card {

            border:
                1px solid
                #dcebef;

            border-radius: 20px;

            margin-bottom: 22px;

            overflow: hidden;

            background: #fbfdfe;

            box-shadow:
                0 8px 25px
                rgba(18,60,87,.05);

            animation:
                fadeUp .35s ease both;

        }


        /* =====================================================
           BOOKING HEADER
        ===================================================== */

        .booking-header {

            padding: 19px 21px;

            background:
                linear-gradient(
                    135deg,
                    #eef9fd,
                    #f8fcfe
                );

            border-bottom:
                1px solid
                #dcebef;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 15px;

            flex-wrap: wrap;

        }


        .booking-label {

            color: #78909c;

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1.2px;

            font-weight: 800;

            margin-bottom: 5px;

        }


        .booking-code {

            color: #123c57;

            font-size: 18px;

            font-weight: 900;

        }


        .booking-info {

            display: flex;

            gap: 10px;

            flex-wrap: wrap;

        }


        .info-badge {

            padding: 7px 12px;

            border-radius: 20px;

            background: white;

            border:
                1px solid
                #d7e8ee;

            color: #527180;

            font-size: 10px;

            font-weight: 700;

        }


        /* =====================================================
           CUSTOMER
        ===================================================== */

        .customer-box {

            padding: 18px 21px;

            border-bottom:
                1px dashed
                #d9e6ea;

        }


        .customer-label {

            color: #78909c;

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1px;

            font-weight: 800;

            margin-bottom: 5px;

        }


        .customer-name {

            color: #123c57;

            font-size: 16px;

            font-weight: 800;

        }


        /* =====================================================
           PESERTA
        ===================================================== */

        .peserta-section {

            padding: 21px;

        }


        .section-title {

            color: #123c57;

            font-size: 15px;

            font-weight: 800;

            margin-bottom: 14px;

        }


        .peserta-list {

            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 15px;

        }


        .peserta-card {

            padding: 18px;

            border-radius: 17px;

            background: white;

            border:
                1px solid
                #e0ecef;

            box-shadow:
                0 5px 15px
                rgba(18,60,87,.04);

        }


        .peserta-top {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 10px;

            margin-bottom: 15px;

            padding-bottom: 11px;

            border-bottom:
                1px dashed
                #dce7eb;

        }


        .peserta-number {

            color: #123c57;

            font-size: 14px;

            font-weight: 900;

        }


        .peserta-category {

            padding: 5px 9px;

            border-radius: 15px;

            background: #e8f6fb;

            color: #24789b;

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;

        }


        /* =====================================================
           DATA PESERTA
        ===================================================== */

        .data-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 10px;

        }


        .data-box {

            padding: 11px 12px;

            border-radius: 11px;

            background: #f7fafb;

            border:
                1px solid
                #e7eff2;

        }


        .data-label {

            color: #8a9ca5;

            font-size: 8px;

            text-transform: uppercase;

            letter-spacing: .8px;

            font-weight: 800;

            margin-bottom: 4px;

        }


        .data-value {

            color: #284b5c;

            font-size: 12px;

            font-weight: 700;

            word-break: break-word;

        }


        /* =====================================================
           IDENTITAS
        ===================================================== */

        .identitas-box {

            margin-top: 13px;

            padding: 13px;

            border-radius: 13px;

            background:
                linear-gradient(
                    135deg,
                    #eef9fd,
                    #f7fcfe
                );

            border:
                1px solid
                #d4eaf2;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 10px;

        }


        .identitas-title {

            color: #547080;

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: .7px;

            margin-bottom: 3px;

        }


        .identitas-file {

            color: #78909c;

            font-size: 10px;

        }


        .file-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 8px 13px;

            border-radius: 20px;

            background: #123c57;

            color: white;

            text-decoration: none;

            font-size: 10px;

            font-weight: 800;

            white-space: nowrap;

            transition: .25s;

        }


        .file-btn:hover {

            transform:
                translateY(-2px);

            background: #194e6d;

        }


        .file-empty {

            color: #a33a3a;

            font-size: 10px;

            font-weight: 700;

        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {

            text-align: center;

            padding: 55px 20px;

            color: #78909c;

            font-size: 13px;

        }


        .empty-icon {

            font-size: 35px;

            margin-bottom: 10px;

        }


        /* =====================================================
           BACK
        ===================================================== */

        .back {

            display: inline-flex;

            align-items: center;

            margin-top: 22px;

            padding: 11px 18px;

            border-radius: 22px;

            background:
                rgba(255,255,255,.12);

            border:
                1px solid
                rgba(255,255,255,.18);

            color: white;

            text-decoration: none;

            font-size: 12px;

            font-weight: 700;

            transition: .25s;

        }


        .back:hover {

            background:
                rgba(255,255,255,.20);

            transform:
                translateY(-2px);

        }


        /* =====================================================
           ANIMATION
        ===================================================== */

        @keyframes fadeUp {

            from {

                opacity: 0;

                transform:
                    translateY(12px);

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

        @media(max-width: 850px) {

            body {

                padding: 25px 18px;

            }


            h1 {

                font-size: 32px;

            }


            .card {

                padding: 18px;

            }


            .peserta-list {

                grid-template-columns: 1fr;

            }

        }


        @media(max-width: 550px) {

            .booking-header {

                align-items: flex-start;

                flex-direction: column;

            }


            .data-grid {

                grid-template-columns: 1fr;

            }


            .identitas-box {

                align-items: flex-start;

                flex-direction: column;

            }


            .file-btn {

                width: 100%;

            }

        }

    </style>

</head>


<body>


<div class="container">


    <!-- =====================================================
         HEADER
    ===================================================== -->

    <div class="header">

        <div class="small-title">

            FAWZATA TRAVEL • PEGAWAI

        </div>


        <h1>

            Dokumen

        </h1>


        <p>

            Kelola dan periksa dokumen identitas peserta
            dari setiap pemesanan pelanggan.

        </p>

    </div>


    <!-- =====================================================
         CARD
    ===================================================== -->

    <div class="card">


        <div class="card-header">

            <div>

                <div class="card-title">

                    Dokumen Peserta

                </div>


                <div class="card-subtitle">

                    Periksa identitas setiap peserta berdasarkan
                    nomor booking.

                </div>

            </div>

        </div>


        <!-- =================================================
             ALERT
        ================================================= -->

        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif


        @if(session('error'))

            <div class="alert alert-error">

                {{ session('error') }}

            </div>

        @endif


        <!-- =================================================
             DATA PEMESANAN
        ================================================= -->

        @if($pemesanan->count())


            @foreach($pemesanan as $item)


                <div class="booking-card">


                    <!-- =====================================
                         BOOKING HEADER
                    ====================================== -->

                    <div class="booking-header">


                        <div>

                            <div class="booking-label">

                                Kode Booking

                            </div>


                            <div class="booking-code">

                                {{ $item->kode_booking ?? '-' }}

                            </div>

                        </div>


                        <div class="booking-info">


                            <div class="info-badge">

                                Paket:

                                {{ $item->jadwalTour->paketWisata->nama_paket ?? '-' }}

                            </div>


                            <div class="info-badge">

                                Peserta:

                                {{ $item->jumlah_peserta ?? 0 }}

                            </div>


                        </div>


                    </div>


                    <!-- =====================================
                         PELANGGAN
                    ====================================== -->

                    <div class="customer-box">


                        <div class="customer-label">

                            Nama Pelanggan

                        </div>


                        <div class="customer-name">

                            {{ $item->pelanggan->nama_lengkap ?? '-' }}

                        </div>


                    </div>


                    <!-- =====================================
                         DATA PESERTA
                    ====================================== -->

                    <div class="peserta-section">


                        <div class="section-title">

                            Data Peserta

                        </div>


                        @if($item->peserta && $item->peserta->count())


                            <div class="peserta-list">


                                @foreach($item->peserta as $index => $peserta)


                                    <div class="peserta-card">


                                        <div class="peserta-top">


                                            <div class="peserta-number">

                                                Peserta
                                                {{ $index + 1 }}

                                            </div>


                                            <div class="peserta-category">

                                                {{ $peserta->kategori ?? '-' }}

                                            </div>


                                        </div>


                                        <div class="data-grid">


                                            <div class="data-box">


                                                <div class="data-label">

                                                    Nama Lengkap

                                                </div>


                                                <div class="data-value">

                                                    {{ $peserta->nama_peserta ?? '-' }}

                                                </div>

                                            </div>


                                            <div class="data-box">


                                                <div class="data-label">

                                                    NIK

                                                </div>


                                                <div class="data-value">

                                                    {{ $peserta->nik ?? '-' }}

                                                </div>

                                            </div>


                                            <div class="data-box">


                                                <div class="data-label">

                                                    Usia

                                                </div>


                                                <div class="data-value">

                                                    {{ $peserta->usia ?? '-' }}
                                                    tahun

                                                </div>

                                            </div>


                                            <div class="data-box">


                                                <div class="data-label">

                                                    Jenis Kelamin

                                                </div>


                                                <div class="data-value">

                                                    @if($peserta->jenis_kelamin === 'L')

                                                        Laki-laki

                                                    @elseif($peserta->jenis_kelamin === 'P')

                                                        Perempuan

                                                    @else

                                                        -

                                                    @endif

                                                </div>

                                            </div>


                                        </div>


                                        <!-- =========================
                                             FILE IDENTITAS
                                        ========================== -->

                                        <div class="identitas-box">


                                            <div>

                                                <div class="identitas-title">

                                                    Identitas / Tanda Pengenal

                                                </div>


                                                @if($peserta->file_identitas)

                                                    <div class="identitas-file">

                                                        Dokumen identitas tersedia.

                                                    </div>

                                                @else

                                                    <div class="file-empty">

                                                        Dokumen identitas belum diunggah.

                                                    </div>

                                                @endif

                                            </div>


                                            @if($peserta->file_identitas)

                                                <a
                                                    href="{{ asset('storage/' . $peserta->file_identitas) }}"
                                                    target="_blank"
                                                    class="file-btn"
                                                >

                                                    Lihat Identitas

                                                </a>

                                            @endif


                                        </div>


                                    </div>


                                @endforeach


                            </div>


                        @else


                            <div class="empty">

                                <div class="empty-icon">

                                    📄

                                </div>


                                Belum ada data peserta
                                pada pemesanan ini.

                            </div>


                        @endif


                    </div>


                </div>


            @endforeach


        @else


            <div class="empty">

                <div class="empty-icon">

                    📄

                </div>


                Belum ada pemesanan yang memiliki
                data dokumen peserta.

            </div>


        @endif


    </div>


    <!-- =====================================================
         BACK
    ===================================================== -->

    <a
        href="/pegawai/dashboard"
        class="back"
    >

        ← Kembali ke Dashboard Pegawai

    </a>


</div>


</body>

</html>