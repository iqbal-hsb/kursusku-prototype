<?php
// loop-lab.php — Latihan Perulangan di PHP
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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS UTAMA (WAJIB!) -->
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
            <a href="operator-test.php">Operator</a>
            <a href="string-test.php">String</a>
        </nav>
    </div>
</header>

<!-- KONTEN -->
<main class="utility-page">
    <div class="utility-card wide-card">

        <h1>🔁 Latihan Perulangan</h1>
        <p>Demonstrasi berbagai jenis perulangan di PHP.</p>

        <!-- 1. FOR LOOP -->
        <h2 style="margin-top:32px;">1. For Loop (1-5)</h2>
        <ul class="chip-list">
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <li><?= $i ?></li>
            <?php endfor; ?>
        </ul>

        <!-- 2. WHILE LOOP -->
        <h2 style="margin-top:32px;">2. While Loop (1-3)</h2>
        <ul class="chip-list">
            <?php $i = 1; while ($i <= 3): ?>
                <li>Iterasi <?= $i++ ?></li>
            <?php endwhile; ?>
        </ul>

        <!-- 3. FOREACH -->
        <h2 style="margin-top:32px;">3. Foreach</h2>
        <ul class="chip-list">
            <?php foreach (['PHP', 'MySQL', 'Laravel'] as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>

        <!-- 4. NESTED LOOP -->
        <h2 style="margin-top:32px;">4. Nested Loop — Tabel Perkalian 5×5</h2>
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
                    <?php for ($baris = 1; $baris <= 5; $baris++): ?>
                        <tr>
                            <td><strong><?= $baris ?></strong></td>
                            <?php for ($kolom = 1; $kolom <= 5; $kolom++): ?>
                                <td style="text-align:center;"><?= $baris * $kolom ?></td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>

        <!-- 5. BREAK & CONTINUE -->
        <h2 style="margin-top:32px;">5. Break & Continue</h2>
        <p><strong>Break</strong> — berhenti di angka 4:</p>
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

        <!-- 6. STUDI KASUS -->
        <h2 style="margin-top:32px;">6. Studi Kasus — Rata-rata Nilai</h2>
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

        <!-- TOMBOL KEMBALI -->
        <p style="margin-top:36px;">
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