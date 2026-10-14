<?php
// ============================================================
//  data.php — Sumber Data Kursus & Minat
// ============================================================

$siteName = 'KursusKu';
$tagline  = 'Belajar, daftar, dan kelola kursus dalam satu tempat.';
$year     = date('Y');

// ============================================================
// DATA KURSUS — Format: code => [title, fee, quota, registered, start_date]
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
// OPSI MINAT TAMBAHAN — untuk checkbox interests[]
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
// FUNGSI BANTU
// ============================================================

/**
 * Cari kursus berdasarkan kode.
 * @param  string  $code
 * @return array|null  ['code' => ..., 'title' => ..., 'fee' => ...]
 */
function getCourseByCode($code) {
    global $courses;
    if (isset($courses[$code])) {
        return array_merge(['code' => $code], $courses[$code]);
    }
    return null;
}
?>