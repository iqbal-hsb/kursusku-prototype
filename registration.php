<?php
// ============================================================
//  registration.php — Formulir Pendaftaran Kursus (FINAL)
// ============================================================
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/helpers.php';

$siteName = 'KursusKu';
$year     = date('Y');

// Ambil kode kursus dari URL (opsional: ?course=WEB-01)
$selected_code   = isset($_GET['course']) ? sanitize($_GET['course']) : '';
$selected_course = $selected_code ? getCourseByCode($selected_code) : null;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran - <?= htmlspecialchars($siteName) ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="index.php">
            <div class="brand-logo-wrapper">
                <img src="assets/images/logo.svg" alt="Logo" class="brand-logo"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <span class="logo-fallback-icon" style="display:none;">🎓</span>
            </div>
            <span class="brand-title"><?= htmlspecialchars($siteName) ?></span>
        </a>
        <nav aria-label="Navigasi utama">
            <a href="index.php">Beranda</a>
            <a href="registration.php" class="active">Daftar</a>
            <a href="loop-lab.php">Loop Lab</a>
            <a href="history.php">History</a>
            <a href="string-test.php">String Test</a>
            <a href="fee-calculator.php">Estimasi Biaya</a>
        </nav>
    </div>
</header>

<main class="utility-page">
    <div class="utility-card wide-card">

        <h1>📝 Formulir Pendaftaran Kursus</h1>
        <p>Lengkapi data diri Anda di bawah ini. Field bertanda <span style="color:var(--red-700)">*</span> wajib diisi.</p>

        <form action="process-registration.php" method="POST" class="stack-form">

            <input type="hidden" name="source" value="week-05">

            <!-- Nama & Email -->
            <div class="form-grid">
                <div class="field">
                    <label for="fullName">Nama Lengkap <span style="color:var(--red-700)">*</span></label>
                    <input type="text" id="fullName" name="fullName" placeholder="Masukkan nama lengkap" required>
                </div>
                <div class="field">
                    <label for="email">Alamat Email <span style="color:var(--red-700)">*</span></label>
                    <input type="email" id="email" name="email" placeholder="nama@domain.com" required>
                </div>
            </div>

            <!-- WhatsApp & Prodi -->
            <div class="form-grid">
                <div class="field">
                    <label for="whatsapp">Nomor HP / WhatsApp <span style="color:var(--red-700)">*</span></label>
                    <input type="tel" id="whatsapp" name="whatsapp" placeholder="08xxxxxxxxxx" required>
                </div>
                <div class="field">
                    <label for="prodi">Program Studi</label>
                    <input type="text" id="prodi" name="prodi" placeholder="Contoh: Teknik Informatika">
                </div>
            </div>

            <!-- Kursus & Kategori -->
            <div class="form-grid">
                <div class="field">
                    <label for="courseCode">Pilihan Kursus <span style="color:var(--red-700)">*</span></label>
                    <select id="courseCode" name="courseCode" required>
                        <option value="">-- Pilih Kursus --</option>
                        <?php foreach ($courses as $code => $course): ?>
                            <option value="<?= htmlspecialchars($code) ?>"
                                <?= ($selected_course && $selected_course['code'] === $code) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($course['title']) ?> — <?= formatRupiah($course['fee']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="field">
                    <label for="category">Kategori Peserta <span style="color:var(--red-700)">*</span></label>
                    <select id="category" name="category" required>
                        <option value="umum">Umum</option>
                        <option value="mahasiswa">Mahasiswa (Diskon 20%)</option>
                        <option value="alumni">Alumni (Diskon 15%)</option>
                    </select>
                </div>
            </div>

            <!-- Mode & Paket -->
            <div class="form-grid">
                <div class="field">
                    <label for="learningMode">Mode Pembelajaran <span style="color:var(--red-700)">*</span></label>
                    <select id="learningMode" name="learningMode" required>
                        <option value="online">Online</option>
                        <option value="offline">Tatap Muka</option>
                        <option value="hybrid">Hybrid</option>
                    </select>
                </div>
                <div class="field">
                    <label for="packageCount">Jumlah Paket</label>
                    <select id="packageCount" name="packageCount">
                        <?php for ($i = 1; $i <= 3; $i++): ?>
                            <option value="<?= $i ?>"><?= $i ?> Paket</option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>

            <!-- Minat (Checkbox Array) -->
            <fieldset class="field">
                <legend>Minat Tambahan (bisa pilih lebih dari satu)</legend>
                <div class="choice-row">
                    <?php foreach ($interestOptions as $key => $label): ?>
                        <label>
                            <input type="checkbox" name="interests[]" value="<?= htmlspecialchars($key) ?>">
                            <?= htmlspecialchars($label) ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            </fieldset>

            <!-- Sumber & Catatan -->
            <div class="form-grid">
                <div class="field">
                    <label for="sumber">Sumber Informasi <span style="color:var(--red-700)">*</span></label>
                    <select id="sumber" name="sumber" required>
                        <option value="">-- Pilih Sumber --</option>
                        <option value="instagram">Instagram</option>
                        <option value="tiktok">TikTok</option>
                        <option value="teman">Teman / Keluarga</option>
                        <option value="website">Website Resmi</option>
                        <option value="week-05">week-05</option>
                    </select>
                </div>
                <div class="field">
                    <label for="catatan">Catatan Tambahan</label>
                    <textarea id="catatan" name="catatan" rows="3" placeholder="Opsional..."></textarea>
                </div>
            </div>

            <!-- Tombol -->
            <div style="display:flex; gap:12px; flex-wrap:wrap;">
                <button type="submit" class="btn-primary">📨 Kirim Pendaftaran</button>
                <a href="index.php" class="btn-outline">← Batal, Kembali ke Beranda</a>
            </div>

        </form>
    </div>
</main>

<footer class="site-footer">
    <div class="container footer-content">
        <p>&copy; <?= $year ?> <strong><?= htmlspecialchars($siteName) ?></strong> - Praktikum Pemrograman Web III.</p>
    </div>
</footer>

</body>
</html>