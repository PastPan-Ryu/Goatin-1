<!-- SideNavBar -->
<nav class="fixed left-0 top-0 h-full flex flex-col z-40 bg-surface-container-lowest border-r border-surface-variant w-64 shadow-[4px_0_24px_rgba(74,124,89,0.05)] hidden md:flex">
    <div class="p-6 border-b border-surface-variant">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary font-bold">G</div>
            <div>
                <h1 class="font-h3 text-h3 text-primary-container">Goatin</h1>
                <p class="font-caption text-caption text-on-surface-variant">Stewardship Portal</p>
            </div>
        </div>
    </div>
    
    <div class="flex-1 overflow-y-auto py-4">
        <ul class="space-y-1 px-3">
            <!-- Dashboard -->
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg font-label-sm text-label-sm transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'text-primary-container bg-surface-container border-r-4 border-primary-container translate-x-1' : 'text-on-surface-variant hover:text-primary-container hover:bg-surface-container' }}" href="{{ route('admin.dashboard') }}">
                    <span class="material-symbols-outlined {{ request()->routeIs('admin.dashboard') ? 'fill' : '' }}" data-icon="dashboard">dashboard</span>
                    Dashboard
                </a>
            </li>
            
            <!-- Accounts -->
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg font-label-sm text-label-sm transition-all duration-200 {{ request()->routeIs('admin.accounts.*') ? 'text-primary-container bg-surface-container border-r-4 border-primary-container translate-x-1' : 'text-on-surface-variant hover:text-primary-container hover:bg-surface-container' }}" href="{{ route('admin.accounts.index') ?? '#' }}">
                    <span class="material-symbols-outlined {{ request()->routeIs('admin.accounts.*') ? 'fill' : '' }}" data-icon="person">person</span>
                    Accounts
                </a>
            </li>
            
            <!-- Inventory -->
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg font-label-sm text-label-sm transition-all duration-200 {{ request()->routeIs('admin.inventaris.*') ? 'text-primary-container bg-surface-container border-r-4 border-primary-container translate-x-1' : 'text-on-surface-variant hover:text-primary-container hover:bg-surface-container' }}" href="{{ route('admin.inventaris.index') }}">
                    <span class="material-symbols-outlined {{ request()->routeIs('admin.inventaris.*') ? 'fill' : '' }}" data-icon="inventory_2">inventory_2</span>
                    Inventory
                </a>
            </li>
            
            <!-- Medical Records -->
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg font-label-sm text-label-sm transition-all duration-200 {{ request()->routeIs('admin.rekam-medis.*') ? 'text-primary-container bg-surface-container border-r-4 border-primary-container translate-x-1' : 'text-on-surface-variant hover:text-primary-container hover:bg-surface-container' }}" href="{{ route('admin.rekam-medis.index') }}">
                    <span class="material-symbols-outlined {{ request()->routeIs('admin.rekam-medis.*') ? 'fill' : '' }}" data-icon="medical_services">medical_services</span>
                    Medical Records
                </a>
            </li>
            
            <!-- Articles -->
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg font-label-sm text-label-sm transition-all duration-200 {{ request()->routeIs('admin.artikel.*') ? 'text-primary-container bg-surface-container border-r-4 border-primary-container translate-x-1' : 'text-on-surface-variant hover:text-primary-container hover:bg-surface-container' }}" href="{{ route('admin.artikel.index') }}">
                    <span class="material-symbols-outlined {{ request()->routeIs('admin.artikel.*') ? 'fill' : '' }}" data-icon="description">description</span>
                    Articles
                </a>
            </li>
            
            <!-- Financial Reports -->
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg font-label-sm text-label-sm transition-all duration-200 {{ request()->routeIs('admin.keuangan.*') ? 'text-primary-container bg-surface-container border-r-4 border-primary-container translate-x-1' : 'text-on-surface-variant hover:text-primary-container hover:bg-surface-container' }}" href="{{ route('admin.keuangan.index') }}">
                    <span class="material-symbols-outlined {{ request()->routeIs('admin.keuangan.*') ? 'fill' : '' }}" data-icon="payments">payments</span>
                    Financial Reports
                </a>
            </li>
            
            <!-- Catalog -->
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg font-label-sm text-label-sm transition-all duration-200 {{ request()->routeIs('admin.katalog.*') ? 'text-primary-container bg-surface-container border-r-4 border-primary-container translate-x-1' : 'text-on-surface-variant hover:text-primary-container hover:bg-surface-container' }}" href="{{ route('admin.katalog.index') }}">
                    <span class="material-symbols-outlined {{ request()->routeIs('admin.katalog.*') ? 'fill' : '' }}" data-icon="menu_book">menu_book</span>
                    Catalog
                </a>
            </li>
        </ul>
    </div>
    
    <div class="p-4 border-t border-surface-variant">
        <ul class="space-y-1">
            <li>
                <a class="flex items-center gap-3 px-4 py-2 rounded-lg text-on-surface-variant font-label-sm text-label-sm hover:text-primary-container hover:bg-surface-container transition-colors" href="#">
                    <span class="material-symbols-outlined" data-icon="help">help</span>
                    Support
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 rounded-lg text-on-surface-variant font-label-sm text-label-sm hover:text-error hover:bg-error-container transition-colors">
                        <span class="material-symbols-outlined" data-icon="logout">logout</span>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>
