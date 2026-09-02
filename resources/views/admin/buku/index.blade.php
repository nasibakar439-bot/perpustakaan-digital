<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Buku Perpustakaan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="mb-4">
                    <a href="{{ route('admin.buku.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        + Tambah Buku Baru
                    </a>
                </div>

                <!-- Notifikasi kalau sukses nambah/edit/hapus -->
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="w-full text-left border-collapse mt-4">
                    <thead>
                        <tr>
                            <th class="border-b p-2">Kode Buku</th>
                            <th class="border-b p-2">Judul</th>
                            <th class="border-b p-2">Pengarang</th>
                            <th class="border-b p-2">Penerbit</th>
                            <th class="border-b p-2">Stok</th>
                            <th class="border-b p-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bukus as $buku)
                        <tr>
                            <td class="border-b p-2">{{ $buku->kode_buku }}</td>
                            <td class="border-b p-2">{{ $buku->judul }}</td>
                            <td class="border-b p-2">{{ $buku->pengarang }}</td>
                            <td class="border-b p-2">{{ $buku->penerbit }}</td>
                            <td class="border-b p-2">{{ $buku->stok }}</td>
                            <td class="border-b p-2">
                                <a href="{{ route('admin.buku.edit', $buku->id) }}" class="text-blue-500 hover:underline mr-2">Edit</a>
                                <form action="{{ route('admin.buku.destroy', $buku->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Yakin mau hapus buku ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="border-b p-2 text-center text-gray-500">Belum ada data buku.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</x-app-layout>