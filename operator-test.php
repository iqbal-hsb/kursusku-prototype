<?php
// ============================================================
//  operator-test.php — Latihan Operator di PHP
//  Contoh: $fee = 350000; var_dump($fee === 350000);
// ============================================================
require_once __DIR__ . '/helpers.php';

$siteName = 'KursusKu';
$year     = date('Y');

// ============================================================
// DEKLARASI VARIABEL CONTOH
// ============================================================
$fee = 350000;
$quota = 25;
$registered = 25;

// ============================================================
// 1. OPERATOR PERBANDINGAN (sesuai permintaan)
// ============================================================
$hasil1 = ($fee === 350000);       // identical (sama tipe & nilai)
$hasil2 = ($fee == 350000);        // equal (sama nilai)
$hasil3 = ($fee == '350000');      // equal — string vs int
$hasil4 = ($fee === '350000');     // identical — string vs int
$hasil5 = ($fee != 300000);        // not equal
$hasil6 = ($fee !== 350000);       // not identical
$hasil7 = ($fee > 200000);         // greater than
$hasil8 = ($fee < 500000);         // less than
$hasil9 = ($fee >= 350000);        // greater or equal
$hasil10 = ($fee <= 350000);       // less or equal

// ============================================================
// 2. OPERATOR ARITMATIKA
// ============================================================
$a = 10;
$b = 3;

$tambah   = $a + $b;
$kurang   = $a - $b;
$kali     = $a * $b;
$bagi     = $a / $b;
$modulus  = $a % $b;
$pangkat  = $a ** $b;

// ============================================================
// 3. OPERATOR LOGIKA
// ============================================================
$logikaAnd  = ($fee > 100000 && $quota > 10);
$logikaOr   = ($fee > 500000 || $quota > 10);
$logikaNot  = !($fee < 100000);

// ============================================================
// 4. OPERATOR PENUGASAN (ASSIGNMENT)
// ============================================================
$x = 100;
$x += 50;    // $x = $x + 50 → 150
$x -= 30;    // $x = $x - 30 → 120
$x *= 2;     // $x = $x * 2  → 240
$x /= 4;     // $x = $x / 4  → 60

// ============================================================
// 5. OPERATOR INCREMENT / DECREMENT
// ============================================================
$y = 5;
$y++;    // 6
$y++;    // 7
$y--;    // 6

// ============================================================
// 6. OPERATOR STRING
// ============================================================
$namaDepan  = 'Budi';
$namaBelakang = 'Santoso';
$namaLengkap = $namaDepan . ' ' . $namaBelakang;   // concat
$namaLengkap .= ' — Peserta';                       // concat assign
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Test - <?= htmlspecialchars($siteName) ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- =========================
     HEADER
========================= -->
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="index.php">
            <div class="brand-logo-wrapper">
                <img src="assets/images/logo.svg" alt="Logo" class="brand-logo"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <span class="logo-fallback-icon" style="display:none;">🎓</span>
            </div>
            <span class="brand-title"><?= htmlspecialchars($siteName) ?></span>
        </a>

        <nav aria-label="Navigasi utama">
            <a href="index.php">Beranda</a>
            <a href="loop-lab.php">Loop Lab</a>
            <a href="history.php">History</a>
            <a href="operator-test.php" class="active">Operator Test</a>
            <a href="registration.php" class="btn-nav-action">Daftar</a>
        </nav>
    </div>
</header>

<!-- =========================
     KONTEN
========================= -->
<main class="utility-page">
    <div class="utility-card wide-card">

        <h1>➕ Operator Test</h1>
        <p>Latihan berbagai jenis operator di PHP dengan contoh <code>$fee = 350000</code>.</p>

        <!-- ============================================
             0. DEKLARASI AWAL (sesuai permintaan)
        ============================================= -->
        <h2>0. Deklarasi Variabel</h2>
        <pre>// Contoh kode
$fee = 350000;
var_dump($fee === 350000);</pre>

        <p>Hasil <code>var_dump()</code>:</p>
        <div class="formula-box" style="font-family:'Consolas', monospace; font-size: 13px;">
            <pre style="background:var(--slate-950); color:#0f0; padding:15px; border-radius:8px; margin:0;">
<?php var_dump($fee === 350000); ?>
            </pre>
        </div>
        <p class="text-muted" style="margin-top:10px;">
            <strong>Penjelasan:</strong> <code>$fee === 350000</code> menghasilkan <strong>true</strong> karena
            nilai sama (<code>350000</code>) dan tipe sama (<code>integer</code>).
        </p>

        <!-- ============================================
             1. OPERATOR PERBANDINGAN
        ============================================= -->
        <h2>1. Operator Perbandingan</h2>
        <div class="table-container">
            <table class="cost-table compact-table">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Deskripsi</th>
                        <th>Hasil var_dump()</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>$fee === 350000</code></td>
                        <td>Identical (sama tipe & nilai)</td>
                        <td><code><?php var_dump($hasil1); ?></code></td>
                    </tr>
                    <tr>
                        <td><code>$fee == 350000</code></td>
                        <td>Equal (sama nilai)</td>
                        <td><code><?php var_dump($hasil2); ?></code></td>
                    </tr>
                    <tr>
                        <td><code>$fee == '350000'</code></td>
                        <td>Equal dengan string</td>
                        <td><code><?php var_dump($hasil3); ?></code></td>
                    </tr>
                    <tr>
                        <td><code>$fee === '350000'</code></td>
                        <td>Identical dengan string</td>
                        <td><code><?php var_dump($hasil4); ?></code></td>
                    </tr>
                    <tr>
                        <td><code>$fee != 300000</code></td>
                        <td>Not equal</td>
                        <td><code><?php var_dump($hasil5); ?></code></td>
                    </tr>
                    <tr>
                        <td><code>$fee !== 350000</code></td>
                        <td>Not identical</td>
                        <td><code><?php var_dump($hasil6); ?></code></td>
                    </tr>
                    <tr>
                        <td><code>$fee > 200000</code></td>
                        <td>Lebih besar</td>
                        <td><code><?php var_dump($hasil7); ?></code></td>
                    </tr>
                    <tr>
                        <td><code>$fee < 500000</code></td>
                        <td>Lebih kecil</td>
                        <td><code><?php var_dump($hasil8); ?></code></td>
                    </tr>
                    <tr>
                        <td><code>$fee >= 350000</code></td>
                        <td>Lebih besar atau sama dengan</td>
                        <td><code><?php var_dump($hasil9); ?></code></td>
                    </tr>
                    <tr>
                        <td><code>$fee <= 350000</code></td>
                        <td>Lebih kecil atau sama dengan</td>
                        <td><code><?php var_dump($hasil10); ?></code></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- ============================================
             2. OPERATOR ARITMATIKA
        ============================================= -->
        <h2>2. Operator Aritmatika</h2>
        <p>Contoh: <code>$a = <?= $a ?></code>, <code>$b = <?= $b ?></code></p>
        <div class="result-grid">
            <p><strong>$a + $b:</strong><br><?= $tambah ?></p>
            <p><strong>$a - $b:</strong><br><?= $kurang ?></p>
            <p><strong>$a * $b:</strong><br><?= $kali ?></p>
            <p><strong>$a / $b:</strong><br><?= $bagi ?></p>
            <p><strong>$a % $b:</strong><br><?= $modulus ?> (sisa bagi)</p>
            <p><strong>$a ** $b:</strong><br><?= $pangkat ?> (pangkat)</p>
        </div>

        <!-- ============================================
             3. OPERATOR LOGIKA
        ============================================= -->
        <h2>3. Operator Logika</h2>
        <p>Menggunakan <code>$fee = <?= $fee ?></code>, <code>$quota = <?= $quota ?></code></p>
        <div class="result-grid">
            <p><strong>$fee > 100000 && $quota > 10:</strong><br><code><?php var_dump($logikaAnd); ?></code></p>
            <p><strong>$fee > 500000 || $quota > 10:</strong><br><code><?php var_dump($logikaOr); ?></code></p>
            <p><strong>!($fee < 100000):</strong><br><code><?php var_dump($logikaNot); ?></code></p>
        </div>

        <!-- ============================================
             4. OPERATOR PENUGASAN
        ============================================= -->
        <h2>4. Operator Penugasan (Assignment)</h2>
        <p>Mulai dari <code>$x = 100</code>, lalu operasi berturut-turut:</p>
        <ul class="chip-list">
            <li>$x = 100 → <strong>100</strong></li>
            <li>$x += 50 → <strong>150</strong></li>
            <li>$x -= 30 → <strong>120</strong></li>
            <li>$x *= 2 → <strong>240</strong></li>
            <li>$x /= 4 → <strong>60</strong></li>
        </ul>
        <p>Hasil akhir <code>$x</code>: <strong><?= $x ?></strong></p>

        <!-- ============================================
             5. INCREMENT / DECREMENT
        ============================================= -->
        <h2>5. Operator Increment / Decrement</h2>
        <p>Mulai dari <code>$y = 5</code>:</p>
        <ul class="chip-list">
            <li>+ + → 6</li>
            <li>+ + → 7</li>
            <li>- - → 6</li>
        </ul>
        <p>Hasil akhir <code>$y</code>: <strong><?= $y ?></strong></p>

        <!-- ============================================
             6. OPERATOR STRING
        ============================================= -->
        <h2>6. Operator String (Concatenation)</h2>
        <p>Menggunakan <code>.</code> (titik) untuk menggabungkan string:</p>
        <div class="result-grid">
            <p><strong>$namaDepan . ' ' . $namaBelakang:</strong><br><?= htmlspecialchars($namaDepan . ' ' . $namaBelakang) ?></p>
            <p><strong>$namaLengkap .= ' — Peserta':</strong><br><?= htmlspecialchars($namaLengkap) ?></p>
        </div>

        <!-- ============================================
             7. STUDI KASUS: VALIDASI KURSUS
        ============================================= -->
        <h2>7. Studi Kasus — Validasi Kursus</h2>
        <p>Menggunakan operator di kasus nyata:</p>
        <?php
        $cekHarga     = ($fee === 350000);
        $cekTersedia  = ($registered < $quota);
        $cekLaris     = ($registered >= 20);
        $bisaDaftar   = ($cekHarga && $cekTersedia);
        ?>
        <div class="result-grid">
            <p><strong>Harga = Rp 350.000?</strong><br><code><?php var_dump($cekHarga); ?></code></p>
            <p><strong>Masih tersedia?</strong><br><code><?php var_dump($cekTersedia); ?></code></p>
            <p><strong>Kelas laris (>20 pendaftar)?</strong><br><code><?php var_dump($cekLaris); ?></code></p>
            <p><strong>Bisa daftar?</strong><br><code><?php var_dump($bisaDaftar); ?></code></p>
        </div>

        <!-- TOMBOL KEMBALI -->
        <p style="margin-top:32px;">
            <a href="index.php" class="btn-primary">← Kembali ke Beranda</a>
        </p>

    </div>
</main>

<!-- =========================
     FOOTER
========================= -->
<footer class="site-footer">
    <div class="container footer-content">
        <p>&copy; <?= $year ?> <strong><?= htmlspecialchars($siteName) ?></strong> - Praktikum Pemrograman Web III.</p>
    </div>
</footer>

</body>
</html>