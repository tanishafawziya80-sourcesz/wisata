<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Edit Jadwal Tour - WISATA.
    </title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {

            min-height: 100vh;

            padding: 40px;

            color: white;

            background:
                linear-gradient(
                    rgba(3,35,52,.72),
                    rgba(5,48,67,.82)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2000&q=85");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

        }

        .container {

            max-width: 850px;

            margin: auto;

        }

        .header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 25px;

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

            padding: 11px 18px;

            border-radius: 25px;

            color: white;

            text-decoration: none;

            background:
                rgba(255,255,255,.12);

            border:
                1px solid rgba(255,255,255,.25);

        }

        .card {

            padding: 40px;

            border-radius: 30px;

            background:
                rgba(255,255,255,.13);

            border:
                1px solid rgba(255,255,255,.25);

            backdrop-filter: blur(22px);

            box-shadow:
                0 30px 80px rgba(0,0,0,.25);

        }

        .small-title {

            color: #9ddcff;

            font-size: 12px;

            letter-spacing: 4px;

            text-transform: uppercase;

            margin-bottom: 10px;

        }

        h1 {

            font-size: 40px;

            margin-bottom: 10px;

        }

        .subtitle {

            color:
                rgba(255,255,255,.72);

            margin-bottom: 30px;

        }

        .form-group {

            margin-bottom: 22px;

        }

        label {

            display: block;

            margin-bottom: 8px;

            color: #dff5ff;

            font-size: 14px;

            font-weight: 700;

        }

        input,
        select {

            width: 100%;

            padding: 14px 16px;

            border-radius: 15px;

            border:
                1px solid rgba(255,255,255,.20);

            outline: none;

            background:
                rgba(255,255,255,.12);

            color: white;

            font-size: 14px;

        }

        select option {

            color: #123c57;

        }

        input:focus,
        select:focus {

            border-color: #9ddcff;

            background:
                rgba(255,255,255,.17);

        }

        .actions {

            display: flex;

            gap: 12px;

            margin-top: 30px;

        }

        .btn {

            border: none;

            padding: 13px 22px;

            border-radius: 25px;

            cursor: pointer;

            text-decoration: none;

            font-weight: 700;

            font-size: 13px;

        }

        .btn-primary {

            background: #123c57;

            color: white;

        }

        .btn-secondary {

            background:
                rgba(255,255,255,.15);

            color: white;

            border:
                1px solid rgba(255,255,255,.20);

        }

        .error {

            margin-top: 6px;

            color: #ffb5b5;

            font-size: 12px;

        }

        @media(max-width:600px) {

            body {
                padding: 20px;
            }

            .card {
                padding: 25px;
            }

            .header {
                align-items: flex-start;
                gap: 15px;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                text-align: center;
            }

        }

    </style>

</head>


<body>


<div class="container">


    <div class="header">

        <a
            href="{{ route('admin.jadwal-tour.index') }}"
            class="logo"
        >
            WISATA<span>.</span>
        </a>

        <a
            href="{{ route('admin.jadwal-tour.index') }}"
            class="back"
        >
            ← Kembali
        </a>

    </div>


    <div class="card">


        <div class="small-title">
            Management
        </div>


        <h1>
            Edit Jadwal Tour
        </h1>


        <p class="subtitle">
            Perbarui informasi jadwal perjalanan wisata.
        </p>


        <form
            action="{{ route('admin.jadwal-tour.update', $jadwal->id_jadwal) }}"
            method="POST"
        >

            @csrf

            @method('PUT')


            <!-- PAKET -->

            <div class="form-group">

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
                            {{ old('id_paket', $jadwal->id_paket) == $paket->id_paket ? 'selected' : '' }}
                        >
                            {{ $paket->nama_paket }}
                        </option>

                    @endforeach

                </select>

            </div>


            <!-- TOUR LEADER -->

            <div class="form-group">

                <label for="id_tour_leader">
                    ID Tour Leader
                </label>

                <input
                    type="text"
                    name="id_tour_leader"
                    id="id_tour_leader"
                    value="{{ old('id_tour_leader', $jadwal->id_tour_leader) }}"
                    required
                >

            </div>


            <!-- KEBERANGKATAN -->

            <div class="form-group">

                <label for="tgl_keberangkatan">
                    Tanggal Keberangkatan
                </label>

                <input
                    type="date"
                    name="tgl_keberangkatan"
                    id="tgl_keberangkatan"
                    value="{{ old('tgl_keberangkatan', $jadwal->tgl_keberangkatan) }}"
                    required
                >

            </div>


            <!-- KEPULANGAN -->

            <div class="form-group">

                <label for="tgl_kepulangan">
                    Tanggal Kepulangan
                </label>

                <input
                    type="date"
                    name="tgl_kepulangan"
                    id="tgl_kepulangan"
                    value="{{ old('tgl_kepulangan', $jadwal->tgl_kepulangan) }}"
                    required
                >

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
                    min="1"
                    value="{{ old('kuota', $jadwal->kuota) }}"
                    required
                >

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
                    min="0"
                    value="{{ old('sisa_kuota', $jadwal->sisa_kuota) }}"
                    required
                >

            </div>


            @if ($errors->any())

                <div class="error">

                    @foreach ($errors->all() as $error)

                        <div>
                            {{ $error }}
                        </div>

                    @endforeach

                </div>

            @endif


            <div class="actions">

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Simpan Perubahan
                </button>


                <a
                    href="{{ route('admin.jadwal-tour.index') }}"
                    class="btn btn-secondary"
                >
                    Batal
                </a>

            </div>


        </form>


    </div>


</div>


</body>

</html>