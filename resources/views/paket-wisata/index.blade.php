```php
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Paket Wisata - WISATA.</title>

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
            color: #17384d;
            background:
                linear-gradient(
                    180deg,
                    #eaf5f9 0%,
                    #f7fbfc 45%,
                    #eef7fa 100%
                );
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* ================= NAVBAR ================= */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;

            height: 78px;
            padding: 0 7%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background: rgba(255,255,255,.72);

            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            border-bottom: 1px solid rgba(255,255,255,.9);

            box-shadow:
                0 8px 30px rgba(25,70,90,.06);
        }

        .logo {
            color: #123c57;
            text-decoration: none;
            font-size: 27px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .logo span {
            color: #6db7d7;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 7px;

            padding: 10px 18px;

            border-radius: 25px;

            text-decoration: none;
            color: #123c57;

            background: rgba(255,255,255,.65);

            border: 1px solid rgba(255,255,255,.9);

            backdrop-filter: blur(12px);

            font-size: 13px;
            font-weight: 700;

            transition: .3s;
        }

        .back-btn:hover {
            transform: translateY(-2px);
            background: white;

            box-shadow:
                0 10px 25px rgba(27,71,93,.10);
        }

        /* ================= HEADER ================= */

        .header {
            position: relative;

            padding: 90px 7% 65px;

            text-align: center;

            overflow: hidden;
        }

        .header::before {
            content: "";

            position: absolute;

            width: 280px;
            height: 280px;

            border-radius: 50%;

            background: rgba(116,190,218,.14);

            filter: blur(5px);

            top: -120px;
            left: 5%;

            pointer-events: none;
        }

        .header::after {
            content: "";

            position: absolute;

            width: 230px;
            height: 230px;

            border-radius: 50%;

            background: rgba(91,159,190,.10);

            filter: blur(5px);

            right: 5%;
            bottom: -120px;

            pointer-events: none;
        }

        .header span {
            position: relative;

            font-size: 12px;

            letter-spacing: 4px;

            text-transform: uppercase;

            color: #4e91b2;

            font-weight: 800;
        }

        .header h1 {
            position: relative;

            margin-top: 13px;

            font-size: clamp(38px, 5vw, 58px);

            color: #123c57;

            line-height: 1.05;
        }

        .header p {
            position: relative;

            max-width: 650px;

            margin: 18px auto 0;

            color: #718694;

            line-height: 1.8;

            font-size: 15px;
        }

        /* ================= CONTAINER ================= */

        .container {
            width: 86%;
            max-width: 1280px;

            margin: auto;

            padding-bottom: 100px;
        }

        /* ================= SUCCESS ================= */

        .success {
            margin-bottom: 25px;

            padding: 15px 20px;

            border-radius: 18px;

            background: rgba(220,250,232,.75);

            border: 1px solid rgba(100,190,130,.25);

            color: #28744a;

            font-size: 14px;

            font-weight: 700;

            backdrop-filter: blur(12px);
        }

        /* ================= CARDS ================= */

        .cards {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 28px;
        }

        .card {
            position: relative;

            overflow: hidden;

            border-radius: 30px;

            background: rgba(255,255,255,.62);

            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            border: 1px solid rgba(255,255,255,.9);

            box-shadow:
                0 20px 55px rgba(27,71,93,.09);

            transition: .4s;

            animation: fadeUp .7s ease both;
        }

        .card:hover {
            transform: translateY(-10px);

            box-shadow:
                0 30px 70px rgba(27,71,93,.15);
        }

        /* ================= FOTO ================= */

        .photo-wrapper {
            position: relative;

            width: 100%;
            height: 225px;

            overflow: hidden;

            background:
                linear-gradient(
                    135deg,
                    #d9edf4,
                    #edf7fa
                );
        }

        .photo-wrapper img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;

            transition: .5s;
        }

        .card:hover .photo-wrapper img {
            transform: scale(1.07);
        }

        .photo-overlay {
            position: absolute;

            inset: 0;

            background:
                linear-gradient(
                    to top,
                    rgba(5,35,50,.48),
                    transparent 55%
                );

            pointer-events: none;
        }

        .status-photo {
            position: absolute;

            top: 16px;
            right: 16px;

            padding: 7px 13px;

            border-radius: 20px;

            background: rgba(255,255,255,.78);

            backdrop-filter: blur(10px);

            color: #123c57;

            font-size: 11px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: .5px;
        }

        /* ================= CARD CONTENT ================= */

        .card-content {
            padding: 27px;
        }

        .card h2 {
            color: #123c57;

            font-size: 23px;

            line-height: 1.25;

            margin-bottom: 12px;
        }

        .description {
            color: #718694;

            line-height: 1.7;

            font-size: 14px;

            margin-bottom: 21px;

            display: -webkit-box;

            -webkit-line-clamp: 3;

            -webkit-box-orient: vertical;

            overflow: hidden;
        }

        /* ================= INFO ================= */

        .info-box {
            display: grid;

            gap: 9px;

            margin-bottom: 20px;
        }

        .info {
            display: flex;

            align-items: flex-start;

            gap: 9px;

            padding: 10px 12px;

            border-radius: 13px;

            background: rgba(229,243,248,.62);

            border: 1px solid rgba(255,255,255,.75);

            color: #5f7481;

            font-size: 13px;

            line-height: 1.5;
        }

        .info strong {
            color: #31566b;
        }

        /* ================= PRICE ================= */

        .price-area {
            padding-top: 17px;

            border-top:
                1px solid rgba(23,56,77,.08);
        }

        .price-label {
            color: #8295a0;

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: 1.5px;

            font-weight: 700;

            margin-bottom: 4px;
        }

        .price {
            color: #123c57;

            font-size: 24px;

            font-weight: 800;
        }

        .promo {
            margin-top: 5px;

            color: #4c91b6;

            font-size: 13px;

            font-weight: 700;
        }

        /* ================= ACTION ================= */

        .actions {
            display: flex;

            gap: 9px;

            flex-wrap: wrap;

            margin-top: 20px;
        }

        .pesan-btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            width: 100%;

            padding: 13px 18px;

            border-radius: 18px;

            text-decoration: none;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #2d7699,
                    #5aa9c8
                );

            box-shadow:
                0 10px 25px rgba(67,145,177,.20);

            font-size: 13px;

            font-weight: 800;

            transition: .3s;
        }

        .pesan-btn:hover {
            transform: translateY(-3px);

            box-shadow:
                0 15px 30px rgba(67,145,177,.30);
        }

        .jadwal-info {
            width: 100%;

            padding: 12px 14px;

            border-radius: 15px;

            background:
                rgba(235,247,251,.75);

            border:
                1px solid rgba(160,205,224,.35);

            color: #547383;

            font-size: 12px;

            line-height: 1.6;
        }

        .jadwal-info strong {
            color: #24566f;
        }

        .no-jadwal {
            width: 100%;

            padding: 12px 14px;

            border-radius: 15px;

            background:
                rgba(245,245,245,.75);

            border:
                1px solid rgba(180,180,180,.25);

            color: #89949a;

            font-size: 12px;

            text-align: center;

            font-weight: 600;
        }

        /* ================= ADMIN ================= */

        .admin-actions {
            display: flex;

            gap: 9px;

            margin-top: 10px;
        }

        .edit-btn,
        .delete-btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 10px 15px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 800;

            transition: .3s;
        }

        .edit-btn {
            text-decoration: none;

            color: #123c57;

            background:
                rgba(190,225,239,.60);

            border:
                1px solid rgba(160,205,224,.55);
        }

        .edit-btn:hover {
            transform: translateY(-2px);

            background:
                rgba(190,225,239,.9);
        }

        .delete-btn {
            border:
                1px solid rgba(220,130,130,.28);

            background:
                rgba(255,235,235,.75);

            color: #a34c4c;

            cursor: pointer;
        }

        .delete-btn:hover {
            transform: translateY(-2px);

            background:
                rgba(255,220,220,.9);
        }

        /* ================= EMPTY ================= */

        .empty {
            text-align: center;

            padding: 80px 25px;

            border-radius: 30px;

            background:
                rgba(255,255,255,.58);

            backdrop-filter: blur(18px);

            border:
                1px solid rgba(255,255,255,.9);

            box-shadow:
                0 20px 50px rgba(27,71,93,.07);
        }

        .empty h2 {
            color: #123c57;

            margin-bottom: 8px;
        }

        .empty p {
            color: #718694;
        }

        /* ================= FOOTER ================= */

        footer {
            padding: 30px 7%;

            text-align: center;

            background: #092333;

            color: rgba(255,255,255,.65);

            font-size: 12px;
        }

        /* ================= ANIMATION ================= */

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 1000px) {

            .cards {
                grid-template-columns:
                    repeat(2, 1fr);
            }
        }

        @media (max-width: 650px) {

            .navbar {
                padding: 0 5%;
            }

            .logo {
                font-size: 23px;
            }

            .header {
                padding:
                    65px 5% 45px;
            }

            .container {
                width: 90%;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .photo-wrapper {
                height: 220px;
            }

            .card-content {
                padding: 23px;
            }

            .back-btn {
                font-size: 12px;

                padding:
                    9px 13px;
            }
        }
    </style>
</head>


<body>

    <!-- ================= NAVBAR ================= -->

    <nav class="navbar">

        <a
            href="{{ auth()->user()->role === 'admin'
                ? '/admin/dashboard'
                : (auth()->user()->role === 'pegawai'
                ? '/pegawai/dashboard'
                : '/pelanggan/dashboard') }}"
            class="logo"
        >
            WISATA<span>.</span>
        </a>


        <a
            href="{{ auth()->user()->role === 'admin'
                ? '/admin/dashboard'
                : (auth()->user()->role === 'pegawai'
                ? '/pegawai/dashboard'
                : '/pelanggan/dashboard') }}"
            class="back-btn"
        >
            ← Dashboard
        </a>

    </nav>


    <!-- ================= HEADER ================= -->

    <header class="header">

        <span>
            Explore Our Destination
        </span>

        <h1>
            Paket Wisata
        </h1>

        <p>
            Temukan berbagai paket perjalanan dan destinasi
            yang tersedia untuk perjalananmu.
        </p>

    </header>


    <!-- ================= CONTENT ================= -->

    <main class="container">

        @if(session('success'))

            <div class="success">
                ✓ {{ session('success') }}
            </div>

        @endif


        @if($paketWisata->count() > 0)

            <div class="cards">

                @foreach($paketWisata as $paket)

                    <div class="card">

                        <!-- ================= FOTO ================= -->

                        <div class="photo-wrapper">

                            @if($paket->foto_paket)

                                <img
                                    src="{{ asset('storage/' . $paket->foto_paket) }}"
                                    alt="{{ $paket->nama_paket }}"
                                >

                            @else

                                <img
                                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=900&q=80"
                                    alt="Destinasi Wisata"
                                >

                            @endif


                            <div class="photo-overlay"></div>


                            <div class="status-photo">
                                {{ $paket->status }}
                            </div>

                        </div>


                        <!-- ================= CONTENT ================= -->

                        <div class="card-content">

                            <h2>
                                {{ $paket->nama_paket }}
                            </h2>


                            <p class="description">
                                {{ $paket->deskripsi }}
                            </p>


                            <div class="info-box">

                                <div class="info">
                                    <span>
                                        <strong>Akomodasi:</strong>
                                        {{ $paket->akomodasi }}
                                    </span>
                                </div>


                                <div class="info">
                                    <span>
                                        <strong>Transport:</strong>
                                        {{ $paket->armada_transport }}
                                    </span>
                                </div>

                            </div>


                            <!-- ================= PRICE ================= -->

                            <div class="price-area">

                                <div class="price-label">
                                    Mulai dari
                                </div>

                                @if($paket->harga_promo)

                                    <div class="price">
                                        Rp {{ number_format(
                                            $paket->harga_promo,
                                            0,
                                            ',',
                                            '.'
                                        ) }}
                                    </div>

                                    <div class="promo">
                                        Harga normal:
                                        Rp {{ number_format(
                                            $paket->harga_normal,
                                            0,
                                            ',',
                                            '.'
                                        ) }}
                                    </div>

                                @else

                                    <div class="price">
                                        Rp {{ number_format(
                                            $paket->harga_normal,
                                            0,
                                            ',',
                                            '.'
                                        ) }}
                                    </div>

                                @endif

                            </div>


                            <!-- ================= PESAN PAKET ================= -->

                            @if(auth()->user()->role === 'pelanggan')

                                @php

                                    $jadwalTersedia =
                                        \App\Models\JadwalTour::where(
                                            'id_paket',
                                            $paket->id_paket
                                        )
                                        ->where(
                                            'sisa_kuota',
                                            '>',
                                            0
                                        )
                                        ->orderBy(
                                            'tgl_keberangkatan',
                                            'asc'
                                        )
                                        ->get();

                                @endphp


                                @if($jadwalTersedia->count() > 0)

                                    <div class="actions">

                                        @foreach($jadwalTersedia as $jadwal)

                                            <div class="jadwal-info">

                                                <strong>
                                                    Jadwal tersedia
                                                </strong>

                                                <br>

                                                {{ \Carbon\Carbon::parse(
                                                    $jadwal->tgl_keberangkatan
                                                )->format('d M Y') }}

                                                —
                                                {{ \Carbon\Carbon::parse(
                                                    $jadwal->tgl_kepulangan
                                                )->format('d M Y') }}

                                                <br>

                                                Sisa kuota:
                                                <strong>
                                                    {{ $jadwal->sisa_kuota }}
                                                    orang
                                                </strong>

                                            </div>


                                            <a
                                                href="{{ url('/pelanggan/pemesanan/' . $jadwal->id_jadwal) }}"
                                                class="pesan-btn"
                                            >
                                                Pesan Paket Ini →
                                            </a>

                                        @endforeach

                                    </div>

                                @else

                                    <div class="actions">

                                        <div class="no-jadwal">
                                            Jadwal perjalanan belum tersedia.
                                        </div>

                                    </div>

                                @endif

                            @endif


                            <!-- ================= ADMIN ACTION ================= -->

                            @if(auth()->user()->role === 'admin')

                                <div class="admin-actions">

                                    <a
                                        href="/admin/paket-wisata/{{ $paket->id_paket }}/edit"
                                        class="edit-btn"
                                    >
                                        Edit Paket
                                    </a>


                                    <form
                                        action="/admin/paket-wisata/{{ $paket->id_paket }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus paket wisata ini?');"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="delete-btn"
                                        >
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            @endif

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div class="empty">

                <h2>
                    Belum Ada Paket Wisata
                </h2>

                <p>
                    Data paket wisata belum tersedia.
                </p>

            </div>

        @endif

    </main>


    <!-- ================= FOOTER ================= -->

    <footer>

        © {{ date('Y') }} WISATA. —
        Jelajahi perjalananmu.

    </footer>


</body>

</html>
```
