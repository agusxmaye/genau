@extends('frontend.layout')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<div class="bg-neo-cyan border-b-4 border-black py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-10 right-10 w-24 h-24 bg-neo-pink border-4 border-black rounded-full shadow-neo transform rotate-12"></div>
    <div class="absolute bottom-10 left-10 w-32 h-32 bg-neo-yellow border-4 border-black shadow-neo transform -rotate-6"></div>

    <div class="max-w-4xl mx-auto text-center relative z-10">
        <h1 class="text-5xl md:text-7xl font-black uppercase tracking-tighter mb-6 bg-white inline-block px-4 py-2 border-4 border-black shadow-neo transform -rotate-2">
            Belajar Jaringan<br>Lebih Mudah!
        </h1>
        <p class="text-xl md:text-2xl font-bold mb-10 bg-black text-white inline-block px-6 py-3 border-2 border-neo-pink transform rotate-1">
            Simulasi, Modul, dan Video Tutorial lengkap untuk siswa SMK.
        </p>
        <div>
            <a href="{{ route('articles') }}" class="inline-block bg-neo-lime px-8 py-4 text-xl font-black uppercase border-4 border-black shadow-[8px_8px_0px_rgba(0,0,0,1)] hover:translate-x-2 hover:translate-y-2 hover:shadow-none transition">
                Mulai Belajar
            </a>
        </div>
    </div>
</div>

<!-- Highlight Konten Terbaru -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="flex justify-between items-end mb-12 border-b-4 border-black pb-4">
        <h2 class="text-4xl font-black uppercase">Materi Terbaru</h2>
        <a href="{{ route('articles') }}" class="font-bold border-b-2 border-black hover:bg-neo-yellow px-2 transition">Lihat Semua</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse($latestPosts as $post)
            <div class="bg-white border-4 border-black p-6 shadow-[8px_8px_0px_rgba(0,0,0,1)] hover:-translate-y-2 hover:shadow-[12px_12px_0px_rgba(0,0,0,1)] transition flex flex-col h-full">
                <div class="mb-4">
                    <span class="inline-block px-3 py-1 bg-{{ $post->type == 'artikel' ? 'neo-pink' : 'neo-purple' }} border-2 border-black font-bold uppercase text-sm">
                        {{ $post->type }}
                    </span>
                </div>
                <h3 class="text-2xl font-black mb-4 uppercase line-clamp-2">{{ $post->title }}</h3>
                <p class="font-bold text-gray-700 mb-6 flex-grow line-clamp-3">
                    {{ Str::limit(strip_tags($post->content), 100) }}
                </p>
                <a href="{{ route('post.show', $post) }}" class="inline-block text-center bg-neo-yellow px-4 py-2 font-black uppercase border-2 border-black shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition w-full">
                    Baca Selengkapnya
                </a>
            </div>
        @empty
            <div class="col-span-3 text-center py-10 bg-gray-100 border-4 border-black border-dashed">
                <p class="font-bold text-xl">Belum ada materi yang dipublikasikan.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
