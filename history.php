<?php
require_once 'data.php';
require_once 'helpers.php';

// Simulasi data riwayat (biasanya dari database)
$history = [
    ['tanggal' => '2026-10-10', 'kursus' => 'PHP Dasar', 'status' => 'Selesai'],
    ['tanggal' => '2026-10-12', 'kursus' => 'Web Dasar', 'status' => 'Aktif'],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Pendaftaran</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<main class="utility-page">
    <div class="utility-card wide-card">
        <h1>Riwayat Pendaftaran</h1>
        <div class="table-container">
            <table class="cost-table compact-table">
                <thead>
                    <tr><th>Tanggal</th><th>Kursus</th><th>Status</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($history as $h): ?>
                        <tr>
                            <td><?= $h['tanggal'] ?></td>
                            <td><?= htmlspecialchars($h['kursus']) ?></td>
                            <td><span class="badge-available"><?= $h['status'] ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <p style="margin-top:20px;"><a href="index.php" class="btn-primary">Kembali ke Beranda</a></p>
    </div>
</main>
</body>
</html>