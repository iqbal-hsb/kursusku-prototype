<?php
// ============================================================
//  loop-lab.php — Latihan Perulangan PHP
// ============================================================
require_once __DIR__ . '/helpers.php';

$siteName = 'KursusKu';
$year     = date('Y');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Lab - <?= htmlspecialchars($siteName) ?></title>

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
            <a href="loop-lab.php" class="active">Loop Lab</a>
            <a href="history.php">History</a>
            <a href="fee-calculator.php">Estimasi Biaya</a>
            <a href="registration.php" class="btn-nav-action">Daftar</a>
        </nav>
    </div>
</header>

<!-- KONTEN -->
<main class="utility-page">
    <div class="utility-card wide-card">

        <h1>🔁 Latihan Perulangan</h1>
        <p>Demonstrasi berbagai jenis perulangan di PHP.</p>

        <!-- 1. FOR LOOP -->
        <h2>1. For Loop (1 - 5)</h2>
        <ul class="chip-list">
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <li><?= $i ?></li>
            <?php endfor; ?>
        </ul>

        <!-- 2. WHILE LOOP -->
        <h2>2. While Loop (1 - 3)</h2>
        <ul class="chip-list">
            <?php $i = 1; while ($i <= 3): ?>
                <li>Iterasi <?= $i++ ?></li>
            <?php endwhile; ?>
        </ul>

        <!-- 3. DO-WHILE -->
        <h2>3. Do-While Loop (Minimal 1x Jalan)</h2>
        <ul class="chip-list">
            <?php
            $j = 10;
            do {
                echo "<li>Nilai j = $j</li>";
                $j++;
            } while ($j < 10);
            ?>
        </ul>

        <!-- 4. FOREACH BIASA -->
        <h2>4. Foreach — Daftar Kursus</h2>
        <ul class="chip-list">
            <?php foreach (['Web Dasar', 'PHP Dasar', 'Laravel', 'MySQL', 'UI Web'] as $kursus): ?>
                <li><?= htmlspecialchars($kursus) ?></li>
            <?php endforeach; ?>
        </ul>

        <!-- 5. FOREACH ASOSIATIF -->
        <h2>5. Foreach — Array Asosiatif</h2>
        <div class="table-container">
            <table class="cost-table compact-table">
                <thead>
                    <tr><th>Kode</th><th>Nama Kursus</th><th>Biaya</th></tr>
                </thead>
                <tbody>
                    <?php
                    $detail = [
                        'WEB-01' => ['nama' => 'Web Dasar',  'biaya' => 200000],
                        'PHP-01' => ['nama' => 'PHP Dasar',  'biaya' => 250000],
                        'LAR-01' => ['nama' => 'Laravel',    'biaya' => 350000],
                    ];
                    foreach ($detail as $kode => $d): ?>
                        <tr>
                            <td><strong><?= $kode ?></strong></td>
                            <td><?= htmlspecialchars($d['nama']) ?></td>
                            <td><?= formatRupiah($d['biaya']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- 6. NESTED LOOP -->
        <h2>6. Nested Loop — Tabel Perkalian 5×5</h2>
        <div class="table-container">
            <table class="cost-table compact-table">
                <thead>
                    <tr>
                        <th>×</th>
                        <?php for ($k = 1; $k <= 5; $k++): ?>
                            <th><?= $k ?></th>
                        <?php endfor; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($b = 1; $b <= 5; $b++): ?>
                        <tr>
                            <td><strong><?= $b ?></strong></td>
                            <?php for ($k = 1; $k <= 5; $k++): ?>
                                <td style="text-align:center;"><?= $b * $k ?></td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>

        <!-- 7. BREAK & CONTINUE -->
        <h2>7. Break & Continue</h2>
        <p><strong>Break</strong> — berhenti saat mencapai 4:</p>
        <ul class="chip-list">
            <?php for ($n = 1; $n <= 10; $n++): ?>
                <?php if ($n == 4) break; ?>
                <li><?= $n ?></li>
            <?php endfor; ?>
        </ul>

        <p style="margin-top:16px;"><strong>Continue</strong> — lewati angka genap:</p>
        <ul class="chip-list">
            <?php for ($n = 1; $n <= 10; $n++): ?>
                <?php if ($n % 2 == 0) continue; ?>
                <li><?= $n ?></li>
            <?php endfor; ?>
        </ul>

        <!-- 8. STUDI KASUS -->
        <h2>8. Studi Kasus — Rata-rata Nilai</h2>
        <?php
        $nilai = [85, 90, 78, 92, 88, 75, 80];
        $total = 0;
        foreach ($nilai as $n) { $total += $n; }
        $rata = $total / count($nilai);
        ?>
        <ul class="chip-list">
            <li>Jumlah peserta: <?= count($nilai) ?></li>
            <li>Total nilai: <?= $total ?></li>
            <li>Rata-rata: <?= number_format($rata, 2) ?></li>
            <li>Status: <?= ($rata >= 80) ? 'Baik ✅' : 'Perlu perbaikan ⚠️' ?></li>
        </ul>

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