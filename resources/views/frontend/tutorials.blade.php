@extends('frontend.layout')

@section('title', 'Tutorial Video')

@section('content')
<div class="bg-neo-purple border-b-4 border-black py-10 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter bg-white inline-block px-4 py-2 border-4 border-black shadow-neo transform -rotate-2">
            Tutorial Video
        </h1>
        <p class="mt-6 text-xl font-bold max-w-2xl bg-neo-yellow text-black p-3 border-4 border-black shadow-neo">
            Kumpulan video tutorial pembelajaran interaktif berbasis YouTube.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($tutorials as $video)
            @php
                // Extract video ID from youtube URL
                preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video->youtube_url, $match);
                $youtube_id = $match[1] ?? null;
            @endphp
            
            <div class="bg-white border-4 border-black p-4 shadow-[8px_8px_0px_rgba(0,0,0,1)] hover:-translate-y-2 hover:shadow-[12px_12px_0px_rgba(0,0,0,1)] transition flex flex-col h-full">
                <div class="mb-4 border-4 border-black aspect-video bg-black overflow-hidden relative">
                    @if($youtube_id)
                        <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/{{ $youtube_id }}" title="{{ $video->title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    @else
                        <div class="flex items-center justify-center w-full h-full text-white font-bold">Video tidak valid</div>
                    @endif
                </div>
                
                <h3 class="text-xl font-black mb-2 uppercase line-clamp-2">{{ $video->title }}</h3>
                <p class="font-bold text-gray-700 mb-4 text-sm flex-grow">
                    {{ $video->description }}
                </p>
            </div>
        @empty
            <div class="col-span-full text-center py-10 bg-gray-100 border-4 border-black border-dashed">
                <p class="font-bold text-xl">Belum ada video tutorial yang dipublikasikan.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-12">
        {{ $tutorials->links() }}
    </div>
</div>
@endsection
