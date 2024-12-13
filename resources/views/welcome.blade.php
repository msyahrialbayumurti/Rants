<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-6">
        <h1 class="text-4xl font-bold">Selamat Datang di Landing Page</h1>
    </header>

    <main class="p-6">
        <section class="my-8">
            <h2 class="text-3xl font-semibold">Tentang Kami</h2>
            <p class="mt-4">Kami adalah perusahaan yang menyediakan solusi terbaik untuk kebutuhan Anda.</p>
        </section>

        <section class="my-8">
            <h2 class="text-3xl font-semibold">Layanan Kami</h2>
            <ul class="mt-4 list-disc list-inside">
                <li>Solusi 1</li>
                <li>Solusi 2</li>
                <li>Solusi 3</li>
            </ul>
        </section>
    </main>

    <footer class="bg-blue-600 text-white p-6 text-center">
        <p>&copy; 2023 Perusahaan Anda. Semua hak dilindungi.</p>
    </footer>
</body>

</html>
