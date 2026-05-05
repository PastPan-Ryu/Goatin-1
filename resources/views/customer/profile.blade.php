@extends('layouts.customer')

@section('title', 'Profil Pengguna')

@section('content')
<main class="flex-grow pt-[88px] pb-stack-xl max-w-container-max mx-auto w-full px-margin-mobile md:px-margin-desktop">
    <div class="max-w-md mx-auto mt-stack-lg">
        <!-- Profile Card -->
        <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-gutter shadow-[0_4px_20px_rgba(74,124,89,0.05)] hover:shadow-[0_4px_20px_rgba(74,124,89,0.1)] transition-shadow">
            <div class="flex flex-col items-center text-center">
                <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-surface-container-low mb-stack-md">
                    <img alt="User profile" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=400&q=80"/>
                </div>
                <h1 class="font-h3 text-h3 text-on-surface mb-stack-xs">{{ auth()->user()->name ?? 'Budi Santoso' }}</h1>
                <p class="font-body-md text-body-md text-on-surface-variant mb-stack-lg">Peternak Utama</p>
                <div class="w-full flex flex-col gap-stack-sm mb-stack-lg text-left">
                    <div class="flex items-center gap-stack-sm text-on-surface-variant font-body-md text-body-md">
                        <span class="material-symbols-outlined text-primary">mail</span>
                        {{ auth()->user()->email ?? 'budi.santoso@goatin.com' }}
                    </div>
                    <div class="flex items-center gap-stack-sm text-on-surface-variant font-body-md text-body-md">
                        <span class="material-symbols-outlined text-primary">location_on</span>
                        Peternakan Harapan, Jawa Barat
                    </div>
                </div>
                <button class="w-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm py-3 rounded-lg hover:bg-secondary-fixed-dim transition-colors flex justify-center items-center gap-2">
                    <span class="material-symbols-outlined" style="font-size: 18px;">edit</span>
                    Edit Profil
                </button>
            </div>
        </div>
    </div>
</main>
@endsection
