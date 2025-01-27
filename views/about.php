// File: pages/about.php
<?php include '../header.php'; ?>
<main class="flex-grow pt-20">
    <!-- About Section -->
    <section class="py-20 bg-gradient-to-b from-gray-800 to-gray-900">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold mb-12 text-center">About LingualAI</h1>

            <!-- Main Content -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <img src="/api/placeholder/600/400" alt="About LingualAI" class="rounded-lg shadow-xl">
                </div>
                <div class="space-y-6">
                    <div>
                        <h2 class="text-2xl font-bold text-cyan-400 mb-4">Our Mission</h2>
                        <p class="text-gray-300">
                            At LingualAI, we're dedicated to breaking down language barriers and fostering global
                            communication.
                            Our mission is to make accurate, real-time translation accessible to everyone, everywhere.
                        </p>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold text-cyan-400 mb-4">Our Technology</h2>
                        <p class="text-gray-300">
                            We combine cutting-edge artificial intelligence with advanced machine learning algorithms to
                            deliver
                            precise, context-aware translations. Our system continuously learns and improves from
                            millions
                            of translations, ensuring increasing accuracy over time.
                        </p>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold text-cyan-400 mb-4">Our Impact</h2>
                        <p class="text-gray-300">
                            Every day, millions of users across 150+ countries trust LingualAI to facilitate
                            cross-cultural
                            communication in business, education, and personal connections. We've helped translate over
                            1 billion words and counting.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="grid md:grid-cols-4 gap-8 mb-16">
                <div class="bg-gray-800 rounded-lg p-6 text-center">
                    <div class="text-3xl font-bold text-cyan-400 mb-2">100+</div>
                    <div class="text-gray-300">Languages Supported</div>
                </div>
                <div class="bg-gray-800 rounded-lg p-6 text-center">
                    <div class="text-3xl font-bold text-cyan-400 mb-2">1B+</div>
                    <div class="text-gray-300">Words Translated</div>
                </div>
                <div class="bg-gray-800 rounded-lg p-6 text-center">
                    <div class="text-3xl font-bold text-cyan-400 mb-2">150+</div>
                    <div class="text-gray-300">Countries Served</div>
                </div>
                <div class="bg-gray-800 rounded-lg p-6 text-center">
                    <div class="text-3xl font-bold text-cyan-400 mb-2">99.9%</div>
                    <div class="text-gray-300">Uptime</div>
                </div>
            </div>

            <!-- Team Section -->
            <h2 class="text-3xl font-bold text-center mb-12">Our Leadership Team</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-800 rounded-lg p-6 text-center">
                    <img src="/api/placeholder/150/150" alt="John Doe" class="rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">John Doe</h3>
                    <p class="text-cyan-400 mb-4">CEO & Founder</p>
                    <p class="text-gray-300">15+ years experience in AI and ML. Previously at Google AI.</p>
                </div>

                <div class="bg-gray-800 rounded-lg p-6 text-center">
                    <img src="/api/placeholder/150/150" alt="Jane Smith" class="rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Jane Smith</h3>
                    <p class="text-cyan-400 mb-4">CTO</p>
                    <p class="text-gray-300">PhD in Computational Linguistics. Led ML teams at Microsoft.</p>
                </div>

                <div class="bg-gray-800 rounded-lg p-6 text-center">
                    <img src="/api/placeholder/150/150" alt="Mike Johnson" class="rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Mike Johnson</h3>
                    <p class="text-cyan-400 mb-4">Head of AI</p>
                    <p class="text-gray-300">Former Research Scientist at DeepMind. 20+ published papers.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>