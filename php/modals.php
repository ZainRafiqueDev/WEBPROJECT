// File: modals.php
<div id="signInModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-gray-800 p-8 rounded-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6">Sign In</h2>
        <form id="loginForm" class="space-y-4">
            <div>
                <label class="block mb-2">Email</label>
                <input type="email" name="email" class="w-full bg-gray-700 rounded p-2" required>
            </div>
            <div>
                <label class="block mb-2">Password</label>
                <input type="password" name="password" class="w-full bg-gray-700 rounded p-2" required>
            </div>
            <button type="submit" class="w-full bg-cyan-400 text-gray-900 rounded py-2 font-bold hover:bg-cyan-500">
                Sign In
            </button>
            <p class="text-center">
                <a href="#" class="text-cyan-400 hover:text-cyan-300">Forgot Password?</a>
            </p>
        </form>
    </div>
</div>

<div id="signUpModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-gray-800 p-8 rounded-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6">Sign Up</h2>
        <form id="registerForm" class="space-y-4">
            <div>
                <label class="block mb-2">Email</label>
                <input type="email" name="email" class="w-full bg-gray-700 rounded p-2" required>
            </div>
            <div>
                <label class="block mb-2">Password</label>
                <input type="password" name="password" class="w-full bg-gray-700 rounded p-2" required>
            </div>
            <div>
                <label class="block mb-2">Confirm Password</label>
                <input type="password" name="confirm_password" class="w-full bg-gray-700 rounded p-2" required>
            </div>
            <button type="submit" class="w-full bg-cyan-400 text-gray-900 rounded py-2 font-bold hover:bg-cyan-500">
                Sign Up
            </button>
        </form>
    </div>
</div>