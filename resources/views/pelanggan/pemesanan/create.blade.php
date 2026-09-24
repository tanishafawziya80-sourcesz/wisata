<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Pemesanan - FAWZATA TRAVEL
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

            overflow-x: hidden;

            padding-bottom: 80px;
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
                rgba(18,60,87,.82);

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

            gap: 12px;
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

            padding: 10px 18px;

            border-radius: 25px;

            border:
                1px solid
                rgba(255,255,255,.18);

            background:
                rgba(255,255,255,.95);

            color: #123c57;

            font-weight: 700;

            cursor: pointer;

            transition: .3s;
        }


        .logout:hover {

            transform:
                translateY(-2px);

            background: white;
        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {

            position: relative;

            z-index: 2;

            width: 90%;

            max-width: 1050px;

            margin: auto;

            padding-top: 125px;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .small-title {

            color: #9ddcff;

            font-size: 11px;

            letter-spacing: 4px;

            font-weight: 800;

            text-transform: uppercase;

            margin-bottom: 10px;
        }


        .header h1 {

            color: white;

            font-size:
                clamp(38px, 6vw, 58px);

            line-height: 1;

            margin-bottom: 15px;
        }


        .header p {

            color:
                rgba(255,255,255,.75);

            font-size: 14px;

            margin-bottom: 30px;
        }


        /* =====================================================
           MAIN CARD
        ===================================================== */

        .card {

            padding: 32px;

            border-radius: 28px;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,.95),
                    rgba(245,250,252,.92)
                );

            border:
                1px solid
                rgba(255,255,255,.60);

            box-shadow:
                0 30px 80px
                rgba(0,0,0,.25);
        }


        .card-header {

            padding-bottom: 20px;

            margin-bottom: 22px;

            border-bottom:
                1px dashed
                #cbdce4;
        }


        .card-title {

            color: #123c57;

            font-size: 22px;

            font-weight: 800;
        }


        .card-subtitle {

            color: #78909c;

            font-size: 13px;

            margin-top: 5px;
        }


        /* =====================================================
           CUSTOMER
        ===================================================== */

        .customer-box {

            padding: 17px;

            margin-bottom: 20px;

            border-radius: 17px;

            background:
                linear-gradient(
                    135deg,
                    #f1faff,
                    #f8fcfe
                );

            border:
                1px solid
                #d5e8f0;
        }


        .customer-label {

            color: #78909c;

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1.2px;

            margin-bottom: 6px;

            font-weight: 800;
        }


        .customer-name {

            color: #123c57;

            font-size: 18px;

            font-weight: 800;
        }


        /* =====================================================
           INFO PAKET
        ===================================================== */

        .info-grid {

            display: grid;

            grid-template-columns:
                repeat(2,1fr);

            gap: 12px;

            margin-bottom: 25px;
        }


        .info-box {

            padding: 16px;

            border-radius: 15px;

            background: #f8fbfc;

            border:
                1px solid
                #e1edf1;
        }


        .info-label {

            color: #78909c;

            font-size: 8px;

            text-transform: uppercase;

            letter-spacing: .8px;

            margin-bottom: 6px;

            font-weight: 800;
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

            padding-top: 24px;

            margin-top: 20px;

            border-top:
                1px dashed
                #cbdce4;
        }


        .section-title {

            color: #123c57;

            font-size: 18px;

            font-weight: 800;

            margin-bottom: 5px;
        }


        .section-description {

            color: #78909c;

            font-size: 12px;

            margin-bottom: 20px;
        }


        /* =====================================================
           FORM
        ===================================================== */

        .form-group {

            margin-bottom: 18px;
        }


        .form-label {

            display: block;

            color: #546e7a;

            font-size: 11px;

            font-weight: 800;

            margin-bottom: 7px;
        }


        .form-control {

            width: 100%;

            padding: 13px 15px;

            border-radius: 12px;

            border:
                1px solid
                #d6e4e9;

            background: white;

            color: #183b4d;

            outline: none;

            font-size: 13px;

            transition: .25s;
        }


        .form-control:focus {

            border-color: #78bfdc;

            box-shadow:
                0 0 0 3px
                rgba(119,189,219,.13);
        }


        /* =====================================================
           FILE IDENTITAS
        ===================================================== */

        .file-info {

            color: #78909c;

            font-size: 10px;

            margin-top: 6px;

            line-height: 1.5;
        }


        input[type="file"].form-control {

            padding: 10px 12px;

            cursor: pointer;
        }


        /* =====================================================
           JUMLAH PESERTA
        ===================================================== */

        .jumlah-box {

            padding: 20px;

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


        .jumlah-info {

            color: #78909c;

            font-size: 12px;

            margin-top: 5px;
        }


        /* =====================================================
           PESERTA CARD
        ===================================================== */

        .peserta-list {

            display: flex;

            flex-direction: column;

            gap: 18px;
        }


        .peserta-card {

            padding: 22px;

            border-radius: 20px;

            background:
                #f8fbfc;

            border:
                1px solid
                #dcebef;

            box-shadow:
                0 8px 20px
                rgba(18,60,87,.04);

            animation:
                fadeUp .35s ease both;
        }


        .peserta-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 18px;

            padding-bottom: 12px;

            border-bottom:
                1px dashed
                #d5e4e9;
        }


        .peserta-number {

            color: #123c57;

            font-size: 16px;

            font-weight: 800;
        }


        .peserta-badge {

            padding: 5px 10px;

            border-radius: 20px;

            background:
                #e4f5fb;

            color: #24789b;

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;
        }


        .peserta-grid {

            display: grid;

            grid-template-columns:
                2fr 1.5fr 1fr;

            gap: 14px;
        }


        /* =====================================================
           IDENTITAS FULL WIDTH
        ===================================================== */

        .identitas-group {

            grid-column:
                1 / -1;
        }


        /* =====================================================
           TOTAL
        ===================================================== */

        .total-box {

            margin-top: 25px;

            padding: 22px;

            border-radius: 20px;

            background:
                linear-gradient(
                    135deg,
                    #eaf8fd,
                    #dff3fa
                );

            border:
                1px solid
                #c6e7f3;

            display: flex;

            align-items: center;

            justify-content: space-between;
        }


        .total-label {

            color: #658293;

            font-size: 11px;

            font-weight: 800;

            text-transform: uppercase;
        }


        .total-info {

            color: #78909c;

            font-size: 12px;

            margin-top: 4px;
        }


        .total-value {

            color: #123c57;

            font-size: 25px;

            font-weight: 900;
        }


        /* =====================================================
           CATATAN
        ===================================================== */

        textarea.form-control {

            min-height: 100px;

            resize: vertical;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .actions {

            display: flex;

            gap: 12px;

            margin-top: 25px;

            flex-wrap: wrap;
        }


        .submit-btn {

            flex: 1;

            min-width: 200px;

            padding: 15px 22px;

            border: none;

            border-radius: 25px;

            background:
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

            background: #194e6d;
        }


        .back-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 150px;

            padding: 15px 22px;

            border-radius: 25px;

            background: white;

            color: #123c57;

            border:
                1px solid
                #d4e3e8;

            text-decoration: none;

            font-size: 13px;

            font-weight: 800;

            transition: .3s;
        }


        .back-btn:hover {

            transform:
                translateY(-3px);

            background: #f5fafc;
        }


        /* =====================================================
           ALERT
        ===================================================== */

        .alert {

            padding: 14px 16px;

            border-radius: 14px;

            margin-bottom: 20px;

            font-size: 12px;
        }


        .alert-error {

            background: #fff2f2;

            border:
                1px solid
                #f2d0d0;

            color: #a33a3a;
        }


        /* =====================================================
           ANIMATION
        ===================================================== */

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


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media(max-width: 750px) {

            .navbar {

                padding: 0 5%;
            }


            .logo {

                font-size: 21px;
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
            }


            .info-grid {

                grid-template-columns: 1fr;
            }


            .peserta-grid {

                grid-template-columns: 1fr;
            }


            .identitas-group {

                grid-column: auto;
            }


            .total-box {

                flex-direction: column;

                align-items: flex-start;

                gap: 10px;
            }


            .actions {

                flex-direction: column;
            }


            .submit-btn,
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


    <div class="header">

        <div class="small-title">
            FAWZATA TRAVEL • PEMESANAN
        </div>

        <h1>
            Pemesanan
        </h1>

        <p>
            Lengkapi data perjalanan dan peserta
            yang akan mengikuti tour.
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


        <!-- =================================================
             ERROR
        ================================================= -->

        @if(session('error'))

            <div class="alert alert-error">
                {{ session('error') }}
            </div>

        @endif


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
             DATA PELANGGAN
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

                    {{ $paket->nama_paket }}

                </div>

            </div>


            <div class="info-box">

                <div class="info-label">
                    Harga / Orang
                </div>

                <div class="info-value">

                    Rp
                    {{ number_format(
                        $paket->harga_promo ?: $paket->harga_normal,
                        0,
                        ',',
                        '.'
                    ) }}

                </div>

            </div>


            <div class="info-box">

                <div class="info-label">
                    Keberangkatan
                </div>

                <div class="info-value">

                    {{ \Carbon\Carbon::parse(
                        $jadwal->tgl_keberangkatan
                    )->format('d M Y') }}

                </div>

            </div>


            <div class="info-box">

                <div class="info-label">
                    Kepulangan
                </div>

                <div class="info-value">

                    {{ \Carbon\Carbon::parse(
                        $jadwal->tgl_kepulangan
                    )->format('d M Y') }}

                </div>

            </div>


            <div class="info-box">

                <div class="info-label">
                    Sisa Kuota
                </div>

                <div class="info-value">

                    {{ $jadwal->sisa_kuota }}
                    peserta

                </div>

            </div>


        </div>


        <!-- =================================================
             FORM
        ================================================= -->

        <form
            action="{{ route('pelanggan.pemesanan.store') }}"
            method="POST"
            enctype="multipart/form-data"
            id="formPemesanan"
        >

            @csrf


            <!-- ID JADWAL -->

            <input
                type="hidden"
                name="id_jadwal"
                value="{{ $jadwal->id_jadwal }}"
            >


            <!-- =================================================
                 JUMLAH PESERTA
            ================================================= -->

            <div class="section">

                <div class="section-title">
                    Jumlah Peserta
                </div>

                <div class="section-description">
                    Tentukan jumlah orang yang akan mengikuti
                    perjalanan ini.
                </div>


                <div class="jumlah-box">

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
                            max="{{ $jadwal->sisa_kuota }}"
                            value="{{ old('jumlah_peserta', 1) }}"
                            required
                        >


                        <div class="jumlah-info">

                            Maksimal
                            {{ $jadwal->sisa_kuota }}
                            peserta.

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 DATA PESERTA
            ================================================= -->

            <div class="section">

                <div class="section-title">
                    Data Peserta
                </div>

                <div class="section-description">
                    Masukkan data setiap orang yang ikut
                    dalam perjalanan.
                </div>


                <div
                    class="peserta-list"
                    id="pesertaList"
                ></div>

            </div>


            <!-- =================================================
                 CATATAN
            ================================================= -->

            <div class="section">

                <div class="section-title">
                    Catatan Pemesanan
                </div>

                <div class="section-description">
                    Tambahkan informasi jika ada yang perlu
                    diketahui oleh pihak travel.
                </div>


                <div class="form-group">

                    <label
                        for="catatan_revisi"
                        class="form-label"
                    >
                        Catatan
                    </label>


                    <textarea
                        id="catatan_revisi"
                        name="catatan_revisi"
                        class="form-control"
                        placeholder="Contoh: membutuhkan kursi khusus, permintaan kamar, dan sebagainya..."
                    >{{ old('catatan_revisi') }}</textarea>

                </div>

            </div>


            <!-- =================================================
                 TOTAL
            ================================================= -->

            <div class="total-box">

                <div>

                    <div class="total-label">
                        Total Pembayaran
                    </div>

                    <div class="total-info">

                        <span id="jumlahText">
                            1
                        </span>

                        peserta × harga paket

                    </div>

                </div>


                <div
                    class="total-value"
                    id="totalBayar"
                >

                    Rp
                    {{ number_format(
                        $paket->harga_promo ?: $paket->harga_normal,
                        0,
                        ',',
                        '.'
                    ) }}

                </div>

            </div>


            <!-- =================================================
                 BUTTON
            ================================================= -->

            <div class="actions">


                <button
                    type="submit"
                    class="submit-btn"
                >

                    ✓
                    Pesan Sekarang

                </button>


                <a
                    href="/paket-wisata"
                    class="back-btn"
                >

                    ←
                    Kembali

                </a>


            </div>


        </form>


    </div>

</main>


<script>

    /*
    |--------------------------------------------------------------------------
    | DATA DASAR
    |--------------------------------------------------------------------------
    */

    const jumlahInput =
        document.getElementById(
            'jumlah_peserta'
        );


    const pesertaList =
        document.getElementById(
            'pesertaList'
        );


    const totalBayar =
        document.getElementById(
            'totalBayar'
        );


    const jumlahText =
        document.getElementById(
            'jumlahText'
        );


    const hargaPerOrang =
        {{ $paket->harga_promo ?: $paket->harga_normal }};


    const maxPeserta =
        {{ $jadwal->sisa_kuota }};


    /*
    |--------------------------------------------------------------------------
    | FORMAT RUPIAH
    |--------------------------------------------------------------------------
    */

    function formatRupiah(angka)
    {
        return new Intl.NumberFormat(
            'id-ID'
        ).format(angka);
    }


    /*
    |--------------------------------------------------------------------------
    | BUAT FORM PESERTA
    |--------------------------------------------------------------------------
    */

    function generatePeserta()
    {

        let jumlah =
            parseInt(
                jumlahInput.value
            ) || 1;


        if (jumlah < 1) {

            jumlah = 1;

            jumlahInput.value = 1;
        }


        if (jumlah > maxPeserta) {

            jumlah = maxPeserta;

            jumlahInput.value =
                maxPeserta;

            alert(
                'Jumlah peserta melebihi sisa kuota.'
            );
        }


        pesertaList.innerHTML = '';


        for (
            let i = 0;
            i < jumlah;
            i++
        ) {


            const card =
                document.createElement(
                    'div'
                );


            card.className =
                'peserta-card';


            card.innerHTML = `

                <div class="peserta-header">

                    <div class="peserta-number">

                        Peserta ${i + 1}

                    </div>

                    <div class="peserta-badge">

                        Data Peserta

                    </div>

                </div>


                <div class="peserta-grid">


                    <div class="form-group">

                        <label
                            class="form-label"
                        >
                            Nama Lengkap
                        </label>

                        <input
                            type="text"
                            name="peserta[${i}][nama_peserta]"
                            class="form-control"
                            placeholder="Nama lengkap peserta"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label
                            class="form-label"
                        >
                            NIK
                        </label>

                        <input
                            type="text"
                            name="peserta[${i}][nik]"
                            class="form-control"
                            placeholder="NIK peserta"
                        >

                    </div>


                    <div class="form-group">

                        <label
                            class="form-label"
                        >
                            Usia
                        </label>

                        <input
                            type="number"
                            name="peserta[${i}][usia]"
                            class="form-control"
                            placeholder="Usia"
                            min="1"
                            max="100"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label
                            class="form-label"
                        >
                            Kategori
                        </label>

                        <select
                            name="peserta[${i}][kategori]"
                            class="form-control"
                            required
                        >

                            <option value="">
                                Pilih kategori
                            </option>

                            <option value="dewasa">
                                Dewasa
                            </option>

                            <option value="anak">
                                Anak
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label
                            class="form-label"
                        >
                            Jenis Kelamin
                        </label>

                        <select
                            name="peserta[${i}][jenis_kelamin]"
                            class="form-control"
                            required
                        >

                            <option value="">
                                Pilih jenis kelamin
                            </option>

                            <option value="L">
                                Laki-laki
                            </option>

                            <option value="P">
                                Perempuan
                            </option>

                        </select>

                    </div>


                    <!-- =========================================
                         IDENTITAS PESERTA
                    ========================================== -->

                    <div class="form-group identitas-group">

                        <label
                            class="form-label"
                        >
                            Identitas / Tanda Pengenal
                        </label>

                        <input
                            type="file"
                            name="peserta[${i}][file_identitas]"
                            class="form-control"
                            accept=".jpg,.jpeg,.png,.pdf"
                            required
                        >

                        <div class="file-info">

                            Upload 1 identitas/tanda pengenal
                            peserta.
                            Format JPG, JPEG, PNG, atau PDF.
                            Maksimal 2 MB.

                        </div>

                    </div>


                </div>

            `;


            pesertaList.appendChild(
                card
            );

        }


        /*
        |--------------------------------------------------------------------------
        | UPDATE TOTAL
        |--------------------------------------------------------------------------
        */

        const total =
            hargaPerOrang * jumlah;


        totalBayar.innerText =
            'Rp ' +
            formatRupiah(total);


        jumlahText.innerText =
            jumlah;

    }


    /*
    |--------------------------------------------------------------------------
    | JUMLAH PESERTA BERUBAH
    |--------------------------------------------------------------------------
    */

    jumlahInput.addEventListener(
        'input',
        generatePeserta
    );


    /*
    |--------------------------------------------------------------------------
    | LOAD AWAL
    |--------------------------------------------------------------------------
    */

    generatePeserta();

</script>


</body>

</html>