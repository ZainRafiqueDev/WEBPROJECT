// File: config.php
<?php
session_start();
define('DB_HOST', 'localhost');
define('DB_NAME', 'lingualai');
define('DB_USER', 'root');  // default phpMyAdmin username
define('DB_PASS', '');      // your phpMyAdmin password (if any)
define('BASE_URL', 'http://localhost/lingualai');
// Session timeout after 30 minutes of inactivity
define('SESSION_TIMEOUT', 1800);

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Helper functions
function isLoggedIn()
{
    if (!isset($_SESSION['user_id']) || !isset($_SESSION['last_activity'])) {
        return false;
    }

    if (time() - $_SESSION['last_activity'] > SESSION_TIMEOUT) {
        session_destroy();
        return false;
    }

    $_SESSION['last_activity'] = time();
    return true;
}

function redirect($path)
{
    header("Location: " . BASE_URL . $path);
    exit;
}