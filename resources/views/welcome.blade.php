<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Beranda</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="20x20" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}


</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-gray-100 shadow-md top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('index') }}">
                        <img class="h-12" src="{{ asset('assets/img/TransaparentRants (300 x 100 piksel).svg') }}" alt="Logo">
                    </a>
                </div>
    
                <!-- Navigation Menu -->
                <div id="menu" class="hidden md:flex space-x-4 mx-auto font-medium">
                    <a href="#" class="text-gray-500 hover:text-red-700 transition duration-300">Beranda</a>
                    <a href="{{ route('home') }}" class="text-gray-500 hover:text-red-700 transition duration-300">Pesan</a>
                    <a href="#" class="text-gray-500 hover:text-red-700 transition duration-300">Layanan</a>
                    <a href="#" class="text-gray-500 hover:text-red-700 transition duration-300">Tentang Kami</a>
                    <a href="#" class="text-gray-500 hover:text-red-700 transition duration-300">Kontak</a>
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
                <a href="#" class="block text-gray-500 hover:text-red-700 transition duration-300">Beranda</a>
                <a href="{{ route('home') }}" class="block text-gray-500 hover:text-red-700 transition duration-300">Pesan</a>
                <a href="#" class="block text-gray-500 hover:text-red-700 transition duration-300">Layanan</a>
                <a href="#" class="block text-gray-500 hover:text-red-700 transition duration-300">Tentang Kami</a>
                <a href="#" class="block text-gray-500 hover:text-red-700 transition duration-300">Kontak</a>
                <a href="{{ route('login') }}" class="block px-4 py-2 text-white rounded-md hover:bg-blue-600 transition duration-300" style="background: hsla(57, 99%, 50%, 1);background: linear-gradient(180deg, hsla(57, 99%, 50%, 1) 0%, hsla(9, 100%, 51%, 1) 100%);background: -moz-linear-gradient(180deg, hsla(57, 99%, 50%, 1) 0%, hsla(9, 100%, 51%, 1) 100%);background: -webkit-linear-gradient(180deg, hsla(57, 99%, 50%, 1) 0%, hsla(9, 100%, 51%, 1) 100%);filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#FEF001', endColorstr='#FF2C05', GradientType=1);max-width: 200px;margin: 0 auto;">Login</a>
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
    
    

    <!-- Content Section (just for demo) -->
    <section class="relative bg-gray-50 h-screen flex items-center">
        <!-- Background Image with Gradient Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/tariLandingPage.jpg') }}" alt="Family" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black to-transparent opacity-80"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-12">
            <div class="text-left text-white">
                <h1 class="text-4xl lg:text-6xl font-extrabold">
                    Selamat Datang Di <br><span class="text-red-600"> RANTS
                </h1>
                <p class="mt-6 text-lg lg:text-xl text-gray-200">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam quisquam provident numquam
                    praesentium quaerat quod in, delectus tenetur assumenda illum eveniet nisi velit, excepturi culpa
                    facere, consequatur magni! Officia, illum? </p>
                <button
                    class="mt-8 bg-red-600 hover:bg-red-700 text-white font-medium py-3 px-6 rounded-lg shadow-lg transition">
                    Selengkapnya
                </button>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <!-- Heading Section -->
        <div class="text-center">
            <span class="bg-pink-200 text-red-600 text-sm font-medium px-4 py-1 rounded-full">
                Our Features
            </span>
            <h2 class="mt-4 text-3xl font-bold text-gray-900 sm:text-4xl">
                Insurance Provide you a <br /> Better Future
            </h2>
        </div>

        <!-- Card Section -->
        <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 max-w-7xl mx-auto px-6">
            <!-- Card -->
            <div
                class="relative bg-white rounded-lg shadow-lg p-6 text-center group overflow-hidden transition-all duration-300 hover:bg-red-800">
                <div class="text-red-800 group-hover:text-white transition-colors duration-300 relative z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 16s1.5 2 8 2 8-2 8-2m-8-2a4 4 0 100-8 4 4 0 000 8z" />
                    </svg>
                </div>
                <h3
                    class="mt-4 text-xl font-bold text-gray-800 group-hover:text-white transition-colors duration-300 relative z-10">
                    Trusted Company
                </h3>
                <p
                    class="mt-2 text-sm text-gray-600 group-hover:text-gray-200 transition-colors duration-300 relative z-10">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit libero facilisis etiam ridiculus.
                </p>
                <!-- Blue Line -->
                <span
                    class="absolute bottom-0 left-0 w-full h-1 bg-red-800 group-hover:h-full group-hover:bottom-0 transition-all duration-500 ease-out"></span>
            </div>

            <!-- Card 2 -->
            <div
                class="relative bg-white rounded-lg shadow-lg p-6 text-center group overflow-hidden transition-all duration-300 hover:bg-red-800">
                <div class="text-red-800 group-hover:text-white transition-colors duration-300 relative z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 9V7a4 4 0 10-8 0v2m-2 0a6 6 0 0112 0v2M5 21h14m-7-4v4m4-4H8" />
                    </svg>
                </div>
                <h3
                    class="mt-4 text-xl font-bold text-gray-800 group-hover:text-white transition-colors duration-300 relative z-10">
                    Anytime Money Back
                </h3>
                <p
                    class="mt-2 text-sm text-gray-600 group-hover:text-gray-200 transition-colors duration-300 relative z-10">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit libero facilisis etiam ridiculus.
                </p>
                <!-- Blue Line -->
                <span
                    class="absolute bottom-0 left-0 w-full h-1 bg-red-800 group-hover:h-full group-hover:bottom-0 transition-all duration-500 ease-out"></span>
            </div>

            <!-- Card 2 -->
            <div
                class="relative bg-white rounded-lg shadow-lg p-6 text-center group overflow-hidden transition-all duration-300 hover:bg-red-800">
                <div class="text-red-800 group-hover:text-white transition-colors duration-300 relative z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 9V7a4 4 0 10-8 0v2m-2 0a6 6 0 0112 0v2M5 21h14m-7-4v4m4-4H8" />
                    </svg>
                </div>
                <h3
                    class="mt-4 text-xl font-bold text-gray-800 group-hover:text-white transition-colors duration-300 relative z-10">
                    Anytime Money Back
                </h3>
                <p
                    class="mt-2 text-sm text-gray-600 group-hover:text-gray-200 transition-colors duration-300 relative z-10">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit libero facilisis etiam ridiculus.
                </p>
                <!-- Blue Line -->
                <span
                    class="absolute bottom-0 left-0 w-full h-1 bg-red-800 group-hover:h-full group-hover:bottom-0 transition-all duration-500 ease-out"></span>
            </div>

            <!-- Card -->
            <div
                class="relative bg-white rounded-lg shadow-lg p-6 text-center group overflow-hidden transition-all duration-300 hover:bg-red-800">
                <div class="text-red-800 group-hover:text-white transition-colors duration-300 relative z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 16s1.5 2 8 2 8-2 8-2m-8-2a4 4 0 100-8 4 4 0 000 8z" />
                    </svg>
                </div>
                <h3
                    class="mt-4 text-xl font-bold text-gray-800 group-hover:text-white transition-colors duration-300 relative z-10">
                    Trusted Company
                </h3>
                <p
                    class="mt-2 text-sm text-gray-600 group-hover:text-gray-200 transition-colors duration-300 relative z-10">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit libero facilisis etiam ridiculus.
                </p>
                <!-- Blue Line -->
                <span
                    class="absolute bottom-0 left-0 w-full h-1 bg-red-800 group-hover:h-full group-hover:bottom-0 transition-all duration-500 ease-out"></span>
            </div>

        </div>
    </section>





    <section class="relative bg-gray-100 min-h-screen flex items-center justify-center">
        <!-- Image Container -->
        <div class="relative w-full max-w-7xl mx-auto">
            <!-- Image -->
            <img src="/public/assets/img/landing-page/landingpage.webp" alt="Hero Image"
                class="w-full h-auto object-cover rounded-lg shadow-lg">

            <!-- Text Overlay -->
            <div class="absolute inset-0 flex items-center justify-end pr-10">
                <div class="bg-black bg-opacity-70 p-6 rounded-lg max-w-md text-right">
                    <p class="text-sm font-semibold text-red-500 uppercase">Welcome! Start growing your business today
                    </p>
                    <h1 class="text-4xl font-bold text-gray-500">
                        Make <span class="text-red-500">Business Unique</span> <br>
                        With Great Ideas
                    </h1>
                    <p class="text-gray-500 leading-relaxed mt-4">
                        Kami hadir untuk membantu Anda menjalankan strategi bisnis global secara efektif.
                        Dapatkan solusi terbaik untuk mendorong inovasi dan pertumbuhan.
                    </p>
                    <button
                        class="mt-6 bg-red-700 text-white px-6 py-3 rounded-md shadow-md hover:bg-red-900 transition duration-300">
                        Get Consultant
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <!-- Heading Section -->
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-900">Projects Area</h2>
        </div>

        <!-- Image Carousel -->
        <div class="mt-8 max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Image Card -->
                <div class="relative group overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Project 1"
                        class="h-80 w-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black via-transparent to-transparent p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-white font-bold text-lg">Project Title</h3>
                        <p class="text-gray-300 text-sm mt-1">Short description about the project.</p>
                    </div>
                </div>

                <!-- Repeat Image Cards -->
                <div class="relative group overflow-hidden rounded-lg shadow-lg">
                    <img src="/public/assets/logoray.png" alt="Project 2"
                        class="h-80 w-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black via-transparent to-transparent p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-white font-bold text-lg">Project Title</h3>
                        <p class="text-gray-300 text-sm mt-1">Short description about the project.</p>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-lg shadow-lg">
                    <img src="/public/assets/img/landing-page/kostum.png" alt="Project 3"
                        class="h-80 w-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black via-transparent to-transparent p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-white font-bold text-lg">Project Title</h3>
                        <p class="text-gray-300 text-sm mt-1">Short description about the project.</p>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-lg shadow-lg">
                    <img src="image4.jpg" alt="Project 4"
                        class="h-80 w-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black via-transparent to-transparent p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-white font-bold text-lg">Project Title</h3>
                        <p class="text-gray-300 text-sm mt-1">Short description about the project.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <div class="min-h-screen flex justify-center items-center">
        <h1 class="text-4xl font-bold">Welcome to the Website!</h1>
    </div>

    <footer class="bg-red-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Logo and Description -->
            <div>
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-20 w-auto">
                    {{-- <h3 class="text-xl font-semibold">RANTS</h3> --}}
                </div>
                <p class="mt-4 text-gray-300">
                    There are many vari of pass of lorem ipsum availab but the majority have suffered in some form by
                    injected humour or words.
                </p>
                <div class="flex space-x-4 mt-6">
                    <a href="#" class="bg-red-700 p-2 rounded-full">
                      <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="bg-red-700 p-2 rounded-full">
                      <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/rants.id?igsh=MXh4bHMzNmd2Y3Q3ag=="
                        class="bg-red-700 p-2 rounded-full">
                        <i class="fa-brands fa-instagram"></i> 
                    </a>

                </div>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-lg font-semibold border-b-2 border-red-400 pb-2">layanan</h4>
                <ul class="mt-4 space-y-2 text-gray-300">
                    <li><a href="#" class="hover:text-white">Jasa Tari</a></li>
                    <li><a href="#" class="hover:text-white">Sewa Kostum</a></li>
                    <li><a href="#" class="hover:text-white">Jasa Make Up</a></li>
                    {{-- <li><a href="#" class="hover:text-white">Home insurance</a></li>
        <li><a href="#" class="hover:text-white">Travel insurance</a></li> --}}
                </ul>
            </div>

            <!-- Useful Links -->
            <div>
                <h4 class="text-lg font-semibold border-b-2 border-red-400 pb-2">Useful Links</h4>
                <ul class="mt-4 space-y-2 text-gray-300">
                    <li><a href="#" class="hover:text-white">Home</a></li>
                    <li><a href="#" class="hover:text-white">Service</a></li>
                    <li><a href="#" class="hover:text-white">FAQ's</a></li>
                    <li><a href="#" class="hover:text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h4 class="text-lg font-semibold border-b-2 border-red-400 pb-2">Newsletter</h4>
                <p class="mt-4 text-gray-300">
                    Seamlessly visualize quality intellectual capital without superior collaboration and idea sharing
                    listically.
                </p>
                <div class="mt-4">
                    <input type="email" placeholder="Enter Your Email"
                        class="w-full p-3 rounded-md text-gray-800 focus:outline-none">
                    <button
                        class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 mt-2 rounded-md w-full">
                        SUBMIT NOW
                    </button>
                </div>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="mt-12 border-t border-gray-600 pt-8">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col sm:flex-row justify-between text-gray-300">
                <div class="flex items-center space-x-4">
                    <div class="bg-red-700 p-3 rounded-full">
                      <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h5 class="font-semibold">Email</h5>
                        <p>rantsrpl5b@gmail.com</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4 mt-6 sm:mt-0">
                    <div class="bg-red-700 p-3 rounded-full">
                      <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h5 class="font-semibold">Nomor Telepon</h5>
                        <p>(+62) 852 6394 5612</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4 mt-6 sm:mt-0">
                    <div class="bg-red-700 p-3 rounded-full">
                      <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h5 class="font-semibold">Alamat</h5>
                        <p>Jl. Bathin Alam, Sungai Alam, Bengkalis – Riau</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>
