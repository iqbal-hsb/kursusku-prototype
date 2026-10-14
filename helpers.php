<?php
// ============================================================
//  helpers.php — Kumpulan fungsi bantuan proyek KursusKu
// ============================================================

/**
 * Sanitasi input dari user untuk keamanan XSS
 */
function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

/**
 * Format angka ke Rupiah
 */
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

/**
 * Format tanggal ke format standar (contoh: "2026-09-15" -> "September 15, 2026")
 */
function formatTanggal($date) {
    return date('F j, Y', strtotime($date));
}

/**
 * Redirect ke halaman lain dan hentikan eksekusi
 */
function redirect($url) {
    header("Location: $url");
    exit;
}

/**
 * Cek status kursus (Tersedia / Penuh)
 */
function statusKursus($quota, $registered) {
    return ($registered >= $quota) ? 'Penuh' : 'Tersedia';
}

/**
 * Hitung sisa kursi yang tersedia
 */
function sisaKursi($quota, $registered) {
    $sisa = $quota - $registered;
    return ($sisa < 0) ? 0 : $sisa;
}

/**
 * Cek apakah user sudah login (simulasi)
 */
function isLoggedIn() {
    return isset($_SESSION['user']);
}
?>