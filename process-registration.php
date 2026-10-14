<?php
// ============================================================
//  process-registration.php — Proses Pendaftaran Kursus
// ============================================================
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/helpers.php';

$siteName = 'KursusKu';
$year     = date('Y');

// Kalau bukan POST, redirect ke form
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect('registration.php');
}

// ============================================================
// AMBIL DATA DARI FORM
// ============================================================
$fullName      = sanitize($_POST['fullName']     ?? '');
$email         = sanitize($_POST['email']        ?? '');
$whatsapp      = sanitize($_POST['whatsapp']     ?? '');
$prodi         = sanitize($_POST['prodi']        ?? '');
$courseCode    = sanitize($_POST['courseCode']   ?? '');
$category      = sanitize($_POST['category']     ?? 'umum');
$learningMode  = sanitize($_POST['learningMode'] ?? 'online');
$packageCount  = (int)   ($_POST['packageCount'] ?? 1);
$sumber        = sanitize($_POST['sumber']       ?? '');
$catatan       = sanitize($_POST['catatan']      ?? '');
$sourceInfo    = sanitize($_POST['source']       ?? '');

// Handle array interests[]
$interests = $_POST['interests'] ?? [];
if (!is_array($interests)) $interests = [$interests];
$interests = array_map('sanitize', $interests);
$interests = array_filter($interests);

// ============================================================
// VALIDASI
// ============================================================
$errors = [];
if (empty($fullName))  $errors[] = "Nama lengkap wajib diisi.";
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email tidak valid.";
}
if (empty($whatsapp))  $errors[] = "Nomor HP/WhatsApp wajib diisi.";
if (empty($courseCode)) {
    $errors[] = "Kursus wajib dipilih.";
} else {
    $course = getCourseByCode($courseCode);
    if (!$course) {
        $errors[] = "Kursus dengan kode '" . htmlspecialchars($courseCode) . "' tidak ditemukan.";
    }
}
if (empty($sumber))    $errors[] = "Sumber informasi wajib dipilih.";

// ============================================================
// HITUNG DISKON
// ============================================================
$course = $course ?? null;
$diskonPersen = 0;
if ($category === 'mahasiswa') $diskonPersen = 20;
if ($category === 'alumni')    $diskonPersen = 15;

$hargaAsli  = $course['fee'] ?? 0;
$subtotal   = $hargaAsli * $packageCount;
$potongan   = $subtotal * ($diskonPersen / 100);
$totalBayar = $subtotal - $potongan;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran - <?= htmlspecialchars($siteName) ?></title>
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
        <nav>
            <a href="index.php">Beranda</a>
            <a href="registration.php">Daftar</a>
            <a href="history.php">History</a>
        </nav>
    </div>
</header>

<main class="utility-page">
    <div class="utility-card wide-card">

        <?php if (!empty($errors)): ?>
            <!-- ERROR -->
            <h1>⚠️ Terjadi Kesalahan</h1>
            <div class="alert alert-error">
                <strong>Mohon periksa kembali data Anda:</strong>
                <ul>
                    <?php foreach ($errors as $e): ?>
                        <li><?= $e ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <p style="margin-top:24px;">
                <a href="registration.php" class="btn-primary">← Kembali ke Formulir</a>
            </p>
        <?php else: ?>
            <!-- BERHASIL -->
            <h1>✅ Pendaftaran Diterima untuk Diproses</h1>
            <p>Terima kasih, <strong><?= htmlspecialchars($fullName) ?></strong>. Berikut ringkasan pendaftaran Anda:</p>

            <h2>Data Peserta</h2>
            <div class="result-grid">
                <p><strong>Nama:</strong><br><?= htmlspecialchars($fullName) ?></p>
                <p><strong>Email:</strong><br><?= htmlspecialchars($email) ?></p>
                <p><strong>WhatsApp:</strong><br><?= htmlspecialchars($whatsapp) ?></p>
                <p><strong>Program Studi:</strong><br><?= htmlspecialchars($prodi ?: '-') ?></p>
                <p><strong>Kategori:</strong><br><?= ucfirst($category) ?></p>
                <p><strong>Sumber Info:</strong><br><?= htmlspecialchars($sumber) ?></p>
            </div>

            <h2>Detail Kursus</h2>
            <div class="result-grid">
                <p><strong>Kode Kursus:</strong><br><?= htmlspecialchars($course['code']) ?></p>
                <p><strong>Nama Kursus:</strong><br><?= htmlspecialchars($course['title']) ?></p>
                <p><strong>Mode Belajar:</strong><br><?= ucfirst($learningMode) ?></p>
                <p><strong>Jumlah Paket:</strong><br><?= $packageCount ?> paket</p>
                <p><strong>Harga Satuan:</strong><br><?= formatRupiah($hargaAsli) ?></p>
                <p><strong>Subtotal:</strong><br><?= formatRupiah($subtotal) ?></p>
            </div>

            <h2>Minat Tambahan</h2>
            <?php if (!empty($interests)): ?>
                <ul class="chip-list">
                    <?php foreach ($interests as $item): ?>
                        <li>🎯 <?= htmlspecialchars($interestOptions[$item] ?? $item) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="text-muted">Tidak ada minat tambahan yang dipilih.</p>
            <?php endif; ?>

            <h2>Ringkasan Biaya</h2>
            <div class="formula-box">
                <p><strong>Harga Asli:</strong> <?= formatRupiah($hargaAsli) ?> × <?= $packageCount ?> paket</p>
                <p><strong>Subtotal:</strong> <?= formatRupiah($subtotal) ?></p>
                <p><strong>Diskon (<?= $diskonPersen ?>%):</strong> - <?= formatRupiah($potongan) ?></p>
                <hr>
                <p class="total-row"><strong>Total Bayar: <?= formatRupiah($totalBayar) ?></strong></p>
            </div>

            <?php if ($catatan): ?>
                <h2>Catatan</h2>
                <div class="alert alert-info"><?= htmlspecialchars($catatan) ?></div>
            <?php endif; ?>

            <p style="margin-top:32px; display:flex; gap:12px; flex-wrap:wrap;">
                <a href="index.php" class="btn-primary">← Kembali ke Beranda</a>
                <a href="registration.php" class="btn-secondary">Daftar Lagi</a>
            </p>
        <?php endif; ?>

    </div>
</main>

<footer class="site-footer">
    <div class="container footer-content">
        <p>&copy; <?= $year ?> <strong><?= htmlspecialchars($siteName) ?></strong> - Praktikum Pemrograman Web III.</p>
    </div>
</footer>

</body>
</html>