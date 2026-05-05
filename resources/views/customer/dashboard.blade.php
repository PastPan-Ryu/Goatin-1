@extends('layouts.customer')

@section('title', 'Dashboard Artikel Perawatan')

@section('content')
<main class="flex-1 mt-[80px] max-w-container-max mx-auto w-full px-margin-mobile md:px-margin-desktop py-stack-lg">
    <!-- Header Section -->
    <header class="mb-stack-xl text-center max-w-3xl mx-auto">
        <h1 class="font-h1 text-h1 text-primary mb-stack-sm">Panduan Perawatan Cerdas</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant">Temukan artikel dan tips terbaru untuk menjaga kesehatan dan produktivitas ternak kambing Anda dengan metode stewardship alami.</p>
    </header>
    
    <!-- Featured Article (Bento Style) -->
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-gutter mb-stack-xl">
        <article class="col-span-1 lg:col-span-2 relative rounded-xl overflow-hidden group shadow-[0_4px_20px_rgba(74,124,89,0.1)] transition-all duration-300 hover:shadow-[0_8px_30px_rgba(74,124,89,0.2)] bg-surface-container-lowest border border-surface-variant h-[400px]">
            <div class="absolute inset-0 z-0">
                <img alt="Featured Goat" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://images.unsplash.com/photo-1524063220888-eb2fcbd1160a?auto=format&fit=crop&w=800&q=80"/>
                <div class="absolute inset-0 bg-gradient-to-t from-on-secondary-fixed/90 via-on-secondary-fixed/40 to-transparent"></div>
            </div>
            <div class="absolute bottom-0 left-0 p-gutter z-10 w-full">
                <span class="inline-block px-3 py-1 rounded-full bg-primary-container/90 text-on-primary-container font-caption text-caption mb-stack-sm backdrop-blur-sm">Panduan Utama</span>
                <h2 class="font-h2 text-h2 text-on-primary mb-stack-xs">Nutrisi Optimal untuk Kambing Etawa</h2>
                <p class="font-body-md text-body-md text-surface-container-low/90 max-w-2xl line-clamp-2">Pelajari cara menyeimbangkan pakan kambing Anda untuk mendukung produksi susu tinggi dan kesehatan jangka panjang melalui bahan-bahan alami.</p>
            </div>
        </article>
        
        <!-- Side Bento Cards -->
        <div class="col-span-1 flex flex-col gap-gutter">
            <article class="flex-1 rounded-xl p-gutter bg-secondary-container/30 border border-secondary/10 flex flex-col justify-center relative overflow-hidden group hover:bg-secondary-container/50 transition-colors">
                <div class="absolute -right-4 -top-4 text-primary/10 transition-transform group-hover:scale-110">
                    <span class="material-symbols-outlined text-[100px] filled">pets</span>
                </div>
                <span class="inline-block px-3 py-1 rounded-full bg-tertiary-container/20 text-on-tertiary-container font-caption text-caption mb-stack-sm self-start text-tertiary">Tips Kilat</span>
                <h3 class="font-h3 text-h3 text-on-surface mb-stack-xs relative z-10">Tanda Dehidrasi pada Kambing</h3>
                <p class="font-body-md text-body-md text-on-surface-variant relative z-10">Kenali gejala awal kekurangan cairan sebelum menjadi masalah serius yang mengancam keselamatan ternak.</p>
            </article>
            <article class="flex-1 rounded-xl p-gutter bg-primary/5 border border-primary/10 flex flex-col justify-center relative overflow-hidden group hover:bg-primary/10 transition-colors">
                <div class="absolute -right-4 -bottom-4 text-primary/10 transition-transform group-hover:scale-110">
                    <span class="material-symbols-outlined text-[100px] filled">monitor_heart</span>
                </div>
                <span class="inline-block px-3 py-1 rounded-full bg-primary-container/20 text-primary-container font-caption text-caption mb-stack-sm self-start text-primary">Monitoring</span>
                <h3 class="font-h3 text-h3 text-on-surface mb-stack-xs relative z-10">Membaca Grafik Pertumbuhan</h3>
                <p class="font-body-md text-body-md text-on-surface-variant relative z-10">Cara memaksimalkan fitur Goatin untuk memantau ritme penambahan berat badan kambing Anda.</p>
            </article>
        </div>
    </section>
    
    <!-- Article Grid -->
    <section>
        <div class="flex justify-between items-center mb-stack-lg">
            <h2 class="font-h2 text-h2 text-primary">Artikel Terbaru</h2>
            <button class="font-label-sm text-label-sm text-secondary hover:text-primary transition-colors flex items-center gap-1">
                Lihat Semua <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
            <!-- Card 1 -->
            <article class="bg-surface-container-lowest rounded-xl overflow-hidden border border-surface-variant shadow-[0_4px_20px_rgba(74,124,89,0.05)] hover:shadow-[0_4px_20px_rgba(74,124,89,0.15)] transition-all duration-300 flex flex-col h-full group">
                <div class="h-48 overflow-hidden relative">
                    <img alt="Goat Resting" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://images.unsplash.com/photo-1582239328225-83e843ba0cb1?auto=format&fit=crop&w=800&q=80"/>
                    <div class="absolute top-3 left-3">
                        <span class="px-2 py-1 bg-surface/90 text-primary font-caption text-caption rounded-full backdrop-blur-sm border border-surface-variant">Kesehatan</span>
                    </div>
                </div>
                <div class="p-4 flex flex-col flex-1">
                    <h3 class="font-h3 text-h3 text-on-surface mb-stack-xs text-lg line-clamp-2">Pentingnya Kandang yang Bersih bagi Imunitas Kambing</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm mb-stack-md line-clamp-3 flex-1">Penelitian terbaru menunjukkan hubungan langsung antara sanitasi kandang dan ketahanan kambing terhadap penyakit umum seperti kembung.</p>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-surface-variant">
                        <span class="font-caption text-caption text-outline">5 min baca</span>
                        <button class="text-primary hover:text-secondary transition-colors">
                            <span class="material-symbols-outlined">bookmark_border</span>
                        </button>
                    </div>
                </div>
            </article>
            
            <!-- Card 2 -->
            <article class="bg-surface-container-lowest rounded-xl overflow-hidden border border-surface-variant shadow-[0_4px_20px_rgba(74,124,89,0.05)] hover:shadow-[0_4px_20px_rgba(74,124,89,0.15)] transition-all duration-300 flex flex-col h-full group">
                <div class="h-48 overflow-hidden relative">
                    <img alt="Goat Grazing" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://images.unsplash.com/photo-1511216113906-8f56bb201b13?auto=format&fit=crop&w=800&q=80"/>
                    <div class="absolute top-3 left-3">
                        <span class="px-2 py-1 bg-surface/90 text-tertiary font-caption text-caption rounded-full backdrop-blur-sm border border-surface-variant">Aktivitas</span>
                    </div>
                </div>
                <div class="p-4 flex flex-col flex-1">
                    <h3 class="font-h3 text-h3 text-on-surface mb-stack-xs text-lg line-clamp-2">Rutinitas Merumput: Lebih dari Sekadar Makan</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm mb-stack-md line-clamp-3 flex-1">Eksplorasi sensorik selama merumput sangat penting untuk mengurangi tingkat stres pada kambing. Panduan ini menjelaskan alasannya.</p>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-surface-variant">
                        <span class="font-caption text-caption text-outline">4 min baca</span>
                        <button class="text-primary hover:text-secondary transition-colors">
                            <span class="material-symbols-outlined">bookmark_border</span>
                        </button>
                    </div>
                </div>
            </article>
            
            <!-- Card 3 -->
            <article class="bg-surface-container-lowest rounded-xl overflow-hidden border border-surface-variant shadow-[0_4px_20px_rgba(74,124,89,0.05)] hover:shadow-[0_4px_20px_rgba(74,124,89,0.15)] transition-all duration-300 flex flex-col h-full group">
                <div class="h-48 overflow-hidden relative bg-secondary-container/20 flex items-center justify-center p-6">
                    <div class="relative w-full h-full rounded-lg border-2 border-dashed border-secondary/30 flex flex-col items-center justify-center bg-white/50 backdrop-blur-sm">
                        <span class="material-symbols-outlined text-4xl text-secondary mb-2">eco</span>
                        <span class="font-label-sm text-label-sm text-secondary text-center">Seri Keberlanjutan</span>
                    </div>
                    <div class="absolute top-3 left-3">
                        <span class="px-2 py-1 bg-surface/90 text-secondary font-caption text-caption rounded-full backdrop-blur-sm border border-surface-variant">Lingkungan</span>
                    </div>
                </div>
                <div class="p-4 flex flex-col flex-1">
                    <h3 class="font-h3 text-h3 text-on-surface mb-stack-xs text-lg line-clamp-2">Memilih Pakan Hijauan Ramah Lingkungan</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm mb-stack-md line-clamp-3 flex-1">Panduan memilih hijauan lokal yang bernutrisi tinggi untuk ternak sekaligus menjaga kelestarian ekosistem sekitar.</p>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-surface-variant">
                        <span class="font-caption text-caption text-outline">6 min baca</span>
                        <button class="text-primary hover:text-secondary transition-colors">
                            <span class="material-symbols-outlined">bookmark_border</span>
                        </button>
                    </div>
                </div>
            </article>
            
            <!-- Card 4 -->
            <article class="bg-surface-container-lowest rounded-xl overflow-hidden border border-surface-variant shadow-[0_4px_20px_rgba(74,124,89,0.05)] hover:shadow-[0_4px_20px_rgba(74,124,89,0.15)] transition-all duration-300 flex flex-col h-full group">
                <div class="h-48 overflow-hidden relative">
                    <img alt="Sheep Farm" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://images.unsplash.com/photo-1484557052118-f32bd25b45b5?auto=format&fit=crop&w=800&q=80"/>
                    <div class="absolute top-3 left-3">
                        <span class="px-2 py-1 bg-surface/90 text-error font-caption text-caption rounded-full backdrop-blur-sm border border-surface-variant">Pencegahan</span>
                    </div>
                </div>
                <div class="p-4 flex flex-col flex-1">
                    <h3 class="font-h3 text-h3 text-on-surface mb-stack-xs text-lg line-clamp-2">Jadwal Vaksinasi PMK &amp; Pemeriksaan Rutin</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm mb-stack-md line-clamp-3 flex-1">Jangan lewatkan perlindungan dasar ternak Anda. Integrasikan jadwal vaksin PMK ini ke dalam sistem pemantauan Goatin.</p>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-surface-variant">
                        <span class="font-caption text-caption text-outline">3 min baca</span>
                        <button class="text-primary hover:text-secondary transition-colors">
                            <span class="material-symbols-outlined">bookmark_border</span>
                        </button>
                    </div>
                </div>
            </article>
        </div>
    </section>
</main>
@endsection
