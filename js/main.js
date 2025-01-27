// File: js/main.js
document.addEventListener('DOMContentLoaded', function() {
    // Form handling
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const contactForm = document.getElementById('contactForm');

    if (loginForm) {
        loginForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            const formData = new FormData(loginForm);
            try {
                const response = await fetch('auth/login.php', {
                    method: 'POST',
                    body: formData
                });
                const data = await response.json();
                if (data.success) {
                    window.location.href = BASE_URL + '/dashboard';
                } else {
                    alert(data.message || 'Login failed');
                }
            } catch (error) {
                alert('An error occurred');
            }
        });
    }

    if (registerForm) {
        registerForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            const formData = new FormData(registerForm);
            if (formData.get('password') !== formData.get('confirm_password')) {
                alert('Passwords do not match');
                return;
            }
            try {
                const response = await fetch('auth/register.php', {
                    method: 'POST',
                    body: formData
                });
                const data = await response.json();
                if (data.success) {
                    window.location.href = BASE_URL + '/dashboard';
                } else {
                    alert(data.message || 'Registration failed');
                }
            } catch (error) {
                alert('An error occurred');
            }
        });
    }

    // Translation functionality
    const sourceText = document.getElementById('sourceText');
    const targetText = document.getElementById('targetText');
    const sourceLanguage = document.getElementById('sourceLanguage');
    const targetLanguage = document.getElementById('targetLanguage');
    const copyButton = document.getElementById('copyTranslation');

    if (sourceText && targetText) {
        let translationTimeout;
        sourceText.addEventListener('input', function() {
            clearTimeout(translationTimeout);
            translationTimeout = setTimeout(translateText, 500);
        });

        async function translateText() {
            // Add your translation API integration here
            // For demo, just copying the text
            targetText.value = sourceText.value;
        }

        if (copyButton) {
            copyButton.addEventListener('click', function() {
                targetText.select();
                document.execCommand('copy');
                alert('Translation copied to clipboard!');
            });
        }
    }

    // Modal handling
    window.toggleModal = function(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.toggle('hidden');
        }
    };

    // Close modals when clicking outside
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('fixed')) {
            event.target.classList.add('hidden');
        }
    });
});



