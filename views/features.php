// File: pages/features.php
<?php include 'header.php'; ?>
<main class="flex-grow pt-20">
    <section class="py-20 bg-gradient-to-b from-gray-800 to-gray-900">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold mb-12 text-center">Features</h1>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-800 rounded-lg p-8">
                    <i class="fas fa-language text-4xl text-cyan-400 mb-6"></i>
                    <h3 class="text-xl font-bold mb-4">100+ Languages</h3>
                    <p class="text-gray-300">
                        Translate between over 100 languages with high accuracy and natural-sounding results.
                    </p>
                </div>
                <div class="bg-gray-800 rounded-lg p-8">
                    <i class="fas fa-bolt text-4xl text-cyan-400 mb-6"></i>
                    <h3 class="text-xl font-bold mb-4">Real-time Translation</h3>
                    <p class="text-gray-300">
                        Get instant translations as you type with our advanced AI technology.
                    </p>
                </div>
                <div class="bg-gray-800 rounded-lg p-8">
                    <i class="fas fa-microphone text-4xl text-cyan-400 mb-6"></i>
                    <h3 class="text-xl font-bold mb-4">Voice Support</h3>
                    <p class="text-gray-300">
                        Convert speech to text and text to speech with natural voice output.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mt-12">
                <div class="bg-gray-800 rounded-lg p-8">
                    <i class="fas fa-file-alt text-4xl text-cyan-400 mb-6"></i>
                    <h3 class="text-xl font-bold mb-4">Document Translation</h3>
                    <p class="text-gray-300">
                        Translate entire documents while maintaining their original formatting. Support for PDF, Word,
                        and more.
                    </p>
                </div>
                <div class="bg-gray-800 rounded-lg p-8">
                    <i class="fas fa-code text-4xl text-cyan-400 mb-6"></i>
                    <h3 class="text-xl font-bold mb-4">API Access</h3>
                    <p class="text-gray-300">
                        Integrate our translation services into your applications with our robust API.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-16 bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Pricing Plans</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-700 rounded-lg p-8">
                    <h3 class="text-xl font-bold mb-4">Free</h3>
                    <p class="text-3xl font-bold mb-6">$0<span class="text-lg font-normal">/month</span></p>
                    <ul class="space-y-4 mb-8">
                        <li><i class="fas fa-check text-cyan-400 mr-2"></i> 1000 characters per day</li>
                        <li><i class="fas fa-check text-cyan-400 mr-2"></i> Basic translation</li>
                        <li><i class="fas fa-check text-cyan-400 mr-2"></i> Web interface</li>
                    </ul>
                    <button class="w-full bg-cyan-400 text-gray-900 rounded py-2 font-bold hover:bg-cyan-500">
                        Get Started
                    </button>
                </div>
                <div class="bg-gray-700 rounded-lg p-8 transform scale-105 border-2 border-cyan-400">
                    <h3 class="text-xl font-bold mb-4">Pro</h3>
                    <p class="text-3xl font-bold mb-6">$9.99<span class="text-lg font-normal">/month</span></p>
                    <ul class="space-y-4 mb-8">
                        <li><i class="fas fa-check text-cyan-400 mr-2"></i> Unlimited characters</li>
                        <li><i class="fas fa-check text-cyan-400 mr-2"></i> Advanced translation</li>
                        <li><i class="fas fa-check text-cyan-400 mr-2"></i> Document translation</li>
                        <li><i class="fas fa-check text-cyan-400 mr-2"></i> API access</li>
                    </ul>
                    <button class="w-full bg-cyan-400 text-gray-900 rounded py-2 font-bold hover:bg-cyan-500">
                        Get Started
                    </button>
                </div>
                <div class="bg-gray-700 rounded-lg p-8">
                    <h3 class="text-xl font-bold mb-4">Enterprise</h3>
                    <p class="text-3xl font-bold mb-6">Custom</p>
                    <ul class="space-y-4 mb-8">
                        <li><i class="fas fa-check text-cyan-400 mr-2"></i> Custom solutions</li>
                        <li><i class="fas fa-check text-cyan-400 mr-2"></i> Priority support</li>
                        <li><i class="fas fa-check text-cyan-400 mr-2"></i> Dedicated account manager</li>
                        <li><i class="fas fa-check text-cyan-400 mr-2"></i> Custom API integration</li>
                    </ul>
                    <button class="w-full bg-cyan-400 text-gray-900 rounded py-2 font-bold hover:bg-cyan-500">
                        Contact Sales
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>