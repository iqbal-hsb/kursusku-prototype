# KursusKu - Milestone 3

Proyek ini merupakan pengembangan proyek KursusKu
pada Pertemuan 3 Pemrograman Web III.

## Kalkulator Estimasi Biaya Kursus

Kalkulator digunakan untuk menghitung:

- Biaya per peserta
- Jumlah peserta
- Subtotal
- Diskon
- Biaya admin
- Total akhir

## Rumus

subtotal = fee x participantCount

discount = subtotal x discountPercent / 100

total = subtotal - discount + adminFee

## Contoh

Biaya per peserta = Rp350.000

Jumlah peserta = 2

Diskon = 10%

Biaya admin = Rp25.000

Subtotal:

350.000 x 2 = 700.000

Diskon:

700.000 x 10 / 100 = 70.000

Total:

700.000 - 70.000 + 25.000 = 655.000

## Tipe Data

courseName menggunakan string.

fee menggunakan integer.

participantCount menggunakan integer.

discountPercent menggunakan integer.

adminFee menggunakan integer.

isActive menggunakan boolean.

## Catatan

Nilai uang disimpan sebagai integer rupiah
agar proses perhitungan lebih sederhana.

Format rupiah menggunakan number_format()
hanya pada saat menampilkan hasil.

Input masih menggunakan nilai hard-code
karena form GET/POST belum menjadi materi
utama pada Pertemuan 3.