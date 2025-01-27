// File: header.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LingualAI - AI-Powered Translation Platform</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white min-h-screen flex flex-col">
    <nav class="fixed w-full bg-gray-800 shadow-lg z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="<?php echo BASE_URL; ?>/" class="text-2xl font-bold text-cyan-400">
                    LingualAI
                </a>
                <div class="hidden md:flex space-x-8">
                    <a href="<?php echo BASE_URL; ?>/features" class="hover:text-cyan-400">Features</a>
                    <a href="<?php echo BASE_URL; ?>/about" class="hover:text-cyan-400">About</a>
                    <a href="<?php echo BASE_URL; ?>/contact" class="hover:text-cyan-400">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    <?php if (isLoggedIn()): ?>
                        <a href="<?php echo BASE_URL; ?>/dashboard" class="hover:text-cyan-400">Dashboard</a>
                        <a href="<?php echo BASE_URL; ?>/auth/logout.php"
                            class="px-4 py-2 bg-cyan-400 text-gray-900 rounded hover:bg-cyan-500">
                            Logout
                        </a>
                    <?php else: ?>
                        <button onclick="toggleModal('signInModal')" class="hover:text-cyan-400">Sign In</button>
                        <button onclick="toggleModal('signUpModal')"
                            class="px-4 py-2 bg-cyan-400 text-gray-900 rounded hover:bg-cyan-500">
                            Sign Up
                        </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>