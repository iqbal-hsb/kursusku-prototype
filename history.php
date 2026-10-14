<?php
// ============================================================
//  history.php — Riwayat Pendaftaran Kursus
// ============================================================
require_once __DIR__ . '/helpers.php';

$siteName = 'KursusKu';
$year     = date('Y');

// Simulasi riwayat (biasanya dari database)
$history = [
    ['tanggal' => '2026-10-10', 'kode' => 'PHP-01', 'kursus' => 'PHP Dasar',   'peserta' => 'Andi Wijaya',  'biaya' => 250000, 'status' => 'Selesai'],
    ['tanggal' => '2026-10-11', 'kode' => 'WEB-01', 'kursus' => 'Web Dasar',   'peserta' => 'Budi Santoso', 'biaya' => 200000, 'status' => 'Aktif'],
    ['tanggal' => '2026-10-12', 'kode' => 'LAR-01', 'kursus' => 'Laravel',     'peserta' => 'Citra Dewi',   'biaya' => 350000, 'status' => 'Aktif'],
    ['tanggal' => '2026-10-13', 'kode' => 'DB-01',  'kursus' => 'MySQL Dasar', 'peserta' => 'Dedi Kurnia',  'biaya' => 275000, 'status' => 'Menunggu'],
    ['tanggal' => '2026-10-14', 'kode' => 'UI-01',  'kursus' => 'UI Web',      'peserta' => 'Eka Putri',    'biaya' => 225000, 'status' => 'Selesai'],
];

// Hitung total
$totalPendaftar = count($history);
$totalPendapatan = 0;
foreach ($history as $h) { $totalPendapatan += $h['biaya']; }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pendaftaran - <?= htmlspecialchars($siteName) ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- HEADER -->
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="index.php">
            <span class="brand-title"><?= htmlspecialchars($siteName) ?></span>
        </a>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="loop-lab.php">Loop Lab</a>
            <a href="history.php" class="active">History</a>
            <a href="fee-calculator.php">Estimasi Biaya</a>
            <a href="registration.php" class="btn-nav-action">Daftar</a>
        </nav>
    </div>
</header>

<!-- KONTEN -->
<main class="utility-page">
    <div class="utility-card wide-card">

        <h1>📜 Riwayat Pendaftaran</h1>
        <p>Daftar peserta yang telah mendaftar kursus di <?= htmlspecialchars($siteName) ?>.</p>

        <!-- STATISTIK -->
        <div class="form-grid" style="margin-top:24px;">
            <div class="formula-box">
                <p><strong>Total Pendaftar</strong></p>
                <p style="font-size:28px; color: var(--teal-700); font-weight:800;">
                    <?= $totalPendaftar ?> orang
                </p>
            </div>
            <div class="formula-box">
                <p><strong>Total Pendapatan</strong></p>
                <p style="font-size:28px; color: var(--teal-700); font-weight:800;">
                    <?= formatRupiah($totalPendapatan) ?>
                </p>
            </div>
        </div>

        <!-- TABEL RIWAYAT -->
        <h2 style="margin-top:36px;">Data Riwayat</h2>
        <div class="table-container">
            <table class="cost-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Kode</th>
                        <th>Kursus</th>
                        <th>Peserta</th>
                        <th>Biaya</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($history as $i => $h): ?>
                        <?php
                            $badge = 'badge-available';
                            if ($h['status'] === 'Menunggu') $badge = 'badge-full';
                        ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= htmlspecialchars($h['tanggal']) ?></td>
                            <td><strong><?= htmlspecialchars($h['kode']) ?></strong></td>
                            <td><?= htmlspecialchars($h['kursus']) ?></td>
                            <td><?= htmlspecialchars($h['peserta']) ?></td>
                            <td><?= formatRupiah($h['biaya']) ?></td>
                            <td><span class="<?= $badge ?>"><?= htmlspecialchars($h['status']) ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <p style="margin-top:32px;">
            <a href="index.php" class="btn-primary">← Kembali ke Beranda</a>
        </p>
    </div>
</main>

<!-- FOOTER -->
<footer class="site-footer">
    <div class="container footer-content">
        <p>&copy; <?= $year ?> <strong><?= htmlspecialchars($siteName) ?></strong> - Praktikum Pemrograman Web III.</p>
    </div>
</footer>

</body>
</html>