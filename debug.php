<?php
require_once __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html>
<head><title>Debug Kursus</title></head>
<body style="font-family:Arial; padding:20px;">
    <h2>Isi Variabel $courses di data.php:</h2>
    <pre style="background:#f0f0f0;padding:15px;border-radius:8px;">
<?php print_r($courses); ?>
    </pre>

    <h2>Test Loop (seperti di registration.php):</h2>
    <select>
        <option value="">-- Pilih Kursus --</option>
        <?php foreach ($courses as $code => $course): ?>
            <option value="<?= htmlspecialchars($code) ?>">
                <?= htmlspecialchars($course['title']) ?> — Rp<?= number_format($course['fee'], 0, ',', '.') ?>
            </option>
        <?php endforeach; ?>
    </select>

    <p style="margin-top:20px;">
        <strong>Kalau dropdown di atas kosong</strong> → data.php belum benar<br>
        <strong>Kalau dropdown terisi</strong> → data.php sudah OK, masalah di registration.php
    </p>
</body>
</html>