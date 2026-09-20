<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Paket Wisata - WISATA.</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            color: white;

            background:
                linear-gradient(
                    rgba(3, 35, 52, .70),
                    rgba(5, 48, 67, .82)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2000&q=85");

            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            padding: 40px 20px;
        }


        /* ===============================
           CONTAINER
        =============================== */

        .container {
            width: 100%;
            max-width: 900px;
            margin: auto;
        }


        /* ===============================
           HEADER
        =============================== */

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

            background: rgba(255,255,255,.12);

            border:
                1px solid
                rgba(255,255,255,.22);

            backdrop-filter: blur(15px);

            transition: .3s;
        }

        .back:hover {
            transform: translateY(-3px);

            background:
                rgba(255,255,255,.22);

            box-shadow:
                0 10px 25px
                rgba(0,0,0,.18);
        }


        /* ===============================
           CARD
        =============================== */

        .card {
            padding: 42px;

            border-radius: 32px;

            background:
                rgba(255,255,255,.13);

            border:
                1px solid
                rgba(255,255,255,.23);

            backdrop-filter:
                blur(22px);

            -webkit-backdrop-filter:
                blur(22px);

            box-shadow:
                0 30px 80px
                rgba(0,0,0,.28);

            animation:
                fadeUp .7s ease;
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
                rgba(255,255,255,.70);

            line-height: 1.7;

            margin-bottom: 35px;
        }


        /* ===============================
           ERROR
        =============================== */

        .error {
            margin-bottom: 25px;

            padding: 16px 18px;

            border-radius: 16px;

            background:
                rgba(255,80,80,.15);

            border:
                1px solid
                rgba(255,130,130,.28);

            color:
                #ffe3e3;

            line-height: 1.7;
        }


        /* ===============================
           SUCCESS
        =============================== */

        .success {
            margin-bottom: 25px;

            padding: 16px 18px;

            border-radius: 16px;

            background:
                rgba(50,220,130,.15);

            border:
                1px solid
                rgba(100,255,170,.28);

            color:
                #dcffe9;

            line-height: 1.7;
        }


        /* ===============================
           FORM
        =============================== */

        .form-group {
            margin-bottom: 23px;
        }

        label {
            display: block;

            margin-bottom: 9px;

            font-size: 13px;

            font-weight: 700;

            letter-spacing: .3px;

            color:
                rgba(255,255,255,.92);
        }


        input,
        textarea,
        select {

            width: 100%;

            padding: 14px 16px;

            border:
                1px solid
                rgba(255,255,255,.35);

            outline: none;

            border-radius: 14px;

            background:
                rgba(255,255,255,.92);

            color: #17384d;

            font-size: 14px;

            transition: .25s;
        }


        input:focus,
        textarea:focus,
        select:focus {

            border-color:
                rgba(157,220,255,.9);

            box-shadow:
                0 0 0 4px
                rgba(157,220,255,.12);
        }


        textarea {

            min-height: 130px;

            resize: vertical;

            line-height: 1.6;
        }


        /* ===============================
           FORM GRID
        =============================== */

        .form-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 20px;
        }


        /* ===============================
           FOTO SECTION
        =============================== */

        .photo-section {

            margin-bottom: 30px;
        }


        .photo-title {

            font-size: 13px;

            font-weight: 700;

            margin-bottom: 10px;

            color:
                rgba(255,255,255,.92);
        }


        /* ===============================
           CURRENT PHOTO
        =============================== */

        .current-photo {

            position: relative;

            width: 100%;

            overflow: hidden;

            border-radius: 22px;

            background:
                rgba(0,0,0,.20);

            border:
                1px solid
                rgba(255,255,255,.20);

            margin-bottom: 18px;
        }


        .current-photo img {

            display: block;

            width: 100%;

            max-height: 420px;

            object-fit: cover;
        }


        .current-photo-info {

            position: absolute;

            left: 15px;
            right: 15px;
            bottom: 15px;

            padding: 12px 15px;

            border-radius: 13px;

            background:
                rgba(0,0,0,.55);

            backdrop-filter:
                blur(10px);

            font-size: 12px;
        }


        .current-label {

            font-weight: 700;

            margin-bottom: 4px;
        }


        .current-path {

            color:
                rgba(255,255,255,.65);

            word-break: break-all;
        }


        /* ===============================
           NO PHOTO
        =============================== */

        .no-photo {

            min-height: 230px;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            padding: 25px;

            border-radius: 22px;

            background:
                rgba(255,255,255,.08);

            border:
                1px dashed
                rgba(255,255,255,.40);

            margin-bottom: 18px;
        }


        .upload-content {

            position: relative;

            z-index: 2;
        }


        .upload-icon {

            width: 64px;

            height: 64px;

            display: flex;

            align-items: center;

            justify-content: center;

            margin:
                auto auto 14px;

            border-radius: 20px;

            background:
                rgba(255,255,255,.13);

            border:
                1px solid
                rgba(255,255,255,.20);

            font-size: 30px;
        }


        .upload-title {

            font-size: 16px;

            font-weight: 700;

            margin-bottom: 7px;
        }


        .upload-subtitle {

            font-size: 12px;

            color:
                rgba(255,255,255,.58);

            line-height: 1.6;
        }


        /* ===============================
           UPLOAD AREA
        =============================== */

        .upload-area {

            position: relative;

            width: 100%;

            min-height: 230px;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            padding: 25px;

            border-radius: 22px;

            background:
                rgba(255,255,255,.08);

            border:
                1px dashed
                rgba(255,255,255,.40);

            cursor: pointer;

            transition: .3s;

            overflow: hidden;
        }


        .upload-area:hover {

            background:
                rgba(255,255,255,.14);

            border-color:
                rgba(157,220,255,.75);

            transform:
                translateY(-2px);
        }


        .upload-input {

            position: absolute;

            inset: 0;

            width: 100%;

            height: 100%;

            opacity: 0;

            cursor: pointer;
        }


        /* ===============================
           NEW PHOTO PREVIEW
        =============================== */

        .preview-wrapper {

            display: none;

            position: relative;

            width: 100%;

            border-radius: 20px;

            overflow: hidden;

            background:
                rgba(0,0,0,.20);

            border:
                1px solid
                rgba(255,255,255,.20);
        }


        .preview-wrapper.show {

            display: block;
        }


        .preview-image {

            display: block;

            width: 100%;

            max-height: 400px;

            object-fit: cover;
        }


        .preview-info {

            position: absolute;

            left: 15px;

            bottom: 15px;

            right: 15px;

            padding: 10px 14px;

            border-radius: 12px;

            background:
                rgba(0,0,0,.55);

            backdrop-filter:
                blur(10px);

            font-size: 12px;
        }


        .preview-label {

            font-weight: 700;

            margin-bottom: 4px;
        }


        .change-photo {

            color: #a7e2ff;

            font-weight: 700;
        }


        /* ===============================
           PRICE NOTE
        =============================== */

        .price-note {

            margin-top: 7px;

            font-size: 11px;

            color:
                rgba(255,255,255,.55);
        }


        /* ===============================
           BUTTON
        =============================== */

        .btn {

            width: 100%;

            margin-top: 10px;

            padding: 15px 20px;

            border: none;

            border-radius: 28px;

            background:
                rgba(255,255,255,.94);

            color: #123c57;

            font-size: 15px;

            font-weight: 800;

            cursor: pointer;

            transition: .3s;

            box-shadow:
                0 10px 30px
                rgba(0,0,0,.12);
        }


        .btn:hover {

            transform:
                translateY(-3px);

            background: white;

            box-shadow:
                0 16px 35px
                rgba(0,0,0,.22);
        }


        .btn:active {

            transform:
                scale(.98);
        }


        /* ===============================
           CANCEL BUTTON
        =============================== */

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
                rgba(255,255,255,.10);

            border:
                1px solid
                rgba(255,255,255,.20);

            transition: .3s;
        }


        .cancel-btn:hover {

            background:
                rgba(255,255,255,.18);

            transform:
                translateY(-2px);
        }


        /* ===============================
           ANIMATION
        =============================== */

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


        /* ===============================
           RESPONSIVE
        =============================== */

        @media (max-width: 700px) {

            body {

                padding:
                    25px 15px;
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

                padding:
                    9px 13px;
            }


            .form-grid {

                grid-template-columns: 1fr;

                gap: 0;
            }


            .upload-area {

                min-height: 200px;
            }


            .current-photo img {

                max-height: 300px;
            }
        }

    </style>

</head>


<body>


<div class="container">


    <!-- ===============================
         HEADER
    =============================== -->

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



    <!-- ===============================
         CARD
    =============================== -->

    <div class="card">


        <div class="small-title">
            Admin Management
        </div>


        <h1>
            Edit Paket Wisata
        </h1>


        <p class="subtitle">

            Perbarui informasi paket wisata
            dan ganti foto destinasi jika diperlukan.

        </p>



        <!-- ===============================
             ERROR
        =============================== -->

        @if ($errors->any())

            <div class="error">

                @foreach ($errors->all() as $error)

                    <div>
                        • {{ $error }}
                    </div>

                @endforeach

            </div>

        @endif



        <!-- ===============================
             SUCCESS
        =============================== -->

        @if (session('success'))

            <div class="success">

                {{ session('success') }}

            </div>

        @endif



        <!-- ===============================
             FORM
        =============================== -->

        <form
            action="{{ url('/admin/paket-wisata/' . $paket->id_paket) }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            @method('PUT')



            <!-- ===============================
                 FOTO LAMA
            =============================== -->

            <div class="photo-section">


                <div class="photo-title">

                    Foto Paket Saat Ini

                </div>


                @if ($paket->foto_paket)

                    <div class="current-photo">

                        <img
                            src="{{ asset('storage/' . $paket->foto_paket) }}"
                            alt="Foto {{ $paket->nama_paket }}"
                        >


                        <div class="current-photo-info">

                            <div class="current-label">

                                Foto saat ini

                            </div>


                            <div class="current-path">

                                {{ $paket->foto_paket }}

                            </div>

                        </div>

                    </div>

                @else

                    <div class="no-photo">

                        <div class="upload-content">

                            <div class="upload-icon">
                                🖼️
                            </div>


                            <div class="upload-title">

                                Belum Ada Foto

                            </div>


                            <div class="upload-subtitle">

                                Paket ini belum memiliki foto.

                                <br>

                                Silakan upload foto baru di bawah.

                            </div>

                        </div>

                    </div>

                @endif



                <!-- ===============================
                     UPLOAD FOTO BARU
                =============================== -->

                <label>

                    Ganti Foto Paket

                </label>


                <div
                    class="upload-area"
                    id="uploadArea"
                >


                    <!-- DEFAULT -->

                    <div
                        class="upload-content"
                        id="uploadContent"
                    >

                        <div class="upload-icon">
                            📸
                        </div>


                        <div class="upload-title">

                            Upload Foto Baru

                        </div>


                        <div class="upload-subtitle">

                            Klik untuk memilih foto baru

                            <br>

                            JPG, JPEG, PNG atau WEBP

                            • Maksimal 2 MB

                        </div>

                    </div>



                    <!-- PREVIEW FOTO BARU -->

                    <div
                        class="preview-wrapper"
                        id="previewWrapper"
                    >

                        <img
                            src=""
                            alt="Preview Foto Baru"
                            class="preview-image"
                            id="previewImage"
                        >


                        <div class="preview-info">

                            <div
                                class="preview-label"
                                id="fileName"
                            >

                                Foto baru

                            </div>


                            <div class="change-photo">

                                Klik foto untuk mengganti

                            </div>

                        </div>

                    </div>



                    <input
                        type="file"
                        name="foto_paket"
                        id="foto_paket"
                        class="upload-input"
                        accept="image/jpeg,image/png,image/webp"
                    >

                </div>

            </div>



            <!-- ===============================
                 NAMA PAKET
            =============================== -->

            <div class="form-group">

                <label for="nama_paket">

                    Nama Paket

                </label>


                <input
                    type="text"
                    id="nama_paket"
                    name="nama_paket"
                    value="{{ old('nama_paket', $paket->nama_paket) }}"
                    placeholder="Contoh: Bali Paradise"
                    required
                >

            </div>



            <!-- ===============================
                 DESKRIPSI
            =============================== -->

            <div class="form-group">

                <label for="deskripsi">

                    Deskripsi

                </label>


                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    placeholder="Masukkan deskripsi paket wisata"
                    required
                >{{ old('deskripsi', $paket->deskripsi) }}</textarea>

            </div>



            <!-- ===============================
                 AKOMODASI + ARMADA
            =============================== -->

            <div class="form-grid">


                <div class="form-group">

                    <label for="akomodasi">

                        Akomodasi

                    </label>


                    <input
                        type="text"
                        id="akomodasi"
                        name="akomodasi"
                        value="{{ old('akomodasi', $paket->akomodasi) }}"
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
                        value="{{ old('armada_transport', $paket->armada_transport) }}"
                        placeholder="Contoh: Bus Pariwisata"
                        required
                    >

                </div>

            </div>



            <!-- ===============================
                 HARGA
            =============================== -->

            <div class="form-grid">


                <div class="form-group">

                    <label for="harga_normal">

                        Harga Normal

                    </label>


                    <input
                        type="number"
                        id="harga_normal"
                        name="harga_normal"
                        value="{{ old('harga_normal', $paket->harga_normal) }}"
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
                        value="{{ old('harga_promo', $paket->harga_promo) }}"
                        placeholder="Contoh: 4500000"
                        min="0"
                    >


                    <div class="price-note">

                        Kosongkan jika tidak ada promo.

                    </div>

                </div>

            </div>



            <!-- ===============================
                 STATUS
            =============================== -->

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
                        {{ old('status', $paket->status) == 'tersedia' ? 'selected' : '' }}
                    >

                        Tersedia

                    </option>


                    <option
                        value="tidak tersedia"
                        {{ old('status', $paket->status) == 'tidak tersedia' ? 'selected' : '' }}
                    >

                        Tidak Tersedia

                    </option>

                </select>

            </div>



            <!-- ===============================
                 BUTTON
            =============================== -->

            <button
                type="submit"
                class="btn"
            >

                ✓ Simpan Perubahan

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



<!-- ===============================
     JAVASCRIPT
=============================== -->

<script>

    const fotoInput =
        document.getElementById('foto_paket');

    const uploadContent =
        document.getElementById('uploadContent');

    const previewWrapper =
        document.getElementById('previewWrapper');

    const previewImage =
        document.getElementById('previewImage');

    const fileName =
        document.getElementById('fileName');


    fotoInput.addEventListener(
        'change',
        function () {

            const file =
                this.files[0];


            if (!file) {

                return;

            }


            /* =========================
               VALIDASI UKURAN
            ========================= */

            if (
                file.size >
                2 * 1024 * 1024
            ) {

                alert(
                    'Ukuran foto maksimal 2 MB.'
                );

                this.value = '';

                return;

            }


            /* =========================
               VALIDASI TIPE
            ========================= */

            const allowedTypes = [

                'image/jpeg',

                'image/png',

                'image/webp'

            ];


            if (
                !allowedTypes.includes(
                    file.type
                )
            ) {

                alert(
                    'Format foto harus JPG, JPEG, PNG, atau WEBP.'
                );

                this.value = '';

                return;

            }


            /* =========================
               PREVIEW
            ========================= */

            const reader =
                new FileReader();


            reader.onload =
                function (event) {

                    previewImage.src =
                        event.target.result;


                    fileName.textContent =
                        file.name;


                    uploadContent.style.display =
                        'none';


                    previewWrapper.classList.add(
                        'show'
                    );

                };


            reader.readAsDataURL(file);

        }
    );

</script>


</body>

</html>