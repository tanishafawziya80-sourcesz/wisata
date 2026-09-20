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

            background:
                linear-gradient(
                    rgba(0, 31, 52, 0.55),
                    rgba(0, 31, 52, 0.65)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2000&q=85");

            background-size: cover;
            background-position: center;

            color: white;

            padding: 100px 20px;
        }

        .container {
            width: 100%;
            max-width: 850px;
            margin: auto;
        }

        .back {
            display: inline-block;

            margin-bottom: 20px;

            color: white;
            text-decoration: none;

            font-size: 14px;
            font-weight: 600;

            transition: .3s;
        }

        .back:hover {
            transform: translateX(-4px);
        }

        .card {

            padding: 40px;

            border-radius: 30px;

            background: rgba(255,255,255,.14);

            border: 1px solid rgba(255,255,255,.28);

            backdrop-filter: blur(20px);

            -webkit-backdrop-filter: blur(20px);

            box-shadow:
                0 25px 70px rgba(0,0,0,.25);
        }

        .title {
            margin-bottom: 30px;
        }

        .title span {

            display: block;

            margin-bottom: 8px;

            font-size: 12px;

            letter-spacing: 4px;

            text-transform: uppercase;

            opacity: .8;
        }

        .title h1 {

            font-size: 38px;

            margin-bottom: 8px;
        }

        .title p {

            color: rgba(255,255,255,.8);

            line-height: 1.6;
        }

        .form-group {

            margin-bottom: 20px;
        }

        label {

            display: block;

            margin-bottom: 8px;

            font-size: 14px;

            font-weight: 600;
        }

        input,
        textarea,
        select {

            width: 100%;

            padding: 13px 15px;

            border: none;

            outline: none;

            border-radius: 13px;

            background: rgba(255,255,255,.92);

            color: #333;

            font-size: 14px;
        }

        textarea {

            min-height: 120px;

            resize: vertical;
        }

        select {
            cursor: pointer;
        }

        .error {

            margin-bottom: 20px;

            padding: 12px 15px;

            border-radius: 12px;

            background: rgba(255,0,0,.20);

            border: 1px solid rgba(255,100,100,.5);

            font-size: 13px;
        }

        .error ul {
            padding-left: 18px;
        }

        .btn {

            width: 100%;

            padding: 14px;

            border: none;

            border-radius: 13px;

            background: white;

            color: #123c57;

            font-weight: 800;

            font-size: 15px;

            cursor: pointer;

            transition: .3s;
        }

        .btn:hover {

            transform: translateY(-3px);

            box-shadow:
                0 12px 30px rgba(0,0,0,.20);
        }

        @media (max-width: 600px) {

            .card {
                padding: 28px 22px;
            }

            .title h1 {
                font-size: 30px;
            }

        }

    </style>

</head>

<body>

<div class="container">

    <a href="/admin/dashboard" class="back">
        ← Kembali ke Dashboard
    </a>

    <div class="card">

        <div class="title">

            <span>
                WISATA. • ADMIN
            </span>

            <h1>
                Tambah Paket Wisata
            </h1>

            <p>
                Masukkan informasi paket wisata baru
                untuk ditampilkan kepada pelanggan.
            </p>

        </div>


        @if ($errors->any())

            <div class="error">

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form
            action="/admin/paket-wisata"
            method="POST"
        >

            @csrf


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


            <div class="form-group">

                <label for="deskripsi">
                    Deskripsi
                </label>

                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    placeholder="Deskripsi paket wisata"
                    required
                >{{ old('deskripsi') }}</textarea>

            </div>


            <div class="form-group">

                <label for="akomodasi">
                    Akomodasi
                </label>

                <input
                    type="text"
                    id="akomodasi"
                    name="akomodasi"
                    value="{{ old('akomodasi') }}"
                    placeholder="Contoh: Hotel bintang 4"
                    required
                >

            </div>


            <div class="form-group">

                <label for="armada_transport">
                    Armada Transportasi
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


            <div class="form-group">

                <label for="harga_normal">
                    Harga Normal
                </label>

                <input
                    type="number"
                    id="harga_normal"
                    name="harga_normal"
                    value="{{ old('harga_normal') }}"
                    placeholder="Contoh: 2500000"
                    min="0"
                    required
                >

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
                    placeholder="Contoh: 2000000"
                    min="0"
                >

            </div>


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


            <button
                type="submit"
                class="btn"
            >
                + Simpan Paket Wisata
            </button>

        </form>

    </div>

</div>

</body>

</html>