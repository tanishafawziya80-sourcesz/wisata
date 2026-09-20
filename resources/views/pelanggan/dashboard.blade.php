<!DOCTYPE html>

<html lang="id">

<head>

```
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Pelanggan - WISATA.</title>


<style>

    /* =====================================================
       RESET
    ===================================================== */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", Arial, sans-serif;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        background: #f7f9f8;
        color: #173444;
        overflow-x: hidden;
    }

    a {
        text-decoration: none;
    }

    :root {
        --navy: #123c57;
        --navy-light: #285b75;
        --blue: #6faeca;
        --blue-light: #eaf5f8;
        --cream: #f8f7f2;
        --white: #ffffff;
        --text: #173444;
        --muted: #748791;
        --line: rgba(18,60,87,.10);
        --shadow: 0 20px 60px rgba(28,73,94,.09);
    }


    /* =====================================================
       NAVBAR
    ===================================================== */

    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 80px;
        padding: 0 7%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: rgba(255,255,255,.92);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(18,60,87,.08);
        box-shadow: 0 8px 30px rgba(18,60,87,.05);
        z-index: 9999;
    }

    .logo {
        color: var(--navy);
        font-size: 28px;
        font-weight: 900;
        letter-spacing: 3px;
    }

    .logo span {
        color: var(--blue);
    }

    .nav-right {
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .role-badge {
        padding: 9px 18px;
        border-radius: 30px;
        background: var(--blue-light);
        border: 1px solid rgba(111,174,202,.30);
        color: var(--navy);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 1px;
    }

    .logout-btn {
        border: none;
        padding: 11px 21px;
        border-radius: 25px;
        background: var(--navy);
        color: white;
        font-size: 12px;
        font-weight: 800;
        cursor: pointer;
        transition: .3s;
    }

    .logout-btn:hover {
        background: var(--blue);
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(18,60,87,.15);
    }


    /* =====================================================
       HERO
    ===================================================== */

    .hero {
        min-height: 720px;
        position: relative;
        display: flex;
        align-items: center;

        background:
            linear-gradient(
                90deg,
                rgba(255,255,255,.94) 0%,
                rgba(255,255,255,.76) 42%,
                rgba(255,255,255,.20) 100%
            ),

            url("https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=2200&q=90");

        background-size: cover;
        background-position: center;
        overflow: hidden;
    }

    .hero::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 150px;

        background:
            linear-gradient(
                transparent,
                #f7f9f8
            );

        pointer-events: none;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        width: 86%;
        max-width: 1250px;
        margin: auto;
        padding-top: 70px;
        animation: heroEnter 1s ease;
    }

    .eyebrow {
        display: flex;
        align-items: center;
        gap: 14px;
        color: #5c9bb7;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-bottom: 24px;
    }

    .eyebrow::before {
        content: "";
        width: 45px;
        height: 2px;
        background: #78b5ce;
    }

    .hero-content h1 {
        max-width: 850px;
        color: var(--navy);
        font-size: clamp(48px, 7vw, 84px);
        line-height: .98;
        font-weight: 800;
        letter-spacing: -2px;
        margin-bottom: 27px;
    }

    .hero-content h1 span {
        color: #5795b1;
        display: block;
    }

    .hero-content p {
        max-width: 650px;
        color: #607985;
        font-size: 16px;
        line-height: 1.9;
        margin-bottom: 34px;
    }

    .hero-content p strong {
        color: var(--navy);
    }

    .hero-btn {
        display: inline-flex;
        align-items: center;
        gap: 18px;
        padding: 15px 24px;
        background: var(--navy);
        color: white;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: .8px;
        text-transform: uppercase;
        border-radius: 4px;
        transition: .35s;
    }

    .hero-btn::after {
        content: "→";
        font-size: 17px;
        transition: .3s;
    }

    .hero-btn:hover {
        background: #5795b1;
        transform: translateY(-4px);
        box-shadow: 0 15px 35px rgba(18,60,87,.18);
    }

    .hero-btn:hover::after {
        transform: translateX(5px);
    }


    /* =====================================================
       PERJALANAN UNTUKMU
       SECTION 01
    ===================================================== */

    .journey-section {
        padding: 115px 7%;

        background:
            linear-gradient(
                180deg,
                #ffffff 0%,
                #eef6f8 100%
            );
    }

    .journey-container {
        max-width: 1250px;
        margin: auto;
    }

    .journey-heading {
        max-width: 760px;
        margin-bottom: 55px;
    }

    .journey-heading .section-label {
        color: #619db6;
    }

    .journey-heading h2 {
        color: var(--navy);
        font-size: clamp(38px, 5vw, 58px);
        line-height: 1.04;
        letter-spacing: -1.8px;
        margin-bottom: 18px;
    }

    .journey-heading p {
        color: var(--muted);
        font-size: 15px;
        line-height: 1.9;
        max-width: 650px;
    }

    .journey-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .journey-card {
        position: relative;
        min-height: 390px;
        border-radius: 25px;
        overflow: hidden;

        background:
            #dcecf2;

        box-shadow:
            0 20px 55px rgba(28,73,94,.10);

        transition: .45s;

        animation:
            fadeUp .8s ease both;
    }

    .journey-card:nth-child(2) {
        animation-delay: .12s;
    }

    .journey-card:nth-child(3) {
        animation-delay: .24s;
    }

    .journey-card:hover {
        transform: translateY(-10px);
        box-shadow:
            0 35px 75px rgba(28,73,94,.16);
    }

    .journey-card img {
        width: 100%;
        height: 100%;
        min-height: 390px;
        object-fit: cover;
        display: block;
        transition: .6s;
    }

    .journey-card:hover img {
        transform: scale(1.07);
    }

    .journey-card-overlay {
        position: absolute;
        inset: 0;

        background:
            linear-gradient(
                to top,
                rgba(10,43,58,.78),
                rgba(10,43,58,.05) 65%
            );
    }

    .journey-card-content {
        position: absolute;
        left: 28px;
        right: 28px;
        bottom: 28px;
        z-index: 2;
    }

    .journey-number {
        color: #9ed0e3;
        font-size: 11px;
        font-weight: 900;
        letter-spacing: 2px;
        margin-bottom: 12px;
    }

    .journey-card h3 {
        color: white;
        font-size: 26px;
        margin-bottom: 9px;
    }

    .journey-card p {
        color: rgba(255,255,255,.82);
        font-size: 13px;
        line-height: 1.7;
    }


    /* =====================================================
       APA YANG INGIN KAMU LAKUKAN
       SECTION 02
    ===================================================== */

    .section {
        padding: 105px 7%;

        background:
            linear-gradient(
                180deg,
                #f7f9f8,
                #ffffff
            );

        color: var(--text);
    }

    .section-heading {
        max-width: 1250px;
        margin: 0 auto 50px;

        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        gap: 40px;
    }

    .heading-left {
        max-width: 700px;
    }

    .section-label {
        color: #619db6;
        font-size: 11px;
        font-weight: 900;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 13px;
    }

    .section-heading h2 {
        color: var(--navy);
        font-size: clamp(34px, 5vw, 55px);
        line-height: 1.05;
        letter-spacing: -1.5px;
    }

    .heading-description {
        max-width: 430px;
        color: var(--muted);
        line-height: 1.8;
        font-size: 14px;
    }


    /* =====================================================
       SERVICE CARDS
    ===================================================== */

    .cards {
        width: 100%;
        max-width: 1250px;
        margin: auto;

        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .card {
        position: relative;
        min-height: 315px;
        padding: 34px;
        background: white;

        border:
            1px solid rgba(18,60,87,.07);

        box-shadow:
            0 18px 45px rgba(28,73,94,.06);

        overflow: hidden;
        transition: .4s;
        animation: fadeUp .8s ease both;
    }

    .card:nth-child(2) {
        animation-delay: .12s;
    }

    .card:nth-child(3) {
        animation-delay: .24s;
    }

    .card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;

        background: #78b5ce;

        transform: scaleX(0);
        transform-origin: left;
        transition: .4s;
    }

    .card:hover {
        transform: translateY(-9px);
        box-shadow:
            0 30px 70px rgba(28,73,94,.12);
    }

    .card:hover::before {
        transform: scaleX(1);
    }

    .card-number {
        color: #6faeca;
        font-size: 12px;
        font-weight: 900;
        letter-spacing: 2px;
        margin-bottom: 60px;
    }

    .card h3 {
        color: var(--navy);
        font-size: 24px;
        margin-bottom: 14px;
    }

    .card p {
        color: var(--muted);
        font-size: 14px;
        line-height: 1.8;
        margin-bottom: 27px;
        max-width: 340px;
    }

    .card-link {
        display: inline-flex;
        align-items: center;
        gap: 12px;

        color: var(--navy);
        font-size: 12px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: .8px;

        border-bottom:
            1px solid #78b5ce;

        padding-bottom: 6px;
        transition: .3s;
    }

    .card-link:hover {
        color: #5795b1;
    }

    .card-link::after {
        content: "→";
        color: #6faeca;
        font-size: 17px;
        transition: .3s;
    }

    .card-link:hover::after {
        transform: translateX(5px);
    }


    /* =====================================================
       JELAJAHI PAKET WISATA
       SECTION 03
    ===================================================== */

    .explore-section {
        min-height: 600px;
        padding: 110px 7%;

        display: flex;
        align-items: center;
        justify-content: center;

        position: relative;

        background:
            linear-gradient(
                rgba(255,255,255,.78),
                rgba(235,246,249,.90)
            ),

            url("https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=2200&q=90");

        background-size: cover;
        background-position: center;
    }

    .explore-content {
        max-width: 780px;
        text-align: center;
        position: relative;
        z-index: 2;

        animation:
            fadeUp 1s ease;
    }

    .explore-label {
        color: #619db6;
        font-size: 11px;
        font-weight: 900;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .explore-content h2 {
        color: var(--navy);
        font-size: clamp(42px, 6vw, 70px);
        line-height: 1;
        letter-spacing: -2px;
        margin-bottom: 22px;
    }

    .explore-content p {
        color: #687f89;
        line-height: 1.8;
        font-size: 15px;
        margin-bottom: 32px;
    }


    /* =====================================================
       PAKET WISATA DARI ADMIN
       ===================================================== */

    .package-section {
        padding: 115px 7%;

        background:
            linear-gradient(
                180deg,
                #ffffff 0%,
                #f2f8fa 100%
            );
    }

    .package-container {
        max-width: 1250px;
        margin: auto;
    }

    .package-heading {
        max-width: 760px;
        margin-bottom: 65px;
    }

    .package-heading .section-label {
        color: #619db6;
    }

    .package-heading h2 {
        color: var(--navy);
        font-size: clamp(38px, 5vw, 58px);
        line-height: 1.04;
        letter-spacing: -1.8px;
        margin-bottom: 18px;
    }

    .package-heading p {
        color: var(--muted);
        font-size: 15px;
        line-height: 1.9;
        max-width: 650px;
    }


    /* =====================================================
       PACKAGE LIST
    ===================================================== */

    .package-grid {
        display: flex;
        flex-direction: column;
        gap: 55px;
    }


    /* =====================================================
       PACKAGE CARD
    ===================================================== */

    .package-card {
        display: grid;
        grid-template-columns: 1.15fr .85fr;

        min-height: 470px;

        background:
            rgba(255,255,255,.92);

        border:
            1px solid rgba(18,60,87,.08);

        border-radius: 28px;
        overflow: hidden;

        box-shadow:
            0 25px 65px rgba(28,73,94,.09);

        transition:
            .45s ease;

        animation:
            fadeUp .8s ease both;
    }

    .package-card:hover {
        transform: translateY(-8px);

        box-shadow:
            0 35px 80px rgba(28,73,94,.14);
    }


    /* =====================================================
       FOTO PAKET
    ===================================================== */

    .package-photo {
        position: relative;
        width: 100%;
        height: 100%;
        min-height: 470px;
        overflow: hidden;
        background: #dcecf2;
    }

    .package-photo img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        transition: transform .7s ease;
    }

    .package-card:hover .package-photo img {
        transform: scale(1.07);
    }

    .package-overlay {
        position: absolute;
        inset: 0;

        background:
            linear-gradient(
                90deg,
                rgba(18,60,87,.02),
                rgba(18,60,87,.18)
            );
    }

    .package-status {
        position: absolute;
        top: 22px;
        left: 22px;

        padding: 9px 15px;
        border-radius: 30px;

        background:
            rgba(255,255,255,.90);

        backdrop-filter: blur(10px);

        color: var(--navy);
        font-size: 10px;
        font-weight: 900;
        letter-spacing: .8px;
        text-transform: uppercase;

        box-shadow:
            0 8px 20px rgba(18,60,87,.10);
    }


    /* =====================================================
       INFORMASI PAKET
    ===================================================== */

    .package-content {
        padding: 55px 48px;

        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .package-content h3 {
        color: var(--navy);
        font-size: clamp(28px, 3vw, 38px);
        line-height: 1.15;
        margin-bottom: 18px;
    }

    .package-description {
        color: var(--muted);
        font-size: 14px;
        line-height: 1.9;
        margin-bottom: 27px;
    }

    .package-info {
        display: grid;
        gap: 10px;
        margin-bottom: 27px;
    }

    .package-info-item {
        padding: 12px 15px;
        border-radius: 13px;

        background:
            #f3f8fa;

        color: #607985;
        font-size: 12px;
        line-height: 1.6;

        border:
            1px solid rgba(18,60,87,.05);
    }

    .package-info-item strong {
        color: var(--navy);
    }

    .package-price {
        padding-top: 20px;

        border-top:
            1px solid rgba(18,60,87,.09);
    }

    .package-price-label {
        color: #8a9ba3;
        font-size: 10px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        font-weight: 800;
        margin-bottom: 5px;
    }

    .package-price-value {
        color: var(--navy);
        font-size: 28px;
        font-weight: 900;
    }

    .package-promo {
        margin-top: 6px;
        color: #5795b1;
        font-size: 13px;
        font-weight: 800;
    }


    /* =====================================================
       TOMBOL LIHAT PAKET
       ===================================================== */

    .package-link {
        display: inline-flex;
        align-items: center;
        gap: 12px;

        width: fit-content;

        margin-top: 25px;

        color: var(--navy);

        font-size: 12px;
        font-weight: 900;

        text-transform: uppercase;
        letter-spacing: .8px;

        border-bottom:
            1px solid #78b5ce;

        padding-bottom: 6px;

        transition: .3s;
    }

    .package-link:hover {
        color: #5795b1;
    }

    .package-link::after {
        content: "→";

        color: #6faeca;

        font-size: 17px;

        transition: .3s;
    }

    .package-link:hover::after {
        transform: translateX(5px);
    }


    /* =====================================================
       BELUM ADA PAKET
    ===================================================== */

    .package-empty {
        padding: 80px 30px;
        text-align: center;

        background:
            rgba(255,255,255,.85);

        border-radius: 25px;

        border:
            1px solid rgba(18,60,87,.07);

        box-shadow:
            0 20px 50px rgba(28,73,94,.07);
    }

    .package-empty h3 {
        color: var(--navy);
        margin-bottom: 8px;
    }

    .package-empty p {
        color: var(--muted);
        font-size: 14px;
    }


    /* =====================================================
       MY JOURNEY
    ===================================================== */

    .travel-section {
        position: relative;
        padding: 110px 7%;
        background: #ffffff;
        color: var(--text);
    }

    .travel-container {
        position: relative;
        z-index: 2;
        max-width: 1250px;
        margin: auto;
    }

    .travel-heading {
        max-width: 650px;
        margin-bottom: 50px;
    }

    .travel-heading .section-label {
        color: #619db6;
    }

    .travel-heading h2 {
        color: var(--navy);
        font-size: clamp(35px, 5vw, 55px);
        line-height: 1.05;
        letter-spacing: -1px;
        margin-bottom: 18px;
    }

    .travel-heading p {
        color: var(--muted);
        font-size: 14px;
        line-height: 1.8;
    }

    .travel-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1px;

        background:
            rgba(18,60,87,.10);

        border:
            1px solid rgba(18,60,87,.10);
    }

    .travel-item {
        min-height: 180px;
        padding: 30px;
        background: #f8faf9;
        transition: .35s;
    }

    .travel-item:hover {
        background: #eef6f8;
    }

    .travel-number {
        color: #6faeca;
        font-size: 11px;
        font-weight: 900;
        letter-spacing: 2px;
        margin-bottom: 28px;
    }

    .travel-item h3 {
        color: var(--navy);
        font-size: 20px;
        margin-bottom: 10px;
    }

    .travel-item p {
        color: var(--muted);
        font-size: 13px;
        line-height: 1.75;
    }


    /* =====================================================
       FOOTER
    ===================================================== */

    footer {
        padding: 30px 7%;
        background: #123c57;
        color: rgba(255,255,255,.70);
        text-align: center;
        font-size: 12px;
        letter-spacing: .4px;
    }


    /* =====================================================
       ANIMATION
    ===================================================== */

    @keyframes heroEnter {

        from {
            opacity: 0;
            transform: translateY(35px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }

    @keyframes fadeUp {

        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }


    /* =====================================================
       RESPONSIVE TABLET
    ===================================================== */

    @media (max-width: 950px) {

        .cards {
            grid-template-columns: repeat(2, 1fr);
        }

        .journey-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .section-heading {
            display: block;
        }

        .heading-description {
            margin-top: 20px;
        }

        .package-card {
            grid-template-columns: 1fr;
        }

        .package-photo {
            min-height: 380px;
            height: 380px;
        }

        .package-content {
            padding: 45px;
        }

    }


    /* =====================================================
       RESPONSIVE MOBILE
    ===================================================== */

    @media (max-width: 650px) {

        .navbar {
            height: 70px;
            padding: 0 5%;
        }

        .logo {
            font-size: 23px;
        }

        .role-badge {
            display: none;
        }

        .hero {
            min-height: 650px;
            background-position: 65% center;
        }

        .hero-content {
            width: 90%;
            padding-top: 60px;
        }

        .hero-content h1 {
            font-size: 48px;
        }

        .hero-content p {
            font-size: 14px;
        }

        .section,
        .journey-section,
        .package-section,
        .travel-section {

            padding:
                75px 5%;
        }

        .cards,
        .journey-grid {

            grid-template-columns:
                1fr;
        }

        .card {
            min-height: 285px;
        }

        .journey-card {
            min-height: 350px;
        }

        .journey-card img {
            min-height: 350px;
        }

        .package-grid {
            gap: 35px;
        }

        .package-card {
            display: flex;
            flex-direction: column;
            border-radius: 22px;
        }

        .package-photo {
            min-height: 280px;
            height: 280px;
        }

        .package-content {
            padding: 35px 28px;
        }

        .package-content h3 {
            font-size: 30px;
        }

        .package-description {
            font-size: 13px;
        }

        .travel-grid {
            grid-template-columns: 1fr;
        }

        .travel-item {
            min-height: auto;
        }

        .explore-section {
            min-height: 470px;
            padding: 75px 5%;
        }

        .explore-content h2 {
            font-size: 42px;
        }

    }

</style>
```

</head>

<body>

```
<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar">

    <a
        href="/pelanggan/dashboard"
        class="logo"
    >

        WISATA<span>.</span>

    </a>


    <div class="nav-right">

        <div class="role-badge">

            PELANGGAN

        </div>


        <form
            action="/logout"
            method="POST"
        >

            @csrf

            <button
                type="submit"
                class="logout-btn"
            >

                Logout

            </button>

        </form>

    </div>

</nav>



<!-- =====================================================
     HERO
===================================================== -->

<section class="hero">

    <div class="hero-content">

        <div class="eyebrow">

            WISATA. • PELANGGAN

        </div>


        <h1>

            Saatnya menikmati

            <span>
                perjalanan terbaikmu.
            </span>

        </h1>


        <p>

            Selamat datang,
            <strong>{{ auth()->user()->nama_lengkap }}</strong>.

            Temukan paket wisata, lakukan pemesanan,
            pantau pembayaran, dan akses e-ticket
            perjalananmu dalam satu tempat.

        </p>


        <a
            href="#perjalanan"
            class="hero-btn"
        >

            Jelajahi Perjalanan

        </a>

    </div>

</section>



<!-- =====================================================
     01. PERJALANAN UNTUKMU
===================================================== -->

<section
    class="journey-section"
    id="perjalanan"
>

    <div class="journey-container">

        <div class="journey-heading">

            <div class="section-label">
                Pilihan Perjalanan
            </div>

            <h2>
                Perjalanan
                untukmu.
            </h2>

            <p>
                Temukan inspirasi perjalanan dengan
                pemandangan indah dan pengalaman yang
                bisa membuat perjalananmu semakin berkesan.
            </p>

        </div>


        <div class="journey-grid">


            <!-- FOTO 1 -->

            <div class="journey-card">

                <img
                    src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=90"
                    alt="Pemandangan perjalanan"
                >

                <div class="journey-card-overlay"></div>

                <div class="journey-card-content">

                    <div class="journey-number">
                        01
                    </div>

                    <h3>
                        Eksplorasi Alam
                    </h3>

                    <p>
                        Nikmati perjalanan dengan
                        pemandangan alam yang menenangkan.
                    </p>

                </div>

            </div>



            <!-- FOTO 2 -->

            <div class="journey-card">

                <img
                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=90"
                    alt="Pantai indah"
                >

                <div class="journey-card-overlay"></div>

                <div class="journey-card-content">

                    <div class="journey-number">
                        02
                    </div>

                    <h3>
                        Liburan di Pantai
                    </h3>

                    <p>
                        Rasakan suasana pantai dan
                        nikmati waktu liburanmu.
                    </p>

                </div>

            </div>



            <!-- FOTO 3 -->

            <div class="journey-card">

                <img
                    src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=1200&q=90"
                    alt="Pemandangan pegunungan"
                >

                <div class="journey-card-overlay"></div>

                <div class="journey-card-content">

                    <div class="journey-number">
                        03
                    </div>

                    <h3>
                        Jelajah Destinasi
                    </h3>

                    <p>
                        Temukan tempat baru dan ciptakan
                        pengalaman perjalanan yang berkesan.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     02. APA YANG INGIN KAMU LAKUKAN?
===================================================== -->

<section
    class="section"
    id="layanan"
>

    <div class="section-heading">

        <div class="heading-left">

            <div class="section-label">
                Customer Area
            </div>

            <h2>
                Apa yang ingin
                kamu lakukan?
            </h2>

        </div>

        <div class="heading-description">

            Semua kebutuhan perjalananmu
            tersedia melalui sistem WISATA.

        </div>

    </div>


    <div class="cards">


        <!-- PAKET WISATA -->

        <div class="card">

            <div class="card-number">
                01
            </div>

            <h3>
                Paket Wisata
            </h3>

            <p>
                Jelajahi berbagai pilihan paket wisata
                dan temukan perjalanan yang sesuai
                dengan kebutuhanmu.
            </p>

            <a
                href="{{ route('paket-wisata.index') }}"
                class="card-link"
            >
                Lihat Paket
            </a>

        </div>



        <!-- PEMESANAN -->

        <div class="card">

            <div class="card-number">
                02
            </div>

            <h3>
                Pemesanan
            </h3>

            <p>
                Lihat dan kelola informasi pemesanan
                perjalanan yang kamu lakukan.
            </p>

            <a
                href="{{ route('pelanggan.pemesanan.index') }}"
                class="card-link"
            >
                Lihat Pemesanan
            </a>

        </div>



        <!-- E-TICKET -->

        <div class="card">

            <div class="card-number">
                03
            </div>

            <h3>
                E-Ticket
            </h3>

            <p>
                Akses informasi tiket perjalananmu
                setelah proses pemesanan selesai.
            </p>

            <a
                href="{{ route('pelanggan.e-ticket') }}"
                class="card-link"
            >
                Lihat E-Ticket
            </a>

        </div>


    </div>

</section>



<!-- =====================================================
     03. JELAJAHI PAKET WISATA
===================================================== -->

<section class="explore-section">

    <div class="explore-content">

        <div class="explore-label">
            WISATA.
        </div>

        <h2>
            Jelajahi
            Paket Wisata.
        </h2>

        <p>
            Pilih perjalanan yang sesuai dengan
            keinginanmu dan temukan pengalaman wisata
            terbaik bersama WISATA.
        </p>

        <a
            href="{{ route('paket-wisata.index') }}"
            class="card-link"
        >
            Lihat Paket
        </a>

    </div>

</section>



<!-- =====================================================
     PAKET WISATA DARI ADMIN
===================================================== -->

<section
    class="package-section"
    id="paket-wisata"
>

    <div class="package-container">


        <div class="package-heading">

            <div class="section-label">
                Paket Wisata
            </div>

            <h2>
                Pilihan perjalanan
                untukmu.
            </h2>

            <p>
                Temukan berbagai pilihan destinasi
                dan paket wisata yang telah ditambahkan
                oleh admin ke dalam sistem WISATA.
            </p>

        </div>



        <!-- =================================================
             AMBIL DATA DARI DATABASE
        ================================================= -->

        @php

            $paketWisata =
                \App\Models\PaketWisata::orderBy(
                    'id_paket',
                    'desc'
                )->get();

        @endphp



        @if($paketWisata->count() > 0)


            <div class="package-grid">


                @foreach($paketWisata as $paket)


                    <div class="package-card">


                        <!-- FOTO PAKET -->

                        <div class="package-photo">


                            @if($paket->foto_paket)

                                <img
                                    src="{{ asset('storage/' . $paket->foto_paket) }}"
                                    alt="{{ $paket->nama_paket }}"
                                >

                            @else

                                <img
                                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1400&q=90"
                                    alt="Destinasi Wisata"
                                >

                            @endif


                            <div class="package-overlay"></div>


                            <div class="package-status">

                                {{ $paket->status }}

                            </div>


                        </div>



                        <!-- INFORMASI PAKET -->

                        <div class="package-content">


                            <h3>

                                {{ $paket->nama_paket }}

                            </h3>


                            <p class="package-description">

                                {{ $paket->deskripsi }}

                            </p>


                            <div class="package-info">


                                <div class="package-info-item">

                                    <strong>
                                        Akomodasi:
                                    </strong>

                                    {{ $paket->akomodasi }}

                                </div>


                                <div class="package-info-item">

                                    <strong>
                                        Transport:
                                    </strong>

                                    {{ $paket->armada_transport }}

                                </div>


                            </div>



                            <div class="package-price">


                                <div class="package-price-label">
                                    Mulai dari
                                </div>


                                <div class="package-price-value">

                                    Rp

                                    {{ number_format(
                                        $paket->harga_normal,
                                        0,
                                        ',',
                                        '.'
                                    ) }}

                                </div>


                                @if($paket->harga_promo)

                                    <div class="package-promo">

                                        Harga promo:

                                        Rp

                                        {{ number_format(
                                            $paket->harga_promo,
                                            0,
                                            ',',
                                            '.'
                                        ) }}

                                    </div>

                                @endif


                            </div>


                            <!-- LIHAT PAKET -->

                            <a
                                href="{{ route('paket-wisata.index') }}"
                                class="package-link"
                            >
                                Lihat Paket
                            </a>


                        </div>


                    </div>


                @endforeach


            </div>


        @else


            <div class="package-empty">

                <h3>
                    Belum Ada Paket Wisata
                </h3>

                <p>
                    Data paket wisata belum tersedia.
                </p>

            </div>


        @endif


    </div>

</section>



<!-- =====================================================
     MY JOURNEY
===================================================== -->

<section class="travel-section">

    <div class="travel-container">


        <div class="travel-heading">

            <div class="section-label">
                My Journey
            </div>

            <h2>
                Perjalananmu
                di WISATA.
            </h2>

            <p>
                Pantau perjalananmu dengan mudah
                dari satu dashboard.
            </p>

        </div>



        <div class="travel-grid">


            <div class="travel-item">

                <div class="travel-number">
                    01
                </div>

                <h3>
                    Jadwal Perjalanan
                </h3>

                <p>
                    Informasi jadwal perjalanan akan
                    terhubung dengan paket wisata
                    yang kamu pesan.
                </p>

            </div>



            <div class="travel-item">

                <div class="travel-number">
                    02
                </div>

                <h3>
                    Status Pembayaran
                </h3>

                <p>
                    Status pembayaran dapat dipantau
                    setelah melakukan pemesanan.
                </p>

            </div>



            <div class="travel-item">

                <div class="travel-number">
                    03
                </div>

                <h3>
                    Dokumen Pemesanan
                </h3>

                <p>
                    Dokumen perjalanan dapat tersedia
                    setelah proses pemesanan selesai.
                </p>

            </div>



            <div class="travel-item">

                <div class="travel-number">
                    04
                </div>

                <h3>
                    Tiket Perjalanan
                </h3>

                <p>
                    E-ticket dapat diakses ketika
                    tiket perjalanan telah diterbitkan.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    © {{ date('Y') }} WISATA.
    All Rights Reserved.

</footer>
```

</body>

</html>
