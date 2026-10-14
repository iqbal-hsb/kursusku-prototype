<?php
// ============================================================
//  data.php — Sumber Data Utama KursusKu
//  Berisi 3 array utama: $courses, $interestOptions, $facilities
// ============================================================

$siteName = 'KursusKu';
$tagline  = 'Belajar, daftar, dan kelola kursus dalam satu tempat.';
$year     = date('Y');

// ============================================================
// 1. $courses — Data Kursus
// Format: KODE => [title, fee, quota, registered, start_date]
// ============================================================
$courses = [
    'WEB-01' => [
        'title'      => 'Web Dasar',
        'fee'        => 200000,
        'quota'      => 30,
        'registered' => 12,
        'start_date' => '2026-09-21',
    ],
    'PHP-01' => [
        'title'      => 'PHP Dasar',
        'fee'        => 250000,
        'quota'      => 30,
        'registered' => 18,
        'start_date' => '2026-09-22',
    ],
    'PHP-02' => [
        'title'      => 'PHP Lanjutan',
        'fee'        => 300000,
        'quota'      => 25,
        'registered' => 24,
        'start_date' => '2026-09-24',
    ],
    'LAR-01' => [
        'title'      => 'Laravel Fundamental',
        'fee'        => 350000,
        'quota'      => 25,
        'registered' => 25,
        'start_date' => '2026-09-28',
    ],
    'DB-01' => [
        'title'      => 'MySQL Dasar',
        'fee'        => 275000,
        'quota'      => 20,
        'registered' => 0,
        'start_date' => '2026-10-01',
    ],
    'UI-01' => [
        'title'      => 'UI Web Dasar',
        'fee'        => 225000,
        'quota'      => 35,
        'registered' => 9,
        'start_date' => '2026-10-03',
    ],
];

// ============================================================
// 2. $interestOptions — Opsi Minat Tambahan (Checkbox)
// ============================================================
$interestOptions = [
    'frontend' => 'Frontend Development',
    'backend'  => 'Backend Development',
    'mobile'   => 'Mobile Apps',
    'uiux'     => 'UI/UX Design',
    'data'     => 'Data Science',
    'devops'   => 'DevOps & Cloud',
];

// ============================================================
// 3. $facilities — Fasilitas Kursus
// ============================================================
$facilities = [
    [
        'icon'        => '💻',
        'title'       => 'Komputer Modern',
        'description' => 'Setiap peserta mendapat komputer dengan spesifikasi mumpuni untuk praktik langsung.',
    ],
    [
        'icon'        => '🌐',
        'title'       => 'Internet Cepat',
        'description' => 'Koneksi WiFi stabil dan cepat untuk mendukung pembelajaran online maupun offline.',
    ],
    [
        'icon'        => '👨‍🏫',
        'title'       => 'Mentor Berpengalaman',
        'description' => 'Dibimbing oleh praktisi industri yang sudah berpengalaman di bidangnya.',
    ],
    [
        'icon'        => '📚',
        'title'       => 'Modul Lengkap',
        'description' => 'Materi pembelajaran tersusun rapi, mudah dipahami, dan bisa diakses kapan saja.',
    ],
    [
        'icon'        => '🎯',
        'title'       => 'Studi Kasus Nyata',
        'description' => 'Setiap modul dilengkapi proyek nyata untuk memperkuat portofolio peserta.',
    ],
    [
        'icon'        => '🏆',
        'title'       => 'Sertifikat Resmi',
        'description' => 'Peserta yang lulus akan mendapat sertifikat sebagai bukti kompetensi.',
    ],
];

// ============================================================
// FUNGSI BANTU
// ============================================================

/**
 * Cari kursus berdasarkan kode.
 *
 * @param  string  $code
 * @return array|null
 */
function getCourseByCode($code) {
    global $courses;
    $code = trim((string) $code);
    if (isset($courses[$code])) {
        return array_merge(['code' => $code], $courses[$code]);
    }
    return null;
}

/**
 * Ambil semua kursus yang masih tersedia.
 *
 * @return array
 */
function getAvailableCourses() {
    global $courses;
    $hasil = [];
    foreach ($courses as $code => $c) {
        if ($c['registered'] < $c['quota']) {
            $hasil[$code] = $c;
        }
    }
    return $hasil;
}

/**
 * Hitung total fasilitas.
 *
 * @return int
 */
function getTotalFacilities() {
    global $facilities;
    return count($facilities);
}
?>