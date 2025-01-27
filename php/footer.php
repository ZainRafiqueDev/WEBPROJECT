// File: footer.php
<footer class="bg-gray-800 py-8">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">LingualAI</h3>
                <p class="text-gray-300">
                    Breaking language barriers with AI-powered translation technology.
                </p>
            </div>
            <div>
                <h4 class="font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="<?php echo BASE_URL; ?>/features"
                            class="text-gray-300 hover:text-cyan-400">Features</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/about" class="text-gray-300 hover:text-cyan-400">About</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/contact" class="text-gray-300 hover:text-cyan-400">Contact</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Legal</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-cyan-400">Privacy Policy</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-cyan-400">Terms of Service</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-cyan-400">Cookie Policy</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Follow Us</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-cyan-400"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-300 hover:text-cyan-400"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-300 hover:text-cyan-400"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300">
            <p>&copy; <?php echo date('Y'); ?> LingualAI. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php include 'modals.php'; ?>
<script>const BASE_URL = '<?php echo BASE_URL; ?>';</script>
<script src="<?php echo BASE_URL; ?>/js/main.js"></script>
</body>

</html>