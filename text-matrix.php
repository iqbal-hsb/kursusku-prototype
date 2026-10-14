<?php
require_once __DIR__ . '/helpers.php';
$siteName = 'KursusKu';
$year     = date('Y');
$matrix = [
    ['A', 'B', 'C'],
    ['D', 'E', 'F'],
    ['G', 'H', 'I'],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Text Matrix - <?= htmlspecialchars($siteName) ?></title>
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
        <h1>📊 Text Matrix</h1>
        <p>Latihan array multidimensi (matriks 3×3).</p>

        <div class="table-container">
            <table class="cost-table compact-table">
                <tbody>
                    <?php foreach ($matrix as $row): ?>
                        <tr>
                            <?php foreach ($row as $cell): ?>
                                <td style="text-align:center; font-weight:800; font-size:18px;">
                                    <?= $cell ?>
                                </td>
                            <?php endforeach; ?>
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

<footer class="site-footer">
    <div class="container footer-content">
        <p>&copy; <?= $year ?> <strong><?= htmlspecialchars($siteName) ?></strong> - Praktikum Pemrograman Web III.</p>
    </div>
</footer>
</body>
</html>