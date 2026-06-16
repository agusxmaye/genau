@extends('frontend.layout')

@section('title', $post->title)

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="bg-white border-4 border-black shadow-[12px_12px_0px_rgba(0,0,0,1)] p-6 md:p-10 mb-8 relative">
        <div class="mb-6 flex items-center space-x-4">
            <span class="inline-block px-4 py-2 bg-{{ $post->type == 'artikel' ? 'neo-pink' : 'neo-purple' }} border-2 border-black font-black uppercase text-sm shadow-[4px_4px_0px_rgba(0,0,0,1)] transform -rotate-2">
                {{ $post->type }}
            </span>
            <span class="font-bold text-gray-500">{{ $post->created_at->format('d M Y') }}</span>
        </div>

        <h1 class="text-4xl md:text-5xl font-black uppercase mb-8 leading-tight">
            {{ $post->title }}
        </h1>

        @if($post->thumbnail)
            <div class="mb-10 border-4 border-black aspect-video overflow-hidden shadow-neo">
                <img src="{{ asset('storage/'.$post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-full object-cover" loading="lazy">
            </div>
        @endif

        <div class="prose prose-lg max-w-none prose-h2:font-black prose-h2:uppercase prose-h3:font-bold prose-p:font-bold prose-p:text-gray-800 prose-a:text-blue-600">
            {!! nl2br(e($post->content)) !!}
        </div>
    </div>

    <div class="text-center">
        <a href="{{ $post->type == 'artikel' ? route('articles') : route('ebooks') }}" class="inline-block bg-neo-yellow px-6 py-3 font-black uppercase border-4 border-black shadow-[6px_6px_0px_rgba(0,0,0,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition">
            Kembali ke {{ $post->type == 'artikel' ? 'Artikel' : 'E-Book' }}
        </a>
    </div>
</div>
@endsection
