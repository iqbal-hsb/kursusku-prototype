<?php
// ============================================================
//  helpers.php — Kumpulan Fungsi Bantuan KursusKu
// ============================================================

function sanitize($data) {
    return htmlspecialchars(trim((string) $data), ENT_QUOTES, 'UTF-8');
}

function formatRupiah($angka) {
    return "Rp " . number_format((float) $angka, 0, ',', '.');
}

function formatTanggal($date) {
    $timestamp = strtotime($date);
    if ($timestamp === false) {
        return $date;
    }
    return date('F j, Y', $timestamp);
}

function redirect($url) {
    if (!headers_sent()) {
        header("Location: $url");
    } else {
        echo "<script>window.location.href='$url';</script>";
    }
    exit;
}

function statusKursus($quota, $registered) {
    return ((int) $registered >= (int) $quota) ? 'Penuh' : 'Tersedia';
}

function sisaKursi($quota, $registered) {
    $sisa = (int) $quota - (int) $registered;
    return ($sisa < 0) ? 0 : $sisa;
}

function isLoggedIn() {
    if (session_status() === PHP_SESSION_NONE) {
        return false;
    }
    return isset($_SESSION['user']);
}

function post($key, $default = '') {
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}

function get($key, $default = '') {
    return isset($_GET[$key]) ? $_GET[$key] : $default;
}
?>