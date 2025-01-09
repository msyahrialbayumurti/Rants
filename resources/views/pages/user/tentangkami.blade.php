<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Sanggar Tari</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/services">Layanan</a></li>
                <li><a href="/about">Tentang Kami</a></li>
                <li><a href="/contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="about">
            <div class="container">
                <h1>Tentang Kami</h1>
                <p>Selamat datang di Sanggar Tari kami! Kami adalah pusat seni tari yang berkomitmen untuk melestarikan
                    dan mempromosikan keindahan seni tari tradisional dan modern di Indonesia.</p>

                <h2>Visi Kami</h2>
                <p>Menjadi pusat seni tari terkemuka yang menginspirasi masyarakat untuk mencintai dan menghargai seni
                    budaya.</p>

                <h2>Misi Kami</h2>
                <ul>
                    <li>Menyediakan layanan berkualitas tinggi dalam seni tari, penyewaan kostum, dan tata rias
                        profesional.</li>
                    <li>Melestarikan seni tari tradisional Indonesia dengan melibatkan generasi muda.</li>
                    <li>Menciptakan pengalaman seni yang mendalam dan berkesan untuk setiap pelanggan.</li>
                </ul>

                <h2>Layanan Kami</h2>
                <div class="services">
                    <div class="service-item">
                        <h3>Penyewaan Jasa Tari</h3>
                        <p>Kami menyediakan penari profesional untuk berbagai acara, mulai dari pernikahan hingga
                            pertunjukan seni.</p>
                    </div>
                    <div class="service-item">
                        <h3>Penyewaan Kostum</h3>
                        <p>Koleksi kostum tradisional dan modern yang lengkap untuk memenuhi kebutuhan acara Anda.</p>
                    </div>
                    <div class="service-item">
                        <h3>Make Up</h3>
                        <p>Jasa tata rias profesional untuk mendukung penampilan penari dan pelanggan dalam berbagai
                            acara.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Sanggar Tari. Semua Hak Dilindungi.</p>
    </footer>
</body>

</html>