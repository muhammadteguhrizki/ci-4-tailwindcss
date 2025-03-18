<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <!-- HEADER -->
    <header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo -->
            <a href="#" class="text-2xl font-bold text-blue-600">LOGO</a>

            <!-- Menu Desktop -->
            <nav class="hidden md:flex space-x-6">
                <a href="#" class="text-gray-700 hover:text-blue-500">Beranda</a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Tentang</a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Layanan</a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Kontak</a>
            </nav>

            <!-- Hamburger Button (Mobile) -->
            <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </header>

    <!-- SIDEBAR MENU (Mobile) -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

    <aside id="sidebar-menu" class="fixed top-0 left-0 w-64 h-full bg-white shadow-md transform -translate-x-full transition-transform duration-300 z-50 p-5">
        <!-- Close Button -->
        <button id="menu-close" class="absolute top-4 right-4 text-gray-700">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Sidebar Links -->
        <nav class="mt-8 space-y-4">
            <a href="#" class="block text-gray-700 hover:text-blue-500 text-lg">Beranda</a>
            <a href="#" class="block text-gray-700 hover:text-blue-500 text-lg">Tentang</a>
            <a href="#" class="block text-gray-700 hover:text-blue-500 text-lg">Layanan</a>
            <a href="#" class="block text-gray-700 hover:text-blue-500 text-lg">Kontak</a>
        </nav>
    </aside>

    <!-- CONTENT -->
    <div class="mt-20 text-center p-10">
        <h1 class="text-3xl font-bold text-gray-800">Selamat Datang!</h1>
        <p class="text-gray-600 mt-2">Coba buka menu hamburger untuk melihat animasi slide-in.</p>
    </div>

    <!-- CONTAINER -->
    <div class="mt-20 container mx-auto px-4">
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Daftar Kota Populer</h1>

        <!-- GRID CONTAINER -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mb-5 gap-6">

            <!-- CARD KOTA -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/400x250/?jakarta" alt="Jakarta" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-800">Jakarta</h2>
                    <p class="text-gray-600 mt-2">Ibu kota Indonesia yang terkenal dengan gedung pencakar langitnya.</p>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/400x250/?bandung" alt="Bandung" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-800">Bandung</h2>
                    <p class="text-gray-600 mt-2">Kota Kembang dengan udara sejuk dan kuliner yang lezat.</p>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/400x250/?surabaya" alt="Surabaya" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-800">Surabaya</h2>
                    <p class="text-gray-600 mt-2">Kota Pahlawan dengan sejarah yang kaya dan pusat bisnis besar.</p>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/400x250/?yogyakarta" alt="Yogyakarta" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-800">Yogyakarta</h2>
                    <p class="text-gray-600 mt-2">Kota budaya dengan Keraton dan Candi Borobudur.</p>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/400x250/?bali" alt="Bali" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-800">Bali</h2>
                    <p class="text-gray-600 mt-2">Pulau Dewata yang terkenal dengan pantai dan budayanya.</p>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/400x250/?medan" alt="Medan" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-800">Medan</h2>
                    <p class="text-gray-600 mt-2">Kota terbesar di Sumatra dengan kuliner khasnya, seperti Bika Ambon.</p>
                </div>
            </div>

        </div>
    </div>

    <script>
        const menuToggle = document.getElementById("menu-toggle");
        const menuClose = document.getElementById("menu-close");
        const sidebar = document.getElementById("sidebar-menu");
        const overlay = document.getElementById("sidebar-overlay");

        menuToggle.addEventListener("click", () => {
            sidebar.classList.remove("-translate-x-full");
            overlay.classList.remove("hidden");
        });

        menuClose.addEventListener("click", () => {
            sidebar.classList.add("-translate-x-full");
            overlay.classList.add("hidden");
        });

        overlay.addEventListener("click", () => {
            sidebar.classList.add("-translate-x-full");
            overlay.classList.add("hidden");
        });
    </script>

</body>

</html>