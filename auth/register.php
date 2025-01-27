<?php

// File: auth/register.php

require_once '../config.php';
require_once '../classes/Database.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'] ?? '';
        $confirmPassword = $_POST['confirm_password'] ?? '';

        // Validation
        if (!$email) {
            throw new Exception('Invalid email format');
        }

        if (strlen($password) < 8) {
            throw new Exception('Password must be at least 8 characters long');
        }

        if ($password !== $confirmPassword) {
            throw new Exception('Passwords do not match');
        }

        $db = Database::getInstance();

        // Check if email already exists
        $stmt = $db->query(
            "SELECT id FROM users WHERE email = ? LIMIT 1",
            [$email]
        );

        if ($stmt->fetch()) {
            throw new Exception('Email already registered');
        }

        // Hash password
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $stmt = $db->query(
            "INSERT INTO users (email, password_hash, created_at) VALUES (?, ?, NOW())",
            [$email, $passwordHash]
        );

        $userId = $db->getConnection()->lastInsertId();

        // Set session
        session_regenerate_id(true);
        $_SESSION['user_id'] = $userId;
        $_SESSION['email'] = $email;
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