<?php
require_once __DIR__ . '/helpers.php';

$siteName = 'Kursusku';
$tagline = 'Belajar, daftar, dan kelola kursus dalam satu tempat.';$year = date('Y');

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

    <title><?= htmlspecialchars($siteName) ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .table-container {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            margin-top: 20px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 14px;
        }

        th {
            color: #374151;
            font-weight: 600;
            padding: 12px 10px;
            border-bottom: 2px solid #e5e7eb;
            background-color: #f9fafb;
        }

        td {
            padding: 12px 10px;
            color: #4b5563;
            border-bottom: 1px solid #f3f4f6;
        }

        .badge-full {
            color: #dc2626;
            font-weight: 600;
            background-color: #fee2e2;
            padding: 4px 8px;
            border-radius: 4px;
        }

        .badge-available {
            color: #059669;
            font-weight: 600;
            background-color: #d1fae5;
            padding: 4px 8px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<!-- =========================
     HEADER
========================= -->
<header>
    <nav aria-label="Navigasi utama">
        <a href="index.php" style="display: flex; align-items: center; gap: 8px;">
            <img src="assets/images/logo.svg" alt="Logo KursusKu" height="36">
        </a>
        <a href="#keunggulan">Keunggulan</a>
        <a href="#katalog">Katalog</a>
        <a href="#alur">Cara Daftar</a>
        <!-- LINK BARU PERTEMUAN 3 -->
        <a href="fee-calculator.php">Estimasi Biaya</a>
        <a href="#kontak">Kontak</a>
    </nav>
</header>

<main>

    <!-- =========================
         HERO
    ========================= -->
    <section id="hero">
        <h1><?= htmlspecialchars($tagline) ?></h1>
        <p>
            Temukan kursus teknologi yang relevan untuk meningkatkan keterampilan Anda.
        </p>
        <a href="#katalog">Lihat Katalog Kursus</a>
        <!-- TOMBOL PERTEMUAN 3 -->
        <a href="fee-calculator.php">Lihat Estimasi Biaya</a>
    </section>

    <!-- =========================
         KEUNGGULAN
    ========================= -->
    <section id="keunggulan">
        <h2>Mengapa Memilih Kursusku?</h2>

        <article>
            <h3>Materi Terarah</h3>
            <p>Materi disusun bertahap dari dasar hingga praktik.</p>
        </article>

        <article>
            <h3>Belajar dengan Proyek</h3>
            <p>Setiap tahap menghasilkan bagian nyata dari aplikasi.</p>
        </article>

        <article>
            <h3>Pendampingan Praktik</h3>
            <p>Mahasiswa belajar melalui demonstrasi, latihan, dan evaluasi.</p>
        </article>
    </section>

    <!-- =========================
         KATALOG (INTEGRASI DATA KURSUS)
    ========================= -->
    <section id="katalog">
        <h2>Katalog Kursus & Status Kuota</h2>
        <p>Pemeriksaan status ketersediaan kursi dan jadwal kelas terupdate:</p>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Kursus</th>
                        <th>Biaya</th>
                        <th>Kuota</th>
                        <th>Terdaftar</th>
                        <th>Sisa Kursi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($courses as$course): ?>
                        <?php
                            $status = statusKursus($course['quota'], $course['registered']);$statusClass = ($status === 'Penuh') ? 'badge-full' : 'badge-available';$sisa = sisaKursi($course['quota'],$course['registered']);
                        ?>
                        <tr>
                            <td><?= htmlspecialchars($course['code']) ?></td>
                            <td><?= htmlspecialchars(trim($course['name'])) ?></td>
                            <td>Rp <?= number_format($course['fee'], 0, ',', '.') ?></td>
                            <td><?= $course['quota'] ?></td>
                            <td><?= $course['registered'] ?></td>
                            <td><?= $sisa ?> kursi</td>
                            <td><span class="<?= $statusClass ?>"><?= htmlspecialchars($status) ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- KALKULATOR BIAYA -->
        <article style="margin-top: 30px;">
            <h3>Estimasi Biaya Kursus</h3>
            <p>
                Hitung estimasi biaya kursus berdasarkan biaya per peserta, jumlah peserta, diskon, dan biaya administrasi.
            </p>
            <a href="fee-calculator.php">Hitung Estimasi Biaya</a>
        </article>
    </section>

    <!-- =========================
         ALUR PENDAFTARAN
    ========================= -->
    <section id="alur">
        <h2>Cara Mendaftar</h2>
        <ol>
            <li>Pilih kursus yang diminati.</li>
            <li>Isi form pendaftaran.</li>
            <li>Periksa kembali data.</li>
            <li>Kirim pendaftaran dan tunggu konfirmasi.</li>
        </ol>
    </section>

    <!-- =========================
         MEDIA
    ========================= -->
    <section id="media">
        <h2>Kenali Program Kami</h2>

        <img src="assets/images/hero-kursus.jpg" alt="Mahasiswa sedang mengikuti kegiatan kursus komputer" width="640">

        <h3>Video Singkat</h3>
        <video controls width="640">
            <source src="assets/video/intro-kursus.mp4" type="video/mp4">
            Browser Anda tidak mendukung video HTML5.
        </video>

        <p>
            Pelajari juga 
            <a href="