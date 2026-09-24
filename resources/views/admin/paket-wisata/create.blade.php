<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Paket Wisata - WISATA.</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {
            min-height: 100vh;
            color: white;

            background:
                linear-gradient(
                    rgba(3, 35, 52, 0.72),
                    rgba(5, 48, 67, 0.84)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2000&q=85");

            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            padding: 40px 20px;
        }

        .container {
            width: 100%;
            max-width: 900px;
            margin: auto;
        }

        /* HEADER */

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 30px;
        }

        .logo {
            color: white;
            text-decoration: none;

            font-size: 28px;
            font-weight: 800;

            letter-spacing: 2px;
        }

        .logo span {
            color: #9ddcff;
        }

        .back {
            display: inline-flex;
            align-items: center;

            gap: 7px;

            padding: 11px 18px;

            border-radius: 25px;

            color: white;
            text-decoration: none;

            background: rgba(255, 255, 255, 0.12);

            border:
                1px solid
                rgba(255, 255, 255, 0.22);

            backdrop-filter: blur(15px);

            transition: 0.3s;
        }

        .back:hover {
            transform: translateY(-3px);

            background:
                rgba(255, 255, 255, 0.22);
        }

        /* CARD */

        .card {
            padding: 42px;

            border-radius: 32px;

            background:
                rgba(255, 255, 255, 0.13);

            border:
                1px solid
                rgba(255, 255, 255, 0.23);

            backdrop-filter: blur(22px);

            -webkit-backdrop-filter: blur(22px);

            box-shadow:
                0 30px 80px
                rgba(0, 0, 0, 0.28);

            animation:
                fadeUp 0.7s ease;
        }

        .small-title {
            font-size: 12px;

            letter-spacing: 4px;

            text-transform: uppercase;

            color: #a7e2ff;

            margin-bottom: 10px;
        }

        h1 {
            font-size:
                clamp(32px, 5vw, 48px);

            line-height: 1.1;

            margin-bottom: 10px;
        }

        .subtitle {
            color:
                rgba(255, 255, 255, 0.70);

            line-height: 1.7;

            margin-bottom: 35px;
        }

        /* ERROR */

        .error {
            margin-bottom: 25px;

            padding: 16px 18px;

            border-radius: 16px;

            background:
                rgba(255, 80, 80, 0.15);

            border:
                1px solid
                rgba(255, 130, 130, 0.28);

            color: #ffe3e3;

            line-height: 1.7;
        }

        /* FORM */

        .form-group {
            margin-bottom: 23px;
        }

        label {
            display: block;

            margin-bottom: 9px;

            font-size: 13px;

            font-weight: 700;

            letter-spacing: 0.3px;

            color:
                rgba(255, 255, 255, 0.92);
        }

        input,
        textarea,
        select {
            width: 100%;

            padding: 14px 16px;

            border:
                1px solid
                rgba(255, 255, 255, 0.35);

            outline: none;

            border-radius: 14px;

            background:
                rgba(255, 255, 255, 0.92);

            color: #17384d;

            font-size: 14px;

            transition: 0.25s;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color:
                rgba(157, 220, 255, 0.9);

            box-shadow:
                0 0 0 4px
                rgba(157, 220, 255, 0.12);
        }

        textarea {
            min-height: 130px;

            resize: vertical;

            line-height: 1.6;
        }

        /* GRID */

        .form-grid {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 20px;
        }

        /* FOTO */

        .photo-box {
            padding: 25px;

            border-radius: 22px;

            background:
                rgba(255, 255, 255, 0.08);

            border:
                1px dashed
                rgba(255, 255, 255, 0.40);

            margin-bottom: 30px;
        }

        .photo-title {
            font-size: 13px;

            font-weight: 700;

            margin-bottom: 10px;

            color:
                rgba(255, 255, 255, 0.92);
        }

        .photo-info {
            font-size: 12px;

            color:
                rgba(255, 255, 255, 0.60);

            margin-top: 8px;
        }

        /* PRICE */

        .price-note {
            margin-top: 7px;

            font-size: 11px;

            color:
                rgba(255, 255, 255, 0.55);
        }

        /* BUTTON */

        .btn {
            width: 100%;

            margin-top: 10px;

            padding: 15px 20px;

            border: none;

            border-radius: 28px;

            background:
                rgba(255, 255, 255, 0.94);

            color: #123c57;

            font-size: 15px;

            font-weight: 800;

            cursor: pointer;

            transition: 0.3s;

            box-shadow:
                0 10px 30px
                rgba(0, 0, 0, 0.12);
        }

        .btn:hover {
            transform: translateY(-3px);

            background: white;

            box-shadow:
                0 16px 35px
                rgba(0, 0, 0, 0.22);
        }

        .cancel-btn {
            display: block;

            width: 100%;

            margin-top: 12px;

            padding: 14px 20px;

            border-radius: 28px;

            text-align: center;

            text-decoration: none;

            color: white;

            background:
                rgba(255, 255, 255, 0.10);

            border:
                1px solid
                rgba(255, 255, 255, 0.20);

            transition: 0.3s;
        }

        .cancel-btn:hover {
            background:
                rgba(255, 255, 255, 0.18);

            transform: translateY(-2px);
        }

        /* ANIMATION */

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

        /* RESPONSIVE */

        @media (max-width: 700px) {

            body {
                padding: 25px 15px;
            }

            .card {
                padding: 25px;

                border-radius: 25px;
            }

            .header {
                align-items: flex-start;

                gap: 15px;
            }

            .logo {
                font-size: 24px;
            }

            .back {
                font-size: 12px;

                padding: 9px 13px;
            }

            .form-grid {
                grid-template-columns: 1fr;

                gap: 0;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- HEADER -->

    <div class="header">

        <a
            href="/admin/dashboard"
            class="logo"
        >
            WISATA<span>.</span>
        </a>

        <a
            href="/admin/paket-wisata"
            class="back"
        >
            ← Kembali
        </a>

    </div>


    <!-- CARD -->

    <div class="card">

        <div class="small-title">
            Admin Management
        </div>

        <h1>
            Tambah Paket Wisata
        </h1>

        <p class="subtitle">
            Tambahkan informasi paket wisata
            baru ke dalam sistem WISATA.
        </p>


        <!-- ERROR -->

        @if ($errors->any())

            <div class="error">

                @foreach ($errors->all() as $error)

                    <div>
                        • {{ $error }}
                    </div>

                @endforeach

            </div>

        @endif


        <!-- FORM -->

        <form
            action="/admin/paket-wisata"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf


            <!-- FOTO -->

            <div class="photo-box">

                <div class="photo-title">
                    Foto Paket
                </div>

                <input
                    type="file"
                    name="foto_paket"
                    accept="image/jpeg,image/png,image/webp"
                >

                <div class="photo-info">
                    Format JPG, JPEG, PNG atau WEBP.
                    Maksimal 2 MB.
                </div>

            </div>


            <!-- NAMA PAKET -->

            <div class="form-group">

                <label for="nama_paket">
                    Nama Paket
                </label>

                <input
                    type="text"
                    id="nama_paket"
                    name="nama_paket"
                    value="{{ old('nama_paket') }}"
                    placeholder="Contoh: Bali Paradise"
                    required
                >

            </div>


            <!-- DESKRIPSI -->

            <div class="form-group">

                <label for="deskripsi">
                    Deskripsi
                </label>

                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    placeholder="Masukkan deskripsi paket wisata"
                    required
                >{{ old('deskripsi') }}</textarea>

            </div>


            <!-- AKOMODASI + ARMADA -->

            <div class="form-grid">

                <div class="form-group">

                    <label for="akomodasi">
                        Akomodasi
                    </label>

                    <input
                        type="text"
                        id="akomodasi"
                        name="akomodasi"
                        value="{{ old('akomodasi') }}"
                        placeholder="Contoh: Hotel"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="armada_transport">
                        Armada Transport
                    </label>

                    <input
                        type="text"
                        id="armada_transport"
                        name="armada_transport"
                        value="{{ old('armada_transport') }}"
                        placeholder="Contoh: Bus Pariwisata"
                        required
                    >

                </div>

            </div>


            <!-- HARGA -->

            <div class="form-grid">

                <div class="form-group">

                    <label for="harga_normal">
                        Harga Normal
                    </label>

                    <input
                        type="number"
                        id="harga_normal"
                        name="harga_normal"
                        value="{{ old('harga_normal') }}"
                        placeholder="Contoh: 5000000"
                        min="0"
                        required
                    >

                    <div class="price-note">
                        Masukkan harga dalam Rupiah.
                    </div>

                </div>


                <div class="form-group">

                    <label for="harga_promo">
                        Harga Promo
                    </label>

                    <input
                        type="number"
                        id="harga_promo"
                        name="harga_promo"
                        value="{{ old('harga_promo') }}"
                        placeholder="Contoh: 4500000"
                        min="0"
                    >

                    <div class="price-note">
                        Kosongkan jika tidak ada promo.
                    </div>

                </div>

            </div>


            <!-- STATUS -->

            <div class="form-group">

                <label for="status">
                    Status
                </label>

                <select
                    id="status"
                    name="status"
                    required
                >

                    <option value="">
                        -- Pilih Status --
                    </option>

                    <option
                        value="tersedia"
                        {{ old('status') == 'tersedia' ? 'selected' : '' }}
                    >
                        Tersedia
                    </option>

                    <option
                        value="tidak tersedia"
                        {{ old('status') == 'tidak tersedia' ? 'selected' : '' }}
                    >
                        Tidak Tersedia
                    </option>

                </select>

            </div>


            <!-- BUTTON -->

            <button
                type="submit"
                class="btn"
            >
                ✓ Simpan Paket
            </button>


            <a
                href="/admin/paket-wisata"
                class="cancel-btn"
            >
                Batal
            </a>

        </form>

    </div>

</div>

</body>
</html>