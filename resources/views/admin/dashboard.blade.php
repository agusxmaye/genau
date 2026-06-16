<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-black leading-tight tracking-tight uppercase">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-neo-cyan border-3 border-black p-6 shadow-neo transform transition hover:-translate-y-1 hover:shadow-neo-lg">
                    <h3 class="text-xl font-bold uppercase mb-2">Total Users</h3>
                    <p class="text-4xl font-extrabold">{{ $usersCount }}</p>
                </div>
                
                <!-- Card 2 -->
                <div class="bg-neo-pink border-3 border-black p-6 shadow-neo transform transition hover:-translate-y-1 hover:shadow-neo-lg">
                    <h3 class="text-xl font-bold uppercase mb-2">Total Artikel/Modul</h3>
                    <p class="text-4xl font-extrabold">{{ $postsCount }}</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-neo-lime border-3 border-black p-6 shadow-neo transform transition hover:-translate-y-1 hover:shadow-neo-lg">
                    <h3 class="text-xl font-bold uppercase mb-2">Total Media</h3>
                    <p class="text-4xl font-extrabold">{{ $mediaCount }}</p>
                </div>
            </div>
            
            <div class="mt-8">
                <div class="bg-white border-3 border-black shadow-neo p-6">
                    <h3 class="text-2xl font-bold uppercase mb-4 border-b-3 border-black pb-2">Navigasi Cepat</h3>
                    <div class="flex space-x-4">
                        <a href="{{ route('admin.posts.index') }}" class="bg-neo-yellow px-6 py-3 font-bold border-3 border-black shadow-neo hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition">Kelola Artikel</a>
                        <a href="{{ route('admin.media.index') }}" class="bg-neo-purple px-6 py-3 font-bold border-3 border-black shadow-neo hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition">Kelola Media</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
