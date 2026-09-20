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
        }

        .container {
    width: calc(100% - 305px);
    max-width: none;

    margin-left: 285px;
    margin-right: 20px;
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

            background:
                rgba(255,255,255,.13);

            border:
                1px solid rgba(255,255,255,.25);

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

            margin-bottom: 30px;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;

            border-radius: 20px;
        }

        table {
            width: 100%;
            min-width: 850px;

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

        .role {
            display: inline-block;

            padding: 7px 13px;

            border-radius: 20px;

            background: rgba(157,220,255,.18);

            border:
                1px solid rgba(157,220,255,.25);

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

            border:
                1px solid rgba(255,255,255,.18);

            color: #dff5ff;

            font-size: 13px;
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

        .sidebar {
    position: fixed;

    left: 20px;
    top: 20px;
    bottom: 20px;

    width: 255px;

    padding: 30px 20px;

    border-radius: 30px;

    background:
        rgba(8, 65, 88, .88);

    border:
        1px solid rgba(255,255,255,.18);

    backdrop-filter: blur(22px);

    box-shadow:
        0 25px 60px rgba(0,0,0,.18);

    display: flex;
    flex-direction: column;

    z-index: 1000;
}

.sidebar .logo {
    padding: 5px 12px 28px;

    font-size: 28px;

    font-weight: 800;

    letter-spacing: 2px;

    color: white;
}

.sidebar-menu a {
    display: flex;

    align-items: center;

    gap: 13px;

    padding: 13px 14px;

    border-radius: 18px;

    color: rgba(255,255,255,.78);

    text-decoration: none;

    font-size: 13px;

    transition: .3s;
}

.sidebar-menu a:hover {
    background: rgba(255,255,255,.12);

    color: white;

    transform: translateX(4px);
}

.sidebar-menu a.active {
    background: rgba(255,255,255,.15);

    color: white;

    border:
        1px solid rgba(255,255,255,.15);
}

.sidebar-logout {
    margin-top: auto;

    padding-top: 18px;

    border-top:
        1px solid rgba(255,255,255,.15);
}

.sidebar-logout button {
    width: 100%;

    padding: 13px 15px;

    border: none;

    border-radius: 18px;

    background: rgba(255,255,255,.12);

    border:
        1px solid rgba(255,255,255,.18);

    color: white;

    font-weight: 700;

    cursor: pointer;

    transition: .3s;
}

.sidebar-logout button:hover {
    background: rgba(255,255,255,.20);

    transform: translateY(-2px);
}


/* =========================================
   FIX SIDEBAR + CONTENT
========================================= */

@media (max-width: 1000px) {

    .container {
        width: calc(100% - 285px);
        margin-left: 270px;
        margin-right: 15px;
    }

}

@media (max-width: 700px) {

    .sidebar {
        position: relative;

        left: auto;
        top: auto;
        bottom: auto;

        width: 100%;

        margin-bottom: 25px;
    }

    .container {
        width: 100%;
        margin: 0;
    }

    body {
        padding: 20px;
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
            Admin Management
        </div>

        <h1>
            Pengguna Website
        </h1>

        <p class="subtitle">
            Melihat data pengguna yang terdaftar dan menggunakan
            sistem perjalanan wisata WISATA.
        </p>

        <div class="total">
            👥 Total Pengguna: <strong>{{ $pengguna->count() }}</strong>
        </div>


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

                    </tr>

                </thead>

                <tbody>

                    @forelse ($pengguna as $user)

                        <tr>

                            <td>
                                <div class="number">
                                    {{ $loop->iteration }}
                                </div>
                            </td>

                            <td>
                                <strong>
                                    {{ $user->nama_lengkap }}
                                </strong>
                            </td>

                            <td>
                                {{ $user->email }}
                            </td>

                            <td>
                                {{ $user->no_telepon ?? '-' }}
                            </td>

                            <td>

                                <span class="role">
                                    {{ $user->role }}
                                </span>

                            </td>

                            <td>
    {{ \Carbon\Carbon::parse($user->created_at)->format('d M Y') }}
</td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6">

                                <div class="empty">

                                    👥

                                    <br><br>

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

<aside class="sidebar">

    <a href="/admin/dashboard" class="logo">
        WISATA<span>.</span>
    </a>


    <div class="sidebar-menu">

        <a href="/admin/dashboard">
            🏠
            <span>Dashboard</span>
        </a>

        <a href="/admin/paket-wisata">
            🌴
            <span>Paket Wisata</span>
        </a>

        <a href="#">
            📅
            <span>Jadwal Tour</span>
        </a>

        <a href="/admin/pengguna">
            👥
            <span>Pengguna</span>
        </a>

    </div>


    <div class="sidebar-logout">

        <form action="/logout" method="POST">

            @csrf

            <button type="submit">
                🚪 &nbsp; Logout
            </button>

        </form>

    </div>

</aside>

</body>

</html>