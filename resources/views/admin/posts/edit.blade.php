<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-black leading-tight tracking-tight uppercase">
            {{ __('Edit Artikel/Modul') }}
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

                <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-6">
                        <label class="block font-bold uppercase mb-2">Judul</label>
                        <input type="text" name="title" class="w-full border-3 border-black focus:ring-0 focus:shadow-neo transition p-3" value="{{ old('title', $post->title) }}" required>
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold uppercase mb-2">Tipe</label>
                        <select name="type" class="w-full border-3 border-black focus:ring-0 focus:shadow-neo transition p-3" required>
                            <option value="artikel" {{ old('type', $post->type) == 'artikel' ? 'selected' : '' }}>Artikel</option>
                            <option value="modul" {{ old('type', $post->type) == 'modul' ? 'selected' : '' }}>Modul E-Book</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold uppercase mb-2">Konten</label>
                        <textarea name="content" rows="6" class="w-full border-3 border-black focus:ring-0 focus:shadow-neo transition p-3" required>{{ old('content', $post->content) }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold uppercase mb-2">Thumbnail Baru (Opsional)</label>
                        <input type="file" name="thumbnail" class="w-full border-3 border-black p-2 bg-gray-50 cursor-pointer file:mr-4 file:py-2 file:px-4 file:border-0 file:bg-neo-cyan file:text-black file:font-bold file:border-r-3 file:border-black file:hover:bg-neo-yellow transition">
                        @if($post->thumbnail)
                            <p class="mt-2 text-sm font-bold text-gray-500">Gambar saat ini: <a href="{{ asset('storage/'.$post->thumbnail) }}" target="_blank" class="text-blue-500 underline">Lihat</a></p>
                        @endif
                    </div>

                    <div class="flex justify-end space-x-4 border-t-3 border-black pt-6">
                        <a href="{{ route('admin.posts.index') }}" class="px-6 py-3 font-bold border-3 border-black hover:bg-gray-100 transition">Batal</a>
                        <button type="submit" class="bg-neo-yellow px-6 py-3 font-bold border-3 border-black shadow-neo hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
