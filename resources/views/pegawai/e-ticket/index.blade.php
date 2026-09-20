<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>E-Ticket - WISATA.</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", Arial, sans-serif;
    }

    body {
        min-height: 100vh;
        color: white;

        background:
            linear-gradient(
                rgba(4, 35, 52, .72),
                rgba(7, 48, 67, .88)
            ),
            url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=90");

        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        overflow-x: hidden;
    }

    /* ================= CLOUD ================= */

    .clouds {
        position: fixed;
        inset: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
        z-index: 0;
    }

    .cloud {
        position: absolute;
        width: 150px;
        height: 45px;
        background: rgba(255,255,255,.20);
        border-radius: 50px;
        filter: blur(.5px);
        opacity: .65;
        animation: cloudMove 45s linear infinite;
    }

    .cloud span {
        position: absolute;
        display: block;
        background: rgba(255,255,255,.22);
        border-radius: 50%;
    }

    .cloud span:nth-child(1) {
        width: 55px;
        height: 55px;
        left: 20px;
        bottom: 15px;
    }

    .cloud span:nth-child(2) {
        width: 70px;
        height: 70px;
        left: 55px;
        bottom: 10px;
    }

    .cloud span:nth-child(3) {
        width: 48px;
        height: 48px;
        right: 15px;
        bottom: 13px;
    }

    .cloud-1 {
        top: 18%;
        left: -200px;
        transform: scale(.75);
        animation-duration: 48s;
    }

    .cloud-2 {
        top: 35%;
        left: -230px;
        transform: scale(1.15);
        opacity: .35;
        animation-duration: 60s;
        animation-delay: -15s;
    }

    .cloud-3 {
        top: 55%;
        left: -180px;
        transform: scale(.65);
        opacity: .30;
        animation-duration: 52s;
        animation-delay: -25s;
    }

    .cloud-4 {
        top: 75%;
        left: -200px;
        transform: scale(.9);
        opacity: .25;
        animation-duration: 65s;
        animation-delay: -35s;
    }

    @keyframes cloudMove {
        0% {
            transform: translateX(0) translateY(0);
        }

        50% {
            transform: translateX(55vw) translateY(-10px);
        }

        100% {
            transform: translateX(115vw) translateY(5px);
        }
    }

    /* ================= NAVBAR ================= */

    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 78px;
        padding: 0 7%;

        display: flex;
        align-items: center;
        justify-content: space-between;

        background: rgba(255,255,255,.10);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);

        border-bottom: 1px solid rgba(255,255,255,.18);

        z-index: 1000;
    }

    .logo {
        color: white;
        text-decoration: none;
        font-size: 27px;
        font-weight: 800;
        letter-spacing: 2px;
        transition: .3s ease;
    }

    .logo:hover {
        transform: translateY(-2px);
        letter-spacing: 3px;
    }

    .logo span {
        color: #9ddcff;
    }

    .nav-right {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .role {
        padding: 9px 17px;
        border-radius: 30px;

        background: rgba(255,255,255,.12);
        border: 1px solid rgba(255,255,255,.20);

        color: rgba(255,255,255,.90);

        font-size: 13px;
        font-weight: 700;
    }

    .logout {
        border: 1px solid rgba(255,255,255,.20);

        padding: 10px 18px;
        border-radius: 25px;

        background: rgba(255,255,255,.92);
        color: #123c57;

        font-weight: 700;
        cursor: pointer;
        transition: .3s;
    }

    .logout:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,.20);
        background: white;
    }

    /* ================= CONTAINER ================= */

    .container {
        position: relative;
        z-index: 2;

        width: 90%;
        max-width: 1250px;

        margin: auto;

        padding-top: 130px;
        padding-bottom: 90px;
    }

    /* ================= HEADER ================= */

    .header {
        margin-bottom: 35px;
        animation: fadeUp .8s ease both;
    }

    .small-title {
        font-size: 12px;
        letter-spacing: 4px;
        text-transform: uppercase;
        color: #a7e2ff;
        margin-bottom: 12px;
        font-weight: 700;
    }

    .header h1 {
        font-size: clamp(40px, 6vw, 62px);
        line-height: 1.05;
        margin-bottom: 12px;
        font-weight: 850;
    }

    .header p {
        max-width: 650px;
        color: rgba(255,255,255,.72);
        line-height: 1.7;
        font-size: 15px;
    }

    /* ================= CARD ================= */

    .card {
        position: relative;

        padding: 30px;
        border-radius: 30px;

        background:
            linear-gradient(
                135deg,
                rgba(255,255,255,.14),
                rgba(255,255,255,.07)
            );

        backdrop-filter: blur(22px);
        -webkit-backdrop-filter: blur(22px);

        border: 1px solid rgba(255,255,255,.20);

        box-shadow: 0 30px 80px rgba(0,0,0,.22);

        animation: fadeUp 1s ease both;

        overflow: hidden;
    }

    .card::before {
        content: "";

        position: absolute;

        width: 300px;
        height: 300px;

        top: -180px;
        right: -100px;

        border-radius: 50%;

        background:
            radial-gradient(
                circle,
                rgba(150,230,255,.15),
                transparent 70%
            );

        pointer-events: none;
    }

    /* ================= CARD HEADER ================= */

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;

        margin-bottom: 25px;
        gap: 20px;
    }

    .card-title {
        font-size: 21px;
        font-weight: 800;
    }

    .card-subtitle {
        margin-top: 5px;
        color: rgba(255,255,255,.55);
        font-size: 13px;
    }

    .total-ticket {
        padding: 10px 16px;
        border-radius: 20px;

        background: rgba(255,255,255,.10);
        border: 1px solid rgba(255,255,255,.16);

        color: #cceeff;

        font-size: 12px;
        font-weight: 700;

        white-space: nowrap;
    }

    /* ================= TABLE ================= */

    .table-wrapper {
        overflow-x: auto;
        border-radius: 20px;

        scrollbar-width: thin;
    }

    table {
        width: 100%;
        min-width: 900px;

        border-collapse: separate;
        border-spacing: 0;
    }

    th {
        padding: 17px;

        text-align: left;

        color: #bfeaff;

        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1.4px;

        background: rgba(255,255,255,.06);

        border-bottom: 1px solid rgba(255,255,255,.18);

        white-space: nowrap;
    }

    th:first-child {
        border-top-left-radius: 15px;
    }

    th:last-child {
        border-top-right-radius: 15px;
    }

    td {
        padding: 18px 17px;

        color: rgba(255,255,255,.86);

        border-bottom: 1px solid rgba(255,255,255,.09);

        vertical-align: middle;

        font-size: 13px;
    }

    tbody tr {
        transition: .3s ease;
        background: rgba(255,255,255,.025);
    }

    tbody tr:hover {
        background: rgba(255,255,255,.075);
        transform: translateX(3px);
    }

    tbody tr:last-child td {
        border-bottom: none;
    }

    /* ================= TICKET ================= */

    .ticket {
        color: #bfeaff;
        font-weight: 800;
        letter-spacing: .5px;
        white-space: nowrap;
    }

    /* ================= DOWNLOAD ================= */

    .download-btn {
        display: inline-flex;

        align-items: center;
        justify-content: center;
        gap: 8px;

        padding: 10px 16px;

        border-radius: 22px;

        background: rgba(157,220,255,.14);

        border: 1px solid rgba(157,220,255,.28);

        color: #d8f4ff;

        text-decoration: none;

        font-size: 12px;
        font-weight: 750;

        transition: .3s ease;

        white-space: nowrap;
    }

    .download-btn:hover {
        background: rgba(157,220,255,.27);

        border-color: rgba(180,235,255,.45);

        transform: translateY(-3px);

        box-shadow: 0 10px 25px rgba(0,0,0,.20);
    }

    .download-btn:active {
        transform: scale(.96);
    }

    .download-icon {
        width: 17px;
        height: 17px;

        display: inline-flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: rgba(255,255,255,.14);

        font-size: 10px;
    }

    .date {
        color: rgba(255,255,255,.70);
        white-space: nowrap;
    }

    /* ================= EMPTY ================= */

    .empty {
        text-align: center;
        padding: 60px 20px;
        color: rgba(255,255,255,.55);
    }

    .empty-title {
        color: white;
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 7px;
    }

    .empty-text {
        font-size: 13px;
        color: rgba(255,255,255,.50);
    }

    /* ================= BACK ================= */

    .back-btn {
        display: inline-flex;

        align-items: center;
        gap: 8px;

        margin-top: 25px;

        padding: 12px 20px;

        border-radius: 25px;

        text-decoration: none;

        background: rgba(255,255,255,.92);

        color: #123c57;

        font-weight: 700;

        transition: .3s;

        box-shadow: 0 8px 25px rgba(0,0,0,.10);
    }

    .back-btn:hover {
        transform: translateY(-3px);

        box-shadow: 0 12px 30px rgba(0,0,0,.20);

        background: white;
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

    @media (max-width: 700px) {

        .navbar {
            padding: 0 5%;
        }

        .role {
            display: none;
        }

        .container {
            width: 92%;
            padding-top: 110px;
        }

        .card {
            padding: 18px;
            border-radius: 24px;
        }

        .card-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .header h1 {
            font-size: 42px;
        }
    }
</style>
```

</head>

<body>

```
<!-- CLOUDS -->

<div class="clouds">

    <div class="cloud cloud-1">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="cloud cloud-2">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="cloud cloud-3">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="cloud cloud-4">
        <span></span>
        <span></span>
        <span></span>
    </div>

</div>


<!-- NAVBAR -->

<nav class="navbar">

    <a href="/pegawai/dashboard" class="logo">
        WISATA<span>.</span>
    </a>

    <div class="nav-right">

        <div class="role">
            PEGAWAI
        </div>

        <form action="/logout" method="POST">

            @csrf

            <button type="submit" class="logout">
                Logout
            </button>

        </form>

    </div>

</nav>


<!-- CONTENT -->

<main class="container">

    <div class="header">

        <div class="small-title">
            Travel Operations
        </div>

        <h1>
            E-Ticket
        </h1>

        <p>
            Menangani informasi e-ticket perjalanan
            pelanggan dalam satu ruang kerja.
        </p>

    </div>


    <div class="card">

        <!-- CARD HEADER -->

        <div class="card-header">

            <div>

                <div class="card-title">
                    Data E-Ticket
                </div>

                <div class="card-subtitle">
                    Daftar e-ticket perjalanan pelanggan
                </div>

            </div>


            <div class="total-ticket">

                Total
                {{ $eTickets->count() }}
                Ticket

            </div>

        </div>


        <!-- TABLE -->

        <div class="table-wrapper">

            <table>

                <thead>

                    <tr>

                        <th>
                            ID Ticket
                        </th>

                        <th>
                            ID Pemesanan
                        </th>

                        <th>
                            Nomor Ticket
                        </th>

                        <th>
                            Download
                        </th>

                        <th>
                            Tanggal Terbit
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($eTickets as $item)

                        <tr>

                            <!-- ID TICKET -->

                            <td>
                                {{ $item->id_ticket }}
                            </td>


                            <!-- ID PEMESANAN -->

                            <td>
                                {{ $item->id_pemesanan }}
                            </td>


                            <!-- NOMOR TICKET -->

                            <td class="ticket">
                                {{ $item->nomor_ticket }}
                            </td>


                            <!-- DOWNLOAD -->

                            <td>

                                <a
                                    href="{{ route('pegawai.e-ticket.download', $item->id_ticket) }}"
                                    class="download-btn"
                                >

                                    <span class="download-icon">
                                        ↓
                                    </span>

                                    Lihat / Download PDF

                                </a>

                            </td>


                            <!-- TANGGAL TERBIT -->

                            <td class="date">

                                {{ $item->tgl_terbit
                                    ? \Carbon\Carbon::parse($item->tgl_terbit)->format('d M Y')
                                    : '-'
                                }}

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="5"
                                class="empty"
                            >

                                <div class="empty-title">
                                    Belum Ada E-Ticket
                                </div>

                                <div class="empty-text">
                                    E-ticket pelanggan
                                    akan muncul di halaman ini.
                                </div>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        <!-- BACK -->

        <a
            href="/pegawai/dashboard"
            class="back-btn"
        >

            ← Kembali ke Dashboard

        </a>

    </div>

</main>
```

</body>

</html>
