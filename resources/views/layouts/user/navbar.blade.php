<header class="bg-gray-100 shadow-md top-0 z-50 sticky w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('index') }} ">
                    <img class="h-12" src="{{ asset('assets/img/TransaparentRants (300 x 100 piksel).svg') }}" alt="Logo">
                </a>
            </div>

            <!-- Navigation Menu -->
            <div id="menu" class="hidden md:flex space-x-4 mx-auto font-medium">
                <a href="{{ route('index') }}" class="{{ Route::is('index') ? 'text-red-700 font-semibold' : 'text-gray-500' }} hover:text-red-700 transition duration-300" text-gray-500 hover:text-red-700 transition duration-300">Beranda</a>
                <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'text-red-700 font-semibold' : 'text-gray-500' }} hover:text-red-700 transition duration-300" text-gray-500 hover:text-red-700 transition duration-300">Pesan</a>
                {{-- <a href="{{ route('layanan') }}" class="{{ Route::is('layanan') ? 'text-red-700 font-semibold' : 'text-gray-500' }} hover:text-red-700 transition duration-300" text-gray-500 hover:text-red-700 transition duration-300">Layanan</a>
                <a href="{{ route('tentangkami') }}" class="{{ Route::is('tentangkami') ? 'text-red-700 font-semibold' : 'text-gray-500' }} hover:text-red-700 transition duration-300" text-gray-500 hover:text-red-700 transition duration-300">Tentang Kami</a> --}}
                <a href="{{ route('kontak') }}" class="{{ Route::is('kontak') ? 'text-red-700 font-semibold' : 'text-gray-500' }} hover:text-red-700 transition duration-300" text-gray-500 hover:text-red-700 transition duration-300">Kontak</a>
                {{-- <a href="{{ route('login') }}" class="block px-4 py-2 text-white rounded-md hover:bg-blue-600 transition duration-300" style="background: hsla(57, 99%, 50%, 1);background: linear-gradient(180deg, hsla(57, 99%, 50%, 1) 0%, hsla(9, 100%, 51%, 1) 100%);background: -moz-linear-gradient(180deg, hsla(57, 99%, 50%, 1) 0%, hsla(9, 100%, 51%, 1) 100%);background: -webkit-linear-gradient(180deg, hsla(57, 99%, 50%, 1) 0%, hsla(9, 100%, 51%, 1) 100%);filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#FEF001', endColorstr='#FF2C05', GradientType=1);max-width: 200px;margin: 0 auto;">Login</a> --}}
            </div>

            <!-- Hamburger Menu (for screens <= 768px) -->
            <div class="md:hidden">
                <button id="menu-button" class="text-gray-600 hover:text-red-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 space-y-2 font-medium">
            <a href="{{ route('index') }}" class="{{ Route::is('index') ? 'text-red-700 font-bold' : 'text-gray-500' }} hover:text-red-700 transition duration-300 block text-gray-500 hover:text-red-700 transition duration-300" >Beranda</a>
            <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'text-red-700 font-bold' : 'text-gray-500' }} hover:text-red-700 transition duration-300 block text-gray-500 hover:text-red-700 transition duration-300">Pesan</a>
            {{-- <a href="{{ route('layanan') }}" class="{{ Route::is('layanan') ? 'text-red-700 font-bold' : 'text-gray-500' }} hover:text-red-700 transition duration-300 block text-gray-500 hover:text-red-700 transition duration-300">Layanan</a>
            <a href="{{ route('tentangkami') }}" class="{{ Route::is('layanan') ? 'text-red-700 font-bold' : 'text-gray-500' }} hover:text-red-700 transition duration-300 block text-gray-500 hover:text-red-700 transition duration-300">Tentang Kami</a> --}}
            <a href="{{ route('kontak') }}" class="{{ Route::is('layanan') ? 'text-red-700 font-bold' : 'text-gray-500' }} hover:text-red-700 transition duration-300 block text-gray-500 hover:text-red-700 transition duration-300">Kontak</a>
            {{-- <a href="{{ route('login') }}" class="block px-4 py-2 text-white rounded-md hover:bg-blue-600 transition duration-300" style="background: hsla(57, 99%, 50%, 1);background: linear-gradient(180deg, hsla(57, 99%, 50%, 1) 0%, hsla(9, 100%, 51%, 1) 100%);background: -moz-linear-gradient(180deg, hsla(57, 99%, 50%, 1) 0%, hsla(9, 100%, 51%, 1) 100%);background: -webkit-linear-gradient(180deg, hsla(57, 99%, 50%, 1) 0%, hsla(9, 100%, 51%, 1) 100%);filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#FEF001', endColorstr='#FF2C05', GradientType=1);max-width: 200px;margin: 0 auto;">Login</a> --}}
        </div>
    </div>
</header>

<script>
    // JavaScript for toggling the mobile menu
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>