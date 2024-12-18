<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>

<body class="flex flex-col min-h-screen bg-gradient-to-b from-gray-900 via-blue-900 to-black text-gray-200">
    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 bg-gradient-to-b from-gray-900 via-blue-900 to-black z-1 shadow-lg navbar-transition">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-3xl font-bold text-white">tOKO Wahyu</span>
            </a>
            <button id="nav-toggle" data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-white rounded-lg md:hidden hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span class="sr-only">Buka menu utama</span>
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div id="navbar-dropdown" class="hidden w-full md:block md:w-auto">
                <ul
                    class="flex flex-col md:flex-row md:space-x-8 bg-white md:bg-transparent rounded-lg p-4 md:p-0 text-gray-800 md:text-white">
                    <li><a href="{{ route('categories.index') }}"
                            class="block py-2 px-3 rounded hover:bg-blue-700 transition duration-300">Kategori</a></li>
                    <li><a href="{{ route('products.index') }}"
                            class="block py-2 px-3 bg-blue-800 rounded text-white md:bg-transparent md:text-white transition duration-300">Produk</a>
                    </li>
                    <li><a href="{{ route('inventoryLog.index') }}"
                            class="block py-2 px-3 rounded hover:bg-blue-700 transition duration-300">Log Inventaris</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div id="main-content" class="container mx-auto mt-16 md:mt-24 flex-grow px-4 content">
        @if (session('success'))
            <div class="bg-blue-200 text-blue-900 border border-blue-300 px-4 py-3 rounded relative mb-4 shadow-md flex items-center"
                role="alert">
                {{ session('success') }}
                <button type="button" class="ml-auto text-blue-900 hover:text-blue-500"
                    onclick="this.parentElement.style.display='none';">
                    <span class="material-icons">close</span>
                </button>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-center py-6 mt-8 shadow-lg">
        <p class="text-gray-300">&copy; 2024 Happy Shopping. All rights reserved.</p>
    </footer>
    <script>
        // Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        const mainContent = document.getElementById('main-content');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('nav-active');
            } else {
                navbar.classList.remove('nav-active');
            }
        });

        // Load Content with Animation
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                mainContent.classList.add('content-loaded');
            }, 100);
        });

        // Toggle Menu for Mobile
        document.getElementById('nav-toggle').addEventListener('click', () => {
            const navbarDropdown = document.getElementById('navbar-dropdown');
            navbarDropdown.classList.toggle('hidden');
        });
    </script>
</body>

</html>
