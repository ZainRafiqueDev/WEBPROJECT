// File: index.php
<?php
require_once 'config.php';

$page = $_GET['page'] ?? 'home';
$allowed_pages = ['home', 'features', 'about', 'contact', 'dashboard'];

if (!in_array($page, $allowed_pages)) {
    include 'pages/404.php';
    exit;
}

if ($page === 'dashboard' && !isLoggedIn()) {
    redirect('/');
}

include "pages/{$page}.php";