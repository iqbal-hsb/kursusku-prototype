<?php
require_once __DIR__ . '/helpers.php';
$siteName = 'KursusKu';
$year     = date('Y');
$text     = "KursusKu Platform Belajar";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>String Test - <?= htmlspecialchars($siteName) ?></title>
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
        <h1>🔤 String Test</h1>
        <p>Latihan manipulasi string di PHP.</p>

        <h2>Text: <?= htmlspecialchars($text) ?></h2>
        <ul class="chip-list">
            <li>Panjang: <?= strlen($text) ?></li>
            <li>Huruf Besar: <?= strtoupper($text) ?></li>
            <li>Huruf Kecil: <?= strtolower($text) ?></li>
            <li>Jumlah Kata: <?= str_word_count($text) ?></li>
            <li>Reverse: <?= strrev($text) ?></li>
            <li>Replace: <?= str_replace('KursusKu', 'Kami', $text) ?></li>
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