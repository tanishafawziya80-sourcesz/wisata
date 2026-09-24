<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - WISATA.</title>

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
            color: #1e3d59;
            background: linear-gradient(135deg, #f0f8ff, #e6f4f8);
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
                    135deg,
                    rgba(24, 115, 150, 0.45),
                    rgba(40, 150, 185, 0.55)
                ),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2000&q=85");
            background-size: cover;
            background-position: center;
        }

        .page-background::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(240, 248, 252, 0.92);
            backdrop-filter: blur(4px);
        }

        /* =================================================
            LAYOUT WRAPPER
        ================================================= */
        .app-layout {
            display: flex;
            min-height: 100vh;
        }

        /* =================================================
            SIDEBAR
        ================================================= */
        .sidebar {
            position: sticky;
            top: 20px;
            width: 255px;
            height: calc(100vh - 40px);
            margin: 20px 0 20px 20px;
            padding: 30px 20px;
            border-radius: 30px;
            background: rgba(20, 92, 128, 0.92);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(22px);
            box-shadow: 0 25px 60px rgba(12, 60, 85, 0.15);
            display: flex;
            flex-direction: column;
            z-index: 1000;
            overflow-y: auto;
            flex-shrink: 0;
        }

        .sidebar-logo {
            padding: 5px 12px 28px;
            color: white;
            text-decoration: none;
            font-size: 29px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .sidebar-logo span {
            color: #70d6ff;
        }

        .admin-profile {
            margin: 0 2px 25px;
            padding: 20px;
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        .admin-profile small {
            display: block;
            color: rgba(255, 255, 255, 0.7);
            font-size: 11px;
            margin-bottom: 5px;
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
            background: rgba(112, 214, 255, 0.25);
            color: #d0f4ff;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .sidebar-title {
            padding: 0 13px 10px;
            color: rgba(255, 255, 255, 0.6);
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .sidebar-menu {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 13px 14px;
            border-radius: 18px;
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            font-size: 13px;
            transition: .3s;
        }

        .sidebar-menu a:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transform: translateX(4px);
        }

        .sidebar-menu a.active {
            background: rgba(255, 255, 255, 0.25);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        }

        .menu-indicator {
            width: 6px;
            height: 6px;
            margin-right: 12px;
            border-radius: 50%;
            background: rgba(112, 214, 255, 0.7);
            flex-shrink: 0;
        }

        .sidebar-menu a.active .menu-indicator {
            background: #70d6ff;
            box-shadow: 0 0 12px #70d6ff;
        }

        .sidebar-logout {
            margin-top: auto;
            padding-top: 18px;
            flex-shrink: 0;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        .sidebar-logout button {
            width: 100%;
            padding: 13px 15px;
            border: none;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: white;
            font-weight: 700;
            cursor: pointer;
            transition: .3s;
        }

        .sidebar-logout button:hover {
            background: rgba(255, 255, 255, 0.28);
            transform: translateY(-2px);
        }

        /* =================================================
            CONTENT WRAPPER
        ================================================= */
        .content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        .main {
            padding: 50px 45px 30px;
            flex: 1;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            width: 100%;
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
                    135deg,
                    rgba(14, 92, 128, 0.82),
                    rgba(24, 130, 168, 0.88)
                ),
                url("https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=2000&q=85");
            background-size: cover;
            background-position: center;
            box-shadow: 0 25px 70px rgba(24, 115, 150, 0.15);
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
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(5px);
        }

        .hero-content {
            max-width: 700px;
            position: relative;
            z-index: 2;
        }

        .hero-small {
            color: #b2efff;
            font-size: 12px;
            letter-spacing: 4px;
            text-transform: uppercase;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .hero h1 {
            color: white;
            font-size: clamp(42px, 6vw, 70px);
            line-height: 1.05;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #70d6ff;
        }

        .hero p {
            color: rgba(255, 255, 255, 0.9);
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
            color: #1880a8;
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
            color: #52758a;
            margin-top: 8px;
            line-height: 1.6;
        }

        /* =================================================
            MANAGEMENT LIST (Satu-satu ke pinggir / Full Width Rows)
        ================================================= */
        .management {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .management-card {
            min-height: 200px;
            padding: 35px 45px;
            border-radius: 28px;
            /* Background transparan dengan gambar pemandangan alam */
            background: 
                linear-gradient(
                    90deg,
                    rgba(14, 55, 78, 0.88) 0%,
                    rgba(24, 115, 150, 0.78) 50%,
                    rgba(14, 55, 78, 0.65) 100%
                ),
                url("https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1600&q=80");
            background-size: cover;
            background-position: center;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 20px 45px rgba(30, 110, 150, 0.12);
            position: relative;
            overflow: hidden;
            transition: .35s;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .management-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 28px 60px rgba(30, 110, 150, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .management-card-content {
            max-width: 700px;
            position: relative;
            z-index: 2;
        }

        .card-accent {
            width: 45px;
            height: 5px;
            border-radius: 20px;
            background: #70d6ff;
            margin-bottom: 15px;
        }

        .management-card h3 {
            color: #ffffff;
            font-size: 24px;
            margin-bottom: 8px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .management-card p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
            line-height: 1.6;
        }

        .management-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            position: relative;
            z-index: 3;
            flex-shrink: 0;
        }

        .management-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 22px;
            min-height: 42px;
            border-radius: 25px;
            background: #70d6ff;
            color: #0e3c55;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            transition: .3s;
            box-shadow: 0 4px 15px rgba(112, 214, 255, 0.3);
        }

        .management-btn:hover {
            transform: translateY(-3px);
            background: #50c4f5;
            box-shadow: 0 8px 20px rgba(112, 214, 255, 0.4);
        }

        .management-btn.secondary {
            background: rgba(255, 255, 255, 0.15);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: none;
        }

        .management-btn.secondary:hover {
            background: rgba(255, 255, 255, 0.28);
        }

        .income-label {
            display: inline-block;
            margin-bottom: 8px;
            color: #70d6ff;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* =================================================
            ADMIN DASHBOARD FOOTER
        ================================================= */
        .admin-footer {
            margin-top: 80px;
            background: rgba(255, 255, 255, 0.8);
            border-top: 1px solid rgba(24, 115, 150, 0.15);
            backdrop-filter: blur(12px);
            padding: 25px 45px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: #4a6572;
        }

        .admin-footer-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .admin-footer-left strong {
            color: #123c57;
        }

        .server-status {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(34, 197, 94, 0.1);
            color: #15803d;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }

        .server-status::before {
            content: "";
            width: 6px;
            height: 6px;
            background-color: #22c55e;
            border-radius: 50%;
            display: inline-block;
        }

        .admin-footer-right {
            display: flex;
            gap: 20px;
        }

        .admin-footer-right a {
            color: #52758a;
            text-decoration: none;
            transition: color 0.2s;
        }

        .admin-footer-right a:hover {
            color: #1880a8;
            text-decoration: underline;
        }

        /* =================================================
            ANIMATION & RESPONSIVE
        ================================================= */
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

        @media (max-width: 1000px) {
            .sidebar {
                width: 220px;
            }
            .management-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 25px;
                padding: 30px;
            }
            .management-actions {
                width: 100%;
                justify-content: flex-start;
            }
        }

        @media (max-width: 750px) {
            .app-layout {
                flex-direction: column;
            }

            .sidebar {
                position: relative;
                top: auto;
                width: calc(100% - 30px);
                height: auto;
                margin: 15px;
                padding: 22px;
            }

            .sidebar-menu {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }

            .sidebar-logout {
                margin-top: 15px;
            }

            .main {
                padding: 20px;
            }

            .hero {
                padding: 45px 30px;
            }

            .hero h1 {
                font-size: 43px;
            }

            .admin-footer {
                flex-direction: column;
                gap: 15px;
                text-align: center;
                padding: 20px;
            }

            .admin-footer-left {
                flex-direction: column;
                gap: 8px;
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

            .management-actions {
                flex-direction: column;
                align-items: stretch;
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
            background: rgba(255, 255, 255, 0.35);
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <!-- BACKGROUND -->
    <div class="page-background"></div>

    <!-- APP LAYOUT WRAPPER -->
    <div class="app-layout">

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <a href="/admin/dashboard" class="sidebar-logo">
                WISATA<span>.</span>
            </a>

            <div class="admin-profile">
                <small>Logged in as</small>
                <div class="admin-name">
                    {{ auth()->user()->nama_lengkap }}
                </div>
                <div style="color:white; font-size: 13px; margin-top: 4px;">
                    Role: {{ auth()->user()->role }}
                </div>
                <span class="admin-role">
                    ADMIN
                </span>
            </div>

            <div class="sidebar-title">Dashboard</div>

            <nav class="sidebar-menu">
                <a href="/admin/dashboard" class="active">
                    <span class="menu-indicator"></span>
                    Dashboard
                </a>
                <a href="/admin/paket-wisata">
                    <span class="menu-indicator"></span>
                    Paket Wisata
                </a>
                <a href="/admin/jadwal-tour">
                    <span class="menu-indicator"></span>
                    Jadwal Tour
                </a>
                <a href="/admin/pengguna">
                    <span class="menu-indicator"></span>
                    Pengguna
                </a>
                <a href="/admin/penghasilan">
                    <span class="menu-indicator"></span>
                    Penghasilan
                </a>
            </nav>

            <div class="sidebar-logout">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        </aside>

        <!-- CONTENT WRAPPER -->
        <div class="content-wrapper">
            <main class="main">
                <div class="container">

                    <!-- HERO -->
                    <section class="hero">
                        <div class="hero-content">
                            <div class="hero-small">
                                WISATA. • ADMIN DASHBOARD
                            </div>
                            <h1>
                                Kelola perjalanan,
                                <span>ciptakan pengalaman.</span>
                            </h1>
                            <p>
                                Selamat datang,
                                <strong>{{ auth()->user()->nama_lengkap }}</strong>.
                                Kelola informasi perjalanan wisata,
                                jadwal tour, pengguna, serta
                                penghasilan melalui dashboard
                                administrator WISATA.
                            </p>
                        </div>
                    </section>

                    <!-- MANAGEMENT -->
                    <div class="section-heading" id="pengelolaan">
                        <div>
                            <small>Management</small>
                            <h2>Pengelolaan Sistem</h2>
                            <p>Pilih bagian yang ingin dikelola.</p>
                        </div>
                    </div>

                    <section class="management">
                        <!-- PAKET WISATA -->
                        <div class="management-card">
                            <div class="management-card-content">
                                <div class="card-accent"></div>
                                <h3>Paket Wisata</h3>
                                <p>
                                    Mengelola informasi paket wisata yang tersedia untuk pelanggan, termasuk menambahkan dan memperbarui paket perjalanan.
                                </p>
                            </div>
                            <div class="management-actions">
                                <a href="/admin/paket-wisata" class="management-btn">Kelola Paket</a>
                                <a href="/admin/paket-wisata/create" class="management-btn secondary">+ Tambah Paket</a>
                            </div>
                        </div>

                        <!-- JADWAL TOUR -->
                        <div class="management-card">
                            <div class="management-card-content">
                                <div class="card-accent"></div>
                                <h3>Jadwal Tour</h3>
                                <p>
                                    Mengelola informasi jadwal perjalanan wisata yang tersedia dalam sistem.
                                </p>
                            </div>
                            <div class="management-actions">
                                <a href="/admin/jadwal-tour" class="management-btn">Kelola Jadwal</a>
                                <a href="/admin/jadwal-tour/create" class="management-btn secondary">+ Tambah Jadwal</a>
                            </div>
                        </div>

                        <!-- PENGGUNA -->
                        <div class="management-card">
                            <div class="management-card-content">
                                <div class="card-accent"></div>
                                <h3>Pengguna</h3>
                                <p>
                                    Mengelola data pengguna berdasarkan kebutuhan dan hak akses sistem.
                                </p>
                            </div>
                            <div class="management-actions">
                                <a href="/admin/pengguna" class="management-btn">Kelola Pengguna</a>
                            </div>
                        </div>

                        <!-- PENGHASILAN -->
                        <div class="management-card">
                            <div class="management-card-content">
                                <div class="income-label">Financial Management</div>
                                <div class="card-accent"></div>
                                <h3>Penghasilan</h3>
                                <p>
                                    Melihat dan mengelola informasi penghasilan yang diperoleh dari pemesanan paket wisata.
                                </p>
                            </div>
                            <div class="management-actions">
                                <a href="/admin/penghasilan" class="management-btn">Lihat Penghasilan</a>
                            </div>
                        </div>

                        <!-- SISTEM -->
                        <div class="management-card">
                            <div class="management-card-content">
                                <div class="card-accent"></div>
                                <h3>Sistem</h3>
                                <p>
                                    Melihat informasi pengelolaan sistem perjalanan wisata.
                                </p>
                            </div>
                            <div class="management-actions">
                                <a href="{{ route('admin.sistem') }}" class="management-btn">Lihat Sistem</a>
                            </div>
                        </div>
                    </section>

                </div>
            </main>

            <!-- ADMIN PANEL FOOTER -->
            <footer class="admin-footer">
                <div class="admin-footer-left">
                    <div>© {{ date('Y') }} <strong>PT. WISATA Nusantara</strong>. All Rights Reserved.</div>
                    <div class="server-status">System Operational</div>
                </div>
                <div class="admin-footer-right">
                    <a href="#">Bantuan Admin</a>
                    <a href="#">Dokumentasi API</a>
                    <span>v2.4.0-stable</span>
                </div>
            </footer>
        </div>

    </div>

</body>

</html>