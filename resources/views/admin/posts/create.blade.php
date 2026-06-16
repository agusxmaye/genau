<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-black leading-tight tracking-tight uppercase">
            {{ __('Tambah Artikel/Modul') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border-3 border-black shadow-neo p-8">
                
                @if ($errors->any())
                    <div class="bg-red-400 border-3 border-black p-4 mb-6 font-bold">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-6">
                        <label class="block font-bold uppercase mb-2">Judul</label>
                        <input type="text" name="title" class="w-full border-3 border-black focus:ring-0 focus:shadow-neo transition p-3" value="{{ old('title') }}" required>
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold uppercase mb-2">Tipe</label>
                        <select name="type" class="w-full border-3 border-black focus:ring-0 focus:shadow-neo transition p-3" required>
                            <option value="artikel" {{ old('type') == 'artikel' ? 'selected' : '' }}>Artikel</option>
                            <option value="modul" {{ old('type') == 'modul' ? 'selected' : '' }}>Modul E-Book</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold uppercase mb-2">Konten</label>
                        <textarea name="content" rows="6" class="w-full border-3 border-black focus:ring-0 focus:shadow-neo transition p-3" required>{{ old('content') }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold uppercase mb-2">Thumbnail (Opsional)</label>
                        <input type="file" name="thumbnail" class="w-full border-3 border-black p-2 bg-gray-50 cursor-pointer file:mr-4 file:py-2 file:px-4 file:border-0 file:bg-neo-cyan file:text-black file:font-bold file:border-r-3 file:border-black file:hover:bg-neo-yellow transition">
                    </div>

                    <div class="flex justify-end space-x-4 border-t-3 border-black pt-6">
                        <a href="{{ route('admin.posts.index') }}" class="px-6 py-3 font-bold border-3 border-black hover:bg-gray-100 transition">Batal</a>
                        <button type="submit" class="bg-neo-lime px-6 py-3 font-bold border-3 border-black shadow-neo hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
