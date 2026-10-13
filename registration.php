<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kursus - KursusKu</title>
    
    <!-- Link CSS Utama -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Tambahan untuk Penyesuaian Latar & Form -->
    <style>
        body {
            background-color: #f6f9f8;
            margin: 0;
            padding: 0;
        }

        .page-intro-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 2rem;
            margin: 2rem auto 1.5rem;
            max-width: 760px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
        }

        fieldset.form-group {
            border: 1px solid var(--border-color, #d9e6e2);
            border-radius: 10px;
            padding: 1rem 1.2rem;
            margin-bottom: 1.5rem;
            background: #fafcfb;
        }

        fieldset.form-group legend {
            padding: 0 0.5rem;
            color: var(--primary-color, #0f766e);
            font-weight: 700;
        }

        .form-actions {
            margin-top: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
    </style>
</head>
<body>

    <!-- =========================
         HEADER & NAVIGASI
    ========================= -->
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="index.php" style="display: flex; align-items: center; gap: 8px;">
                <img src="assets/images/logo.svg" alt="Logo KursusKu" height="36" onerror="this.style.display='none'">
                <span>KursusKu</span>
            </a>
            <nav aria-label="Navigasi utama">
                <a href="index.php">Beranda</a>
                <a href="index.php#keunggulan">Keunggulan</a>
                <a href="index.php#katalog">Katalog</a>
                <a href="index.php#alur">Cara Daftar</a>
                <a href="fee-calculator.php">Estimasi Biaya</a>
                <a href="registration.php" class="btn-primary" style="padding: 0.4rem 0.8rem;">Daftar Kursus</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <!-- HEADER FORM -->
        <section class="page-intro-card">
            <p class="eyebrow" style="margin: 0;">Pendaftaran Kursus</p>
            <h1 style="margin: 0.5rem 0 0.5rem 0; color: #1f2937;">Mulai belajar bersama KursusKu</h1>
            <p style="margin: 0; color: var(--text-light, #60756e);">Gunakan data latihan. Field bertanda bintang (*) wajib diisi.</p>
        </section>

        <!-- CARD FORMULIR -->
        <section class="form-card">
            <form action="process-registration.php" method="POST" class="registration-form">
                <input type="hidden" name="source" value="week-05">

                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Nama Lengkap *</label>
                        <input id="name" name="name" type="text" minlength="3" maxlength="100" autocomplete="name" required placeholder="Masukkan nama lengkap">
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input id="email" name="email" type="email" maxlength="120" autocomplete="email" required placeholder="nama@email.com">
                    </div>

                    <div class="form-group">
                        <label for="phone">Nomor HP *</label>
                        <input id="phone" name="phone" type="tel" maxlength="15" autocomplete="tel" placeholder="Contoh: 081234567890" required>
                    </div>

                    <div class="form-group">
                        <label for="study_program">Program Studi *</label>
                        <input id="study_program" name="study_program" type="text" maxlength="100" required placeholder="Contoh: Teknik Informatika">
                    </div>
                </div>

                <div class="form-group" style="margin-top: 1rem;">
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

                <fieldset class="form-group">
                    <legend>Jenis Peserta *</legend>
                    <label class="choice">
                        <input type="radio" name="participant_type" value="mahasiswa" required> Mahasiswa
                    </label>
                    <label class="choice">
                        <input type="radio" name="participant_type" value="umum"> Umum
                    </label>
                </fieldset>

                <fieldset class="form-group">
                    <legend>Minat Tambahan</legend>
                    <label class="choice">
                        <input type="checkbox" name="interests[]" value="ui-ux"> UI/UX
                    </label>
                    <label class="choice">
                        <input type="checkbox" name="interests[]" value="database"> Database
                    </label>
                    <label class="choice">
                        <input type="checkbox" name="interests[]" value="backend"> Backend
                    </label>
                </fieldset>

                <div class="form-group">
                    <label for="note">Catatan</label>
                    <textarea id="note" name="note" rows="4" maxlength="300" placeholder="Tuliskan kebutuhan belajar Anda (opsional)"></textarea>
                    <small class="help">Maksimal 300 karakter.</small>
                </div>

                <div class="form-actions">
                    <button class="btn-primary" type="submit">Kirim Pendaftaran</button>
                    <a href="index.php" class="btn-link" style="color: var(--text-light, #60756e); text-decoration: none;">Batal</a>
                </div>
            </form>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <p>&copy; <?= date('Y') ?> KursusKu - Praktikum Pemrograman Web III.</p>
    </footer>

</body>
</html>