<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Dashboard Admin - WISATA.
    </title>


    <style>

        /* =================================================
           RESET
        ================================================= */

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

            color: #17384d;

            background:
                linear-gradient(
                    135deg,
                    #e9f7fb,
                    #f8fcfd
                );

            overflow-x: hidden;
        }



        /* =================================================
           BACKGROUND
        ================================================= */

        .page-background {

            position: fixed;

            inset: 0;

            z-index: -2;

            background:
                linear-gradient(
                    rgba(8, 59, 79, .72),
                    rgba(8, 59, 79, .78)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2000&q=85");

            background-size: cover;

            background-position: center;

        }


        .page-background::after {

            content: "";

            position: absolute;

            inset: 0;

            background:
                rgba(226, 245, 250, .88);

            backdrop-filter: blur(3px);

        }



        /* =================================================
           SIDEBAR
        ================================================= */

        .sidebar {
    position: fixed;

    left: 20px;
    top: 20px;
    bottom: 20px;

    width: 255px;

    padding: 30px 20px;

    border-radius: 30px;

    background: rgba(8, 65, 88, .88);

    border: 1px solid rgba(255,255,255,.18);

    backdrop-filter: blur(22px);

    box-shadow: 0 25px 60px rgba(0,0,0,.18);

    display: flex;
    flex-direction: column;

    z-index: 1000;

    /* TAMBAHAN */
    overflow-y: auto;
    overflow-x: hidden;
}


        /* =================================================
           LOGO
        ================================================= */

        .sidebar-logo {

            padding:
                5px 12px 28px;

            color: white;

            text-decoration: none;

            font-size: 29px;

            font-weight: 800;

            letter-spacing: 2px;

        }


        .sidebar-logo span {

            color: #9ddcff;

        }



        /* =================================================
           ADMIN PROFILE
        ================================================= */

        .admin-profile {

            margin:
                0 2px 25px;

            padding: 20px;

            border-radius: 22px;

            background:
                rgba(255,255,255,.10);

            border:
                1px solid rgba(255,255,255,.15);

        }


        .admin-icon {

            width: 48px;

            height: 48px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 16px;

            background:
                rgba(157,220,255,.18);

            font-size: 25px;

            margin-bottom: 12px;

        }


        .admin-profile small {

            display: block;

            color:
                rgba(255,255,255,.55);

            font-size: 11px;

            margin-bottom: 4px;

        }


        .admin-name {

            color: white;

            font-size: 15px;

            font-weight: 700;

        }


        .admin-role {

            display: inline-block;

            margin-top: 8px;

            padding: 5px 12px;

            border-radius: 20px;

            background:
                rgba(157,220,255,.18);

            color: #bfeaff;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1px;

        }



        /* =================================================
           SIDEBAR TITLE
        ================================================= */

        .sidebar-title {

            padding:
                0 13px 10px;

            color:
                rgba(255,255,255,.45);

            font-size: 10px;

            letter-spacing: 2px;

            text-transform: uppercase;

        }



        /* =================================================
           SIDEBAR MENU
        ================================================= */

        .sidebar-menu {

            display: flex;

            flex-direction: column;

            gap: 5px;

        }


        .sidebar-menu a {

            display: flex;

            align-items: center;

            gap: 13px;

            padding: 13px 14px;

            border-radius: 18px;

            color:
                rgba(255,255,255,.78);

            text-decoration: none;

            font-size: 13px;

            transition: .3s;

        }


        .sidebar-menu a:hover {

            background:
                rgba(255,255,255,.12);

            color: white;

            transform:
                translateX(4px);

        }


        .sidebar-menu a.active {

            background:
                rgba(255,255,255,.15);

            color: white;

            border:
                1px solid rgba(255,255,255,.15);

        }


        .menu-icon {

            width: 30px;

            height: 30px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 10px;

            background:
                rgba(255,255,255,.10);

            font-size: 15px;

            flex-shrink: 0;

        }



        /* =================================================
           SIDEBAR LOGOUT
        ================================================= */

        .sidebar-logout {
    margin-top: auto;
    padding-top: 18px;
    flex-shrink: 0;

    border-top: 1px solid rgba(255,255,255,.15);
}

        .sidebar-logout button {

            width: 100%;

            padding: 13px 15px;

            border: none;

            border-radius: 18px;

            background:
                rgba(255,255,255,.12);

            border:
                1px solid rgba(255,255,255,.18);

            color: white;

            font-weight: 700;

            cursor: pointer;

            transition: .3s;

        }


        .sidebar-logout button:hover {

            background:
                rgba(255,255,255,.20);

            transform:
                translateY(-2px);

        }



        /* =================================================
           MAIN
        ================================================= */

        .main {

            margin-left: 295px;

            padding:
                70px 55px 50px;

            min-height: 100vh;

        }


        .container {

            max-width: 1200px;

            margin: auto;

        }



        /* =================================================
           HERO
        ================================================= */

        .hero {

            min-height: 410px;

            padding: 65px 55px;

            display: flex;

            align-items: center;

            border-radius: 35px;

            background:
                linear-gradient(
                    rgba(5, 51, 70, .72),
                    rgba(5, 51, 70, .78)
                ),
                url("https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=2000&q=85");

            background-size: cover;

            background-position: center;

            box-shadow:
                0 25px 70px rgba(21,72,94,.15);

            position: relative;

            overflow: hidden;

            animation: fadeUp .8s ease;

        }


        .hero::after {

            content: "";

            position: absolute;

            width: 260px;

            height: 260px;

            right: -80px;

            top: -90px;

            border-radius: 50%;

            background:
                rgba(255,255,255,.08);

            backdrop-filter: blur(5px);

        }


        .hero-content {

            max-width: 700px;

            position: relative;

            z-index: 2;

        }


        .hero-small {

            color: #a7e2ff;

            font-size: 12px;

            letter-spacing: 4px;

            text-transform: uppercase;

            margin-bottom: 15px;

        }


        .hero h1 {

            color: white;

            font-size:
                clamp(42px, 6vw, 70px);

            line-height: 1.05;

            margin-bottom: 20px;

        }


        .hero h1 span {

            color: #9ddcff;

        }


        .hero p {

            color:
                rgba(255,255,255,.82);

            font-size: 16px;

            line-height: 1.8;

            max-width: 650px;

        }



        /* =================================================
           SECTION HEADING
        ================================================= */

        .section-heading {

            margin-top: 70px;

            margin-bottom: 30px;

        }


        .section-heading small {

            color: #4d8cad;

            font-size: 12px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 4px;

        }


        .section-heading h2 {

            color: #123c57;

            font-size: 38px;

            margin-top: 8px;

        }


        .section-heading p {

            color: #718896;

            margin-top: 8px;

            line-height: 1.6;

        }



        /* =================================================
           MANAGEMENT GRID
        ================================================= */

        .management {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 22px;

        }



        /* =================================================
           MANAGEMENT CARD
        ================================================= */

        .management-card {

            min-height: 270px;

            padding: 30px;

            border-radius: 28px;

            background:
                rgba(255,255,255,.78);

            border:
                1px solid rgba(255,255,255,.90);

            backdrop-filter: blur(18px);

            box-shadow:
                0 18px 50px rgba(27,71,93,.08);

            position: relative;

            overflow: hidden;

            transition: .35s;

            animation: fadeUp .8s ease;

        }


        .management-card::after {

            content: "";

            position: absolute;

            width: 100px;

            height: 100px;

            right: -30px;

            top: -30px;

            border-radius: 50%;

            background:
                rgba(196,231,242,.28);

        }


        .management-card:hover {

            transform:
                translateY(-7px);

            box-shadow:
                0 28px 65px rgba(27,71,93,.13);

        }



        /* =================================================
           MANAGEMENT ICON
        ================================================= */

        .management-icon {

            width: 56px;

            height: 56px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 18px;

            background:
                #e4f4f9;

            font-size: 27px;

            margin-bottom: 20px;

            position: relative;

            z-index: 2;

        }


        .management-card h3 {

            color: #123c57;

            font-size: 21px;

            margin-bottom: 9px;

            position: relative;

            z-index: 2;

        }


        .management-card p {

            color: #708795;

            font-size: 14px;

            line-height: 1.7;

            max-width: 520px;

            position: relative;

            z-index: 2;

        }



        /* =================================================
           BUTTON AREA
        ================================================= */

        .management-actions {

            display: flex;

            flex-wrap: wrap;

            align-items: center;

            gap: 8px;

            margin-top: 20px;

            position: relative;

            z-index: 3;

        }


        .management-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 10px 17px;

            min-height: 38px;

            border-radius: 25px;

            background:
                #123c57;

            color: white;

            text-decoration: none;

            font-size: 12px;

            font-weight: 700;

            transition: .3s;

        }


        .management-btn:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 10px 25px rgba(18,60,87,.20);

        }


        .management-btn.secondary {

            background:
                #e8f4f9;

            color:
                #28617e;

        }


        .management-btn.secondary:hover {

            background:
                #dceef5;

            box-shadow:
                0 10px 25px rgba(40,97,126,.12);

        }



        /* =================================================
           FOOTER
        ================================================= */

        .footer {

            margin-top: 55px;

            padding: 25px;

            text-align: center;

            color: #78909c;

            font-size: 12px;

        }



        /* =================================================
           ANIMATION
        ================================================= */

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



        /* =================================================
           RESPONSIVE
        ================================================= */

        @media (max-width: 1000px) {

            .sidebar {

                width: 220px;

            }

            .main {

                margin-left: 250px;

                padding:
                    50px 30px;

            }

            .management {

                grid-template-columns: 1fr;

            }

        }


        @media (max-width: 750px) {

            .sidebar {

                position: relative;

                top: auto;

                left: auto;

                bottom: auto;

                width: calc(100% - 30px);

                margin: 15px;

                padding: 22px;

            }


            .sidebar-menu {

                display: grid;

                grid-template-columns:
                    repeat(2, 1fr);

            }


            .sidebar-logout {

                margin-top: 15px;

            }


            .main {

                margin-left: 0;

                padding:
                    20px;

            }


            .hero {

                padding:
                    45px 30px;

            }


            .hero h1 {

                font-size: 43px;

            }


            .section-heading {

                margin-top: 45px;

            }

        }


        @media (max-width: 500px) {

            .sidebar-menu {

                grid-template-columns: 1fr;

            }


            .hero {

                min-height: 350px;

                border-radius: 25px;

            }


            .management-card {

                padding: 25px;

            }


            .management-actions {

                align-items: stretch;

                flex-direction: column;

            }


            .management-btn {

                width: 100%;

            }

        }

        .sidebar::-webkit-scrollbar {
    width: 5px;
}

.sidebar::-webkit-scrollbar-track {
    background: transparent;
}

.sidebar::-webkit-scrollbar-thumb {
    background: rgba(255,255,255,.25);
    border-radius: 10px;
}

    </style>

</head>


<body>


    <!-- =================================================
         BACKGROUND
    ================================================== -->

    <div class="page-background"></div>



    <!-- =================================================
         SIDEBAR
    ================================================== -->

    <aside class="sidebar">


        <a
            href="/admin/dashboard"
            class="sidebar-logo"
        >
            WISATA<span>.</span>
        </a>



        <!-- ADMIN PROFILE -->

        <div class="admin-profile">

            <div class="admin-icon">
                👑
            </div>

            <small>
                Logged in as
            </small>

            <div class="admin-name">
                {{ auth()->user()->nama_lengkap }}
            </div>

            <span class="admin-role">
                ADMIN
            </span>

        </div>



        <!-- MENU -->

        <div class="sidebar-title">
            Dashboard
        </div>


        <nav class="sidebar-menu">


            <a
                href="/admin/dashboard"
                class="active"
            >

                <span class="menu-icon">
                    🏠
                </span>

                Dashboard

            </a>



            <a
                href="/admin/paket-wisata"
            >

                <span class="menu-icon">
                    🌴
                </span>

                Paket Wisata

            </a>



            <a
                href="/admin/jadwal-tour"
            >

                <span class="menu-icon">
                    📅
                </span>

                Jadwal Tour

            </a>



            <a
                href="/admin/pengguna"
            >

                <span class="menu-icon">
                    👥
                </span>

                Pengguna

            </a>


        </nav>



        <!-- LOGOUT -->

        <div class="sidebar-logout">

            <form
                action="/logout"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                >
                    🚪 &nbsp; Logout
                </button>

            </form>

        </div>


    </aside>



    <!-- =================================================
         MAIN
    ================================================== -->

    <main class="main">


        <div class="container">


            <!-- =================================================
                 HERO
            ================================================== -->

            <section class="hero">


                <div class="hero-content">


                    <div class="hero-small">
                        WISATA. • ADMIN DASHBOARD
                    </div>


                    <h1>

                        Kelola perjalanan,
                        <span>
                            ciptakan pengalaman.
                        </span>

                    </h1>


                    <p>

                        Selamat datang,
                        <strong>
                            {{ auth()->user()->nama_lengkap }}
                        </strong>.

                        Kelola informasi perjalanan wisata,
                        jadwal tour, serta pengguna melalui
                        dashboard administrator WISATA.

                    </p>


                </div>


            </section>



            <!-- =================================================
                 MANAGEMENT
            ================================================== -->

            <div
                class="section-heading"
                id="pengelolaan"
            >

                <div>

                    <small>
                        Management
                    </small>

                    <h2>
                        Pengelolaan Sistem
                    </h2>

                    <p>
                        Pilih bagian yang ingin dikelola.
                    </p>

                </div>

            </div>



            <section class="management">


                <!-- =================================================
                     PAKET WISATA
                ================================================== -->

                <div class="management-card">


                    <div class="management-icon">
                        🌴
                    </div>


                    <h3>
                        Paket Wisata
                    </h3>


                    <p>

                        Mengelola informasi paket wisata
                        yang tersedia untuk pelanggan,
                        termasuk menambahkan dan memperbarui
                        paket perjalanan.

                    </p>


                    <div class="management-actions">


                        <a
                            href="/admin/paket-wisata"
                            class="management-btn"
                        >
                            Kelola Paket
                        </a>


                        <a
                            href="/admin/paket-wisata/create"
                            class="management-btn secondary"
                        >
                            + Tambah Paket
                        </a>


                    </div>


                </div>



                <!-- =================================================
                     JADWAL TOUR
                ================================================== -->

                <div class="management-card">


                    <div class="management-icon">
                        📅
                    </div>


                    <h3>
                        Jadwal Tour
                    </h3>


                    <p>

                        Mengelola informasi jadwal perjalanan
                        wisata yang tersedia dalam sistem.

                    </p>


                    <div class="management-actions">


                        <a
                            href="/admin/jadwal-tour"
                            class="management-btn"
                        >
                            Kelola Jadwal
                        </a>


                        <a
                            href="/admin/jadwal-tour/create"
                            class="management-btn secondary"
                        >
                            + Tambah Jadwal
                        </a>


                    </div>


                </div>



                <!-- =================================================
                     PENGGUNA
                ================================================== -->

                <div class="management-card">


                    <div class="management-icon">
                        👥
                    </div>


                    <h3>
                        Pengguna
                    </h3>


                    <p>

                        Mengelola data pengguna berdasarkan
                        kebutuhan dan hak akses sistem.

                    </p>


                    <div class="management-actions">


                        <a
                            href="/admin/pengguna"
                            class="management-btn"
                        >
                            Kelola Pengguna
                        </a>


                    </div>


                </div>



                <!-- =================================================
                     SISTEM
                ================================================== -->

                <div class="management-card">


                    <div class="management-icon">
                        ⚙️
                    </div>


                    <h3>
                        Sistem
                    </h3>


                    <p>

                        Melihat informasi pengelolaan sistem
                        perjalanan wisata.

                    </p>


                    <div class="management-actions">


                        <a
                            href="{{ route('admin.sistem') }}"
                            class="management-btn"
                        >
                            Lihat Sistem
                        </a>


                    </div>


                </div>


            </section>



            <!-- =================================================
                 FOOTER
            ================================================== -->

            <footer class="footer">

                © {{ date('Y') }}
                WISATA.
                All Rights Reserved.

            </footer>


        </div>


    </main>


</body>

</html>