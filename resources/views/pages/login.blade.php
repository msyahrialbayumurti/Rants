<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center h-screen">

    @include('layout.user.nav')
    
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-600 text-center mb-6">Login</h1>
        <p>Silakan masuk untuk terlebih dahulu. Belum punya akun? <a class="text-sm text-blue-500 hover:underline" href="{{ route('register') }}">Daftar</a></p>
        <form method="POST" action="">
            @csrf
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-400">Email</label>
                <input type="email" name="email" id="email" 
                       class="w-full px-4 py-2 mt-2 bg-white text-gray-700 rounded outline outline-gray-300 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500" 
                       placeholder="Masukan email" required>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <!-- Password -->
            <div class="mb-4 relative">
                <label for="password" class="block text-gray-400">Password</label>
                <div class="relative">
                    <input type="password" name="password" id="password" 
                           class="w-full px-4 py-2 mt-2 bg-white text-gray-700 rounded outline outline-gray-300 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500" 
                           placeholder="Masukkan password" required>
                    <!-- Eye Icon untuk Toggle Password -->
                    <button type="button" onclick="togglePassword()" 
                            class="absolute right-3 top-[60%] transform -translate-y-1/2 focus:outline-none">
                        <!-- Ikon default: Mata Tertutup -->
                        <svg id="eyeIconClosed" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.98 8.268a10.97 10.97 0 00-1.622 3.732A10.97 10.97 0 0012 18c3.866 0 7.24-2.194 9.013-5.414m.465-3.266a10.97 10.97 0 00-9.478-5.477M12 6v1m0 10v1m2.488-6.512a3 3 0 11-4.976 0" />
                            <!-- Garis Miring pada Mata Tertutup -->
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4L20 20" stroke="gray" stroke-opacity="0.7"/>
                        </svg>
                        <!-- Ikon alternatif: Mata Terbuka -->
                        <svg id="eyeIconOpen" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.543 7-.155.532-.355 1.046-.598 1.539M12 19c-4.478 0-8.268-2.943-9.543-7 .155-.532.355-1.046.598-1.539" />
                        </svg>
                    </button>
                </div>
                
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <!-- Remember me -->
            <div class="flex items-center justify-between mb-6">
                <label class="flex items-center text-gray-400">
                    <input type="checkbox" class="form-checkbox text-blue-500" name="remember">
                    <span class="ml-2">Remember me</span>
                </label>
                <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
            </div>
            <!-- Submit Button -->
            <button type="submit" 
                    class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-300">
                Sign in to your account
            </button>
        </form>
        <!-- Social Login -->
        <div class="mt-6">
            <p class="text-gray-400 text-center mt-auto mb-2">or</p>
            <button class="w-full bg-white text-balack py-2 mb-3 flex items-center justify-center rounded hover:bg-gray-600rounded outline outline-gray-300 transition duration-300">
                <img src="{{ asset('assets/img/google.png') }}" class="h-5 mr-2"> 
                Sign in with Google
            </button>
        </div>
    </div>
    
    <!-- Script untuk Toggle Password -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIconClosed = document.getElementById('eyeIconClosed');
            const eyeIconOpen = document.getElementById('eyeIconOpen');
    
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
