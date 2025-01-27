// File: pages/dashboard.php
<?php
if (!isLoggedIn()) {
    redirect('/');
}

// Get user's translation history
$db = Database::getInstance();
$translations = $db->query(
    "SELECT * FROM translations WHERE user_id = ? ORDER BY created_at DESC LIMIT 5",
    [$_SESSION['user_id']]
)->fetchAll();

$savedCount = $db->query(
    "SELECT COUNT(*) as count FROM saved_translations WHERE user_id = ?",
    [$_SESSION['user_id']]
)->fetch()['count'];

include '../header.php';
?>

<main class="flex-grow pt-20">
    <section class="py-20 bg-gradient-to-b from-gray-800 to-gray-900">
        <div class="container mx-auto px-6">
            <!-- Welcome Section -->
            <div class="flex justify-between items-center mb-12">
                <h1 class="text-4xl font-bold">Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?></h1>
                <button onclick="location.href='settings.php'"
                    class="px-4 py-2 bg-gray-700 rounded-lg hover:bg-gray-600">
                    <i class="fas fa-cog mr-2"></i>Settings
                </button>
            </div>

            <!-- Quick Stats -->
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-gray-800 rounded-lg p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold">Translation History</h3>
                        <i class="fas fa-history text-cyan-400"></i>
                    </div>
                    <p class="text-3xl font-bold text-cyan-400 mb-2">
                        <?php echo count($translations); ?>
                    </p>
                    <p class="text-gray-300">Recent translations</p>
                    <a href="history.php" class="text-cyan-400 hover:text-cyan-300 mt-4 inline-block">View All →</a>
                </div>

                <div class="bg-gray-800 rounded-lg p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold">Saved Translations</h3>
                        <i class="fas fa-bookmark text-cyan-400"></i>
                    </div>
                    <p class="text-3xl font-bold text-cyan-400 mb-2"><?php echo $savedCount; ?></p>
                    <p class="text-gray-300">Saved items</p>
                    <a href="saved.php" class="text-cyan-400 hover:text-cyan-300 mt-4 inline-block">View All →</a>
                </div>

                <div class="bg-gray-800 rounded-lg p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold">Account Status</h3>
                        <i class="fas fa-star text-cyan-400"></i>
                    </div>
                    <p class="text-3xl font-bold text-cyan-400 mb-2">Premium</p>
                    <p class="text-gray-300">Active until: Dec 2024</p>
                    <a href="subscription.php" class="text-cyan-400 hover:text-cyan-300 mt-4 inline-block">Manage Plan
                        →</a>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-gray-800 rounded-lg p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold">Recent Activity</h2>
                    <a href="history.php" class="text-cyan-400 hover:text-cyan-300">View All</a>
                </div>

                <div class="space-y-4">
                    <?php foreach ($translations as $translation): ?>
                        <div class="border-b border-gray-700 pb-4">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <p class="text-gray-300">
                                        <?php echo htmlspecialchars($translation['source_lang']); ?> →
                                        <?php echo htmlspecialchars($translation['target_lang']); ?>
                                    </p>
                                    <p class="text-sm text-gray-400">
                                        <?php echo date('M j, Y g:i A', strtotime($translation['created_at'])); ?>
                                    </p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-gray-400 hover:text-cyan-400">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                    <button class="text-gray-400 hover:text-cyan-400">
                                        <i class="fas fa-bookmark"></i>
                                    </button>
                                </div>
                            </div>
                            <p class="text-sm text-gray-400">
                                <?php echo htmlspecialchars(substr($translation['source_text'], 0, 100)); ?>...
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>