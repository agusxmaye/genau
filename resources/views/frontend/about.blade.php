@extends('frontend.layout')

@section('title', 'Tentang Kami')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="bg-white border-4 border-black shadow-[12px_12px_0px_rgba(0,0,0,1)] p-8 md:p-12 relative overflow-hidden">
        <!-- Decoration -->
        <div class="absolute -top-10 -right-10 w-32 h-32 bg-neo-pink border-4 border-black rounded-full mix-blend-multiply"></div>
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-neo-yellow border-4 border-black mix-blend-multiply"></div>

        <div class="relative z-10">
            <h1 class="text-5xl font-black uppercase mb-8 border-b-4 border-black pb-4 inline-block">Tentang Genau</h1>
            
            <div class="prose prose-lg max-w-none font-bold space-y-6 text-gray-800">
                <p class="text-2xl leading-relaxed bg-neo-cyan p-4 border-2 border-black inline-block">
                    Genau adalah platform E-Learning berbasis web yang dirancang khusus untuk membantu siswa SMK memahami Simulasi Jaringan dengan lebih interaktif dan menyenangkan.
                </p>

                <p>
                    Sistem ini dibangun dengan konsep desain UI/UX <strong>Neobrutalism</strong> yang modern, mengedepankan warna-warna tegas dan layout yang clean untuk meningkatkan engagement siswa saat belajar.
                </p>

                <div class="bg-gray-100 p-6 border-4 border-black mt-8 transform rotate-1">
                    <h3 class="text-2xl font-black uppercase mb-4">Fitur Utama:</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Artikel & Materi up-to-date</li>
                        <li>Modul E-Book untuk praktikum</li>
                        <li>Integrasi Video Tutorial YouTube</li>
                        <li>Platform yang responsif dan ringan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
