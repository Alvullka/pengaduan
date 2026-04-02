<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - SuaraSiswa</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
        <style>
            /* =========================
   PIXEL ART / 8-BIT THEME (DAFTAR)
========================= */
/* =========================
   VINTAGE ARCHIVE - REGISTER THEME
========================= */
:root {
    --bg-paper: #f4f1ea;
    --ink-black: #1a1a1a;
    --accent-green: #2d4635; /* Hijau tua arsip */
    --gold-muted: #b08d57;
    --border-color: #d1cdc0;
    --card-white: #ffffff;
    --error-red: #8b0000;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body.auth-wrapper {
    background-color: var(--bg-paper);
    background-image: url("https://www.transparenttextures.com/patterns/paper-fibers.png");
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    font-family: 'Inter', sans-serif;
    color: var(--ink-black);
    padding: 40px 20px;
}

/* Card Style - Seperti Dokumen Pendaftaran Klasik */
.auth-card {
    background: var(--card-white);
    width: 100%;
    max-width: 550px; /* Lebih lebar untuk menampung input yang banyak */
    padding: 3.5rem 3rem;
    position: relative;
    border: 1px solid var(--ink-black);
    box-shadow: 15px 15px 0px var(--border-color);
}

/* Ornamen bingkai dalam */
.auth-card::before {
    content: "";
    position: absolute;
    top: 10px; left: 10px; right: 10px; bottom: 10px;
    border: 1px solid var(--border-color);
    pointer-events: none;
}

/* Typography */
h1 {
    font-family: 'Playfair Display', serif;
    font-size: 2rem !important;
    font-weight: 900;
    text-transform: uppercase;
    color: var(--accent-green);
    margin-bottom: 0.5rem;
    letter-spacing: -1px;
}

p {
    font-size: 0.8rem !important;
    font-weight: 600;
    letter-spacing: 1px;
    color: var(--gold-muted) !important;
}

/* Form Styling */
.form-group {
    margin-bottom: 1.5rem;
    position: relative;
}

.form-label {
    display: block;
    font-size: 0.7rem;
    font-weight: 700;
    margin-bottom: 5px;
    text-transform: uppercase;
    color: var(--ink-black);
    letter-spacing: 1px;
}

.form-control {
    width: 100%;
    padding: 10px 0;
    font-family: 'Inter', sans-serif;
    font-size: 0.95rem;
    border: none;
    border-bottom: 2px solid var(--border-color);
    background: transparent;
    outline: none;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-bottom-color: var(--accent-green);
}

/* Button Styling (Official Document Stamp) */
.btn-primary {
    background: var(--accent-green);
    color: var(--bg-paper) !important;
    border: none;
    padding: 1.1rem;
    font-family: 'Inter', sans-serif;
    font-weight: 800;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 3px;
    cursor: pointer;
    transition: all 0.3s;
    width: 100%;
    margin-top: 1.5rem;
}

.btn-primary:hover {
    background: var(--gold-muted);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* Error List Style */
.error-container {
    background: #fef2f2;
    color: var(--error-red);
    padding: 1rem;
    border: 1px solid var(--error-red);
    margin-bottom: 1.5rem;
}

.error-container ul {
    list-style: none;
}

.error-container li {
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 4px;
}

/* Link Style */
a {
    color: var(--accent-green);
    text-decoration: underline;
    font-weight: 700;
}

a:hover {
    color: var(--gold-muted);
}

/* Global Reset untuk Border Radius */
[style*="border-radius"], div, input, button {
    border-radius: 0 !important;
}
        </style>
</head>

<body class="auth-wrapper">
    <div class="card auth-card shadow-lg" style="max-width: 500px;">
        <div style="text-align: center; margin-bottom: 2rem;">
            <h1 style="font-size: 1.75rem; color: var(--primary); font-family: 'Playfair Display', serif;">DAFTAR AKUN
            </h1>
            <p
                style="color: var(--accent); font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.75rem;">
                Pengaduan Prasarana Sekolah</p>
        </div>

        @if($errors->any())
            <div
                style="background:#FEE2E2; color:#991B1B; padding: 0.75rem; border-radius: 8px; margin-bottom: 1rem; font-size: 0.875rem;">
                <ul style="margin-left: 1.5rem;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label class="form-label" for="nik"><i class="bi bi-card-heading"></i> NIK / NIS
                    (Masyarakat/Siswa)</label>
                <input type="text" id="nik" name="nik" class="form-control" value="{{ old('nik') }}" required autofocus>
            </div>

            <div class="form-group">
                <label class="form-label" for="name"><i class="bi bi-person-badge"></i> Nama Lengkap</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="username"><i class="bi bi-person"></i> Username</label>
                <input type="text" id="username" name="username" class="form-control" value="{{ old('username') }}"
                    required>
            </div>

            <div class="form-group">
                <label class="form-label" for="phone"><i class="bi bi-telephone"></i> Nomor Telepon</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password"><i class="bi bi-shield-lock"></i> Kata Sandi</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password_confirmation">Konfirmasi Kata Sandi</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                    required>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Buat Akun</button>

            <p style="text-align: center; margin-top: 1.5rem; color: var(--text-muted); font-size: 0.875rem;">
                Sudah punya akun? <a href="{{ route('login') }}" style="font-weight: 600;">Masuk di sini</a>
            </p>
        </form>
    </div>
</body>

</html>