<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-black leading-tight tracking-tight uppercase">
            {{ __('Kelola Artikel & Modul') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border-3 border-black shadow-neo p-6">
                <div class="mb-6 flex justify-between items-center border-b-3 border-black pb-4">
                    <h3 class="text-xl font-bold uppercase">Daftar Konten</h3>
                    <a href="{{ route('admin.posts.create') }}" class="bg-neo-yellow px-4 py-2 font-bold border-3 border-black shadow-neo hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition">Tambah Baru</a>
                </div>

                @if(session('success'))
                    <div class="bg-neo-lime border-3 border-black p-4 mb-6 font-bold">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-neo-cyan border-b-3 border-black">
                                <th class="p-3 border-r-3 border-black font-bold uppercase">ID</th>
                                <th class="p-3 border-r-3 border-black font-bold uppercase">Judul</th>
                                <th class="p-3 border-r-3 border-black font-bold uppercase">Tipe</th>
                                <th class="p-3 font-bold uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts as $post)
                            <tr class="border-b-3 border-black hover:bg-gray-50">
                                <td class="p-3 border-r-3 border-black font-bold">{{ $post->id }}</td>
                                <td class="p-3 border-r-3 border-black">{{ $post->title }}</td>
                                <td class="p-3 border-r-3 border-black">
                                    <span class="px-2 py-1 bg-{{ $post->type == 'artikel' ? 'neo-pink' : 'neo-purple' }} border-2 border-black text-sm font-bold uppercase">{{ $post->type }}</span>
                                </td>
                                <td class="p-3 flex space-x-2">
                                    <a href="{{ route('admin.posts.edit', $post) }}" class="bg-neo-yellow px-3 py-1 font-bold border-2 border-black shadow-[2px_2px_0px_rgba(0,0,0,1)] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition">Edit</a>
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Yakin hapus?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-400 px-3 py-1 font-bold border-2 border-black shadow-[2px_2px_0px_rgba(0,0,0,1)] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="p-6 text-center font-bold">Belum ada data.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-6">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
