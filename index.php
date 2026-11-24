<?php
$page = $_GET['page'] ?? 'home';

$allowed_pages = [
    'home',
    'about',
    'kontak',
    'user'
];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

// Halaman CRUD
if ($page === 'user') {
    require_once __DIR__ . '/modules/user/index.php';
    exit;
}

// Halaman biasa
include __DIR__ . '/views/header.php';
include __DIR__ . '/views/' . $page . '.php';
include __DIR__ . '/views/footer.php';
?>