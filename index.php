<?php
require_once __DIR__ . '/helpers.php';

$siteName = 'KursusKu';
$tagline  = 'Belajar, daftar, dan kelola kursus dalam satu tempat.';
$year     = date('Y');

// Array Data 6 Kursus
$courses = [
    [
        'code'       => 'WEB-01',
        'name'       => 'Web Dasar',
        'fee'        => 200000,
        'quota'      => 30,
        'registered' => 12,
        'start_date' => '2026-09-21'
    ],
    [
        'code'       => 'PHP-01',
        'name'       => 'PHP Dasar',
        'fee'        => 250000,
        'quota'      => 30,
        'registered' => 18,
        'start_date' => '2026-09-22'
    ],
    [
        'code'       => 'PHP-02',
        'name'       => 'PHP Lanjutan',
        'fee'        => 300000,
        'quota'      => 25,
        'registered' => 24,
        'start_date' => '2026-09-24'
    ],
    [
        'code'       => 'LAR-01',
        'name'       => 'Laravel Fundamental',
        'fee'        => 350000,
        'quota'      => 25,
        'registered' => 25,
        'start_date' => '2026-09-28'
    ],
    [
        'code'       => 'DB-01',
        'name'       => 'MySQL Dasar',
        'fee'        => 275000,
        'quota'      => 20,
        'registered' => 0,
        'start_date' => '2026-10-01'
    ],
    [
        'code'       => 'UI-01',
        'name'       => 'UI Web Dasar',
        'fee'        => 225000,
        'quota'      => 35,
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

    <!-- Pemanggilan File CSS Eksternal -->
    <!-- Jika style.css sejajar dengan index.php, ubah href menjadi "style.css" -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Latar Belakang Kustom -->
    <style>
        /* Menjamin latar belakang utama halaman tampil */
        body {
            background-color: #f6f9f8;
            margin: 0;
            padding: 0;
        }

        /* Latar Belakang Hero dengan Gradient Overlay & Gambar */
        #hero.hero-bg {
            background: linear-gradient(rgba(15, 118, 110, 0.88), rgba(11, 95, 85, 0.92)), 
                        url('assets/images/hero-kursus.jpg') center/cover no-repeat;
            color: #ffffff;
            border-radius: 12px;
            padding: 4rem 2rem;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        #hero.hero-bg .eyebrow {
            color: #a7f3d0;
        }

        #hero.hero-bg a.btn-primary {
            background-color: #ffffff;
            color: #0f766e !important;
        }

        #hero.hero-bg a.btn-primary:hover {
            background-color: #eef8f5;
        }
    </style>
</head>
<body>

<!-- =========================
     HEADER & NAVIGASI
========================= -->
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="index.php" style="display: flex; align-items: center; gap: 8px;">
            <img src="assets/images/logo.svg" alt="Logo KursusKu" height="36" onerror="this.style.display='none'">
            <span><?= htmlspecialchars($siteName) ?></span>
        </a>
        <nav aria-label="Navigasi utama">
            <a href="index.php">Beranda</a>
            <a href="#keunggulan">Keunggulan</a>
            <a href="#katalog">Katalog</a>
            <a href="#alur">Cara Daftar</a>
            <a href="fee-calculator.php">Estimasi Biaya</a>
            <a href="registration.php" class="btn-primary" style="padding: 0.4rem 0.8rem;">Daftar Kursus</a>
        </nav>
    </div>
</header>

<main class="container">

    <!-- =========================
         HERO SECTION (LATAR GAMBAR & GRADIENT)
    ========================= -->
    <section id="hero" class="page-intro hero-bg">
        <p class="eyebrow">Selamat Datang di <?= htmlspecialchars($siteName) ?></p>
        <h1><?= htmlspecialchars($tagline) ?></h1>
        <p>
            Temukan kursus teknologi yang relevan untuk meningkatkan keterampilan Anda.
        </p>
        <div style="margin-top: 1.5rem; display: flex; gap: 10px; justify-content: center; flex-wrap: wrap;">
            <a href="registration.php" class="btn-primary">Daftar Kursus Sekarang</a>
            <a href="#katalog" class="btn-link" style="background: rgba(255, 255, 255, 0.2); color: #fff;">Lihat Katalog</a>
            <a href="fee-calculator.php" class="btn-link" style="background: rgba(255, 255, 255, 0.2); color: #fff;">Hitung Estimasi Biaya</a>
        </div>
    </section>

    <!-- =========================
         KEUNGGULAN
    ========================= -->
    <section id="keunggulan" style="margin-top: 3rem;">
        <h2>Mengapa Memilih KursusKu?</h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem; margin-top: 1rem;">
            <article style="margin: 0;">
                <h3>Materi Terarah</h3>
                <p>Materi disusun bertahap dari dasar hingga praktik.</p>
            </article>

            <article style="margin: 0;">
                <h3>Belajar dengan Proyek</h3>
                <p>Setiap tahap menghasilkan bagian nyata dari aplikasi.</p>
            </article>

            <article style="margin: 0;">
                <h3>Pendampingan Praktik</h3>
                <p>Mahasiswa belajar melalui demonstrasi, latihan, dan evaluasi.</p>
            </article>
        </div>
    </section>

    <!-- =========================
         KATALOG KURSUS
    ========================= -->
    <section id="katalog" style="margin-top: 3rem;">
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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($courses as $course): ?>
                        <?php
                            $status      = statusKursus($course['quota'], $course['registered']);
                            $statusClass = ($status === 'Penuh') ? 'badge-full' : 'badge-available';
                            $sisa        = sisaKursi($course['quota'], $course['registered']);
                        ?>
                        <tr>
                            <td><?= htmlspecialchars($course['code']) ?></td>
                            <td><?= htmlspecialchars(trim($course['name'])) ?></td>
                            <td>Rp <?= number_format($course['fee'], 0, ',', '.') ?></td>
                            <td><?= $course['quota'] ?></td>
                            <td><?= $course['registered'] ?></td>
                            <td><?= $sisa ?> kursi</td>
                            <td><span class="<?= $statusClass ?>"><?= htmlspecialchars($status) ?></span></td>
                            <td>
                                <?php if ($status !== 'Penuh'): ?>
                                    <a href="registration.php" style="font-weight: bold; text-decoration: underline;">Daftar</a>
                                <?php else: ?>
                                    <span style="color: #94a3b8;">Penuh</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- KALKULATOR BIAYA -->
        <article class="form-card" style="margin-top: 20px;">
            <h3>Estimasi Biaya Kursus</h3>
            <p>
                Hitung estimasi biaya kursus berdasarkan biaya per peserta, jumlah peserta, diskon, dan biaya administrasi.
            </p>
            <a href="fee-calculator.php" class="btn-primary">Hitung Estimasi Biaya</a>
        </article>
    </section>

    <!-- =========================
         ALUR PENDAFTARAN
    ========================= -->
    <section id="alur" style="margin-top: 3rem;">
        <h2>Cara Mendaftar</h2>
        <ol style="line-height: 2;">
            <li>Pilih kursus yang diminati pada katalog di atas.</li>
            <li>Klik tombol atau menu <strong>Daftar Kursus</strong>.</li>
            <li>Isi form pendaftaran dengan data latihan Anda.</li>
            <li>Periksa kembali ringkasan data pendaftaran.</li>
            <li>Kirim pendaftaran dan simpan bukti konfirmasinya.</li>
        </ol>
    </section>

    <!-- =========================
         MEDIA
    ========================= -->
    <section id="media" style="margin-top: 3rem; margin-bottom: 3rem;">
        <h2>Kenali Program Kami</h2>

        <div style="margin-bottom: 1.5rem;">
            <img src="assets/images/hero-kursus.jpg" alt="Mahasiswa sedang mengikuti kegiatan kursus komputer" onerror="this.style.display='none'">
        </div>

        <h3>Video Singkat</h3>
        <div>
            <video controls>
                <source src="assets/video/intro-kursus.mp4" type="video/mp4">
                Browser Anda tidak mendukung video HTML5.
            </video>
        </div>
    </section>

</main>

<footer>
    <p>&copy; <?= $year ?> <?= htmlspecialchars($siteName) ?> - Praktikum Pemrograman Web III.</p>
</footer>

</body>
</html>