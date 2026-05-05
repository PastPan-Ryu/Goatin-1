@extends('layouts.admin')

@section('title', 'Product Catalog')

@section('content')
<div class="max-w-container-max mx-auto space-y-stack-xl">
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-stack-md">
        <div>
            <h1 class="font-h1 text-h1 text-on-surface">Product Catalog</h1>
            <p class="font-body-md text-body-md text-on-surface-variant mt-stack-xs">Manage inventory, monitor pricing, and control marketplace visibility.</p>
        </div>
        <div class="flex items-center gap-stack-sm">
            <button class="px-6 py-2.5 rounded-lg border border-outline-variant text-on-surface hover:bg-surface-container transition-colors font-label-sm text-label-sm flex items-center gap-2">
                <span class="material-symbols-outlined text-[20px]">filter_list</span> Filter
            </button>
            <button class="px-6 py-2.5 rounded-lg bg-primary text-on-primary hover:bg-primary-container shadow-[0_4px_12px_rgba(74,124,89,0.2)] transition-all font-label-sm text-label-sm flex items-center gap-2">
                <span class="material-symbols-outlined text-[20px]">add</span> Add Product
            </button>
        </div>
    </div>
    
    <!-- Bento Grid Metrics -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
        <!-- Metric 1 -->
        <div class="bg-surface-container-lowest rounded-xl p-gutter border border-surface-container shadow-[0_2px_8px_rgba(74,124,89,0.03)] flex items-start justify-between">
            <div>
                <p class="font-caption text-caption text-on-surface-variant uppercase tracking-wider">Total Products</p>
                <p class="font-h2 text-h2 text-on-surface mt-stack-xs">{{ number_format($totalProducts) }}</p>
            </div>
            <div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center text-primary">
                <span class="material-symbols-outlined">inventory_2</span>
            </div>
        </div>
        <!-- Metric 2 -->
        <div class="bg-primary-container rounded-xl p-gutter border border-primary shadow-[0_4px_16px_rgba(74,124,89,0.15)] flex items-start justify-between">
            <div>
                <p class="font-caption text-caption text-on-primary-container/80 uppercase tracking-wider">Active Listings</p>
                <p class="font-h2 text-h2 text-on-primary-container mt-stack-xs">{{ number_format($activeListings) }}</p>
            </div>
            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center text-on-primary-container">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">storefront</span>
            </div>
        </div>
        <!-- Metric 3 -->
        <div class="bg-surface-container-lowest rounded-xl p-gutter border border-tertiary-container shadow-[0_2px_8px_rgba(74,124,89,0.03)] flex items-start justify-between">
            <div>
                <p class="font-caption text-caption text-tertiary uppercase tracking-wider">Low Stock Alerts</p>
                <p class="font-h2 text-h2 text-on-surface mt-stack-xs">14</p>
            </div>
            <div class="w-12 h-12 rounded-full bg-error-container flex items-center justify-center text-error">
                <span class="material-symbols-outlined">warning</span>
            </div>
        </div>
    </div>
    
    <!-- Main Catalog Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-gutter">
        @forelse ($produks as $produk)
        <div class="group bg-surface-container-lowest rounded-xl border border-surface-container overflow-hidden hover:shadow-[0_8px_24px_rgba(74,124,89,0.12)] hover:border-primary-fixed transition-all duration-300 flex flex-col">
            <div class="relative h-48 w-full p-2">
                @if($produk->foto)
                    <img alt="{{ $produk->nama_produk }}" class="w-full h-full object-cover rounded-lg" src="{{ asset('storage/' . $produk->foto) }}"/>
                @else
                    <div class="w-full h-full bg-surface-container rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-4xl text-on-surface-variant">image</span>
                    </div>
                @endif
                <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full border border-surface-container flex items-center gap-1">
                    <span class="w-2 h-2 rounded-full bg-primary block"></span>
                    <span class="font-caption text-caption text-on-surface">Listed</span>
                </div>
            </div>
            <div class="p-stack-md flex-1 flex flex-col">
                <div class="flex items-center justify-between mb-stack-xs">
                    <span class="px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-caption text-caption">{{ $produk->inventaris ? 'Livestock' : 'Product' }}</span>
                    <div class="flex gap-2">
                        <button onclick="openEditProdukModal({{ $produk }})" class="p-1 text-on-surface-variant hover:text-primary transition-colors">
                            <span class="material-symbols-outlined text-sm">edit</span>
                        </button>
                        <form action="{{ route('admin.katalog.destroy', $produk->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus produk dari katalog?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-1 text-on-surface-variant hover:text-error transition-colors">
                                <span class="material-symbols-outlined text-sm">delete</span>
                            </button>
                        </form>
                    </div>
                </div>
                <h3 class="font-h3 text-h3 text-on-surface mb-1">{{ $produk->nama_produk }}</h3>
                <p class="font-body-md text-body-md text-on-surface-variant flex-1 line-clamp-2">{{ $produk->spesifikasi ?: 'Tidak ada deskripsi.' }}</p>
                <div class="mt-stack-md flex items-end justify-between">
                    <div class="font-h2 text-h2 text-primary">Rp {{ number_format($produk->harga, 0, ',', '.') }}</div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full py-12 text-center bg-surface-container-lowest rounded-xl border border-surface-variant">
            <span class="material-symbols-outlined text-4xl text-on-surface-variant mb-2">inventory_2</span>
            <p class="font-body-md text-body-md text-on-surface-variant">Belum ada produk di katalog.</p>
        </div>
        @endforelse
    </div>
    
    <!-- Pagination -->
    <div class="flex justify-center pt-stack-md pb-stack-xl">
        {{ $produks->links() }}
    </div>

    <!-- Modal Edit Produk -->
    <div id="editProdukModal" class="fixed inset-0 z-50 hidden bg-black/50 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-surface-container-lowest rounded-2xl w-full max-w-lg max-h-[90vh] overflow-y-auto shadow-2xl border border-surface-variant">
            <div class="p-6 border-b border-surface-variant flex items-center justify-between sticky top-0 bg-surface-container-lowest z-10">
                <h3 class="font-h3 text-h3 text-on-surface">Edit Produk</h3>
                <button onclick="document.getElementById('editProdukModal').classList.add('hidden')" class="text-on-surface-variant hover:text-error transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <form id="editProdukForm" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <label class="block font-label-sm text-label-sm text-on-surface-variant mb-1">Harga (Rp)</label>
                    <input type="number" name="harga" id="edit_produk_harga" required min="0" class="w-full px-3 py-2 rounded-lg border border-outline-variant focus:border-primary bg-surface-bright text-on-surface">
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm text-on-surface-variant mb-1">Spesifikasi Ternak</label>
                    <textarea name="spesifikasi" id="edit_produk_spesifikasi" rows="3" class="w-full px-3 py-2 rounded-lg border border-outline-variant focus:border-primary bg-surface-bright text-on-surface"></textarea>
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm text-on-surface-variant mb-1">Foto Ternak (Biarkan kosong jika tidak ingin mengubah)</label>
                    <input type="file" name="foto" accept="image/*" class="w-full px-3 py-2 rounded-lg border border-outline-variant focus:border-primary bg-surface-bright text-on-surface">
                </div>
                <div class="pt-4 flex justify-end gap-3 border-t border-surface-variant">
                    <button type="button" onclick="document.getElementById('editProdukModal').classList.add('hidden')" class="px-4 py-2 font-label-sm text-label-sm text-on-surface-variant hover:bg-surface-container rounded-lg transition-colors">Batal</button>
                    <button type="submit" class="px-4 py-2 font-label-sm text-label-sm bg-primary text-on-primary hover:bg-primary-container rounded-lg transition-colors shadow-sm">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openEditProdukModal(produk) {
            document.getElementById('editProdukForm').action = `/admin/katalog/${produk.id}`;
            document.getElementById('edit_produk_harga').value = Number(produk.harga);
            document.getElementById('edit_produk_spesifikasi').value = produk.spesifikasi || '';
            document.getElementById('editProdukModal').classList.remove('hidden');
        }
    </script>
</div>
@endsection
