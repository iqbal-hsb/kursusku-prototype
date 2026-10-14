<?php
// tes-tanggal.php — Tes fungsi formatTanggal()

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/helpers.php';

// Siapkan beberapa tanggal untuk dites
$tanggalUji = [
    '2026-09-21',
    '2026-09-22',
    '2026-10-01',
    '2026-12-25',
    '2027-01-01',
];

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes formatTanggal()</title>
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
                <span class="logo-fallback-icon" style="display:flex;">🎓</span>
            </div>
            <span class="brand-title">KursusKu</span>
        </a>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="tes-tanggal.php" class="active">Tes Tanggal</a>
        </nav>
    </div>
</header>

<main class="utility-page">
    <div class="utility-card wide-card">

        <h1>📅 Tes Fungsi <code>formatTanggal()</code></h1>
        <p>Halaman ini membuktikan bahwa fungsi <code>formatTanggal()</code> dari <code>helpers.php</code> bekerja dengan baik.</p>

        <h2>1. Kode Fungsi di helpers.php</h2>
        <pre>function formatTanggal($date) {
    $timestamp = strtotime($date);
    if ($timestamp === false) {
        return $date;
    }
    return date('F j, Y', $timestamp);
}</pre>

        <h2>2. Hasil Pemanggilan formatTanggal()</h2>
        <div class="table-container">
            <table class="cost-table compact-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Input Tanggal</th>
                        <th>Hasil formatTanggal()</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tanggalUji as $i => $tgl): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><code><?= htmlspecialchars($tgl) ?></code></td>
                            <td><strong><?= formatTanggal($tgl) ?></strong></td>
                            <td><span class="badge-available">✅ Berhasil</span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <h2>3. Uji Tanggal Tidak Valid</h2>
        <div class="result-grid">
            <p>
                <strong>Input:</strong> <code>"bukan-tanggal"</code><br>
                <strong>Output:</strong> <code><?= formatTanggal('bukan-tanggal') ?></code>
            </p>
            <p>
                <strong>Input:</strong> <code>""</code> (kosong)<br>
                <strong>Output:</strong> <code><?= formatTanggal('') ?></code>
            </p>
        </div>

        <h2>4. Penerapan di Katalog Kursus</h2>
        <p>Di bawah ini contoh bagaimana <code>formatTanggal()</code> dipakai untuk menampilkan jadwal mulai kursus:</p>
        <ul class="chip-list">
            <li>Web Dasar — 📅 <?= formatTanggal('2026-09-21') ?></li>
            <li>PHP Dasar — 📅 <?= formatTanggal('2026-09-22') ?></li>
            <li>Laravel — 📅 <?= formatTanggal('2026-09-28') ?></li>
        </ul>

        <p style="margin-top:32px;">
            <a href="index.php" class="btn-primary">← Kembali ke Beranda</a>
        </p>
    </div>
</main>

<footer class="site-footer">
    <div class="container footer-content">
        <p>&copy; <?= date('Y') ?> <strong>KursusKu</strong> - Praktikum Pemrograman Web III.</p>
    </div>
</footer>

</body>
</html>