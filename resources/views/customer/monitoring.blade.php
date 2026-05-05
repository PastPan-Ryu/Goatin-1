@extends('layouts.customer')

@section('title', 'Monitoring Pesanan')

@section('content')
<main class="flex-grow pt-[88px] pb-stack-xl px-margin-mobile md:px-margin-desktop max-w-[1280px] mx-auto w-full">
    <!-- Header Section -->
    <header class="mb-stack-lg flex flex-col sm:flex-row justify-between items-start sm:items-center gap-stack-md mt-stack-md">
        <div>
            <h1 class="font-h1 text-h1 text-on-surface mb-stack-xs">Daftar Pesanan Anda</h1>
            <p class="font-body-md text-body-md text-on-surface-variant">Lihat detail hewan, pakan, dan perlengkapan yang telah Anda beli.</p>
        </div>
    </header>
    
    <!-- Bento Grid Layout -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
        <!-- Purchased Items Grid -->
        <div class="col-span-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
            <!-- Item 1: Goat -->
            <div class="bg-surface-container-lowest border border-surface-variant rounded-xl p-6 shadow-ambient">
                <div class="flex items-center gap-4 mb-4">
                    <div class="p-3 bg-secondary-container text-on-secondary-container rounded-lg">
                        <span class="material-symbols-outlined">pets</span>
                    </div>
                    <div>
                        <h3 class="font-h3 text-h3 text-on-surface">Kambing Etawa</h3>
                        <p class="font-caption text-caption text-on-surface-variant">Kategori: Hewan Ternak</p>
                    </div>
                </div>
                <div class="space-y-2 border-t border-surface-variant pt-4">
                    <div class="flex justify-between font-label-sm text-label-sm">
                        <span class="text-on-surface-variant">Jumlah</span>
                        <span class="text-on-surface">1 Ekor</span>
                    </div>
                    <div class="flex justify-between font-label-sm text-label-sm">
                        <span class="text-on-surface-variant">Status</span>
                        <span class="text-primary">Tersedia</span>
                    </div>
                </div>
            </div>
            
            <!-- Item 2: Feed -->
            <div class="bg-surface-container-lowest border border-surface-variant rounded-xl p-6 shadow-ambient">
                <div class="flex items-center gap-4 mb-4">
                    <div class="p-3 bg-secondary-container text-on-secondary-container rounded-lg">
                        <span class="material-symbols-outlined">grass</span>
                    </div>
                    <div>
                        <h3 class="font-h3 text-h3 text-on-surface">Pakan Organik</h3>
                        <p class="font-caption text-caption text-on-surface-variant">Kategori: Pakan</p>
                    </div>
                </div>
                <div class="space-y-2 border-t border-surface-variant pt-4">
                    <div class="flex justify-between font-label-sm text-label-sm">
                        <span class="text-on-surface-variant">Berat</span>
                        <span class="text-on-surface">50 Kg</span>
                    </div>
                    <div class="flex justify-between font-label-sm text-label-sm">
                        <span class="text-on-surface-variant">Status</span>
                        <span class="text-primary">Dikemas</span>
                    </div>
                </div>
            </div>
            
            <!-- Item 3: Equipment -->
            <div class="bg-surface-container-lowest border border-surface-variant rounded-xl p-6 shadow-ambient">
                <div class="flex items-center gap-4 mb-4">
                    <div class="p-3 bg-secondary-container text-on-secondary-container rounded-lg">
                        <span class="material-symbols-outlined">inventory_2</span>
                    </div>
                    <div>
                        <h3 class="font-h3 text-h3 text-on-surface">Tempat Minum Otomatis</h3>
                        <p class="font-caption text-caption text-on-surface-variant">Kategori: Perlengkapan</p>
                    </div>
                </div>
                <div class="space-y-2 border-t border-surface-variant pt-4">
                    <div class="flex justify-between font-label-sm text-label-sm">
                        <span class="text-on-surface-variant">Jumlah</span>
                        <span class="text-on-surface">2 Unit</span>
                    </div>
                    <div class="flex justify-between font-label-sm text-label-sm">
                        <span class="text-on-surface-variant">Status</span>
                        <span class="text-primary">Siap Kirim</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Order History Section -->
    <section class="mt-stack-xl">
        <h2 class="font-h2 text-h2 text-on-surface mb-stack-md">Riwayat Pesanan</h2>
        <div class="bg-surface-container-lowest border border-surface-variant rounded-xl shadow-ambient overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-surface-container border-b border-surface-variant">
                        <tr>
                            <th class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant">Order ID</th>
                            <th class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant">Produk</th>
                            <th class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant">Tanggal</th>
                            <th class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant">Total</th>
                            <th class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-variant">
                        <tr class="hover:bg-surface-bright transition-colors">
                            <td class="px-6 py-4 font-body-md text-on-surface">#GTN-001</td>
                            <td class="px-6 py-4 font-body-md text-on-surface">Kambing Jawa</td>
                            <td class="px-6 py-4 font-body-md text-on-surface-variant">12 Mei 2024</td>
                            <td class="px-6 py-4 font-body-md text-on-surface font-semibold">Rp 2.500.000</td>
                            <td class="px-6 py-4">
                                <span class="text-primary font-label-sm text-label-sm">Selesai</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-bright transition-colors">
                            <td class="px-6 py-4 font-body-md text-on-surface">#GTN-002</td>
                            <td class="px-6 py-4 font-body-md text-on-surface">Pakan Ternak Pro</td>
                            <td class="px-6 py-4 font-body-md text-on-surface-variant">05 Mei 2024</td>
                            <td class="px-6 py-4 font-body-md text-on-surface font-semibold">Rp 450.000</td>
                            <td class="px-6 py-4">
                                <span class="text-primary font-label-sm text-label-sm">Selesai</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-bright transition-colors">
                            <td class="px-6 py-4 font-body-md text-on-surface">#GTN-003</td>
                            <td class="px-6 py-4 font-body-md text-on-surface">Vitamin Suplemen</td>
                            <td class="px-6 py-4 font-body-md text-on-surface-variant">28 April 2024</td>
                            <td class="px-6 py-4 font-body-md text-on-surface font-semibold">Rp 125.000</td>
                            <td class="px-6 py-4">
                                <span class="text-primary font-label-sm text-label-sm">Selesai</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
@endsection
