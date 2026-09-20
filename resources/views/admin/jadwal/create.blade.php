<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Jadwal Tour - WISATA.</title>

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
                    rgba(3, 35, 52, .72),
                    rgba(5, 48, 67, .84)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2000&q=85");

            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        .header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 30px;
        }

        .logo {

            color: white;

            text-decoration: none;

            font-size: 30px;

            font-weight: 800;

            letter-spacing: 2px;
        }

        .logo span {
            color: #9ddcff;
        }

        .back {

            padding: 12px 20px;

            border-radius: 25px;

            color: white;

            text-decoration: none;

            background: rgba(255,255,255,.13);

            border: 1px solid rgba(255,255,255,.25);

            backdrop-filter: blur(15px);

            transition: .3s;
        }

        .back:hover {

            transform: translateY(-3px);

            background: rgba(255,255,255,.22);
        }

        .card {

            padding: 40px;

            border-radius: 30px;

            background: rgba(255,255,255,.13);

            border: 1px solid rgba(255,255,255,.25);

            backdrop-filter: blur(22px);

            box-shadow:
                0 30px 80px rgba(0,0,0,.25);
        }

        .small-title {

            color: #a7e2ff;

            font-size: 12px;

            letter-spacing: 4px;

            text-transform: uppercase;

            margin-bottom: 10px;
        }

        h1 {

            font-size: 42px;

            margin-bottom: 10px;
        }

        .subtitle {

            color: rgba(255,255,255,.72);

            line-height: 1.7;

            margin-bottom: 35px;
        }

        .form-grid {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 22px;
        }

        .form-group {

            display: flex;

            flex-direction: column;
        }

        .full {

            grid-column: 1 / -1;
        }

        label {

            margin-bottom: 9px;

            font-size: 14px;

            font-weight: 700;

            color: #e8f8ff;
        }

        input,
        select {

            width: 100%;

            padding: 14px 16px;

            border-radius: 16px;

            border: 1px solid rgba(255,255,255,.22);

            outline: none;

            background: rgba(255,255,255,.12);

            color: white;

            backdrop-filter: blur(10px);

            font-size: 14px;

            transition: .3s;
        }

        input:focus,
        select:focus {

            border-color: #9ddcff;

            background: rgba(255,255,255,.18);

            box-shadow:
                0 0 0 3px rgba(157,220,255,.10);
        }

        select option {

            color: #123c57;

            background: white;
        }

        input::placeholder {

            color: rgba(255,255,255,.45);
        }

        .info {

            margin-top: 10px;

            color: rgba(255,255,255,.55);

            font-size: 12px;
        }

        .actions {

            display: flex;

            gap: 12px;

            margin-top: 35px;

            padding-top: 25px;

            border-top:
                1px solid rgba(255,255,255,.15);
        }

        .btn {

            border: none;

            padding: 13px 24px;

            border-radius: 25px;

            font-weight: 700;

            cursor: pointer;

            text-decoration: none;

            transition: .3s;
        }

        .btn-primary {

            background: white;

            color: #123c57;
        }

        .btn-primary:hover {

            transform: translateY(-3px);

            box-shadow:
                0 12px 30px rgba(0,0,0,.20);
        }

        .btn-back {

            background: rgba(255,255,255,.10);

            border:
                1px solid rgba(255,255,255,.20);

            color: white;
        }

        .btn-back:hover {

            background: rgba(255,255,255,.18);

            transform: translateY(-3px);
        }

        .error {

            margin-top: 6px;

            color: #ffd1d1;

            font-size: 12px;
        }

        @media (max-width: 700px) {

            body {
                padding: 20px;
            }

            .header {
                flex-direction: column;

                align-items: flex-start;

                gap: 15px;
            }

            .card {
                padding: 25px;
            }

            h1 {
                font-size: 32px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }

            .actions {
                flex-direction: column;
            }

        }

    </style>

</head>


<body>

<div class="container">


    <!-- HEADER -->

    <div class="header">

        <a href="/admin/dashboard" class="logo">
            WISATA<span>.</span>
        </a>

        <a href="/admin/jadwal-tour" class="back">
            ← Kembali ke Jadwal
        </a>

    </div>


    <!-- CARD -->

    <div class="card">

        <div class="small-title">
            Management • Jadwal Tour
        </div>

        <h1>
            Tambah Jadwal Tour
        </h1>

        <p class="subtitle">
            Tambahkan jadwal perjalanan wisata baru ke dalam sistem WISATA.
        </p>


        <form
            action="/admin/jadwal-tour"
            method="POST"
        >

            @csrf


            <div class="form-grid">


                <!-- PAKET -->

                <div class="form-group full">

                    <label for="id_paket">
                        Paket Wisata
                    </label>

                    <select
                        name="id_paket"
                        id="id_paket"
                        required
                    >

                        <option value="">
                            -- Pilih Paket Wisata --
                        </option>

                        @foreach ($paketWisata as $paket)

                            <option
                                value="{{ $paket->id_paket }}"
                                {{ old('id_paket') == $paket->id_paket ? 'selected' : '' }}
                            >

                                {{ $paket->nama_paket }}

                            </option>

                        @endforeach

                    </select>

                    @error('id_paket')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- TOUR LEADER -->

                <div class="form-group full">

                    <label for="id_tour_leader">
                        ID Tour Leader
                    </label>

                    <input
                        type="number"
                        name="id_tour_leader"
                        id="id_tour_leader"
                        value="{{ old('id_tour_leader') }}"
                        placeholder="Masukkan ID Tour Leader"
                        required
                    >

                    <div class="info">
                        Masukkan ID pengguna yang bertugas sebagai tour leader.
                    </div>

                    @error('id_tour_leader')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- TANGGAL BERANGKAT -->

                <div class="form-group">

                    <label for="tgl_keberangkatan">
                        Tanggal Keberangkatan
                    </label>

                    <input
                        type="date"
                        name="tgl_keberangkatan"
                        id="tgl_keberangkatan"
                        value="{{ old('tgl_keberangkatan') }}"
                        required
                    >

                    @error('tgl_keberangkatan')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- TANGGAL PULANG -->

                <div class="form-group">

                    <label for="tgl_kepulangan">
                        Tanggal Kepulangan
                    </label>

                    <input
                        type="date"
                        name="tgl_kepulangan"
                        id="tgl_kepulangan"
                        value="{{ old('tgl_kepulangan') }}"
                        required
                    >

                    @error('tgl_kepulangan')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- KUOTA -->

                <div class="form-group">

                    <label for="kuota">
                        Kuota
                    </label>

                    <input
                        type="number"
                        name="kuota"
                        id="kuota"
                        value="{{ old('kuota') }}"
                        min="1"
                        placeholder="Contoh: 30"
                        required
                    >

                    @error('kuota')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- SISA KUOTA -->

                <div class="form-group">

                    <label for="sisa_kuota">
                        Sisa Kuota
                    </label>

                    <input
                        type="number"
                        name="sisa_kuota"
                        id="sisa_kuota"
                        value="{{ old('sisa_kuota') }}"
                        min="0"
                        placeholder="Contoh: 30"
                        required
                    >

                    @error('sisa_kuota')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


            </div>


            <!-- BUTTON -->

            <div class="actions">

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    + Simpan Jadwal
                </button>

                <a
                    href="/admin/jadwal-tour"
                    class="btn btn-back"
                >
                    Batal
                </a>

            </div>


        </form>

    </div>

</div>

</body>

</html>