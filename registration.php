<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kursus - KursusKu</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- STYLE CSS EMBEDDED (SAMA & KONSISTEN DENGAN INDEX.PHP) -->
    <style>
        :root {
            --primary-color: #0f766e;
            --primary-dark: #0b5f55;
            --primary-light: #14b8a6;
            --secondary-color: #eef8f5;
            --bg-color: #f6f9f8;
            --card-bg: #ffffff;
            --text-color: #1e293b;
            --text-light: #64748b;
            --border-color: #cbd5e1;
            --input-focus: #0f766e;
            --radius: 12px;
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 12px rgba(0, 0, 0, 0.07);
            --shadow-lg: 0 10px 25px rgba(15, 118, 110, 0.12);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', "Segoe UI", Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--bg-color);
        }

        .container {
            width: min(900px, 92%);
            margin-inline: auto;
        }

        a {
            color: var(--primary-color);
            text-decoration: none;
        }

        /* HEADER & NAVIGASI */
        .site-header {
            background-color: var(--card-bg);
            border-bottom: 1px solid #e2e8f0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-sm);
        }

        .nav-wrap {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1.5rem;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .brand-logo-wrapper {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--secondary-color);
            border-radius: 10px;
        }

        .brand-title {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--primary-color);
        }

        nav {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        nav a {
            color: #475569;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.4rem 0.7rem;
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        nav a:hover, nav a.active {
            color: var(--primary-color);
            background-color: var(--secondary-color);
        }

        .btn-nav-action {
            background-color: var(--primary-color) !important;
            color: #ffffff !important;
            padding: 0.55rem 1.1rem !important;
            border-radius: 8px !important;
            font-weight: 700 !important;
        }

        .btn-nav-action:hover {
            background-color: var(--primary-dark) !important;
        }

        /* HEADER & CARD FORM */
        .page-intro-card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 2.2rem 2.5rem;
            margin-top: 2rem;
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow-md);
            border: 1px solid #e2e8f0;
        }

        .eyebrow {
            display: inline-block;
            color: var(--primary-color);
            font-weight: 700;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-bottom: 0.35rem;
        }

        .page-intro-card h1 {
            font-size: 1.8rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 0.4rem;
        }

        .page-intro-card p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        .form-card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 2.5rem;
            margin-bottom: 3rem;
            box-shadow: var(--shadow-md);
            border: 1px solid #e2e8f0;
        }

        /* GRID FORM & INPUT STYLING */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1.25rem 1.5rem;
            margin-bottom: 1.25rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        label, legend {
            display: block;
            font-weight: 700;
            font-size: 0.92rem;
            color: #1e293b;
            margin-bottom: 0.4rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-family: inherit;
            font-size: 0.95rem;
            color: #0f172a;
            background-color: #ffffff;
            transition: all 0.2s ease;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        select:focus,
        textarea:focus {
            border-color: var(--input-focus);
            box-shadow: 0 0 0 3px rgba(15, 118, 110, 0.15);
        }

        select {
            cursor: pointer;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%3F475569'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1.25rem;
            appearance: none;
        }

        /* FIELDSET (RADIO & CHECKBOX) */
        fieldset.form-group {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 1.2rem 1.5rem;
            background-color: #f8fafc;
        }

        fieldset.form-group legend {
            padding: 0 0.5rem;
            color: var(--primary-color);
            font-weight: 700;
            font-size: 0.95rem;
        }

        .choice-group {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
            margin-top: 0.3rem;
        }

        .choice {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
            font-weight: 500;
            color: #334155;
            cursor: pointer;
        }

        .choice input[type="radio"],
        .choice input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary-color);
            cursor: pointer;
        }

        textarea {
            resize: vertical;
            min-height: 110px;
        }

        .help {
            display: block;
            margin-top: 0.35rem;
            color: var(--text-light);
            font-size: 0.82rem;
        }

        /* BUTTONS & ACTIONS */
        .form-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid #f1f5f9;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: #ffffff;
            padding: 0.8rem 1.8rem;
            border-radius: 8px;
            font-weight: 700;
            font-size: 0.95rem;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 2px 6px rgba(15, 118, 110, 0.2);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(15, 118, 110, 0.3);
        }

        .btn-link {
            color: var(--text-light);
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.8rem 1.2rem;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .btn-link:hover {
            color: #0f172a;
            background-color: #f1f5f9;
        }

        /* FOOTER */
        .site-footer {
            background-color: var(--card-bg);
            border-top: 1px solid #e2e8f0;
            padding: 2rem 0;
            text-align: center;
            color: var(--text-light);
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .nav-wrap { flex-direction: column; padding-block: 1rem; }
            .form-grid { grid-template-columns: 1fr; }
            .page-intro-card, .form-card { padding: 1.5rem; }
        }
    </style>
</head>
<body>

    <!-- =========================
         HEADER & NAVIGASI
    ========================= -->
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="index.php">
                <div class="brand-logo-wrapper">
                    <span style="font-size: 20px;">🎓</span>
                </div>
                <span class="brand-title">KursusKu</span>
            </a>

            <nav aria-label="Navigasi utama">
                <a href="index.php">Beranda</a>
                <a href="index.php#keunggulan">Keunggulan</a>
                <a href="index.php#katalog">Katalog</a>
                <a href="index.php#alur">Cara Daftar</a>
                <a href="fee-calculator.php">Estimasi Biaya</a>
                <a href="registration.php" class="btn-nav-action active">Daftar Kursus</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <!-- HEADER JUDUL FORM -->
        <section class="page-intro-card">
            <span class="eyebrow">Pendaftaran Kursus</span>
            <h1>Mulai belajar bersama KursusKu</h1>
            <p>Gunakan data latihan. Field bertanda bintang (*) wajib diisi.</p>
        </section>

        <!-- CARD FORMULIR PENDAFTARAN -->
        <section class="form-card">
            <form action="process-registration.php" method="POST" class="registration-form">
                <input type="hidden" name="source" value="week-05">

                <!-- GRID 2 KOLOM UNTUK INPUT DATA -->
                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Nama Lengkap *</label>
                        <input id="name" name="name" type="text" minlength="3" maxlength="100" autocomplete="name" placeholder="Masukkan nama lengkap" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input id="email" name="email" type="email" maxlength="120" autocomplete="email" placeholder="nama@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Nomor HP *</label>
                        <input id="phone" name="phone" type="tel" maxlength="15" autocomplete="tel" placeholder="Contoh: 081234567890" required>
                    </div>

                    <div class="form-group">
                        <label for="study_program">Program Studi *</label>
                        <input id="study_program" name="study_program" type="text" maxlength="100" placeholder="Contoh: Teknik Informatika" required>
                    </div>
                </div>

                <!-- DROPDOWN KURSUS -->
                <div class="form-group">
                    <label for="course">Kursus yang Dipilih *</label>
                    <select id="course" name="course" required>
                        <option value="">-- Pilih kursus --</option>
                        <option value="web-dasar">Web Dasar (WEB-01)</option>
                        <option value="php-dasar">PHP Dasar (PHP-01)</option>
                        <option value="php-lanjutan">PHP Lanjutan (PHP-02)</option>
                        <option value="laravel-fundamental">Laravel Fundamental (LAR-01)</option>
                        <option value="mysql-dasar">MySQL Dasar (DB-01)</option>
                        <option value="ui-web-dasar">UI Web Dasar (UI-01)</option>
                    </select>
                </div>

                <!-- RADIO JENIS PESERTA -->
                <fieldset class="form-group">
                    <legend>Jenis Peserta *</legend>
                    <div class="choice-group">
                        <label class="choice">
                            <input type="radio" name="participant_type" value="mahasiswa" required> Mahasiswa
                        </label>
                        <label class="choice">
                            <input type="radio" name="participant_type" value="umum"> Umum
                        </label>
                    </div>
                </fieldset>

                <!-- CHECKBOX MINAT TAMBAHAN -->
                <fieldset class="form-group">
                    <legend>Minat Tambahan</legend>
                    <div class="choice-group">
                        <label class="choice">
                            <input type="checkbox" name="interests[]" value="ui-ux"> UI/UX
                        </label>
                        <label class="choice">
                            <input type="checkbox" name="interests[]" value="database"> Database
                        </label>
                        <label class="choice">
                            <input type="checkbox" name="interests[]" value="backend"> Backend
                        </label>
                    </div>
                </fieldset>

                <!-- TEXTAREA CATATAN -->
                <div class="form-group">
                    <label for="note">Catatan</label>
                    <textarea id="note" name="note" rows="4" maxlength="300" placeholder="Tuliskan kebutuhan belajar Anda (opsional)"></textarea>
                    <small class="help">Maksimal 300 karakter.</small>
                </div>

                <!-- TOMBOL AKSI -->
                <div class="form-actions">
                    <button class="btn-primary" type="submit">Kirim Pendaftaran</button>
                    <a href="index.php" class="btn-link">Batal</a>
                </div>
            </form>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <p>&copy; <?= date('Y') ?> <strong>KursusKu</strong> - Praktikum Pemrograman Web III.</p>
        </div>
    </footer>

</body>
</html>