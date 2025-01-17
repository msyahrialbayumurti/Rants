    @extends('layouts.user.main')
    @section('content')
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
    @endsection