<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Loop Lab</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<main class="utility-page">
    <div class="utility-card">
        <h1>Latihan Perulangan</h1>

        <h3>For Loop (1-5)</h3>
        <ul class="chip-list">
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <li><?= $i ?></li>
            <?php endfor; ?>
        </ul>

        <h3>While Loop (1-3)</h3>
        <ul class="chip-list">
            <?php $i = 1; while ($i <= 3): ?>
                <li>Iterasi <?= $i++ ?></li>
            <?php endwhile; ?>
        </ul>

        <h3>Foreach</h3>
        <ul class="chip-list">
            <?php foreach (['PHP', 'MySQL', 'Laravel'] as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>

        <a href="index.php" class="btn-primary">Kembali</a>
    </div>
</main>
</body>
</html>