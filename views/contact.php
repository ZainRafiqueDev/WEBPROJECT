// File: pages/contact.php
<?php include 'header.php'; ?>
<main class="flex-grow pt-20">
    <section class="py-20 bg-gradient-to-b from-gray-800 to-gray-900">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold mb-12 text-center">Contact Us</h1>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-8">
                    <div>
                        <h2 class="text-2xl font-bold mb-4">Get in Touch</h2>
                        <p class="text-gray-300">
                            Have questions about LingualAI? We're here to help! Fill out the form and we'll get back to
                            you as soon as possible.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-envelope text-cyan-400 text-xl"></i>
                            <span>contact@lingualai.com</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-phone text-cyan-400 text-xl"></i>
                            <span>+1 (555) 123-4567</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-map-marker-alt text-cyan-400 text-xl"></i>
                            <span>123 Tech Street, Digital City</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-800 rounded-lg p-6">
                    <form id="contactForm" class="space-y-4">
                        <div>
                            <label class="block mb-2">Name</label>
                            <input type="text" class="w-full bg-gray-700 rounded p-2" required>
                        </div>
                        <div>
                            <label class="block mb-2">Email</label>
                            <input type="email" class="w-full bg-gray-700 rounded p-2" required>
                        </div>
                        <div>
                            <label class="block mb-2">Subject</label>
                            <input type="text" class="w-full bg-gray-700 rounded p-2" required>
                        </div>
                        <div>
                            <label class="block mb-2">Message</label>
                            <textarea class="w-full h-32 bg-gray-700 rounded p-2" required></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-cyan-400 text-gray-900 rounded py-2 font-bold hover:bg-cyan-500">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>

// File: pages/dashboard.php
<?php
if (!isLoggedIn()) {
    redirect('/');
}
include 'header.php';
?>
<main class="flex-grow pt-20">
    <section class="py-20 bg-gradient-to-b from-gray-800 to-gray-900">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold mb-12">Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?></h1>
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-gray-800 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4">Translation History</h3>
                    <p class="text-gray-300 mb-4">Recent translations: 24</p>
                    <a href="#" class="text-cyan-400 hover:text-cyan-300">View All →</a>
                </div>
                <div class="bg-gray-800 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4">Saved Translations</h3>
                    <p class="text-gray-300 mb-4">Saved items: 12</p>
                    <a href="#" class="text-cyan-400 hover:text-cyan-300">View All →</a>
                </div>
                <div class="bg-gray-800 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4">Account Status</h3>
                    <p class="text-gray-300 mb-4">Premium Member</p>
                    <a href="#" class="text-cyan-400 hover:text-cyan-300">Manage Plan →</a>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-6">Recent Activity</h2>
                <div class="space-y-4">
                    <div class="border-b border-gray-700 pb-4">
                        <p class="text-gray-300">English → Spanish</p>
                        <p class="text-sm text-gray-400">2 hours ago</p>
                    </div>
                    <div class="border-b border-gray-700 pb-4">
                        <p class="text-gray-300">French → English</p>
                        <p class="text-sm text-gray-400">5 hours ago</p>
                    </div>
                    <div class="border-b border-gray-700 pb-4">
                        <p class="text-gray-300">German → English</p>
                        <p class="text-sm text-gray-400">Yesterday</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>