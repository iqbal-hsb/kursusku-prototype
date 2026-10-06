<?php

// Format harga ke Rupiah
function rupiah(int $amount): string
{
    return 'Rp ' . number_format($amount, 0, ',', '.');
}

// Menentukan status kursus
function statusKursus(int $quota, int $registered): string
{
    if ($registered >= $quota) {
        return 'Penuh';
    }

    return 'Tersedia';
}

// Menghitung jumlah kursi yang masih tersedia
function sisaKursi(int $quota, int $registered): int
{
    $sisa = $quota - $registered;

    if ($sisa < 0) {
        return 0;
    }

    return $sisa;
}

// Mengubah format tanggal
function formatTanggal(string $date): string
{
    $tanggal = new DateTimeImmutable($date);

    return $tanggal->format('d-m-Y');
}