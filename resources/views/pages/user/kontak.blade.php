<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Kontak Kami - Sanggar Tari</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="20x20" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
    body {
        font-family: 'Sans-serif';
        background-color: #f8f9fa;
    }

    header {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 50;
        background-color: white;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .contact-btn {
        background: linear-gradient(90deg, #FF512F, #DD2476);
        color: white;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .contact-section img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }

    .card-body {
        padding: 20px;
    }

    .card-body h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .card-body p {
        color: #6b7280;
    }

    .social-card {
        display: flex;
        align-items: center;
        gap: 20px;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .social-card:hover {
        transform: scale(1.05);
    }

    .social-card img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 50%;
    }

    .social-card div {
        flex-grow: 1;
    }
    </style>
</head>

<body class="bg-gradient-to-b from-gray-100 to-gray-300 font-sans">
    <header class="bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('index') }} ">
                        <img class="h-12" src="{{ asset('assets/img/TransaparentRants (300 x 100 piksel).svg') }}"
                            alt="Logo">
                    </a>
                </div>

                <!-- Navigation Menu -->
                <div id="menu" class="hidden md:flex space-x-4 mx-auto font-medium">
                    <a href="{{ route('index') }}"
                        class="{{ Route::is('index') ? 'text-red-700 font-semibold' : 'text-gray-500' }} hover:text-red-700 transition duration-300">Beranda</a>
                    <a href="{{ route('home') }}"
                        class="{{ Route::is('home') ? 'text-red-700 font-semibold' : 'text-gray-500' }} hover:text-red-700 transition duration-300">Pesan</a>
                    {{-- <a href="{{ route('layanan') }}"
                        class="{{ Route::is('layanan') ? 'text-red-700 font-semibold' : 'text-gray-500' }} hover:text-red-700 transition duration-300">Layanan</a> --}}
                    {{-- <a href="{{ route('tentangkami') }}"
                        class="{{ Route::is('tentangkami') ? 'text-red-700 font-semibold' : 'text-gray-500' }} hover:text-red-700 transition duration-300">Tentang
                        Kami</a> --}}
                    <a href="{{ route('kontak') }}"
                        class="{{ Route::is('kontak') ? 'text-red-700 font-semibold' : 'text-gray-500' }} hover:text-red-700 transition duration-300">Kontak</a>
                </div>

                <!-- Hamburger Menu (for screens <= 768px) -->
                <div class="md:hidden">
                    <button id="menu-button" class="text-gray-600 hover:text-red-700 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 space-y-2 font-medium">
                <a href="{{ route('index') }}"
                    class="{{ Route::is('index') ? 'text-red-700 font-bold' : 'text-gray-500' }} hover:text-red-700 transition duration-300 block">Beranda</a>
                <a href="{{ route('home') }}"
                    class="{{ Route::is('home') ? 'text-red-700 font-bold' : 'text-gray-500' }} hover:text-red-700 transition duration-300 block">Pesan</a>
                {{-- <a href="{{ route('layanan') }}"
                    class="{{ Route::is('layanan') ? 'text-red-700 font-bold' : 'text-gray-500' }} hover:text-red-700 transition duration-300 block">Layanan</a>
                <a href="{{ route('tentangkami') }}"
                    class="{{ Route::is('tentangkami') ? 'text-red-700 font-bold' : 'text-gray-500' }} hover:text-red-700 transition duration-300 block">Tentang
                    Kami</a> --}}
                <a href="{{ route('kontak') }}"
                    class="{{ Route::is('kontak') ? 'text-red-700 font-bold' : 'text-gray-500' }} hover:text-red-700 transition duration-300 block">Kontak</a>
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


    <!-- Main Content -->
    <main class="py-20 mt-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h1 class="text-5xl font-bold text-gray-800 text-center mb-12">Kontak Kami</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Hubungi Kami</h2>
                    <p class="text-gray-600 mb-4">Kami siap membantu Anda! Hubungi kami melalui:</p>
                    <div class="space-y-4">
                        <div class="social-card">
                            <img src="{{ asset('assets/img/wa.png') }}" alt="WhatsApp">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">WhatsApp</h3>
                                <p class="text-gray-600">Klik untuk menghubungi kami di WhatsApp.</p>
                            </div>
                            <a href="https://wa.me/628123456789" target="_blank" class="contact-btn">
                                <i class="fab fa-whatsapp text-lg"></i>
                            </a>
                        </div>

                        <div class="social-card">
                            <img src="{{ asset('assets/img/emaill.png') }}" alt="Email">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Email</h3>
                                <p class="text-gray-600">Kirim email kepada kami untuk pertanyaan lebih lanjut.</p>
                            </div>
                            <a href="mailto:rantsrpl5b@gmail.com" target="_blank" class="contact-btn">
                                <i class="fas fa-envelope text-lg"></i>
                            </a>
                        </div>

                        <div class="social-card">
                            <img src="{{ asset('assets/img/instagram.png') }}" alt="Instagram">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Instagram</h3>
                                <p class="text-gray-600">Ikuti kami di Instagram untuk update terbaru.</p>
                            </div>
                            <a href="https://www.instagram.com/rants.id?igsh=MXh4bHMzNmd2Y3Q3ag==" target="_blank" class="contact-btn">
                                <i class="fab fa-instagram text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Illustration -->
                <div class="contact-section">
                    <img src="{{ asset('assets/img/gambartelpon.png') }}" alt="Contact Illustration">
                </div>
            </div>

            <div class="mt-16">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Kenapa Memilih Kami?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <style>
                        .card {
                            border: 1px solid #ddd;
                            border-radius: 8px;
                            overflow: hidden;
                            margin: 16px;
                            text-align: center;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        }
                        .card img {
                            width: 100%;
                            height: 150px;
                            object-fit: contain; /* Gambar menyesuaikan kontainer tanpa terpotong */
                            padding: 16px;
                        }
                        .card-body {
                            padding: 16px;
                        }
                        .card h3 {
                            font-size: 1.25rem;
                            margin-bottom: 8px;
                        }
                        .card p {
                            font-size: 1rem;
                            color: #666;
                        }
                    </style>
                    
                    <div class="card">
                        <img src="{{ asset('assets/img/badge.png') }}" alt="Pengalaman">
                        <div class="card-body">
                            <h3>Pengalaman</h3>
                            <p>Kami memiliki tim yang berpengalaman dan ahli di bidang seni tari dan penyewaan jasa.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/img/customer-review.png') }}" alt="Kualitas Terbaik">
                        <div class="card-body">
                            <h3>Kualitas Terbaik</h3>
                            <p>Kami menjamin kualitas terbaik pada setiap layanan dan produk yang kami sediakan.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/img/best-price.png') }}" alt="Harga Kompetitif">
                        <div class="card-body">
                            <h3>Harga Kompetitif</h3>
                            <p>Kami menawarkan harga yang kompetitif sesuai dengan kebutuhan Anda.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-red-800 text-white py-12 mt-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Logo and Description -->
            <div>
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-20 w-auto">
                    {{-- <h3 class="text-xl font-semibold">RANTS</h3> --}}
                </div>
                <p class="mt-4 text-gray-300">
                    Menghidupkan Keindahan Seni Tari Tradisional Dan Modern Indonesia

                </p>
                <div class="flex space-x-4 mt-6">
                    <a href="#" class="bg-red-700 p-3 rounded-full hover:bg-red-600 transition">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="bg-red-700 p-3 rounded-full hover:bg-red-600 transition">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/rants.id?igsh=MXh4bHMzNmd2Y3Q3ag=="
                       class="bg-red-700 p-3 rounded-full hover:bg-red-600 transition">
                        <i class="fa-brands fa-instagram"></i> 
                    </a>
                </div>
            </div>
    
            <!-- Services -->
            <div>
                <h4 class="text-lg font-semibold border-b-2 border-red-400 pb-2">Layanan</h4>
                <ul class="mt-4 space-y-2 text-gray-300">
                    <li><a href="#" class="hover:text-white transition">Jasa Tari</a></li>
                    <li><a href="#" class="hover:text-white transition">Sewa Kostum</a></li>
                    <li><a href="#" class="hover:text-white transition">Jasa Make Up</a></li>
                </ul>
            </div>
    
            <!-- Useful Links -->
            <div>
                <h4 class="text-lg font-semibold border-b-2 border-red-400 pb-2">Lebih Lanjut</h4>
                <ul class="mt-4 space-y-2 text-gray-300">
                    <li><a href="#" class="hover:text-white transition">Home</a></li>
                    {{-- <li><a href="#" class="hover:text-white transition">Service</a></li>
                    <li><a href="#" class="hover:text-white transition">FAQ's</a></li> --}}
                    <li><a href="#" class="hover:text-white transition">Contact</a></li>
                </ul>
            </div>
    
            <!-- Location -->
            <div>
                <h4 class="text-lg font-semibold border-b-2 border-red-400 pb-2">Lokasi</h4>
                <div class="mt-4 rounded-lg overflow-hidden shadow-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7608.522918959678!2d102.1442280167053!3d1.4582093023032396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d15f03d7b3411b%3A0x855da8ac290dbf9d!2sGedung%20Utama%20Direktorat%20Polbeng!5e0!3m2!1sid!2sid!4v1736478038303!5m2!1sid!2sid" 
                        width="600" 
                        height=200" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    
        <!-- Contact Info -->
        <div class="mt-12 border-t border-gray-600 pt-8">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-gray-300">
                <div class="flex items-center space-x-4">
                    <div class="bg-red-700 p-3 rounded-full">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h5 class="font-semibold">Email</h5>
                        <p>rantsrpl5b@gmail.com</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="bg-red-700 p-3 rounded-full">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h5 class="font-semibold">Nomor Telepon</h5>
                        <p>(+62) 852 6394 5612</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="bg-red-700 p-3 rounded-full">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h5 class="font-semibold">Alamat</h5>
                        <p>Jl. Bathin Alam, Sungai Alam, Bengkalis, Riau</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>