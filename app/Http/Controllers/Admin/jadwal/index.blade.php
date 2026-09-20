<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jadwal Tour - WISATA.</title>

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
            max-width: 1250px;
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

        .back,
        .add-btn {
            padding: 12px 20px;
            border-radius: 25px;

            color: white;
            text-decoration: none;

            background: rgba(255,255,255,.13);

            border: 1px solid rgba(255,255,255,.25);

            backdrop-filter: blur(15px);

            transition: .3s;
        }

        .add-btn {
            background: #123c57;
            border: none;
        }

        .back:hover,
        .add-btn:hover {
            transform: translateY(-3px);
        }

        .card {
            padding: 38px;
            border-radius: 30px;

            background: rgba(255,255,255,.13);

            border: 1px solid rgba(255,255,255,.25);

            backdrop-filter: blur(22px);

            box-shadow:
                0 30px 80px rgba(0,0,0,.25);

            overflow-x: auto;
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
            margin-bottom: 25px;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .total {
            padding: 10px 17px;
            border-radius: 20px;

            background: rgba(255,255,255,.10);

            border: 1px solid rgba(255,255,255,.18);

            color: #dff5ff;
            font-size: 13px;
        }

        table {
            width: 100%;
            min-width: 950px;
            border-collapse: collapse;
        }

        thead {
            background: rgba(255,255,255,.16);
        }

        th {
            padding: 17px 15px;
            text-align: left;

            color: #dff5ff;
            font-size: 13px;
        }

        td {
            padding: 17px 15px;

            border-top:
                1px solid rgba(255,255,255,.12);

            color: rgba(255,255,255,.88);

            font-size: 14px;
        }

        tbody tr {
            transition: .25s;
        }

        tbody tr:hover {
            background: rgba(255,255,255,.08);
        }

        .number {
            width: 40px;
            height: 40px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 12px;

            background: rgba(255,255,255,.10);

            font-weight: 700;
        }

        .quota {
            display: inline-block;

            padding: 7px 13px;

            border-radius: 20px;

            background: rgba(157,220,255,.18);

            border: 1px solid rgba(157,220,255,.25);

            color: #c8efff;

            font-weight: 700;
        }

        .empty {
            text-align: center;
            padding: 45px;
            color: rgba(255,255,255,.65);
        }

        @media (max-width: 700px) {
            body {
                padding: 20px;
            }

            .header,
            .actions {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }

            h1 {
                font-size: 32px;
            }

            .card {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">

        <a href="/admin/dashboard" class="logo">
            WISATA<span>.</span>
        </a>

        <a href="/admin/dashboard" class="back">
            ← Kembali ke Dashboard
        </a>

    </div>


    <div class="card">

        <div class="small-title">
            Management
        </div>

        <h1>
            Jadwal Tour
        </h1>

        <p class="subtitle">
            Kelola jadwal perjalanan wisata yang tersedia
            dalam sistem WISATA.
        </p>


        <div class="actions">

            <div class="total">
                📅 Total Jadwal:
                <strong>{{ $jadwal->count() }}</strong>
            </div>

            <a
                href="/admin/jadwal-tour/create"
                class="add-btn"
            >
                + Tambah Jadwal
            </a>

        </div>


        <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Paket Wisata</th>
                    <th>Tour Leader</th>
                    <th>Keberangkatan</th>
                    <th>Kepulangan</th>
                    <th>Kuota</th>
                    <th>Sisa Kuota</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($jadwal as $item)

                    <tr>

                        <td>
                            <div class="number">
                                {{ $loop->iteration }}
                            </div>
                        </td>

                        <td>
                            <strong>
                                {{ $item->paketWisata->nama_paket ?? '-' }}
                            </strong>
                        </td>

                        <td>
                            {{ $item->id_tour_leader }}
                        </td>

                        <td>
                            {{ \Carbon\Carbon::parse($item->tgl_keberangkatan)->format('d M Y') }}
                        </td>

                        <td>
                            {{ \Carbon\Carbon::parse($item->tgl_kepulangan)->format('d M Y') }}
                        </td>

                        <td>
                            <span class="quota">
                                {{ $item->kuota }}
                            </span>
                        </td>

                        <td>
                            <span class="quota">
                                {{ $item->sisa_kuota }}
                            </span>
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="7" class="empty">
                            Belum ada jadwal tour.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>