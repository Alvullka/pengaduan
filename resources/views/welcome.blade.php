<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang - Pengaduan Prasarana Sekolah</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        /* Root warna (konsisten semua halaman) */
/* Root warna (Konsisten dengan tema Newspaper Archive) */
:root {
    --bg-paper: #f4f1ea;
    --ink-black: #1a1a1a;
    --accent-green: #2d4635; /* Hijau tua arsip */
    --gold-muted: #b08d57;
    --border-color: #d1cdc0;
    --card-white: #ffffff;
}

/* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body - Menggunakan tekstur kertas */
body {
    font-family: 'Inter', sans-serif;
    background-color: var(--bg-paper);
    background-image: url("https://www.transparenttextures.com/patterns/paper-fibers.png");
    color: var(--ink-black);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

/* Hero section */
.hero {
    text-align: center;
    max-width: 800px;
    padding: 4rem 2rem;
    animation: fadeIn 1s ease-out;
    border: 1px solid var(--border-color);
    background: rgba(255, 255, 255, 0.3);
    position: relative;
    box-shadow: 15px 15px 0px var(--border-color);
}

/* Ornamen garis atas (khas koran lama) */
.hero::before {
    content: "";
    position: absolute;
    top: 10px; left: 10px; right: 10px; bottom: 10px;
    border: 1px solid var(--border-color);
    pointer-events: none;
}

/* Judul - Font Playfair Display */
.hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: 3.5rem;
    font-weight: 900;
    color: var(--accent-green);
    margin-bottom: 1.5rem;
    line-height: 1.1;
    text-transform: uppercase;
    letter-spacing: -1px;
}

/* Deskripsi */
.hero p {
    font-size: 1.2rem;
    color: var(--ink-black);
    margin: 0 auto 3rem;
    max-width: 600px;
    line-height: 1.8;
    font-style: italic;
    opacity: 0.8;
}

/* Tombol group */
.cta-group {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
    position: relative;
    z-index: 2;
}

/* Tombol umum */
.btn-large {
    padding: 1rem 2.5rem;
    font-size: 0.85rem;
    text-decoration: none;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: all 0.3s ease;
    display: inline-block;
    border-radius: 0; /* Kotak tegas khas vintage */
}

/* Tombol utama (Hijau Arsip) */
.btn-primary-classic {
    background: var(--accent-green);
    color: var(--bg-paper);
    border: 2px solid var(--accent-green);
}

.btn-primary-classic:hover {
    background: var(--gold-muted);
    border-color: var(--gold-muted);
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

/* Tombol outline (Tinta Hitam) */
.btn-outline-classic {
    background: transparent;
    color: var(--ink-black);
    border: 2px solid var(--ink-black);
}

.btn-outline-classic:hover {
    background: var(--ink-black);
    color: var(--bg-paper);
    transform: translateY(-3px);
}

/* Footer */
footer {
    margin-top: 3rem;
    font-family: 'Playfair Display', serif;
    font-size: 0.9rem;
    color: var(--gold-muted);
    letter-spacing: 1px;
    border-top: 1px solid var(--border-color);
    padding-top: 1rem;
}

/* Animasi */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 600px) {
    .hero h1 {
        font-size: 2.2rem;
    }

    .hero {
        padding: 2.5rem 1.5rem;
        margin: 1rem;
    }

    .btn-large {
        width: 100%;
    }
}
    </style>
</head>

<body>
    <div class="hero">
        <h1>Pengaduan Prasarana Sekolah</h1>
        <p>Layanan aduan kerusakan sarana prasarana sekolah yang aman, cepat, dan transparan. Laporkan kendala demi
            kenyamanan belajar bersama.</p>

        <div class="cta-group">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn-large btn-primary-classic">Masuk ke Dasbor</a>
            @else
                <a href="{{ route('login') }}" class="btn-large btn-primary-classic">Masuk</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-large btn-outline-classic">Daftar Akun</a>
                @endif
            @endauth
        </div>

        <footer style="margin-top: 2rem;">
            &copy; {{ date('Y') }} Sistem Aspirasi Siswa Made By Aldino XII RPL II
        </footer>
    </div>
</body>

</html>