<?php

require_once __DIR__ . '/helpers.php';

$tests = [
    [
        'nama' => 'rupiah(250000)',
        'hasil' => rupiah(250000),
        'harapan' => 'Rp 250.000'
    ],
    [
        'nama' => 'statusKursus(25, 25)',
        'hasil' => statusKursus(25, 25),
        'harapan' => 'Penuh'
    ],
    [
        'nama' => 'statusKursus(30, 29)',
        'hasil' => statusKursus(30, 29),
        'harapan' => 'Tersedia'
    ],
    [
        'nama' => 'sisaKursi(20, 0)',
        'hasil' => sisaKursi(20, 0),
        'harapan' => 20
    ],
    [
        'nama' => 'sisaKursi(25, 25)',
        'hasil' => sisaKursi(25, 25),
        'harapan' => 0
    ],
    [
        'nama' => 'formatTanggal(2026-09-15)',
        'hasil' => formatTanggal('2026-09-15'),
        'harapan' => '15-09-2026'
    ]
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Test Functions - KursusKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f8f4;
            padding: 30px;
        }

        h1 {
            color: #176b35;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th {
            background: #176b35;
            color: white;
            padding: 12px;
        }

        td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        .pass {
            color: green;
            font-weight: bold;
        }

        .fail {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>

<h1>Test Functions KursusKu</h1>

<table>
    <tr>
        <th>Test</th>
        <th>Hasil</th>
        <th>Harapan</th>
        <th>Status</th>
    </tr>

    <?php foreach ($tests as $test): ?>

        <?php
        $status = $test['hasil'] === $test['harapan'];
        ?>

        <tr>
            <td><?= htmlspecialchars($test['nama']) ?></td>
            <td><?= htmlspecialchars((string) $test['hasil']) ?></td>
            <td><?= htmlspecialchars((string) $test['harapan']) ?></td>

            <td class="<?= $status ? 'pass' : 'fail' ?>">
                <?= $status ? 'PASS' : 'FAIL' ?>
            </td>
        </tr>

    <?php endforeach; ?>

</table>

</body>
</html>