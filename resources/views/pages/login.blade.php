<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen bg-gray-50 flex items-center justify-center">
  <div class="w-full max-w-4xl flex flex-col sm:flex-row gap-0 sm:px-4">
    <!-- Left Section -->
    <div class="bg-white p-6 sm:p-10 flex flex-col justify-center sm:w-1/2">
      <div class="text-center mb-6">
        {{-- <h1 class="text-xl md:text-2xl font-semibold text-gray-800">WELCOME TO</h1> --}}
        {{-- <h2 class="text-3xl md:text-4xl font-bold text-red-500 flex items-center justify-center">
          <span class="mr-2"><img src="infinity-logo.png" alt="Logo" class="h-6 md:h-8"></span> INFINITY
        </h2> --}}
        <div class="text-center">
          <img class="h-28 mx-auto" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
        </div>        
        <p class="text-sm md:text-base text-gray-500 mt-2">
          Silakan masuk terlebih dahulu untuk melanjutkan
          
        </p>
        
      </div>
      <form method="POST" action="{{ route('post-login') }}">
        {{ csrf_field() }}
        <div class="mb-4">
          <label class="block">
            <span class="block text-sm font-medium text-slate-600">Email</span>
            <input type="email" name="email" placeholder="example@mail.com" class="peer w-full px-3 py-2 border border-slate-200 rounded-md focus:outline-none focus:ring-1 focus:ring-slate-600 focus:border-transparent invalid:border-slate-600 invalid:text-slate-600"/>
            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
              Pastikan email yang anda masukkan valid.
            </p>
          </label>
        </div>
        <div class="mb-4">
          <label class="block text-sm md:text-base text-gray-600 mb-2">Password</label>
          <div class="flex items-center border rounded px-3 py-2">
            <input type="password" id="password" name="password" placeholder="Password" class="peer w-full border-none outline-none focus:ring-0">
            
            <!-- Mata Tertutup dengan Garis (SVG) -->
            <svg id="toggle-password" class="w-6 h-6 cursor-pointer text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" onclick="togglePassword()">
              <path d="M12 4C6 4 2 8 2 12c0 4 4 8 10 8s10-4 10-8c0-4-4-8-10-8zm0 14c-3.9 0-7-2.7-7-6s3.1-6 7-6 7 2.7 7 6-3.1 6-7 6zm3-6c0-.8-.7-1.5-1.5-1.5S12 12.2 12 13s.7 1.5 1.5 1.5S15 13.8 15 13z"/>
              <!-- Garis penutup mata -->
              <line x1="4" y1="4" x2="20" y2="20" stroke="black" stroke-width="2"/>
            </svg>
          </div>
        </div>
        @if ($errors->any())
            <div class="text-red-500 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <button type="submit" class="w-full bg-gradient-to-r from-red-500 to-orange-500 text-white py-2 rounded mt-4 shadow-md font-bold">
          SIGN IN
        </button>
      </form>
      
      <p class="text-center text-sm md:text-base text-gray-500 mt-4">
        Belum punya akun? <a class="text-sm text-blue-500 hover:underline" href="{{ route('register') }}">Daftar sekarang</a>
      </p>
      <div class="text-center mt-6">
        <p class="text-gray-500 text-sm">Or</p>
        <div class="flex justify-center gap-4 mt-4">
          <a href="#" class="text-blue-500 text-xl"><i class="fab fa-facebook"></i></a>
          <a href="#" class="text-blue-400 text-xl"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-red-500 text-xl"><i class="fab fa-google"></i></a>
          <a href="#" class="text-blue-600 text-xl"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
    <!-- Right Section -->
    <div class="bg-cover bg-center relative sm:w-1/2" style="background-image: url('background-image.jpg');">
      <div class="absolute inset-0 bg-red-500 opacity-50"></div>
      <div class="relative flex flex-col items-center justify-center h-full text-white px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">INFINITY</h2>
        <p class="text-base md:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec neque tortor. Proin efficitur leo vel ex aliquam ullamcorper aenean ut pretium ligula.</p>
      </div>
    </div>
  </div>

  <script>
    function togglePassword() {
      var passwordField = document.getElementById('password');
      var toggleIcon = document.getElementById('toggle-password');
      
      if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.setAttribute("d", "M12 4C6 4 2 8 2 12c0 4 4 8 10 8s10-4 10-8c0-4-4-8-10-8zm0 14c-3.9 0-7-2.7-7-6s3.1-6 7-6 7 2.7 7 6-3.1 6-7 6zm3-6c0-.8-.7-1.5-1.5-1.5S12 12.2 12 13s.7 1.5 1.5 1.5S15 13.8 15 13z");  // Mata terbuka
        toggleIcon.style.fill = "#000"; // Mata terbuka warna hitam
        toggleIcon.querySelector('line').style.display = 'none';  // Hilangkan garis saat mata terbuka
      } else {
        passwordField.type = "password";
        toggleIcon.setAttribute("d", "M12 4C6 4 2 8 2 12c0 4 4 8 10 8s10-4 10-8c0-4-4-8-10-8zm0 14c-3.9 0-7-2.7-7-6s3.1-6 7-6 7 2.7 7 6-3.1 6-7 6zm3-6c0-.8-.7-1.5-1.5-1.5S12 12.2 12 13s.7 1.5 1.5 1.5S15 13.8 15 13z");  // Mata tertutup
        toggleIcon.style.fill = "#6B7280"; // Mata tertutup warna abu-abu
        toggleIcon.querySelector('line').style.display = 'block';  // Tampilkan garis saat mata tertutup
      }
    }
  </script>
</body>
</html>
