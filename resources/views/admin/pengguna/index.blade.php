<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengguna - WISATA.</title>

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
                    rgba(3, 35, 52, .70),
                    rgba(5, 48, 67, .82)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2000&q=85");

            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            padding: 40px;

            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .container {
            width: 100%;
            max-width: 1100px;
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
            padding: 38px;

            border-radius: 30px;

            background: rgba(255,255,255,.13);
            border: 1px solid rgba(255,255,255,.25);

            backdrop-filter: blur(22px);

            box-shadow: 0 30px 80px rgba(0,0,0,.25);

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

            margin-bottom: 30px;
        }

        .table-wrapper {
            width: 100%;

            overflow-x: auto;

            border-radius: 20px;
        }

        table {
            width: 100%;

            min-width: 950px;

            border-collapse: collapse;

            overflow: hidden;
        }

        thead {
            background: rgba(255,255,255,.16);
        }

        th {
            padding: 17px 15px;

            text-align: left;

            color: #dff5ff;

            font-size: 13px;

            letter-spacing: .5px;

            white-space: nowrap;
        }

        td {
            padding: 17px 15px;

            border-top: 1px solid rgba(255,255,255,.12);

            color: rgba(255,255,255,.88);

            font-size: 14px;

            white-space: nowrap;
        }

        tbody tr {
            transition: .25s;
        }

        tbody tr:hover {
            background: rgba(255,255,255,.08);
        }

        .role {
            display: inline-block;

            padding: 7px 13px;

            border-radius: 20px;

            background: rgba(157,220,255,.18);

            border: 1px solid rgba(157,220,255,.25);

            color: #c8efff;

            font-size: 12px;

            font-weight: 700;

            text-transform: uppercase;
        }

        .number {
            width: 45px;
            height: 45px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 14px;

            background: rgba(255,255,255,.10);

            font-weight: 700;
        }

        .empty {
            text-align: center;

            padding: 45px;

            color: rgba(255,255,255,.65);
        }

        .total {
            display: inline-block;

            margin-bottom: 20px;

            padding: 10px 17px;

            border-radius: 20px;

            background: rgba(255,255,255,.10);

            border: 1px solid rgba(255,255,255,.18);

            color: #dff5ff;

            font-size: 13px;
        }

        .login-belum {
            opacity: .6;
        }

        @media (max-width: 700px) {

            body {
                padding: 20px;
            }

            .header {
                align-items: flex-start;

                gap: 15px;
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

        <!-- HEADER -->

        <div class="header">

            <a href="/admin/dashboard" class="logo">
                WISATA<span>.</span>
            </a>

            <a href="/admin/dashboard" class="back">
                &larr; Kembali ke Dashboard
            </a>

        </div>


        <!-- CARD -->

        <div class="card">

            <div class="small-title">
                Admin Management
            </div>

            <h1>
                Pengguna Website
            </h1>

            <p class="subtitle">
                Melihat data pengguna yang terdaftar dan menggunakan
                sistem perjalanan wisata WISATA.
            </p>


            <!-- TOTAL -->

            <div class="total">
                Total Pengguna:
                <strong>{{ $pengguna->count() }}</strong>
            </div>


            <!-- TABLE -->

            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Nama Lengkap</th>

                            <th>Email</th>

                            <th>No. Telepon</th>

                            <th>Role</th>

                            <th>Tanggal Daftar</th>

                            <th>Login Terakhir</th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse ($pengguna as $user)

                            <tr>

                                <!-- NO -->

                                <td>

                                    <div class="number">
                                        {{ $loop->iteration }}
                                    </div>

                                </td>


                                <!-- NAMA -->

                                <td>

                                    <strong>
                                        {{ $user->nama_lengkap }}
                                    </strong>

                                </td>


                                <!-- EMAIL -->

                                <td>
                                    {{ $user->email }}
                                </td>


                                <!-- TELEPON -->

                                <td>
                                    {{ $user->no_telepon ?? '-' }}
                                </td>


                                <!-- ROLE -->

                                <td>

                                    <span class="role">
                                        {{ $user->role }}
                                    </span>

                                </td>


                                <!-- TANGGAL DAFTAR -->

                                <td>

                                    {{ $user->created_at
                                        ? \Carbon\Carbon::parse($user->created_at)->format('d M Y')
                                        : '-'
                                    }}

                                </td>


                                <!-- LOGIN TERAKHIR -->

                                <td>

                                    @if ($user->last_login_at)

                                        {{ \Carbon\Carbon::parse($user->last_login_at)->format('d M Y H:i') }}

                                    @else

                                        <span class="login-belum">
                                            Belum pernah login
                                        </span>

                                    @endif

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="7">

                                    <div class="empty">
                                        Belum ada pengguna yang terdaftar.
                                    </div>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>

</html>