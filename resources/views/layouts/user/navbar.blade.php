<header class="bg-gray-100 shadow-md sticky top-0 z-50 ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <img class="h-28" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
            </div>

            <!-- Navigation Menu -->
            <div class="flex space-x-4 mx-auto font-medium">
                <a href="#" class="text-gray-500 hover:text-red-700 transition duration-300">Beranda</a>
                <a href="#" class="text-gray-500 hover:text-red-700 transition duration-300">Layanan</a>
                <a href="#" class="text-gray-500 hover:text-red-700 transition duration-300">Tentang Kami</a>
                <a href="#" class="text-gray-500 hover:text-red-700 transition duration-300">Kontak</a>
            </div>
            
            {{-- <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">Login</a> --}}
            <!-- Right Side - Button or Login/Signup -->
            <!-- <div class="flex items-center space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-500 transition duration-300">Login</a>
            </div> -->
        </div>
    </div>
</header>