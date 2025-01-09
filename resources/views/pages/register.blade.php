<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg md:max-w-md sm:max-w-sm">
        <h1 class="text-2xl font-bold text-gray-600 text-center mb-6">Register</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-2">
                <label for="username" class="block text-gray-400">Nama</label>
                <input type="text" name="username" id="username" 
                       class="w-full px-4 py-2 mt-2 bg-white text-gray-700 rounded outline outline-gray-300 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500" 
                       placeholder="Masukan nama lengkap" required>
                @error('username')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-2">
                <label for="email" class="block text-gray-400">Email</label>
                <input type="email" name="email" id="email" 
                       class="w-full px-4 py-2 mt-2 bg-white text-gray-700 rounded outline outline-gray-300 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500" 
                       placeholder="Masukan email" required>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-2">
                <label for="no_hp" class="block text-gray-400">No HP</label>
                <input type="text" name="no_hp" id="no_hp" 
                       class="w-full px-4 py-2 mt-2 bg-white text-gray-700 rounded outline outline-gray-300 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500" 
                       placeholder="Masukkan No hp" required>
                @error('no_hp')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-8 flex flex-col sm:flex-row sm:space-x-4">
                <!-- Password Field -->
                <div class="relative w-full sm:w-1/2">
                    <label for="password1" class="block text-gray-400">Password</label>
                    <input type="password" name="password1" id="password1" 
                           class="w-full px-4 py-2 mt-2 bg-white text-gray-700 rounded outline outline-gray-300 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500" 
                           placeholder="Masukkan password" required>
                    <!-- Icon Toggle -->
                    <button type="button" onclick="togglePassword('password1', 'eyeIconClosed1', 'eyeIconOpen1')" 
                            class="absolute right-1 top-[75%] transform -translate-y-1/2 focus:outline-none">
                        <svg id="eyeIconClosed1" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.98 8.268a10.97 10.97 0 00-1.622 3.732A10.97 10.97 0 0012 18c3.866 0 7.24-2.194 9.013-5.414m.465-3.266a10.97 10.97 0 00-9.478-5.477M12 6v1m0 10v1m2.488-6.512a3 3 0 11-4.976 0" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4L20 20" stroke="gray" stroke-opacity="0.7"/>
                        </svg>
                        <svg id="eyeIconOpen1" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.543 7-.155.532-.355 1.046-.598 1.539M12 19c-4.478 0-8.268-2.943-9.543-7 .155-.532.355-1.046.598-1.539" />
                        </svg>
                    </button>
                </div>

                <!-- Confirm Password Field -->
                <div class="relative w-full sm:w-1/2">
                    <label for="password2" class="block text-gray-400 mt-2 md:mt-0">Confirm Password</label>

                    <input type="password" name="password2" id="password2" 
                           class="w-full px-4 py-2 mt-2 bg-white text-gray-700 rounded outline outline-gray-300 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500" 
                           placeholder="Confirm password" required>
                    <!-- Icon Toggle -->
                    <button type="button" onclick="togglePassword('password2', 'eyeIconClosed2', 'eyeIconOpen2')" 
                            class="absolute right-2 top-[75%] transform -translate-y-1/2 focus:outline-none">
                        <svg id="eyeIconClosed2" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.98 8.268a10.97 10.97 0 00-1.622 3.732A10.97 10.97 0 0012 18c3.866 0 7.24-2.194 9.013-5.414m.465-3.266a10.97 10.97 0 00-9.478-5.477M12 6v1m0 10v1m2.488-6.512a3 3 0 11-4.976 0" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4L20 20" stroke="gray" stroke-opacity="0.7"/>
                        </svg>
                        <svg id="eyeIconOpen2" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.543 7-.155.532-.355 1.046-.598 1.539M12 19c-4.478 0-8.268-2.943-9.543-7 .155-.532.355-1.046.598-1.539" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                    class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-300">
                Masuk
            </button>
        </form>

        <!-- Social Login -->
        <div class="mt-4">
            <p class="text-gray-400 text-center mt-auto mb-4">or</p>
            <button class="w-full bg-white text-black py-2 mb-3 flex items-center justify-center rounded hover:bg-gray-600 outline outline-gray-300 transition duration-300">
                <img src="{{ asset('assets/img/google.png') }}" class="h-5 mr-2"> 
                Masuk dengan Google
            </button>
        </div>
    </div>

    <!-- Script untuk Toggle Password -->
    <script>
        function togglePassword(passwordId, closedIconId, openIconId) {
            const passwordInput = document.getElementById(passwordId);
            const eyeIconClosed = document.getElementById(closedIconId);
            const eyeIconOpen = document.getElementById(openIconId);

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIconClosed.style.display = 'none';
                eyeIconOpen.style.display = 'block';
            } else {
                passwordInput.type = 'password';
                eyeIconClosed.style.display = 'block';
                eyeIconOpen.style.display = 'none';
            }
        }
    </script>
    
</body>
</html>
