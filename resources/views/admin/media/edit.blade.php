<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-black leading-tight tracking-tight uppercase">
            {{ __('Edit Media Belajar') }}
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

                <form action="{{ route('admin.media.update', $medium) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-6">
                        <label class="block font-bold uppercase mb-2">Judul Video</label>
                        <input type="text" name="title" class="w-full border-3 border-black focus:ring-0 focus:shadow-neo transition p-3" value="{{ old('title', $medium->title) }}" required>
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold uppercase mb-2">URL YouTube</label>
                        <input type="url" name="youtube_url" class="w-full border-3 border-black focus:ring-0 focus:shadow-neo transition p-3" value="{{ old('youtube_url', $medium->youtube_url) }}" required>
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold uppercase mb-2">Deskripsi</label>
                        <textarea name="description" rows="4" class="w-full border-3 border-black focus:ring-0 focus:shadow-neo transition p-3">{{ old('description', $medium->description) }}</textarea>
                    </div>

                    <div class="flex justify-end space-x-4 border-t-3 border-black pt-6">
                        <a href="{{ route('admin.media.index') }}" class="px-6 py-3 font-bold border-3 border-black hover:bg-gray-100 transition">Batal</a>
                        <button type="submit" class="bg-neo-cyan px-6 py-3 font-bold border-3 border-black shadow-neo hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
