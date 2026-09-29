<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

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
                    135deg,
                    #e8f7ff 0%,
                    #f7fbff 45%,
                    #dff5ff 100%
                );

            padding: 40px 20px;
        }

        .container {
            width: 100%;
            max-width: 1100px;
            margin: auto;
        }

        .glass {
            background: rgba(
                255,
                255,
                255,
                0.72
            );

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            border:
                1px solid
                rgba(
                    255,
                    255,
                    255,
                    0.8
                );

            box-shadow:
                0 20px 50px
                rgba(
                    40,
                    100,
                    130,
                    0.12
                );

            border-radius: 24px;
        }

        .header {
            padding: 30px;
            margin-bottom: 25px;

            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .brand-icon {
            width: 54px;
            height: 54px;
            border-radius: 16px;

            display: flex;
            align-items: center;
            justify-content: center;

            background:
                linear-gradient(
                    135deg,
                    #2c9bc7,
                    #166987
                );

            color: white;
            font-size: 23px;
            font-weight: 700;

            box-shadow:
                0 8px 20px
                rgba(
                    22,
                    105,
                    135,
                    0.25
                );
        }

        .brand h1 {
            font-size: 24px;
            font-weight: 700;
            color: #164e66;
        }

        .brand p {
            margin-top: 4px;
            font-size: 13px;
            color: #6b8794;
        }

        .back-btn {
            text-decoration: none;

            padding: 11px 18px;
            border-radius: 12px;

            background: rgba(
                255,
                255,
                255,
                0.75
            );

            color: #17627d;
            font-size: 14px;
            font-weight: 600;

            border:
                1px solid
                rgba(
                    30,
                    120,
                    150,
                    0.12
                );

            transition: 0.25s;
        }

        .back-btn:hover {
            transform: translateY(-2px);
            background: white;
        }

        .card {
            padding: 32px;
            margin-bottom: 25px;
        }

        .section {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 700;
            color: #164e66;
            margin-bottom: 8px;
            padding-bottom: 12px;

            border-bottom:
                1px solid
                rgba(
                    35,
                    110,
                    140,
                    0.12
                );
        }

        .section-description {
            color: #718892;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .package-box {
            display: grid;
            grid-template-columns:
                1fr 1fr;

            gap: 20px;
            padding: 22px;
            border-radius: 18px;

            background:
                rgba(
                    235,
                    249,
                    255,
                    0.7
                );

            border:
                1px solid
                rgba(
                    30,
                    120,
                    150,
                    0.1
                );
        }

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .info-label {
            font-size: 12px;
            color: #78919c;
        }

        .info-value {
            font-size: 15px;
            font-weight: 650;
            color: #174f66;
        }

        .form-grid {
            display: grid;
            grid-template-columns:
                1fr 1fr;

            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            font-size: 13px;
            font-weight: 600;
            color: #315f70;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 13px 15px;

            border-radius: 12px;

            border:
                1px solid
                rgba(
                    40,
                    110,
                    140,
                    0.16
                );

            background:
                rgba(
                    255,
                    255,
                    255,
                    0.82
                );

            color: #234c5d;
            outline: none;
            font-size: 14px;
            transition: 0.2s;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #4aa8ca;

            box-shadow:
                0 0 0 3px
                rgba(
                    74,
                    168,
                    202,
                    0.12
                );
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .peserta-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .peserta-card {
            padding: 24px;
            border-radius: 18px;

            background:
                rgba(
                    255,
                    255,
                    255,
                    0.62
                );

            border:
                1px solid
                rgba(
                    35,
                    110,
                    140,
                    0.1
                );
        }

        .peserta-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }

        .peserta-title {
            font-size: 15px;
            font-weight: 700;
            color: #195b73;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 999px;

            background:
                rgba(
                    53,
                    156,
                    192,
                    0.1
                );

            color: #277d9d;
            font-size: 11px;
            font-weight: 700;
        }

        .file-note {
            font-size: 11px;
            color: #80949c;
            margin-top: 2px;
        }

        /*
        |--------------------------------------------------------------------------
        | PEMBAYARAN
        |--------------------------------------------------------------------------
        */

        .payment-grid {
            display: grid;

            grid-template-columns:
                repeat(
                    3,
                    1fr
                );

            gap: 16px;
            margin-top: 18px;
        }

        .payment-option {
            position: relative;
            cursor: pointer;
            display: block;
        }

        .payment-option input {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .payment-card {
            min-height: 110px;
            padding: 20px;
            border-radius: 18px;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            text-align: center;
            gap: 7px;

            background:
                rgba(
                    255,
                    255,
                    255,
                    0.68
                );

            border:
                2px solid
                rgba(
                    50,
                    120,
                    145,
                    0.1
                );

            transition:
                0.25s ease;
        }

        .payment-option:hover
        .payment-card {
            transform: translateY(-2px);

            border-color:
                rgba(
                    43,
                    151,
                    190,
                    0.35
                );
        }

        .payment-option input:checked
        + .payment-card {
            border-color: #2497bf;

            background:
                linear-gradient(
                    135deg,
                    rgba(
                        229,
                        248,
                        255,
                        0.95
                    ),
                    rgba(
                        245,
                        252,
                        255,
                        0.9
                    )
                );

            box-shadow:
                0 10px 25px
                rgba(
                    36,
                    151,
                    191,
                    0.12
                );
        }

        .payment-name {
            font-size: 17px;
            font-weight: 750;
            color: #175c75;
        }

        .payment-desc {
            font-size: 12px;
            color: #7c919a;
        }

        /*
        |--------------------------------------------------------------------------
        | TOTAL
        |--------------------------------------------------------------------------
        */

        .total-box {
            padding: 24px;
            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    rgba(
                        228,
                        247,
                        255,
                        0.92
                    ),
                    rgba(
                        248,
                        253,
                        255,
                        0.9
                    )
                );

            border:
                1px solid
                rgba(
                    35,
                    130,
                    165,
                    0.12
                );

            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .total-label {
            color: #5e7b87;
            font-size: 13px;
        }

        .total-price {
            font-size: 26px;
            font-weight: 800;
            color: #14627e;
        }

        .submit-area {
            display: flex;
            justify-content: flex-end;
            margin-top: 25px;
        }

        .submit-btn {
            border: none;
            cursor: pointer;

            padding: 14px 28px;
            border-radius: 14px;

            background:
                linear-gradient(
                    135deg,
                    #2497bf,
                    #176986
                );

            color: white;
            font-size: 14px;
            font-weight: 700;

            box-shadow:
                0 10px 25px
                rgba(
                    24,
                    105,
                    134,
                    0.22
                );

            transition: 0.25s;
        }

        .submit-btn:hover {
            transform: translateY(-2px);

            box-shadow:
                0 14px 30px
                rgba(
                    24,
                    105,
                    134,
                    0.28
                );
        }

        .error-box {
            padding: 15px 18px;
            border-radius: 13px;
            margin-bottom: 20px;

            background:
                rgba(
                    255,
                    235,
                    235,
                    0.9
                );

            border:
                1px solid
                rgba(
                    200,
                    80,
                    80,
                    0.15
                );

            color: #a34b4b;
            font-size: 13px;
        }

        .error-box ul {
            padding-left: 20px;
        }

        .success-box {
            padding: 15px 18px;
            border-radius: 13px;
            margin-bottom: 20px;

            background:
                rgba(
                    230,
                    250,
                    239,
                    0.9
                );

            border:
                1px solid
                rgba(
                    60,
                    160,
                    100,
                    0.15
                );

            color: #34704a;
            font-size: 13px;
        }

        @media (
            max-width: 768px
        ) {

            body {
                padding: 20px 12px;
            }

            .header {
                padding: 22px;
                flex-direction: column;
                align-items: flex-start;
            }

            .card {
                padding: 22px;
            }

            .package-box,
            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }

            .payment-grid {
                grid-template-columns: 1fr;
            }

            .total-box {
                flex-direction: column;
                align-items: flex-start;
            }

            .submit-area {
                justify-content: stretch;
            }

            .submit-btn {
                width: 100%;
            }
        }

    </style>

</head>

<body>

<div class="container">

    <!-- =================================================
         HEADER
    ================================================== -->

    <div class="header glass">

        <div class="brand">

            <div class="brand-icon">
                F
            </div>

            <div>

                <h1>
                    Pemesanan Wisata
                </h1>

                <p>
                    FAWZATA TRAVEL
                </p>

            </div>

        </div>

        <a
            href="{{ route('pelanggan.pemesanan.index') }}"
            class="back-btn"
        >
            ← Kembali
        </a>

    </div>


    <!-- =================================================
         ERROR VALIDATION
    ================================================== -->

    @if ($errors->any())

        <div class="error-box glass">

            <strong>
                Terjadi kesalahan:
            </strong>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    <!-- =================================================
         SUCCESS
    ================================================== -->

    @if (session('success'))

        <div class="success-box glass">

            {{ session('success') }}

        </div>

    @endif


    <!-- =================================================
         FORM PEMESANAN
    ================================================== -->

    <form
        action="{{ route('pelanggan.pemesanan.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf

        {{-- INI PERBAIKANNYA --}}
        <input
            type="hidden"
            name="id_jadwal"
            value="{{ $jadwal->id_jadwal }}"
        >


        <div class="card glass">

            <!-- =================================================
                 INFORMASI PAKET
            ================================================== -->

            <div class="section">

                <div class="section-title">
                    Informasi Paket Wisata
                </div>

                <div class="section-description">
                    Informasi paket wisata yang akan Anda pesan.
                </div>

                <div class="package-box">

                    <div class="info-item">

                        <span class="info-label">
                            Nama Paket
                        </span>

                        <span class="info-value">
                            {{ $paket->nama_paket }}
                        </span>

                    </div>

                    <div class="info-item">

                        <span class="info-label">
                            Jadwal Keberangkatan
                        </span>

                        <span class="info-value">
                            {{ \Carbon\Carbon::parse($jadwal->tgl_keberangkatan)->translatedFormat('d F Y') }}
                        </span>

                    </div>

                    <div class="info-item">

                        <span class="info-label">
                            Harga per Peserta
                        </span>

                        <span class="info-value">
                            Rp {{ number_format($harga, 0, ',', '.') }}
                        </span>

                    </div>

                    <div class="info-item">

                        <span class="info-label">
                            Sisa Kuota
                        </span>

                        <span class="info-value">
                            {{ $jadwal->sisa_kuota }}
                            peserta
                        </span>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 DATA PEMESAN
            ================================================== -->

            <div class="section">

                <div class="section-title">
                    Data Pemesan
                </div>

                <div class="section-description">
                    Data pelanggan yang melakukan pemesanan.
                </div>

                <div class="form-grid">

                    <div class="form-group">

                        <label>
                            Nama Lengkap
                        </label>

                        <input
                            type="text"
                            value="{{ $pelanggan->nama_lengkap }}"
                            readonly
                        >

                    </div>

                    <div class="form-group">

                        <label>
                            Email
                        </label>

                        <input
                            type="text"
                            value="{{ $pelanggan->email }}"
                            readonly
                        >

                    </div>

                    <div class="form-group">

                        <label>
                            Nomor Telepon
                        </label>

                        <input
                            type="text"
                            value="{{ $pelanggan->no_telepon ?? '-' }}"
                            readonly
                        >

                    </div>

                    <div class="form-group">

                        <label>
                            Jumlah Peserta
                        </label>

                        <input
                            type="number"
                            id="jumlah_peserta"
                            name="jumlah_peserta"
                            min="1"
                            max="{{ $jadwal->sisa_kuota }}"
                            value="{{ old('jumlah_peserta', 1) }}"
                            required
                        >

                    </div>

                </div>

            </div>


            <!-- =================================================
                 DATA PESERTA
            ================================================== -->

            <div class="section">

                <div class="section-title">
                    Data Peserta
                </div>

                <div class="section-description">
                    Isi data seluruh peserta yang akan mengikuti perjalanan wisata.
                </div>

                <div
                    id="peserta-container"
                    class="peserta-list"
                >
                </div>

            </div>


            <!-- =================================================
                 CATATAN
            ================================================== -->

            <div class="section">

                <div class="section-title">
                    Catatan Pemesanan
                </div>

                <div class="section-description">
                    Tambahkan catatan jika ada informasi khusus mengenai pemesanan.
                </div>

                <div class="form-group">

                    <label for="catatan_revisi">
                        Catatan
                    </label>

                    <textarea
                        name="catatan_revisi"
                        id="catatan_revisi"
                        placeholder="Tulis catatan pemesanan jika diperlukan..."
                    >{{ old('catatan_revisi') }}</textarea>

                </div>

            </div>


            <!-- =================================================
                 PEMBAYARAN
            ================================================== -->

            <div class="section">

                <div class="section-title">
                    Pembayaran
                </div>

                <div class="section-description">
                    Pilih metode pembayaran yang akan digunakan untuk pemesanan ini.
                </div>

                <div class="payment-grid">

                    <!-- QRIS -->

                    <label class="payment-option">

                        <input
                            type="radio"
                            name="metode_pembayaran"
                            value="QRIS"
                            {{ old('metode_pembayaran') === 'QRIS' ? 'checked' : '' }}
                            required
                        >

                        <span class="payment-card">

                            <span class="payment-name">
                                QRIS
                            </span>

                            <span class="payment-desc">
                                Pembayaran melalui QRIS
                            </span>

                        </span>

                    </label>


                    <!-- OVO -->

                    <label class="payment-option">

                        <input
                            type="radio"
                            name="metode_pembayaran"
                            value="OVO"
                            {{ old('metode_pembayaran') === 'OVO' ? 'checked' : '' }}
                        >

                        <span class="payment-card">

                            <span class="payment-name">
                                OVO
                            </span>

                            <span class="payment-desc">
                                Pembayaran melalui OVO
                            </span>

                        </span>

                    </label>


                    <!-- DANA -->

                    <label class="payment-option">

                        <input
                            type="radio"
                            name="metode_pembayaran"
                            value="DANA"
                            {{ old('metode_pembayaran') === 'DANA' ? 'checked' : '' }}
                        >

                        <span class="payment-card">

                            <span class="payment-name">
                                DANA
                            </span>

                            <span class="payment-desc">
                                Pembayaran melalui DANA
                            </span>

                        </span>

                    </label>

                </div>

            </div>


            <!-- =================================================
                 TOTAL
            ================================================== -->

            <div class="section">

                <div class="section-title">
                    Total Pembayaran
                </div>

                <div class="total-box">

                    <div>

                        <div class="total-label">
                            Total peserta
                        </div>

                        <div
                            id="total-peserta"
                            class="info-value"
                        >
                            1 peserta
                        </div>

                    </div>

                    <div>

                        <div class="total-label">
                            Total pembayaran
                        </div>

                        <div
                            id="total-harga"
                            class="total-price"
                        >
                            Rp {{ number_format($harga, 0, ',', '.') }}
                        </div>

                    </div>

                </div>

                <div class="submit-area">

                    <button
                        type="submit"
                        class="submit-btn"
                    >
                        ✓ Pesan Sekarang
                    </button>

                </div>

            </div>

        </div>

    </form>

</div>


<!-- =================================================
     JAVASCRIPT
================================================== -->

<script>

    const jumlahPeserta =
        document.getElementById(
            'jumlah_peserta'
        );

    const pesertaContainer =
        document.getElementById(
            'peserta-container'
        );

    const totalPeserta =
        document.getElementById(
            'total-peserta'
        );

    const totalHarga =
        document.getElementById(
            'total-harga'
        );

    const hargaPerPeserta =
        {{ (float) $harga }};


    /*
    |--------------------------------------------------------------------------
    | FORMAT RUPIAH
    |--------------------------------------------------------------------------
    */

    function formatRupiah(
        angka
    ) {

        return new Intl.NumberFormat(
            'id-ID'
        ).format(angka);

    }


    /*
    |--------------------------------------------------------------------------
    | BUAT FORM PESERTA
    |--------------------------------------------------------------------------
    */

    function generatePeserta() {

        let jumlah =
            parseInt(
                jumlahPeserta.value
            ) || 1;

        const max =
            parseInt(
                jumlahPeserta.max
            ) || 1;

        if (jumlah < 1) {

            jumlah = 1;

            jumlahPeserta.value = 1;

        }

        if (jumlah > max) {

            jumlah = max;

            jumlahPeserta.value = max;

        }

        pesertaContainer.innerHTML = '';

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

                    <div class="peserta-title">
                        Peserta ${i + 1}
                    </div>

                    <div class="badge">
                        DATA PESERTA
                    </div>

                </div>

                <div class="form-grid">

                    <div class="form-group full">

                        <label>
                            Nama Peserta
                        </label>

                        <input
                            type="text"
                            name="peserta[${i}][nama_peserta]"
                            placeholder="Masukkan nama lengkap peserta"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label>
                            NIK
                        </label>

                        <input
                            type="text"
                            name="peserta[${i}][nik]"
                            placeholder="Masukkan NIK"
                        >

                    </div>

                    <div class="form-group">

                        <label>
                            Usia
                        </label>

                        <input
                            type="number"
                            name="peserta[${i}][usia]"
                            min="1"
                            max="100"
                            placeholder="Usia"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label>
                            Kategori
                        </label>

                        <select
                            name="peserta[${i}][kategori]"
                            required
                        >

                            <option value="dewasa">
                                Dewasa
                            </option>

                            <option value="anak">
                                Anak
                            </option>

                        </select>

                    </div>

                    <div class="form-group">

                        <label>
                            Jenis Kelamin
                        </label>

                        <select
                            name="peserta[${i}][jenis_kelamin]"
                            required
                        >

                            <option value="L">
                                Laki-laki
                            </option>

                            <option value="P">
                                Perempuan
                            </option>

                        </select>

                    </div>

                    <div class="form-group full">

                        <label>
                            File Identitas
                        </label>

                        <input
                            type="file"
                            name="peserta[${i}][file_identitas]"
                            accept=".jpg,.jpeg,.png,.pdf"
                            required
                        >

                        <span class="file-note">
                            Format JPG, JPEG, PNG, atau PDF. Maksimal 5 MB.
                        </span>

                    </div>

                </div>

            `;

            pesertaContainer.appendChild(
                card
            );

        }


        /*
        |--------------------------------------------------------------------------
        | UPDATE TOTAL
        |--------------------------------------------------------------------------
        */

        totalPeserta.textContent =
            jumlah +
            ' peserta';

        totalHarga.textContent =
            'Rp ' +
            formatRupiah(
                hargaPerPeserta *
                jumlah
            );

    }


    /*
    |--------------------------------------------------------------------------
    | EVENT JUMLAH PESERTA
    |--------------------------------------------------------------------------
    */

    jumlahPeserta.addEventListener(
        'input',
        generatePeserta
    );

    jumlahPeserta.addEventListener(
        'change',
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