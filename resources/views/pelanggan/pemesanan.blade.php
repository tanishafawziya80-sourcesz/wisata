<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

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
                    rgba(7, 48, 67, .80),
                    rgba(18, 60, 87, .92)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=90");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            padding-top: 110px;

            padding-bottom: 80px;
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
                rgba(18,60,87,.82);

            backdrop-filter: blur(20px);

            border-bottom:
                1px solid
                rgba(255,255,255,.15);

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
                rgba(255,255,255,.20);

            color: white;

            font-size: 12px;

            font-weight: 700;
        }


        .logout {

            padding: 10px 18px;

            border-radius: 25px;

            border: none;

            background: white;

            color: #123c57;

            font-weight: 700;

            cursor: pointer;
        }


        /* =========================
           CONTAINER
        ========================= */

        .container {

            width: 90%;

            max-width: 1000px;

            margin: auto;
        }


        .header {

            margin-bottom: 25px;
        }


        .small-title {

            color: #9ddcff;

            font-size: 11px;

            letter-spacing: 3px;

            font-weight: 700;

            margin-bottom: 10px;
        }


        .header h1 {

            color: white;

            font-size:
                clamp(38px, 6vw, 56px);

            margin-bottom: 10px;
        }


        .header p {

            color:
                rgba(255,255,255,.72);

            font-size: 14px;
        }


        /* =========================
           CARD
        ========================= */

        .card {

            padding: 32px;

            border-radius: 28px;

            background:
                rgba(255,255,255,.94);

            backdrop-filter: blur(20px);

            border:
                1px solid
                rgba(255,255,255,.6);

            box-shadow:
                0 30px 80px
                rgba(0,0,0,.25);
        }


        .card-title {

            color: #123c57;

            font-size: 22px;

            font-weight: 800;

            margin-bottom: 5px;
        }


        .card-subtitle {

            color: #78909c;

            font-size: 13px;

            margin-bottom: 22px;
        }


        /* =========================
           CUSTOMER
        ========================= */

        .customer-box {

            padding: 17px;

            border-radius: 16px;

            background: #f1faff;

            border: 1px solid #d5e8f0;

            margin-bottom: 20px;
        }


        .label-small {

            display: block;

            color: #78909c;

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 5px;
        }


        .customer-name {

            color: #123c57;

            font-size: 18px;

            font-weight: 800;
        }


        /* =========================
           INFO
        ========================= */

        .info-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 12px;

            margin-bottom: 25px;
        }


        .info-box {

            padding: 16px;

            border-radius: 14px;

            background: #f8fbfc;

            border: 1px solid #e1edf1;
        }


        .info-value {

            color: #183b4d;

            font-size: 14px;

            font-weight: 700;
        }


        /* =========================
           FORM
        ========================= */

        .form-section {

            padding-top: 22px;

            border-top:
                1px dashed
                #cbdce4;
        }


        .section-title {

            color: #123c57;

            font-size: 16px;

            font-weight: 800;

            margin-bottom: 18px;
        }


        .form-group {

            margin-bottom: 18px;
        }


        .form-label {

            display: block;

            color: #546e7a;

            font-size: 12px;

            font-weight: 700;

            margin-bottom: 7px;
        }


        .form-control {

            width: 100%;

            padding: 13px 15px;

            border-radius: 12px;

            border: 1px solid #d6e4e9;

            background: white;

            color: #183b4d;

            outline: none;

            font-size: 13px;
        }


        .form-control:focus {

            border-color: #78bfdc;

            box-shadow:
                0 0 0 3px
                rgba(119,189,219,.13);
        }


        /* =========================
           PESERTA
        ========================= */

        .peserta-container {

            margin-top: 25px;
        }


        .peserta-card {

            padding: 22px;

            border-radius: 20px;

            background:
                linear-gradient(
                    135deg,
                    #f1faff,
                    #f8fcfe
                );

            border: 1px solid #d5e8f0;

            margin-bottom: 16px;

            animation:
                fadeUp .4s ease both;
        }


        .peserta-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 18px;
        }


        .peserta-title {

            color: #123c57;

            font-size: 16px;

            font-weight: 800;
        }


        .peserta-badge {

            padding: 5px 10px;

            border-radius: 20px;

            background: #dff3fb;

            color: #176481;

            font-size: 10px;

            font-weight: 700;
        }


        .peserta-grid {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 14px;
        }


        .peserta-full {

            grid-column:
                1 / -1;
        }


        /* =========================
           TOTAL
        ========================= */

        .total-box {

            margin-top: 25px;

            padding: 20px;

            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    #eaf8fd,
                    #dff2f9
                );

            border: 1px solid #c7e5ef;

            display: flex;

            justify-content: space-between;

            align-items: center;
        }


        .total-label {

            color: #78909c;

            font-size: 11px;

            font-weight: 700;
        }


        .total-value {

            color: #123c57;

            font-size: 24px;

            font-weight: 850;
        }


        /* =========================
           BUTTON
        ========================= */

        .actions {

            display: flex;

            gap: 12px;

            margin-top: 22px;
        }


        .submit-btn,
        .back-btn {

            padding: 14px 22px;

            border-radius: 25px;

            font-size: 13px;

            font-weight: 800;

            cursor: pointer;

            text-decoration: none;

            text-align: center;
        }


        .submit-btn {

            flex: 1;

            border: none;

            background: #123c57;

            color: white;
        }


        .back-btn {

            background: white;

            color: #123c57;

            border:
                1px solid
                #d4e3e8;
        }


        /* =========================
           ALERT
        ========================= */

        .alert {

            padding: 14px;

            border-radius: 12px;

            margin-bottom: 20px;

            font-size: 12px;
        }


        .alert-error {

            background: #fff3f3;

            border: 1px solid #f2d0d0;

            color: #a33a3a;
        }


        /* =========================
           ANIMATION
        ========================= */

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


        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width:700px) {

            .navbar {

                padding: 0 5%;
            }


            .role {

                display: none;
            }


            .container {

                width: 92%;
            }


            .card {

                padding: 20px;
            }


            .info-grid,
            .peserta-grid {

                grid-template-columns: 1fr;
            }


            .peserta-full {

                grid-column: auto;
            }


            .total-box {

                flex-direction: column;

                align-items: flex-start;

                gap: 8px;
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


<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar">

    <a
        href="{{ route('pelanggan.dashboard') }}"
        class="logo"
    >
        FAWZATA<span> TRAVEL</span>
    </a>


    <div class="nav-right">

        <div class="role">
            PELANGGAN
        </div>


        <form
            action="{{ url('/logout') }}"
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


    <div class="header">

        <div class="small-title">
            FAWZATA TRAVEL • PEMESANAN
        </div>


        <h1>
            Pemesanan
        </h1>


        <p>
            Lengkapi data perjalanan dan data seluruh peserta.
        </p>

    </div>


    <div class="card">


        <div class="card-title">
            Detail Pemesanan
        </div>


        <div class="card-subtitle">
            Pastikan data perjalanan sudah benar sebelum melanjutkan.
        </div>


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


        <!-- =========================
             CUSTOMER
        ========================= -->

        <div class="customer-box">

            <span class="label-small">
                Nama Pelanggan
            </span>


            <div class="customer-name">

                {{ auth()->user()->nama_lengkap ?? '-' }}

            </div>

        </div>


        <!-- =========================
             INFO PAKET
        ========================= -->

        <div class="info-grid">


            <!-- NAMA PAKET -->

            <div class="info-box">

                <span class="label-small">
                    Paket Wisata
                </span>


                <div class="info-value">

                    {{ $paketWisata->nama_paket }}

                </div>

            </div>


            <!-- HARGA -->

            <div class="info-box">

                <span class="label-small">
                    Harga / Orang
                </span>


                <div class="info-value">

                    Rp
                    {{ number_format(
                        $paketWisata->harga_promo ?: $paketWisata->harga_normal,
                        0,
                        ',',
                        '.'
                    ) }}

                </div>

            </div>


            <!-- KEBERANGKATAN -->

            <div class="info-box">

                <span class="label-small">
                    Keberangkatan
                </span>


                <div class="info-value">

                    {{ \Carbon\Carbon::parse(
                        $jadwal->tgl_keberangkatan
                    )->format('d M Y') }}

                </div>

            </div>


            <!-- KEPULANGAN -->

            <div class="info-box">

                <span class="label-small">
                    Kepulangan
                </span>


                <div class="info-value">

                    {{ \Carbon\Carbon::parse(
                        $jadwal->tgl_kepulangan
                    )->format('d M Y') }}

                </div>

            </div>


            <!-- SISA KUOTA -->

            <div class="info-box">

                <span class="label-small">
                    Sisa Kuota
                </span>


                <div class="info-value">

                    {{ $jadwal->sisa_kuota }} peserta

                </div>

            </div>


        </div>


        <!-- =========================
             FORM PEMESANAN
        ========================= -->

        <form
            action="{{ route('pelanggan.pemesanan.store') }}"
            method="POST"
        >

            @csrf


            <input
                type="hidden"
                name="id_jadwal"
                value="{{ $jadwal->id_jadwal }}"
            >


            <div class="form-section">


                <div class="section-title">
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
                        max="{{ $jadwal->sisa_kuota }}"
                        value="{{ old('jumlah_peserta', 1) }}"
                        required
                    >

                </div>


                <!-- =========================
                     DATA PESERTA
                ========================= -->

                <div class="peserta-container">


                    <div class="section-title">
                        Data Peserta
                    </div>


                    <div id="pesertaList"></div>

                </div>


                <!-- =========================
                     CATATAN
                ========================= -->

                <div class="form-group">

                    <label
                        for="catatan_revisi"
                        class="form-label"
                    >
                        Catatan Tambahan
                    </label>


                    <textarea
                        name="catatan_revisi"
                        id="catatan_revisi"
                        class="form-control"
                        rows="4"
                        placeholder="Tambahkan catatan jika diperlukan..."
                    >{{ old('catatan_revisi') }}</textarea>

                </div>


                <!-- =========================
                     TOTAL
                ========================= -->

                <div class="total-box">

                    <div class="total-label">
                        TOTAL PEMBAYARAN
                    </div>


                    <div class="total-value">

                        Rp

                        <span id="totalBayar">
                            0
                        </span>

                    </div>

                </div>


                <!-- =========================
                     ACTION
                ========================= -->

                <div class="actions">


                    <a
                        href="{{ route('pelanggan.pemesanan.index') }}"
                        class="back-btn"
                    >
                        ← Kembali
                    </a>


                    <button
                        type="submit"
                        class="submit-btn"
                    >
                        Lanjutkan Pemesanan →
                    </button>


                </div>


            </div>

        </form>


    </div>

</main>


<script>

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


    /*
    |--------------------------------------------------------------------------
    | HARGA PAKET
    |--------------------------------------------------------------------------
    |
    | PERBAIKAN:
    | Sebelumnya menggunakan $paket.
    | Sekarang menggunakan $paketWisata.
    |
    */

    const harga =
        {{ $paketWisata->harga_promo ?: $paketWisata->harga_normal }};


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


        const max =
            parseInt(
                jumlahInput.max
            );


        if (jumlah < 1) {

            jumlah = 1;

            jumlahInput.value = 1;

        }


        if (jumlah > max) {

            jumlah = max;

            jumlahInput.value = max;

        }


        pesertaList.innerHTML = "";


        for (
            let i = 0;
            i < jumlah;
            i++
        ) {


            pesertaList.innerHTML += `

                <div class="peserta-card">

                    <div class="peserta-header">

                        <div class="peserta-title">
                            Peserta ${i + 1}
                        </div>

                        <div class="peserta-badge">
                            DATA PESERTA
                        </div>

                    </div>


                    <div class="peserta-grid">


                        <div class="form-group peserta-full">

                            <label class="form-label">
                                Nama Lengkap
                            </label>


                            <input
                                type="text"
                                name="peserta[${i}][nama_peserta]"
                                class="form-control"
                                placeholder="Masukkan nama lengkap peserta"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label class="form-label">
                                NIK
                            </label>


                            <input
                                type="text"
                                name="peserta[${i}][nik]"
                                class="form-control"
                                placeholder="Masukkan NIK"
                            >

                        </div>


                        <div class="form-group">

                            <label class="form-label">
                                Usia
                            </label>


                            <input
                                type="number"
                                name="peserta[${i}][usia]"
                                class="form-control usia-input"
                                min="1"
                                max="120"
                                placeholder="Usia"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label class="form-label">
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

                            <label class="form-label">
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


                    </div>

                </div>

            `;

        }


        updateTotal();

    }


    /*
    |--------------------------------------------------------------------------
    | HITUNG TOTAL
    |--------------------------------------------------------------------------
    */

    function updateTotal()
    {

        const jumlah =
            parseInt(
                jumlahInput.value
            ) || 0;


        const total =
            harga * jumlah;


        totalBayar.innerText =
            formatRupiah(total);

    }


    /*
    |--------------------------------------------------------------------------
    | EVENT JUMLAH PESERTA
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