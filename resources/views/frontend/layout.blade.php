<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Genau E-Learning') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-neo-bg text-black selection:bg-neo-pink selection:text-black min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-neo-yellow border-b-3 border-black sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <a href="{{ route('home') }}" class="font-extrabold text-3xl uppercase tracking-tighter hover:text-white transition">
                    GENAU
                </a>
                
                <div class="hidden md:flex space-x-6 font-bold text-lg">
                    <a href="{{ route('home') }}" class="hover:bg-neo-cyan px-3 py-2 border-2 border-transparent hover:border-black transition {{ request()->routeIs('home') ? 'bg-neo-cyan border-black shadow-neo' : '' }}">Beranda</a>
                    <a href="{{ route('articles') }}" class="hover:bg-neo-pink px-3 py-2 border-2 border-transparent hover:border-black transition {{ request()->routeIs('articles') ? 'bg-neo-pink border-black shadow-neo' : '' }}">Artikel</a>
                    <a href="{{ route('ebooks') }}" class="hover:bg-neo-lime px-3 py-2 border-2 border-transparent hover:border-black transition {{ request()->routeIs('ebooks') ? 'bg-neo-lime border-black shadow-neo' : '' }}">E-Book</a>
                    <a href="{{ route('tutorials') }}" class="hover:bg-neo-purple px-3 py-2 border-2 border-transparent hover:border-black transition {{ request()->routeIs('tutorials') ? 'bg-neo-purple border-black shadow-neo' : '' }}">Tutorial</a>
                    <a href="{{ route('about') }}" class="hover:bg-white px-3 py-2 border-2 border-transparent hover:border-black transition {{ request()->routeIs('about') ? 'bg-white border-black shadow-neo' : '' }}">Tentang</a>
                </div>

                <div class="hidden md:flex items-center space-x-4">
                    @auth
                        <a href="{{ route('dashboard') }}" class="bg-white border-3 border-black px-4 py-2 font-bold shadow-neo hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="bg-white border-3 border-black px-4 py-2 font-bold shadow-neo hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition">Login</a>
                    @endauth
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button border-2 border-black p-2 bg-white hover:bg-neo-pink transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="mobile-menu hidden md:hidden border-t-3 border-black bg-white font-bold">
            <a href="{{ route('home') }}" class="block px-4 py-3 border-b-2 border-black hover:bg-neo-cyan">Beranda</a>
            <a href="{{ route('articles') }}" class="block px-4 py-3 border-b-2 border-black hover:bg-neo-pink">Artikel</a>
            <a href="{{ route('ebooks') }}" class="block px-4 py-3 border-b-2 border-black hover:bg-neo-lime">E-Book</a>
            <a href="{{ route('tutorials') }}" class="block px-4 py-3 border-b-2 border-black hover:bg-neo-purple">Tutorial</a>
            <a href="{{ route('about') }}" class="block px-4 py-3 border-b-2 border-black hover:bg-white">Tentang</a>
            @auth
                <a href="{{ route('dashboard') }}" class="block px-4 py-3 bg-neo-yellow">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="block px-4 py-3 bg-neo-yellow">Login</a>
            @endauth
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white mt-20 border-t-4 border-neo-pink py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold uppercase tracking-widest text-neo-yellow mb-4">GENAU</h2>
            <p class="font-bold text-lg mb-6">Pembelajaran Simulasi Jaringan SMK - Neobrutalism Edition</p>
            <div class="flex justify-center space-x-6">
                <a href="#" class="hover:text-neo-cyan transition font-bold underline">Instagram</a>
                <a href="#" class="hover:text-neo-pink transition font-bold underline">YouTube</a>
                <a href="#" class="hover:text-neo-lime transition font-bold underline">GitHub</a>
            </div>
            <p class="mt-8 text-gray-400 font-bold">&copy; {{ date('Y') }} Genau E-Learning. All rights reserved.</p>
        </div>
    </footer>

    <script>
        const btn = document.querySelector('button.mobile-menu-button');
        const menu = document.querySelector('.mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
