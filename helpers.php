<?php

function rupiah(int $amount): string
{
    return 'Rp ' . number_format($amount, 0, ',', '.');
}

function statusKursus(int $quota, int $registered): string
{
    if ($registered >= $quota) {
        return 'Penuh';
    }

    return 'Tersedia';
}

function sisaKursi(int $quota, int $registered): int
{
    $sisa = $quota - $registered;

    if ($sisa < 0) {
        return 0;
    }

    return $sisa;
}

function formatTanggal(string $date): string
{
    $tanggal = new DateTimeImmutable($date);

    return $tanggal->format('d-m-Y');
}