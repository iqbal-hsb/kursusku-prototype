<?php

$siteName = 'Kursusku';

$tagline = 'Belajar, daftar, dan kelola kursus dalam satu tempat.';

$year = date('Y');

?>
<!doctype html>

<html lang="id">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title><?= htmlspecialchars($siteName) ?></title>

    <!-- CSS -->
    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >

</head>

<body>

<!-- =========================
     HEADER
========================= -->

<header>

    <nav aria-label="Navigasi utama">

        <a
            href="index.php"
            style="display: flex; align-items: center; gap: 8px;"
        >

            <img
                src="assets/images/logo.svg"
                alt="Logo KursusKu"
                height="36"
            >

        </a>

        <a href="#keunggulan">
            Keunggulan
        </a>

        <a href="#katalog">
            Katalog
        </a>

        <a href="#alur">
            Cara Daftar
        </a>

        <!-- LINK BARU PERTEMUAN 3 -->
        <a href="fee-calculator.php">
            Estimasi Biaya
        </a>

        <a href="#kontak">
            Kontak
        </a>

    </nav>

</header>


<main>

    <!-- =========================
         HERO
    ========================= -->

    <section id="hero">

        <h1>
            <?= htmlspecialchars($tagline) ?>
        </h1>

        <p>
            Temukan kursus teknologi yang relevan
            untuk meningkatkan keterampilan Anda.
        </p>

        <a href="#katalog">
            Lihat Katalog Kursus
        </a>

        <!-- TOMBOL PERTEMUAN 3 -->

        <a href="fee-calculator.php">
            Lihat Estimasi Biaya
        </a>

    </section>


    <!-- =========================
         KEUNGGULAN
    ========================= -->

    <section id="keunggulan">

        <h2>
            Mengapa Memilih Kursusku?
        </h2>

        <article>

            <h3>
                Materi Terarah
            </h3>

            <p>
                Materi disusun bertahap dari dasar
                hingga praktik.
            </p>

        </article>


        <article>

            <h3>
                Belajar dengan Proyek
            </h3>

            <p>
                Setiap tahap menghasilkan bagian nyata
                dari aplikasi.
            </p>

        </article>


        <article>

            <h3>
                Pendampingan Praktik
            </h3>

            <p>
                Mahasiswa belajar melalui demonstrasi,
                latihan, dan evaluasi.
            </p>

        </article>

    </section>


    <!-- =========================
         KATALOG
    ========================= -->

    <section id="katalog">

        <h2>
            Katalog Kursus
        </h2>


        <article>

            <h3>
                Web Dasar
            </h3>

            <p>
                Belajar struktur HTML dan dasar
                pengembangan web.
            </p>

        </article>


        <article>

            <h3>
                PHP Dasar
            </h3>

            <p>
                Belajar variabel, operator,
                percabangan, looping, dan form.
            </p>

        </article>


        <article>

            <h3>
                Laravel Dasar
            </h3>

            <p>
                Mengenal framework, route,
                controller, view, dan database.
            </p>

        </article>


        <!-- =========================
             PERTEMUAN 3
             KALKULATOR BIAYA
        ========================= -->

        <article>

            <h3>
                Estimasi Biaya Kursus
            </h3>

            <p>
                Hitung estimasi biaya kursus berdasarkan
                biaya per peserta, jumlah peserta,
                diskon, dan biaya administrasi.
            </p>

            <a href="fee-calculator.php">
                Hitung Estimasi Biaya
            </a>

        </article>

    </section>


    <!-- =========================
         ALUR PENDAFTARAN
    ========================= -->

    <section id="alur">

        <h2>
            Cara Mendaftar
        </h2>

        <ol>

            <li>
                Pilih kursus yang diminati.
            </li>

            <li>
                Isi form pendaftaran.
            </li>

            <li>
                Periksa kembali data.
            </li>

            <li>
                Kirim pendaftaran dan tunggu konfirmasi.
            </li>

        </ol>

    </section>


    <!-- =========================
         MEDIA
    ========================= -->

    <section id="media">

        <h2>
            Kenali Program Kami
        </h2>


        <img
            src="assets/images/hero-kursus.jpg"
            alt="Mahasiswa sedang mengikuti kegiatan kursus komputer"
            width="640"
        >


        <h3>
            Video Singkat
        </h3>


        <video
            controls
            width="640"
        >

            <source
                src="assets/video/intro-kursus.mp4"
                type="video/mp4"
            >

            Browser Anda tidak mendukung video HTML5.

        </video>


        <p>

            Pelajari juga

            <a
                href="https://www.php.net/"
                target="_blank"
                rel="noopener"
            >
                Dokumentasi PHP
            </a>.

        </p>

    </section>


    <!-- =========================
         INFORMASI PERTEMUAN 3
    ========================= -->

    <section id="estimasi">

        <h2>
            Kalkulator Estimasi Biaya
        </h2>

        <p>
            KursusKu sekarang memiliki fitur kalkulator
            estimasi biaya kursus sebagai bagian dari
            pengembangan Pertemuan 3.
        </p>

        <p>
            Kalkulator menghitung subtotal, diskon,
            biaya admin, dan total akhir.
        </p>

        <a href="fee-calculator.php">
            Buka Kalkulator Biaya
        </a>

    </section>


    <!-- =========================
         KONTAK
    ========================= -->

    <section id="kontak">

        <h2>
            Kontak
        </h2>

        <p>
            Email: kursusku@example.test
        </p>

        <p>
            Alamat: Laboratorium Komputer data latihan
        </p>

    </section>

</main>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <small>

        &copy;
        <?= $year ?>
        <?= htmlspecialchars($siteName) ?>

    </small>

</footer>


</body>

</html>