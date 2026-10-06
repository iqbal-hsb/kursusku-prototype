<?php

// Function 1: Format Rupiah
function rupiah(int $amount): string
{
    return 'Rp ' . number_format($amount, 0, ',', '.');
}

// Function 2: Penentuan Status Kursus (Penuh / Tersedia)
function statusKursus(int $quota, int $registered): string
{
    return $registered >= $quota ? 'Penuh' : 'Tersedia';
}

// Function 3: Menghitung Sisa Kursi
function sisaKursi(int $quota, int $registered): int
{
    return max(0, $quota - $registered);
}

// Function 4: Format Tanggal ke d-m-Y
function formatTanggal(string $date): string
{
    $value = new DateTimeImmutable($date);
    return $value->format('d-m-Y');
}