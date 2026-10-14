<?php
require_once __DIR__ . '/helpers.php';
$siteName = 'KursusKu';
$year     = date('Y');
$a = 12; // 1100
$b = 10; // 1010
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bitwise Test - <?= htmlspecialchars($siteName) ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="index.php"><span class="brand-title"><?= htmlspecialchars($siteName) ?></span></a>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="loop-lab.php">Loop Lab</a>
            <a href="history.php">History</a>
            <a href="registration.php" class="btn-nav-action">Daftar</a>
        </nav>
    </div>
</header>

<main class="utility-page">
    <div class="utility-card">
        <h1>🔢 Bitwise Test</h1>
        <p>Latihan operator bitwise PHP.</p>

        <h2>a = <?= $a ?> (<?= decbin($a) ?>), b = <?= $b ?> (<?= decbin($b) ?>)</h2>
        <ul class="chip-list">
            <li>a & b = <?= $a & $b ?></li>
            <li>a | b = <?= $a | $b ?></li>
            <li>a ^ b = <?= $a ^ $b ?></li>
            <li>~a = <?= ~$a ?></li>
            <li>a << 1 = <?= $a << 1 ?></li>
            <li>a >> 1 = <?= $a >> 1 ?></li>
        </ul>

        <p style="margin-top:32px;">
            <a href="index.php" class="btn-primary">← Kembali ke Beranda</a>
        </p>
    </div>
</main>

<footer class="site-footer">
    <div class="container footer-content">
        <p>&copy; <?= $year ?> <strong><?= htmlspecialchars($siteName) ?></strong> - Praktikum Pemrograman Web III.</p>
    </div>
</footer>
</body>
</html>