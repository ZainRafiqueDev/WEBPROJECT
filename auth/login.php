<?php
// File: auth/login.php

require_once '../config.php';
require_once '../classes/Database.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'] ?? '';

        if (!$email) {
            throw new Exception('Invalid email format');
        }

        if (strlen($password) < 8) {
            throw new Exception('Password must be at least 8 characters long');
        }

        $db = Database::getInstance();
        $stmt = $db->query(
            "SELECT id, email, password_hash FROM users WHERE email = ? LIMIT 1",
            [$email]
        );

        $user = $stmt->fetch();

        if (!$user || !password_verify($password, $user['password_hash'])) {
            throw new Exception('Invalid credentials');
        }

        // Set session
        session_regenerate_id(true);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['last_activity'] = time();

        echo json_encode([
            'success' => true,
            'redirect' => '/dashboard.php'
        ]);

    } catch (Exception $e) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => $e->getMessage()
        ]);
    }
    exit;
}