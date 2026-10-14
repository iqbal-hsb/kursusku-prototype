<?php
// ============================================================
//  helpers.php — Kumpulan Fungsi Bantuan Proyek KursusKu
//  Praktikum Pemrograman Web III
// ============================================================

// Cegah akses langsung jika bukan dari file lain (opsional)
if (!defined('KURSUSKU')) {
    define('KURSUSKU', true);
}

/**
 * Sanitasi input dari user untuk keamanan XSS.
 *
 * @param  mixed  $data
 * @return string
 */
function sanitize($data) {
    return htmlspecialchars(trim((string) $data), ENT_QUOTES, 'UTF-8');
}

/**
 * Format angka ke Rupiah.
 *
 * @param  int|float  $angka
 * @return string
 */
function formatRupiah($angka) {
    return "Rp " . number_format((float) $angka, 0, ',', '.');
}

/**
 * Format tanggal ke format Indonesia/Inggris.
 * Contoh: "2026-09-15" -> "September 15, 2026"
 *
 * @param  string  $date
 * @return string
 */
function formatTanggal($date) {
    $timestamp = strtotime($date);
    if ($timestamp === false) {
        return $date; // kembalikan apa adanya kalau gagal parse
    }
    return date('F j, Y', $timestamp);
}

/**
 * Format tanggal versi Indonesia.
 * Contoh: "2026-09-15" -> "15 September 2026"
 *
 * @param  string  $date
 * @return string
 */
function formatTanggalID($date) {
    $bulan = [
        1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];
    $timestamp = strtotime($date);
    if ($timestamp === false) return $date;

    $d = (int) date('j', $timestamp);
    $m = (int) date('n', $timestamp);
    $y = date('Y', $timestamp);

    return "{$d} {$bulan[$m]} {$y}";
}

/**
 * Redirect ke halaman lain dan hentikan eksekusi.
 *
 * @param  string  $url
 * @return void
 */
function redirect($url) {
    if (!headers_sent()) {
        header("Location: $url");
    } else {
        echo "<script>window.location.href='$url';</script>";
    }
    exit;
}

/**
 * Cek status kursus: "Tersedia" atau "Penuh".
 *
 * @param  int  $quota
 * @param  int  $registered
 * @return string
 */
function statusKursus($quota, $registered) {
    return ((int) $registered >= (int) $quota) ? 'Penuh' : 'Tersedia';
}

/**
 * Hitung sisa kursi. Minimal 0.
 *
 * @param  int  $quota
 * @param  int  $registered
 * @return int
 */
function sisaKursi($quota, $registered) {
    $sisa = (int) $quota - (int) $registered;
    return ($sisa < 0) ? 0 : $sisa;
}

/**
 * Cek apakah user sudah login (simulasi).
 *
 * @return bool
 */
function isLoggedIn() {
    if (session_status() === PHP_SESSION_NONE) {
        return false;
    }
    return isset($_SESSION['user']);
}

/**
 * Ambil nilai POST dengan aman.
 *
 * @param  string  $key
 * @param  mixed   $default
 * @return mixed
 */
function post($key, $default = '') {
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}

/**
 * Ambil nilai GET dengan aman.
 *
 * @param  string  $key
 * @param  mixed   $default
 * @return mixed
 */
function get($key, $default = '') {
    return isset($_GET[$key]) ? $_GET[$key] : $default;
}

/**
 * Potong teks panjang dengan elipsis.
 *
 * @param  string  $text
 * @param  int     $limit
 * @return string
 */
function potongTeks($text, $limit = 50) {
    $text = trim((string) $text);
    if (mb_strlen($text) <= $limit) return $text;
    return mb_substr($text, 0, $limit) . '...';
}