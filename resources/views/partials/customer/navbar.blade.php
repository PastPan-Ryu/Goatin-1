<nav class="fixed top-0 w-full z-50 border-stone-200 dark:border-slate-800 shadow-[0_4px_20px_rgba(74,124,89,0.1)] bg-white/90 dark:bg-slate-900/90 backdrop-blur-md">
    <div class="flex items-center justify-between px-6 py-4 max-w-[1280px] mx-auto w-full">
        <a href="{{ route('customer.dashboard') }}" class="text-2xl font-bold text-emerald-800 dark:text-emerald-400 tracking-tight font-h3 text-h3 text-primary">
            Goatin
        </a>
        <div class="hidden md:flex gap-6 items-center">
            <a class="font-manrope text-sm font-medium {{ request()->routeIs('customer.dashboard') ? 'text-emerald-800 border-b-2 border-emerald-800 pb-1' : 'text-stone-600 hover:text-emerald-700' }} transition-colors font-label-sm text-label-sm" href="{{ route('customer.dashboard') }}">Dashboard</a>
            <a class="font-manrope text-sm font-medium {{ request()->routeIs('customer.monitoring') ? 'text-emerald-800 border-b-2 border-emerald-800 pb-1' : 'text-stone-600 hover:text-emerald-700' }} transition-colors font-label-sm text-label-sm" href="{{ route('customer.monitoring') }}">Monitoring</a>
            <a class="font-manrope text-sm font-medium {{ request()->routeIs('customer.produk') ? 'text-emerald-800 border-b-2 border-emerald-800 pb-1' : 'text-stone-600 hover:text-emerald-700' }} transition-colors font-label-sm text-label-sm" href="{{ route('customer.produk') }}">Produk</a>
            <a class="font-manrope text-sm font-medium {{ request()->routeIs('customer.profile') ? 'text-emerald-800 border-b-2 border-emerald-800 pb-1' : 'text-stone-600 hover:text-emerald-700' }} transition-colors font-label-sm text-label-sm" href="{{ route('customer.profile') }}">Profile</a>
        </div>
        <div class="flex items-center gap-4">
            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit" class="font-manrope text-sm font-medium text-stone-600 dark:text-stone-400 hover:text-emerald-700 dark:hover:text-emerald-300 transition-colors font-label-sm text-label-sm">Logout</button>
            </form>
        </div>
    </div>
</nav>
