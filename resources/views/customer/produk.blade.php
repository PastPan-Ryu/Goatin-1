@extends('layouts.customer')

@section('title', 'Katalog Produk')

@section('content')
<main class="flex-grow pt-[88px] pb-stack-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">
    <!-- Header Section -->
    <header class="mb-stack-lg flex flex-col md:flex-row md:items-end justify-between gap-stack-md mt-stack-md">
        <div>
            <h1 class="font-h1 text-h1 text-primary mb-stack-xs">Katalog Ternak</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant">Pilih bibit kambing dan domba berkualitas tinggi untuk kebutuhan peternakan Anda.</p>
        </div>
        <!-- Filters & Search -->
        <div class="flex gap-stack-sm flex-wrap">
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
                <input class="pl-10 pr-4 py-2 rounded-lg bg-surface-container-lowest border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body-md text-body-md text-on-surface w-full md:w-64" placeholder="Cari kambing..." type="text"/>
            </div>
            <button class="flex items-center gap-2 px-4 py-2 rounded-lg bg-surface-container-lowest border border-outline-variant hover:ambient-shadow transition-all text-on-surface font-label-sm text-label-sm">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">filter_list</span>
                Filter
            </button>
        </div>
    </header>
    
    <!-- Categories / Chips -->
    <div class="flex gap-stack-sm overflow-x-auto pb-stack-sm mb-stack-lg scrollbar-hide">
        <button class="whitespace-nowrap px-4 py-2 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm transition-all">Semua Jenis</button>
        <button class="whitespace-nowrap px-4 py-2 rounded-full bg-surface-container-highest text-on-surface-variant hover:bg-surface-variant font-label-sm text-label-sm transition-all border border-outline-variant">Kambing Etawa</button>
        <button class="whitespace-nowrap px-4 py-2 rounded-full bg-surface-container-highest text-on-surface-variant hover:bg-surface-variant font-label-sm text-label-sm transition-all border border-outline-variant">Kambing Boer</button>
        <button class="whitespace-nowrap px-4 py-2 rounded-full bg-surface-container-highest text-on-surface-variant hover:bg-surface-variant font-label-sm text-label-sm transition-all border border-outline-variant">Kambing PE</button>
        <button class="whitespace-nowrap px-4 py-2 rounded-full bg-surface-container-highest text-on-surface-variant hover:bg-surface-variant font-label-sm text-label-sm transition-all border border-outline-variant">Domba Garut</button>
    </div>
    
    <!-- Product Grid (Bento Style approach) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-gutter">
        @forelse ($produks as $produk)
        <div class="group bg-surface-container-lowest rounded-xl border border-surface-variant hover:ambient-shadow transition-all duration-300 overflow-hidden flex flex-col">
            <div class="h-48 bg-surface-variant relative overflow-hidden flex items-center justify-center">
                @if($produk->foto)
                    <img alt="{{ $produk->nama_produk }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="{{ asset('storage/' . $produk->foto) }}"/>
                @else
                    <span class="material-symbols-outlined text-4xl text-on-surface-variant">image</span>
                @endif
            </div>
            <div class="p-4 flex flex-col flex-grow">
                @if($produk->inventaris)
                    <span class="font-caption text-caption text-secondary mb-1">{{ $produk->inventaris->gender }} • {{ $produk->inventaris->umur }} Bulan</span>
                @else
                    <span class="font-caption text-caption text-secondary mb-1">Produk Umum</span>
                @endif
                <h3 class="font-body-lg text-body-lg text-on-surface font-semibold mb-2 line-clamp-2">{{ $produk->nama_produk }}</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-4">{{ $produk->spesifikasi }}</p>
                <div class="mt-auto flex items-center justify-between">
                    <span class="font-h3 text-h3 text-tertiary">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span>
                    <button aria-label="Tambah ke keranjang" class="p-2 bg-surface-container-high hover:bg-tertiary hover:text-on-tertiary text-on-surface rounded-lg transition-colors">
                        <span class="material-symbols-outlined">add_shopping_cart</span>
                    </button>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full py-12 text-center bg-surface-container-lowest rounded-xl border border-surface-variant">
            <span class="material-symbols-outlined text-4xl text-on-surface-variant mb-2">storefront</span>
            <p class="font-body-md text-body-md text-on-surface-variant">Belum ada produk yang tersedia.</p>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="flex justify-center pt-stack-md">
        {{ $produks->links() }}
    </div>
</main>
@endsection
