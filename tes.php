<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Tes Debug</h1>";

// 1. Cek file helpers.php ada?
echo "<p><strong>1. File helpers.php:</strong> ";
if (file_exists(__DIR__ . '/helpers.php')) {
    echo "✅ ADA (" . filesize(__DIR__ . '/helpers.php') . " bytes)</p>";
} else {
    echo "❌ TIDAK ADA di " . __DIR__ . "/helpers.php</p>";
    exit;
}

// 2. Coba include
echo "<p><strong>2. Include helpers.php:</strong> ";
require_once __DIR__ . '/helpers.php';
echo "✅ BERHASIL</p>";

// 3. Cek fungsi ada?
echo "<p><strong>3. Fungsi formatRupiah:</strong> ";
echo function_exists('formatRupiah') ? "✅ ADA</p>" : "❌ TIDAK ADA</p>";

// 4. Coba panggil
echo "<p><strong>4. Panggil formatRupiah(250000):</strong> ";
echo function_exists('formatRupiah') ? formatRupiah(250000) . "</p>" : "SKIP</p>";

echo "<h2>🎉 Kalau semua ✅ di atas, helpers.php SUDAH BENAR!</h2>";