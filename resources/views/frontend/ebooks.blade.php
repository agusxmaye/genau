@extends('frontend.layout')

@section('title', 'E-Book & Modul')

@section('content')
<div class="bg-neo-lime border-b-4 border-black py-10 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter bg-white inline-block px-4 py-2 border-4 border-black shadow-neo transform rotate-1">
            Modul E-Book
        </h1>
        <p class="mt-6 text-xl font-bold max-w-2xl bg-black text-white p-3 border-2 border-neo-pink">
            Kumpulan modul pembelajaran interaktif dan panduan praktikum.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse($ebooks as $post)
            <div class="bg-white border-4 border-black p-6 shadow-[8px_8px_0px_rgba(0,0,0,1)] hover:-translate-y-2 hover:shadow-[12px_12px_0px_rgba(0,0,0,1)] transition flex flex-col h-full relative">
                <div class="absolute -top-4 -right-4 bg-neo-yellow border-4 border-black w-12 h-12 flex items-center justify-center transform rotate-12 shadow-neo">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </div>
                
                @if($post->thumbnail)
                    <div class="mb-4 border-2 border-black aspect-square overflow-hidden bg-gray-100 flex items-center justify-center p-4">
                        <img src="{{ asset('storage/'.$post->thumbnail) }}" alt="{{ $post->title }}" class="max-w-full max-h-full object-contain" loading="lazy">
                    </div>
                @else
                    <div class="mb-4 border-2 border-black aspect-square overflow-hidden bg-neo-cyan flex items-center justify-center p-4">
                        <span class="font-black text-4xl uppercase text-white drop-shadow-[2px_2px_0px_rgba(0,0,0,1)]">E-Book</span>
                    </div>
                @endif
                
                <h3 class="text-2xl font-black mb-4 uppercase line-clamp-2">{{ $post->title }}</h3>
                <p class="font-bold text-gray-700 mb-6 flex-grow line-clamp-3">
                    {{ Str::limit(strip_tags($post->content), 100) }}
                </p>
                <a href="{{ route('post.show', $post) }}" class="inline-block text-center bg-neo-purple px-4 py-2 font-black uppercase border-2 border-black shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition w-full text-white tracking-widest">
                    Buka Modul
                </a>
            </div>
        @empty
            <div class="col-span-3 text-center py-10 bg-gray-100 border-4 border-black border-dashed">
                <p class="font-bold text-xl">Belum ada modul yang dipublikasikan.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-12">
        {{ $ebooks->links() }}
    </div>
</div>
@endsection
