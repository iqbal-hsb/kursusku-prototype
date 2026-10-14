<?php
require_once __DIR__ . '/helpers.php';
$siteName = 'KursusKu';
$year     = date('Y');

function sapa($nama) { return "Halo, $nama!"; }
function hitungLuasPersegi($sisi) { return $sisi * $sisi; }
function tampilkanList($array) {
    $html = "<ul class='chip-list'>";
    foreach ($array as $item) $html .= "<li>$item</li>";
    return $html . "</ul>";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Procedure Test - <?= htmlspecialchars($siteName) ?></title>
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
        <h1>⚙️ Procedure Test</h1>
        <p>Latihan fungsi dan prosedur di PHP.</p>

        <p><?= sapa('Peserta Kursus') ?></p>
        <p>Luas persegi (sisi=5): <strong><?= hitungLuasPersegi(5) ?></strong></p>

        <h2>Daftar Kursus:</h2>
        <?= tampilkanList(['PHP Dasar', 'Web Dasar', 'Laravel']) ?>

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