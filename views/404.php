// File: pages/404.php
<?php include 'header.php'; ?>
<main class="flex-grow pt-20">
    <section class="py-20 bg-gradient-to-b from-gray-800 to-gray-900">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-6xl font-bold mb-8 text-cyan-400">404</h1>
            <h2 class="text-3xl font-bold mb-6">Page Not Found</h2>
            <p class="text-xl text-gray-300 mb-8">
                The page you're looking for doesn't exist or has been moved.
            </p>
            <a href="<?php echo BASE_URL; ?>/"
                class="px-8 py-3 bg-cyan-400 rounded-lg text-gray-900 font-bold hover:bg-cyan-500">
                Go Home
            </a>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>