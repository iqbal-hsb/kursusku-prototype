
<?php

// 1. Mengubah angka menjadi format Rupiah
function rupiah(int $amount): string
{
    return 'Rp ' . number_format($amount, 0, ',', '.');
}

// 2. Menentukan status kursus
function statusKursus(int $quota, int $registered): string
{
    return $registered >= $quota ? 'Penuh' : 'Tersedia';
}

// 3. Menghitung sisa kursi
function sisaKursi(int $quota, int $registered): int
{
    return max(0, $quota - $registered);
}

// 4. Mengubah format tanggal
function formatTanggal(string $date): string
{
    $value = new DateTimeImmutable($date);
    return $value->format('d-m-Y');
}