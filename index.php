<?php
require_once __DIR__ . '/helpers.php';

// Array Data 6 Kursus (Milestone 4)
$courses = [
    [
        'code' => 'WEB-01',
        'name' => 'Web Dasar',
        'fee' => 200000,
        'quota' => 30,
        'registered' => 12,
        'start_date' => '2026-09-21'
    ],
    [
        'code' => 'PHP-01',
        'name' => 'PHP Dasar',
        'fee' => 250000,
        'quota' => 30,
        'registered' => 18,
        'start_date' => '2026-09-22'
    ],
    [
        'code' => 'PHP-02',
        'name' => 'PHP Lanjutan',
        'fee' => 300000,
        'quota' => 25,
        'registered' => 24,
        'start_date' => '2026-09-24'
    ],
    [
        'code' => 'LAR-01',
        'name' => 'Laravel Fundamental',
        'fee' => 350000,
        'quota' => 25,
        'registered' => 25,
        'start_date' => '2026-09-28'
    ],
    [
        'code' => 'DB-01',
        'name' => 'MySQL Dasar',
        'fee' => 275000,
        'quota' => 20,
        'registered' => 0,
        'start_date' => '2026-10-01'
    ],
    [
        'code' => 'UI-01',
        'name' => 'UI Web Dasar',
        'fee' => 225000,
        'quota' => 35,
        'registered' => 9,
        'start_date' => '2026-10-03'
    ]
];
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemeriksaan Status Kursus & Sisa Kursi - KursusKu</title>
    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }

        .card-container {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            width: 100%;
            max-width: 750px;
        }

        .card-title {
            color: #0f766e;
            font-size: 20px;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 8px;
        }

        .card-subtitle {
            color: #6b7280;
            font-size: 13px;
            margin-bottom: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 13px;
        }

        th {
            color: #374151;
            font-weight: 600;
            padding: 12px 10px;
            border-bottom: 1px solid #e5e7eb;
        }

        td {
            padding: 12px 10px;
            color: #4b5563;
            border-bottom: 1px solid #f3f4f6;
        }

        .badge-full {
            color: #dc2626;
            font-weight: 600;
        }

        .badge-available {
            color: #059669;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="card-container">
    <h1 class="card-title">Pemeriksaan Status Kursus & Sisa Kursi</h1>
    <p class="card-subtitle">Validasi pemanggilan fungsi statusKursus() dan sisaKursi() dari helpers.php:</p>

    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Kursus</th>
                <th>Kuota</th>
                <th>Terdaftar</th>
                <th>Sisa Kursi</th>
                <th>Status Visual</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($courses as $course): ?>
                <?php
                    $status = statusKursus($course['quota'], $course['registered']);
                    $statusClass = ($status === 'Penuh') ? 'badge-full' : 'badge-available';
                    $sisa = sisaKursi($course['quota'], $course['registered']);
                ?>
                <tr>
                    <td><?= htmlspecialchars($course['code']) ?></td>
                    <td><?= htmlspecialchars(trim($course['name'])) ?></td>
                    <td><?= $course['quota'] ?></td>
                    <td><?= $course['registered'] ?></td>
                    <td><?= $sisa ?> kursi</td>
                    <td><span class="<?= $statusClass ?>"><?= $status ?></span></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>