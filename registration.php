<?php
// registration.php - Proyek KursusKu (Milestone 5 / UTS)
require_once 'data.php';
require_once 'helpers.php';

$pageTitle = "Pendaftaran Kursus - KursusKu";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .container { max-width: 600px; margin: 30px auto; padding: 20px; font-family: sans-serif; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 5px; }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group select { width: 100%; padding: 8px; box-sizing: border-box; }
        .checkbox-group label { font-weight: normal; display: inline-block; margin-right: 15px; }
        .btn-submit { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

<div class="container">
    <h2>Formulir Pendaftaran Kursus</h2>
    
    <!-- No. 15 & 18: Method yang digunakan adalah POST -->
    <form action="process-registration.php" method="POST">
        
        <!-- No. 29: Input tersembunyi name="source" dengan nilai "week-05" -->
        <input type="hidden" name="source" value="week-05">

        <!-- No. 24: Pasangan atribut label (for), input (id & name) -->
        <div class="form-group">
            <label for="fullName">Nama Lengkap</label>
            <input type="text" id="fullName" name="fullName" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="form-group">
            <label for="email">Alamat Email</label>
            <input type="email" id="email" name="email" placeholder="nama@domain.com" required>
        </div>

        <!-- No. 23 & 30: Menampilkan daftar kursus dari data.php ($courses) -->
        <div class="form-group">
            <label for="courseCode">Pilihan Kursus</label>
            <select id="courseCode" name="courseCode" required>
                <option value="">-- Pilih Kursus --</option>
                <?php foreach ($courses as $code => $course): ?>
                    <option value="<?php echo htmlspecialchars($code); ?>">
                        <?php echo htmlspecialchars($course['title']); ?> - Rp<?php echo number_format($course['fee'], 0, ',', '.'); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- No. 19: Kategori peserta (mahasiswa diskon 20%) -->
        <div class="form-group">
            <label for="category">Kategori Peserta</label>
            <select id="category" name="category" required>
                <option value="umum">Umum</option>
                <option value="mahasiswa">Mahasiswa (Diskon 20%)</option>
                <option value="alumni">Alumni (Diskon 15%)</option>
            </select>
        </div>

        <!-- No. 20: Mode Pembelajaran (offline dipetakan menjadi "Tatap Muka") -->
        <div class="form-group">
            <label for="learningMode">Mode Pembelajaran</label>
            <select id="learningMode" name="learningMode" required>
                <option value="online">Online</option>
                <option value="offline">Tatap Muka</option>
                <option value="hybrid">Hybrid</option>
            </select>
        </div>

        <!-- No. 26: Perulangan for ($i = 1; $i <= 3; $i++) untuk 3 pilihan paket -->
        <div class="form-group">
            <label for="packageCount">Jumlah Paket</label>
            <select id="packageCount" name="packageCount">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?> Paket</option>
                <?php endfor; ?>
            </select>
        </div>

        <!-- No. 16 & 23: Minim/Opsi Minat mengggunakan name="interests[]" (array) dan $interestOptions dari data.php -->
        <div class="form-group checkbox-group">
            <label>Minat Tambahan:</label>
            <?php foreach ($interestOptions as $key => $label): ?>
                <label>
                    <input type="checkbox" name="interests[]" value="<?php echo htmlspecialchars($key); ?>">
                    <?php echo htmlspecialchars($label); ?>
                </label>
            <?php endforeach; ?>
        </div>

        <div class="form-group">
            <button type="submit" class="btn-submit">Daftar Sekarang</button>
        </div>
    </form>
</div>

</body>
</html>