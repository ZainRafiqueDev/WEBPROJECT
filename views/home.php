// File: pages/home.php
<?php include 'header.php'; ?>
<main class="flex-grow pt-20">
    <!-- Hero Section -->
    <section id="home" class="py-20 bg-gradient-to-b from-gray-800 to-gray-900">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold mb-6">Break Language Barriers</h1>
            <p class="text-xl text-gray-300 mb-8">
                Translate between 100+ languages instantly with AI-powered accuracy
            </p>
            <button class="px-8 py-3 bg-cyan-400 rounded-lg text-gray-900 font-bold hover:bg-cyan-500">
                Start Translating
            </button>
        </div>
    </section>

    <!-- Translator Section -->
    <section class="py-16 container mx-auto px-6">
        <div class="bg-gray-800 rounded-xl p-6">
            <div class="grid md:grid-cols-2 gap-4">
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <select id="sourceLanguage" class="bg-gray-700 rounded p-2">
                            <option value="auto">Auto Detect</option>
                            <option value="en">English</option>
                            <option value="es">Spanish</option>
                            <option value="fr">French</option>
                        </select>
                        <button class="text-cyan-400" id="sourceAudio">
                            <i class="fas fa-volume-up"></i>
                        </button>
                    </div>
                    <textarea id="sourceText"
                        class="w-full h-40 bg-gray-700 rounded-lg p-4 focus:ring-2 focus:ring-cyan-400"
                        placeholder="Enter text to translate..."></textarea>
                </div>
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <select id="targetLanguage" class="bg-gray-700 rounded p-2">
                            <option value="en">English</option>
                            <option value="es">Spanish</option>
                            <option value="fr">French</option>
                        </select>
                        <div class="flex space-x-4">
                            <button class="text-cyan-400" id="targetAudio">
                                <i class="fas fa-volume-up"></i>
                            </button>
                            <button class="text-cyan-400" id="copyTranslation">
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                    </div>
                    <textarea id="targetText" class="w-full h-40 bg-gray-700 rounded-lg p-4" readonly></textarea>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>

// File: pages/about.php
<?php include 'header.php'; ?>
<main class="flex-grow pt-20">
    <section class="py-20 bg-gradient-to-b from-gray-800 to-gray-900">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold mb-12 text-center">About LingualAI</h1>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="/api/placeholder/600/400" alt="About LingualAI" class="rounded-lg shadow-xl">
                </div>
                <div class="space-y-6">
                    <h2 class="text-2xl font-bold text-cyan-400">Our Mission</h2>
                    <p class="text-gray-300">
                        At LingualAI, we're passionate about breaking down language barriers and connecting people
                        across cultures. Our AI-powered translation platform makes communication seamless and accessible
                        to everyone.
                    </p>
                    <h2 class="text-2xl font-bold text-cyan-400">Our Technology</h2>
                    <p class="text-gray-300">
                        We leverage cutting-edge artificial intelligence and machine learning to provide accurate,
                        context-aware translations across more than 100 languages.
                    </p>
                    <h2 class="text-2xl font-bold text-cyan-400">Our Impact</h2>
                    <p class="text-gray-300">
                        Every day, millions of users trust LingualAI to facilitate cross-cultural communication in
                        business, education, and personal connections.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Our Team</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-700 rounded-lg p-6 text-center">
                    <img src="/api/placeholder/150/150" alt="Team Member" class="rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">John Doe</h3>
                    <p class="text-cyan-400 mb-4">CEO & Founder</p>
                    <p class="text-gray-300">Leading innovation in AI-powered translation technology.</p>
                </div>
                <div class="bg-gray-700 rounded-lg p-6 text-center">
                    <img src="/api/placeholder/150/150" alt="Team Member" class="rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Jane Smith</h3>
                    <p class="text-cyan-400 mb-4">CTO</p>
                    <p class="text-gray-300">Driving technological excellence and innovation.</p>
                </div>
                <div class="bg-gray-700 rounded-lg p-6 text-center">
                    <img src="/api/placeholder/150/150" alt="Team Member" class="rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Mike Johnson</h3>
                    <p class="text-cyan-400 mb-4">Head of AI</p>
                    <p class="text-gray-300">Advancing our AI translation capabilities.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>